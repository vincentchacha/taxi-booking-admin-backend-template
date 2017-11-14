<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Owner;
use App\Provider;

class Request extends Model
{
   public function provider(){
       return $this->belongsTo(Provider::class);
   }
   public function owner(){
       return $this->belongsTo(Owner::class);
   }
}
