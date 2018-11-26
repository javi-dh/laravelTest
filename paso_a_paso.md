# Paso a paso para Laravel

**1. Instalación de Composer**

Lo primero para trabajar con Laravel es instalar `Composer` ([ver instrucciones](https://getcomposer.org/download/)).

**2. Creación del proyecto**

Una vez con `Composer` instalado globalmente, crearemos el proyecto de Laravel así:

```
composer create-project laravel/laravel nombre_proyecto
```

El comando anterior creará un proyecto de Laravel dentro de la carpeta `nombre_proyecto`.

**3. Archivo `.env` y generación de token**

En ocasiones la instalación no genera el token necesario para que la aplicación corra y tampoco el archivo `.env`:

- Por ello tendremos que seguir estos pasos (estando dentro de la carpeta del proyecto):
	* Abrir el archivo `.env.example` y renombrarlo `.env`
	* Desde la consola generar la key así: `php artisan key:generate`

**4. Levantando el server**

Una vez completados los pasos anteriores vamos a poder levantar el servidor, para ello (estando dentro de la carpeta del proyecto) vamos a escribir el sigiuente comando:

```
php artisan serve
```

Lo cual levantará la aplicación en `http://localhost:8000`. Si por algún motivo la aplicación no anda. Podemos elegir el puerto en donde deseamos levantar la aplicación, pasando al comando anterior el helper `--port=3030`. Con esto lograremos que la aplicación corra en `http://localhost:3030`.

**5. Creando rutas**

Dentro del archivo `routes\web.php` vamos a generar las rutas de la siguiente manera:

```php
Route::get('/route', 'Controller@method');
```

- `/route`: ruta exacta que será escrita en la url del browser.
- `Controller`: controlador a donde apunta dicha ruta.
- `@method`: método del controlador que usa la ruta.

> Tener en cuenta que Laravel usa varios Métodos HTTP para las rutas: *get*, *post*, *put*, *patch* y *delete*.

**6. Creando controladores**

Para crear controladores vamos a escribir en consola lo siguiente:

```
php artisan make:controller EntitiesController
```

Una vez esto, el archivo creado estará disponible en: `app\http\controllers\`.

Al seguir la convención para el nombre del controlador, debemos nombrar la entidad en plural y su inicial en mayúscula agregando la palabra *Controller*. Ej: `MoviesController`.

> Si queremos que el controller venga con la plantilla de métodos más usados podemos crear el mismo con el helper **-r**. Así: `php artisan make:controller MoviesController -r`.

**7. Creando modelos**

Para crear modelos vamos a escribir en consola lo siguiente:

```
php artisan make:model Entity
```

Una vez esto, el archivo creado estará disponible en: `app\`

Al seguir la convención para el nombre del modelo, debemos nombrar la entidad en singular y su inicial en mayúscula.

> Todos los modelos vienen vacíos (solo con la estructura de clase / herencia). Todo lo que deseemos lo tenemos que generar nosotros mismos.

Lo más común dentro de un modelo será lo siguiente:

```php
// Si el nombre de tabla no sigue la convención de Laravel
protected $table = 'table_name';

// Definimos las columnas que pueden ser llenadas
protected $fillable = ['column1', 'column2'];

// Definimos las columnas protegidas
protected $guarded = ['columnX'];
```

**8. Creando vistas**

Las vistas en Laravel se crean como un archivo cualquiera, ya que su contenido es un `HTML` potenciado. Las vistas se encuentran el `resources\views\`. Y las mismas tienen la extensión `blade.php`. Para ver más acerca de vistas visitar: [Blade Templates](https://laravel.com/docs/5.7/blade).

---

La documentación oficial de Laravel la pueden encontrar en [http://www.laravel.com](https://laravel.com/).
