## Synopsis

Prueba de programación con ejemplo de sistema de canjeamiento de códigos promocionales.

## Installation

1 - crear una base de datos local con nombre: promotioncodes
    CREATE DATABASE promotioncodes;

2 - Instale composer: https://getcomposer.org/download/
    CASO UBUNTU: apt install composer

3 - clonar repositorio;

4 - Mover a la carpeta del projecto y instalar dependencias con Composer
    CASO INSTALADO GLOBAL: composer install
    CASO INSTALADO LOCAL: php composer.phar install
    
3 - Substituir las informaciones en el archivo .env de acuerdo con las de tu base de datos:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=promotioncodes
    DB_USERNAME=dbusuario
    DB_PASSWORD=dbcontrasena

4 - Crear las tablas en la base de datos
    php artisan migrate

5 - Puesta en marcha
    php artisan serve


## Tests


