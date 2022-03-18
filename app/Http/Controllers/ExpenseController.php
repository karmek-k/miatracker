<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewExpenseRequest;
use App\Models\Expense;
use Illuminate\View\View;

class ExpenseController extends Controller
{
    public function index(): View
    {
        $expenses = Expense::all()->sortBy('date', descending: true);

        return view('expenses.index', [
            'expenses' => $expenses,
        ]);
    }

    public function newExpense(): View
    {
        return view('expenses.new');
    }

    public function saveExpense(NewExpenseRequest $req) {
        $data = $req->validated();

        $expense = new Expense($data);
        $expense->money = Expense::convertMoney($data['zlote'], $data['grosze']);

        $expense->save();

        return redirect()->route('index');
    }
}
