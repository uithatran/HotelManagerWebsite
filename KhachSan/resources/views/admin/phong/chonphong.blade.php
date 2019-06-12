@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chọn phòng
                    <small>loại {{ $chonphong->loaiphong }}</small>
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
                <form action="admin/phong/chonphong/{{$chonphong->id}}" method="POST">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">

                        <label>Phòng: </label>
                        <select name="tenphong" required="">
                            <option value="" >Hãy chọn phòng</option>
                            @foreach($phong as $p)
                                @if($p->loaiphong->tenloaiphong == $chonphong->loaiphong && $p->trangthai == 0)
                                    <option value="{{ $p->id }}" >{{ $p->tenphong }}</option>
                                @endif
                            @endforeach
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