@extends('admin.layout.index');

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhân viên
                    <small>{{ $nhanvien->tennv }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
            	{{-- In thông báo lỗi --}}
            	@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{ $err }}<br>
						@endforeach
					</div>
            	@endif

            	{{-- kiểm tra --}}
            	@if(session('thongbao'))
            		<div class="alert alert-success">
            			{{ session('thongbao') }}
            		</div>
            	@endif

                <form action="admin/nhanvien/sua/{{ $nhanvien->id }}" method="POST">
                	{{-- Warning --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input class="form-control" name="tennv" placeholder="Nhập tên nhân viên" value="{{ $nhanvien->tennv }}" />
                    </div>
                    <div class="form-group">
                        <label>Chức vụ</label>
                        <input class="form-control" name="chucvu" placeholder="Nhập chức vụ" value="{{ $nhanvien->chucvu }}" />
                    </div>
                    <div class="form-group">
                        <label>Năm sinh</label>
                        <select class="form-control" id = 'namsinh' name="namsinh">

                            <script language="javascript" type="text/javascript">
                                for(var d = 2099; d >=1970; d--)
                                {
                                    if(d=={{ $nhanvien->namsinh }}){
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
                        	<option value="{{ $nhanvien->gioitinh }}" selected="selected">{{ $nhanvien->gioitinh }}</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label>Chú thích</label>
                        <textarea class="form-control" rows="3" name="chuthich" id="chuthich">{{ $nhanvien->chuthich }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection