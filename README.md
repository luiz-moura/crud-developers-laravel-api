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
- [PHPUnit](https://phpunit.de/)

## Instalação e uso

1. Clone the project
```bash
  git clone https://github.com/luiz-moura/crud-developers-laravel-api.git
```

2. Create .env
```bash
  cp .env.example .env
```

3. Start the server in background
```bash
  docker-compose up -d
```

4. Create aliases for sail bash path
```bash
  alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

5. Generate key
```bash
  sail artisan key:generate
```

6. Install composer dependencies
```bash
  sail composer install
```

7. Run migrations
```bash
  sail artisan migrate --seed
```

## Configura o arquivo de variaveis ambiente .env
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

## Testes features
php artisan test

---

[![Linkedin Badge](https://img.shields.io/badge/-Luiz%20Moura-6633cc?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/luizhenmoura/)](https://www.linkedin.com/in/luizhenmoura/) 
[![Gmail Badge](https://img.shields.io/badge/-moura.oliveira.luiz@gmail.com-6633cc?style=flat-square&logo=Gmail&logoColor=white&link=mailto:moura.oliveira.luiz@gmail.com)](mailto:moura.oliveira.luiz@gmail.com)
