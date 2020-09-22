<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $fillable=['product_id','quantity','branch_id'];
     
    public function product(){
        return $this->belongsTo('App\product');
    }
   public function branch(){
       return $this->belongsTo('App\branch');
    }    
}
