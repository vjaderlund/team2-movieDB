<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    function movies() {
        return $this->belongsToMany('App\Movie');
    }
}