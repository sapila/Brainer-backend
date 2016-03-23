<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('answers')->insert([
        	'brain_questions_id' => '1',
            'text' => '9',
            'correct' => false
        ]);
        DB::table('answers')->insert([
        	'brain_questions_id' => '1',
            'text' => '8',
            'correct' => true
        ]);
        DB::table('answers')->insert([
        	'brain_questions_id' => '1',
            'text' => '7',
            'correct' => false
        ]);
        DB::table('answers')->insert([
        	'brain_questions_id' => '1',
            'text' => '10',
            'correct' => false
        ]);
    }
}
