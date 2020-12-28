<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $guarded=[];

    public function quiz(){
        return $this->belongsTo(quiz::class);
    }
    public function faculty(){
        return $this->belongsTo(faculty::class);
    }
    public function course(){
        return $this->belongsTo(course::class);
    }
    public function section(){
        return $this->belongsTo(section::class);
    }
    public function institution(){
        return $this->belongsTo(institution::class);
    }
}
