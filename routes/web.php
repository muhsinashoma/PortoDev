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
    return view('blog');
});


/*
 * Laravel Default Auth System(login and register not working)
 */

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
 * Frontend Controller
 * Customized Link for All Block Post
 */

//customized link
Route::get('all_blog', 'App\Http\Controllers\PostController@blogAllPost')->name('post.all_blog');

// Blog Search
Route::post('all_blog', 'App\Http\Controllers\PostController@blogSearch')->name('blog.search');




/*
 * Admin Template Load
 */

Route::get('/admin/login', [App\Http\Controllers\AdminController::class,'showAdminLoginForm'] ) ->name('admin.login');

Route::get('/admin/register', [App\Http\Controllers\AdminController::class,'showAdminRegisterForm']) ->name('admin.register');

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class,'showAdminDashboard']) ->name('admin.dashboard');


/**
 * Admin login/logout
 */
Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'] ) -> name('admin.logout');
Route::post('admin/register',[App\Http\Controllers\Auth\RegisterController::class, 'register']) ->name('admin.register');


/*
 * Post Route
 */
Route::resource('post', 'App\Http\Controllers\PostController');
/*
 * Customized link
 */
Route::get('post_trash', 'App\Http\Controllers\PostController@postTrashShow')->name('post.trash');

/*
 * pody trash update
 */

Route::get('post_trash_update/{id}', 'App\Http\Controllers\PostController@postTrashUpdate')->name('post.trash.update');

/*
 * To show Post Single Page
 */
//
//Route::get('admin/blog_single/{id}', 'App\Http\Controllers\PostController@showSinglePage')->name('post.blog-single');


Route::get('admin/blog_single/{id}', 'App\Http\Controllers\PostController@showSinglePage')->name('post.blog-single');

Route::get('admin/blog_post/{id}','App\Http\Controllers\PostController@postBlogPage')->name('post.blog_post');





/*
 * Category Route
 */
Route::resource('post_category', 'App\Http\Controllers\CategoryController');

/**
 * SubCategory Route
 */

Route::resource('sub_category','App\Http\Controllers\SubcategoryController');

/*
 * Tag Route
 */
Route::resource('post_tag','App\Http\Controllers\TagController');


/**
 * Comment Managment
 */


//This route Works perfectly

Route::post('single_post_comment', [App\Http\Controllers\CommentController::class, 'postComment'])->name('blog.post.comment');
Route::post('single_post_reply', [App\Http\Controllers\CommentController::class, 'addPostReply'])->name('blog.post.reply');












