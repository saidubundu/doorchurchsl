<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImageUrlAttribute()
    {
        $imageUrl = "";

        if (! is_null($this->image)){
            $imagePath = public_path() . "/images/blog/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("images/blog/" . $this->image);
        }

        return $imageUrl;
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }
}
