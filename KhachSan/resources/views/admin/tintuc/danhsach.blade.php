@extends('admin.layout.index')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin tức
                        <small>Danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->

                {{-- Bảng Thông báo --}}
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr align="center">
                            <th>Mã tin tức </th>
                            <th>Tiêu đề </th>
                            <th>Nội dung</th>
                            <th>Hình ảnh</th>
                            <th>Ngày tạo</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tintuc as $tt)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $tt->matintuc }}</td>
                                <td>{{ $tt->tieudetintuc }}</td>
                                <td>{{ $tt->noidungtintuc }}</td>
                                <td><img src="{{ $tt->hinhanhtintuc }}" alt="Hình ảnh bị lỗi" width="200" height="100"></td>
                                <td>{{ $tt->create_at }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhanvien/xoa/{{-- {{ $nv->id }} --}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhanvien/sua/{{-- {{ $nv->id }} --}}">Sửa</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection