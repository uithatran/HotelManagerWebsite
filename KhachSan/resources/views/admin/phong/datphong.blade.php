@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đặt phòng
                    <small>{{ $phong->tenphong }}</small>
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
                <form action="admin/phong/datphong/{{$phong->id}}" method="POST">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input class="form-control" name="tenkhachhang" placeholder="Nhập tên khách hàng" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="email" name="email" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Ngày đến</label>
                        <input type="date" class="form-control" name="ngayden" placeholder="Nhập ngày đến" value="<?php echo date('Y-m-j'); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Ngày đi</label>
                        <input type="date" class="form-control" name="ngaydi" placeholder="Nhập ngày đi" value="<?php echo date('Y-m-j'); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Loại phòng</label>
                        <input class="form-control" id="loaiphong" name="loaiphong" placeholder="Nhập loại phòng" value="{{ $phong->loaiphong->tenloaiphong }}" readonly="" />
                    </div>
                    <div class="form-group">
                        <div class="col-4 >
                            <label for="nguoilon">Người lớn</label>
                            <select name="nguoilon" id="nguoilon" class="form-control">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-4 >
                            <label for="treem">Trẻ em</label>
                            <select name="treem" id="treem" class="form-control">
                                <option value="00">0</option>
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" name="sdt" placeholder="Nhập số điện thoại" />
                    </div>
                    <div class="form-group">
                        <label>CMND</label>
                        <input class="form-control" name="cmnd" placeholder="Nhập chứng minh nhân dân" />
                    </div>
                    <div class="form-group">
                        <label>Tuổi</label>
                        <input class="form-control" name="tuoi" placeholder="Nhập tuổi" />
                    </div>
                    <div class="form-group">
                        <label>Quốc tịch</label>
                        <input class="form-control" name="quoctich" placeholder="Nhập tên phòng" />
                    </div>

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