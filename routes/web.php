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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::resource('posts', 'PostController')->names('blog.posts');
});

// Blog admin panel
$groupData = [
    'namespace' => 'App\Http\Controllers\Blog\Admin',
    'prefix'    => 'admin/blog',
];
Route::group($groupData, function () {
    // BlogCategory
    $methods = ['index', 'edit', 'update', 'create', 'store',];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');

    // BlogPost
    Route::resource('posts', 'PostController')
        ->except(['show'])
        ->names('blog.admin.posts');
});

Route::group(['prefix' => 'digging_deeper', ], function () {
    Route::get('collections', 'App\Http\Controllers\DiggingDeeperController@collections')
        ->name('digging_deeper.collections');
});

Route::group(['prefix' => 'fundamentals'], function () {
    Route::get('property-container', [\App\Http\Controllers\FundamentalPatternsController::class, 'PropertyContainer'])
    ->name('fundamentals.property-container');
});

// Route::resource('rest', 'App\Http\Controllers\RestTestController');





