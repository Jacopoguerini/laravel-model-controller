<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Model Controller</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>

    <body>

        <div>
            <h1>{{ $title }}</h1>
            <div class="container">
                @foreach ($movies as $movie)
                    <div class="movie">
                        <h2>{{ $movie->title }}</h2>
                        <h4>{{ $movie->original_title }}</h4>
                        <small>{{ $movie->nationality }}</small>
                        <h5>{{ $movie->date }}</h5>
                        <h6>{{ $movie->vote }}</h6>
                    </div>
                @endforeach  
            </div>
        </div>

    </body>
</html>
