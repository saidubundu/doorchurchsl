@extends('layouts.frontend')
@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Grid</h1>
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
                            <li class="active">Blog Grid</li>
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
                        <div class="church-blog church-blog-grid">
                            <ul class="row">
                                @foreach($posts as $post)
                                <li class="col-md-4">
                                    <div class="church-blog-grid-wrap">
                                        <figure><a href="{{route('post.show', $post->id)}}"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""><i class="icon church-unlink"></i></a>
                                            <figcaption class="church-time-date"><span>12</span> <small>May 2018</small></figcaption>
                                        </figure>
                                        <div class="church-bloggrid-slidetext">
                                            <h2><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h2>
                                            <ul class="church-blog-option">
                                                <li>by <a href="404.html">{{$post->user->name}}</a></li>
                                                <li><i class="fa fa-comments-o"></i> <a href="404.html">13 comments</a></li>
                                            </ul>
                                            <p>{!! str_limit($post->excerpt, 100) !!}</p>
                                            <a href="{{route('post.show', $post->id)}}" class="church-blog-readmore church-bgcolor">Read Article</a>
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
    @stop
