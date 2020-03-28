@extends('layouts.frontend')

@section('content')

    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url('images/top-banner.jpg')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Events</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Event</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner -->
    <!--  event slider -->
    <section id="events" class="events-main-block event-two">
        <div class="container">
            <div id="event-slider-two" class="event-slider-two">
                <div class="item event-block">
                    <div class="event-img">
                        <img src="images/event/event-page-slider.jpg" class="img-responsive" alt="event-slider-1">
                        <div class="overlay-bg"></div>
                    </div>
                    <div class="event-countdown">
                        <div class="coming-countdown" data-countdown="2017/4/30"></div>
                    </div>
                </div>
                <div class="item event-block">
                    <div class="event-img">
                        <img src="images/event/event-page-slider.jpg" class="img-responsive" alt="event-slider-2">
                        <div class="overlay-bg"></div>
                    </div>
                    <div class="event-countdown">
                        <div class="coming-countdown" data-countdown="2017/4/30"></div>
                    </div>
                </div>
                <div class="item event-block">
                    <div class="event-img">
                        <img src="images/event/event-page-slider.jpg" class="img-responsive" alt="event-slider-3">
                        <div class="overlay-bg"></div>
                    </div>
                    <div class="event-countdown">
                        <div class="coming-countdown" data-countdown="2017/4/30"></div>
                    </div>
                </div>
                <div class="item event-block">
                    <div class="event-img">
                        <img src="images/event/event-page-slider.jpg" class="img-responsive" alt="event-slider-4">
                        <div class="overlay-bg"></div>
                    </div>
                    <div class="event-countdown">
                        <div class="coming-countdown" data-countdown="2017/4/30"></div>
                    </div>
                </div>
            </div>
            <div class="section text-center">
                <h3 class="event-heading">Nullam ullamcorper ultricies nulla mattis blandit Praesent dignissim quam bibendum.</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
            </div>
        </div>
    </section>
    <!--  end events -->
    <!--  speaker -->

    <!--  end speaker -->
    <!--  upcoming events  -->
    <section id="upcoming-events" class="upcoming-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Upcoming Events</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
            </div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 row-top-spacing">
                    <div class="upcoming-block">
                        <div class="upcoming-img block-effect">
                            <a href="event-details.html"><img src="{{$event->event_image_url}}" class="img-responsive" alt="upcoming-img-01"></a>
                        </div>
                        <div class="upcoming-content">
                            <a href="event-details.html"><h4 class="upcoming-heading">{{str_limit($event->title, 20)}}.</h4></a>
                            <p class="upcoming-dtl">{{str_limit($event->body,60)}}</p>
                            <a class="read-more" href="{{route('event.show', $event->id)}}">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- end upcoming -->
    <!--  end supporter -->

    @stop
