<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::paginate(10); // Paginate results
        return view('incomes.index', compact('incomes'));
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Income::create($request->all());

        return redirect()->route('incomes.index')->with('success', 'Income added successfully!');
    }

    public function edit($id)
    {
        try {
            $income = Income::findOrFail($id);
            return view('incomes.edit', compact('income'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('incomes.index')->with('error', 'Income not found!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $income = Income::findOrFail($id);
        $income->update($request->all());

        return redirect()->route('incomes.index')->with('success', 'Income updated successfully!');
    }

    public function destroy($id)
    {
        try {
            $income = Income::findOrFail($id);
            $income->delete();
            return redirect()->route('incomes.index')->with('success', 'Income deleted successfully!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('incomes.index')->with('error', 'Income not found!');
        }
    }
}
