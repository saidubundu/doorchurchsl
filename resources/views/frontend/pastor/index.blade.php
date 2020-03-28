@extends('layouts.frontend')

@section('content')
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Pastor</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Pastor</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner -->
    <!--  blog  -->

    <section id="pastor-gallery" class="pastor-gallery-main-block">
        <div class="container">
            <div class="row">
                @foreach($pastors as $pastor)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 row-top-spacing">
                    <div class="pastor-gallery-block">
                        <div class="overlay-bg"></div>
                        <div class="pastor-img">
                            <a href="pastor-details.html"><img src="{{$pastor->pastor_image_url}}" class="img-responsive" alt="pastor-img-1"></a>
                        </div>
                        <div class="pastor-content">
                            <a href="{{route('pastor.show',$pastor->id)}}"><h4 class="pastor-id">{{$pastor->name}}</h4></a>
                            <p class="pastor-post">{{$pastor->position}}</p>
{{--                            <div class="social-icon social-two">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                                    <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                    <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                    <li><a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 load-more text-center">
                    <span class="load-more-btn"><a href="#" class="btn btn-default">View More</a></span>
                </div>
            </div>
        </div>
    </section>
    @stop
