<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class personalInfo extends Model
{
    protected $guarded=[];

    public function users(){
      return $this->belongsTo(User::class);
    }
}
