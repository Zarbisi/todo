<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>
    <!--<link rel="StyleSheet" href="style1.css" type="text/css" />-->
    {!! Html::style('styles/style1.css') !!}
    {!! Html::script('scripts/jquery.js') !!}
    {!! Html::script('scripts/script1.js') !!}

</head>
<body>

<!-- ATTENTION, j'ai viré ce bloc de code puisque l'erreur est quand même reprise notamment lors de l'authentification -->
<!--
@if (Session::has('message'))
    <div class="flash alert-info">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif
@if($errors->any())
        <div class="flash alert-danger">
                @foreach( $errors->all() as $error )
                        <p>{{ $error }}</p>
                @endforeach
        </div>
@endif
        -->
<div id="MainContainer">
    <div id="Cont1">
        @yield('content')

        <footer id="footer1">
            <p>Projet "OtterDo" <br />
            Palmeri Raphael & Vrionis Mathieu <br />
            2015 - 2016</p>
        </footer>
    </div>
</div>
</body>
</html>