@props(['name'])
<!-- start logo image with circles -->
<span class="circle1"></span>
<span class="circle2"></span>
<img src="/photos/Copy of logo-removebg-preview.png" alt="" class="logo2">
<!-- end logo image with circles -->

<!-- shows only in 768px screnn -->
<span class="icon">
        <i class="fas fa-bars" id="bars"></i>
    </span>

<!-- start header of dashboard -->
<div class="header">
    <aside>
        <img src="/photos/personal.jpg" alt="personal" class="personal">
        <i class="fas fa-circle" id="dot"></i>

        <div class="icon">
            <a href="/settings" >
                <i class="fas fa-cog" id="cog"></i>
            </a>
        </div>
    </aside>
</div>
<!-- end header of dashboard -->

<!-- start list of main links -->
<div class="sidebar">

    <!-- logo shows only in 768px screens -->
    <img src="/photos/logo-removebg-preview.png" alt="altLogo" class="altLogo" style="display: none;">
    <!-- logo shows only in 768px screens -->

    <!--  start information of the client -->
    <div class="client-info">
        <img src="/photos/personal.jpg" alt="personal">
        <div class="details">
            <p class="name">{{auth()->user()->name??'not logged in'}}</p>
            <p class="job" style="color:rgba(128, 128, 128, 0.705)">Dashboard</p>
        </div>
    </div>
    <!-- end information of the client -->
    <!-- start ul links -->
    <div class="mainLinks">
        <ul style="list-style: none;">
            <li>
                <a href="/" style="color:{{Request::segment(1)==''?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-tachometer-alt" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">الرئيسية</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

            <li>
                <a href="/products" style="color:{{Request::segment(1)=='products'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-box" id="mIcon"></i>

                    <h4 style="font-size: 12px; font-weight: 400;">المنتجات</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>
            <li>
                <a href="/product/trash" style="color:{{Request::segment(2)=='trash'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-trash" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">سلة المحذوفات</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>
            <li>
                <a href="../settings" style="color:{{Request::segment(1)=='settings'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-cog" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">الاعدادات</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

            <li>
                <a href="/suggestions" style="color:{{Request::segment(1)=='suggestions'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-users" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">الشكاوي والاقتراحات</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

            <li>
                <a href="/opinions" style="color:{{Request::segment(1)=='opinions'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-comment-alt" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">الاراء والتقييمات</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

            <li>
                <a href="/contact-us" style="color:{{Request::segment(1)=='contact-us'?'#f47321':'#b9b0b0'}}">
                    <i class="fas fa-phone-alt" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">اتصل بنا</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

            <li>
                <a href="/logout" style="color:#b9b0b0">
                    <i class="fas fa-sign-out-alt" id="mIcon"></i>
                    <h4 style="font-size: 12px; font-weight: 400;">تسجيل الخروج</h4>
                    <i class="fas fa-chevron-left" id="sIcon"></i>
                </a>
            </li>

        </ul>
    </div>
    <!-- end ul links -->
</div>
<!-- end list of main links -->
