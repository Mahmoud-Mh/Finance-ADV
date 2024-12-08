<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::paginate(10); // Show 10 records per page
        return view('expenses.index', compact('expenses'));
    }
    

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'category_id' => 'nullable|exists:categories,id', // Optional category validation
        ]);

        Expense::create($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense added successfully!');
    }

    public function edit($id)
    {
        try {
            $expense = Expense::findOrFail($id);
            return view('expenses.edit', compact('expense'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('expenses.index')->with('error', 'Expense not found!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'category_id' => 'nullable|exists:categories,id', // Optional category validation
        ]);

        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

    public function destroy($id)
    {
        try {
            $expense = Expense::findOrFail($id);
            $expense->delete();
            return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('expenses.index')->with('error', 'Expense not found!');
        }
    }
}
