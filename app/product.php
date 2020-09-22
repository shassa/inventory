<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['name','price','quantity','image','category_id'];
    public function category(){
        return $this->belongsTo('App\category');
    }
    public function stories(){
        return $this->hasOne('App\store');
    }
}
