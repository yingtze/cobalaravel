<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Post
{
   private static $blog_posts = [
       [
           "title" => "Pertama",
           "slug" => "judul-post-pertama",
           "author" => "Galih",
           "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Consequuntur ab quos quas beatae magni quasi dolorum ex perferendis cum natus ea voluptatum, illum nihil facilis similique! 
           Odit, vitae neque? Unde nobis aliquid dolorum tenetur sed? Earum culpa unde recusandae iste explicabo harum nemo reprehenderit laudantium ratione aut inventore fugiat porro debitis sequi, nostrum, consequuntur voluptatem. 
           Numquam earum temporibus doloribus est eius qui, itaque tenetur? Ab provident iusto, quas autem mollitia debitis praesentium beatae? Ex minima iure consectetur porro quod iste!"
        ],
        [
            "title" => "Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Laksana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quia quae impedit nihil error fugiat officiis, eligendi iure. Consequatur architecto dolor iste nemo iusto accusantium provident quasi libero earum cum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    
    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

    }
}
