<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route(Auth::check() ? 'expenses.index' : 'auth.login');
})->name('index');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'validateLogin'])->name('auth.validate');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/new', [ExpenseController::class, 'newExpense'])->name('expenses.new');
Route::post('/expenses/new', [ExpenseController::class, 'saveExpense'])->name('expenses.save');
