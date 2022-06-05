<x-layout>
    <!-- end list of main links -->
<x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">المنتجات</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <div class="productContent">
            <div class="filters">

                <div class="filter1">
                        <p>اظهار عدد</p>
                        <select id="mylist" onchange="myFunction()" class='form-control'>
                        <option>12</option>
                        <option>100</option>
                        <option>1000</option>
                        </select>
                        <div class="icon6">
                            <i class="fas fa-chevron-down" style="font-size: 10px;"></i>
                        </div>
                </div>

                <div class="filter2">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="اكتب كلمة بحثك" title="Type in a name">
                    <div class="icon8">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

                <div class="filter3">
                    <p class="p2">فلتر حسب</p>
                        <select id="mylist2" onchange="myFunction()" class='form-control'>
                        <option>الاقدم</option>
                        <option>الاحدث</option>
                        </select>
                        <div class="icon9">
                            <i class="fas fa-chevron-down" style="font-size: 10px;"></i>
                        </div>
                </div>

                <button onclick="location.href='/products/create'"><i class="fas fa-plus" style="color:#fff"></i>اضافة منتج جديد </button>
            </div>
        </div>

{{--        items--}}
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ااسم النتج</th>
                    <th scope="col">سعر المنتج</th>
                    <th scope="col" style="width: 400px">استعادة/حذف</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->price }} IQD  </td>
                        <td>

                            <div class="row">

                                <div class="col-sm">
                                    <a  class="btn btn-warning" href="/product/restoreFromDatabase/{{$item->id}}"> استعادة </a>

                                </div>
                                <div class="col-sm">
                                    <a  class="btn btn-danger" href="/product/deleteFromDatabase/{{$item->id}}"> حذف العنصر نهائيا </a>

                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
            <div class="pagination">
        {{$products->links()}}

{{--                <p>اظهار الناتج 1 من 10</p>--}}

{{--                <nav aria-label="Page navigation example">--}}
{{--                    <ul class="pagination">--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                        <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
            </div>
        </div>

    </div>

</x-layout>
