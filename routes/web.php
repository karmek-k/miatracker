<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('expenses.index', [
        'expenses' => 1234.50,
    ]);
})->name('index');

Route::get('/new', function () {
    return view('expenses.new');
})->name('expenses.new');
