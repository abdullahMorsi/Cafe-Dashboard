<x-layout>
    <x-side-links/>


    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">تحويل بنكي</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <!-- start form -->
        <form action="/bankPayment" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <label for="">اسم البنك المحول منه</label>
            <input name='sender_bank' type="text" placeholder="بنك الراجحي">

            <label for="">اسم البنك المحول اليه</label>
            <input name='receiver_bank' type="text" placeholder="بنك الراجحي">

            <label for="">اسم صاحب الحساب</label>
            <input name='account_holder' type="text" placeholder="احمد سمير">

            <label for="">رقم الحساب</label>
            <input name='sender_number' type="text" placeholder="123456789">

            <label for="">المبلغ المراد دفعه</label>
            <input name='transaction' type="text" placeholder="100 ريال سعودي">

            <label for="">صورة الايصال</label>
            <div class="image">
                <i class="fas fa-image"></i>
            </div>
            <input name='thumbnail' type="file" accept="image/*" onchange="loadFile(event)" id="hidden">
            <img id="output"/>
            <input type="submit" value="تأكيد" style="background-color: #f47321;
                                                        width: 22%;
                                                        height: 50px;
                                                        border-radius: 6px;
                                                        color: #fff;
                                                        font-weight: 700;
                                                        margin-top: 15px;
                                                        display: block;"/>

        </form>
        <!-- end form -->
    </div>
</x-layout>>
