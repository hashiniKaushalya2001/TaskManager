@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
