<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie_all extends Model
{
    protected $table = 'movie_all';

    Protected $fillable = [
        'movie_poster','content_rating','title','foreign_title','release_date','time','movie_info','actor','movie_type_id'
    ];

    public function movie_type()
    {
        return $this->belongsTo('App\movie_type');
    }

    public function movie_imgs()
    {
        return $this->hasMany('App\movie_imgs','movie_id');
    }
}
