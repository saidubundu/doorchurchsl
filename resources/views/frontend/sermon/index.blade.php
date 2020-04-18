@extends('layouts.frontend')

@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Sermon Grid</h1>
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
                            <li class="active">Sermon Grid</li>
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
                        <div class="church-sermon church-sermon-grid">
                            <ul class="row">
                                @foreach($sermons as $sermon)
                                <li class="col-md-4">
                                    <figure><a href="{{route('sermon.show', $sermon->id)}}"><img src="{{$sermon->image_url ? $sermon->image_url : '/images/holder/posts.png'}}" alt=""><span>Read Detail</span></a></figure>
                                    <div class="church-sermon-grid-text">
                                        <h2><a href="{{route('sermon.show', $sermon->id)}}">{{$sermon->title}}</a></h2>
                                        <ul class="church-cause-option">
                                            <li><i class="icon church-user-silhouette"></i><a href="404.html">{{$sermon->user->name}}</a></li>
                                            <li><i class="icon church-calendar"></i><time datetime="2008-02-14 20:00">May 16, 2016 @ 08:00</time></li>
                                            <li><i class="icon church-note"></i><a href="404.html">Education,</a><a href="404.html">Learning,</a><a href="404.html">School,</a><a href="404.html">Water</a></li>
                                        </ul>
                                        <p>{!! str_limit($sermon->excerpt, 70) !!} </p>
{{--                                        <ul class="church-sermon-social">--}}
{{--                                            <li><a href="404.html" class="icon church-play-right-arrow-symbol-in-circular-multimedia-button" data-toggle="tooltip" title="Play"></a></li>--}}
{{--                                            <li><a href="404.html" class="icon church-download-button" data-toggle="tooltip" title="Download"></a></li>--}}
{{--                                            <li><a href="404.html" class="icon church-pencil-striped-symbol-for-interface-edit-buttons" data-toggle="tooltip" title="Like"></a></li>--}}
{{--                                            <li><a href="404.html" class="icon church-share" data-toggle="tooltip" title="Share"></a></li>--}}
{{--                                        </ul>--}}
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
