<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MenuController;
use App\Models\category;
use app\Models\Menu;
use GuzzleHttp\Promise\Create;

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
Route::get('/food','\App\Http\Controllers\testcontrolleur@food',);
Route::get('/bar','\App\Http\Controllers\testcontrolleur@bar',);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';




// Route::get('/master', function () {
//         return view('master');
//      })->middleware(['auth'])->name('master');
//      require_once __DIR__.'/auth.php';

Route::get('/master', function () {
    return view('master');
})->middleware(['auth'])->name('master');

//list categorie//////////////////////////////////******************************************************************* */
//Route::resource('category', 'categoryController');

//Route::get('admin/category/',[Categorycontroller::class,'index'])->name('category.index');
// routes/web.php
Route::get('admin/category/index', 'admin\Categorycontroller@index')->name('admin.category.index');

Route::get('admin/category/create', 'admin\categoryController@create')->name('admin.category.create');
Route::post('admin/category/store', 'admin\categoryController@store')->name('admin.category.store');
Route::get('admin/category/{id}/edit','admin\categoryController@edit')->name('admin.category.edit');

Route::put('admin/category/{id}/update','admin\categoryController@update')->name('admin.category.update');
Route::delete('admin/category/{id}/destroy', 'admin\categoryController@destroy')->name('admin.category.destroy');
Route::get('admin/category/{id}/show','admin\categoryController@show')->name('admin.category.show');
Route::get('admin/category/search', 'admin\categoryController@search')->name('admin.category.search');
//Route plat
Route::resource('menu',MenuController::class);
Route::get('admin/plats/index','admin\MenuController@index')->name('admin.plats.index');
Route::get('admin/plats/create','admin\MenuController@create')->name('admin.plats.create');
Route::post('admin/plats/store','admin\MenuController@store')->name('admin.plats.store');
Route::get('admin/plats/{id}/edit','admin\MenuController@edit')->name('admin.plats.edit');
Route::put('admin/plats/{id}/update','admin\MenuController@update')->name('admin.plats.update');
Route::delete('admin/plats/{id}/destroy', 'admin\MenuController@destroy')->name('admin.plats.destroy');
Route::get('admin/plats/{id}/show','admin\MenuController@show')->name('admin.plats.show');




