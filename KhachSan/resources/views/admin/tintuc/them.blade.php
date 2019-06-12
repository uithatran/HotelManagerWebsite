@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <!-- xuat loi neu co -->
                @if (count($errors) > 0)
                     <div class="alert alert-danger">
                         <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                         </ul>
                     </div>
                @endif

                {{-- in thông báo ra --}}
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                    {{-- <img src="images/{{ Session::get('image') }}"> --}}
                @endif
                {{-- action truyền 1 cái route, Nhận Route về truyền cho controller để phía controller lưu nó vào. --}}
                <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="tieudetintuc" placeholder="Nhập tên tiêu đề" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input class="form-control" name="noidungtintuc" placeholder="Nhập chức vụ" />
                    </div>
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label>Link tin tức</label>
                        <input class="form-control" name="linktintuc" placeholder="Nhập link" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    {{-- <button type="reset" class="btn btn-default">Làm mới</button> --}}
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection