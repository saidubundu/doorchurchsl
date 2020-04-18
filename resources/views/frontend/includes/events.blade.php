<div class="col-md-6">
    <h2 class="church-simple-heading">Upcoming Events <a href="{{route('event.index')}}">Check All Events</a></h2>
    <div class="church-upcoming-events">
        <ul class="row">
            @foreach($events as $event)
            <li class="col-md-12">
                <figure><a href="event-detail.html"><img src="{{$event->event_image_url}}" alt=""></a></figure>
                <div class="church-upcoming-event-text">
                    <h6><a href="event-detail.html">{{$event->title}}</a></h6>
                    <time datetime="2008-02-14 20:00"><i class="icon church-calendar"></i>May 16, 2017 - May 27, 2017</time>
                    <time datetime="2008-02-14 20:00"><i class="icon church-clock2"></i>7:00pm - 8:30pm</time>
                </div>
            </li>
           @endforeach
        </ul>
    </div>
</div>
