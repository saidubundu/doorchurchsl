<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gravatar()
    {
        $email = $this->email;
        $default = "https://www.pikpng.com/pngl/m/500-5008137_png-file-svg-user-profile-vector-clipart.png";
        $size = 40;

        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
    }

    public function sermons()
    {
        return $this->hasMany('App\Sermon');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function setPasswordAttribute($value)
    {
        if (! empty($value)) $this->attributes['password'] = crypt($value, '');
    }
}
