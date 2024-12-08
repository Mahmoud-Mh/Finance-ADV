@extends('layouts.app')

@section('content')
    <h1>Expenses</h1>
    <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-3">Add Expense</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Description</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>${{ $expense->amount }}</td>
                    <td>{{ $expense->date }}</td>
                    <td>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No expenses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Place the pagination inside the content section -->
    <div class="mt-3">
        {{ $expenses->links() }}
    </div>
@endsection
