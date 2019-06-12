@extends('layout.index')

@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(khachhang_asset/img/bg-img/16.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"></h2>
{{--                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="trangchu">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Phòng</li>
                        </ol>
                    </nav> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Google Maps & Contact Info Area Start -->
<section class="google-maps-contact-info">
    <div class="container-fluid">
        <div class="google-maps-contact-content">
            <div class="row">
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Liên hệ:</h4>
                        <p>(028) 372 52002</p>
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Địa chỉ</h4>
                        <p>Khu phố 6, P.Linh Trung, Q.Thủ Đức, Tp.Hồ Chí Minh.</p>
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h4>Thời gian hoạt động</h4>
                        <p>10:00 sáng đến 23:00 tối</p>
                    </div>
                </div>
                <!-- Single Contact Info -->
                <div class="col-6 col-lg-3">
                    <div class="single-contact-info">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p>info@uit.edu.vn</p>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="google-maps">
                {{-- <iframe src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82774.69671830302!2d24.077286625210185!3d56.96328499537209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2sRiga%2C+Latvia!5e0!3m2!1sen!2sbd!4v1549536732147" allowfullscreen></iframe> --}}
                <iframe width="600" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDZnT2l3iv5PGrLtZ4f01Z4rev7UO_dLeo&q=Đại+học+Quốc+gia+Thành+phố+Hồ+Chí+Minh/@10.8757674,106.8017095,18.58z/data=!4m5!3m4!1s0x0:0x8b0c2d3e645ac443!8m2!3d10.8756909!4d106.8016848" allowfullscreen></iframe>
             {{--    <iframe width="600" height="450" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/search?q=Sydney+NSW,+Australia/@-33.848244,150.931975,9z/ &key=AIzaSyDZnT2l3iv5PGrLtZ4f01Z4rev7UO_dLeo" allowfullscreen></iframe> --}}
            </div>
        </div>
    </div>
</section>
<!-- Google Maps & Contact Info Area End -->

<!-- Contact Form Area Start -->
<div class="roberto-contact-form-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h6>Liên hệ chúng tôi</h6>
                    <h2>Để lại lời nhắn</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
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
                <!-- Form -->
                <div class="roberto-contact-form">
                    <form action="tinnhan" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                <input type="text" name="tenkhachhang" class="form-control mb-30" placeholder="Tên khách hàng">
                            </div>
                            <div class="col-12 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                <input type="email" name="email" class="form-control mb-30" placeholder="email">
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="100ms">
                                <textarea name="noidungtinnhan" class="form-control mb-30" placeholder="Nội dung tin nhắn"></textarea>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="100ms">
                                <button type="submit" class="btn roberto-btn mt-15">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form Area End -->

@endsection