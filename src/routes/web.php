<?php

use Concepticio\Nhelper\Controllers\help_moduleController;
use Concepticio\Nhelper\Controllers\help_postController;
use Concepticio\Nhelper\Controllers\usersViewController;
use Concepticio\Nhelper\Models\help_module;
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
Route::group(['prefix' => 'nhelper'], function () {
    Route::get('/oneshow{id}', [usersViewController::class,'showone'])->name('view.oneshow');
    Route::get('/', [usersViewController::class,'index'])->name('nhelper.index');
    Route::get('/show/{idpost}', [usersViewController::class,'show'])->name('view.show');
    Route::get('/oneshow{id}', [usersViewController::class,'showone'])->name('view.oneshow');
    Route::get('/aide/{module}/{post}', [usersViewController::class,'Next'])->name('view.next');
    Route::get('search', [usersViewController::class, 'search'])->name('search');
    Route::get('/admin', function () {
        return view('nhelper::layourt.admindash');
    });

    //hel_post
    Route::resource('posts', help_postController::class);
    //help_module
    Route::resource('modules', help_moduleController::class);


    Route::get('/home', [Concepticio\Nhelper\Controllers\HomeController::class, 'index'])->name('home');

});
