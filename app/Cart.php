<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = ['user_id', 'book_id', 'amount', 'total'];

    public function setBook()
    {
    	$this->belongsTo('App\Book');
    }
}
