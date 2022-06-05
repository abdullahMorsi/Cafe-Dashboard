<x-layout>
    <x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">الاراء والتقييمات</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <div class="opContent">

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

                </div>

                <!-- sart concept of comment -->
            @foreach($opinions as $opinion)
                <div class="comment comment4">
                    <div class="image">
                        <img src="photos/personal.jpg" alt="personal">
                    </div>
                    <div class="commentInfo">
                        <p class="name">{{$opinion->user->name}}</p>

                        <div class="stars">
                            <i class="fas fa-star" style="color:#ffd800"></i>
                            <i class="fas fa-star" style="color:#ffd800"></i>
                            <i class="fas fa-star" style="color:#ffd800"></i>
                            <i class="fas fa-star" style="color:#ffd800"></i>
                            <i class="far fa-star" style="color:rgb(223, 197, 197)"></i>
                        </div>

                        <p class="text">{{$opinion->content}}</p>
                    </div>
                </div>
        @endforeach
                <!-- end concept of comment -->



{{--                <div class="pagination">--}}

{{--                    <p>اظهار الناتج 1 من 10</p>--}}

{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}

        </div>
    </div>
</x-layout>
