<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/sass/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <title>دليل الجوهرة داشبورد</title>
</head>
<body onkeypress="myFunction()">
<!-- start main Screen -->
{{--@guest()--}}
    {{$slot}}
{{--@else--}}

{{--@endguest--}}

<!-- end main Screen -->
<script src="{{ asset('/js/all.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>

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

    $(document).ready(function(){
        $(".alert").delay(1500).slideUp(300);
    });

</script>
</body>
</html>
