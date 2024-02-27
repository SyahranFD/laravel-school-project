<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use App\Models\Students;
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

Route::get('/hello', function () {
    return 'Hello World !';
});

Route::get('/home', function () {
    return view('home', [
        'title'=> 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'About',
        'nama'=> 'Syahran Fadhil Dafanindra',
        'kelas'=> '11 PPLG 2',
        'img'=> 'img/about-img.jpg',
    ]);
});

Route::group(["prefix" => "/student"], function() {
    Route::get('/all', [StudentsController::class,'index'])->name('student.all');
    Route::get('/detail/{student}', [StudentsController::class,'show']);
    Route::get('/create', [StudentsController::class,'create']);
    Route::post('/add', [StudentsController::class,'store']);
    Route::delete('/delete/{student}', [StudentsController::class,'destroy']);
    Route::get('/edit/{student}', [StudentsController::class,'edit']);
    Route::put('/update/{student}', [StudentsController::class,'update']);
});

Route::group(["prefix" => "/kelas"], function() {
    Route::get('/all', [KelasController::class,'index'])->name('kelas.all');
    Route::get('/create', [KelasController::class,'create']);
    Route::post('/add', [KelasController::class,'store']);
    Route::get('/detail/{kelas}', [KelasController::class,'show']);
    Route::delete('/delete/{kelas}', [KelasController::class,'destroy']);
    Route::get('/edit/{kelas}', [KelasController::class,'edit']);
    Route::put('/update/{kelas}', [KelasController::class,'update']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);