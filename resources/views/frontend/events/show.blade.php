@extends('layouts.frontend')

@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Event's Detail</h1>
                        <div class="clearfix"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Aliquam ac egestas velit</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="church-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="/">Homepage</a></li>
                            <li><a href="{{route('event.index')}}">Events</a></li>
                            <li class="active">Event's Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader \\-->


    <!--// Main Content \\-->
    <div class="church-main-content">

        <!--// Main Section \\-->
        <div class="church-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="church-event-detail">
                            <figure class="church-event-thumb"><img src="{{$event->image_url ? $event->image_url : '/images/holder/posts.png'}}" alt="">
{{--                                <figcaption>--}}
{{--                                    <div class="church-event-countdown" id="church-event-countdown"></div>--}}
{{--                                </figcaption>--}}
                            </figure>
                            <div class="church-event-heading">
                                <h2>{{$event->title}}</h2>
                                <div class="church-event-option">
                                    <ul class="church-cause-option">
                                        <li><strong>Started Date: </strong> <time datetime="2008-02-14 20:00">{{$event->date()}} {{$event->month()}} {{$event->year()}}</time></li>

                                    </ul>

                                </div>
                            </div>
                            <div class="church-rich-editor">
                                {!! $event->body !!}
                            </div>
                            <div class="church-post-tags">
                                <div class="church-social-tag">
                                    <a href="404.html">Videos</a>
                                    <a href="404.html">Prayer</a>
                                    <a href="404.html">Author</a>
                                    <a href="404.html">Church</a>
                                </div>
                                <div class="church-blog-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                        <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.pinterest.com/login/" class="fa fa-pinterest-p"></a></li>
                                        <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <h2 class="church-section-heading">[ Event Speakers ]</h2>
                            <div class="church-event church-event-speaker">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img1.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Darren Martyn</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img2.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Sarena Doe</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                    <li class="col-md-4">
                                        <figure><a href="event-detail.html"><img src="extra-images/related-speaker-img3.jpg" alt=""></a>
                                            <figcaption>
                                                <h4><a href="event-detail.html">Marlon Roy</a></h4>
                                                <span>Speaker</span>
                                                <p>Sed diam risus, auctor et dui vel, rhoncus finibus lorem. Orci varius natoque penatibus et magnis dis partu.</p>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </div>

                            <h2 class="church-section-heading">[ Event Location ]</h2>
                            <div class="church-event-map"><div id="map"></div></div>

                        </div>
                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                        @include('frontend.includes.searchForm')
                        <!--// Widget Search \\-->

                        <!--// Widget Cetagories \\-->
                        @include('frontend.includes.popularSermons')
                        <!--// Widget Cetagories \\-->

                        <!--// Widget Popular News \\-->
                        @include('frontend.includes.popularPost')
                        <!--// Widget Popular News \\-->

                        <!--// Widget Upcoming Events \\-->
                        @include('frontend.includes.popularEvent')
                        <!--// Widget Upcoming Events \\-->

                        <!--// Widget Caendar \\-->

                        <!--// Widget Gallery \\-->

                        <!--// Widget Gallery \\-->

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

@stop
