<h1>
    Detail of task #{{ $task['id' ]}}
</h1>
<p>
 <b>Name : </b>{{ $task['id' ]}}
</p>
<p><a href="{{ route('tasks.index') }}">Back to list</a></p>

@section('head')
    <script></script>
@endsection
