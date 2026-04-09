# Dstarbby — Laravel + Voyager

Aplicación Laravel con panel de administración Voyager y CRUD de artículos.

## Requisitos

- PHP 8.2 o superior
- Composer
- Node.js y npm
- MySQL

## Instalación

**1. Clonar el repositorio**

```bash
git clone https://github.com/leodstar4/tareajoe.git
cd tareajoe
```

**2. Instalar dependencias de PHP**

```bash
composer install
```

**3. Instalar dependencias de JavaScript**

```bash
npm install
```

**4. Configurar el entorno**

```bash
cp .env.example .env
php artisan key:generate
```

Edita el archivo `.env` y configura tu base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dstarbby
DB_USERNAME=root
DB_PASSWORD=
```

**5. Ejecutar migraciones e instalar Voyager**

```bash
php artisan voyager:install --with-dummy
```

Este comando crea la base de datos, ejecuta las migraciones y siembra datos de ejemplo.

**6. Crear enlace de almacenamiento**

```bash
php artisan storage:link
```

**7. Compilar assets**

```bash
npm run build
```

**8. Iniciar el servidor**

```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`.

## Acceso al panel de administración

- URL: `http://localhost:8000/admin`
- Email: `admin@admin.com`
- Password: `password`

## Rutas principales

| Ruta | Descripción |
|------|-------------|
| `/` | Página de inicio |
| `/articles` | Listado de artículos |
| `/articles/{id}` | Ver artículo |
| `/articles/{id}/edit` | Editar artículo |
| `/admin` | Panel Voyager |

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
