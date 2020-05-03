@extends('layouts.frontend')

@section('content')
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Pastor's Detail</h1>
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
                            <li><a href="{{route('pastor.index')}}">Pastors</a></li>
                            <li class="active">{{$pastor->name}}</li>
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
                                        <figure class="churuch-team-thumb"><img src="{{$pastor->image_url}}" alt=""></figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="churuch-team-text">
                                            <h2>{{$pastor->name}}</h2>
                                            <ul class="churuch-team-social">
                                                @if($pastor->facebook)
                                                <li><a href="{{$pastor->facebook}}" class="fa fa-facebook"></a></li>
                                                @endif
                                                @if($pastor->twitter)
                                                <li><a href="{{$pastor->twitter}}" class="fa fa-twitter"></a></li>
                                                    @endif
                                                 @if($pastor->whatsapp)
                                                <li><a href="{{$pastor->whatsapp}}" class="fa fa-whatsapp"></a></li>
                                                    @endif
                                                 @if($pastor->instagram)
                                                <li><a href="{{$pastor->instagram}}" class="fa fa-instagram"></a></li>
                                                     @endif
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
                                                <a href="mailto:{{$pastor->email}}">Email me now!</a>
                                            </li>
                                            <li>
                                                <h6>Home Address</h6>
                                                <span> {{$pastor->address}}</span>
                                            </li>
                                            <li>
                                                <h6>Church Branch</h6>
                                                <span> {{$pastor->branch}}</span>
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
