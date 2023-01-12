<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->create();
        $tags =  Tag::factory(40)->create();
        $posts = Post::factory(200)->create();

        foreach ($posts as $post)
        {
            $tagIds = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagIds);
        }

        User::factory(1)->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make(123),
            'role' => 0,
        ]);
        User::factory(1)->create([
            'name' => 'reader',
            'email' => 'reader@example.com',
            'password' => Hash::make(123),
            'role' => 1,
        ]);

         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
