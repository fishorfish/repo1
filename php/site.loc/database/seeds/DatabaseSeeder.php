<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $results = DB::select('select * from Users where id = ?', [1]);
    	 var_dump($results);
    }
}
