<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //
    protected $fillable=['name','script'];

    public function getImageUrlAttribute ()
    {
        $imageUrl = "";
        if (! is_null($this->image)){
            $imagePath = public_path(). "/images/testimonies/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("images/testimonies/" . $this->image);
        }
        return $imageUrl;
    }
}
