<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('news/{post:slug}', [HomeController::class, 'show']);

Route::get('/news', [PostController::class, 'index']);
Route::get('news/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'News Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'company' => 'U-TECH',
        "motto" => "Empowering Ideas, Unleash Your Tech Potential",
        'image' => 'logo-utech.png'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate']);
Route::post('/signout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
})->middleware('auth');

Route::get('dashboard/news/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/news', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');