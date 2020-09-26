<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    function reviews() {
        return $this->hasMany('App\Review');
    }

    function genre() {
        return $this->belongsTo('App\Genre');
    }

    function authors() {
        return $this->belongsToMany('App\Author', 'books_authors');
    }
}
