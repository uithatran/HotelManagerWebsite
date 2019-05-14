{{-- Preloader  --}}
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->


<!-- Header Area Start -->
<header class="header-area">
    <!-- Search Form -->
    <div class="search-form d-flex align-items-center">
        <div class="container">
            <form action="index.html" method="get">
                <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                <button type="submit"><i class="icon_search"></i></button>
            </form>
        </div>
    </div>

    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span>(028) 372 52002</span></a>
                        <a href="#"><i class="icon_mail"></i> <span>info@uit.edu.vn</span></a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="top-header-content">
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                            <a href="https://www.facebook.com/uit.hatran"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/hachin2109/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            {{-- Kiem tra co dang nhap hay khong --}}

                                @if(Auth::user())
                                    <a><span class ="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} </a>
                                    <a href="dangxuat">Đăng xuất</a>
                                @else
                                    <a href="dangky">Đăng ký</a>
                                    <a href="dangnhap">Đăng nhập</i></a>

                                @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html">Ruby Hotel</a>
                    
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="trangchu">Trang chủ</a></li>
                                <li><a href="phong">Phòng</a></li>
                                <li><a href="vechungtoi">Về chúng tôi</a></li>
                                <li><a href="tintuc">Tin tức</a></li>
                                <li><a href="lienhe">Liên hệ</a></li>
                            </ul>

                            <!-- Search -->
                            <div class="search-btn ml-4">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Book Now -->
                            <div class="book-now-btn ml-3 ml-lg-5">
                                <a href="#">Đặt ngay <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End