<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

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

route::get('',fn()=>to_route('jobs.index'));
Route::resource('jobs', JobController::class)
->only(['index','show']);


route::get('login',fn()=>to_route('auth.create'))->name('login');
Route::resource('auth', AuthController::class)
->only(['create','store']);
