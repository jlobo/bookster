<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name',  'price'];

    function manufactorer() {
        return $this->belongsTo('App\Manufactorer');
    }
}
