<!doctype html>
<html class="no-js" lang="zh-Tw">

<head>
    <!-- title -->
    <title>{{setting('site.top_title')}}-{{$posts->seo_title}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="{{$posts->meta_description}}">
    <!-- keywords -->
    <meta name="keywords" content="{{$posts->meta_keywords}}">
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
    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('{{Voyager::image($posts->image)}}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">
                        {{ $posts->title }} </h1>

                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start post content section -->
    <section>
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <main class="col-12 col-lg-9 left-sidebar md-margin-60px-bottom sm-margin-40px-bottom pr-0 md-no-padding-left">
                    <!-- start filter content -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 px-3 p-md-0">
                                <div class="filter-content overflow-hidden">
                                    <h3 class="text-info"> {{ $posts->title }}</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{Voyager::image($posts->image)}}" alt="..." class="img-thumbnail">
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="text-danger">書中狀況說明 :</h6>
                                            <p class="text-justify">
                                                {{$posts->excerpt}}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <p class="text-justify">

                                <?= $posts->body; ?>
                            </p>

                        </div>
                    </div>
                    <!-- end filter content -->
                </main>
                <aside class="col-12 col-lg-3">

                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>二手書類別</span></div>
                        <ul class="list-style-6 margin-50px-bottom text-small">
                            @foreach($categorys as $category)
                            <li><a href="{{route('slug.category',['id'=> $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- end blog content section -->
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