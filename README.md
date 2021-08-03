# Proyecto Breweries

###### Para desplegar el proyecto en un entorno local debe contar con un servidor apache tipo LAMP, WAMP, etc, debe contar con php v7.3 y tener instalado el modulo de composer v1.8.5 (Recomendado). Además, deberá contar con la instalación previa de NODE.js para instalar dependencias del frontend. El proyecto es una app con un desarrollo de un backend en Laravel y su frontend en Nuxt - Vue
### Instalación
* Clonar Proyecto en su directorio del servidor apache.
    ```
        git clone url-proyecto.git 
    ```
* Abrir una consola terminal (bash, powershel) y acceder al directorio /dev-api del proyecto, una vez allí ejecutar los siguientes comandos. https://getcomposer.org/doc/
    ```
        composer install
    ```
* Con la instalación culminada de composer, puede acceder a levantar el servicio de laravel con el siguiente comando. (Por defecto el servidor ejecuta la escucha por el puerto 3000, para otras configuraciones acceder a la documentación oficial de Laravel). https://laravel.com/
    ```
        php artisan serve
    ```
* Ahora vamos a instalar las dependencias de nuestro frontend, para ello vamos a nuestra terminal y accedemos al directorio /dev-frontend de nuestro proyecto. Una vez allí debemos instalar las dependencias de node.js con el siguiente comando. https://nodejs.org/es/
    ```
        npm install
    ```

* Una vez finalizado el paso anterior podemos proceder a levantar el proyecto de nuxt con el siguiente comando. El servidor por defecto de la aplicación ejecuta la escucha de la app en el puerto 3000. (Para otras configuraciones acceder a la documentación oficial de Nuxt.js). https://es.vuejs.org/
    ```
        npm run dev
    ```


#### Probar la aplicación online
* Esta aplicación se ecuentra disponible para hacer test de forma online. Para ello acceder al sugiente link: https://nameless-brushlands-43968.herokuapp.com/