<div class="widget widget_popular_news">
    <h2 class="church-widget-heading">[ Popular News ]</h2>
    <ul>
        @foreach($popularPosts as $post)
        <li>
            <figure><a href="{{route('post.show', $post->id)}}"><img src="{{$post->image_url ? $post->image_url : '/images/holder/posts.png'}}" alt=""></a></figure>
            <div class="widget-popular-news-text">
                <h6><a href="{{route('post.show', $post->id)}}">{{str_limit($post->title,20)}}</a></h6>
                <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> {{$post->published_at->diffForHumans()}}</time>
            </div>
        </li>
       @endforeach
    </ul>
</div>
