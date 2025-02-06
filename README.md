<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Tutorial Clone, Update Composer, Migrate, dan Menggunakan Filament di Laravel

## 1. Clone Repository Laravel
Jika proyek berada di GitHub atau GitLab, kamu bisa mengkloningnya dengan perintah berikut:
```sh
# Ganti URL dengan repository proyek Laravel kamu
git clone https://github.com/username/nama-repository.git

# Masuk ke direktori proyek
cd nama-repository
```

## 2. Install Dependencies dengan Composer
Pastikan kamu memiliki **Composer** terinstall di sistem. Jalankan perintah berikut untuk menginstall semua dependensi Laravel:
```sh
composer install
```
Jika ada perubahan pada dependensi dan ingin memperbarui, gunakan:
```sh
composer update
```

## 3. Konfigurasi Environment
Salin file `.env.example` menjadi `.env` jika belum ada:
```sh
cp .env.example .env
```
Kemudian, buka file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

## 4. Generate Key Aplikasi Laravel
```sh
php artisan key:generate
```

## 5. Migrate Database
Jalankan perintah berikut untuk membuat tabel di database:
```sh
php artisan migrate
```
Jika terdapat seeding data, jalankan:
```sh
php artisan db:seed
```

## 6. Install dan Konfigurasi Filament
Filament adalah admin panel untuk Laravel. Jika belum terinstall, jalankan perintah berikut:
```sh
composer require filament/filament
```
Setelah instalasi, buat admin panel dengan menjalankan perintah:
```sh
php artisan make:filament-user
```
Masukkan email dan password untuk admin panel.

## 7. Menjalankan Server Laravel
Untuk menjalankan aplikasi Laravel, gunakan perintah berikut:
```sh
php artisan serve
```
Akses aplikasi melalui browser di:
```
http://127.0.0.1:8000
```

Untuk mengakses admin panel Filament, gunakan URL berikut:
```
http://127.0.0.1:8000/admin
```
Login dengan akun yang telah dibuat pada langkah sebelumnya.

---

Dengan mengikuti langkah-langkah ini, kamu bisa meng-clone, mengatur, dan menjalankan project Laravel yang menggunakan Filament dengan mudah!


