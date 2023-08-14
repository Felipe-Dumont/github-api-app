<h1 align="center">Consulta de GITHUB pelo Nome - Grupo Acert </h1>

<div align="center">
   Teste 2 do Teste para desenvolvedor Front-end/back PHP do Grupo Acert.
</div>

<!-- TABLE OF CONTENTS -->

## Table of Contents

- [Table of Contents](#table-of-contents)
- [Overview](#overview)
  - [Built With](#built-with)
- [Features](#features)
- [How To Use](#how-to-use)

<!-- OVERVIEW -->

## Overview

![screenshot](https://github.com/Felipe-Dumont/github-api-app/blob/main/public/img/overview2.gif)

- Você pode encontrar uma demo [aqui](https://felipe-dumont.github.io/github-api-app/).
- Neste projeto tive a experiência de trabalhar com Laravel. Utilizando seus recursos nativos como Blade para trabalhar com templetes HTML, Web Routes para registrar as rotas da aplicação e testes de unidade do PHPUnit para criar uma consulta de dados do GITHUB pelo nome de usuario.
- Aprendi a trabalhar com a API do GITHUB e utilizar seus dados para criar uma aplicação de consulta visual.

### Built With

- [Laravel](https://laravel.com/)

## Features

Esse projeto foi criado com o objetivo de concluir um desafio. O desafio era Consumir a api do github, possibilitar consultar por nome de usuário e criar uma view simples para exibir os dados do usuário consultado.

Foi criado uma tela inicial que contem um formulario para consultar pelo nome de usuario. Na tela seguinte são informados os dados do usuario que foi retornado da consulta da api do GITHUB. 
Tambem foi desenvolvida uma outra tela, que mostra o resultado da consulta dos dados dos projetos publicos do usuario em questão.

## How To Use

Para clonar e executar este aplicativo, você precisará de [Git](https://git-scm.com) instalado em seu computador. Na sua linha de comando:

```bash
# Clone this repository
$ git clone https://github.com/Felipe-Dumont/github-api-app.git

# install dependencies
$ composer install --no-scripts
# and
$ npm install 

# Copy the .env.example file
$ cp .env.example .env

# Create a new key for the application
php artisan key:generate

# Run the app
$ php artisan serve
# and
$ npm run dev
```
