<?php

namespace Brainer;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
     public function question()
    {
        return $this->belongsTo('App\BrainQuestions');
    }
}
