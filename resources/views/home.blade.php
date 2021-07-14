<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            .movie {

            }
        </style>
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
