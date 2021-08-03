# Proyecto Breweries

###### Para desplegar el proyecto en un entorno local debe contar con un servidor apache con php v7.3 instalado, además de contar con la istalación del modulo de composer v1.8.5 (Recomendado). Además, deberá contar con la instalación previa de NODE.js para instalar dependencias del frontend. El proyecto es una app con un desarrollo de un backend en Laravel que sirve de capa de enlace para con una API externa de datos de cervecerías y su frontend en Nuxt - Vue
### Instalación
* Clonar Proyecto en su directorio del servidor apache.
    ```
        git clone https://github.com/miguelbritos91/test-dev.git 
    ```
* Abrir una consola terminal (bash, powershell) y acceder al directorio /dev-api del proyecto, una vez allí ejecutar el siguiente comando para instalar las dependencias con composer. Para mas informacion acceder a la documentación oficial de composer https://getcomposer.org/doc/
    ```
        composer install
    ```
* Con la instalación culminada de composer, puede acceder a levantar el servicio de laravel con el siguiente comando. ( Por defecto el servidor ejecuta la escucha en el puerto 8000 de nuestra maquina local http://localhost:8000, para otras configuraciones acceder a la documentación oficial de Laravel ). https://laravel.com/
    ```
        php artisan serve
    ```
* Ahora vamos a instalar las dependencias de nuestro frontend, para ello vamos a nuestra terminal y accedemos al directorio /dev-frontend de nuestro proyecto. Una vez allí debemos instalar las dependencias de node.js con el siguiente comando. Para más información consulte la documentación oficial de node: https://nodejs.org/es/
    ```
        npm install
    ```

* Una vez finalizado el paso anterior podemos proceder a levantar el proyecto de nuxt con el siguiente comando. El servidor por defecto de la aplicación ejecuta la escucha de la app en el puerto 3000. Para otras configuraciones acceder a la documentación oficial de Nuxt.js: https://es.vuejs.org/
    ```
        npm run dev
    ```


#### Probar la app de forma online
* Esta aplicación se ecuentra disponible para hacer test de forma online. Para ello acceder al sugiente link: https://nameless-brushlands-43968.herokuapp.com/