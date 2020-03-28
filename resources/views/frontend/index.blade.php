@extends('layouts.frontend')
@section('content')

    <!--  about  -->
    @include('frontend.includes.bible_verse')
    <!--  end about -->
    <!--  parallax  -->
    <section id="abt-tab" class="tab-main-block">
        <div class="parallax" style="background-image: url('images/bg-img.jpg')">
            <div class="overlay-bg"></div>
            <div class="abt-tab-block">
                <div class="container">
                    <div class="abt-tab-content text-center">
                        <h3 class="abt-tab-heading">Nullam ullamcorper ultricies nulla mattis blandit Praesent dignissim quam bibendum.</h3>
                        <h5 class="abt-tab-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at seuismod ex. Maecenas sit amet sollicitudin ex.</h5>
                    </div>
                    <div class="abt-tab-icons">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-prayers"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Daily Prayers</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-teaching"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Teaching</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-sermons"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Sermons</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-help"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Helpers</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-wedding"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Wedding</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="abt-tab-item">
                                    <a href="#">
                                        <div class="abt-tab-icon">
                                            <i class="flaticon-events"></i>
                                        </div>
                                        <h6 class="abt-icon-name">Events</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end parallax -->
    <!--  who are we -->
    @include('frontend.includes.what_we_do')
    <!--  end who are we -->
    <!--  latest sermon -->
    @include('frontend.includes.sermons')
    <!--  end latest sermon -->
    <!--  latest news -->
    @include('frontend.includes.blog')
    <!--  end latest news -->
    <!--  testimonial -->
    @include('frontend.includes.bible')
    <!--  end pastor -->
    <!--  upcoming events -->
    @include('frontend.includes.events')
    <!--  end upcoming events -->
    <!--  donation -->
    <section id="donation" class="donation-main-block">
        <div class="parallax" style="background-image: url('images/bg-img.jpg')">
            <div class="overlay-bg"></div>
            <div class="section text-center">
                <h3 class="section-heading">Urgent Donation Required</h3>
                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex, Maeceans sit amet sollicitudin ex.</h5>
            </div>
            <div class="donation-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="donation-item">
                                <div class="donation-img block-effect">
                                    <a href="donation-details.html"><img src="images/donation/donation-02.jpg" class="img-responsive" alt="donation-img-1"></a>
                                    <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                                </div>
                                <div class="donation-content">
                                    <p class="social-media-heading">Share Post :</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                                    <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                                    <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="donation-item">
                                <div class="donation-img block-effect">
                                    <a href="donation-details.html"><img src="images/donation/donation-01.jpg" class="img-responsive" alt="donation-img-2"></a>
                                    <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                                </div>
                                <div class="donation-content">
                                    <p class="social-media-heading">Share Post :</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                                    <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                                    <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 donation-top-mgn">
                            <div class="donation-item">
                                <div class="donation-img block-effect">
                                    <a href="donation-details.html"><img src="images/donation/donation-03.jpg" class="img-responsive" alt="donation-img-3"></a>
                                    <span class="donation-btn"><a href="donation-details.html" class="btn btn-default">Donate</a></span>
                                </div>
                                <div class="donation-content">
                                    <p class="social-media-heading">Share Post :</p>
                                    <div class="social-icon">
                                        <ul>
                                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.twitter.com/" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://plus.google.com/" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="https://dribbble.com/" target="_blank" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="https://www.behance.net/" target="_blank" class="behance"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="donation-details.html"><h4 class="donation-heading">Lorem ipsum dolor sit amet.</h4></a>
                                    <p class="donation-dtl">Aliquam laoreet orci quis risus vulputate tem Quisque aliquet, ipsum at mattis mattis</p>
                                    <a class="read-more" href="donation-details.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end donation -->
    <!--  causes -->
    @include('frontend.includes.causes')
    <!--  end causes -->
    <!--  portfolio -->
    @include('frontend.includes.gallery')
    <!--  end portfolio -->
    <!-- subscribe -->
    <section id="subscribe" class="subscribe-main-block">
        <div class="bg-img parallax" style="background-image: url('images/bg-img.jpg')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="subscribe-dtl">
                    <h5 class="subscribe-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at euismod ex. Maecenas sit amet sollicitudin ex.</h5>
                    <div class="email-btn">
                        <form id="subscribe-form" class="subscribe-form">
                            <div class="input-group">
                                <label class="sr-only">Your Email address</label>
                                <input class="form-control" id="mc-email" placeholder="Your email address.." type="email">
                                <button type="submit" class="btn btn-default subscribe-btn">Subscribe</button>
                            </div>
                            <label for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end subscribe -->
    <!-- supporter -->
{{--    <section id="supporter" class="supporter-main-block">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section text-center">--}}
{{--                <h3 class="section-heading">Thanks To Our Supporter</h3>--}}
{{--                <h5 class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at  euismod ex, Maeceans sit amet sollicitudin ex.</h5>--}}
{{--            </div>--}}
{{--            <div id="supporter-slider" class="supporter-slider">--}}
{{--                <div class="item supporter-block">--}}
{{--                    <div class="supporter-item">--}}
{{--                        <img src="images/supporter-01.png" class="img-responsive" alt="support-img-1">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item supporter-block">--}}
{{--                    <div class="supporter-item">--}}
{{--                        <img src="images/supporter-02.png" class="img-responsive" alt="support-img-2">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item supporter-block">--}}
{{--                    <div class="supporter-item">--}}
{{--                        <img src="images/supporter-03.png" class="img-responsive" alt="support-img-3">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item supporter-block">--}}
{{--                    <div class="supporter-item">--}}
{{--                        <img src="images/supporter-04.png" class="img-responsive" alt="support-img-4">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item supporter-block">--}}
{{--                    <div class="supporter-item">--}}
{{--                        <img src="images/supporter-02.png" class="img-responsive" alt="support-img-5">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--  end supporter -->
<br>
    @stop
