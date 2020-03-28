<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function getPhotoUrlAttribute()
    {
        $photoUrl = "";

        if (! is_null($this->photo)){
            $photoPath = public_path("/images/gallery/photos/" . $this->photo);
            if (file_exists($photoPath)) $photoUrl = asset("images/gallery/photos/" . $this->photo);
        }
        return $photoUrl;
    }
}
