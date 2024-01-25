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
Route::get('/dashboard', function () {
        return view('master');
     })->middleware(['auth'])->name('master');
    
     require __DIR__.'/auth.php';

//list categorie//////////////////////////////////
Route::get('/',[Categorycontroller::class,'index'])->name('admin.index');
Route::get('admin/create',[CategoryController::class,'create'])->name('admin.Create');
Route::post('admin/store',[CategoryController::class,'store'])->name('admin.store');
Route::get('admin/{id}/edit',[CategoryController::class,'edit'])->name('admin.edit');
Route::put('admin/{id}/update',[CategoryController::class,'update'])->name('admin.update');
Route::delete('admin/{id}/delete',[CategoryController::class,'destory']);
//Route::get('admin/{id}/show',[CategoryController::class,'show']);
Route::get('/categories/{id}', 'YourController@show')->name('categories.show');
//list de plat/////////////////////////////////////
Route::resource('menu',MenuController::class);
Route::get('/',[MenuController::class,'index']);

Route::get('plats/create',[MenuController::class,'create']);
Route::post('plats/store',[MenuController::class,'store']);





