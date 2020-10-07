<!-- extends permet de définir html de base va se servir le fichier ci-dessous -->
@extends('layout')

@section('content')
<h1>Task list</h1>

<a href="{{ route('tasks.create') }}">New task</a>

<table>
    <thead>
        <tr>
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Author</th>
            <th class="px-4 py-2">Views</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task['id'] }}</td>
                <td>{{ $task['name'] }}</td>
                <td><a href="{{ route('tasks.show', ['task' => $task['id']]) }}">Show</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
