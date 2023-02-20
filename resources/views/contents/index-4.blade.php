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
        <section class="tgslider__area-four pt-20">
            <div class="container">
                <div class="tgslider__top">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="tgslider__trending-post">
                                <h4 class="title">Trending:</h4>
                                <div class="tgslider__trending-active">
                                    <div class="tgslider__trending-item">
                                        <div class="tgslider__trending-thumb">
                                            <a href="blog-details.html"><img src="assets/img/category/trending_thumb01.png" alt="img"></a>
                                        </div>
                                        <div class="tgslider__trending-content">
                                            <h6 class="title"><a href="blog-details.html">How to climb the career latter & don’t waste your youth...</a></h6>
                                        </div>
                                    </div>
                                    <div class="tgslider__trending-item">
                                        <div class="tgslider__trending-thumb">
                                            <a href="blog-details.html"><img src="assets/img/category/trending_thumb02.png" alt="img"></a>
                                        </div>
                                        <div class="tgslider__trending-content">
                                            <h6 class="title"><a href="blog-details.html">Observable universes each of which would comprise...</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="tgslider__nav"></div>
                        </div>
                    </div>
                </div>
                <div class="tgslider__wrapper">
                    <div class="row tgslider__active">
                        <div class="col-12">
                            <div class="tgslider__item">
                                <div class="tgslider__thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_01.jpg" alt="img"></a>
                                </div>
                                <div class="tgslider__content" data-animation-in="tg-fadeInUp" data-delay-in=".1">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tgslider__item">
                                <div class="tgslider__thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_02.jpg" alt="img"></a>
                                </div>
                                <div class="tgslider__content" data-animation-in="tg-fadeInUp" data-delay-in=".1">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tgslider__item">
                                <div class="tgslider__thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_03.jpg" alt="img"></a>
                                </div>
                                <div class="tgslider__content" data-animation-in="tg-fadeInUp" data-delay-in=".1">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h2 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of multiple universes.</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- latest-post-area -->
        <section class="latest-post-area pt-80 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="latest__post-wrap">
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_02.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_03.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might not connection be held.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_04.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally a connection to the firm multiple communities.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_05.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_06.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">That share universal hierarchy a large variety of sport these.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_07.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the multiple universes.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item-two">
                                <div class="latest__post-thumb-two tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/technology/tech_01.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content-two">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Universes were originated from another due to a major.</a></h3>
                                    <div class="latest__post-bottom">
                                        <ul class="post__activity list-wrap">
                                            <li><i class="fal fa-signal"></i> 1.5k</li>
                                            <li><a href="blog-details.html"><i class="fal fa-comment-dots"></i> 150</a></li>
                                            <li><i class="fal fa-share-alt"></i> 32</li>
                                        </ul>
                                        <div class="latest__post-read-more">
                                            <a href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest__post-more text-center">
                            <a href="#" id="loadMore" class="btn"><span class="text">Load More</span> <i class="far fa-plus"></i></a>
                        </div>
                        <div class="newsletter-style-two style-four mt-80">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
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
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <aside class="blog-sidebar">
                            <div class="widget sidebar-widget">
                                <h4 class="widget-title">Recent Post</h4>
                                <div class="rc__post-wrapper">
                                    <div class="rc__post-item">
                                        <div class="rc__post-content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">movie</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might group not be held...</a></h5>
                                        </div>
                                    </div>
                                    <div class="rc__post-item">
                                        <div class="rc__post-content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">movie</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical group of the universes.</a></h5>
                                        </div>
                                    </div>
                                    <div class="rc__post-item">
                                        <div class="rc__post-content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">movie</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">Experimentally a connection to the firm communities.</a></h5>
                                        </div>
                                    </div>
                                    <div class="rc__post-item">
                                        <div class="rc__post-content">
                                            <ul class="tgbanner__content-meta list-wrap">
                                                <li class="category"><a href="blog.html">movie</a></li>
                                                <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                            </ul>
                                            <h5 class="title tgcommon__hover"><a href="blog-details.html">That share universal hierarchy a large variety of sport these.</a></h5>
                                        </div>
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