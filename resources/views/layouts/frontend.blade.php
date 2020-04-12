<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2020 .
**********************************************************************************************************  -->
<!--

Author: PeekTower
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->
<head>
    <title>The Door Church</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="The Door Church" />
    <meta name="keywords" content="The Door Church, church, The Door, bible, charity, christ, christian, church, churches, events,non profit, religion, religious, sermon">
    <meta name="author" content="wp-organic" />
    <meta name="MobileOptimized" content="320" />
    <!-- favicon-icon -->
    <link rel="icon" type="image/icon" href="{{asset('images/favicon/favi.ico')}}">
    <!-- theme style -->
    <!-- bootstrap css -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- fontawesome css -->
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- flat icons css -->
    <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
    <!-- google font -->
    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />
    <svg viewBox="0 0 100 100" class="icon shape-codepen">
        <use xlink:href="https://cdn.plyr.io/3.5.10/plyr.svg"></use>
    </svg>

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- menu css -->
    <link href="{{asset('frontend/css/menumaker.css')}}" rel="stylesheet" type="text/css"/>
    <!-- owl carousel css -->
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <!-- magnify popup css -->
    <link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
    <!-- datepicker css -->
    <link href="{{asset('frontend/css/datepicker.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/css/APlayer.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- custom css -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader -->
<div class="preloader">
    <div class="status">
        <div class="status-message">
        </div>
    </div>
</div>
<!-- end preloader -->
<!--  navigation -->
<div class="nav-bar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="logo">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="navigation-menu">
                    <div id="cssmenu">
                        <ul>
                            <li><a href="/">Home</a></li>

                            <li><a href="{{route('pastor.index')}}">Pastors</a></li>

                            <li><a href="{{route('sermon.index')}}">Sermons</a></li>

                            <li><a href="{{route('event.index')}}">Event</a></li>

                            <li><a href="{{route('post.index')}}">Blog</a></li>

                            <li><a href="#">Gallery</a>
                                <ul>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="gallery-3-col.html">Gallery 3 Column</a></li>
                                    <li><a href="gallery-3-full-col.html">Gallery 3 Column Fullwidth</a></li>
                                    <li><a href="gallery-4-col.html">Gallery 4 Column</a></li>
                                    <li><a href="gallery-4-full-col.html">Gallery 4 Column Fullwidth</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li class="donate-btn"><a href="donation.html" class="btn btn-default">Donate</a></li>
                            <li class="search-icon"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end navigation -->
<!-- search -->
<div class="search">
    <div class="container clearfix">
        <input type="search" class="search-box" placeholder="Type anything here...."/>
        <a href="#" class="fa fa-times search-close"></a>
    </div>
</div>
<!-- end search -->
<!--  slider -->
<header id="home-slider" class="slider-main-block">
    <div class="item home-slider-img" style="background-image: url({{asset('images/slider-01.jpg')}})">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="slider-dtl">
                <h1 class="slider-heading">Aenean varius mi purus vehicula<br>upcoming events</h1>
                <h5 class="slider-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
                <div class="slider-countdown">
                    <div class="coming-countdown" data-countdown="2017/4/30"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="item home-slider-img" style="background-image: url({{asset('images/slider-02.jpg')}})">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="slider-dtl">
                <h1 class="slider-heading">Lorem ipsum dolor sit amet<br>upcoming events</h1>
                <h5 class="slider-subheading">Cursus lorem, ac iaculis metus sem vitae purus. Vivamus suscipit velit nec maximus interdum. Maecenas sit. </h5>
                <div class="slider-countdown">
                    <div class="coming-countdown" data-countdown="2017/4/30"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="item home-slider-img" style="background-image: url({{asset('images/slider-03.jpg')}})">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="slider-dtl">
                <h1 class="slider-heading">Maecenas sit sollicitudin <br>upcoming events</h1>
                <h5 class="slider-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
                <div class="slider-countdown">
                    <div class="coming-countdown" data-countdown="2017/4/30"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  end slider -->
   @yield('content')
<!-- footer -->
<footer id="footer" class="footer-main-block">
    <div class="bg-img" style="background-image: url({{asset('images/footer-bg.jpg')}})">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row footer-block">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-logo">
                        <a href="/"><img src="{{asset('images/footer-logo.png')}}" class="img-responsive" alt="footer-logo"></a>
                    </div>
                    <div class="row footer-content">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Office:</p></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><p>Ferry Junction<br>Bai Bureh Road<br>Freetown</p></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Phone:</p></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><p class="contact-no"><a href="tel:012123456789">+232 78 000 000</a><br><a href="tel:012123456789">+232 78 000 000</a></p></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><p>Email:</p></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <p class="mail-to"><a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">thedoorchurch@example.com</a><br>
                                <a href="mailto:wporganic@example.com?Subject=Hello%20again" target="_top">thedoorchurch@example.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-section">
                        <h6 class="footer-heading">Recent Posts</h6>
                    </div>
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 footer-post"><a href="blog-details.html"><img src="images/footer/post-thumb-01.jpg" class="img-responsive" alt="post-img-01"></a></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 footer-post"><a href="blog-details.html"><p>Vivamus et tincidunt ligula. Vivamus<br><span class="footer-post-date">12 April 2017</span></p></a></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 footer-post"><a href="blog-details.html"><img src="images/footer/post-thumb-02.jpg" class="img-responsive" alt="post-img-02"></a></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 footer-post"><a href="blog-details.html"><p>Vivamus et tincidunt ligula. Vivamus<br><span class="footer-post-date">12 April 2017</span></p></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-section">
                        <h6 class="footer-heading">Our Causes</h6>
                    </div>
                    <div class="accor-widget footer-cause-block">
                        <div class="panel-group cause-panel" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <p class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                                            Do you have an installation service?
                                        </a>
                                    </p>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Dramatically redefine effective users for synergistic e-business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <p class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                                            Are updates free of charge?
                                        </a>
                                    </p>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Dramatically redefine effective users for synergistic e-business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <p class="panel-title question-heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <span class="btn btn-default cause-btn cause-btn-minus"><i class="fa fa-minus"></i></span>
                                            <span class="btn btn-default cause-btn cause-btn-plus"><i class="fa fa-plus"></i></span>
                                            Can i use Semona on all projects?
                                        </a>
                                    </p>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Dramatically redefine effective users for synergistic e-business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-section">
                        <h6 class="footer-heading">Our Gallery</h6>
                    </div>
                    <div class="footer-content portfolio-popup">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-01.jpg" class="img-responsive" alt="gallery-thumb-01">
                                <div class="portfolio-overlay"><a href="images/gallery/gallery-07.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-02.jpg" class="img-responsive" alt="gallery-thumb-02">
                                <div class="portfolio-overlay"><a href="images/ministry/ministry-leader.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-03.jpg" class="img-responsive" alt="gallery-thumb-03">
                                <div class="portfolio-overlay"><a href="images/donation/donation-04.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-04.jpg" class="img-responsive" alt="gallery-thumb-04">
                                <div class="portfolio-overlay"><a href="images/gallery/gallery-06.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-05.jpg" class="img-responsive" alt="gallery-thumb-05">
                                <div class="portfolio-overlay"><a href="images/gallery/gallery-09.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 portfolio-item">
                            <div class="portfolio-img">
                                <img src="images/footer/gallery-thumb-06.jpg" class="img-responsive" alt="gallery-thumb-06">
                                <div class="portfolio-overlay"><a href="images/gallery/gallery-10.jpg"><i class="fa fa-plus"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-dtl text-center">
                    <p>Copyright &copy; {{\Carbon\Carbon::now()->year}} <a href="/">The Door Church</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- jquery -->
<!-- jquery library js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="https://cdn.plyr.io/3.5.10/plyr.polyfilled.js"></script>

<script type="text/javascript" src="{{asset('frontend/js/APlayer.min.js')}}"></script>
<!-- owl carousel js -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<!-- mail chimp js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.ajaxchimp.js')}}"></script>
<!-- smooth scroll js -->
<script type="text/javascript" src="{{asset('frontend/js/smooth-scroll.js')}}"></script>
<!-- magnify popup js-->
<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- menu js-->
<script type="text/javascript" src="{{asset('frontend/js/menumaker.js')}}"></script>
<!-- price slider js -->
<script type="text/javascript" src="{{asset('frontend/js/price-slider.js')}}"></script>
<!-- event countdown js -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.countdown.js')}}"></script>
<!-- custom js -->
<script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script>
<!-- end jquery -->
</body>
@yield('script')
<!--body end -->
</html>
