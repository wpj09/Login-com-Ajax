<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadatros de Devs - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="<?= url('/admin/list'); ?>" class="navbar-brand">Cad<strong>Devs</strong></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/admin/list'); ?>" class="nav-link">Listar todos os cadastrados</a></li>
            <li class="nav-item"><a href="<?= url('/admin/create'); ?>" class="nav-link">Cadastrar novo pessoa</a></li>
        </ul>
    </div>
</nav>


@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
