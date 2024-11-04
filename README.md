# Proyecto de Registro de Alumnos

Este proyecto es una aplicación básica desarrollada con Laravel para registrar y listar alumnos. Los usuarios pueden agregar nuevos registros de alumnos a través de un formulario y visualizar los datos almacenados en una tabla.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes componentes:

- PHP 8.1 o superior
- Composer
- MySQL
- Opcional: Git (para clonar el repositorio)

## Instrucciones de Instalación

1. **Clonar el repositorio :

     git clone <URL-del-repositorio>
     cd registro-alumnos


2. **Instalar las dependencias del proyecto** usando Composer:
   composer install

3. **Configurar la BD** usando MySQL:
   CREATE DATABASE registro_alumnos;
   cp .env.example .env
   Configurar .env para conectar con tu BD
   Ejecutar migraciones (php artisan migrate)

4. **Ejecutar proyecto** :
   php artisan serve
  