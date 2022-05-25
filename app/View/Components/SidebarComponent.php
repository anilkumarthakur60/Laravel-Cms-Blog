<?php

namespace App\View\Components;

use App\Category;
use App\Tag;
use Illuminate\View\Component;

class SidebarComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['categories'] = Category::orderBy('name', 'asc')->whereHas('posts')->get();
        $data['tags'] = Tag::orderBy('name', 'asc')->whereHas('posts')->get();
        return view('components.sidebar-component', $data);
    }
}
