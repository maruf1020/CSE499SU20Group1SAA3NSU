<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sectionDetail extends Model
{
       protected $guarded=[];
    public function faculty(){
        return $this->belongsTo(faculty::class);
    }
    public function student(){
        return $this->belongsTo(student::class);
    }
    public function section(){
        return $this->belongsTo(section::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function session(){
        return $this->belongsTo(session::class);
    }
    public function task(){
        return $this->belongsTo(task::class,'section_id','section_id');
    }



}
