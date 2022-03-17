<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('expenses.index', [
        'expenses' => 1234.50,
    ]);
})->name('index');

Route::get('/new', function () {
    return view('expenses.new');
})->name('expenses.new');

Route::post('/new', function (Request $req) {
    $zlote = $req->input('zlote');
    $grosze = $req->input('grosze');
    dd([$zlote, $grosze]);
})->name('expenses.save');
