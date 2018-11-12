@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>


    <div>
        {{ $project->description }}
        <p><a href="/projects/{{ $project->id }}/edit">Edit</a></p>
    </div>

    @if ($project->tasks->count())
        <div>
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </div>
    @endif

<div><a href="/projects">Projects</a></div>
@endsection
