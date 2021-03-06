<!doctype html>
<html class="no-js" lang="zh-Tw">

<head>
    <!-- title -->
    <title>{{setting('site.top_title')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('theme/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('theme/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('theme/images/apple-touch-icon-114x114.png')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{asset('theme/css/et-line-icons.css')}}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{asset('theme/css/themify-icons.css')}}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{asset('theme/css/swiper.min.css')}}">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="{{asset('theme/css/justified-gallery.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/navigation.css')}}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset('theme/css/bootsnav.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}" />
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent nav-box-width white-link navbar-expand-lg">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-auto pl-lg-0">
                    <a href="/" title="" class="logo"><img src="{{Voyager::image(setting('site.logo'))}}" data-rjs="" class="logo-dark" alt=""><img src="{{Voyager::image(setting('site.logo'))}}" data-rjs=" images/logo-white@2x.png" alt="雷根二手書店 LOGO""
                                class=" logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-auto col-lg accordion-menu pr-lg-0">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul class="nav navbar-nav alt-font font-weight-700">
                            <li><a href="/" title="首頁" class="inner-link">首頁</a></li>
                            <li><a href="/acquisition" title="二手書收購" class="inner-link">二手書收購</a></li>
                            <li><a href="/news" title="最新消息" class="inner-link">最新消息</a></li>
                            <li><a href="/about" title="公司簡介" class="inner-link">公司簡介</a></li>
                            <li><a href="/content" title=" 聯繫我們" class="inner-link">聯繫我們</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <section class="p-0 main-slider h-100 mobile-height wow fadeIn">
        <div class="swiper-full-screen swiper-container h-100 w-100 white-move">
            <div class="swiper-wrapper">
                @foreach( $banners as $banner )
                <!-- start slider item -->


                <div class="swiper-slide cover-background" style="background-image:url('{{Voyager::image($banner->image)}}');">
                    <div class=" opacity-extra-medium bg-black"></div>
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <h6 class="text-very-light-gray padding-ten-lr font-weight-300 margin-two-bottom md-margin-four-bottom sm-margin-15px-bottom">
                                        {{$banner->name}}</h6>
                                    <div class="alt-font text-white-2 text-uppercase font-weight-700 letter-spacing-minus-3 title-extra-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-25px-bottom sm-letter-spacing-0">
                                        {{$banner->descrip}}</div>
                                    <div class="btn-dual">
                                        <a href="/acquisition" class="btn btn-transparent-white btn-small sm-margin-two-all">聯繫我們
                                        </a>
                                        <a href="/content" target="_blank" class="btn btn-transparent-white btn-small sm-margin-two-all">二手書收購</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                @endforeach
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination">
            </div>
            <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
            <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end slider section -->
    <!-- start feature box section -->


    <section class="bg-light-gray wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">

                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-info">最新書籍消息</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0 sm-padding-15px-lr">
                    <div class="filter-content overflow-hidden">
                        <ul class="portfolio-grid work-3col  hover-option6 lightbox-portfolio">
                            <li class="grid-sizer"></li>
                            @foreach( $posts as $post )
                            <!-- start portfolio item -->
                            <li class="grid-item zoomIn last-paragraph-no-margin px-2">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="/storage/{{$post->image}}" alt="" data-no-retina="">
                                        <div class="portfolio-icon">
                                            <a href="{{route('slug.news',$post->id)}}""><i
                                                        class=" fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="{{route('slug.news',$post->id)}}"><span class=" line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">{{$post->title}}</span></a>

                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer -->
    <footer class="footer-standard-dark bg-extra-dark-gray">
        <div class="footer-widget-area padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center text-md-left">
                        <!-- start logo -->
                        <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                            雷根二手書簡介</div>
                        <!-- end logo -->
                        <p class="h6 width-95 sm-width-100  text-white-2 ">
                            {{ setting('site.top_descrip')  }}

                    </div>
                    <!-- start contact information -->
                    <div class="col-lg-4 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left">
                        <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                            聯繫方式</div>
                        <p class="h6 d-block margin-15px-bottom width-80 sm-width-100 text-white-2 ">
                            {{setting('site.top_map')}}
                        </p>
                        <div class="h6 text-white-2">Email: <a href="{{setting('site.top_mail')}}" class="text-white-2">{{setting('site.top_mail')}}</a>
                        </div>
                        <div class="h6 text-white-2">電話 : {{setting('site.top_tel')}}</div>
                        <div class="h6 text-white-2">傳真 : {{setting('site.top_fax')}}</div>

                    </div>
                    <!-- end contact information -->
                    <!-- start instagram -->
                    <div class="col-lg-5 col-md-6 widget padding-45px-left md-padding-15px-left text-center text-md-left">
                        <div class="widget-title alt-font h5 text-medium-gray text-uppercase margin-10px-bottom font-weight-600 text-blue">
                            相關類別</div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="tag-cloud">
                                @foreach($categorys as $category)
                                <a href="{{route('slug.category',['id'=> $category->id])}}" class="bg-info text-white">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>


                    </div>
                    <!-- end instagram -->
                </div>
            </div>
        </div>
        <div class="bg-dark-footer padding-50px-tb text-center sm-padding-30px-tb">
            <div class="container">
                <div class="row">
                    <!-- start copyright -->
                    <div class="col-md-6 text-md-left text-small text-center">&copy; 2020 {{setting('site.top_title')}}, ALL RIGHTS
                        RESERVED.
                    </div>
                    <div class="col-md-6 text-md-right text-small text-center">
                        <a href="javascript:void(0);" class="text-dark-gray">YISI WEB
                            DESIGN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">逸思科技製作</a>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{asset('theme/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/bootstrap.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/jquery.easing.1.3.js')}}"></script>

    <script type="text/javascript" src="{{asset('theme/js/smooth-scroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/jquery.appear.js')}}"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="{{asset('theme/js/bootsnav.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/jquery.nav.js')}}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{asset('theme/')}}js/wow.min.js"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{asset('theme/js/page-scroll.js')}}"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="{{asset('theme/js/swiper.min.js')}}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{asset('theme/js/jquery.count-to.js')}}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{asset('theme/js/jquery.stellar.js')}}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{asset('themejs/imagesloaded.pkgd.min.js')}}"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="{{asset('theme/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/js/hamburger-menu.js')}}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{asset('theme/js/counter.js')}}"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="{{asset('theme/js/jquery.fitvids.js')}}"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="{{asset('theme/js/skill.bars.jquery.js')}}"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="{{asset('theme/js/justified-gallery.min.js')}}"></script>
    <!--pie chart-->
    <script type="text/javascript" src="{{asset('theme/js/jquery.easypiechart.min.js')}}"></script>
    <!-- instagram -->
    <script type="text/javascript" src="{{asset('theme/js/instafeed.min.js')}}"></script>
    <!-- retina -->
    <script type="text/javascript" src="{{asset('theme/js/retina.min.js')}}"></script>
    <!-- revolution -->
    <script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('theme/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
    <!-- setting -->
    <script type="text/javascript" src="{{asset('theme/js/main.js')}}"></script>
</body>

</html>