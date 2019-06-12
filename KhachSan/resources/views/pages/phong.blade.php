@extends('layout.index')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(khachhang_asset/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="trangchu">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Rooms Area Start -->
<div class="roberto-rooms-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">

                @foreach($dulieuphong as $data)
                <!-- Single Room Area -->
                <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Room Thumbnail -->
                    <div class="room-thumbnail">
                        <img src="images/phong/{{ $data->hinhanhphong }}" alt="">
                    </div>
                    <!-- Room Content -->
                    <div class="room-content">
                        <h2>{{ $data->tenphong }}</h2>
                        <h4> 
                            <?php 
                                $gia = $data->loaiphong->dongia; 
                                echo number_format($gia); 
                            ?> đ
                            <span>/ Ngày</span>
                        </h4>
                        <div class="room-feature">
                            <h6>Diện tích: <span>{{ $data->loaiphong->dientich }} m <sup>2</sup></span></h6>
                            <h6>Sức chứa: <span>{{ $data->loaiphong->succhua }} người tối đa</span></h6>
                            <h6>Số giường: <span>{{ $data->loaiphong->sogiuong }} giường</span></h6>
                            <h6>Dich vụ: <span>{{ $data->loaiphong->dichvu }}</span></h6>
                        </div>
                        <a href="#" class="btn view-detail-btn">Chi tiết <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                @endforeach

                {!! $dulieuphong->links() !!}




                {{-- <!-- Pagination -->
                <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav> --}}
            </div>

            <div class="col-12 col-lg-4">
                <!-- Hotel Reservation Area -->
                <div class="hotel-reservation--area mb-100">
                    <form action="#" method="post">
                        <div class="form-group mb-30">
                            <label for="checkInDate">Ngày</label>
                            <div class="input-daterange" id="datepicker">
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" id="checkInDate" name="checkInDate" placeholder="Check In">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="input-small form-control" name="checkOutDate" placeholder="Check Out">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <label for="guests">Khách hàng</label>
                            <div class="row">
                                <div class="col-6">
                                    <select name="adults" id="guests" class="form-control">
                                        <option value="adults">Người lớn</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name="children" id="children" class="form-control">
                                        <option value="children">Trẻ em</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-50">
                            <div class="slider-range">
                                <div class="range-price">Giá: 150,000đ - 1,000,000đ</div>
                                <div data-min="0" data-max="3000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="3000" data-label-result="Max Price: ">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="datphong"><button type="button" class="btn roberto-btn w-100">Đặt phòng</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms Area End -->

@endsection