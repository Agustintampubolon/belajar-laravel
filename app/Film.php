<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public function pemains(){
        return $this->hasMany('App\Pemain');
    }
}
