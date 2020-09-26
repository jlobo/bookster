<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufactorer extends Model
{
    function products() {
        return $this->hasMany('App\Product');
    }
}
