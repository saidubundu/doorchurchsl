@extends('layouts.frontend')

@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Pastors</h1>
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
                            <li class="active"> Pastors</li>
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
                    @if($pastors->isEmpty())
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
                        <div class="church-team church-team-grid">
                            <ul class="row">
                                @foreach($pastors as $pastor)
                                <li class="col-md-3">
                                    <div class="church-team-grid-wrap">
                                        <figure><a href="{{route('pastor.show', $pastor->slug)}}"><img src="{{$pastor->image_url}}" alt=""></a>
                                            <figcaption>
                                                <ul class="church-team-social">
                                                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-square"></a></li>
                                                    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter-square"></a></li>
                                                    <li><a href="https://plus.google.com/" class="fa fa-google-plus-square"></a></li>
                                                    <li><a href="https://www.youtube.com/signin" class="fa fa-youtube-square"></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="church-team-grid-text">
                                            <h2><a href="{{route('pastor.show', $pastor->slug)}}">{{$pastor->name}}</a></h2>
                                            <span>{{$pastor->position}}</span>
                                            <p>Sed vulputate elementum aliq Nunc vel efficitur ante. Ut gri nulla id ornare sodales.</p>
                                        </div>
                                    </div>
                                </li>
                              @endforeach
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="church-pagination">
                            {{$pastors->render()}}
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
