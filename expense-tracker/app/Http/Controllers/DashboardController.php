<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Expense;

class DashboardController extends Controller
{
    public function index()
    {
        $totalIncome = Income::sum('amount');
        $totalExpense = Expense::sum('amount');
        $remainingBalance = $totalIncome - $totalExpense;

        return view('dashboard.index', compact('totalIncome', 'totalExpense', 'remainingBalance'));
    }
}
