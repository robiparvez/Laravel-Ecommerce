<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'address', 'total'];

   /*hasMany is used in a One To Many relationship
    while belongsToMany refers to a Many To Many relationship*/


    public function setOderItems()//access Books and Pivot table (Order_Book)
    {
        $this->belongsToMany('App\Book')->withPivot('amount', 'total'); //pivot function parameters are of "PIVOT TABLE"
    }
}
