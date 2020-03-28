@extends('layouts.frontend')
@section('content')
    <!--  page banner -->
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Blog</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Blog</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner-->
    <!--  blog  -->
    <section id="news" class="news-main-block news-two">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row-top-spacing">
                    <div class="news-block">

                        <div class="news-img block-effect">
                            <a><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" class="img-responsive img-fluid" alt="blog-img-3"></a>
                        </div>

                        <div class="news-content">
                            <div class="news-desc">
                                <p class="news-date"><i class="fa fa-calendar"></i>Posted {{$post->created_at->diffForHumans()}}</p>
                                <p class="news-by"><i class="fa fa-user"></i>Post By : <a href="#">{{$post->user->name}}</a></p>
                            </div>
                            <a href="{{route('post.show', $post->id)}}"><h4 class="news-heading">{{str_limit($post->title,20)}}</h4></a>
                            <p class="news-dtl">{{str_limit($post->excerpt,150)}}</p>
                            <a class="read-more" href="{{route('post.show', $post->id)}}">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>
            <div class="row">
                <div class="col-md-12 load-more text-center">
                    <span class="load-more-btn"><a href="#" class="btn btn-default">Load More</a></span>
                </div>
            </div>
        </div>
    </section>
    <!--  end blog -->
    @stop
