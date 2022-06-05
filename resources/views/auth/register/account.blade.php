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
            <h3>تفعيل الحساب</h3>
            <p>هذا النص هو مثال حي لنص يمكن ان يستبدل مكانه</p>

            <label for="">كود التفعيل</label>
            <input type="text" placeholder="برجاء ادخال كود التفعيل">

            <a href="#" class="notArrive">لم يصلك الكود؟</a>

            <input type="button" onclick="location.href='/mainDash'" value="تأكيد" style="margin-bottom: 12px;">
        </form>
        <!-- end login form -->
    </div>
    <!-- end main Screen -->
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
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
