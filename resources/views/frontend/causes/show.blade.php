@extends('layouts.frontend')
@section('content')

    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Cause Detail</h1>
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
                            <li class="active">Cause Detail</li>
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
                        <div class="church-cause-detail">
                            <figure class="church-cause-thumb"><img src="{{$cause->image_url}}" alt="">
                               @include('frontend.includes.bible_verse')
                            </figure>
                            <div class="church-cause-heading">
                                <h2>{{$cause->title}}</h2>
                                <ul class="church-cause-option">
                                    <li><strong>Started From:</strong> <time datetime="2008-02-14 20:00">21/08/2017</time></li>
                                    <li><strong>Completed At:</strong> <time datetime="2008-02-14 20:00">31/12/2018</time></li>

                                </ul>
                            </div>
                            <div class="church-cause-skillst">
                                <div class="cause-skillst">
                                    <span>Le {{$cause->initial}}</span>
                                    <span class="right">Le {{$cause->goal}}</span>
                                    <div class="skillst"><div class="progressbar1" data-width="{{$cause->percentage}}" data-target="{{$cause->percentage}}"></div></div>
                                </div>
                                <a href="#cause-donate" class="church-blog-readmore church-bgcolor">Donate Now</a>
                            </div>
                            <div class="church-rich-editor">
                                <p>{!! $cause->body !!}</p>
                            </div>
                            <div class="church-post-tags">

                            </div>
                            <div class="church-prenxt-post">

                            </div>

                        </div>

                        <div class="col-md-9" id="cause-donate">
                            <h2 class="church-section-heading">[ Donation Details And Contact ]</h2>
                            <div class="church-team-info" >
                                <p>For any assistance please contact these numbers: +232959504, +23204049484</p>
                                <ul>
                                    <li>
                                        <h6>Orange Money:</h6>
                                        <span>{{$cause->orange}}</span>
                                    </li>
                                    <li>
                                        <h6>Africell Money:</h6>
                                        <span>{{$cause->africell}}</span>
                                    </li>
                                    <li>
                                        <h6>Account No:</h6>
                                        <span> {{$cause->account}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!--// Sidebar \\-->
                    <aside class="col-md-3">

                        <!--// Widget Search \\-->
                    @include('frontend.includes.searchForm')
                    <!--// Widget Search \\-->

                        <!--// Widget Cetagories \\-->
                        <!--// Widget Cetagories \\-->
                    @include('frontend.includes.popularSermons')
                    <!--// Widget Cetagories \\-->

                        <!--// Widget Popular News \\-->
                    @include('frontend.includes.popularPost')
                    <!--// Widget Popular News \\-->

                        <!--// Widget Upcoming Events \\-->
                    @include('frontend.includes.popularEvent')
                    <!--// Widget Upcoming Events \\-->

                        <!--// Widget Gallery \\-->

                    </aside>
                    <!--// Sidebar \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>

    @stop
