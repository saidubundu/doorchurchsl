@extends('layouts.frontend')

@section('content')

    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Events</h1>
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
                            <li class="active">Events</li>
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
                    @if($events->isEmpty())
                        <div class="church-search-result-text">
                            <img src="{{asset('images/search-title.png')}}" alt="">
                            <h2>We're sorry, This page is empty</h2>
                            <p>Can't find what you need? Take a moment and do a search below or start from our homepage.</p>
                            <form action="{{route('search.result')}}">
                                <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }" tabindex="0" type="text">
                                <input type="submit" value="Search">
                            </form>
                            <div class="clearfix"></div>
                            <a href="/" class="church-blog-readmore church-bgcolor">Back To Homepage</a>
                        </div>
                    @else
                    <div class="col-md-12">
                        <div class="church-event church-event-grid">
                            <ul class="row">
                                @foreach($events as $event)
                                <li class="col-md-4">
                                    <figure><span>event</span><a href="{{route('event.show',$event->id)}}"><img src="{{$event->image_url ? $event->image_url : '/images/holder/posts.png'}}" alt=""><span>Join us</span></a>
                                        <figcaption class="church-time-date"><span>{{$event->date()}}</span> <small>{{$event->month()}} {{$event->year()}}</small></figcaption>
                                    </figure>
                                    <div class="church-event-grid-text">
                                        <h2><a href="{{route('event.show',$event->id)}}">{{str_limit($event->title, 30)}}</a></h2>
                                        <ul class="event-grid-option">
                                            <li><i class="icon church-location-pin"></i>{{$event->location}}</li>
                                            <li><i class="icon church-clock2"></i>{{$event->time()}}</li>
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
                            {{$events->render()}}
                        </div>
                        <!--// Pagination \\-->
                    </div>
                @endif
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

@stop
