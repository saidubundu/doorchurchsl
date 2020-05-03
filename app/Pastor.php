<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Pastor extends Model implements Searchable
{
    //
    protected $fillable = [
        'name',
        'position',
        'pastorImage',
        'bio',
        'address',
        'phone',
        'email',
        'branch',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp'
    ];

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
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }

    public function getImageUrlAttribute()
    {
        $pastorImage = "";
        if (! is_null($this->pastorImage)){
            $pastorPath = public_path("/images/pastor/" . $this->pastorImage);
            if (file_exists($pastorPath)) $pastorImage = asset("images/pastor/" . $this->pastorImage);
        }

        return $pastorImage;
    }

    public function getSearchResult(): SearchResult
    {
        // TODO: Implement getSearchResult() method.
        $url = route('pastor.show', $this->slug);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}
