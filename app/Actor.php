<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    function movies() {
      return $this->hasMany('App\Movie');
    }
}
