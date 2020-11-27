<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    protected $guarded=[];

    public function institution(){
        return $this->belongsTo(institution::class);
    }
}
