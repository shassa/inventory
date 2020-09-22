<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $fillable=['name','address','product_id','quantity'];

    public function product(){
        return $this->belongsTo('App\product');
    }
}
