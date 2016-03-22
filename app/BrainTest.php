<?php

namespace Brainer;

use Illuminate\Database\Eloquent\Model;

class BrainTest extends Model
{
     public $timestamps = false;

	/**
     * Get the questions for BrainTest.
     */
     public function questions()
    {
        return $this->hasMany('App\BrainQuestions');
    }

	/**
     * Get the high scores for BrainTest.
     */
     public function highScores()
    {
        return $this->hasMany('App\HighScores');
    }

}
