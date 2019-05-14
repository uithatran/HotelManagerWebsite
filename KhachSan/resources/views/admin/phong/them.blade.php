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
                <form action="admin/phong/them" method="POST">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input class="form-control" name="tenphong" placeholder="Nhập tên phòng" />
                    </div>
                    <div class="form-group">
                        <label>Loại phòng</label>
                        <select class="form-control" name="loaiphong" id="loaiphong">
                            <option value="A" selected="">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Giá phòng</label>
                        <input type="number" class="form-control" name="giaphong" value="100000" min="100000" max="10000000" step="10000">
                    </div>

                    <div class="form-group">
                        <label>Trạng thái phòng</label>
                        <select class="form-control" name="trangthai" id="trangthai">
                            <option value="trong">trống</option>
                            <option value="dango">đang ở</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chú thích</label>
                        <textarea class="form-control" name="chuthich" id="chuthich" cols="3"></textarea>
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