@extends("admin.layout.index")

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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên khách hàng</th> 
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Ngày đến</th>
                        <th>Ngày đi</th>
                        <th>Loại phòng</th> 
                        <th>Người lớn</th>
                        <th>Trẻ em</th>
                        <th>CMND</th>
                        <th>Tuổi</th> 
                        <th>Quốc tịch</th>
                        <th>Kiểm định</th>
                        <th>Ngày tạo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datphong as $dp)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $dp->id }}</td>
                            <td>{{ $dp->tenkhachhang }}</td>
                            <td>{{ $dp->email }}</td>
                            <td>{{ $dp->sdt }}</td>
                            <td>{{ $dp->ngayden }}</td>
                            <td>{{ $dp->ngaydi }}</td>
                            <td>{{ $dp->loaiphong }}</td>
                            <td>{{ $dp->nguoilon }}</td>
                            <td>{{ $dp->treem }}</td>
                            <td>{{ $dp->cmnd }}</td>
                            <td>{{ $dp->tuoi }}</td>
                            <td>{{ $dp->quoctich }}</td>
                            @if($dp->kiemdinh == 0 )
                                <td ><a href="admin/phong/chonphong/{{ $dp->id }}" style="color:red;font-weight: bold;">Chưa xác nhận</a> </td>
                            @else
                                <td style="color:green;background-color:#d1e0e0;font-weight: bold ">Đã xác nhận</td>
                            @endif
                            <td>{{ $dp->ngaytao }}</td>
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

