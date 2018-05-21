## Synopsis

Prueba de programación con ejemplo de sistema de canjeamiento de códigos promocionales.

## Installation

1 - clonar repositorio;

2 - Instalar dependencias con Composer
    composer install

3 - Substituir las informaciones en el archivo .env de acuerdo con las de tu base de datos:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombrebasededatos
    DB_USERNAME=nombreusuario
    DB_PASSWORD=contrasena

4 - Crear las tablas en la base de datos
    php artisan migrate

5 - Puesta en marcha
    php artisan serve


## Tests


