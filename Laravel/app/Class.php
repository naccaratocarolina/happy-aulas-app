<?php

namespace App;
use App\Class;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
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
