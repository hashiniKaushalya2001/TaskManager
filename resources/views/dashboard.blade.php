@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold">Total Tasks</h2>
            <p class="text-3xl font-bold text-blue-500 mt-2">{{ $totalTasks }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold">Pending Tasks</h2>
            <p class="text-3xl font-bold text-yellow-500 mt-2">{{ $pendingTasks }}</p>
        </div>
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <h2 class="text-xl font-semibold">Completed Tasks</h2>
            <p class="text-3xl font-bold text-green-500 mt-2">{{ $completedTasks }}</p>
        </div>
    </div>

    <!-- Latest Tasks Table -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Latest Tasks</h2>
        @if($tasks->count())
        <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td class="border px-4 py-2">{{ $task->title }}</td>
                    <td class="border px-4 py-2 capitalize">{{ $task->status }}</td>
                    <td class="border px-4 py-2">{{ $task->created_at->format('d M Y, h:i A') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-gray-500">No tasks available.</p>
        @endif
    </div>
</div>
@endsection
