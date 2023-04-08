<?php


 
use App\Http\Controllers\BarcodeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Th
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/barcode/{id}', 'BarcodeController@generateBarcode');

// Route::get('/barcode/{id}',[BarcodeController::class,'generateBarcode'])->name('barcode');
Route::get('/barcode/{id}',[BarcodeController::class,'generateBarcode']);