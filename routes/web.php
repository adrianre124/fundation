<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome', ['projects' => Post::whereHas('category', function($q) {
        $q->where('name','like', 'Projekty');
    })->limit(3)->get()]);
})->name('/home');

Route::get('statut-fundacji', fn() => view('statut-fundacji'));
Route::get('zarzad-fundacji', fn() => view('zarzad-fundacji'));
Route::get('o-fundacji', fn() => view('o-fundacji'));
Route::get('cele-i-zasady-dzialania', fn() => view('cele-i-zasady-dzialania'));
Route::get('dzialalnosc-gospodarcza', fn() => view('dzialalnosc-gospodarcza'));
Route::get('/aktualnosci', [PostController::class, 'index'])->name('post.index');
Route::get('/sprawozdania', fn() => view('sprawozdania', [
    'posts' => Post::whereHas('category', function($q) {
        $q->where('name','like', 'Sprawozdania');
    })->paginate(6)->withQueryString()
]));
Route::get('/projekty', fn() => view('posts.index', [
    'posts' => Post::whereHas('category', function($q) {
        $q->where('name','like', 'Projekty');
    })->paginate(6)->withQueryString()
]));
Route::get('/galeria', fn() => view('galeria'));

Route::get('/kontakt', [ContactController::class, 'show']);
Route::post('/kontakt', [ContactController::class,'sendEmail']);

Route::get('/category/{category:name}', [CategoryController::class, 'show']);

Route::get('praktyki/create', [PracticeController::class, 'create'])->middleware('auth');
Route::delete('praktyki/{practice}', [PracticeController::class, 'destroy'])->middleware('auth');
Route::put('praktyki/{practice}', [PracticeController::class, 'update'])->middleware('auth');
Route::get('praktyki/{practice:slug}', [PracticeController::class, 'show']);
Route::get('/praktyki', [PracticeController::class, 'index'])->name('practice.index');
Route::get('/praktyki/edit/{practice}', [PracticeController::class, 'edit']);
Route::post('praktyki', [PracticeController::class, 'store'])->middleware('auth');

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware('auth');
Route::put('posts/{post}', [PostController::class, 'update'])->middleware('auth');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('posts/edit/{post}', [PostController::class, 'edit']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::post('/upload', [PostController::class, 'upload'])->name('ckeditor.upload');

Route::get('/admin', [UserController::class, 'index'])->middleware('guest');
Route::post('/admin', [UserController::class, 'login'])->middleware('guest');
