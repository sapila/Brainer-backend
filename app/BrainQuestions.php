<?php

namespace Brainer;

use Illuminate\Database\Eloquent\Model;

class BrainQuestions extends Model
{
    public $timestamps = false;

   /*
    * Get the answers to the question
    */
    public function answers()
    {
        return $this->hasMany('App\Answers');
    }
    
     public function brainTest()
    {
        return $this->belongsTo('App\BrainTest');
    }
}
