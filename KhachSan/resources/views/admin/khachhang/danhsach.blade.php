@extends('admin.layout.index')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nhân viên
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
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>CMND</th>
                            <th>Quốc tịch</th>
                            <th>Tuổi</th>
                            <th>SĐT</th>
                            <th>Phòng</th>
                            <th>Xóa</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($khachhang as $kh)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $kh->id }}</td>
                                <td>{{ $kh->tenkh }}</td>
                                <td>{{ $kh->cmnd }}</td>
                                <td>{{ $kh->quoctich }}</td>
                                <td>{{ $kh->tuoi }}</td>
                                <td>{{ $kh->sdt }}</td>
                                @if($kh->idphong=='NULL')
                                    <td>NULL</td>
                                @else
                                    <td>{{ $kh->phong->tenphong }}</td>
                                @endif
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