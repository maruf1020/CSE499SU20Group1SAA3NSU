<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    protected $guarded=[];
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function sectiondetail(){
        return $this->hasOne(sectionDetail::class);
    }
}
