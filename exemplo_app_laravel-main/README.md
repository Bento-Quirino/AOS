# Projeto Exemplo

[![Run in Insomnia}](https://insomnia.rest/images/run.svg)](https://insomnia.rest/run/?label=API%20Heimdall&uri=https%3A%2F%2Fgitlab.com%2Fzionstech%2Fheimdall_web%2F-%2Fraw%2Fdevelop%2FInsomnia_2022-04-08.json)


## setup process

```
cp .env.example .env              # Altere o env a sua necessidade

docker-compose exec laravel composer update

docker-compose exec laravel php artisan optimize:clear

docker-compose exec laravel php artisan key:generate

docker-compose exec laravel php artisan jwt:secret

docker-compose exec laravel php artisan migrate

docker-compose exec laravel php artisan migrate --seed

docker-compose exec laravel php artisan migrate:refresh --seed
```

## run project

```
DB_PORT=3306
DB_DATABASE=example
DB_USERNAME=root
DB_PASSWORD=zions

docker-compose up
```
