@extends('layouts.frontend')

@section('content')
    <!--  page banner -->
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Pastor Detail</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Pastor Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner -->
    <!--  pastor detail -->
    <section id="pastor-dtl-page" class="pastor-dtl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="pastor-img">
                        <img src="{{$pastor->pastor_image_url}}" class="img-responsive" alt="pastor-img-1">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
                            <div class="pastor-content">
                                <h3 class="pastor-id">{{$pastor->name}}</h3>
                                <p class="pastor-post">{{$pastor->position}}</p>
                                <hr>
{{--                                <div class="social-icon social-two">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                        <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                        <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                        <li><a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <p class="pastor-desc">{{$pastor->bio}}</p>
                                <div class="pastor-body">
                                    <div class="row">
                                        <div class="col-xs-3"><p>Pastor Address:</p></div>
                                        <div class="col-xs-9"><p>{{$pastor->address}}<br> <br> </p></div>
                                        <div class="col-xs-3"><p>Phone:</p></div>
                                        <div class="col-xs-9"><p class="contact-no"><a href="tel:{{$pastor->phone}}">{{$pastor->phone}}</a><br></p></div>
                                        <div class="col-xs-3"><p>Email:</p></div>
                                        <div class="col-xs-9">
                                            <p class="mail-to"><a href="mailto:{{$pastor->email}}?Subject=Hello%20again" target="_top">{{$pastor->email}}</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end pastor detail -->
    <!--  pastor quote -->
    <section id="pastor-quote" class="pastor-quote-main-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pastor-quote-block">
                        <span class="quotes-icon"><i class="fa fa-quote-left"></i></span>
                        <p>Vivamus elementum, purus sit amet lobortis ornare, justo velit sollicitudin justo, sed faucibus neque sem eget metus. Sed pretium ullamcorperSed volutpat ante vel erat pharetra, eu vulputate sapien faucibus. Praesent consequat justo dolor, in vulputate eros mollis ultrices. Aenean dictum placerat nulla vel facilisis. Aenean ipsum turpis, tristique vel fermentum eu, gravida vel ante. Nullam vestibulum vehicula quam id sodales. Donec orci nulla, viverra eget massa a, auctor malesuada metus.</p>
                        <span class="quotes-icon"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end pastor quote -->
    <!-- end contact form -->
    @stop
