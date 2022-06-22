<?php

use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/users/import', [UsersController::class, 'import'])->name('users.import');
Route::get('/users/export', [UsersController::class, 'export'])->name('users.export');