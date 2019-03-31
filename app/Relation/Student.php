<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
  use Notifiable;
  public function results()
  {
      return $this->belongsTo('App\Relation\Result');
  }
}
