<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sarsa - News & Magazine HTML Template</title>
    <meta name="description" content="Sarsa - News & Magazine HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{--    <link href="{{ assets('css/app.css') }}" rel="stylesheet">--}}

</head>

<body>

@include('layouts.selections.header.header')


    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->



    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider__area slider__style-two fix" data-background="assets/img/bg/banner_bg.jpg">
            <div class="container">
                <div class="slider-active">
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">bitcoin</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">The Top Privacy Coin Saw Fewer Percentage Losses Than...</h2>
                                    <a href="blog-details.html" class="btn border-btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="assets/img/nft/nft_slider01.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn border-btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="assets/img/nft/nft_slider02.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn border-btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="assets/img/nft/nft_slider03.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <ul class="tgbanner__content-meta list-wrap" data-animation-in="tg-fadeInUp" data-delay-in=".2">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 21, 2022</li>
                                    </ul>
                                    <h2 class="title" data-animation-in="tg-fadeInUp" data-delay-in=".6">Practical steps to build transparency in your remote business</h2>
                                    <a href="blog-details.html" class="btn border-btn" data-animation-in="tg-fadeInUp" data-delay-in="1"><span class="btn-text">Read More</span> <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slider__img-wrap">
                                    <img src="assets/img/nft/nft_slider04.jpg" class="main-img" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__marquee clearfix">
                    <div class="marquee_mode">
                        <h6 class="item">BTC $20211.23 <span>+1.07%</span></h6>
                        <h6 class="item">eth $1533.56 <span>+3.12%</span></h6>
                        <h6 class="item">bnb $281.43 <span>+0.02%</span></h6>
                        <h6 class="item">busd $1.00 <span>+0.01%</span></h6>
                        <h6 class="item minus">xrp $0.33 <span>-2.62%</span></h6>
                        <h6 class="item">ada $0.45 <span>+0.16%</span></h6>
                        <h6 class="item minus">sol $31.54 <span>-1.14%</span></h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- popular-area -->
        <section class="popular__post-area section__hover-line pt-75 pb-75">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Popular</span>
                                <h3 class="section__main-title">Popular Post</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Popular Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__slider">
                    <div class="swiper-container popular-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog01.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Gaming</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Why we need guidelines for brain scan data to real data.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog02.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">tech</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog03.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog04.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog05.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                            <li>nov 21, 2022</li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of the potentially diverse</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular-area-end -->

        <!-- trending-area -->
        <section class="trending-post-area white-bg section__hover-line pt-75 pb-80">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Popular Posts</span>
                                <h3 class="section__main-title">Trending News</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trending__slider">
                    <div class="swiper-container trending-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog06.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Gaming</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.0k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                            <li><i class="fal fa-share-alt"></i> 29</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog07.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">tech</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.0k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 115</a></li>
                                            <li><i class="fal fa-share-alt"></i> 19</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog08.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.2k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 110</a></li>
                                            <li><i class="fal fa-share-alt"></i> 16</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog09.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 42</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                        <a href="blog-details.html"><img src="assets/img/nft/nft_blog10.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">sports</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of potentially diverse</a></h4>
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending-area-end -->

        <!-- Video-post-area -->
        <section class="video-post-area nft-video-post section__hover-line pt-75 pb-80">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Video</span>
                                <h3 class="section__main-title">Recent Video Post</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Video Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="video__post-item big-post">
                            <div class="video__post-thumb">
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog08.jpg" alt="img"></a>
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">technology</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="video__post-item side-post">
                            <div class="video__post-thumb tgImage__hover">
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="assets/img/nft/nft_blog09.jpg" alt="img"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">medical</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">Stanford physicists Andrei
                                Linde In a new study</a></h3>
                            </div>
                        </div>
                        <div class="video__post-item side-post">
                            <div class="video__post-thumb tgImage__hover">
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="assets/img/nft/nft_blog10.jpg" alt="img"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">medical</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">Accessible to telescopes, is about 90 billion years</a></h3>
                            </div>
                        </div>
                        <div class="video__post-item side-post">
                            <div class="video__post-thumb tgImage__hover">
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="assets/img/nft/nft_blog11.jpg" alt="img"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">medical</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">Observable universes each of which would comprise</a></h3>
                            </div>
                        </div>
                        <div class="video__post-item side-post">
                            <div class="video__post-thumb tgImage__hover">
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><img src="assets/img/nft/nft_blog06.jpg" alt="img"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">medical</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a connected community</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video-post-area-end -->

        <!-- stories-post-area -->
        <section class="stories-post-area white-bg section__hover-line pt-75 pb-40">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Stories</span>
                                <h3 class="section__main-title">Popular Stories</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">Stories Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-gutters-40">
                    <div class="col-md-6">
                        <div class="stories-post__item">
                            <div class="stories-post__thumb tgImage__hover">
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog12.jpg" alt="img"></a>
                            </div>
                            <div class="stories-post__content video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">technology</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stories-post__item">
                            <div class="stories-post__thumb tgImage__hover">
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog13.jpg" alt="img"></a>
                            </div>
                            <div class="stories-post__content video__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">technology</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 22, 2022</li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally accessible by a connection to the multiple communities</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="trending__post stories-small-post__item">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog14.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">Gaming</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.5k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 32</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="trending__post stories-small-post__item">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog15.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">tech</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.5k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 32</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="trending__post stories-small-post__item">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog11.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">movie</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.2k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 26</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="trending__post stories-small-post__item">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="assets/img/nft/nft_blog09.jpg" alt="img"></a>
                            </div>
                            <div class="trending__post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">sports</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                </ul>
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.2k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                    <li><i class="fal fa-share-alt"></i> 26</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- stories-post-area-end -->

    </main>
    <!-- main-area-end -->


    @include('layouts.selections.footer.footer')



    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/imageRevealHover.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>