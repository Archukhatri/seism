<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //return $this->morphTo();
    public function imageable(){
    	return $this->morphTo();
    }
}
