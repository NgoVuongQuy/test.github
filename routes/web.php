<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/payment', [\App\Http\Controllers\Payment::class, "showData"]);
Route::get('/Interface', [UserController::class, "showData"]);
Route::get('user/{id}', function ($id) {
    return User::find($id);
});
