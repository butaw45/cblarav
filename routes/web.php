<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home"
    ]);
    
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "About",
        "nama" => "Haris",
        "no" => "0304",
        "email" => "hariis12@pm.me"
    ]);
});

Route::get('/blog', function () {

    
$blog_post = [
    [
        "tittle" => "Judul Post Pertama",
        "slug" => "Judul-post-Kedua",
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
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, praesentium ad fugit, alias tenetur quia 
            dignissimos modi enim quibusdam commodi harum similique! Ea exercitationem, expedita porro illo quaerat reiciendis 
            voluptates nisi voluptatibus ratione dolorum perferendis quis consequuntur modi laudantium dolores. Modi ratione, 
            omnis quae saepe dolorum quam magnam veniam dicta rem sunt quisquam debitis nihil molestiae sequi repellat quis 
            distinctio sapiente optio earum, amet dignissimos nobis consectetur nesciunt. Qui sapiente nulla illum voluptas 
            excepturi tempora, rerum animi suscipit, fuga laboriosam, a itaque beatae rem aperiam! Aspernatur odio atque architecto 
            consectetur ex dolore ratione, aut animi necessitatibus laborum incidunt ullam quo."
    ]
    ];


    return view('posts',[
        "tittle" => "Blog",
        "posts" => $blog_post
    ]);
});

//Halaman Sigle Post
Route::get('posts/{slug}', function ($slug) {

    $blog_post = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul-post-Kedua",
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
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, praesentium ad fugit, alias tenetur quia 
                dignissimos modi enim quibusdam commodi harum similique! Ea exercitationem, expedita porro illo quaerat reiciendis 
                voluptates nisi voluptatibus ratione dolorum perferendis quis consequuntur modi laudantium dolores. Modi ratione, 
                omnis quae saepe dolorum quam magnam veniam dicta rem sunt quisquam debitis nihil molestiae sequi repellat quis 
                distinctio sapiente optio earum, amet dignissimos nobis consectetur nesciunt. Qui sapiente nulla illum voluptas 
                excepturi tempora, rerum animi suscipit, fuga laboriosam, a itaque beatae rem aperiam! Aspernatur odio atque architecto 
                consectetur ex dolore ratione, aut animi necessitatibus laborum incidunt ullam quo."
        ]
        ];

        $new_post = [];
        foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
        }

    return view('post',[
        "tittle" => "Sigle Post",
        "post" => $new_post
    ]);
    
});