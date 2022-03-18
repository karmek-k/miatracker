<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExpenseController::class, 'index'])->name('index');
Route::get('/new', [ExpenseController::class, 'newExpense'])->name('expenses.new');
Route::post('/new', [ExpenseController::class, 'saveExpense'])->name('expenses.save');
