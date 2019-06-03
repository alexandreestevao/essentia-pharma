
## Projeto Cadastro de Clientes

Sistema de Cadastro de Clientes com tela de visualização, edição e exclusão de registros. O desenvolvimento foi realizado na plataforma Linux (ubuntu 18.04).

## Laravel 5.8 Server / Requisitos

            PHP 7>=
            MySQL
            Composer
            Bootstrap 4

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

## Banco de dados (MySQL)

Abra o banco de dados MySQL e crie o database (essentia).

Obs.: Criar com a collation:

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

Obs.: Se necessário, duplique o arquivo '.env.example' para criar o seu arquivo '.env'.

config/database.php

            'driver' => 'mysql'
            'host' => env('DB_HOST', '127.0.0.1')',
            'port' => env('DB_PORT', '3306')',
            'database' => env('DB_DATABASE', 'essentia')',
            'username' => env('DB_USERNAME', 'root')',
            'password' => env('DB_PASSWORD', '')',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',

Execute o comando para a geração da tabela no banco de dados:

$ php artisan migrate

Confira no database 'essentia' se a tabela foi criada.

## Aplicação

Agora vamos executar a aplicação, mas antes, precisamos gerar a chave do Laravel e depois ativar o servidor:

$ php artisan key:generate

$ php artisan serve

No browser, acesse o endereço http://127.0.0.1:8000/ para abrir a aplicação.


