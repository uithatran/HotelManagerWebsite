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

            {{-- Bảng Thông báo --}}
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Loại phòng</th>
                        <th>Số lượng phòng</th>
                        <th>Còn trống</th>
                        <th>Đã dùng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaiphong as $lp)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $lp->id }}</td>
                            <td>{{ $lp->tenloaiphong }}</td>
                            <script>
                                var totalRoom = 0;
                                var totalRoomAvailable = 0;
                                var totalRoomUse = 0;
                                @foreach($phong as $p)
                                    if({{ $p->idloaiphong }} == {{ $lp->id }})
                                    {
                                        totalRoom++;
                                        if({{ $p->trangthai }} == 0)
                                            totalRoomAvailable++;
                                    }
                                @endforeach
                                totalRoomUse = totalRoom - totalRoomAvailable;
                                document.write("<td>"+totalRoom+"</td>");
                                document.write("<td>"+totalRoomAvailable+"</td>");
                                document.write("<td>"+totalRoomUse+"</td>");
                            </script>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Mã Phòng</th> 
                        <th>Loại</th>
                        <th>Giá</th>
                        <th><center>Tình trạng(thông tin)</center></th>
                        <th>Dịch vụ</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- //danh sach phong sang --}}
                    @foreach($phong as $ph)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $ph->id }}</td>
                            <td>{{ $ph->tenphong }}</td>
                            <td>{{ $ph->loaiphong->tenloaiphong}}</td>
                            <td>{{ $ph->loaiphong->dongia }}</td>
                            {{-- <th>{{ $ph->tinhtrang }}</th> --}}
                            <script>
                                if({{ $ph->trangthai }} == 1){
                                    document.write("<td> <a href='admin/phong/thongtinphong/{{ $ph->id }}'> Đang thuê</a></td>")
                                    document.write("<td class='center'> <a href='admin/phong/traphong/{{ $ph->id }}'> Trả phòng</a></td>")
                                }
                                if({{ $ph->trangthai }} == 0){
                                    document.write("<td> Trống</td>")
                                    document.write("<td class='center'><span class='glyphicon glyphicon-plus-sign'></span><a href='admin/phong/datphong/{{ $ph->id }}'> Đặt phòng</a></td>")
                                }
                            </script>
                            <script>

                            </script>
                            {{-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/phong/xoa/{{ $ph->id }}"> Xóa</a></td> --}}
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

