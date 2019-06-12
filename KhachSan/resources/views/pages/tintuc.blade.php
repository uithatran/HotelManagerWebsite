@extends('layout.index')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(khachhang_asset/img/bg-img/17.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2 class="page-title"></h2>
{{--                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">tin tức</li>
                        </ol>
                    </nav> --}}
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
                        <a href="#"><img src="images/tintuc/{{ $tt->hinhanhtintuc }}" alt=""></a>
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-author">{{$tt->created_at}}</a>
                            <a href="#" class="post-tutorial"></a>
                        </div>
                        <!-- Post Title -->
                        <a href="{{$tt->linktintuc}}" class="post-title" target="_blank">{{ $tt->tieudetintuc }}</a>
                        <p>{{ $tt->noidungtintuc }}</p>
                        <a href="{{$tt->linktintuc}}" class="btn continue-btn" target="_blank">Read More</a>
                    </div>
                </div>

                @endforeach

                {!! $tintuc->links() !!}



               {{--  <! Pagination >
                <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav> --}}
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="roberto-sidebar-area pl-md-4">

                    <!-- Newsletter -->
                    <div class="single-widget-area mb-100">
                        <div class="newsletter-form">
                            <h5>Bản tin</h5>
                            <p>Theo dõi bản tin của chúng tôi để nhận thông báo cập nhật mới.</p>

                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Nhập email của bạn...">
                                <button type="submit" class="btn roberto-btn w-100">Theo dõi</button>
                            </form>
                        </div>
                    </div>

                    <!-- Recent Post -->
                    <div class="single-widget-area mb-100">
                        <h4 class="widget-title mb-30">Recent News</h4>
                        @foreach($recentNew as $rn)
                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="{{$rn->linktintuc}}" target="_blank" ><img src="images/tintuc/{{ $rn->hinhanhtintuc }}" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#" class="post-author">{{$rn->created_at}}</a>
                                    </div>
                                    <a href="{{$rn->linktintuc}}" target="_blank" href="single-blog.html" class="post-title">{{$rn->tieudetintuc}}</a>
                                </div>
                            </div>
                        @endforeach
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