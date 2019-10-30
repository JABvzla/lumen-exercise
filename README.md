# Prueba Tecnica Jr - PHP

Realizado con lumen 6.x para más detalles ir a la documentación oficial.
https://lumen.laravel.com/docs/6.x




## Indice
-   [Ejercicio](#ejercicio)
-   [Requisitos de instalación](#requisitos-de-instalación)
-   [Instalación](#instalación)
-   [Scripts](#scripts)

## Ejercicio
Dada una matriz rectangular de enteros, su tarea es devolver la suma total de todos los valores que no esten debajo de un 0.

Ejemplos:

![picture](/doc/example.png)

## Requisitos de instalación
-   Docker


## Instalación


- Crear Imagen:
```
docker build . -t lumen-exercise
```
- Crear y levantar el contenedor:
```
docker run -d -p 80:80  -v $(pwd)/app:/usr/src/app --name lumen-exercise-1 lumen-exercise
```
- Instalar dependencias de composer:
```
docker exec -it lumen-exercise-1 composer install
```


*Listo!, el servicio está funcionando en tu `localhost`* 


## Scripts


- Formatear código:
```
docker exec -it lumen-exercise-1 composer lint-fix
```

- Ejecutar tests:
```
docker exec -it lumen-exercise-1 vendor/bin/phpunit
```
