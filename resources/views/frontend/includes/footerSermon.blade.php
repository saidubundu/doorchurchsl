<aside class="col-md-3 widget widget_latest_sermons">
    <h2 class="church-footer-heading">[ Latest Sermons ]</h2>
    <ul>
        @foreach($latestSermon as $sermon)
        <li>
            <figure><a href="{{route('sermon.show', $sermon->id)}}"><img src="{{$sermon->image_url ? $sermon->image_url : '/images/holder/posts.png'}}" alt=""></a></figure>
            <div class="widget-sermon-text">
                <h6><a href="{{route('sermon.show', $sermon->id)}}">{{str_limit($sermon->title, 15)}}</a></h6>
                <span>{!! str_limit($sermon->excerpt, 10) !!}</span>
            </div>
        </li>
        @endforeach
    </ul>
</aside>
