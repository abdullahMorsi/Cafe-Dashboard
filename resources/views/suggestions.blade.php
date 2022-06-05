<x-layout>
    <x-side-links/>

    <div class="content" style="height: fit-content; top:67px">
        <h3 style="font-size: 20px; font-weight: 600;">الشكاوي والاقتراحات</h3>
        <p style="color:#b9b0b0;font-size: 14px; ">هذا النص هو مثال لنص يمكن ان يستبل مكانه</p>

        <div class="sugContent">
            @if(session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{session()->pull('success')}}
                </div>
            @endif
            <form action="/suggestions" method="post" class="form4">
                @csrf
                <label for="">نوع الرسالة</label>
                <select name="type" id="">
                    <option value="complaint">شكوى</option>
                    <option value="suggestion">اقتراح</option>
                </select>
                <i class="fas fa-sort-down" id="downArrow"></i>

                <label for="">عنوان الرسالة</label>
                <input name='title' type="text" placeholder="برجاء ادخال عنوان الرسالة">

                <label for="">محتوى الرسالة</label>
                <textarea name="content" placeholder="برجاء ادخال محتوى الرسالة"></textarea>

                <button class="add" type="submit">ارسال</button>
            </form>
        </div>

    </div>
    </x-layout>
