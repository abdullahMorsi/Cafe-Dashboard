<x-layout>
    <!-- end list of main links -->
<x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">المنتجات</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <div class="productContent">
            <div class="filters">



                <div class="filter2">
                    <form method="get" action="#">
                        <input type="text" name='search' value="{{request('search')}}" id="myInput" onkeyup="myFunction()" placeholder="اكتب كلمة بحثك" title="Type in a name">
                        <div class="icon8">
                            <i class="fas fa-search"></i>
                        </div>
                    </form>
                </div>

                <div class="filter3">
                    <p class="p2">فلتر حسب</p>
                        <select id="mylist2" onchange="location = this.value;" class='form-control'>
                            <option value="?sort=DESC">الاحدث </option>
                            <option {{request('sort')=='ASC'?'selected':""}} value="?sort=ASC">الاقدم </option>
                        </select>
                        <div class="icon9">
                            <i class="fas fa-chevron-down" style="font-size: 10px;"></i>
                        </div>
                </div>

                <button onclick="location.href='/products/create'"><i class="fas fa-plus" style="color:#fff"></i>اضافة منتج جديد </button>
            </div>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-primary" role="alert">
                {{session()->pull('success')}}
            </div>
        @endif
{{--        items--}}
        <div class="items">
            @foreach($products->chunk(2) as $row)
                <div class="row">
                    <div class="up">
                    @foreach($row as $product)
                            @if($loop->first)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="item item1" onclick="location.href='/products/{{$product->id}}'">

                                            <div class="image">
                                                <img src="{{$product->thumbnail}}" alt="late">
                                            </div>

                                            <div class="itemContent">
                                                <h4>{{$product->name}}</h4>
                                                <p class="text">{{$product->details}}</p>
                                                <p class="price">{{$product->price}} L.E</p>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                            @if($loop->last&& $loop->iteration != 1)
                                <div class="col-lg-6 col-md-12">
                                        <div class="item item2" onclick="location.href='/products/{{$product->id}}'">

                                            <div class="image">
                                                <img src="{{$product->thumbnail}}" alt="late">
                                            </div>

                                            <div class="itemContent">
                                                <h4>{{$product->name}}</h4>
                                                <p class="text">{{$product->details}}</p>
                                                <p class="price">{{$product->price}} L.E</p>
                                            </div>
                                        </div>
                                    </div>
                        @endif
                    @endforeach
                    </div>
                @endforeach
            </div>


            <div class="pagination">
                {{$products->links() }}


            </div>
        </div>

    </div>

</x-layout>
