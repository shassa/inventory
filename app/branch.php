<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $fillable =['name','address','store_id','product_id','quantity'];

    public function store(){
        return $this->belongsTo('App\store');
    }


}
