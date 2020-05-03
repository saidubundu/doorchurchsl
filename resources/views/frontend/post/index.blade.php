@extends('layouts.frontend')
@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>News</h1>
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
                            <li class="active">News </li>
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
                    @if($posts->isEmpty())
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
                        <div class="church-blog church-blog-grid">
                            <ul class="row">


                                @foreach($posts as $post)
                                    <?php $commentsCounts = $post->comments->count() ?>
                                <li class="col-md-4">
                                    <div class="church-blog-grid-wrap">
                                        <figure><a href="{{route('post.show', $post->slug)}}"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""><i class="icon church-unlink"></i></a>
                                            <figcaption class="church-time-date"><span>{{$post->date()}}</span> <small>{{$post->month()}} {{$post->year()}}</small></figcaption>
                                        </figure>
                                        <div class="church-bloggrid-slidetext">
                                            <h2><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h2>
                                            <ul class="church-blog-option">
                                                <li>by <a>{{$post->user->name}}</a></li>
                                                <li><i class="fa fa-comments-o"></i> <a href="{{route('post.show', $post->slug)}}#post-comments" >{{$commentsCounts}} {{str_plural('Comment', $commentsCounts)}}</a></li>
                                            </ul>
                                            <p>{!! str_limit($post->excerpt, 100) !!}</p>
                                            <a href="{{route('post.show', $post->slug)}}" class="church-blog-readmore church-bgcolor">Read Article</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="church-pagination">
                            {{$posts->render()}}
                        </div>
                        <!--// Pagination \\-->
                    </div>
                    @endif
                </div>

            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    @stop
