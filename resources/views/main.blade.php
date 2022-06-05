<x-layout>
    <x-side-links/>
        <div class="content" style="height: fit-content; top:67px">
            <h3 style="font-size: 20px; font-weight: 600;">ملخصك ل وش تبي بس</h3>
            <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

            <div class="cards">
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="card1 card3">

                            <div class="icon">
                                <i class="fas fa-box"></i>
                            </div>
                            <h4>{{$products->count()}}</h4>
                            <p>منتجات</p>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="card1 card2">

                            <div class="icon" style="background-color: #fef1e8;">
                                <i class="far fa-star" style="color: #f5853e;"></i>
                            </div>
                            <h4>{{$users->count()}}</h4>
                            <p>الاعضاء والمشرفين</p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="comments">
                <h4>اخر الاراء والتقييمات</h4>

                <!--  start concept for comment -->
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
                <!--  end concept for comment -->


            </div>

        </div>

</x-layout>

