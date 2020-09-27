
@extends('layout')

@section('content')
    Tasks list
    <ul>
        @foreach($tasks as $task)
                    <li><a href="{{ route('tasks.show', ['task' => $task['id']])}}">#{{$task['id']}} - {{$task['name']}}</a></li>
        @endforeach
    </ul>
@endsection

@section('menu')
    Menu1
@endsection
