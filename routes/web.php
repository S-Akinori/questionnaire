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
    // session()->invalidate();
    return view('home');
});

Route::get('/{view}', [FormController::class, 'show'])->name('form.show');
Route::post('/post', [FormController::class, 'getData'])->name('form.getData');

