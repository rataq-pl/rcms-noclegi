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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('register', function(){
    return redirect('login');
})->name('register');
Auth::routes(['register' => false]);


Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('calendars', App\Http\Controllers\CalendarController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('settings', App\Http\Controllers\SettingController::class);
Route::get('webbuilder', [App\Http\Controllers\WebbuilderController::class, 'index'])->name('websitebuilder');
Route::resource('builders', App\Http\Controllers\BuilderController::class);