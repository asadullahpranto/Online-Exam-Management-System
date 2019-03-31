<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
  public function student()
  {
      return $this->belongsTo('App\Relation\Student');
  }
}
