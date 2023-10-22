<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="logoV2.png" type="image/x-icon">
    <title>@yield('titulo')</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>
