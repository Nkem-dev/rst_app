<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/new_user', function () {
    return view('signup');
});

Route::get('/contact', function () {
    return view('contact');
});

//route to create new user
Route::post('store', [UserController::class, 'store'])->name('store_user');

//route for logout
Route::post('logout', [UserController::class, 'logout'])->name('logout');


Auth::routes();


Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');


//housing every route of the admin
Route::middleware(['auth', 'isAdmin'])->group(function(){
    //Route for admin dashboard
    Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard'); 

    //route for menu
    Route::get('admin/menu', [AdminController::class, 'menu'])->name('menu');

    //route for adding new menu
    Route::post('add_menu', [AdminController::class, 'add_menu'])->name('add_menu');
 
});

