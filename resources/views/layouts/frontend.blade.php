<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The Door Church Home Page</title>
    <link rel="icon" type="image/icon" href="{{asset('images/favicon/favi.ico')}}">

    <!-- Css Files -->

    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('player/player.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/jplayer.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/APlayer.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/color.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--// Main Wrapper \\-->
<div class="church-main-wrapper">

    <!--// Header \\-->
    <header id="church-header" class="church-header-one">
        <div class="church-main-header">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3"> <a href="/" class="logo"><img src="{{asset('images/logo2.png')}}" alt=""></a> </aside>
                    <aside class="col-md-9">
                        <div class="church-navigation">
                            <!--// Navigation \\-->
                            <a href="#menu" class="menu-link active"><span></span></a>
                            <nav id="menu" class="menu navbar navbar-default">
                                <ul class="level-1 navbar-nav">
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="{{route('post.index')}}">News</a><span class="has-subnav"></span>

                                    </li>
                                    <li><a href="{{route('cause.index')}}">Causes</a><span class="has-subnav"></span>

                                    </li>
                                    <li><a href="{{route('event.index')}}">Events</a><span class="has-subnav"></span>
                                    </li>
                                    <li><a href="{{route('sermon.index')}}">Sermons</a><span class="has-subnav"></span>

                                    </li>
                                    <li><a href="{{route('pastor.index')}}">Pastors</a><span class="has-subnav"></span>

                                    </li>
                                    <li><a href="{{route('gallery.index')}}">Gallery</a><span class="has-subnav"></span>
                                    </li>
                                </ul>
                            </nav>
                            <!--// Navigation \\-->
                            <ul class="church-user-list">

                                <li><a href="#" class="fa fa-search" data-toggle="modal" data-target="#searchmodal"></a></li>

                            </ul>
                            <a href="{{route('online')}}" class="church-btn">Live</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </header>
<!--  end slider -->
   @yield('content')
<!-- footer -->
    <!--// Footer \\-->
    <footer id="church-footer" class="church-footer-one">
        <span class="church-footer-transparent"></span>
        <!--// Footer Widget \\-->
        <div class="church-footer-widget">
            <div class="container">
                <div class="row">

                    <!--// Widget service_time \\-->
                    <aside class="col-md-3 widget widget_service_time">
                        <h2 class="church-footer-heading">[ Church Service Times ]</h2>
                        <ul>
{{--                            <li><time datetime="2008-02-14 20:00"><span>Saturday:</span> 5:00pm - 8:00pm</time></li>--}}
                            <li><time datetime="2008-02-14 20:00"><span>Sunday:</span> 10:am</time></li>
                            <li><time datetime="2008-02-14 20:00"><span>Tuesday:</span> 7:00pm</time></li>
                            <li><time datetime="2008-02-14 20:00"><span>Wednesday:</span> 7:00pm</time></li>
{{--                            <li><time datetime="2008-02-14 20:00"><span>Friday:</span> 8:00pm - 7:00pm</time></li>--}}
                        </ul>
                        <div class="widget_service_note">
                            <p><i class="icon church-exclamation"></i>Childcare Event available during every weekend and on Wednesday service.</p>
                            <span></span>
                        </div>
                    </aside>
                    <!--// Widget service_time \\-->

                    <!--// Widget Latest Sermons \\-->
                   @include('frontend.includes.footerSermon')
                    <!--// Widget Latest Sermons \\-->

                    <!--// Widget Get in Touch \\-->
                    <aside class="col-md-4 widget widget_contact">
                        <h2 class="church-footer-heading">[ Get in Touch ]</h2>
                        <p>Anything you want to share with us:</p>
                        <form>
                            <ul>
                                <li><input value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }" tabindex="0" type="text"></li>
                                <li><input value="Your Email" onblur="if(this.value == '') { this.value ='Your Email'; }" onfocus="if(this.value =='Your Email') { this.value = ''; }" tabindex="0" type="email"></li>
                                <li><textarea placeholder="Your Message"></textarea></li>
                                <li><input type="submit" value="Send"></li>
                            </ul>
                        </form>
                    </aside>
                    <!--// Widget Get in Touch \\-->

                    <!--// Widget Gallery \\-->
                    <aside class="col-md-2 widget widget_gallery">
                        <h2 class="church-footer-heading">[ Gallery ]</h2>
                        <ul>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img1.jpg" class="fancybox"><img src="extra-images/widget-gallery-img1.jpg" alt=""></a></figure></li>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img2.jpg" class="fancybox"><img src="extra-images/widget-gallery-img2.jpg" alt=""></a></figure></li>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img3.jpg" class="fancybox"><img src="extra-images/widget-gallery-img3.jpg" alt=""></a></figure></li>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img4.jpg" class="fancybox"><img src="extra-images/widget-gallery-img4.jpg" alt=""></a></figure></li>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img5.jpg" class="fancybox"><img src="extra-images/widget-gallery-img5.jpg" alt=""></a></figure></li>
                            <li><figure><a data-fancybox-group="group" href="extra-images/widget-gallery-img6.jpg" class="fancybox"><img src="extra-images/widget-gallery-img6.jpg" alt=""></a></figure></li>
                        </ul>
                    </aside>
                    <!--// Widget Gallery \\-->

                </div>
            </div>
        </div>
        <!--// Footer Widget \\-->

        <!--// CopyRight \\-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="church-copyright">
                        <p><span>Copyright {{\Carbon\Carbon::now()->year}}.</span> All Rights Reserved <a href="/">The Door Church</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// CopyRight \\-->

    </footer>
    <!--// Footer \\-->

    <div class="clearfix"></div>

</div>
<!--// Main Wrapper \\-->

<!-- Modal -->
<div class="modal fade searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-body">
            <a href="#" class="church-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
            <form action="{{route('search.result')}}">
                <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type Your Keyword'; }" onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                <input type="submit" value="">
                <i class="fa fa-search"></i>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for JavaScript plugins) -->
<script src="{{asset('frontend/script/jquery.js')}}"></script>
<script src="{{asset('frontend/script/bootstrap.min.js')}}"></script>
<script src="{{asset('player/player.js')}}"></script>
<script src="{{asset('frontend/script/slick.slider.min.js')}}"></script>
<script src="{{asset('frontend/script/fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/script/isotope.min.js')}}"></script>
<script src="{{asset('frontend/script/progressbar.js')}}"></script>
<script src="{{asset('frontend/script/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/script/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/script/jquery.countdown.one.js')}}"></script>
<script src="{{asset('frontend/script/jquery.jplayer.js')}}"></script>
<script src="{{asset('frontend/script/jplayer.playlist.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('frontend/script/functions.js')}}"></script>

</body>
</html>
