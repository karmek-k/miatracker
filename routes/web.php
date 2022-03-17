<?php

use App\Http\Requests\NewExpenseRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('expenses.index', [
        'expenses' => 1234.50,
    ]);
})->name('index');

Route::get('/new', function () {
    return view('expenses.new');
})->name('expenses.new');

Route::post('/new', function (NewExpenseRequest $req) {
    $data = $req->validated();

    dd($data);
})->name('expenses.save');
