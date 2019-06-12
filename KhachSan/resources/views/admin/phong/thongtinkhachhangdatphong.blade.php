@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
    <div id="signupbox" style=" margin-top:50px;margin-left: 400px;"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Thông tin khách hàng đặt phòng</div>
            </div>
            <div class="panel-body" >
                <form method="post" action=".">
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Họ tên </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="hoten" maxlength="30" name="username" placeholder="Choose your username" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->tenkh }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="email" name="email" style="margin-bottom: 10px" type="email" value="{{-- {{ $khachhang->email }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField"> Password </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="password" name="password1" style="margin-bottom: 10px" value="123456" type="password"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Số điện thoại </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="sdt" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->sdt }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Trang thái </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="trangthai" name="company" style="margin-bottom: 10px" type="text" value=""  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField" > Phòng </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="phong" name="company" style="margin-bottom: 10px" type="text" value=""  />
                            </div>
                        </div>

                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Loại phòng </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="loaiphong" name="company" style="margin-bottom: 10px" type="text" value=""  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Chứng minh nhân dân </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="cmnd" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->cmnd }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Tuổi </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="tuoi" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->tuoi }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Quốc tịch</label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="quotich" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->quoctich }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Ngày đến</label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="ngayden" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->datphong->ngayden }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Ngày đi</label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="ngaydi" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->datphong->ngaydi }} --}}"  />
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required">
                            <label for="id_company" class="control-label col-md-4  requiredField"> Số người </label>
                            <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="songuoi" name="company" style="margin-bottom: 10px" type="text" value="{{-- {{ $khachhang->datphong->nguoilon + $khachhang->datphong->treem }} --}}"  />
                            </div>
                        </div>

                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="button" name="sua" value="Sửa" class="btn btn btn-primary" id="button-id-signup" />
                                <input type="reset" name="lammoi" value="Làm mới" class="btn btn-primary btn btn-info" id="submit-id-signup" />

                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div> 
</div>


@endsection

{{-- @section('script')
    <script>
        @if($khachhang->idphong=='NULL')
            document.getElementById('phong').value = "NULL";
        @else
            document.getElementById('phong').value = "{{ $khachhang->phong->tenphong }}";
        @endif

        @if($khachhang->idphong=='NULL')
            document.getElementById('loaiphong').value = "NULL";
        @else
            document.getElementById('loaiphong').value = "{{ $khachhang->phong->loaiphong->tenloaiphong }}";
        @endif

        @if($khachhang->trangthai=='0')
            document.getElementById('trangthai').value = "Không ở";
        @else
            document.getElementById('trangthai').value = "Đang ở";
        @endif


    </script>
@endsection
 --}}