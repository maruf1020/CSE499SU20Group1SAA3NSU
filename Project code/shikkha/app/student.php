<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $guarded=[];
    public function sectionDetail(){
        return $this->hasMany(sectionDetail::class);
    }
}
