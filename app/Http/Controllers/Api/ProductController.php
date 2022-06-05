<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
//        return $this->sendResponse(ProductResource::collection($products), 'Products retrieved In Successfully');
    }
    public function userProducts($id)
    {
    $products = Product::where('user_id' , $id)->get();
    return $this->sendResponse(ProductResource::collection($products), 'Posts retrieved Successfully!' );

    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);
        if ($validator->fails()){
            return $this->sendError('Validate error', $validator->errors());
        }
        $user = Auth::user();
        $input['user_id']=$user->id;
        $product = Product::create($input);
        return $this->sendResponse(new ProductResource($product), 'Product added Successfully!');

    }

    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Post not found!' );
        }
        return $this->sendResponse(new ProductResource($product), 'Post retireved Successfully!' );
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);
        if ($validator->fails()){
            return $this->sendError('Validate error', $validator->errors());
        }
        $product = Product::find($id);
        if ( $product->user_id != Auth::id()) {
            return $this->sendError('you dont have rights' , $validator->errors());
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->details = $request->details;
        $product->save();

        return $this->sendResponse(new ProductResource($product), 'Product added Successfully!');
    }

    public function destroy(Product $product)
    {
        $errorMessage = [];
        if($product->user_id != Auth::id()){
            return $this->sendError('you dont have rights' , $errorMessage);
        }
        $product->delete();
        return $this->sendResponse(new ProductResource($product), 'Post deleted Successfully!' );

    }
}
