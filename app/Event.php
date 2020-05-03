<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
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
        'location',
        'slug'
    ];

    use Sluggable;
    use SluggableScopeHelpers;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\Event');
    }

    public function scopeDate()
    {
        $time = $this->date;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->day;
        return $year;
    }

    public function scopeMonth()
    {
        $time = $this->date;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->shortMonthName;
        return $year;
    }

    public function scopeYear()
    {
        $time = $this->date;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->year;
        return $year;
    }

    public function scopeTime()
    {
        $time = $this->date;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time);
        return $year;
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count' , 'desc');
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
