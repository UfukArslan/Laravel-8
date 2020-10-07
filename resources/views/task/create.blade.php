<!-- extends permet de définir html de base va se servir le fichier ci-dessous -->
@extends('layout')

@section('content')
<h1>New task</h1>

<form methode="POST" action="{{ route('tasks.store') }} ">
    <label>Task name</label>
    <input type="text" id='name'/>
    <button type="submit">Save new task</button>
    <a href="{{ route('tasks.index') }}">Return to task list</a>
</form>


@endsection