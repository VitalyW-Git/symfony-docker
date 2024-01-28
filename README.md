### Начальные условия ###
На компьютере должен быть установлен docker (желательно, но не обязательно Docker Desktop)  https://docs.docker.com/get-docker/
и docker compose https://docs.docker.com/compose/install/


После чего запускаем проект
```
docker compose up -d --build
```
запуститься три контейнера - php-fpm, nginx, postgresql


## Начинаем проект Symfony skeleton ##
1. заходим в контейнер

```
docker compose exec php-skeleton bash
```
устанавливаем Symfony
```
composer install
```

2. для unittest

```
скопировать phpunit.xml.dist в phpunit.xml
```

3. make для генерации

[composer require --dev symfony/maker-bundle](https://symfony.com/bundles/SymfonyMakerBundle/current/index.html)
```
 make:command            Creates a new console command class
 make:controller         Creates a new controller class
 make:entity             Creates a new Doctrine entity class

 [...]

 make:validator          Creates a new validator and constraint class
 make:voter              Creates a new security voter class

```
