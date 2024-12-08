@extends('layouts.app')

@section('content')
    <h1>Incomes</h1>
    <a href="{{ route('incomes.create') }}" class="btn btn-primary mb-3">Add Income</a>
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
            @foreach ($incomes as $income)
                <tr>
                    <td>{{ $income->description }}</td>
                    <td>${{ $income->amount }}</td>
                    <td>{{ $income->date }}</td>
                    <td>
                        <a href="{{ route('incomes.edit', $income->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('incomes.destroy', $income->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $incomes->links() }}
    </div>
@endsection
