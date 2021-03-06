@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->

            {{-- Bảng Thông báo --}}
            @if(session('thongbao'))
                    {{ session('thongbao') }}
            @endif

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Cấp độ</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                        <th>Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Bên routes đã truyền danh sách trong $user qua đây.
                    Duyệt giá trị User --}}
                    @foreach($user as $u)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>
                                @if($u->quyen == 1){{ "Admin" }}
                                @else{{ "Khách hàng" }}
                                @endif
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{ $u->id }}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{ $u->id }}">Sửa</a></td>
                            <td>{{ $u->created_at }}</td>
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