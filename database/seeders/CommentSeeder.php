<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory()->create([
            'post_id' => 1,
            'body' => 'This is the first comment for post 1.',
        ]);

        Comment::factory()->create([
            'post_id' => 1,
            'body' => 'This is the second comment for post 1.',
        ]);
    }
}
