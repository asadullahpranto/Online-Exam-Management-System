<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
  use Notifiable;

  public function exam_details()
  {
      return $this->hasMany('App\Relation\ExamDetail');
  }
}
