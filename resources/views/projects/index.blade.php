@extends('../master')



@section('content')

    <div class="Logo">

    </div>
    <div class="ProjectsExplorer">
    <h1 style="color: #c4dbea">Projets</h1>

    @if ( !$projects->count())
            <p class="NoItemsMsg">Vous n'avez pas encore de projet ! :'( </p>
    @else

        <ul>
            @foreach( $projects as $project )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    <a href="{{ route('projects.show', $project->slug) }}" class="Box1">{{ $project->name }}</a>
                    <br/>
                    (
                    {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!},
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>

    @endif
    <!-- J'ai remplacé le p par un bouton plus propre laul
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>-->
        <input type="button" class="LoginButton" id="CreateBID" onclick="location.href='{{ route('projects.create') }}';" value="Nouveau Projet" />

    </div>
@endsection