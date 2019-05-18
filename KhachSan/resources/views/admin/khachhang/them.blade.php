@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Khách hàng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br>
                        @endforeach
                    </div>
                @endif

                {{-- in thông báo ra --}}
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
                {{-- action truyền 1 cái route, Nhận Route về truyền cho controller để phía controller lưu nó vào. --}}
                <form action="admin/khachhang/them" method="POST">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                   
                                            {{-- Họ tên--}}
                        <div>
                            <label>Họ tên</label>
                            <input type="text" class="form-control" placeholder="Nhập họ tên" name="hoten" aria-describedby="basic-addon1">
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
                            <input type="text" class="form-control" placeholder="Nhập quốc tịch" name="quoctich" value="Việt Nam" aria-describedby="basic-addon1">
                        </div>
                        <br>

                        {{-- Tuổi--}}
                        <div>
                            <label>Tuổi</label>
                            <input type="number" class="form-control" placeholder="Nhập số tuổi" name="tuoi" min="18" max="100"
                            value="18" aria-describedby="basic-addon1">
                        </div>
                        <br>
                    
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection