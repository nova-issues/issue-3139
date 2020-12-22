<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
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
        PostFactory::new()->count(10)->create();
        PostFactory::new()->count(5)->inactive()->create();
        $this->call(UserTableSeeder::class);
    }
}
