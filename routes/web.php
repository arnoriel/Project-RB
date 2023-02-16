<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\MinumController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'role:admin']],
function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/resep', function () {
        return view('admin.resep');
    });
    Route::get('/minum', function () {
        return view('admin.minum');
    });
    Route::get('/logout', function () {
        return view('views.home');
    });
    Route::resource('/resep', ResepController::class);
    Route::resource('/minum', MinumController::class);
});

Route::group(['prefix' => 'member', 'middleware' => ['auth']],
function () {
    Route::get('/resep', [App\Http\Controllers\HomeController::class, 'resepMember'])->name('home2');
    
    Route::get('/resep', function () {
        return view('member.resep2.index2');
    });
    Route::get('/logout', function () {
        return view('views.home');
    });
    // Route::resource('/resep', ResepController::class);
    Route::get('/', [App\Http\Controllers\ResepController::class, 'resepMember']);
    Route::get('/resep', [App\Http\Controllers\ResepController::class, 'resepMember']);
    Route::get('/minum', [App\Http\Controllers\MinumController::class, 'minumMember']);
    Route::get('/resep/{id}', [App\Http\Controllers\ResepController::class, 'detail']);
    Route::get('/minum/{id}', [App\Http\Controllers\MinumController::class, 'ditel']);

});