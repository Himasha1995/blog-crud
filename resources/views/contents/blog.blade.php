
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
   
   
   <!-- Styles -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{--    <link href="{{ assets('css/app.css') }}" rel="stylesheet">--}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')

   
</head>
<body>
@include('layouts.selections.header.header')


    <!-- main-area -->
    <main>

    

        <!-- blog-details-area -->
        <section class="blog-details-area pt-80 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-1">
                        <div class="blog-details-social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fas fa-share"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-post-wrapper">
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style01.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical no group of the multiple universes.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style02.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Scientists speculate that our might not connection be held.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style03.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">Experimentally a connection to the multiple communities.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details"><img src="assets/img/lifestyle/life_style04.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">The multiverse is a hypothetical no group of the multiple universes.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="latest__post-item">
                                <div class="latest__post-thumb tgImage__hover">
                                    <a href="blog-details.html"><img src="assets/img/lifestyle/life_style05.jpg" alt="img"></a>
                                </div>
                                <div class="latest__post-content">
                                    <ul class="tgbanner__content-meta list-wrap">
                                        <li class="category"><a href="blog.html">technology</a></li>
                                        <li><span class="by">By</span> <a href="blog.html">alonso d.</a></li>
                                        <li>nov 22, 2022</li>
                                    </ul>
                                    <h3 class="title tgcommon__hover"><a href="blog-details.html">That share universal hierarchy a large variety of sport these.</a></h3>
                                    <p>In partnership with Sydney startup Trace, Envato is delivering on its sustainability promise as a B-Corp and meeting part of its recent commitment to the To Whom It Should Concern campaign. Envato is now officially carbon commitment, as part of a comprehensive new sustainability.</p>
                                    <div class="latest__post-read-more">
                                        <a href="blog-details.html">Read More <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination__wrap">
                                <ul class="list-wrap">
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">06</a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
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
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->

</body>

    @include('layouts.selections.footer.footer')

    <!-- JS here -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
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