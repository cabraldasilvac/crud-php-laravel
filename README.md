<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<details>
<summary><h3>About Laravel</h3></summary>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
</details>

<hr>
# Projeto CRUD com Laravel

### Este projeto é um CRUD com PHP Laravel

Usando uma ferramenta escrita em Python para criar uma Base de Dados de users FAKE - Você pode acrescentar ou remover campos da DB.
Ela cria um arquivo users.csv que pode ser importado para o Banco de Dados.
[FAKE Users](https://github.com/cabraldasilvac/crud-php-laravel/blob/develop/public/assets/files_py/users.csv)

```Python
fakerUsers.py
```

usando o comando ➜ php artisan make:controller --resource
o Laravel já cria todas as rotas do CRUD.

```PHP
php artisan make:controller --resource      
```

No meu caso usei o MySQLWorkbench para trabalhar com o DB

[Download » MySQLWorkbench](https://www.mysql.com/downloads/)

Para usar o Projeto:

1 - Instalar o PHP Artisan
[Instalar » PHP Laravel](https://laravel.com/docs/11.x#installing-php)

2 - Instalar o Composer

```COMPOSER
composer global require laravel/installer
```

3 - Baixar o projeto do GitHub
[Projeto » GitHub clone](https://github.com/cabraldasilvac/crud-php-laravel)

4 - Mudar as configurações do .env de acordo com as configurações do seu sistema.

4.1 - Para rodar o projeto

4.2 Entrar no diretorio do projeto e digitar no CMD o comando abaixo.

```PHP
php artisan serve
```

5 - Baixar o Banco de Dados users. Se preferir pode baixar o cod. em Python e rodar na sua máquina que ele vai gerar o arquivo users.csv

[Arquivo » Python](https://github.com/cabraldasilvac/scripts.sh/blob/main/fakerUsers.py)

[DB » users](https://github.com/cabraldasilvac/scripts.sh/blob/main/users.csv)
