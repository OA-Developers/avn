<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;

    protected $table = 'popup';

    protected $fillable = [
        'target',
        'content'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function tvShowVideos()
    {
        return $this->hasMany(TVShowVideo::class);
    }
}

