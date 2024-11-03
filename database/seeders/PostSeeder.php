<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post 1',
            'category_id' => '1',
            'excerpt' => 'Excerpt post 1',
            'body' => 'Body post 1'
        ]);

        Post::create([
            'title' => 'Post 2',
            'category_id' => '1',
            'excerpt' => 'Excerpt post 2',
            'body' => 'Body post 2'
        ]);

        Post::create([
            'title' => 'Post 3',
            'category_id' => '2',
            'excerpt' => 'Excerpt post 3',
            'body' => 'Body post 3'
        ]);

    }
}
