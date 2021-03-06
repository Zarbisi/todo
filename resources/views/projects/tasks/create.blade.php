@extends('../master')

@section('content')

    <h2>Create Task for Project "{{ $project->name }}"</h2>

    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
    @include('projects/tasks/partials/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection