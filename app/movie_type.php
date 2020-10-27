<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie_type extends Model
{
    protected $table = 'movie_type';

    Protected $fillable = [
        'grade'
    ];

    public function movie()
    {
        return $this->hasMany('App\movie_all','movie_type_id');
    }
}
