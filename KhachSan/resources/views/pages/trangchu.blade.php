@extends('layout.index')

@section('content')

<!-- Welcome Area Start -->
<section class="welcome-area">
    <div class="welcome-slides owl-carousel">
        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(khachhang_asset/img/bg-img/16.jpg);" data-img-url="khachhang_asset/img/bg-img/16.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="200ms">Khách sạn &amp; Khu nghỉ dưỡng</h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">Chào mừng đến với Ruby Hotel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(khachhang_asset/img/bg-img/17.jpg);" data-img-url="khachhang_asset/img/bg-img/17.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="200ms">Khách sạn &amp; Khu nghỉ dưỡng</h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">Chào mừng đến với Ruby Hotel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slide -->
        <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(khachhang_asset/img/bg-img/18.jpg);" data-img-url="khachhang_asset/img/bg-img/18.jpg">
            <!-- Welcome Content -->
            <div class="welcome-content h-100">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-center">
                                <h6 data-animation="fadeInLeft" data-delay="200ms">Khách sạn &amp; Khu nghỉ dưỡng</h6>
                                <h2 data-animation="fadeInLeft" data-delay="500ms">Chào mừng đến với Ruby Hotel</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Area End -->

<!-- About Us Area Start -->
<section class="roberto-about-area section-padding-100-0">
    <!-- Hotel Search Form Area -->
    <div class="hotel-search-form-area">
        <div class="container-fluid">
            <div class="hotel-search-form">
                <form action="#" method="post">
                    <div class="row justify-content-between align-items-end">
                        <div class="col-6 col-md-2 col-lg-2">
                            <label for="checkIn">Ngày nhận phòng</label>
                            <input type="date" class="form-control" id="checkIn" name="checkin-date">
                        </div>
                        <div class="col-6 col-md-2 col-lg-2">
                            <label for="checkOut">Ngày trả phòng</label>
                            <input type="date" class="form-control" id="checkOut" name="checkout-date">
                        </div>
                        <div class="col-6 col-md-2">
                            <label for="nguoilon">Người lớn</label>
                            <select name="nguoilon" id="nguoilon" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-2">
                            <label for="treem">Trẻ em</label>
                            <select name="treem" id="treem" class="form-control">
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-3">
                            <a href="datphong"><button type="button" class="form-control btn roberto-btn w-100" style ="color:white;background: #1cc3b2;font-size: 25px;font-weight: initial">Đặt phòng</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-100">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6>Về chúng tôi</h6>
                    <h2>Chào mừng đến <br>Ruby Hotel Luxury</h2>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">Với hơn 340 khách sạn trên toàn thế giới, Ruby Group cung cấp nhiều loại khách sạn phục vụ cho một kỳ nghỉ hoàn hảo cho dù bạn đến ở đâu.</h5>
                    <p class="wow fadeInUp" data-wow-delay="400ms">Giám đốc: <span>minimachen</spn></p>
                    <img src="khachhang_asset/img/core-img/signature.png" alt="" class="wow fadeInUp" data-wow-delay="500ms">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="khachhang_asset/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="khachhang_asset/img/bg-img/14.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="khachhang_asset/img/bg-img/15.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End -->

<!-- Service Area Start -->
<div class="roberto-service-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-content d-flex align-items-center justify-content-between">
                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="khachhang_asset/img/core-img/icon-1.png" alt="">
                        <h5>Vận chuyển</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <img src="khachhang_asset/img/core-img/icon-2.png" alt="">
                        <h5>Dịch vụ</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="khachhang_asset/img/core-img/icon-3.png" alt="">
                        <h5>Thư giãn Spa</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="khachhang_asset/img/core-img/icon-3.png" alt="">
                        <h5>Nhà hàng</h5>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                        <img src="khachhang_asset/img/core-img/icon-4.png" alt="">
                        <h5>Quầy bar &amp; Nước uống</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- Our Room Area Start -->
<section class="roberto-rooms-area">
    <div class="rooms-slides owl-carousel">
        @foreach($loaiphong as $lp)
        <!-- Single Room Slide -->
        <div class="single-room-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="room-thumbnail h-100 bg-img" style="background-image: url(images/loaiphong/{{$lp->hinhanhloaiphong}});"></div>

            <!-- Content -->
            <div class="room-content">
                <h2 data-animation="fadeInUp" data-delay="100ms">Phòng loại {{$lp->tenloaiphong}}</h2>
                <h3 data-animation="fadeInUp" data-delay="300ms">{{$lp->dongia}}<span>/ Ngày</span></h3>
                <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    <li><span><i class="fa fa-check"></i> Diện tích</span> <span>{{$lp->dientich}} m2</span></li>
                    <li><span><i class="fa fa-check"></i> Sức chứa </span> <span>{{$lp->succhua}} người</span></li>
                    <li><span><i class="fa fa-check"></i> Số giường</span> <span>{{$lp->sogiuong}} giường</span></li>
                    <li><span><i class="fa fa-check"></i> Dịch vụ</span> <span>{{$lp->dichvu}}</span></li>
                </ul>
                {{-- <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">Xem chi tiết</a> --}}
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Our Room Area End -->

<!-- Testimonials Area Start -->
<section class="roberto-testimonials-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="testimonial-thumbnail owl-carousel mb-100">
                    <img src="khachhang_asset/img/bg-img/10.jpg" alt="">
                    <img src="khachhang_asset/img/bg-img/11.jpg" alt="">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h6>Testimonials</h6>
                    <h2>Our Guests Love Us</h2>
                </div>
                <!-- Testimonial Slide -->
                <div class="testimonial-slides owl-carousel mb-100">

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <h5>“This can be achieved by applying search engine optimization or popularly known as SEO. This is a marketing strategy which increases the quality and quantity of traffic flow to a particular website via search engines.”</h5>
                        <div class="rating-title">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h6>Robert Downey <span>- CEO Deercreative</span></h6>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus delectus facilis molestias, error vitae praesentium quos eaque qui ea, tempore blanditiis sint reprehenderit, quaerat. Commodi ab architecto sit suscipit exercitationem!”</h5>
                        <div class="rating-title">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h6>Akash Downey <span>- CEO Deercreative</span></h6>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, ex quos. Alias a rem maiores, possimus dicta sit distinctio quis iusto!”</h5>
                        <div class="rating-title">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h6>Downey Sarah <span>- CEO Deercreative</span></h6>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <h5>“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sequi laboriosam fugit suscipit aspernatur, minima minus voluptatum, id ab atque similique ex earum. Magni.”</h5>
                        <div class="rating-title">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                            </div>
                            <h6>Robert Brown <span>- CEO Deercreative</span></h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area End -->

<!-- Projects Area Start -->
<section class="roberto-project-area">
    <!-- Projects Slide -->
    <div class="projects-slides owl-carousel">
        <!-- Single Project Slide -->
        <div class="single-project-slide active bg-img" style="background-image: url(khachhang_asset/img/bg-img/5.jpg);">
            <!-- Project Text -->
            <div class="project-content">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                </div>
            </div>
            <!-- Hover Effects -->
            <div class="hover-effects">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                    <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                </div>
                <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Project Slide -->
        <div class="single-project-slide bg-img" style="background-image: url(khachhang_asset/img/bg-img/6.jpg);">
            <!-- Project Text -->
            <div class="project-content">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                </div>
            </div>
            <!-- Hover Effects -->
            <div class="hover-effects">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                    <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                </div>
                <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Project Slide -->
        <div class="single-project-slide bg-img" style="background-image: url(khachhang_asset/img/bg-img/7.jpg);">
            <!-- Project Text -->
            <div class="project-content">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                </div>
            </div>
            <!-- Hover Effects -->
            <div class="hover-effects">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                    <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                </div>
                <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Project Slide -->
        <div class="single-project-slide bg-img" style="background-image: url(khachhang_asset/img/bg-img/8.jpg);">
            <!-- Project Text -->
            <div class="project-content">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                </div>
            </div>
            <!-- Hover Effects -->
            <div class="hover-effects">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                    <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                </div>
                <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Project Slide -->
        <div class="single-project-slide bg-img" style="background-image: url(khachhang_asset/img/bg-img/9.jpg);">
            <!-- Project Text -->
            <div class="project-content">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                </div>
            </div>
            <!-- Hover Effects -->
            <div class="hover-effects">
                <div class="text">
                    <h6>Entertaiment</h6>
                    <h5>Racing Bike</h5>
                    <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident...</p>
                </div>
                <a href="#" class="btn project-btn">Discover Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Projects Area End -->

<audio controls autoplay >
  <source src="music/GirlsLikeYou.ogg" type="audio/ogg">
  <source src="music/GirlsLikeYou.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<!-- Blog Area Start -->
<section class="roberto-blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                    <h6>Blog</h6>
                    <h2>Tin tức mới &amp; Sự kiện</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($tintucmoi as $tt)
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="images/tintuc/{{$tt->hinhanhtintuc}}" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">{{$tt->created_at}}</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">{{$tt->tieudetintuc}}</a>
                        <p>{{$tt->noidungtintuc}}</p>
                        <a href="index.html" class="btn continue-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Blog Area End -->

@endsection
