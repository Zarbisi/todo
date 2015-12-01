@extends('../master')


@section('content')

    <div class="Logo">

    </div>


    <div class="LoginWindow">
        <h1>Bienvenue !</h1>
        <input type="button" class="LoginButton" id="LoginBID" onclick="location.href='{{ route('login') }}';" value="Login" />
        <br />
        <!--<p><a href="{{ route('login') }}">Login</a></p>-->
        <input type="button" class="LoginButton" id="SigninBID" onclick="location.href='{{ route ('creation') }}';" value="Création du compte" />
        <!--<p><a href="{{ route ('creation') }}">Création de compte</a></p>-->
        <p>Connectez-vous ou créez un compte !</p>
    </div>
@endsection