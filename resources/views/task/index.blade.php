<!-- extends permet de définir html de base va se servir le fichier ci-dessous -->
@extends('layout')

@section('content')
   <h1>Tasks list</h1>
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
                        <td><a href="{{ route('tasks.show', ['task' => $task['id']])}}">Show</a></td>
                    </tr>

        @endforeach

    </tbody>
@endsection

@section('menu')
    Menu1
@endsection
