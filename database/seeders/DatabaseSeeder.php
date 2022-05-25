<?php

namespace Database\Seeders;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
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
            UsersTableSeeder::class,
            PostTableSeeder::class
        ]);

        Category::factory(10)->create();
        Tag::factory(10)->create();
        Post::factory(500)->create();
        User::factory(10)->hasPosts(50)->create();
    }
}
