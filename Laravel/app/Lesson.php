<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Lesson extends Model
{
  use Notifiable;
  
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
