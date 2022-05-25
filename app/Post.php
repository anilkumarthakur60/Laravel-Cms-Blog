<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use SoftDeletes, Commentable, HasFactory, Sluggable;
    protected $dates = [
        'published_at',
    ];

    protected $guarded = ['id'];

    // protected $fillable = ['title', 'description', 'slug', 'content', 'image', 'published_at', 'category_id', 'user_id'];

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
    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('name')->toArray());
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearched($query)
    {
        $search = request()->query('search');
        if (!$search) {
            return $query->published();
        }
        return $query->published()->where('title', 'LIKE', "%{$search}%");
    }
    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }

    protected static function boot()
    {
        parent::boot();
        // self::creating(function ($model) {
        //     $model->user_id = auth()->id();
        // });
        // self::addGlobalScope(function (Builder $builder) {

        //     $builder->where('user_id', auth()->id());
        // });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
