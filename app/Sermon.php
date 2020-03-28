<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageUrlAttribute ()
    {
        $imageUrl = "";
        if (! is_null($this->image)){
            $imagePath = public_path(). "/images/sermons/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("images/sermons/" . $this->image);
        }
        return $imageUrl;
    }

    public function getAudioUrlAttribute()
    {
        $audioUrl = "";
        if ( ! is_null($this->audio)){
            $audioPath = public_path(). "/audio/" . $this->audio;
            if (file_exists($audioPath)) $audioUrl = asset("audio/" . $this->audio);
        }
        return $audioUrl;
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now() );
    }

}
