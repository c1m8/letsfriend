<?php

namespace Database\Seeders;

use App\Http\Controllers\ProfileController;
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
            UserSeeder::class,
            TagsSeeder::class,
            PostsSeeder::class,
            CommentsSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
