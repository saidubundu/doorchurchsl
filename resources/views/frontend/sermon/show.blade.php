@extends('layouts.frontend')

@section('content')


    <!--// SubHeader \\-->
    <div class="church-subheader">
        <div class="church-subheader-text">
            <span class="church-subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Sermon Detail</h1>
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
                            <li><a href="{{route('sermon.index')}}">Sermons</a></li>
                            <li class="active">Sermon Detail</li>
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
                        <div class="church-sermon-detail">
                            <figure class="church-sermon-thumb"><img height="100" src="{{$sermon->image_url ? $sermon->image_url : '/images/holder/posts.png'}}" alt="">
                                @include('frontend.includes.bible_verse')
                            </figure>
                            <div class="church-cause-heading">
                                <h2>{{$sermon->title}}</h2>
                                <ul class="church-cause-option">
                                    <li><strong>Sermon Date: </strong> <time datetime="2008-02-14 20:00">{{$sermon->month()}} {{$sermon->date()}}, {{$sermon->year()}} </time></li>
                                </ul>
                            </div>
                            <div class="church-rich-editor">
                                <div class="church-sermon-album">

                                    <div class="church-sermon-left">
                                        <div class="church-sermonplayer-thumb">
                                            <div id="current-track1" class="song-title"><i class="fa fa-angle-left"></i>{{str_limit($sermon->title, 15)}} <small>{{$sermon->user->name}}</small><i class="fa fa-angle-right"></i></div>
                                            <div id="jquery_jplayer_17" class="jp-jplayer"></div>
                                        </div>
                                        <audio controls>
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="{{$sermon->audio_url}}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>
                                </div>
                                <p>{!! $sermon->body !!}</p>
                            </div>
                            <br/>
{{--                            <div class="church-post-tags">--}}
{{--                                <div class="church-social-tag">--}}
{{--                                    <a href="404.html">Videos</a>--}}
{{--                                    <a href="404.html">Prayer</a>--}}
{{--                                    <a href="404.html">Author</a>--}}
{{--                                    <a href="404.html">Church</a>--}}
{{--                                </div>--}}
{{--                                <div class="church-blog-social">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>--}}
{{--                                        <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter"></a></li>--}}
{{--                                        <li><a href="https://www.pinterest.com/login/" class="fa fa-pinterest-p"></a></li>--}}
{{--                                        <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="comments-area">--}}

{{--                                <!--// comment-respond \\-->--}}
{{--                                <div class="comment-respond">--}}
{{--                                    <h2 class="church-section-heading">[ Leave Your Reply ]</h2>--}}
{{--                                    <p>Your email address will not be published. Required fields are marked *</p>--}}
{{--                                    <form>--}}
{{--                                        <p class="church-full-form">--}}
{{--                                            <label>Comment</label>--}}
{{--                                            <textarea name="comment" placeholder="Type here" class="commenttextarea"></textarea>--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            <label>Name</label>--}}
{{--                                            <input type="text" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            <label>Email</label>--}}
{{--                                            <input type="email" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">--}}
{{--                                        </p>--}}
{{--                                        <p><input type="submit" value="Submit Now"></p>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <!--// comment-respond \\-->--}}
{{--                            </div>--}}
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
@section('script')
    <script>
        var ap = new APlayer({
            element: document.getElementById('myplayer'),
            theme: '#8B0000',
            music: {
                title: '{{$sermon->title}}',
                author: 'Michael Jackson',
                url: '{{$sermon->audio_url}}',
                cover: '{{$sermon->image_url}}',
            }
        });
    </script>
    @stop
