<div class="church-main-section church-testimonialfull">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="church-fancy-title">
                    <h2>[Church Testimonials]</h2>
                    <span>What people say about our church.</span>
                </div>
                <div class="clearfix"></div>
                <div class="church-testimonial">
                    <div class="church-testimonial-list">

                    </div>
                    <div class="church-testimonial-thumb">
                        @foreach($testimonies as $testimony)
                        <div class="church-testimonial-thumb-layer">
                            <div class="church-testimonial-text">
                                <p>{{$testimony->script}}</p>
                                <a >- {{$testimony->name}}.</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
