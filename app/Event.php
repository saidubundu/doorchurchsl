<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
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

    public function getEventImageUrlAttribute()
    {
        $eventImage = "";
        if (! is_null($this->eventImage)){
            $eventImagePath = public_path("/images/event/" . $this->eventImage);
            if (file_exists($eventImagePath)) $eventImage = asset("images/event/" . $this->eventImage);
        }

        return $eventImage;
    }
}
