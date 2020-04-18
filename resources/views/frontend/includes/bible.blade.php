
<div class="church-banner">

    <!--// Slider \\-->
    @foreach($bibles as $bible)
    <div class="church-banner-layer">
        <span class="church-banner-transparent"></span>
        <img src="{{asset('extra-images/banner-1.jpg')}}" alt="">

        <div class="church-banner-caption">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <div class="church-banner-text">
                            <h1>{{$bible->script}}</h1>
                            <span><i class="icon church-right-arrow"></i>{{$bible->verse}}</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="church-banner-description">
            <img src="images/title-img1.png" alt="">
            <h2>We're excited about God and the good things He's doing on earth, and love that we get to be part of it!</h2>
            <h6>“Spiritual maturity is for everyone - no matter what your age is.”</h6>
            <a href="404.html" class="church-btn">Share This</a>
        </div>
    </div>
@endforeach
{{--        <div class="church-banner-layer">--}}
{{--            <span class="church-banner-transparent"></span>--}}
{{--            <img src="extra-images/banner-1.jpg" alt="">--}}
{{--            <div class="church-banner-caption">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-8">--}}
{{--                            <div class="church-banner-text">--}}
{{--                                <h1>Do not forget to show <a href="404.html">hospitality</a> to strangers, for by so doing some people have shown <a href="404.html">hospitality</a> to angels without knowing it.</h1>--}}
{{--                                <span><i class="icon church-right-arrow"></i>Hebrews 13:2</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="church-banner-description">--}}
{{--                <img src="images/title-img1.png" alt="">--}}
{{--                <h2>We're excited about God and the good things He's doing on earth, and love that we get to be part of it!</h2>--}}
{{--                <h6>“Spiritual maturity is for everyone - no matter what your age is.”</h6>--}}
{{--                <a href="404.html" class="church-btn">Share This</a>--}}
{{--            </div>--}}
{{--        </div>--}}
<!--// Slider \\-->

</div>

