
Laravel 5.8 + MySQL

## Projeto Lista de Clientes

Sistema de cadastro de Clientes com tela de visualização, edição e exclusão de registros. O desenvolvimento foi realizado na plataforma Linux (ubuntu 18.04) e seu back-end foi o PHP 7.2.17 + front-end Laravel 5.8 e banco de dados MySQL.

## Procedimento de Instalação (Para Linux)

Git Clone

Acesse sua pasta local de projetos:

$ cd myprojects

Depois, copie a url de clonagem do repositório do projeto no GitHub e digite o comando:

$ git clone https://github.com/alexandreestevao/essentia-pharma.git

Após, acesse a pasta do projeto clonado e execute do comando do composer:

$ cd essentia-pharma

$ composer install

Após descompactar e atualizar o projeto com suas dependências, abra o mesmo na IDE de sua preferência.

## Configuração do banco de dados (MySQL)

Abra o banco de dados MySQL e crie o database (essentia).

Obs.: criar com a collation:

            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',

Na raiz do projeto, configure os arquivos:

.env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=essentia
DB_USERNAME=root
DB_PASSWORD=

config/database.php

'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'essentia'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]),
        ],

Depois, execute o comando para a geração da(s) tabela(s) no banco de dados:

$ php artisan migrate

Após, confira no database 'essentia' se a tabela foi criada.

## Aplicação

Agora vamos executar a aplicação, mas antes, precisamos gerar a chave do Laravel e depois executar o servidor:

$ php artisan key:generate

$ php artisan serve

No browser, acesse o endereço http://127.0.0.1:8000/ para abrir a aplicação.

## License

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
