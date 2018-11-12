<!DOCTYPE html>
<html>
<head>
    <title></title>   
</head>
<body>
    <h1>Projects</h1>
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="/projects/{{ $project->id }}">
                        {{ $project->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div><a href="/">Home</a></div>
        <div><a href="projects/create">Create New Project</a></div>
</body>
</html>