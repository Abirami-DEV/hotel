<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UploadImageController;
 

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


Route::get('foods', [FoodController::class, 'index'])->name('foods');
Route::get('foods/create',[FoodController::class, 'create']);
Route::post('foods', [FoodController::class, 'store']);

Route::resource('photos', PhotoController::class);

Route::get('upload-image', [UploadImageController::class, 'index']);
Route::post('save', [UploadImageController::class, 'save']);
Route::get('show', [UploadImageController::class, 'show']);

// Route::middleware(['auth'])->prefix('foods')->name('foods.')->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

Route::resource('products', 'App\Http\Controllers\ProductController');