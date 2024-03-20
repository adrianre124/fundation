<?php

use App\Http\Controllers\PracticeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => view('welcome'));

Route::get('statut-fundacji', fn() => view('statut-fundacji'));
Route::get('zarzad-fundacji', fn() => view('zarzad-fundacji'));
Route::get('o-fundacji', fn() => view('o-fundacji'));
Route::get('cele-i-zasady-dzialania', fn() => view('cele-i-zasady-dzialania'));
Route::get('dzialalnosc-gospodarcza', fn() => view('dzialalnosc-gospodarcza'));
Route::get('sprawozdania', fn() => view('sprawozdania'));

Route::get('praktyki/create', [PracticeController::class, 'create']);
Route::get('praktyki/{practice:slug}', [PracticeController::class, 'show']);
Route::get('praktyki', [PracticeController::class, 'index']);
Route::post('praktyki', [PracticeController::class, 'store']);
