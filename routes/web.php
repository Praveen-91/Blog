<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UsersController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[HomepageController::class,'index'])->name('Home');
Route::get('/register',[UsersController::class,'create'])->name('register');
Route::post('/postregister',[UsersController::class,'store'])->name('postregister');
Route::get('/login',[UsersController::class,'login'])->name('login');
Route::post('/postrlogin',[UsersController::class,'getlogin'])->name('postrlogin');
