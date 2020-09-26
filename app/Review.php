<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    function user() {
        return $this->belongsTo('App\User');
    }

    function book() {
        return $this->belongsTo('App\Book');
    }
}
