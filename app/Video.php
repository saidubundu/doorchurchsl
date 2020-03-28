<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    public function getVideoUrlAttribute()
    {
        $videoUrl = "";

        if (! is_null($this->video)){
            $videoPath = public_path("/images/gallery/videos/" . $this->video);
            if (file_exists($videoPath)) $videoUrl = asset("images/gallery/videos/" . $this->video);
        }
        return $videoUrl;
    }
}
