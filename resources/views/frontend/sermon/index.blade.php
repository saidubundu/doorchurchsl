@extends('layouts.frontend')

@section('content')
    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1> Sermons</h1>
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
                            <li class="active">Sermons</li>
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
                    @if($sermons->isEmpty())
                        <div class="church-search-result-text">
                            <img src="images/search-title.png" alt="">
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
                        <div class="church-sermon church-sermon-grid">
                            <ul class="row">
                                @foreach($sermons as $sermon)
                                <li class="col-md-4">
                                    <figure><a href="{{route('sermon.show', $sermon->slug)}}"><img src="{{$sermon->image_url ? $sermon->image_url : '/images/holder/posts.png'}}" alt=""><span>Read Detail</span></a></figure>
                                    <div class="church-sermon-grid-text">
                                        <h2><a href="{{route('sermon.show', $sermon->slug)}}">{{$sermon->title}}</a></h2>
                                        <ul class="church-cause-option">
                                            <li><i class="icon church-user-silhouette"></i><a href="404.html">{{$sermon->user->name}}</a></li>
                                            <li><i class="icon church-calendar"></i><time datetime="">{{$sermon->month()}} {{$sermon->date()}}, {{$sermon->year()}} </time></li>

                                        </ul>
                                        <p>{!! str_limit($sermon->excerpt, 70) !!} </p>

                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="church-pagination">
                            {{$sermons->links()}}
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
