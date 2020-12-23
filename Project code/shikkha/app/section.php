<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $guarded=[];
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function sectionDetail(){
        return $this->hasMany(sectionDetail::class);
    }
    public function session(){
        return $this->belongsTo(session::class);
    }
    public function resource(){
        return $this->hasMany(resource::class);
    }

}
