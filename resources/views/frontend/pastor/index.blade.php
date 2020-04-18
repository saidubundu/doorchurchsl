@extends('layouts.frontend')

@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Team Grid</h1>
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
                            <li class="active">Team Grid</li>
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
                        <div class="church-team church-team-grid">
                            <ul class="row">
                                @foreach($pastors as $pastor)
                                <li class="col-md-3">
                                    <div class="church-team-grid-wrap">
                                        <figure><a href="{{route('pastor.show', $pastor->id)}}"><img src="{{$pastor->pastor_image_url}}" alt=""></a>
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
                                            <h2><a href="{{route('pastor.show', $pastor->id)}}">{{$pastor->name}}</a></h2>
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
