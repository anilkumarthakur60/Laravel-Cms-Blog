<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Post $post,Category $category,Tag $tag) //post,category,tag are argument received from web.php route list
    {   
        return view('blog.show')->with('post',$post)->with('category',$category)->with('tag',$tag);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function  category(Category $category)
    {   
      

        return view('blog.category')
            ->with('category',$category)
            ->with('posts',$category->posts()->searched()->paginate(4))
            ->with('categories',Category::all())
            ->with('tags',Tag::all());

        # code...
    }
    public function  tag(Tag $tag)
    {  

        return view('blog.tag')
            ->with('tag',$tag)
            ->with('posts',$tag->posts()->searched()->paginate(4))
            ->with('categories',Category::all())
            ->with('tags',Tag::all());

        # code...
    }
   
}
