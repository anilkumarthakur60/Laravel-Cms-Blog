<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{



    public function show(Post $post, Category $category, Tag $tag)
    {
        return view('blog.show')->with('post', $post)->with('category', $category)->with('tag', $tag);
        //
    }



    public function  category(Category $category)
    {


        return view('blog.category')
            ->with('category', $category)
            ->with('posts', $category->posts()->searched()->paginate(4))
            ->with('categories', Category::all())
            ->with('tags', Tag::all());

        # code...
    }
    public function  tag(Tag $tag)
    {

        return view('blog.tag')
            ->with('tag', $tag)
            ->with('posts', $tag->posts()->searched()->paginate(4))
            ->with('categories', Category::all())
            ->with('tags', Tag::all());

        # code...
    }
}