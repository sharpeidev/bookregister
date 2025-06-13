# Cadastro de livros

Trata-se de um projeto teste cujo objetivo foi desenvolver um cadastro de livros.

### Tecnologias usadas

<ul>
    <li>Docker 28.2.2</li>
    <li>Laravel Framework 11.45.1</li>
    <li>PHP 8.3.21</li>
    <li>MySQL 8.0</li>
</ul>

### Instruções

É necessário ter o Docker e o Docker Compose instalados.
<br>
Instruções para o Docker
<a href="https://docs.docker.com/engine/install/" target="_blank">aqui</a> e para
o Docker Compose
<a href="https://docs.docker.com/compose/install/" targe="_blank">aqui</a>.


<br>
Clone o repositório do projeto

```sh
git clone git@github.com:sharpeidev/bookregister.git
```

```sh
cd bookregister
```

Cria o .env
```sh
cp api/.env.example api/.env
```

Inicializa os containers Docker
```sh
docker compose up -d
```

Instala as dependências do Composer
```sh
docker exec -it book-register-app composer install
```

Executa as migrations
```sh
docker exec -it book-register-app php artisan migrate
```

Popula o banco de dados executando os seeds
```sh
docker exec -it book-register-app php artisan db:seed
```

Para acessar a aplicação
```sh
http://localhost:8080
```
