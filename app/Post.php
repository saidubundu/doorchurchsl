<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model implements Searchable
{
    //
    use SoftDeletes;
    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                 'onUpdate' => true,
            ]
        ];
    }

    protected $fillable = ['title','excerpt','body','published_at','image','view_count','slug'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ? : NULL;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getDateAttribute()
    {
        return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
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

    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . "H:i:s";
        return $this->created_at->format($format);
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where('published_at' , '<=', Carbon::now());
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
        $url = route('post.show', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }

    /**
     * @inheritDoc
     */

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

    public function scopeYear()
    {
        $time = $this->published_at;
        $year = Carbon::createFromFormat('Y-m-d H:i:s', $time)->year;
        return $year;
    }

}
