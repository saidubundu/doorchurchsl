@extends('layouts.frontend')
@section('content')
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Search Result</h1>
                        <div class="clearfix"></div>
{{--                        <?php $term = request('term')?>--}}
{{--                        <p>{{$term}}</p>--}}
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
                            <li class="active">Search Result</li>
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

                    <div class="col-md-9">
                        @if(isset($searchResults))
                        <div class="church-search-result">
                            @if($searchResults->isEmpty())
                            <div class="church-search-result-text">
                                <img src="images/search-title.png" alt="">
                                <h2>We're sorry, but your search "{{$searchTerm}}" did not match</h2>
                                <p>Can't find what you need? Take a moment and do a search below or start from our homepage.</p>
                                <form action="{{route('search.result')}}">
                                    <input type="text" name="query" value="{{isset($searchTerm) ? $searchTerm : ''}}" onblur="if(this.value == '') { this.value ='Type Here'; }" onfocus="if(this.value =='Type Here') { this.value = ''; }" tabindex="0" type="text">
                                    <input type="submit" value="Search">
                                </form>
                                <div class="clearfix"></div>
                                <a href="/" class="church-blog-readmore church-bgcolor">Back To Homepage</a>
                            </div>
                            @else

                            <h2 class="church-section-heading">[ Showing result for "{{$searchTerm}}" ]</h2>
                            <div class="church-search-result-list">
                                <ul class="row">
                                    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                                        <h2><strong>{{ ucwords($type) }}</strong></h2>
                                    <hr/>
                                    @foreach($modelSearchResults as $searchResult)
                                    <li class="col-md-12">
                                        <figure><img src="{{$searchResult->searchable->image_url ? $searchResult->searchable->image_url : '/images/holder/posts.png'}}" alt=""></figure>
                                        <div class="church-upcoming-event-text">
                                            <h6><a href="{{$searchResult->url}}">{{$searchResult->title}}</a></h6>
{{--                                            <time datetime="2008-02-14 20:00"><i class="icon church-calendar"></i>May 16, 2017 - May 27, 2017</time>--}}
{{--                                            <time datetime="2008-02-14 20:00"><i class="icon church-clock2"></i>7:00pm - 8:30pm</time>--}}
                                            <a href="{{$searchResult->url}}" class="church-simple-readmore-btn">Read More<i class="icon church-right-arrow"></i></a>
                                        </div>
                                    </li>
                                        @endforeach
                                    @endforeach

                                </ul>
                            </div>
                                @endif
                        </div>
                            @endif
                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                        @include('frontend.includes.searchForm')
                        <!--// Widget Search \\-->
                    <!--// Widget Cetagories \\-->

                        <!--// Widget Popular News \\-->
                    @include('frontend.includes.popularPost')
                    <!--// Widget Popular News \\-->
                    <!--// Widget Upcoming Events \\-->

                        <!--// Widget Caendar \\-->
                    @include('frontend.includes.archive')
                    <!--// Widget Caendar \\-->

                        <!--// Widget Gallery \\-->

                        <!--// Widget Gallery \\-->
                        <!--// Widget Caendar \\-->

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    @stop
