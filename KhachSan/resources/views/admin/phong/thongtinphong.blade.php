@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
    <div id="signupbox" style=" margin-top:50px;margin-left: 400px;"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Thông tin phòng </div>
            </div>
            <div class="panel-body" >
                <form method="post" action=".">
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Phòng </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="tenphong" maxlength="30" name="tenphong" placeholder="Choose your username" style="margin-bottom: 10px" type="text" value="{{ $phong->tenphong }}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Trạng thái </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="trangthai" name="trangthai" style="margin-bottom: 10px" type="text" value="{{ $phong->trangthai }}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Khách hàng </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="khachhang" name="khachhang" style="margin-bottom: 10px" type="text" value="{{ $phong->khachhang->tenkh }}"  />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> Loại phòng </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="loaiphong" name="loaiphong" style="margin-bottom: 10px" type="text" value="{{ $phong->loaiphong->tenloaiphong }}"  />
                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField"> Giá phòng </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="dongia" name="dongia" style="margin-bottom: 10px" value="{{ $phong->loaiphong->dongia }}" type="text"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Diện tích </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="dientich" name="dientich" style="margin-bottom: 10px" type="text" value="{{ $phong->loaiphong->dientich }}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Sức chứa (người) </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="succhua" name="succhua" style="margin-bottom: 10px" type="text" value="{{ $phong->loaiphong->succhua }}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Số giường </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="sogiuong" name="sogiuong" style="margin-bottom: 10px" type="text" value="{{ $phong->loaiphong->sogiuong }}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Dich vụ </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="dichvu" name="dichvu" style="margin-bottom: 10px" type="text" value="{{ $phong->loaiphong->dichvu }}"  />
                            </div>
                        </div>


{{--                         <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="button" name="sua" value="Sửa" class="btn btn btn-primary" id="button-id-signup" />
                                <input type="reset" name="lammoi" value="Làm mới" class="btn btn-primary btn btn-info" id="submit-id-signup" />

                            </div>
                        </div> --}}

                </form>
            </div>
        </div>
    </div> 
</div>

@endsection