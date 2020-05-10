<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();;
    }
}
