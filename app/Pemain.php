<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    public function films(){
        return $this->belongsTo('App\Film');
    }
}
