<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
  </a>
</p>

<p align="center">
  <a href="https://travis-ci.org/laravel/framework">
    <img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# Laravel 8

Laravel adalah framework PHP yang dirancang untuk membuat pengembangan aplikasi web menjadi lebih mudah dan efisien. Laravel menyediakan berbagai fitur yang kuat dan fleksibel, seperti routing, middleware, ORM (Eloquent), queue, dan banyak lagi.

## Persyaratan Sistem

Sebelum memulai instalasi Laravel 8, pastikan server atau mesin lokal Anda memenuhi persyaratan berikut:

- PHP >= 7.3 (XAMPP versi 7.4 direkomendasikan)
- Composer
- MySQL atau database lainnya yang didukung

- [Prasyarat](#prasyarat)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
- [Menjalankan Aplikasi](#menjalankan-aplikasi)
- [Penggunaan](#penggunaan)
- [Testing](#testing)
- [Contributing](#contributing)
- [Lisensi](#lisensi)

## Prasyarat

Sebelum memulai, pastikan Anda memenuhi syarat berikut:

- PHP >= 7.3
- Composer
- Database (MySQL, PostgreSQL, SQLite, atau SQL Server)

## Instalasi

1. **Clone repositori:**

       git clone https://github.com/MrsFaixall/laravel8_album.git

3. **Masuk ke direktori proyek:**

        cd laravel8_album
4. **Install dependensi menggunakan Composer:**

       ```bash
       composer install

5. **Menyalin file .env.example ke .env:**

        cp .env.example .env

4. **Generate key aplikasi:**

        php artisan key:generate
Konfigurasi database di file .env:


Ubah pengaturan berikut sesuai dengan database Anda:


        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=menyesuikan di phpmyadmin
        DB_USERNAME=root
        DB_PASSWORD=password
Konfigurasi
Jika Anda menggunakan layanan pihak ketiga (seperti Mail, API, dll.), pastikan untuk mengonfigurasi kredensialnya di file .env.

Menjalankan Aplikasi
Anda dapat menjalankan aplikasi menggunakan server built-in Laravel:

        php artisan serve
Akses aplikasi di browser Anda dengan mengunjungi http://localhost:8000.

Penggunaan
Jelaskan bagaimana cara menggunakan aplikasi Anda di sini, termasuk instruksi dan contoh jika diperlukan.
