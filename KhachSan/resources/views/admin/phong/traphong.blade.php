
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
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input type="text" class="form-control" placeholder="Nhập tên phòng">
                    </div>
                    <div class="form-group">
                        <label>Tên khách hàng</label>
                        <input class="form-control" name="tenkh" placeholder="Nhập tên khách hàng" />
                    </div>
                    <div class="form-group">
                        <label>Số CMND</label>
                        <input class="form-control" name="cmnd" placeholder="Nhập CMND" />
                    </div>
                    <div class="form-group">
                        <label>Tiền đặt cọc</label>
                        <input class="form-control" type="number" name="tiencoc" placeholder="Nhập tiền cọc" value="0" step="10000"/>
                    </div>
                    <div class="form-group">
                        <label>Ngày đến</label>
                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" />
                    </div>

                    <div class="form-group">
                        <label>Ngày đi</label>
                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Số ngày</label>
                        <input class="form-control" type="date" value="0" id="songay"/>
                    </div>
                 
                    <button type="submit" class="btn btn-default">Đặt</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <button onclick="myFunction()">Click me</button>
                    
                    <div class="form-group">
                        <label>Tổng tiền</label>
                        
                        <script language="javascript" type="text/javascript">
                            document.write("<option value = '"+ d +"'>"+d+"<option>");
                        </script>
                    </div>

                <form>       
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection

