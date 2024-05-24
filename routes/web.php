<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WorkerController;
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
    })->orderBy('created_at', 'desc')->limit(3)->get()]);
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

Route::get('/admin', [UserController::class, 'index'])->middleware('guest');
Route::post('/admin', [UserController::class, 'login'])->middleware('guest');

Route::get('/opinie', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->middleware('auth');

Route::get('/pracownicy', [WorkerController::class, 'index'])->name('workers.index');
Route::get('/pracownicy/create', [WorkerController::class, 'create'])->middleware('auth');
Route::get('/pracownicy/edit/{worker}', [WorkerController::class, 'edit'])->middleware('auth');
Route::put('/pracownicy/{worker}', [WorkerController::class, 'update'])->middleware('auth');
Route::post('/pracownicy', [WorkerController::class, 'store'])->middleware('auth');
Route::delete('/pracownicy/{worker}', [WorkerController::class, 'destroy'])->middleware('auth');

Route::get('/praktyki', [PracticeController::class, 'index'])->name('practice.index');
Route::get('praktyki/create', [PracticeController::class, 'create'])->middleware('auth');
Route::delete('praktyki/{practice}', [PracticeController::class, 'destroy'])->middleware('auth');
Route::put('praktyki/{practice}', [PracticeController::class, 'update'])->middleware('auth');
Route::get('{practice:slug}', [PracticeController::class, 'show']);
Route::get('/praktyki/edit/{practice}', [PracticeController::class, 'edit']);
Route::post('praktyki', [PracticeController::class, 'store'])->middleware('auth');

Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware('auth');
Route::put('posts/{post}', [PostController::class, 'update'])->middleware('auth');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('posts/edit/{post}', [PostController::class, 'edit']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

Route::post('/upload', [PostController::class, 'upload'])->name('ckeditor.upload');

Route::post('/update-json', [JsonController::class, 'updateJson'])->name("updateJson")->middleware(('auth'));

