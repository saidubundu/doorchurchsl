@extends('layouts.frontend')
@section('content')

    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Cause Grid</h1>
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
                            <li class="active">Causes </li>
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
                    @if($causes->isEmpty())
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
                        <div class="church-cause church-cause-grid">
                            <ul class="row">
                                @foreach($causes as $cause)
                                <li class="col-md-4">
                                    <div class="church-cause-grid-wrap">
                                        <figure><a href="{{route('cause.show', $cause->id)}}"><img src="{{$cause->image_url}}" alt=""><span>12 Donors</span></a></figure>
                                        <div class="church-grid-skillst">
                                            <div class="skillst"><div class="progressbar1" data-width="{{$cause->percentage}}" data-target="{{$cause->percentage}}"></div></div>
                                        </div>
                                        <div class="church-cause-grid-text">
                                            <h2><a href="{{route('cause.show', $cause->slug)}}">{{$cause->title}}</a></h2>
                                            <span><strong>Raised:</strong> Le{{$cause->initial}} </span>
                                            <span class="church-color"><strong>Goal:</strong> Le{{$cause->goal}}</span>
                                            <p>{!! str_limit($cause->excerpt) !!}</p>
                                            <a href="{{route('cause.show', $cause->slug)}}" class="church-blog-readmore church-bgcolor">Donate Now</a>
                                        </div>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="church-pagination">
                            <ul class="page-numbers">
                                {{$causes->render()}}
                            </ul>
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
