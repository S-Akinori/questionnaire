<?php

use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/{view}', [FormController::class, 'show'])->name('form.show');
Route::post('/post', [FormController::class, 'getData'])->name('form.getData');
Route::post('/thankyou', [FormController::class, 'saveData'])->name('form.saveData');
