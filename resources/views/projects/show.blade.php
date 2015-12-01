@extends('../master')


@section('content')
    <h2>{{ $project->name }}</h2>

    @if ( !$project->tasks->count() )
            Your project has no task.
    @else
        <ul>
            @foreach( $project->tasks as $task )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                    <a >{{ $task->name }}</a> <!--href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}"-->
                    (
                    {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}

                    {{ $task->description }}

                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
        {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}
    </p>
    @endsection