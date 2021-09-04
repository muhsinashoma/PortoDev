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
Route::resource('admin_post', 'App\Http\Controllers\PostController');