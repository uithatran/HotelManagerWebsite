@extends('layout.index')

@section('content')


<!-- Page Content -->
<div class="container" >


	<div id="page-wrapper" style="padding:10px 180px;">
	    <div class="container-fluid">
	    	@if(Auth::user())
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Tài khoản
	                    <small>{{ Auth::user()->name }}</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->
	            <div class="col-lg-12" style="padding-bottom:120px">
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
	                
	                <form action="nguoidung" method="POST">
	                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	                    <div class="form-group">
	                        <label>Tên tài khoản</label>
	                        <input class="form-control" name="name" placeholder="Nhập tên tài khoản" value="{{ Auth::user()->name }}"/>
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label>
	                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email"  value="{{ Auth::user()->email }}" readonly="" />
	                    </div>
	                    <div class="form-group">
	                        <input type="checkbox" id="changePassword" name="changePassword">
	                        <label>Đổi mật khẩu</label>
	                        <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu" disabled="" />
	                    </div>
	                    <div class="form-group">
	                        <label>Nhập lại mật khẩu</label>
	                        <input type="password" class="form-control password" name="passwordagain" placeholder="Nhập lại mật khẩu" disabled="" />
	                    </div>

	                    {{-- Khi nhán "Sửa" sẽ gửi lên action form = "admin/user/sua/id--}}
	                    <button type="submit" class="btn btn-default">Sửa</button>
	                    <button type="reset" class="btn btn-default">Làm mới</button>
	                </form>
	            </div>
	        </div>
	        @endif
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
</div>
<!-- /#page-wrapper -->

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            //Bắt sự kiện change
            $("#changePassword").change(function(){
                if($(this).is(":checked"))
                {
                    // Xoa thuoc tinh disabled
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection
