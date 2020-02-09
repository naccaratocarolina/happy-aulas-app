<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Teacher extends User
{
  public function lessons(){
    return $this->hasMany('App\Lesson');
  }
  public function subjects(){
    return $this->belongsToMany('App\Subject');
  }
}
