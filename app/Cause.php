<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    //
    protected $fillable =['title',
        'excerpt','body','image','goal','initial','orange','africell','account'];

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


    public function getImageUrlAttribute()
    {
        $imageUrl = "";

        if (! is_null($this->image)){
            $imagePath = public_path() . "/images/causes/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("images/causes/" . $this->image);
        }

        return $imageUrl;
    }

    public function getPercentageAttribute()
    {
        $calculation = $this->initial / $this->goal * 100;
        return number_format($calculation);
    }
}
