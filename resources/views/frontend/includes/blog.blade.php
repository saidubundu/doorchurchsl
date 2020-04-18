
<div class="church-main-section church-blog-gridfull">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="church-fancy-title">
                    <h2>[Church News]</h2>
                    <span>Check our church latest news & announcements</span>
                </div>

                <div class="church-blog church-bloggrid-slider">
                    @foreach($posts as $post)
                    <div class="church-bloggrid-slider-layer">
                        <figure><a href="{{route('post.show', $post->id)}}"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""></a> <figcaption><span>12</span> <small>May 2017</small></figcaption> </figure>
                        <div class="church-bloggrid-slidetext">
                            <h5><a href="{{route('post.show', $post->id)}}">{{str_limit($post->title,40)}}</a></h5>
                            <ul class="church-blog-option">
                                <li>by <a href="404.html">{{$post->user->name}}</a></li>
                                <li><i class="fa fa-comments-o"></i> <a href="404.html">13 comments</a></li>
                            </ul>
                            <p>{!! $post->excerpt !!}</p>
                            <a href="{{route('post.show', $post->id)}}" class="church-blog-readmore church-bgcolor">Read Article</a>
                        </div>
                    </div>
                        @endforeach
                </div>

            </div>

        </div>
    </div>
</div>
