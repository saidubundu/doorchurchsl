<div class="widget widget_popular_news">
    <h2 class="church-widget-heading">[ Popular Sermons ]</h2>
    <ul>
        @foreach($popularSermons as $sermon)
        <li>
            <figure><a href="{{route('sermon.show', $sermon->id)}}"><img src="{{$sermon->image_url ? $sermon->image_url : '/images/holder/posts.png'}}" alt=""></a></figure>
            <div class="widget-popular-news-text">
                <h6><a href="{{route('sermon.show', $sermon->id)}}">{{str_limit($sermon->title,20)}}</a></h6>
                <time datetime="2008-02-14 20:00"><i class="icon church-calendar-icon"></i> {{$sermon->published_at->diffForHUmans()}}</time>
            </div>
        </li>
       @endforeach
    </ul>
</div>
