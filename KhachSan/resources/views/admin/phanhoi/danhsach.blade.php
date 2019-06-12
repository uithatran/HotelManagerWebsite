@extends('admin.layout.index')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phản hồi 
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

                <table class="table table-striped table-bordered table-hover"  id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>email</th>
                            <th>Nội dung</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tinnhan as $tn)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $tn->maphanhoi }}</td>
                                <td>{{ $tn->tenkhachhang }}</td>
                                <td>{{ $tn->email }}</td>
                                <td>{{ $tn->noidungtinnhan }}</td>
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