<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

/************************ Auth ************************/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/************************ Tags ************************/
Route::get('/tag', [TagController::class, 'index'])->name('tag.index')->middleware('auth');
Route::post('/tag/add', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
Route::post('/tag/update', [TagController::class, 'update'])->name('tag.update')->middleware('auth');

/************************ Spendings ************************/
Route::get('/spendings', [SpendingController::class, 'index'])->name('spending.index')->middleware('auth');


