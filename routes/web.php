<?php

use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "About",
        "nama" => "ahmad Triandi",
        "email" => "3andiahmad@gmail.com",
        "image" => "img\andi.jpg"
]);
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "Home"

    ]);
});
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "Category",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => "Category",
        'posts' => $category->posts->load(['category','author'])


    ]);
});
Route::get('/authors/{author:username}',function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        "active" => "Blog",
        'posts' => $author->posts->load(['category','author'])
        
    ]);

});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
    
























// $blog_posts = [
    //     [
    //         "judul" => "Judul Buku Pertama",
    //         "slug" => "judul-buku-pertama",
    //         "author" => "ahmad triandi",
    //         "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "

    //     ],
    //     [
    //         "judul" => "Judul Buku kedua",
    //         "slug" => "judul-buku-kedua",
    //         "author" => "May",
    //         "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "
    //     ]
    //     ];
    
// route::get('/posts/{$slug}', function($slug){
    // $blog_posts = [
    //     [
    //         "judul" => "Judul Buku Pertama",
    //         "slug" => "judul-buku-pertama",
    //         "author" => "ahmad triandi",
    //         "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "

    //     ],
    //     [
    //         "judul" => "Judul Buku kedua",
    //         "slug" => "judul-buku-kedua",
    //         "author" => "May",
    //         "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fugit quas! Commodi harum fugit ipsam doloribus quaerat tempore dolorem a et odit non excepturi libero consectetur molestiae nam iste soluta deleniti amet quisquam, vitae eius incidunt minus eum! "
    //     ]
    //     ];
    //     $new_post = [];
    //     foreach ($blog_posts as $post) {
    //         if ($post("slug") === $slug ) {
    //             $post = $new_post;
    //         }
    //     }


//     return view ('post', [
//         "title" => "Single post"
//         // "post" => $new_post

//     ]);
// });




