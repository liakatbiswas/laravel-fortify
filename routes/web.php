<?php

use App\Http\Controllers\AccountDeleteController;
use App\Http\Controllers\DashboardController;
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
})->name('home');

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::get('account-delete', [AccountDeleteController::class, 'index'])->name('account.delete');
Route::post('account-delete', [AccountDeleteController::class, 'destroy']);
