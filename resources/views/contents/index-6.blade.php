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

        <!-- banner-area -->
        <section class="tgbanner__area-five pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tgbanner__five-item big-post">
                            <div class="tgbanner__five-thumb tgImage__hover">
                                <a href="blog.html" class="tags">adventure</a>
                                <a href="blog-details.html">
                                    <img src="assets/img/lifestyle/life_style01.jpg" alt="img">
                                </a>
                            </div>
                            <div class="tgbanner__five-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-wrap d-lg-block gx-30">
                        <div class="tgbanner__five-item small-post">
                            <div class="tgbanner__five-thumb tgImage__hover">
                                <a href="blog.html" class="tags">Travel</a>
                                <a href="blog-details.html">
                                    <img src="assets/img/lifestyle/life_style02.jpg" alt="img">
                                </a>
                            </div>
                            <div class="tgbanner__five-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h2 class="title tgcommon__hover"><a href="blog-details.html">That share an universals hierarchy a large camp or burger.</a></h2>
                            </div>
                        </div>
                        <div class="tgbanner__five-item small-post">
                            <div class="tgbanner__five-thumb tgImage__hover">
                                <a href="blog.html" class="tags">adventure</a>
                                <a href="blog-details.html">
                                    <img src="assets/img/lifestyle/life_style03.jpg" alt="img">
                                </a>
                            </div>
                            <div class="tgbanner__five-content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h2 class="title tgcommon__hover"><a href="blog-details.html">That share an universals hierarchy a large camp or burger.</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- popular-area -->
        <section class="popular__post-area lifestyle__popular-area white-bg section__hover-line pt-75 pb-75">
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
                                        <a href="blog.html" class="tags">adventure</a>
                                        <a href="blog-details.html" class="image"><img src="assets/img/lifestyle/life_style04.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <h3 class="post--count">01</h3>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Why we need guidelines for brain scan data to real data.</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="blog.html" class="tags">Travel</a>
                                        <a href="blog-details.html" class="image"><img src="assets/img/lifestyle/life_style05.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <h3 class="post--count">02</h3>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="blog.html" class="tags">Fashion</a>
                                        <a href="blog-details.html" class="image"><img src="assets/img/lifestyle/life_style06.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <h3 class="post--count">03</h3>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">That share a universal hierarchy a large variety of these</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="blog.html" class="tags">lifestyle</a>
                                        <a href="blog-details.html" class="image"><img src="assets/img/lifestyle/life_style07.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <h3 class="post--count">04</h3>
                                        <h4 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trending__post">
                                    <div class="trending__post-thumb tgImage__hover">
                                        <a href="blog.html" class="tags">adventure</a>
                                        <a href="blog-details.html" class="image"><img src="assets/img/lifestyle/life_style08.jpg" alt="img"></a>
                                    </div>
                                    <div class="trending__post-content">
                                        <h3 class="post--count">05</h3>
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

        <!-- latest-post-area -->
        <section class="latest-post-area pt-80 pb-80">
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style07.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style08.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style09.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style10.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style11.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style12.jpg" alt="img"></a>
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
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style13.jpg" alt="img"></a>
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

        <!-- handpicked-post-area -->
        <section class="handpicked-post-area white-bg section__hover-line pt-75 pb-50">
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
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="handpicked__item big-post">
                            <div class="handpicked__thumb tgImage__hover">
                                <a href="blog-details.html"><img src="assets/img/lifestyle/life_style13.jpg" alt="img"></a>
                            </div>
                            <div class="handpicked__content">
                                <ul class="tgbanner__content-meta list-wrap">
                                    <li class="category"><a href="blog.html">technology</a></li>
                                    <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                    <li>nov 21, 2022</li>
                                </ul>
                                <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="handpicked__sidebar-post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="handpicked__item small-post">
                                        <div class="handpicked__thumb tgImage__hover">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style14.jpg" alt="img"></a>
                                        </div>
                                        <div class="handpicked__content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">Gaming</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="handpicked__item small-post">
                                        <div class="handpicked__thumb tgImage__hover">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style15.jpg" alt="img"></a>
                                        </div>
                                        <div class="handpicked__content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">Tech</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h4 class="title tgcommon__hover"><a href="blog-details.html">The Multiverse is the collection of alternate universes</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="handpicked__item small-post">
                                        <div class="handpicked__thumb tgImage__hover">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style16.jpg" alt="img"></a>
                                        </div>
                                        <div class="handpicked__content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">Technology</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6">
                                    <div class="handpicked__item small-post">
                                        <div class="handpicked__thumb tgImage__hover">
                                            <a href="blog-details.html"><img src="assets/img/lifestyle/life_style17.jpg" alt="img"></a>
                                        </div>
                                        <div class="handpicked__content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">Gaming</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h4 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that ours might not be held</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- handpicked-post-area-end -->

        <!-- newsletter-area -->
        <section class="newsletter-style-two black-bg pt-80 pb-80">
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