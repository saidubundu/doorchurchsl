@extends('layouts.frontend')

@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Gallery</h1>
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
                            <li class="active">Our Gallery</li>
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
                        <div class="church-gallery-wrap">
                            <div class="church-gallery church-modern-gallery">
                                <ul class="row">
                                    @foreach($photos as $photo)
                                    <li class="col-md-4">
                                        <figure><a data-fancybox-group="group" href="{{$photo->image_url}}" class="fancybox"><img src="{{$photo->image_url}}" alt=""></a>
                                            <figcaption>
                                                <ul class="church-gallery-option">
                                                    <li><a data-fancybox-group="group" href="{{$photo->image_url}}" class="fancybox"><i class="icon church-search2"></i></a></li>
                                                </ul>
                                            </figcaption>
                                        </figure>
                                        <div class="church-modern-gallery-text">
                                            <h5><a>{{$photo->title}}</a></h5>
                                            <time datetime="2008-02-14 20:00">{{$photo->created_at}}</time>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            <div class="church-pagination">

                                    {{$photos->render()}}

                            </div>
                            <!--// Pagination \\-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>

@stop
@section('script')
    <script>
        const player = new Plyr('#player',{
            controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
            loadSprite: true,
            iconUrl: '{{asset('sprite')}}',
            seekTime: 10,
        });
    </script>
    @stop
