<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Teacher extends User
{
  public function classes(){
    return $this->hasMany('App\Session');
  }
  public function subjects(){
    return $this->belongsToMany('App\Subject');
  }
}
