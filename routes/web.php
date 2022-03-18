<?php

use App\Http\Requests\NewExpenseRequest;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $expenses = Expense::all()->sortBy('date', descending: true);

    return view('expenses.index', [
        'expenses' => $expenses,
    ]);
})->name('index');

Route::get('/new', function () {
    return view('expenses.new');
})->name('expenses.new');

Route::post('/new', function (NewExpenseRequest $req) {
    $data = $req->validated();

    $expense = new Expense($data);
    $expense->money = Expense::convertMoney($data['zlote'], $data['grosze']);

    $expense->save();

    return redirect()->route('index');
})->name('expenses.save');
