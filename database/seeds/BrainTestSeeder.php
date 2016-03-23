<?php

use Illuminate\Database\Seeder;

class BrainTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('brain_tests')->insert([
            'title' => 'Mini Math'
        ]);
           DB::table('brain_tests')->insert([
            'title' => 'Medium Mathematics'
        ]);
             DB::table('brain_tests')->insert([
            'title' => 'The hard way'
        ]);

    }
}
