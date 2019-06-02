<?php

namespace App;

use App\User;
use App\Video;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserFavourite extends Authenticatable
{

    use  Notifiable;

    protected $fillable = [
        'video_id', 'user_id'
    ];

    protected $hidden = [

    ];

    public function user() {
        return $this->belongsTo(User::class,"id","user_id");
    }

    public function video() {
        return $this->belongsTo(Video::class);
    }

  
}
