<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ruby Hotel</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="./img/core-img/favicon.png"> --}}
 
    <!-- Stylesheet -->
    <link rel="stylesheet" href="khachhang_asset/style.css">

    <link href="khoa_asset/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="khachhang_asset/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="khachhang_asset/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="khachhang_asset/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="khachhang_asset/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="khachhang_asset/js/default-assets/active.js"></script>

    @yield('script')

</body>

</html>

{{-- 	@include('layout.header')

	@yield('content') --}}


