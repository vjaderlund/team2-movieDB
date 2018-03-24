<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Rating extends Model
{

    function movies() {
        return $this->belongsToMany('App\Movie');
    }
    function users() {
        return $this->belongsToMany('App\User');
    }
    public function Review()
    {
        return $this->hasMany(MovieReview::class);
    }
    public function getStarRating()
    {
        $count = $this->reviews()->count();
        if(empty($count)){
            return 0;
        }
        $starCountSum=$this->reviews()->sum('rating');
        $average=$starCountSum/ $count;
       return $average;
    }
}
