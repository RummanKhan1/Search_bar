<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'index']);

Route::get('/tag', [MemberController::class, 'tag']);
Route::get('/salary', [MemberController::class, 'salary']);
Route::get('/location', [MemberController::class, 'location']);

Route::post('/find', [MemberController::class, 'find'])->name('find');

