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
        $this->call([
          // WARNING: E' importante mettere prima Category poi Post
          CategoryTableSeeder::class,
          PostTableSeeder::class
        ]);
    }
}
