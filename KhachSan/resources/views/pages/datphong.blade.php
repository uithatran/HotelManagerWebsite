@extends('layout.index')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(khachhang_asset/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Page Content -->
<div class="container" >
	<div id="page-wrapper" style="padding:50px 180px;">
	    <div class="container-fluid">
	    	{{-- @if(Auth::user()) --}}
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Đặt phòng
	                    <small>{{-- {{ Auth::user()->name }} --}}</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->
	            <div class="col-lg-12" style="padding-bottom:120px">
	                {{-- In thông báo lỗi --}}
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{ session('thongbao') }}
                        </div>
                    @endif

	                <form action="datphong" method="POST">
	                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	              			@if(Auth::user())
			                    <div class="form-group">
			                        <label>Tên khách hàng</label>
			                        <input class="form-control" id="tenkhachhang" name="tenkhachhang" placeholder="Nhập tên tài khoản" value="{{ Auth::user()->name }}"  />
			                    </div>

			                    {{-- Email--}}
		                        <div>
		                            <label>Email</label>
		                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" aria-describedby="basic-addon1"
		                             value="{{ Auth::user()->email }}" />
		                        </div>
		                        <br> 

								<div class="row justify-content-between align-items-end">
			                        <div class="col-6 ">
			                            <label for="checkIn">Ngày đến</label>
			                            <input type="date" class="form-control" id="ngayden" name="ngayden">
			                        </div>
			                        <div class="col-6 ">
			                            <label for="checkOut">Ngày đi</label>
			                            <input type="date" class="form-control" id="ngaydi" name="ngaydi">
			                        </div>



			                        <div class="col-12"> <br> </div>

			                        <div class="col-4 >
			                            <label for="room">Loại phòng</label>
			                            <select name="loaiphong" id="loaiphong" class="form-control">
			                                <option value="A">A</option>
			                                <option value="B">B</option>
			                                <option value="C">C</option>
			                                <option value="D">D</option>
			                            </select>
			                        </div>
			                        <div class="col-4 >
			                            <label for="nguoilon">Người lớn</label>
			                            <select name="nguoilon" id="nguoilon" class="form-control">
			                                <option value="01">01</option>
			                                <option value="02">02</option>
			                                <option value="03">03</option>
			                                <option value="04">04</option>
			                            </select>
			                        </div>
			                        <div class="col-4 >
			                            <label for="treem">Trẻ em</label>
			                            <select name="treem" id="treem" class="form-control">
			                                <option value="01">01</option>
			                                <option value="02">02</option>
			                                <option value="03">03</option>
			                                <option value="04">04</option>
			                            </select>
			                        </div>
		                    	</div>
		                    	<br>
		                    	 {{-- Enter SĐT --}}
			                    <div class="form-group">
			                        <label>SĐT</label>
			                        <input class="form-control" name="sdt" placeholder="Nhập số điện thoại"  value="{{ Auth::user()->sdt }}" />
			                    </div>

								{{-- Enter CMND --}}
			                    <div class="form-group">
			                        <label>CMND</label>
			                        <input class="form-control" name="cmnd" id="cmnd" placeholder="Nhập số chứng mình nhân dân"  value="{{ Auth::user()->cmnd }}" />
			                    </div>

			                    {{-- Enter Tuoi --}}
			                    <div class="form-group">
			                        <label>Tuổi</label>
			                        <input type="number" class="form-control" name="tuoi" id="tuoi" placeholder="Nhập số tuổi"  value="{{ Auth::user()->tuoi }}" />
			                    </div>

			                    {{-- Enter Quốc tịch --}}
			                    <div class="form-group">
			                        <label>Quốc tịch</label>
			                        <input class="form-control" name="quoctich" id="quoctich" placeholder="Nhập quốc tịch"  value="{{ Auth::user()->quoctich }}" />
			                    </div>

							@else
			                    <div class="form-group">
			                        <label>Tên khách hàng</label>
			                        <input class="form-control" name="tenkhachhang" placeholder="Nhập tên tài khoản" value=""/>
			                    </div>

			                    {{-- Email--}}
		                        <div>
		                            <label>Email</label>
		                            <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
		                            >
		                        </div>
		                        <br>

								<div class="row justify-content-between align-items-end">
			                        <div class="col-6 ">
			                            <label for="checkIn">Ngày đến</label>
			                            <input type="date" class="form-control" id="ngayden" name="ngayden" value="<?php echo date('Y-m-j'); ?>">
			                        </div>
			                        <div class="col-6 ">
			                            <label for="checkOut">Ngày đi</label>
			                            <input type="date" class="form-control" id="ngaydi" name="ngaydi" value="2019-05-25">
			                        </div>



			                        <div class="col-12"> <br> </div>

			                        <div class="col-4 >
			                            <label for="room">Loại phòng</label>
			                            <select name="loaiphong" id="loaiphong" class="form-control">
			                                <option value="A">A</option>
			                                <option value="B">B</option>
			                                <option value="C">C</option>
			                                <option value="D">D</option>
			                            </select>
			                        </div>
			                        <div class="col-4 >
			                            <label for="nguoilon">Người lớn</label>
			                            <select name="nguoilon" id="nguoilon" class="form-control">
			                                <option value="01">01</option>
			                                <option value="02">02</option>
			                                <option value="03">03</option>
			                                <option value="04">04</option>
			                            </select>
			                        </div>
			                        <div class="col-4 >
			                            <label for="treem">Trẻ em</label>
			                            <select name="treem" id="treem" class="form-control">
			                                <option value="01">01</option>
			                                <option value="02">02</option>
			                                <option value="03">03</option>
			                                <option value="04">04</option>
			                            </select>
			                        </div>
		                    	</div>
		                    	<br>
			                    {{-- Enter SĐT --}}
			                    <div class="form-group">
			                        <label>SĐT</label>
			                        <input class="form-control" name="sdt" placeholder="Nhập số điện thoại"  value="0123456789" />
			                    </div>

								{{-- Enter CMND --}}
			                    <div class="form-group">
			                        <label>CMND</label>
			                        <input class="form-control" name="cmnd" id="cmnd" placeholder="Nhập số chứng mình nhân dân"  value="241535833" />
			                    </div>

			                    {{-- Enter Tuoi --}}
			                    <div class="form-group">
			                        <label>Tuổi</label>
			                        <input type="number" class="form-control" name="tuoi" id="tuoi" placeholder="Nhập số tuổi"  value="18" />
			                    </div>

			                    {{-- Enter Quốc tịch --}}
			                    <div class="form-group">
			                        <label>Quốc tịch</label>
			                        <input class="form-control" name="quoctich" id="quoctich" placeholder="Nhập quốc tịch"  value="Việt Nam" />
			                    </div>

		                    @endif

	                    {{-- Khi nhán "Sửa" sẽ gửi lên action form = "admin/user/sua/id--}}
	                    <button type="submit" class="btn btn-default">Đặt phòng</button>
	                    <button type="reset" class="btn btn-default">Làm mới</button>
	                </form>
	            </div>
	        </div>
	        {{-- @endif --}}
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
</div>
<!-- /#page-wrapper -->

@endsection
