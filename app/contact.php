<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';

    Protected $fillable = [
        'email','location','image_url','place_name','place_info'
    ];
}
