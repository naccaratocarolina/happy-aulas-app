<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Subject extends Model
{
    public function teachers(){//<-here!
      return $this->belongsToMany('App\Teacher');
    }
    public function lessons(){
      return $this->belongsToMany('App\Lesson');
    }
}
