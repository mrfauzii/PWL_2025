<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// Route::get('/hello', function () {
//     return ('Hello World');
// });

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
   

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return ('World');
});

Route::get('/', HomeController::class);

Route::get('/about', AboutController::class);

Route::get('/articles/{id}', ArticleController::class);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});


