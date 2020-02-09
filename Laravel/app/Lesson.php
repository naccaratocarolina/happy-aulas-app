<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  public function users(){
    return $this->belongsTo('App\User');
  }
  public function subjects(){
    return $this->hasOne('App\Subject');
  }
  public function teachers(){
    return $this->belongsTo('App\Teacher');
  }

}
