<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Event extends Model implements Searchable
{
    //
    protected $fillable = [
        'title',
        'body',
        'eventImage',
        'date',
        'location'
    ];

    public function user()
    {
        return $this->belongsTo('App\Event');
    }

    public function getImageUrlAttribute()
    {
        $eventImage = "";
        if (! is_null($this->eventImage)){
            $eventImagePath = public_path("/images/event/" . $this->eventImage);
            if (file_exists($eventImagePath)) $eventImage = asset("images/event/" . $this->eventImage);
        }

        return $eventImage;
    }

    public function getSearchResult(): SearchResult
    {
        // TODO: Implement getSearchResult() method.
        $url = route('event.show', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
