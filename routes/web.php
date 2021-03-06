<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
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

Route::get('uri:/', function () {
    return view('Welcome');
});

Route::get('uri/home', function() {
   return view(view: 'home');
})->middleware(['auth','verified']);

Route::prefix(prefix: 'admin')->name(value: 'admin.')->group(function () {
Route::resource(name: '/admin/users', controller: UserController::class);
});