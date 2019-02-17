<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    
        {!! Html::style('assets/css/bootstrap.min.css') !!}
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light bg-dark">
            <span class="navbar-brand mb-0 h1 text-white">VECINDA DEL CHAVO 8</span>
        </nav>
        <br>
        @yield('content')
        <!-- Scripts -->
        {!! Html::script('assets/js/bootstrap.min.js') !!}
    </body>
</html>