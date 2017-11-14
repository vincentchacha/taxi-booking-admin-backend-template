<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function cartype(){
        return $this->belongsTo(Cartype::class);
    }
}
