Tasks list

<ul>
    @foreach($tasks as $task)
                <li><a href="https://test">#{{$task['id']}} - {{$task['name']}}</a></li>
    @endforeach
</ul>
