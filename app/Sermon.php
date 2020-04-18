<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Sermon extends Model implements Searchable
{
    //
    use SoftDeletes;
//    use Sluggable;
//
//    public function sluggable()
//    {
//        return [
//            'slug' => [
//                'source' => 'title'
//            ]
//        ];
//    }

    protected $fillable = [
        'title','excerpt','body','image','audio','view_count','published_at'
    ];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] =$value ? : NULL;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . "H:i:s";
        return $this->created_at->format($format);
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

    public function scopeScheduled($query)
    {
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull("published_at");
    }

    public function publicationLabel()
    {
        if (! $this->published_at){
            return '<span class="label label-warning">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture()){
            return '<span class="label label-info">Schedule</span>';
        }
        else{
            return '<span class="label label-success">Published</span>';
        }
    }

    public function getSearchResult(): SearchResult
    {
        // TODO: Implement getSearchResult() method.
        $url = route('sermon.show', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
