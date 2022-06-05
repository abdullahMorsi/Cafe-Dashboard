<x-layout>
    <!-- start main Screen -->
    <div class="start">
        <img src="photos/bg.jpg" alt="backgroundImage" class="bg" >
        <img src="photos/logo-removebg-preview.png" alt="logoImage" class="logo">


        <!-- start login form -->
        <form method="POST" action="/login" class="form">
            @csrf
            <h3>مرحبا بك !</h3>
            <p>هذا النص هو مثال حي لنص يمكن ان يستبدل مكانه</p>

            <label for="">اسم المستخدم</label>
            <input type="text" name="name" placeholder="برجاء ادخال اسم المستخدم">

            <label for="">كلمة المرور</label>
            <input type="password" name='password'placeholder="برجاء ادخال كلمة المرور">

            <div class="my-container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
                <p class="remember">تذكرني</p>
                <span class="forget"><a href="/resetPassword">هل نسيت كلمة المرور؟</a></span>
            </div>

            <input type="submit" value="دخول">

            <p class="login"><a href="/register">ليس لديك حساب ؟ <span class="new">تسجيل جديد</span></a></p>
        </form>
        <!-- end login form -->
    </div>
    <!-- end main Screen -->
</x-layout>
