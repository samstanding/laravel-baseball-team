<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('players')->insert([
           'first_name'=>str_random(8),
           'last_name'=>str_random(8),
           'position'=>'p',
           'types_id'=>App\Types::all()->random()->id,
       ]);
    }
}
