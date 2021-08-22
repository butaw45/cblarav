<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul-post-Pertama",
            "author" => "Author Name Pertama",
            "body" => "
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti earum culpa aliquam molestiae
                dolores maiores voluptatum minus fugiat saepe quibusdam? Eos voluptates aspernatur nisi recusandae
                saepe voluptatum esse deleniti, numquam praesentium totam consequatur. Consequatur dolorum animi facere
                quis rerum cum nihil ipsam asperiores, sint corporis qui ducimus, reprehenderit reiciendis eius?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "Judul-post-Kedua",
            "author" => "Author Name Kedua",
            "body" => "
                Asu-Asu-Asu-Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti earum culpa aliquam molestiae
                dolores maiores voluptatum minus fugiat saepe quibusdam? Eos voluptates aspernatur nisi recusandae
                saepe voluptatum esse deleniti, numquam praesentium totam consequatur. Consequatur dolorum animi facere
                quis rerum cum nihil ipsam asperiores, sint corporis qui ducimus, reprehenderit reiciendis eius?"
        ]
        ];  
        
        public static function all(){
            return collect(self::$blog_post); 
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug', $slug );
        }

}
