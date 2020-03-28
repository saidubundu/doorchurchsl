@extends('layouts.frontend')

@section('content')

    <!--  page banner -->
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Events</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Event Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end  page banner-->
    <!--  event background -->
    <section id="event-dtl-bg" class="event-bg-block">
        <div class="bg-img" style="background-image: url({{$event->event_image_url}})">
            <div class="overlay-bg"></div>
            <div class="event-bg-content">
                <div class="event-countdown">
                    <div class="coming-countdown" data-countdown=""></div>
                </div>
                <div class="event-calendar">
                    <span><i class="fa fa-calendar"></i></span>
                    <h5 class="event-date">{{$event->date}}</h5>
                </div>
                <div class="event-address">
                    <span><i class="fa fa-map-marker"></i></span>
                    <h5 class="event-venue">20 March 2017. Postal Address<br>Box 16122 Collins Street West.<br>Phone +61 38376 6284.</h5>
                </div>
                <div class="load-more-btn">
                    <a class="btn btn-default">Buy Ticket</a>
                </div>
            </div>
        </div>
    </section>
    <!--  end events background-->
    <!--  event detail -->
    <section id="event-dtl-block" class="event-dtl-block">
        <div class="container">
            <div class="event-dtl-section">
                <h3 class="event-dtl-heading">Nullam ullamcorper ultricies nulla mattis blandit<br> Praesent dignissim quam bibendum.</h3>
                <p>Vivamus elementum, purus sit amet lobortis ornare, justo velit sollicitudin justo, sed faucibus neque sem eget metus. Sed pretium ullamcorper nunc eu dictum. Maecenas id porta enim. Praesent lobortis urna felis, sed tempor tellus gravida sit amet. Aliquam mauris risus, rhoncus in eros ut, scelerisque semper leo. Quisque interdum accumsan urna vel scelerisque. Duis fermentum luctus lobortis. Morbi cursus velit non purus efficitur hendrerit. Etiam id lorem placerat, hendrerit nibh ut, pharetra diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam lacus arcu, aliquet eget accumsan in, accumsan id nisl. Nulla facilisi. Donec egestas finibus ullamcorper.</p>
            </div>
            <div class="event-dtl-content">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <div class="event-dtl-img block-effect">
                            <img src="images/event/event-dtl-01.jpg" class="img-responsive" alt="speaker-img-1">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="event-manager-dtl">
                            <div class="manager-img">
                                <img src="images/event/event-dtl-06.jpg" class="img-responsive" alt="speaker-img-1">
                            </div>
                            <h4 class="manager-post">Event Manager</h4>
                            <div class="social-icon social-two">
                                <ul>
                                    <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <p>Vivamus elementum, purus sit amet lobortis ornare, justo velit sollicitudin justo, sed faucibus neque sem eget metus. Sed pretium ullamcorper nunc eu dictum. Maecenas id porta enim. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <div class="event-dtl-img block-effect">
                            <img src="images/event/event-dtl-05.jpg" class="img-responsive" alt="speaker-img-1">
                        </div>
                    </div>
                </div>
                <div class="row row-top-spacing">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="event-dtl-img block-effect">
                            <img src="images/event/event-dtl-02.jpg" class="img-responsive" alt="speaker-img-1">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="event-dtl-img block-effect">
                            <img src="images/event/event-dtl-03.jpg" class="img-responsive" alt="speaker-img-1">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="event-dtl-img block-effect">
                            <img src="images/event/event-dtl-04.jpg" class="img-responsive" alt="speaker-img-1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="event-dtl-sectionTwo">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at ante at lacus placerat mattis. Morbi egestas porta consectetur. Vestibulum pharetra dolor nulla, in sollicitudin justo interdum eu. Vivamus elementum, purus sit amet lobortis ornare, justo velit sollicitudin justo, sed faucibus neque sem eget metus. Sed pretium ullamcorper nunc eu dictum. Maecenas id porta enim. Praesent lobortis urna felis, sed tempor tellus gravida sit amet. Aliquam mauris risus, rhoncus in eros ut, scelerisque semper leo. Quisque interdum accumsan urna vel scelerisque. Duis fermentum luctus lobortis. Morbi cursus velit non purus efficitur hendrerit. Etiam id lorem placerat, hendrerit nibh ut, pharetra diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam lacus arcu, aliquet eget accumsan in, accumsan id nisl. Nulla facilisi. Donec egestas finibus ullamcorper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end speaker -->
    <!--  upcoming events  -->
    <section id="upcoming-events" class="upcoming-main-block upcoming-two">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Upcoming Events</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="upcoming-block">
                        <div class="upcoming-img block-effect">
                            <a href="#"><img src="images/event/event-dtl-upcoming-01.jpg" class="img-responsive" alt="upcoming-img-01"></a>
                        </div>
                        <div class="upcoming-content">
                            <a href="#"><h4 class="upcoming-heading">Lorem ipsum dolor sitmet.</h4></a>
                            <p class="upcoming-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet ipsum at mattis</p>
                            <a class="read-more" href="#">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="upcoming-block">
                        <div class="upcoming-img block-effect">
                            <a href="#"><img src="images/event/event-dtl-upcoming-02.jpg" class="img-responsive" alt="upcoming-img-02"></a>
                        </div>
                        <div class="upcoming-content">
                            <a href="#"><h4 class="upcoming-heading">Lorem ipsum dolor sitmet.</h4></a>
                            <p class="upcoming-dtl">Aliquam laoreet orci quis risus vulputate tempor. Quisque aliquet ipsum at mattis</p>
                            <a class="read-more" href="#">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end upcoming -->

@stop
