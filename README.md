## Undangan REST API

REST API dan CRUD untuk mengelola undangan. Dibuat dengan menggunakan Laravel.

## Kebutuhan

1. Composer
2. PHP versi > 7.0
3. [Image Magic Extensions](https://ziixon93.blogspot.com/2020/07/cara-memasang-imagemagick-di-xampp.html) 
4. MySql

## Setup

1. Clone repo ini
2. Buat env file baru dengan template menggunakan perintah `cp .env.example .env`
3. Buka .env file, dan sesuaikan konfigurasi database
4. Buat database baru sesuai dengan konfigurasi .env
5. Install depedency dengan `composer installl`
6. Generate encryption key dengan `php artisan key:generate`
7. Migrasi database dengan `php artisan migrate`
8. Jalankan server dengan menggunakan `php artisan serve --host=0.0.0.0`
9. Akses website dengan mengakses http://{ALAMAT_IP}:8000 atau http://localhost:8000
