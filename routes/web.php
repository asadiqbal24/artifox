<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect()->route('get-started');
});




Route::get('get-started', [HomeController::class, 'get_started'])->name('get-started');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login-post', [LoginController::class, 'login_post'])->name('login-post');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('welcome', [HomeController::class, 'welcome'])->name('welcome');




Route::group(['prefix' => 'admin',  'middleware' => ['can:admin']], function()
{

Route::get('admin-home', [AdminController::class, 'admin_home'])->name('admin-home');


});