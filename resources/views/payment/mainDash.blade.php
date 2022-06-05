<x-layout>
    <x-side-links/>


    <div class="content">
        <h3 style="font-size: 20px; font-weight: 600;">اختر الباقة المناسبة لك</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <!--start swiper -->

        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <!-- start concept of one slide -->
                <div class="swiper-slide">

                    <div class="subscription">
                        <div class="icon">
                            <img src="photos/icon.PNG" alt="icon" class="iconImage">
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color:#f47321">الباقة الشهرية</h4>
                        <p style="font-size: 11px; color:gray; text-align: center; margin-top: 12px;">
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه هذا النص هو مثال لنص يمكن ان يستبدل مكانه
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه  هذا النص هو مثال لنص يمكن ان يستبدل مكانههذا النص هو مثال لنص يمكن ان يستبدل مكانه
                        </p>
                        <p style="font-weight: 500;">سعر الباقة <span style="color:#f47321">500 </span> رس</p>
                        <input type="button" onclick="location.href='/paymentWay'" value="اشتراك">

                    </div>

                    <!-- end concept of one slide -->

                </div>

                <div class="swiper-slide">

                    <div class="subscription">
                        <div class="icon">
                            <img src="photos/icon.PNG" alt="icon" class="iconImage">
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color:#f47321">الباقة الشهرية</h4>
                        <p style="font-size: 11px; color:gray; text-align: center; margin-top: 12px;">
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه هذا النص هو مثال لنص يمكن ان يستبدل مكانه
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه  هذا النص هو مثال لنص يمكن ان يستبدل مكانههذا النص هو مثال لنص يمكن ان يستبدل مكانه
                        </p>
                        <p style="font-weight: 500;">سعر الباقة <span style="color:#f47321">500 </span> رس</p>
                        <input type="button" onclick="location.href='/paymentWay'" value="اشتراك">
                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="subscription">
                        <div class="icon">
                            <img src="photos/icon.PNG" alt="icon" class="iconImage">
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color:#f47321">الباقة الشهرية</h4>
                        <p style="font-size: 11px; color:gray; text-align: center; margin-top: 12px;">
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه هذا النص هو مثال لنص يمكن ان يستبدل مكانه
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه  هذا النص هو مثال لنص يمكن ان يستبدل مكانههذا النص هو مثال لنص يمكن ان يستبدل مكانه
                        </p>
                        <p style="font-weight: 500;">سعر الباقة <span style="color:#f47321">500 </span> رس</p>
                        <input type="button" onclick="location.href='/paymentWay'" value="اشتراك">
                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="subscription">
                        <div class="icon">
                            <img src="photos/icon.PNG" alt="icon" class="iconImage">
                        </div>
                        <h4 style="font-size: 18px; font-weight: 700; color:#f47321">الباقة الشهرية</h4>
                        <p style="font-size: 11px; color:gray; text-align: center; margin-top: 12px;">
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه هذا النص هو مثال لنص يمكن ان يستبدل مكانه
                            هذا النص هو مثال لنص يمكن ان يستبدل مكانه  هذا النص هو مثال لنص يمكن ان يستبدل مكانههذا النص هو مثال لنص يمكن ان يستبدل مكانه
                        </p>
                        <p style="font-weight: 500;">سعر الباقة <span style="color:#f47321">500 </span> رس</p>
                        <input type="button" onclick="location.href='/paymentWay'" value="اشتراك">

                    </div>

                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    });
    </script>
</x-layout>>
