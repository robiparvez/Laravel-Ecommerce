<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title', 'isbn', 'cover', 'price', 'author_id'];

    public function setAuthor()
    {
        $this->belongsTo('App\Author');
    }
}
