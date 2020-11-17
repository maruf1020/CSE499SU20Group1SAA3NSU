<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\verifiyInstiution;

class institution extends Model
{
    protected $guarded=[];
    public function verifiyInstiution(){
      return $this->hasMany(verifiyInstiution::class);
    }
}
