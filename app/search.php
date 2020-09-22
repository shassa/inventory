<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    
    public function branch(){
        return $this->belongsTo('App\branch');
    }
    

}
