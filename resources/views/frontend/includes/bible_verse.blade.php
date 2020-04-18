<div class="church-main-section church-testimonialfull">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="church-fancy-title">
                    <h2>[Bible Scriptures]</h2>
                    <span>Be Blessed.</span>
                </div>
                <div class="clearfix"></div>
                <div class="church-testimonial">
                    <div class="church-testimonial-list">
{{--                        <div class="church-testimonial-list-layer"><span><img src="extra-images/testimonial-img3.jpg" alt=""></span></div>--}}
{{--                        <div class="church-testimonial-list-layer"><span><img src="extra-images/testimonial-img1.jpg" alt=""></span></div>--}}
{{--                        <div class="church-testimonial-list-layer"><span><img src="extra-images/testimonial-img2.jpg" alt=""></span></div>--}}
{{--                        <div class="church-testimonial-list-layer"><span><img src="extra-images/testimonial-img1.jpg" alt=""></span></div>--}}
                    </div>
                    <div class="church-testimonial-thumb">
                        @foreach($bibles as $bible)
                        <div class="church-testimonial-thumb-layer">
                            <div class="church-testimonial-text">
                                <p>{{$bible->script}} </p>
                                <a href="404.html">- {{$bible->verse}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
