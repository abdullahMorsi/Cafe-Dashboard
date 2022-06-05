<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="sass/main.css">
    <link rel="stylesheet" href="css/difColor.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/main.css">

    <title>دليل الجوهرة داشبورد</title>
</head>

<body  >

    <!-- start main Screen -->
    <div class="start">
        <img src="photos/bg.jpg" alt="backgroundImage" class="NLL" >
        <img src="photos/logo-removebg-preview.png" alt="logoImage" class="logo">


        <!-- start login form -->
        <form action="/register" method="POST" class="form" style="height: fit-content;">
            @csrf
            <h3>تسجيل حساب جديد </h3>
            <p>هذا النص هو مثال حي لنص يمكن ان يستبدل مكانه</p>

            <label for="">اسم المستخدم</label>
            <input name="name" type="text" placeholder="برجاء ادخال اسم المستخدم">

            <label for="">رقم الجوال</label>
            <div class="flag">

                <input name='phone_number' type="tel" id="phone" placeholder="برجاء ادخال رقم الجوال">


            </div>

            <label for="">البريد الالكتروني</label>
            <input name="email"  type="email" placeholder="برجاء ادخال البريد الالكتروني">

            <label for="">كلمة المرور</label>
            <input name='password' type="password" placeholder="برجاء ادخال كلمة المرور">

            <label for="">تأكيد كلمة المرور</label>
            <input name='password_confirmation' type="password" placeholder="برجاء تأكيد كلمة المرور">

            <h3 style="color:#f47321; margin-top: 10px;">الاقسام المشترك بها</h3>

            <div class="checks">
                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="الازياء">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">الازياء</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="عناية وجمال">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">عناية وجمال</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="تصوير">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">تصوير</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="اسر منتجة">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">اسر منتجة</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="حضانات">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">حضانات</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="كافيهات">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">كافيهات</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="مطاعم">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">مطاعم</p>
                </div>

                <div class="my-container" style="margin-bottom: 0px;">
                    <input type="checkbox" name="category[]" checked="checked" class="multi" value="اخرى">
                    <span class="checkmark difColor"></span>
                    <p class="remember" style="font-size: 10px;">اخرى</p>
                </div>
            </div>

            <div class="{{$errors->has('g-recaptcha-response')? 'has-error' : ''}}">
                {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
            </div>

                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
{{--                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>--}}
                        <strong>{{ "هذا الحقل مطلوب لضمان عدم التكرار"  }}</strong>

                    </span>
                @endif

            <p class="terms">
                بتسجيلك في التطبيق فأنت موافق على <span class="conditions">الشروط والاحكام</span>
            </p>


            <input type="submit" onclick="location.href='account.blade.php'" value="تسجيل">

            <p class="login"><a href="/login"> هل لديك حساب <span class="new">تسجيل دخول</span></a></p>
        </form>
        <!-- end login form -->
    </div>
    <!-- end main Screen -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/intlTelInput-jquery.js"></script>

    <script>
        $("#phone").intlTelInput();
    </script>

    <script src="js/all.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    {!! NoCaptcha::renderJs() !!}

    <script>
        $(document).ready(function(){
            $("img.logo").animate({
                transform:"scale(.6)",
                top:"-90px",
                width:"14%",
                left:"43%"
            }, 1000, function(){
                $("form.form").animate({
                    opacity: 1
                },1000)
            });
        })
    </script>

<script src="js/intlTelInput.js"></script>



</body>
</html>
