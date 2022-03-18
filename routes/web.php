<?php

use App\Http\Requests\NewExpenseRequest;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $expenseCosts = Expense::all(['money'])->sum('money') / 100.0;

    return view('expenses.index', [
        'expenses' => $expenseCosts,
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
