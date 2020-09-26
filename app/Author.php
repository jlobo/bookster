<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    function books() {
        return $this->belongsToMany('App\Book', 'books_authors');
    }
}
