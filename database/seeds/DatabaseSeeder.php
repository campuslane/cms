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
        $this->call(PagesTableSeeder::class);
    }
}

class PagesTableSeeder extends Seeder 
{
	public function run()
	{
		DB::table('pages')->truncate();

		DB::table('pages')->insert([
			'title' => 'About', 
			'slug' => 'about'
		]);
	}
}
