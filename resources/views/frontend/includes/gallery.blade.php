<div class="church-main-section church-masonry-galleryfull">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="church-fancy-title">
                    <h2>[Church Gallery]</h2>
                    <span>Check out our latest photos .</span>
                </div>
                <div class="church-gallery grid church-masonry-gallery">
                    <ul class="row">
                        @foreach($galleries as $photo)
                        <li class="col-md-3 grid-item">
                            <figure><a data-fancybox-group="group" href="{{$photo->image_url}}" class="fancybox"><img src="{{$photo->image_url}}" alt=""></a>
                                <figcaption>
                                    <ul class="church-gallery-option">
                                        <li><a data-fancybox-group="group" href="{{$photo->image_url}}" class="fancybox"><i class="icon church-search2"></i></a></li>
                                        <li><a href="404.html"><i class="icon church-arrows5"></i></a></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
