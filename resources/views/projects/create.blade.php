<!DOCTYPE html>
<html>
<head>
    <title></title>   
</head>
<body>
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
    {{ csrf_field() }}
        <div>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="Project Title">
        </div>
        <div>
            <textarea name="description" placeholder="Project description">{{ old('description') }}</textarea>
        </div>
        <div>
        <button type="submit">Create Project</button>
        </div>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>
</html>