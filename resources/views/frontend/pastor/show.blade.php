@extends('layouts.frontend')

@section('content')
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Team Detail</h1>
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
                            <li class="active">Team Detail</li>
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
                        <div class="church-team-detail">
                            <div class="churuch-team-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure class="churuch-team-thumb"><img src="{{$pastor->pastor_image_url}}" alt=""></figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="churuch-team-text">
                                            <h2>{{$pastor->name}}</h2>
                                            <ul class="churuch-team-social">
                                                <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                                <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a></li>
                                                <li><a href="https://www.pinterest.com/login/" class="fa fa-pinterest-p"></a></li>
                                                <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
                                            </ul>
                                            <span>{{$pastor->position}}</span>
                                            {!! $pastor->bio !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="church-section-heading">[ Detail And Contact ]</h2>
                                    <div class="church-team-info">
                                        <p>Etiam auctor dignissim bibendum. Nunc pulvinar massa nunc, quis pellentesq ue felis suscipit eu.</p>
                                        <ul>
                                            <li>
                                                <h6>Phone:</h6>
                                                <span>{{$pastor->phone}}</span>
                                            </li>
                                            <li>
                                                <h6>Email:</h6>
                                                <a href="mailto:{{$pastor->email}}">info@example.com</a>
                                            </li>
                                            <li>
                                                <h6>Degrees:</h6>
                                                <span> M.D. of Finance</span>
                                            </li>
                                            <li>
                                                <h6>Experience:</h6>
                                                <span> 8 years of Experience</span>
                                            </li>
                                            <li>
                                                <h6>Hobby:</h6>
                                                <span>Gardening</span>
                                            </li>
                                            <li>
                                                <h6>Location:</h6>
                                                <span> {{$pastor->location}}</span>
                                            </li>
                                            <li>
                                                <h6>Training:</h6>
                                                <span>Lorem ipsum dolor sit amet, consectetu</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->
    @stop
