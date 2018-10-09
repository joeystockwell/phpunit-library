# phpunit-library

A personal library for PHPUnit examples

## This project uses docker

- Clone this project
- Go to project folder
- Make sure you are logged into docker cli (`docker login` in bash)
- Run `docker-compose up`

## Accessing your container

- Go to project folder
- Run `docker-compose exec php-fpm bash`

## Running Tests

- Use the above section to access your container
- Run `cd /application/public`
- Run `composer install`
- Run `./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests`

## Code Root

The code is located in `public`

## Goal of project

To learn PHPUnit principles and keep a history of personal examples. Feel free to create a branch and create your own.

## Resources

- https://phpunit.de/getting-started/phpunit-7.html
- https://hub.docker.com/
- https://docs.docker.com/
- https://phpdocker.io/generator
- https://any-api.com/