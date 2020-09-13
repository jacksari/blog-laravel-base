<?php

namespace App\Observers;

use Illuminate\Support\Str;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function saving(Post $post)
    {
        $slug = Str::slug($post->title, '-');
        $post->slug = $slug;
    }
}
