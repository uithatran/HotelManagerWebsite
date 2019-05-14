@extends('layout.index')

@section('content')

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

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }} <br>
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif

                    <form method="post" action="dangky">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        {{-- Họ tên--}}
                        <div>
                            <label>Họ tên</label>
                            <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Email--}}
                        <div>
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                            >
                        </div>
                        <br> 

                        {{-- Nhập mật khẩu--}}
                        <div>
                            <label>Nhập mật khẩu</label>
                            <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Nhập lại mật khẩu--}}
                        <div>
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- SĐT--}}
                        <div>
                            <label>SĐT</label>
                            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="sdt" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Họ tên--}}
                        <div>
                            <label>CMND</label>
                            <input type="text" class="form-control" placeholder="Nhập số CMND" name="cmnd" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Quốc tịch--}}
                        <div>
                            <label>Quốc tịch</label>
                            <input type="text" class="form-control" placeholder="Nhập quốc tịch" name="quoctich" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Tuổi--}}
                        <div>
                            <label>Tuổi</label>
                            <input type="number" class="form-control" placeholder="Nhập số tuổi" name="tuoi" min="0" max="100"
                            value="18" aria-describedby="basic-addon1">
                        </div>
                        <br>


                        <button type="submit" class="btn btn-default">Đăng ký
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