@extends('layout.index')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(khachhang_asset/img/bg-img/17.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">tin tức</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Blog Area Start -->
<div class="roberto-news-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
				

				@foreach($tintuc as $tt)

                <!-- Single Blog Post Area -->
                <div class="single-blog-post d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <a href="#"><img src="{{ $tt->hinhanhtintuc }}" alt=""></a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-author">Jan 02, 2019</a>
                            <a href="#" class="post-tutorial"></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">{{ $tt->tieudetintuc }}</a>
                        <p>{{ $tt->noidungtintuc }}</p>
                        <a href="#" class="btn continue-btn">Read More</a>
                    </div>
                </div>

                @endforeach



                <!-- Pagination -->
                <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="roberto-sidebar-area pl-md-4">

                    <!-- Newsletter -->
                    <div class="single-widget-area mb-100">
                        <div class="newsletter-form">
                            <h5>Newsletter</h5>
                            <p>Subscribe our newsletter gor get notification new updates.</p>
                            
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Enter your email...">
                                <button type="submit" class="btn roberto-btn w-100">Subscribe</button>
                            </form>
                        </div>
                    </div>

                    <!-- Recent Post -->
                    <div class="single-widget-area mb-100">
                        <h4 class="widget-title mb-30">Recent News</h4>

                        <!-- Single Recent Post -->
                        <div class="single-recent-post d-flex">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="single-blog.html"><img src="khachhang_asset/img//bg-img/29.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#" class="post-author">Jan 29, 2019</a>
                                    <a href="#" class="post-tutorial">Event</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Proven Techniques Help You Herbal Breast</a>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class="single-recent-post d-flex">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="single-blog.html"><img src="khachhang_asset/img//bg-img/30.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#" class="post-author">Jan 29, 2019</a>
                                    <a href="#" class="post-tutorial">Event</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Cooking On A George Foreman Grill</a>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class="single-recent-post d-flex">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="single-blog.html"><img src="khachhang_asset/img//bg-img/31.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#" class="post-author">Jan 29, 2019</a>
                                    <a href="#" class="post-tutorial">Event</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Selecting The Right Hotel</a>
                            </div>
                        </div>

                        <!-- Single Recent Post -->
                        <div class="single-recent-post d-flex">
                            <!-- Thumb -->
                            <div class="post-thumb">
                                <a href="single-blog.html"><img src="khachhang_asset/img//bg-img/32.jpg" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content">
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#" class="post-author">Jan 29, 2019</a>
                                    <a href="#" class="post-tutorial">Event</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Comment Importance Of Human Life</a>
                            </div>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="single-widget-area mb-100 clearfix">
                        <h4 class="widget-title mb-30">Tags</h4>
                        <!-- Popular Tags -->
                        <ul class="popular-tags">
                            <li><a href="#">Bed,</a></li>
                            <li><a href="#">Hotel,</a></li>
                            <li><a href="#">Travel,</a></li>
                            <li><a href="#">Restaurant,</a></li>
                            <li><a href="#">Sport,</a></li>
                            <li><a href="#">Trip,</a></li>
                            <li><a href="#">Music,</a></li>
                            <li><a href="#">Holiday,</a></li>
                            <li><a href="#">Tourist,</a></li>
                            <li><a href="#">Foody,</a></li>
                            <li><a href="#">Resorts.</a></li>
                        </ul>
                    </div>

                    <!-- Instagram -->
                    <div class="single-widget-area mb-100 clearfix">
                        <h4 class="widget-title mb-30">Instagram</h4>
                        <!-- Instagram Feeds -->
                        <ul class="instagram-feeds">
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/33.jpg" alt=""></a></li>
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/34.jpg" alt=""></a></li>
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/35.jpg" alt=""></a></li>
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/36.jpg" alt=""></a></li>
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/37.jpg" alt=""></a></li>
                            <li><a href="#"><img src="khachhang_asset/img//bg-img/38.jpg" alt=""></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@endsection