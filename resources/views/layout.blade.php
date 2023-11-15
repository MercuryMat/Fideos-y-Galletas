<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    @yield('head')
</head>

<body>
    <nav class="nav">
        <ul>
            <li><a href="/">INICIO</a></li>
            <li><a href="galletas">GALLETAS</a></li>
            <li><a href="fideos">FIDEOS</a></li>
            <li><a href="grafica">GRAFICA</a></li>
        </ul>
    </nav>
    @yield('content')

    @yield('scripts')
</body>

</html>