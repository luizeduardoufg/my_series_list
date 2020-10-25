<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{ URL::asset('static/css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('static/css/alerts.css') }}" />
</head>

<body>
    <nav class="nav_bar">
        <ul>
            <li><a href="/series" class="">Página inicial</a></li>
        </ul>
    </nav>
    <div class="container clear">
        <header>
            @yield('header')
        </header>
        <main>
            @yield('main')
        </main>
        <!-- <footer>
        <p>MySeriesList.exp is a property of MySeriesList Co.,Ltd. ©2020 All Rights Reserved.</p>
    </footer> -->
    </div>
</body>

</html>