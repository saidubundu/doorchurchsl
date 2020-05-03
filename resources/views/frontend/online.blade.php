@extends('layouts.frontend')
@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Live Stream</h1>
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
                            <li class="active">Online</li>
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
                    @if($streams->isEmpty())
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
                    <div class="churuch-team-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="church-fancy-title">
                                        <h2>[ Live Sermons and Events ]</h2>
                                        <span>What's happening here & around the world.</span>
                                    </div>
                                </div>
                                <div class="church-cause-strip">

                                    <div id="stream">
                                        <iframe width="560" height="600"
                                                src="{{$newStream->link}}" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="church-main-section church-about-servicefull">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-8">

                                </div>
                                <div class="col-md-12">
                                    <div class="church-fancy-title">
                                        <h2>[ Past Sermons and Events ]</h2>
                                        <span>What's happening here & around the world.</span>
                                    </div>
                                    <div class="church-service church-about-service">
                                        <ul class="row">
                                            @foreach($streams as $stream)
                                            <li class="col-md-6">
                                                <iframe width="560" height="315"
                                                        src="{{$stream->link}}" frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                        @endif
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->
    @stop
