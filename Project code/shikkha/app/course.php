<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
      protected $guarded=[];
      public function department(){
        return $this->belongsTo(department::class);
      }
}
