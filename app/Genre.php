<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    function books() {
        return $this->hasMany('App\Book');
    }
}
