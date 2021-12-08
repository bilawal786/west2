<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <?php
    $content = \App\Content::find(1);
    ?>
    <!-- Site Title-->
    <title>{{$content->sitename}}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:100,400,800,600,300,700,500">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/">
    <img src="{{asset('front/images/ie8-panel/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{asset('front/js/html5shiv.min.js')}}"></script>
    <![endif]-->
    @yield('style')
</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-head header-swiper">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap header-default">
            <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-device-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-stick-up-offset="100px">
                <div class="rd-navbar-inner">
                    <button data-rd-navbar-toggle=".rd-navbar-top-panel" type="submit" class="rd-navbar-collapse-toggle"><span></span></button>

                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel-wrapper">
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="{{route('front.index')}}" class="brand-name">
                                    <img src="{{asset($content->logo)}}" alt="" style="height: 50px !important;">
                                </a>
                            </div>
                        </div>
                        <div class="nav-wrapper">
                            <div class="rd-navbar-nav-wrap">
                                <div class="logo-inner">
                                    <ul class="list-inline-variant-2">
                                        <li><a href="login.html">log in</a></li>
                                        <li><a href="register.html">register</a></li>
                                    </ul>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand">
                                        <a href="{{route('front.index')}}" class="brand-name">
                                            <img style="height: 50px !important;" src="{{asset($content->logo)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="{{route('front.index')}}">Accueil</a></li>
                                    <li><a href="{{route('front.index')}}#video">Vidéo</a></li>
                                    <li><a href="{{route('front.calender')}}">Réservation</a>
                                    </li>
                                    <li><a href="{{route('front.index')}}#products">Nos produits</a>
                                    </li>
                                    <li><a href="{{route('front.index')}}#instagram" onclick="return false">Galerie</a>
                                    </li>
                                    <li><a href="">Contact</a></li>
                                    @guest
                                    <li><a href="{{route('login')}}">Connexion</a></li>
                                    @endguest

                                    @auth
                                        <li><a href="{{route('student.dashboard')}}"><i class="fa fa-user"></i> {{Auth::user()->fname}} {{Auth::user()->lname}}</a></li>
                                    @endauth
                                    <li>
                                        <dl class="dl-horizontal-variant-1">
                                            <dt><span class="material-icons-location_on icon"></span></dt>
                                            <dd><a href="#">USA, LOS ANGELES, 901 East E Street, Wilmington, CA 90744</a></dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="dl-horizontal-variant-1">
                                            <dt><span class="material-icons-local_phone icon"></span></dt>
                                            <dd><a href="callto:#">(800) 123 1234</a></dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-search">
                                <form action="search.php" method="GET" class="rd-navbar-search-form">
                                    <label class="rd-navbar-search-form-input">
                                        <input type="text" name="s" placeholder="I`m looking for..." autocomplete="off">
                                    </label>
                                    <button type="submit" class="rd-navbar-search-form-submit"></button>
                                </form>
                                <button data-rd-navbar-toggle=".rd-navbar-search" type="submit" class="rd-navbar-search-toggle"></button>
                            </div>
                        </div>
                        <!-- Social list-->
                        <div class="rd-navbar-social-panel">
                            <ul class="list-inline">
                                <li><a href="{{$content->facebook}}" class="icon icon-xs icon-dark icon-circle fa-facebook"></a></li>
                                <li><a href="{{$content->instagram}}" class="icon icon-xs icon-dark icon-circle fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    @yield('content')

        <footer class="page-foot footer-default text-center text-md-left bg-light">
            <div class="container">
                <div class="range range-sm-justify">
                    <div class="cell-xs-12 cell-md-3 cell-md-push-1 text-md-left">
                        <div class="rd-navbar-brand">
                            <div class="brand-name"><a href="#"><img src="{{asset($content->footer_logo)}}" alt="" style="height: 50px !important;"></a></div>
                        </div>
                        <p class="copyright">&#169; &nbsp;<span id="copyright-year"></span>&nbsp; | &nbsp;<a href="terms.html" class="text-base">Privacy Policy</a></p>
                    </div>
                    <div class="cell-xs-12 cell-md-3 offset-top-20 offset-md-top-7 offset-lg-top-0 cell-md-push-3 text-md-right">
                        <ul class="list-inline">
                            <li><a href="{{$content->facebook}}" class="icon icon-xs icon-primary icon-circle icon-border fa-facebook"></a></li>
                            <li><a href="{{$content->instagram}}" class="icon icon-xs icon-primary icon-circle icon-border fa-instagram"></a></li>
                        </ul>
                    </div>
                    <div class="cell-xs-12 cell-md-6 offset-top-20 offset-md-top-7 offset-lg-top-0 cell-md-push-2">
                        <ul class="list-unstyled">
                            <li>
                                <dl class="dl-horizontal-variant-1 clearfix">
                                    <dt><span class="material-icons-location_on icon icon-dark icon-xs"></span></dt>
                                    <dd><a href="#" class="text-sbold text-base">{{$content->address}}</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="dl-horizontal-variant-1 clearfix">
                                    <dt><span class="material-icons-local_phone icon icon-dark icon-xs"></span></dt>
                                    <dd><a href="callto:{{$content->phone}}" class="text-bold text-base h6">{{$content->phone}}</a></dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="dl-horizontal-variant-1 clearfix">
                                    <dt><span style="font-size: 20px" class="icon icon-md icon-primary material-icons-email icon icon-dark icon-xs"></span></dt>
                                    <dd><a href="callto:{{$content->email}}" class="text-bold text-base h6">{{$content->email}}</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </main>
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- PhotoSwipe Gallery-->
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
        </div>
    </div>
</div>
<!-- Java script-->
<script src="{{asset('front/js/core.min.js')}}"></script>
<script src="{{asset('front/js/script.js')}}"></script>
@yield('script')
</body>
</html>
