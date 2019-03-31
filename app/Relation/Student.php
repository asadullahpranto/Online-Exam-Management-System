<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
  public function results()
  {
      return $this->belongsTo('App\Relation\Result');
  }
}
