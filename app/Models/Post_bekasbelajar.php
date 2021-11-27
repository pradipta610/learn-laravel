<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =
    [
        [
            "judul" => "Pradipta The best in the World",
            "slug"=>"judul-post-pertama",
            "author" => "Pradipta Wistika",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis placeat maxime quaerat, accusamus quisquam officiis dolor error molestias minima at facere praesentium omnis aut soluta, amet perferendis illum quod cupiditate."
        ],
        [
            "judul" => "Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author" => "Ketut Wistika",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa reiciendis cumque amet enim numquam ipsam, nesciunt aut adipisci a quod ratione et nostrum non libero fugit error reprehenderit odio ut?
            "
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
            // $new_blog =[];
            // foreach ($posts as $post) {
            //     if($post["slug"]===$slug){
            //         $new_blog = $post;
            //     }
            // }
            return $posts->firstWhere("slug",$slug);
    }





}
