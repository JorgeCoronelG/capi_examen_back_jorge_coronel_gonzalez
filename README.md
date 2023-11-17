<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Guía de instalación

1. Clonar el proyecto
2. Duplicar el archivo .env.example y renombrarlo a .env 
3. Ejecutar el comando:
```
composer install
```
4. Crear una base de datos local con el nombre:
```
capi_examen_back_jorge_coronel_gonzalez
``` 
5. Ejecutar el comando:
```
php artisan key:generate
```
6. Ejecutar el servidor de Laravel:
```
php artisan serve
```

## Endpoint listado de usuarios

Para mostrar la información de usuarios, se tiene realizar una petición **GET** a la url http://127.0.0.1:8000/api/lista-usuarios
