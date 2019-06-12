
@extends("admin.layout.index")

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trả phòng
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/phong/traphong/{{ $phong->id }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input type="text" class="form-control" placeholder="Nhập tên phòng" value="{{ $phong->tenphong}}" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input class="form-control" name="tenkh" placeholder="Nhập tên khách hàng" value="{{ $phong->khachhang->tenkh}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input class="form-control" name="cmnd" placeholder="Nhập CMND" value="{{ $phong->khachhang->cmnd}}" readonly="" />
                    </div>
                    <div class="form-group">
                        <label>Giá phòng (mỗi ngày)</label>
                        <input class="form-control" id="dongia" name="dongia" placeholder="" value="{{ $phong->loaiphong->dongia}}" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Ngày đến</label>
                        <input id="ngayden" name="ngayden" class="form-control" type="date" value="{{ $phong->khachhang->datphong->ngayden}}" />
                    </div>

                    <div class="form-group">
                        <label>Ngày đi</label>
                        <input id="ngaydi" name="ngaydi" class="form-control" type="date" value="{{ $phong->khachhang->datphong->ngaydi}}" />
                    </div>
                    <div class="form-group">
                        <label>Số ngày</label>
                        <input id="songay" name="songay" class="form-control" type="number" value="0" readonly="" />
                    </div>

                    <button type="button" onclick="tongtien()" class="btn btn-default">Tổng tiền</button>
                    <button type="submit" class="btn btn-default">Trả phòng</button>

                    <div class="form-group" {{-- style="margin: 30px 0px 100px 200px" --}}>
                        <input class="form-control" id="thanhtien" type="number" style="float: right; width: 120px;height: 30px; margin:0px 5px;font-size:20px; font-weight: bold " disabled="" />
                        <p style="float: right; color:red ;font-size:20px; font-weight: bold ">Tổng Tiền</p>

                    </div>
{{--                     <p id="demo1">1</p>
                    <p id="demo2">2</p>
                    <p id="demo3">3</p>
                    <p id="demo4">4</p> --}}
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection

@section('script')

<script>
    function tongtien()
        {
        var ngayden = document.getElementById('ngayden').value;
        var ngaydi = document.getElementById('ngaydi').value;
        var dongia = document.getElementById('dongia').value;
        var den = new Date(ngayden);
        var di = new Date(ngaydi);

        var ddi = di.getDate();
        var dden = den.getDate();
        var mdi = di.getMonth();
        var mden = den.getMonth();
        var songay = 0;
        var tongtien = 0;
        // document.getElementById("demo1").innerHTML = dden;
        // document.getElementById("demo2").innerHTML = mden;
        // document.getElementById("demo3").innerHTML = ddi;
        // document.getElementById("demo4").innerHTML = mdi;
        do
        {
            if(mdi < mden)
            {
                break;
            }

            if(mdi!=mden)
            {
                mdi-=1;
                songay = songay + 30;
            }

            if(mdi==mden)
            {
                if(songay == 0 && ddi<=dden)
                {
                    songay = 0;
                    break;
                }
                songay += (ddi-dden);
            }
        }while(mdi != mden)

        tongtien = dongia*songay;
        document.getElementById("songay").value = songay;
        document.getElementById("thanhtien").value = tongtien;

    }
</script>

@endsection

