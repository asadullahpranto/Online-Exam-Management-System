<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
  public function questions()
  {
      return $this->hasMany('App\Relation\Question');
  }
  public function teacher()
  {
      return $this->belongsTo('App\Relation\Teacher');
  }
  public function results()
  {
      return $this->hasMany('App\Relation\Result');
  }
}
