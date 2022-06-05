<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc');
        if (request('search')){
            $products->where('name', 'like', '%'. request('search') . '%');
        }
        if (request('sort')=='ASC'){
            $products = Product::orderBy('created_at', 'asc');
        }
        return view('product.products', [
            'products' => $products->paginate(6)
        ]);
    }

    public function create()
    {
        return view('product.addProduct');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
            'thumbnail'=>'required|image'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move('uploads/products', $newPhotoPath);

        $attributes['thumbnail'] = 'uploads/products/'.$newPhotoPath;
        $attributes['user_id'] = auth()->id();

        Product::create($attributes);
        return redirect('/products')->with('success', 'Product Added Successfully');
    }

    public function show(Product $product)
    {
        return view('product.viewProduct', ['product'=>$product]);
    }

    public function edit(Product $product)
    {
        return view('product.editProduct', ['product'=>$product]);
    }

    public function update(Request $request, Product $product)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'details'=>'required',
        ]);
        if ($request->has('thumbnail')){
            $thumbnail = $request->thumbnail;
            $newPhotoPath = time().$thumbnail->getClientOriginalName();
            $thumbnail->move('uploads/products', $newPhotoPath);
            $attributes['thumbnail'] = 'uploads/products/'.$newPhotoPath;
        }
        $product->update($attributes);
        return redirect('/products')->with('success', 'تمت تعديل العنصر');
    }

    public function destroy(Product $product)
    {
        $product->forceDelete();
        return redirect('/products')->with('success', 'تم حذف العنصر');

    }
    public function softDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'تم ارسال العنصر الى المهملات');

    }
    public function trashedProducts()
    {
        return view('product.trash', [
            'products' => Product::onlyTrashed()->latest()->paginate(10)
        ]);
    }
    public function deleteForEver($id)
    {
        $product = Product::onlyTrashed()->find($id)->forceDelete();
        return redirect('/product/trash')->with('success','تم حذف العنصر نهائيا') ;
    }


    public function restoreSoftDelete($id)
    {
        $product = Product::onlyTrashed()->find($id)->restore();
        return redirect('/product/trash')->with('success','تم استرجاع العنصر') ;
    }
}
