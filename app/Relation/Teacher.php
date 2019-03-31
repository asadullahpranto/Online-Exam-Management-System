<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
  public function exam_details()
  {
      return $this->hasMany('App\Relation\ExamDetail');
  }
}
