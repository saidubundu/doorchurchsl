@extends('layouts.frontend')

@section('content')

    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Sermons Details</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Sermons Details</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner -->
    <!--  sermon  -->
    <section id="sermons" class="sermons-vertical-block sermons-vThree">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sermons-block">
                        <div class="sermons-vertical-block">
                            @if($sermon->image_url)
                            <div class="sermons-img block-effect">
                                <img src="{{$sermon->image_url}}" class="img-responsive" alt="">
                            </div>
                            @endif
                            <div class="sermons-icon">
                                <ul>
{{--                                    <li>--}}
{{--                                        <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/e0657980-289f-4c5a-9ba0-2c730b9c990a/19398708.mp4"><i class="flaticon-video-player"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a class="popup" onclick="return alert('')" ><i class="flaticon-headphones"></i></a>--}}
{{--                                    </li>--}}
                                    <li><a href="{{$sermon->image_url}}" target="_blank" class="cloud"><i class="flaticon-cloud-computing" download></i></a></li>
                                    <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sermons-content">
                            <h4 class="sermons-heading">{{$sermon->title}}</h4>
                            <br>
                            <div id="myplayer" class="aplayer"></div>
                            <script type="text/javascript" src="{{asset('frontend/js/APlayer.min.js')}}"></script>
                            <script type="text/javascript" src="{{asset('frontend/js/color-thief.js')}}"></script>
                            <br>
                            <div class="sermons-desc">
                                <p class="sermons-speaker">Speaker : <a href="#">Johan Tom</a></p>
                                <p class="sermons-date">Date : 02 - 01 - 2017</p>
                            </div>
                            <p class="sermons-dtl">{!! $sermon->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--  end sermon  -->
    <!--  contact form  -->
{{--    <section id="contact-form" class="form-main-block form-two">--}}
{{--        <div class="section">--}}
{{--            <h4 class="section-heading">Leave and Reply</h4>--}}
{{--            <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="contact-form-block">--}}
{{--                    <form class="contact-form" method="post" action="https://wporganic.com/html/church/version1/contact-us.php">--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="name" name="name" placeholder="Name And Surname" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="number" name="number" placeholder="Contact Phone Number" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea id="message" class="form-control" name="message" placeholder="Message"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                            <span><a href="#" class="btn btn-default">Send</a></span>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- end contact form -->--}}
{{--    <!--  Trending sermon -->--}}
{{--    <section id="trending-sermons" class="trending-main-block sermons-hOne">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section text-center">--}}
{{--                <h3 class="section-heading">Latest Sermons</h3>--}}
{{--                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  <br>  euismod ex, Maeceans sit amet sollicitudin ex.</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="trending-sermons-slider" class="trending-sermons-slider">--}}
{{--            <div class="item sermons-block">--}}
{{--                <div class="sermons-img">--}}
{{--                    <img src="images/sermons/sermons-dtl-04.jpg" class="img-responsive" alt="sermons-img-1">--}}
{{--                </div>--}}
{{--                <div class="item sermons-horizontal-block">--}}
{{--                    <div class="sermons-content">--}}
{{--                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>--}}
{{--                        <div class="sermons-desc">--}}
{{--                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>--}}
{{--                            <p class="sermons-date">Date : 02 - 01 - 2017</p>--}}
{{--                        </div>--}}
{{--                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>--}}
{{--                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="sermons-icon">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/e0657980-289f-4c5a-9ba0-2c730b9c990a/19398708.mp4"><i class="flaticon-video-player"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>--}}
{{--                            </li>--}}
{{--                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>--}}
{{--                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item sermons-block">--}}
{{--                <div class="sermons-img">--}}
{{--                    <img src="images/sermons/sermons-dtl-05.jpg" class="img-responsive" alt="sermons-img-2">--}}
{{--                </div>--}}
{{--                <div class="item sermons-horizontal-block">--}}
{{--                    <div class="sermons-content">--}}
{{--                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>--}}
{{--                        <div class="sermons-desc">--}}
{{--                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>--}}
{{--                            <p class="sermons-date">Date : 02 - 01 - 2017</p>--}}
{{--                        </div>--}}
{{--                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>--}}
{{--                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="sermons-icon">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://vimeo.com/1084537"><i class="flaticon-video-player"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>--}}
{{--                            </li>--}}
{{--                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>--}}
{{--                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item sermons-block">--}}
{{--                <div class="sermons-img">--}}
{{--                    <img src="images/sermons/sermons-dtl-04.jpg" class="img-responsive" alt="sermons-img-03">--}}
{{--                </div>--}}
{{--                <div class="item sermons-horizontal-block">--}}
{{--                    <div class="sermons-content">--}}
{{--                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>--}}
{{--                        <div class="sermons-desc">--}}
{{--                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>--}}
{{--                            <p class="sermons-date">Date : 02 - 01 - 2017</p>--}}
{{--                        </div>--}}
{{--                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>--}}
{{--                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="sermons-icon">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/9e51e6a1-6c95-4e54-9572-b6938581babd/19708248.mp4"><i class="flaticon-video-player"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>--}}
{{--                            </li>--}}
{{--                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>--}}
{{--                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item sermons-block">--}}
{{--                <div class="sermons-img">--}}
{{--                    <img src="images/sermons/sermons-dtl-05.jpg" class="img-responsive" alt="sermons-img-4">--}}
{{--                </div>--}}
{{--                <div class="item sermons-horizontal-block">--}}
{{--                    <div class="sermons-content">--}}
{{--                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>--}}
{{--                        <div class="sermons-desc">--}}
{{--                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>--}}
{{--                            <p class="sermons-date">Date : 02 - 01 - 2017</p>--}}
{{--                        </div>--}}
{{--                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>--}}
{{--                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="sermons-icon">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://www.youtube.com/watch?v=YE7VzlLtp-4"><i class="flaticon-video-player"></i></a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>--}}
{{--                            </li>--}}
{{--                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>--}}
{{--                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end trending sermon -->

{{--    <script>--}}
{{--        $(document).ready(function () {--}}

{{--            $('#audio-player').mediaelementplayer({--}}
{{--                alwaysShowControls: true,--}}
{{--                features: ['playpause', 'volume', 'progress'],--}}
{{--                audioVolume: 'horizontal',--}}
{{--                audioWidth: 400,--}}
{{--                audioHeight: 120,--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
    <!-- gc blog category left side End -->
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
