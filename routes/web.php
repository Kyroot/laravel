<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::post('newsletter', NewsletterController::class);

// name(home) = assign a name to a page only in the backend and not visible for user
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comment', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');


Route::middleware("can:admin")->group(function(){

    Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/{post:id}/edit', [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post:id}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post:id}', [AdminPostController::class, 'destroy']);
});

//replaced with first Route as it works based on a query
// Route::get('categories/{category:slug}',function(Category $category){
//     return view('posts',[
//         'posts' =>  $category->posts,
//         'selectedCategory' => $category,
//         'categories' => Category::all()
//     ]);
// });

// Route::get('author/{author:username}',function(User $author){
//     // $posts = $author->posts->load('category','author');
//     $posts = $author->posts;
//     return view('posts.index', [
//         'posts'=>$posts,
//     ]);
// });
