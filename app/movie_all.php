<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie_all extends Model
{
    protected $table='movie_alls';

    protected $fillable = [
        'movie_name','english_name','movie_about','movie_length','actors','release_date',
        'hall','rating','poster','trailer','seat','movie_imgA','movie_imgB','movie_imgC'
    ];
    public function show()
    {
        return $this->hasMany('App\Show','movie_id');
    }
}
