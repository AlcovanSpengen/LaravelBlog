@extends('layout')

@section('content')
    <h1>Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
    {{ method_field("PATCH") }}
    {{ csrf_field() }}
    <div>
        <label>Title</label>
        <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" placeholder="description">{{ $project->description }}</textarea>
    </div>
    <div>
        <button type="submit">Update Project</button>
    </div>
</form>
<form method="POST" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf
    
    <div>
        <button type="submit">Delete Project</button>
    </div>
</form>
<form action="/projects/{{ $project->id }}">
    <button type="submit">Cancel</button>
</form>

@endsection