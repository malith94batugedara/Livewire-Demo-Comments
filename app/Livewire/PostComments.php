<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class PostComments extends Component
{
    public Post $post;

    public string $name = '';
    public string $comment = '';

    public function saveComment(): void
    {
        Comment::create([
            'post_id' => $this->post->id,
            'user_name' => $this->name,
            'body' => $this->comment,
        ]);

        $this->dispatch('comment-added');

        $this->reset('name', 'comment');
    }
}
