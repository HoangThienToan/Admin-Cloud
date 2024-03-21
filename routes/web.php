<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FillesTableController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    //Route::post('/', 'FillesTableController@loadData')->name('load_data_files');
    Route::post('/table', [FillesTableController::class, 'loadData'])->name('load_data_files');
});