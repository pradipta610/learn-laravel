<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Category;
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
        "title" => "Home",
        "active"=>"home",
    ]);
});



Route::get('/posts', [PostController::class,'index'])->middleware('auth');
Route::get('posts/{post:slug}', [PostController::class,'ShowdetailPost']);
Route::get('categories/',function(){
    return view('categories',[
        'title'=>'Post-Categories',
        "active"=>"categories",
        'categories'=>Category::all()
    ]);
})->middleware('auth');
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/dashboard',[DashboardsController::class, 'index'])->middleware('admin');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class , 'checkSlug'])->middleware('admin');
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class , 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('admin');
Route::resource('/dashboard/categories',AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/users',UserController::class)->except('show')->middleware('admin');
