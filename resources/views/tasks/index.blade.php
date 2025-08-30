@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Tasks</h1>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ ucfirst($task->status) }}</td>
                <td>{{ $task->created_at->format('d M Y') }}</td>
                <td>
                    @can('update', $task)
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    @endcan

                    @can('delete', $task)
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
