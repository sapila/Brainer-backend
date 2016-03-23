<?php

use Illuminate\Database\Seeder;

class BrainQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brain_questions')->insert([
        	'brain_tests_id' => '1',
            'question' => '3 + 5'
        ]);
        DB::table('brain_questions')->insert([
        	'brain_tests_id' => '1',
            'question' => '4 * 4'
        ]);
        DB::table('brain_questions')->insert([
        	'brain_tests_id' => '1',
            'question' => '7 + 9'
        ]);
        DB::table('brain_questions')->insert([
        	'brain_tests_id' => '1',
            'question' => '9 * 7'
        ]);
        DB::table('brain_questions')->insert([
        	'brain_tests_id' => '1',
            'question' => '12 / 4'
        ]);

    }
}
