<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie_imgs extends Model
{
    protected $table = 'movie_imgs';

    Protected $fillable = [
        'movie_id','movie_img'
    ];
    public function movie()
    {
        return $this->belongsTo('App\movie_all');
    }
}
