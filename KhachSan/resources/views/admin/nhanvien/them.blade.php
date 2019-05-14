@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhân viên
                    <small>Thêm</small>
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
                <form action="admin/nhanvien/them" method="POST">
                    {{-- Để form truyền dữ liệu lên máy chủ ->Token --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input class="form-control" name="tennv" placeholder="Nhập tên nhân viên" />
                    </div>
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <input class="form-control" name="chucvu" placeholder="Nhập chức vụ" />
                    </div>
                    <div class="form-group">
                        <label>Năm sinh</label>
                        <select class="form-control" id = 'namsinh' name="namsinh">
                            <script language="javascript" type="text/javascript">
                                for(var d = 2099; d >=1970; d--)
                                {
                                    if(d==2019){
                                        document.write("<option selected='selected'>"+d+"<option>")
                                    }
                                    else{
                                    document.write("<option value = '"+ d +"'>"+d+"<option>");
                                    }
                                }
                            </script>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" id="gioitinh" name="gioitinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label>Chú thích</label>
                        <textarea class="form-control" rows="3" name="chuthich" id="chuthich"></textarea>
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