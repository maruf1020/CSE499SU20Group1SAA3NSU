<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifiyInstiution extends Model
{
    protected $guarded=[];

    
  public function institution(){
    return $this->belongsTo(institution::class);
  }
}
