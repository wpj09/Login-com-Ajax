<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

@if (!empty($users))
    @foreach ($users as $user)
        <h1>Seja bem vindo {{$user->name}} você esta logado!</h1>
    @endforeach
@endif

</body>
</html>
