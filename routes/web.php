<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
 //
})->middleware('checkuser');
Route::post('/addnewbarang', [StockController::class, 'addNewBarang']);
Route::get('/stock', function () {
    $stocks = App\Models\Stock::all();
    return view('stock', ['stocks' => $stocks]);
});
Route::post('/stock/add', 'App\Http\Controllers\StockController@addNewBarang')->name('stock.add');
Route::get('/', [StockController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('barangs', [BarangController::class, 'index']);

