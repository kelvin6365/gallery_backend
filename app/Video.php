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
        'id',
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
    ];

    public function create(array $data)
    {
        return Video::create([
            'id'=> $data['id'],
            'embedded_url'=> $data['embedded_url'], 
            'isAvgle'=> $data['isAvgle'],
            'hd'=> $data['hd'],
            'preview_url'=> $data['preview_url'],
            'preview_video_url'=> $data['preview_video_url'],
            'title'=> $data['title'],
            'video_url'=> $data['video_url'],
            'duration'=> $data['username'],
            'viewnumber'=> $data['viewnumber']??0,
            'keyword'=> $data['title'],
            'like'=> $data['like']??0,
            'dislike'=> $data['userdislikename']??0,
        ]);
    }
   
}
