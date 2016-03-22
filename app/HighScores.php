<?php

namespace Brainer;

use Illuminate\Database\Eloquent\Model;

class HighScores extends Model
{
     public $timestamps = false;

     public function brainTest()
    {
        return $this->belongsTo('App\BrainTest');
    }
}
