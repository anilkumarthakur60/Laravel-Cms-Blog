<?php

use App\Category;
use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $category1=Category::create([
            'name'=>'News'
            ]);
            
        $category2=Category::create([
                'name'=>'design'
                ]);
        $category3=Category::create([
                    'name'=>'update'
                    ]);
        $category4=Category::create([
                        'name'=>'category'
                        ]);
        $category5=Category::create([
                            'name'=>'marketting'
                            ]);
        $post1=Post::create([
            'title'=>'laravel blog title',
            'description'=>'laravel blog description',
            'content'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus dolor incidunt laborum odio! Ipsa eaque, sunt minima nisi fugiat sed molestias voluptas porro animi doloribus doloremque itaque labore dignissimos?',
            'category_id'=>$category1->id,
            'image'=>'posts/1.jpg'
            ]);
        $post2=Post::create([
        'title'=>'laravel blog title',
        'description'=>'laravel blog description',
        'content'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus dolor incidunt laborum odio! Ipsa eaque, sunt minima nisi fugiat sed molestias voluptas porro animi doloribus doloremque itaque labore dignissimos?',
        'category_id'=>$category2->id,
        'image'=>'posts/2.jpg'
              ]);
        $post3=Post::create([
        'title'=>'laravel blog title',
        'description'=>'laravel blog description',
        'content'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus dolor incidunt laborum odio! Ipsa eaque, sunt minima nisi fugiat sed molestias voluptas porro animi doloribus doloremque itaque labore dignissimos?',
        'category_id'=>$category3->id,
        'image'=>'posts/3.jpg'
              ]);
        $post4=Post::create([
        'title'=>'laravel blog title',
        'description'=>'laravel blog description',
        'content'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus dolor incidunt laborum odio! Ipsa eaque, sunt minima nisi fugiat sed molestias voluptas porro animi doloribus doloremque itaque labore dignissimos?',
        'category_id'=>$category4->id,
        'image'=>'posts/4.jpg'
                ]);
        $post5=Post::create([
        'title'=>'laravel blog title',
        'description'=>'laravel blog description',
        'content'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus dolor incidunt laborum odio! Ipsa eaque, sunt minima nisi fugiat sed molestias voluptas porro animi doloribus doloremque itaque labore dignissimos?',
        'category_id'=>$category4->id,
        'image'=>'posts/5.jpg'

                ]);

        $tag1=Tag::create([
            'name'=>'record'
        ]);
        $tag2=Tag::create([
            'name'=>'progress'
        ]);
        $tag3=Tag::create([
            'name'=>'customer'
        ]);
        $tag4=Tag::create([
            'name'=>'design',
        ]);
        $tag5=Tag::create([
            'name'=>'job',
        ]);



        $post1->tags()->attach([$tag1->id,$tag2->id]);
        
        $post2->tags()->attach([$tag2->id,$tag3->id]);
        $post3->tags()->attach([$tag1->id,$tag4->id]);
        $post4->tags()->attach([$tag3->id,$tag5->id]);
        $post5->tags()->attach([$tag2->id,$tag3->id]);

    }

}
