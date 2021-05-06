<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url(mix('css/assets/login.css')) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>
</head>
<body>
<div class="ajax_response"></div>
<div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">

        <div id="login">
            <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">
                <h1>Login</h1>
                <p>
                    <label for="email">Seu email</label>
                    <input id="email" name="email" type="email"
                           placeholder="ex. growthcode@hotmail.com" value="wpjwpj09@gmail.com">
                </p>

                <p>
                    <label for="password">Sua senha</label>
                    <input id="password" name="password" type="password">
                </p>

                <input type="submit" value="Logar">

{{--                <h3><a href="/cadastro">Não tem cadastro ?</a></h3>--}}

            </form>
        </div>
    </div>
</div>

<script src="{{ url(mix('js/assets/jquery.js')) }}"></script>
<script src="{{ url(mix('js/assets/login.js')) }}"></script>
</body>
</html>
