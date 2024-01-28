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
Route::get('admin/category/index', 'admin\Categorycontroller@index');

Route::get('admin/category/create', 'admin\categoryController@create')->name('admin.category.create');
Route::post('admin/category/store', 'admin\categoryController@store')->name('admin.category.store');
Route::get('admin/category/{id}/edit', [CategoryController::class,'edit']);
Route::put('admin/category/{id}/update', [CategoryController::class,'pdate']);
Route::delete('admin/category/{id}/delete', [CategoryController::class,'destroy'])->name('admin.category.destroy');
Route::get('admin/category/{id}/show', [CategoryController::class,'show'])->name('admin.category.show');
//Route::get('categories/{id}', 'YourController@show')->name('categories.show');
//list de plat/////////////////////////////////////
//Route::resource('menu',MenuController::class);
//Route::get('/',[MenuController::class,'index']);
// routes/web.php

// Route::get('/admin/plats', 'Admin\menuController@index')->name('admin.category.index');


// Route::get('admin/plats/create',[MenuController::class,'create']);
// Route::post('admin/plats/store',[MenuController::class,'store']);





