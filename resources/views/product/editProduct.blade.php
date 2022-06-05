<x-layout>
    <x-side-links/>
    <!-- end list of main links -->


    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">تعديل المنتج</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">{{$product->name}}</p>

        <div class="addProduct">

            <form method="post" class="form2" action="/products/{{$product->id}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <label for="">اسم المنتج</label>
                <input type="text" name="name" value="{{$product->name}}">

                <label for="">السعر</label>
                <input type="text" name="price" value="{{$product->price}}">

                <label for="">وصف المنتج</label>
                <textarea name='details' >{{$product->details}}</textarea>

                <label for="">صورة المنتج</label>
                <div class="image">
                    <i class="fas fa-image"></i>
                    <input type="file" name="thumbnail" accept="image/*" onchange="loadFile(event)" id="hidden">

                    <span class="icon">
                        <i class="fas fa-plus"></i>
                    </span>
                </div>
                <img id="output"/>

                <button class="add" type="submit">اضافة</button>
            </form>
        </div>
    </div>

</x-layout>
