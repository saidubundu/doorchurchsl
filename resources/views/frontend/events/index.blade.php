@extends('layouts.frontend')

@section('content')

    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Event Grid</h1>
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
                            <li><a href="index-2.html">Homepage</a></li>
                            <li class="active">Event Grid</li>
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

                    <div class="col-md-12">
                        <div class="church-event church-event-grid">
                            <ul class="row">
                                @foreach($events as $event)
                                <li class="col-md-4">
                                    <figure><span>event</span><a href="{{route('event.show',$event->id)}}"><img src="{{$event->image_url ? $event->image_url : '/images/holder/posts.png'}}" alt=""><span>Join us</span></a>
                                        <figcaption class="church-time-date"><span>10</span> <small>Feb 2018</small></figcaption>
                                    </figure>
                                    <div class="church-event-grid-text">
                                        <h2><a href="{{route('event.show',$event->id)}}">{{str_limit($event->title, 30)}}</a></h2>
                                        <ul class="event-grid-option">
                                            <li><i class="icon church-location-pin"></i>{{$event->location}}</li>
                                            <li><i class="icon church-clock2"></i>7:00pm - 8:30pm</li>
                                        </ul>
                                        <p>{{str_limit($event->body, 50)}}</p>
                                        <a href="{{route('event.show',$event->id)}}" class="church-blog-readmore church-bgcolor">Read Detail</a>
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="church-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                <li><span class="page-numbers current">01</span></li>
                                <li><a class="page-numbers" href="404.html">02</a></li>
                                <li><a class="page-numbers" href="404.html">03</a></li>
                                <li><a class="page-numbers" href="404.html">04</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

@stop
