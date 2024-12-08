@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Overview</h5>
            <p>Total Income: ${{ number_format($totalIncome, 2) }}</p>
            <p>Total Expense: ${{ number_format($totalExpense, 2) }}</p>
            <p>Remaining Balance: ${{ number_format($remainingBalance, 2) }}</p>
        </div>
    </div>
@endsection
