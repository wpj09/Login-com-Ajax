# Template de login com Laravel/Ajax

## Pré requisito do projeto:

- Ter instalado o **composer**

- Ter Node.js instalado

- Ter xampp/wamp instalados

# ***Parametrização do Projeto***

- Ao baixar fazer o seguintes comandos e seguintes passos:

1° Abra o terminal na raiz do projeto e:

```sh
composer dum-autoload
```

2° Para migrar o js/css para a pasta correta

```sh
npm run production
```

3° Copiar a pasta

```sh
.env.example
```
renomea-la para

```sh
.env
```

Prametrizar de acordo com o seu banco de dados

- Criar seu banco de dados antes de rodar comandos seguintes

4° Rodar as migrations e as Seeders

```sh
php artisan migrate
```

Depois

```sh
php artisan db:seed
```

