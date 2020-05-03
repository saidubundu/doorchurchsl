@foreach($bibleVerse as $bible)
<figcaption>
    <p>“{{$bible->script}} ”</p>
    <a >~ {{$bible->verse}}</a>
</figcaption>
    @endforeach
