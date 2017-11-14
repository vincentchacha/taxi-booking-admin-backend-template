<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provider;

class Cartype extends Model
{
    public function provider(){
        return $this->hasMany(Provider::class);
    }
}
