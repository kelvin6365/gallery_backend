<?php

namespace App;

use App\UserFavourite;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Video extends Authenticatable
{
    use   Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video_id',
        'embedded_url', 
        'isAvgle',
        'hd',
        'preview_url',
        'preview_video_url',
        'title',
        'video_url',
        'duration',
        'viewnumber',
        'keyword',
        'like',
        'dislike',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


   
}
