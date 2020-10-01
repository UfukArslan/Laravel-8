@extends('layout')

@section('content')

<h1>New task</h1>

<form method= "POST" action="{{route('tasks.store'}}">

    <!-- c'est une sécurité laravel dans un cas de post(cela va générer un token) -->
    @csrf

    <label>Task name</label>
    <input type="text" id="name"/>
    <button type='submit'>Save new task</button>
    <a href="{{route('tasks.index'}}">Return to tasl list</a>
</form>

@endsection
