<?php

use Illuminate\Database\Seeder;

class HighScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('high_scores')->insert([
        	'brain_tests_id' => '1',
            'username' => 'tempuser',
            'score' => 10
        ]);
        DB::table('high_scores')->insert([
        	'brain_tests_id' => '1',
            'username' => 'testUser',
            'score' => 11
        ]);
        DB::table('high_scores')->insert([
        	'brain_tests_id' => '1',
            'username' => 'user99',
            'score' => 20
        ]);
    }
}
