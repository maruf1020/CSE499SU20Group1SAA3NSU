<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
      protected $guarded=[];
      public function department(){
        return $this->belongsTo(department::class);
      }
    public function section(){
        return $this->hasMany (section::class);
    }
    public function faculty(){
        return $this->hasMany (faculty::class);
    }
    public function sectionDetail(){
        return $this->hasMany (sectionDetail::class);
    }
}
