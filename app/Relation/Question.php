<?php

namespace App\Relation;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  public function exam_detail()
 {
     return $this->belongsTo('App\Relation\ExamDetail');
 }
}
