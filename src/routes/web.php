<?php

use Concepticio\Nhelp\Controllers\help_moduleController;
use Concepticio\Nhelp\Controllers\help_postController;
use Concepticio\Nhelp\Controllers\usersViewController;
use Concepticio\Nhelp\Models\help_module;
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
Route::group(['prefix' => 'nhelp'], function () {
    Route::get('/oneshow{id}', [usersViewController::class,'showone'])->name('view.oneshow');
    Route::get('/', [usersViewController::class,'index'])->name('nhelp.index');
    Route::get('/show/{idpost}', [usersViewController::class,'show'])->name('view.show');

    Route::get('/oneshow{id}', [usersViewController::class,'showone'])->name('view.oneshow');
    // Route::get('/aide/{module}/{post}', [usersViewController::class,'navAide'])->name('view.navaide');

    Route::get('/admin', function () {
        return view('nhelp::dashbord.admindash',compact( Auth::user()));
    });

    //hel_post
    Route::resource('posts', help_postController::class);
    //help_module
    Route::resource('modules', help_moduleController::class);


    Route::get('/home', [Concepticio\Nhelp\Controllers\HomeController::class, 'index'])->name('home');
});