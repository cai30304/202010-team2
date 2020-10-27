<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table='shows';

    protected $fillable = [
        'date','showtime','movie_id','seat'
    ];
    public function movie_all()
    {
        return $this->belongsTo('App\Movie_all','id');
    }
}
