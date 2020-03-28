@extends('layouts.frontend')

@section('content')
    <!--  page banner -->
    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url({{asset('images/top-banner.jpg')}})">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Sermons</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Sermons</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner  -->
    <!--  sermon  -->
    <section id="sermons" class="sermons-vertical-main-block sermons-vTwo">
        <div class="container">
            <div class="row">
                @foreach($sermons as $sermon)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sermons-vertical-block">
                        <div class="sermons-img block-effect">
                            <img src="{{$sermon->image_url}}" class="img-responsive" alt="sermons-img-1">
                        </div>
                        <div class="sermons-icon">
                            <ul>
                                <li>
                                    <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/e0657980-289f-4c5a-9ba0-2c730b9c990a/19398708.mp4"><i class="flaticon-video-player"></i></a>
                                </li>
                                <li>
                                    <a class="popup-video" href=""><i class="flaticon-headphones"></i></a>
                                </li>
                                <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                                <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sermons-content">
                        <div class="sermons-item">
                            <a href="{{route('sermon.show', $sermon->id)}}"><h4 class="sermons-heading">{{str_limit($sermon->title, 20)}}</h4></a>
                            <div class="sermons-desc">
                                <p class="sermons-speaker">Speaker : <a href="#">Johan Tom</a></p>
                                <p class="sermons-date">Date : 02 - 01 - 2017</p>
                            </div>
                            <p class="sermons-dtl">{{str_limit($sermon->excerpt, 90)}}</p>
                            <a class="read-more" href="{{route('sermon.show', $sermon->id)}}">Read More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <br>
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
    <!--  end sermon vtwo -->
    <!--  Trending sermon -->
    <section id="trending-sermons" class="trending-main-block sermons-hOne">
        <div class="container-fluid">
            <div class="section text-center">
                <h3 class="section-heading">Trending Sermons</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
            </div>
        </div>
        <div id="trending-sermons-slider" class="trending-sermons-slider">
            <div class="item sermons-block">
                <div class="sermons-img">
                    <img src="images/sermons/sermons-01.jpg" class="img-responsive" alt="sermons-img-1">
                </div>
                <div class="item sermons-horizontal-block">
                    <div class="sermons-content">
                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                        <div class="sermons-desc">
                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                            <p class="sermons-date">Date : 02 - 01 - 2017</p>
                        </div>
                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="sermons-icon">
                        <ul>
                            <li>
                                <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/c865f715-884d-47d7-8f1d-ef312e0c5e99/19716501.mp4"><i class="flaticon-video-player"></i></a>
                            </li>
                            <li>
                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                            </li>
                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item sermons-block">
                <div class="sermons-img">
                    <img src="images/sermons/sermons-02.jpg" class="img-responsive" alt="sermons-img-2">
                </div>
                <div class="item sermons-horizontal-block">
                    <div class="sermons-content">
                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                        <div class="sermons-desc">
                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                            <p class="sermons-date">Date : 02 - 01 - 2017</p>
                        </div>
                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="sermons-icon">
                        <ul>
                            <li>
                                <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/9e51e6a1-6c95-4e54-9572-b6938581babd/19708248.mp4"><i class="flaticon-video-player"></i></a>
                            </li>
                            <li>
                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                            </li>
                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item sermons-block">
                <div class="sermons-img">
                    <img src="images/sermons/sermons-03.jpg" class="img-responsive" alt="sermons-img-3">
                </div>
                <div class="item sermons-horizontal-block">
                    <div class="sermons-content">
                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                        <div class="sermons-desc">
                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                            <p class="sermons-date">Date : 02 - 01 - 2017</p>
                        </div>
                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="sermons-icon">
                        <ul>
                            <li>
                                <a class="popup-video" href="https://video-vh.s3.envato.com/h264-video-previews/e0657980-289f-4c5a-9ba0-2c730b9c990a/19398708.mp4"><i class="flaticon-video-player"></i></a>
                            </li>
                            <li>
                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                            </li>
                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item sermons-block">
                <div class="sermons-img">
                    <img src="images/sermons/sermons-04.jpg" class="img-responsive" alt="sermons-img-4">
                </div>
                <div class="item sermons-horizontal-block">
                    <div class="sermons-content">
                        <a href="sermons-details.html"><h4 class="sermons-heading">Praesent elementum ante.</h4></a>
                        <div class="sermons-desc">
                            <p class="sermons-speaker">Speaker : <a href="sermons-details.html">Johan Tom</a></p>
                            <p class="sermons-date">Date : 02 - 01 - 2017</p>
                        </div>
                        <p class="sermons-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                        <a class="read-more" href="sermons-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="sermons-icon">
                        <ul>
                            <li>
                                <a class="popup-video" href="https://vimeo.com/1084537"><i class="flaticon-video-player"></i></a>
                            </li>
                            <li>
                                <a class="popup-video" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/72365194&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"><i class="flaticon-headphones"></i></a>
                            </li>
                            <li><a href="uploads/demo.zip" target="_blank" class="cloud"><i class="flaticon-cloud-computing"></i></a></li>
                            <li><a href="uploads/demo.pdf" class="pdf"><i class="flaticon-pdf"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end trending sermon -->
    @stop
