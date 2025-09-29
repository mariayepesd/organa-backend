# 🌱 Organa - Backend

Proyecto backend desarrollado en Laravel 9 y PHP 8 para gestionar el restaurante organa con autenticación usando Auth0.

## 📋 Requisitos previos

Antes de comenzar asegúrate de tener instalado:

* PHP >= 8.0
* Composer
* WAMP o XAMPP con MySQL activo

## 🚀 Instalación paso a paso

### 1. Clonar el repositorio

```bash
git clone https://github.com/mariayepesd/organa-backend.git
```

### 2. Entrar al directorio del proyecto

```bash
cd organa-backend
```

Instalar dependencias de Laravel

```bash
composer install
```

### 3. Configurar el archivo .env

Copia el archivo de ejemplo:
```bash
cp .env.example .env
```

Edita .env y coloca tus credenciales de base de datos MySQL.

### 4. Ejecutar migraciones y seeders (esto creará las tablas y datos iniciales):
```bash
php artisan migrate --seed
```

### 5. Generar la clave de aplicación y limpiar cachés
```bash
php artisan key:generate
```

```bash
php artisan cache:clear
```
```bash
php artisan config:clear
```
Iniciar el servidor de desarrollo

```bash
php artisan serve
```

El proyecto estará disponible en:
```bash
👉 http://localhost:8000
```

Si usas WAMP/XAMPP, también puedes configurar un VirtualHost para acceder con una URL personalizada (ej: http://organa.local).

Si tienes errores de caché o configuración, vuelve a ejecutar:

```bash
php artisan cache:clear
php artisan config:clear
```
## 📡 Endpoints principales (API)

La estructura general de las API es de la siguiente manera:

### Obtener platos

```http
  GET /api/platos
```

### Obtener un plato

```http
  GET /api/platos/${id}
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id del plato a consultar. |

### Crear un nuevo plato

```http
  POST /api/platos/
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `nombre`      | `string(50)` | **Required**. Nombre del plato. |
| `categoria`      | `string(50)` | **Required**. Categoría o tag. |
| `tamaño_porcion`      | `string(50)` | **Required**. Tamaño de una porción del plato. |
| `pasos_preparacion`      | `string(500)` | **Required**. Pasos de su preparación. |


### Actualizar un plato

```http
  PUT /api/platos/${id}
```

| Parámetro | Tipo     | Descripción                       |
| :-------- | :------- | :-------------------------------- |
| `nombre`      | `string(50)` | **Required**. Nombre del plato. |
| `categoria`      | `string(50)` | **Required**. Categoría o tag. |
| `tamaño_porcion`      | `string(50)` | **Required**. Tamaño de una porción del plato. |
| `pasos_preparacion`      | `string(500)` | **Required**. Pasos de su preparación. |


### Eliminar un plato

```http
  DELETE /api/platos/${id}
```

