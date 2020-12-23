<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    protected $guarded=[];
    public function section(){
        return $this->belongsTo(section::class);
    }
    public function post(){
        return $this->belongsTo(post::class);
    }
}
