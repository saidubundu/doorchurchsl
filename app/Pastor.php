<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastor extends Model
{
    //

    public function getPastorImageUrlAttribute()
    {
        $pastorImage = "";
        if (! is_null($this->pastorImage)){
            $pastorPath = public_path("/images/pastor/" . $this->pastorImage);
            if (file_exists($pastorPath)) $pastorImage = asset("images/pastor/" . $this->pastorImage);
        }

        return $pastorImage;
    }
}
