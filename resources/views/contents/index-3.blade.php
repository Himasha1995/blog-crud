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

  
    <!-- header-instagram -->
    <div class="header__instagram">
        <div class="swiper-container instagram-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta01.jpg" class="popup-image"><img src="assets/img/instagram/insta01.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta02.jpg" class="popup-image"><img src="assets/img/instagram/insta02.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta03.jpg" class="popup-image"><img src="assets/img/instagram/insta03.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta04.jpg" class="popup-image"><img src="assets/img/instagram/insta04.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta05.jpg" class="popup-image"><img src="assets/img/instagram/insta05.jpg" alt="img"></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="header__instagram-item">
                        <a href="assets/img/instagram/insta06.jpg" class="popup-image"><img src="assets/img/instagram/insta06.jpg" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-instagram-end -->



    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section class="tgbanner__area-three pt-80">
            <div class="container">
                <div class="row align-items-lg-center justify-content-around">
                    <div class="col-xl-3 col-lg-5 col-md-6 order-2 order-xl-0">
                        <div class="trending__post">
                            <div class="trending__post-thumb tgImage__hover">
                                <a href="#" class="addWish"><i class="fal fa-heart"></i></a>
                                <a href="blog-details.html"><img src="assets/img/travel/travel_01.jpg" alt="img"></a>
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
                    <div class="col-xl-6 col-lg-8 order-0 order-xl-2">
                        <div class="tgbanner__big-post text-center">
                            <div class="tgbanner__big-post-thumb tgImage__hover">
                                <a href="blog-details.html"><img src="assets/img/travel/travel_02.jpg" alt="img"></a>
                            </div>
                            <div class="tgbanner__big-post-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">technology</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h3>
                                <a href="blog-details.html" class="read-more">read more <i class="far fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-6 order-3 order-xl-3">
                        <div class="tgbanner__trending-news">
                            <h4 class="tgbanner__trending-title">Trending News</h4>
                            <ul class="tgbanner__trending-post-list list-wrap">
                                <li>
                                    <span class="post-count">01</span>
                                    <div class="tgbanner__trending-post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share an universals hierarchy a large...</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <span class="post-count">02</span>
                                    <div class="tgbanner__trending-post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Why we need guidelines for brain originated...</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <span class="post-count">03</span>
                                    <div class="tgbanner__trending-post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">movie</a></li>
                                            <li><span class="by">By</span> <a href="blog.html">miranda h.</a></li>
                                        </ul>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another...</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- advertisement-area -->
        <div class="advertisement pt-40">
            <div class="container">
                <div class="col-12">
                    <div class="advertisement__image text-center">
                        <a href="#"><img src="assets/img/others/advertisement.png" alt="advertisement"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- advertisement-area-end -->

        <!-- recent-post-area -->
        <section class="recent-post-area section__hover-line pt-75 pb-45">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Latest Post</span>
                                <h3 class="section__main-title">Recently Added</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Recent Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_03.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">A hypothetical collection of potentially diverse</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_04.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might not be held</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_05.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Stanford physicists Andrei Linde In a new study</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_06.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Observable universes each of which would comprise</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_07.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Of observers the observable
                                known universe</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="featured__post">
                            <a href="blog-details.html"><div class="featured__thumb" data-background="assets/img/travel/travel_08.jpg"></div></a>
                            <div class="featured__content">
                                <h4 class="title tgcommon__hover"><a href="blog-details.html">Accessible to telescopes, is about 90 billion years</a></h4>
                                <ul class="post__activity list-wrap">
                                    <li><i class="fal fa-signal"></i> 1.0k</li>
                                    <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 128</a></li>
                                    <li><i class="fal fa-share-alt"></i> 29</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- recent-post-area-end -->

        <!-- trending-area -->
        <section class="trending-post-area section__hover-line white-bg pt-75 pb-80">
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
                                        <a href="blog-details.html"><img src="assets/img/travel/travel_09.jpg" alt="img"></a>
                                        <span class="is_trend"><i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Travel</a></li>
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
                                        <a href="blog-details.html"><img src="assets/img/travel/travel_10.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <ul class="tgbanner__content-meta list-wrap">
                                            <li class="category"><a href="blog.html">Travel</a></li>
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
                                        <a href="blog-details.html"><img src="assets/img/travel/travel_11.jpg" alt="img"></a>
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
                                        <a href="blog-details.html"><img src="assets/img/travel/travel_12.jpg" alt="img"></a>
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
                                        <a href="blog-details.html"><img src="assets/img/travel/travel_13.jpg" alt="img"></a>
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

        <!-- stories-post-area -->
        <section class="stories-post-area stories-video-post section__hover-line pt-75 pb-40">
            <div class="container">
                <div class="section__title-wrap mb-40">
                    <div class="row align-items-end">
                        <div class="col-sm-6">
                            <div class="section__title">
                                <span class="section__sub-title">Video</span>
                                <h3 class="section__main-title">Video Post</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section__read-more text-start text-sm-end">
                                <a href="blog.html">More Video Post <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-gutters-40">
                    <div class="col-md-6">
                        <div class="stories-post__item">
                            <div class="stories-post__thumb tgImage__hover">
                                <a href="blog-details.html"><img src="assets/img/travel/travel_13.jpg" alt="img"></a>
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><i class="fas fa-play"></i></a>
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
                                <a href="blog-details.html"><img src="assets/img/travel/travel_14.jpg" alt="img"></a>
                                <a href="https://www.youtube.com/watch?v=FT3ODSg1GFE" class="popup-video"><i class="fas fa-play"></i></a>
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
            </div>
        </section>
        <!-- stories-post-area-end -->

        <!-- latest-post-area -->
        <section class="latest-post-area pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="section__title-wrap mb-40">
                            <div class="row align-items-end">
                                <div class="col-sm-6">
                                    <div class="section__title">
                                        <span class="section__sub-title">Latest</span>
                                        <h3 class="section__main-title">Latest News</h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="section__read-more text-start text-sm-end">
                                        <a href="blog.html">More Latest Post <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest__post-wrap">
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_15.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical no group of the multiple universes.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_16.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might not connection be held.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_17.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally a connection to the multiple communities.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_18.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical no group of the multiple universes.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_19.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">That share universal hierarchy a large variety of sport these.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_20.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/travel/travel_21.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major.</a></h3>
                                    <p>Structured gripped tape invisible moulded cups for sauppor firm hold
                                    strong powermesh front liner sport detail.</p>
                                    <ul class="post__activity list-wrap">
                                        <li><i class="fal fa-signal"></i> 1.5k</li>
                                        <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                        <li><i class="fal fa-share-alt"></i> 32</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="latest__post-more text-center">
                            <a href="#" id="loadMore" class="btn"><span class="text">Load More</span> <i class="far fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <aside class="blog-sidebar">
                            <div class="widget sidebar-widget">
                                <div class="tgAbout-me">
                                    <div class="tgAbout-thumb">
                                        <img src="assets/img/others/about_me.png" alt="me">
                                    </div>
                                    <div class="tgAbout-info">
                                        <p class="intro">Hi there, I’m <span>Rosalina D.</span></p>
                                        <span class="designation">Content Writer</span>
                                    </div>
                                    <div class="tgAbout-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar-widget widget_categories">
                                <h4 class="widget-title">Trending Category</h4>
                                <ul class="list-wrap">
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category01.jpg" alt="img"></a></div>
                                        <a href="blog.html">technology</a>
                                        <span class="float-right">12</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category02.jpg" alt="img"></a></div>
                                        <a href="blog.html">business</a>
                                        <span class="float-right">08</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category03.jpg" alt="img"></a></div>
                                        <a href="blog.html">fitness</a>
                                        <span class="float-right">13</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category04.jpg" alt="img"></a></div>
                                        <a href="blog.html">Gadgets</a>
                                        <span class="float-right">09</span>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category05.jpg" alt="img"></a></div>
                                        <a href="blog.html">politics</a>
                                        <span class="float-right">15</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget sidebar-widget">
                                <div class="sidePost-active">
                                    <div class="sidePost__item" data-background="assets/img/category/side_post01.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Technology</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidePost__item" data-background="assets/img/category/side_post02.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Travel</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidePost__item" data-background="assets/img/category/side_post02.jpg">
                                        <div class="sidePost__content">
                                            <a href="blog.html" class="tag">Gaming</a>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Tips for helping to make an your startup a success</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget sidebar-widget">
                                <h4 class="widget-title">Instagram Feeds</h4>
                                <div class="sidebarInsta__wrap">
                                    <div class="sidebarInsta__top">
                                        <div class="sidebarInsta__logo">
                                            <img src="assets/img/instagram/insta_logo.png" alt="img">
                                        </div>
                                        <div class="sidebarInsta__info">
                                            <h6 class="name"><a href="#">ins.co/sarso.co</a></h6>
                                            <span class="designation">Code Supply Co.</span>
                                        </div>
                                    </div>
                                    <div class="sidebarInsta__slider-wrap">
                                        <div class="swiper-container sidebarInsta-active">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta01.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta02.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta03.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta04.jpg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container sidebarInsta-active-2" dir="rtl">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta05.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta06.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta07.jpg" alt="img"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta08.jpg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebarInsta__bottom">
                                        <a href="https://www.instagram.com/" target="_blank" class="btn"><i class="fab fa-instagram"></i><span class="text">Follow Me</span></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest-post-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-style-two style-three white-bg pt-80 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-7 col-lg-8">
                        <div class="newsletter__title text-center mb-35">
                            <div class="newsletter__title-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <span class="sub-title">newsletter</span>
                            <h4 class="title">Get notified of the best deals on <br> our WordPress Themes</h4>
                        </div>
                        <div class="newsletter__form-wrap text-center">
                            <form action="#" class="newsletter__form">
                                <div class="newsletter__form-grp">
                                    <input type="email" placeholder="Email address" required>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree that my submitted data is being collected and stored.
                                        </label>
                                    </div>
                                </div>
                                <button class="btn" type="submit">
                                    <span class="text">Subscribe</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

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