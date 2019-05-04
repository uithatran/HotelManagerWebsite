@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phòng
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover"{{--  id="dataTables-example" --}}>
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Mã Phòng</th>
                        <th>Loại</th>
                        <th>Giá</th>
                        <th>Tình trạng</th>
                        <th>Dịch vụ</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- //danh sach phong sang --}}
                    @foreach($phong as $ph)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $ph->id }}</td>
                            <td>{{ $ph->tenphong }}</td>
                            <td>{{ $ph->loaiphong }}</td>
                            <td>{{ $ph->giaphong }}</td>
                            {{-- <th>{{ $ph->tinhtrang }}</th> --}}
                            <script>
                                if({{ $ph->tinhtrang }} == 1){
                                    document.write("<td> Đang thuê</td>")
                                    document.write("<td class='center'> <a href='admin/phong/traphong'> Trả phòng</a></td>")
                                }
                                if({{ $ph->tinhtrang }} == 0){
                                    document.write("<td> Trống</td>")
                                    document.write("<td class='center'><span class='glyphicon glyphicon-plus-sign'></span><a href='admin/phong/datphong'> Thuê phòng</a></td>")
                                }
                            </script>
                            <script>
                                
                            </script>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/phong/xoa"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/phong/sua/{{ $ph->id }}">Sửa</a></td>
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