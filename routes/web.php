<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;

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

Route::get('/', function () { return view('index'); });
Route::get('/biens', [ MainController::class, 'index' ])->name('properties');
Route::get('/biens/{bien}', [ MainController::class, 'show' ])->name('property');
Route::get('/à-propos', function () { return view('aboutus'); });

Auth::routes();

Route::get('/home', [ HomeController::class, 'index' ])->name('home');
Route::get('/admin/home', [ MainController::class, 'admin' ] )->middleware('admin')->name('admin');
Route::get('/admin/agents', [ UserController::class, 'index' ] )->middleware('admin')->name('users.index');
Route::get('/admin/categories', [ CategoryController::class, 'index' ] )->middleware('admin')->name('categories.index');

// on pourrait écrire les admin property comme ceci: 
//Route::prefix('admin)->middleware('admin)->group(function() {
  //Route::resource('properties', PropertyController::class);
//});
Route::get('/admin/biens', [ PropertyController::class, 'index' ] )->middleware('admin')->name('properties.index');
Route::get('/admin/biens/create', [ PropertyController::class, 'create' ] )->middleware('admin')->name('properties.create');
Route::post('/admin/biens/store', [ PropertyController::class, 'store' ] )->middleware('admin')->name('properties.store');   
Route::delete('/admin/biens/{bien}/delete', [ PropertyController::class, 'delete' ] )->middleware('admin')->name('properties.delete'); 
Route::get('/admin/biens/{bien}/edit', [ PropertyController::class, 'edit' ] )->middleware('admin')->name('properties.edit');
Route::put('/admin/biens/{bien}/update', [ PropertyController::class, 'update' ] )->middleware('admin')->name('properties.update');

Route::get('/contact', function () {
  return new App\Mail\Contact([
    'nom' => 'Jean',
    'email' => 'jeannn@aol.com',
    'message' => 'Je voulais vous laisser vous dire que laravel est un outil sympatique!'
    ]);
});