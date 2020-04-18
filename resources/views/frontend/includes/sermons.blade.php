<div class="col-md-6">
    <h2 class="church-simple-heading">Featured Sermons <a href="{{route('sermon.index')}}">See All Sermons</a></h2>
    <div class="church-featured-sermons">
        <ul class="row">
            @foreach($sermons as $sermon)
            <li class="col-md-12">
                <figure><a href="sermon-detail.html"><img src="{{$sermon->image_url}}" alt=""></a></figure>
                <div class="church-featured-sermon-text">
                    <h6><a href="sermon-detail.html">{{$sermon->title}}</a></h6>
                    <ul class="church-featured-option">
                        <li><a href="404.html">{{$sermon->user->name}}</a></li>
                        <li><time datetime="2008-02-14 20:00"><i class="icon church-calendar"></i>{{$sermon->published_at->diffForHumans()}}</time></li>
                    </ul>
                    <div class="church-sermon-player">
                        <audio controls>
                            <source src="{{$sermon->audio_url}}" type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

