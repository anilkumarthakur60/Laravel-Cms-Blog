<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable=['title','description','content','image','published_at','category_id'];
    //

    /**
     *  
     * @retun void
     */

    public function delete_image(){
        Storage::delete($this->image);
    }
    public function category(){
        return $this->belongsTo(Category::class); //post model belongs to category model  and laravel try to find the category_id in the post model
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // checks if post has tag return bool
    public function hasTag($tagId)
    {
        return in_array($tagId,$this->tags->pluck('id')->toArray());
        # code...
    }
}
