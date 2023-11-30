<?php

use App\Http\Controllers\Frontend\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'home'])->name('home.get');

Route::get('/about',[HomeController::class,'about'])->name('about.get');

Route::get('/classes',[HomeController::class,'classes'])->name('classes.get');

Route::get('/contact',[HomeController::class,'contact'])->name('contact.get');

