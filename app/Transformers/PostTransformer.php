<?php

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    /**
     * @param \App\Post $post
     * @return array
     */
    public function transform(Post $post)
    {
        return [
            'id' => (int) $post->id,
            'titles' => (string) $post->title,
            'contents' => (string) $post->content,
            'slugs' => (string) $post->slug,
        ];
    }
}
