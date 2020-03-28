@extends('layouts.frontend')

@section('content')

    <header id="page-banner" class="banner-main-block">
        <div class="banner-img" style="background-image: url('images/top-banner.jpg')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="banner-block">
                    <h3 class="section-heading">Gallery</h3>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a>Gallery</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
    <!--  end page banner  -->
    <!-- gallery -->
    <section id="portfolio" class="portfolio-main-block portfolio-two">
        <div class="container-fluid">
            <div class="section text-center">
                <h3 class="section-heading">Our Portfolio</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at<br>  euismod ex, Maeceans sit amet sollicitudin ex.</h5>
            </div>
            <div class="portfolio-content">
                <div class="portfolio-filter">
                    <ul class="filter-dtl text-center">
                        <li><a href="#all" class="filter-all btn btn-default active">All</a></li>
                        <li><a href="#images" class="filter-images btn btn-default">Images</a></li>
                        <li><a href="#videos" class="filter-videos btn btn-default">Videos</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="portfolio-block portfolio-popup">
                        @foreach($videos as $video)
                        <div class="col-md-6 col-sm-12 portfolio-item videos">

                            <video
                                    id="my-video"
                                    class="video-js"
                                    controls
                                    preload="auto"
                                    width="640"
                                    height="264"
                                    poster="MY_VIDEO_POSTER.jpg"
                                    data-setup="{}"
                                >
                                    <source src="{{$video->video_url}}" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                        >
                                    </p>
                                </video>

                                <script src="https://vjs.zencdn.net/7.7.5/video.js"></script>

                        </div>
                        @endforeach
                        <br>
                            @foreach($photos as $photo)
                        <div class="col-md-3 col-sm-6 portfolio-item images">

                            <div class="portfolio-img">
                                <img src="{{$photo->photo_url}}" class="img-responsive" alt="portfolio-img-2">
                                <div class="portfolio-overlay"><a href="images/gallery/gallery-02.jpg"><i class="fa fa-search"></i></a></div>
                            </div>

                        </div>
                            @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 load-more text-center">
                        <span class="load-more-btn"><a href="#" class="btn btn-default">View More</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stop
