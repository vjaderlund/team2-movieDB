<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    function director() {
      return $this->belongsTo('App\Director');
    }
}
