@extends('layout.index')

@section('content')

    <link href="khoa_asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="khoa_asset/css/shop-homepage.css" rel="stylesheet">
    <link href="khoa_asset/css/my.css" rel="stylesheet">
    
    <br><br>

        <!-- Page Content -->
    <div class="container" style="padding:100px;">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Đăng ký tài khoản</div>
                    <div class="panel-body">
                        <form>
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                                >
                            </div>
                            <br>    
                            <div>
                                <input type="checkbox" class="" name="checkpassword">
                                <label>Nhập mật khẩu</label>
                                <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <button type="button" class="btn btn-default">Đăng ký
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->

@endsection