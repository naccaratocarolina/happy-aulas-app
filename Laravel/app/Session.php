<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function teacher(){
      return $this->belongsTo('App/Teacher');
    }
    public function user(){
      return $this->belongsTo('App/User');
    }
}
