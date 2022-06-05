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
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/main.css">

    <title>دليل الجوهرة داشبورد</title>
</head>
<body onkeypress="myFunction()">
    <!-- start main Screen -->
    <div class="start">
        <img src="photos/bg.jpg" alt="backgroundImage" class="bg" >
        <img src="photos/logo-removebg-preview.png" alt="logoImage" class="logo">


        <!-- start login form -->
        <form action="" class="form" style="height: fit-content;">
            <h3>نسيت كلمة المرور</h3>
            <p>هذا النص هو مثال حي لنص يمكن ان يستبدل مكانه</p>

            <label for="">رقم الجوال</label>
            <div class="flag">

                <input type="tel" id="phone" placeholder="برجاء ادخال رقم الجوال">
            </div>


            <input type="button" value="تأكيد" onclick="location.href='/email/verify'" style="margin-top: 30px; margin-bottom: 40px;">

        </form>
        <!-- end login form -->
    </div>
    <!-- end main Screen -->
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/intlTelInput-jquery.js"></script>

    <script>
        $("#phone").intlTelInput();
    </script>

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
</body>
</html>
