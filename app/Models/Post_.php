<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "judul" => "Judul Buku Pertama",
            "slug" => "judul-buku-pertama",
            "author" => "ahmad triandi",
            "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "

        ],
        [
            "judul" => "Judul Buku kedua",
            "slug" => "judul-buku-kedua",
            "author" => "May",
            "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "
        ]

        ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
    //     $post=[];
    //     foreach($posts as $p) {
    //         if($p["slug"] === $slug) {
    //             $post = $p;
    //         }
    //     }
    //     return $post;
    // }
return $posts->firstWhere('slug', $slug);
    
}
}
