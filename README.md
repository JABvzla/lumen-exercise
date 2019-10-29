# App Service


Servicio de cotización 




Realizado con lumen 6.x para más detalles ir a la documentación oficial.
https://lumen.laravel.com/docs/6.x




## Indice
-   [Requisitos](#requisitos)
-   [Instalación](#instalación)
-   [Scripts](#scripts)


## Requisitos
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


- Probar formateo de código sin formatearlo (útil para CLI):
```
docker exec -it lumen-exercise-1 composer lint
```
