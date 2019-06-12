@extends('admin.layout.index')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Khách hàng
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

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Phòng</th>
                            <th>Trang thái</th>
{{--                             <th>Xóa</th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($khachhang as $kh)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $kh->id }}</td>
                                <td> <a href="admin/khachhang/thongtincanhan/{{ $kh->id }}">{{ $kh->tenkh }}</a> </td>
                                <td>{{ $kh->email }}</td>

                                @if($kh->idphong==0)
                                    <td>NULL</td>
                                @else
                                    <td>{{ $kh->phong->tenphong }}</td>
                                @endif

                                @if($kh->trangthai == 1)
                                    <td>Đang ở</td>
                                @else
                                    <td>Không ở</td>
                                @endif

{{--                                 <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/{{ $kh->id }}"> Xóa</a></td> --}}
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


{{-- Example Dialog --}}

{{-- <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> --}}
  
</div>

@endsection