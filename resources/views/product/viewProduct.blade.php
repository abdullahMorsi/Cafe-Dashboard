<x-layout>
    <!-- end list of main links -->
<x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">تفاصيل المنتج</h3>

        <div class="newProduct">

            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <img src="/{{$product->thumbnail}}" alt="Product">
                </div>
            </div>

            <h4>{{$product->name}}</h4>

            <p class='nPrice'>{{$product->price}} L.E</p>

            <p class="pDes">وصف المنتج</p>

            <div class="col-lg-7 col-md-12">
                <p class="pText">{{$product->details}}</p>

            </div>


            <div class="buttons">
                <a class="btn " style="margin-left:10px;background-color: #009a95; width: 150px; color:#ffffff" href="/products/{{$product->id}}/edit">تعديل</a>
                <a class="btn" style="margin-left:10px; background-color:#ffca2c;text-align: center; width: 150px; color:#888" href="/product/softDelete/{{$product->id}}">حذف مؤقتا</a>
                <form method="post" action="/products/{{$product->id}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type='submit' style="background-color: #ff4e54;">حذف نهائيا</button>

                </form>
            </div>
        </div>
    </div>

</x-layout>
