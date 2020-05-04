<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;


class Sermon extends Model implements Searchable
{
    //
    use Sluggable;
    use SluggableScopeHelpers;
    use SoftDeletes;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

    protected $fillable = [
        'title','excerpt','body','image','audio','view_count','published_at'
    ];

    protected $dates = ['published_at'];

    public function scopeDate()
    {
        $time = $this->published_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->day;
        return $year;
    }

    public function scopeMonth()
    {
        $time = $this->published_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->shortMonthName;
        return $year;
    }

    public function scopeyear()
    {
        $time = $this->published_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->year;
        return $year;
    }

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] =$value ? : NULL;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count' , 'desc');
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
            $directory = config('cms.images.sermons');
            $imagePath = public_path(). "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }
        return $imageUrl;
    }

    public function getAudioUrlAttribute()
    {
        $audioUrl = "";
        if ( ! is_null($this->audio)){
            $directory = config('cms.audio.directory');
            $audioPath = public_path(). "/{$directory}/" . $this->audio;
            if (file_exists($audioPath)) $audioUrl = asset("{$directory}/" . $this->audio);
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
