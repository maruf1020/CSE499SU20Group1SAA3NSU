<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded=[];

    public function resource(){
        return $this->belongsTo(resource::class);
    }
    public function comment(){
        return $this->HasMany(comment::class);
    }
}
