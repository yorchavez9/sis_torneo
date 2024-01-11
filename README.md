
# SISTEMA DE TORNEOS

Sistema para la gestión de torneos desarrollado con Laravel y Livewire


## Feartures

- Agregar productos a la venta, a traves de codigo de barras
- Modulo de Usuarios
- Modulo de Equipos
- Modulo Sorteo
- Modulo Fixture
- Modulo Jugador
- Modulo Partido


## Instalación

Puedes seguir estos pasos para la instalación:

* Clonar desde github (usar github desktop)
```bash
  git clone https://github.com/yorchavez9/sis_torneo.git
```
* Vaya a la carpeta del proyecto
```bash
  cd sis_torneo
```
* Instalar dependencias con composer desde consola
```bash
  composer install
```

* Instalar dependencias node
```bash
  npm install
```

## Variables de entorno

Para ejecutar este proyecto, Necesitarás añadir las siguientes variables de entorno en **.env file**

`DB_DATABASE=your-database`

`DB_USERNAME=your-username`

`DB_PASSWORD=your-password`

`APP_KEY=base64:APP_KEY` (**)

** para generar el APP_KEY, se necesita ejecutar el siguiente comando:

```bash
  php artisan key:generate
```
## Ejecutar Localmente

Ejecutar las migraciones y datos de prueba

```bash
  php artisan migrate:fresh --seed
```
Habilitar el storage para que se pueda subir archivos

```bash
  php artisan storage:link
```

Iniciar el server

```bash
  php artisan serve
```
##### ** te recomiendo usar laragon o Sail **


#
Ir a

http://sis_torneo.com (tu localhost)

Puedes crear un nuevo usuario y ingresar con el mismo usuario que creaste


## Screenshots

#### Crear productos

![Create product](https://drive.google.com/uc?export=view&id=1NdMtgqzL2W56fJQKcc2fSEnVJHbusNtp)

#### Añadir productos a la venta
![Add products to Sale](https://drive.google.com/uc?export=view&id=1aPAIy9fBMW86hGckwr9MWxSvUFRAK1GC)

#### Asignar permisos a rol
![Add Permission to rol](https://drive.google.com/uc?export=view&id=1OPXXcuEWibbn1QGwPW6FrSX3fYx7U588)

## Feedback

Si tienes algun Feedback, por favor hazme saber djjmygm160399@gmail.com o al whatsapp: +51 920 468 502