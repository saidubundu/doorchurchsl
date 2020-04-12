<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bible extends Model
{
    //
    protected $fillable = [
        'script',
        'verse'
    ];
}
