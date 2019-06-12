@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phòng
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
                <form action="admin/phong/them" method="POST" enctype="multipart/form-data">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input class="form-control" name="tenphong" placeholder="Nhập tên phòng" />
                    </div>
                    <div class="form-group">
                        <label>Loại phòng</label>
                        <select class="form-control" name="idloaiphong" id="idloaiphong">
                            <option value="1" selected="">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control" name="hinhanhphong"/>
                    </div>

                    <div class="form-group">
                        <label>Trạng thái phòng</label>
                        <select class="form-control" name="trangthai" id="trangthai" disabled="">
                            <option value="0" selected="">trống</option>
                            <option value="1">đang ở</option>
                        </select>
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