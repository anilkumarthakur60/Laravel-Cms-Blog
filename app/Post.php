<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use SoftDeletes, Commentable;
    protected $dates = [
        'published_at',
    ];

    protected $fillable = ['title', 'description', 'content', 'image', 'published_at', 'category_id', 'user_id'];
    //

    /**
     *
     * @retun void
     */

    public function delete_image()
    {
        Storage::delete($this->image);
    }
    public function category()
    {
        return $this->belongsTo(Category::class); //post model belongs to category model  and laravel try to find the category_id in the post model
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // checks if post has tag return bool
    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
        # code...
    }
    public function user()
    {
        return $this->belongsTo(User::class);
        # code...
    }

    public function scopeSearched($query)          //scope and name of method we are going to use
    {
        $search = request()->query('search');
        if (!$search) {
            return $query->published();
        }
        return $query->published()->where('title', 'LIKE', "%{$search}%");
        # code...
    }
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
        # code...
    }
}