@extends('../master')

@section('content')
    <h2>
        {!! ! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
    </h2>

    {{ $task->description }}

    <a href=""></a>
@endsection