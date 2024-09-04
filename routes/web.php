<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/Selamat', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 12345678, Nama: Muhammad Andika Qodri';
});

Route::get('/user/ {name}', function ($name) {
    return 'Qodri'.$name;
});

Route::get ('/posts/{post}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/ {name?}', function ($name='john') {
  return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
})->name ('profile');

/* Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
 */
//Generating URLs
//UserProfileController$url = route('profile');

// Generating Redirects...
//return redirect()->route('profile');

Route::middleware(['first', 'second'])->group (function () {
  Route::get('/', function () {
    // Uses first & second middlewere...
  });
Route::get('/user/profile', function () {
    // Uses first & second middlewere...
  });
});

Route::domain('{account}.example.com')->group(function (){
    Route::get('user/{id}', function ($account, $id) {
       //
   });
});

/* Route::middleware ('auth') -> group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [UserController::class, 'index']);
    Route::get('/event', [UserController::class, 'index']);
}); */

/* Route::prefix('admin') ->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [UserController::class, 'index']);
    Route::get('/event', [UserController::class, 'index']);
}); */

Route::redirect ('/here','/there');

Route::view('/welcome','welcome');
Route::view('/welcome','welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/welcome', [PageController::class, 'index']);

Route::get('/welcome', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/welcome', [PageController::class, 'index']);


Route::get('/welcome', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\photoController;

Route::resource('photos', photoController::class);
