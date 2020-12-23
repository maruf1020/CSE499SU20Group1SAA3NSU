<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $guarded=[];
    public function section(){
        return $this->hasMany (section::class);
    }
    public function sectionDetail(){
        return $this->hasMany (sectionDetail::class);
    }
}
