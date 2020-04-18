@extends('layouts.frontend')
@section('content')

    <!--// Main Banner \\-->
    @include('frontend.includes.bible')
    <!--// Main Banner \\-->

    <!--// Main Content \\-->
    <div class="church-main-content church-content-padding">

        <!--// Main Section \\-->
        <div class="church-main-section church-about-servicefull">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="church-callto-action">
                            <h4>Join Us on Each Sunday!</h4>
                            <time datetime="2008-02-14 20:00">Every Sunday @ 10am  - Ferry Junction</time>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="church-service church-about-service">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="about-us.html"><img src="extra-images/about-service-img1.jpg" alt=""></a></figure>
                                    <a href="{{route('about')}}" class="church-simple-btn">About Us</a>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="404.html"><img src="extra-images/about-service-img2.jpg" alt=""></a></figure>
                                    <a href="404.html" class="church-simple-btn">Welcome to Church</a>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="404.html"><img src="extra-images/about-service-img3.jpg" alt=""></a></figure>
                                    <a href="404.html" class="church-simple-btn">Watch our Messages</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="church-main-section church-authorfull">
            <div class="container">
                <div class="row">
                    <div class="col-md-5"><figure class="church-author-thumb"><img src="extra-images/author-thumb-img.jpg" alt=""></figure></div>
                    <div class="col-md-7">
                        <div class="church-author-text">
                            <h6>Welcome to The Door Church</h6>
                            <img src="images/title-img2.png" alt="">
                            <p>Our mission is to <strong>reach and influence</strong> the world by building a big & large Christ centered, Bible-based church, changing mindsets.</p>
                            <span>- Father Brandon, The Door Church</span>
                            <a href="{{route('pastor.index')}}" class="church-btn">Meet Our Pastors</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="church-main-section church-countdown-full">
            <span class="church-countdown-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="church-countdown-text">
                            <h2>Africa Refugees Small Group Guide</h2>
                            <time datetime="2008-02-14 20:00">Saturday @ 11am  - 288 Meadowcrest Lane</time>
                            <div class="church-countdown" id="church-countdown"></div>
                            <div class="clearfix"></div>
                            <a href="404.html" class="church-btn">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="church-main-section church-activities-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="church-fancy-title">
                            <h2>[Church Activities]</h2>
                            <span>What's happening here & around the world.</span>
                        </div>
                    </div>
                    @include('frontend.includes.events')
                    @include('frontend.includes.sermons')
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="church-main-section church-location-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="church-meet-location">
                            <h2>We meet for church in 6 locations. We would love to see you and your family <span>this weekend!</span></h2>
                            <div class="church-location-city">
                                <a href="404.html" class="church-simple-btn">Ferry Junction</a>
                                <a href="404.html" class="church-simple-btn">Lumley</a>
                                <a href="404.html" class="church-simple-btn">Aberdeen</a>
                                <a href="404.html" class="church-simple-btn">New England</a>
                                <a href="404.html" class="church-simple-btn">Makeni</a>
                                <a href="404.html" class="church-simple-btn">Kono</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="church-pray-timing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="404.html" class="church-simple-btn">Saturday 1:00pm</a>
                            <a href="404.html" class="church-simple-btn">Saturday 3:15pm</a>
                            <a href="404.html" class="church-simple-btn">Sunday 2:00pm</a>
                            <a href="404.html" class="church-simple-btn">Sunday 4:45pm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        @include('frontend.includes.gallery')
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        @include('frontend.includes.bible_verse')
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="church-main-section church-cause-strip-full">
            <span class="church-transparent-layer"></span>
            <div class="container">
                <div class="row">

                    <!--// Cause Strip \\-->
                    <div class="col-md-12">
                        <div class="church-cause-strip">
                            <h2>Donate for our cause!</h2>
                            <span>Help us survive by donating to our church.</span>
                            <div class="church-causestrip-section">
                                <div class="skillst"><div class="progressbar1" data-width="40" data-target="40"></div></div>
                                <span class="church-left-section">Raised: $2,231</span>
                                <span class="church-right-section">Goal: $10,000</span>
                            </div>
                            <div class="clearfix"></div>
                            <a href="404.html" class="church-btn">Contribute Today</a>
                        </div>
                    </div>
                    <!--// Cause Strip \\-->

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        @include('frontend.includes.blog')
        <!--// Main Section \\-->

    </div>
    @stop
