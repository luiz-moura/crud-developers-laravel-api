# API DEV
<p align="center">
<img  src="https://user-images.githubusercontent.com/57726726/165422400-7c65d5fb-a21c-4e9e-9281-041405dba904.png" width="25%" alt="API DEV">
</p>

## Tópicos 

[Tecnologias](#tecnologias)

[Instalação e uso](#instalação-e-uso)

## Tecnologias

Tecnologia utilizada no desenvolvimento do projeto:

- [Laravel](https://laravel.com/)

## Instalação e uso

```bash
# Abra um terminal e copie este repositório com o comando
git clone https://github.com/luiz-moura/developers-laravel-api
# ou use a opção de download.

# Entre na pasta web com 
cd developers-laravel-api

# Instale as dependências
composer install

# Configura o arquivo de variaveis ambiente .env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# Rode as migrations
php artisan migration

# Rode os seeds
php artisan db:seed

# Testes features
php artisan test

# Rode a aplicação
php artisan serve
```

Foi utilizado uma extensão do postgres para desconsiderar acentos nas consultas - unaccent, verifique se o banco possui a extensão, caso não tenha acesse o banco e execute o comando
```
CREATE EXTENSION unaccent;
```

---

Feito com :blue_heart: by [Luiz Moura](https://github.com/luiz-moura)

[![Linkedin Badge](https://img.shields.io/badge/-Luiz%20Moura-6633cc?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/luizhenmoura/)](https://www.linkedin.com/in/luizhenmoura/) 
[![Gmail Badge](https://img.shields.io/badge/-moura.oliveira.luiz@gmail.com-6633cc?style=flat-square&logo=Gmail&logoColor=white&link=mailto:moura.oliveira.luiz@gmail.com)](mailto:moura.oliveira.luiz@gmail.com)
