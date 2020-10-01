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
    <ul>
        @foreach($tasks as $task)
                    <li><a href="{{ route('tasks.show', ['task' => $task['id']])}}">#{{$task['id']}} - {{$task['name']}}</a></li>
        @endforeach
    </ul>
@endsection

@section('menu')
    Menu1
@endsection
