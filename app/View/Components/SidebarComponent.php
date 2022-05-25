<?php

namespace App\View\Components;

use App\Category;
use App\Tag;
use Illuminate\View\Component;

class SidebarComponent extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        $data['categories'] = Category::orderBy('name', 'asc')->whereHas('posts')->get();
        $data['tags'] = Tag::orderBy('name', 'asc')->whereHas('posts')->get();
        return view('components.sidebar-component', $data);
    }
}
