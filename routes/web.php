<?php

use App\Http\Controllers\admin\ComicController as AdminComicController;
use App\Http\Controllers\admins\ComicController;
use App\Http\Controllers\ComicController as ControllersComicController;
use App\Http\Controllers\PageController;
use App\Models\Comic;
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

//Rimando al controller per la gestione delle pagine statiche lato guest
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/anni10', [PageController::class, 'anni10'])->name('anni10');
Route::get('/anni00', [PageController::class, 'anni00'])->name('anni00');
Route::get('/anni1900', [PageController::class, 'anni1900'])->name('anni1900');

/*CRUD*/

//Route::get('/admins/comics', [ComicController::class, 'index'])->name('admins.comics.index');
//Route::post('/admins/comics', [ComicController::class, 'store'])->name('admins.comics.store');

Route::resource('comics', ComicController::class);
/*APPUNTO PERSONALE 
Con resource tutte le rotte sono nominate 'comics.%'*/