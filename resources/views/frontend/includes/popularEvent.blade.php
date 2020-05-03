<div class="widget widget_upcoming_event">
    <h2 class="church-widget-heading">[ Upcoming Events ]</h2>
    <ul>
        @foreach($popularEvent as $event)
        <li>
            <time datetime="2008-02-14 20:00"> {{$event->date()}} <span>{{$event->month()}}</span></time>
            <section>
                <h6><a href="{{route('event.show', $event->id)}}">{{str_limit($event->title,30)}}</a></h6>
                <a href="event-detail.html">By Mark Jordan</a>
            </section>
        </li>
       @endforeach
    </ul>
</div>
