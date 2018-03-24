
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class MovieReview extends Model
{
    protected $fillable=[
        'Heading',
        'Comments',
        'movie_id',
        'rating'
    ];
}
