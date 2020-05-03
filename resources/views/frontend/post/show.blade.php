@extends('layouts.frontend')

@section('content')

    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>News Detail</h1>
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
                            <li><a href="{{route('post.index')}}">News</a></li>
                            <li class="active">News Detail</li>
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
        <?php $commentsCounts = $post->comments->count() ?>
        <div class="church-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <div class="church-blog-detail">
                            <figure class="church-blog-thumb"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""><figcaption class="church-time-date"><span>{{$post->date()}}</span> <small>{{$post->month()}} {{$post->year()}}</small></figcaption></figure>
                            <div class="church-blog-heading">
                                <h2>{{$post->title}}</h2>
                                <ul class="church-blog-option">
                                    <li>by <a >{{$post->user->name}}</a></li>
                                    <li><i class="fa fa-comments-o"></i> <a href="#post-comments" >{{$commentsCounts}} {{str_plural('Comment', $commentsCounts)}}</a></li>
                                </ul>
                            </div>
                            <div class="church-rich-editor">
                                {!! $post->body !!}
                                <div class="church-blog-author">
                                    <figure><img src="{{$post->user->gravatar()}}" alt=""></figure>
                                    <div class="church-blog-author-text">
                                        <h6><a href="blog-detail.html">{{$post->user->name}}</a></h6>
{{--                                        <ul class="church-author-social">--}}
{{--                                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-square"></a></li>--}}
{{--                                            <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter-square"></a></li>--}}
{{--                                            <li><a href="https://plus.google.com/" class="fa fa-google-plus-square"></a></li>--}}
{{--                                            <li><a href="https://www.youtube.com/signin" class="fa fa-youtube-square"></a></li>--}}
{{--                                        </ul>--}}
                                        <span>{{$post->user->roles->first()->display_name}}</span>
                                        <p>{{$post->user->bio}}</p>
                                    </div>
                                </div>

                            </div>
                            <hr/>
                            <div class="comments-area" id="post-comments">
                                <!--// coments \\-->

                            @include('frontend.includes.comments')
                                <!--// coments \\-->

                                <!--// comment-respond \\-->
                                @include('frontend.includes.formComment')
                                <!--// comment-respond \\-->
                            </div>
                        </div>
                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                        @include('frontend.includes.searchForm')
                        <!--// Widget Search \\-->

                        <!--// Widget Cetagories \\-->
                    @include('frontend.includes.popularSermons')
                    <!--// Widget Cetagories \\-->

                        <!--// Widget Popular News \\-->
                    @include('frontend.includes.popularPost')
                    <!--// Widget Popular News \\-->

                        <!--// Widget Upcoming Events \\-->
                    @include('frontend.includes.popularEvent')
                    <!--// Widget Upcoming Events \\-->

                        <!--// Widget Caendar \\-->

                    <!--// Widget Caendar \\-->

                        <!--// Widget Gallery \\-->

                        <!--// Widget Gallery \\-->
                        <!--// Widget Gallery \\-->

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    @stop
