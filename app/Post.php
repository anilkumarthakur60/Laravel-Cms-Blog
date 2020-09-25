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
}
