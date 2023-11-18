# Rancang Bangun Aplikasi Pencarian Kerja Berbasis Web
Membuat kembali portal lowongan pekerjaan didamel.id , karena sistem yang ada saat ini menggunakan wordpress yang membuat website menjadi lambat karena banyaknya plugin yang terpasang. Aplikasi ini dibuat untuk memenuhi nilai mata kuliah yaitu Kerja Praktek.

**Berikut Laporan Kerja Praktik **
✔ [Laporan Kerja Praktik Fahmy.pdf](https://drive.google.com/file/d/10ezCk_ZIxGMb5YLvhD69l-pWKcn2R8kI/view?usp=sharing)

## features
- Pencarian berdasarkan title,city dan category
- Lowongan kerja terbaru
- Perusahaan unggulan
- Admin Dashboard

## requirements
- php 8.0.2
- database mysql
- laravel 10.0
- laragon
- chrome
- composer

## installation

1. Clone repositori
    ```sh
    git https://github.com/fahmyfauzi/laravel_didamelid.git
    ```
2. masuk ke dalam directori
    ```sh
    cd laravel_didamelid
    ```
3. Instal composer
    ```sh
    composer install
    or
    composer update
    ```
4. Copy file .env.example 
    ```
    cp .env.example .env
    ```
4. Generate an app encryption key

    ```sh
    php artisan key:generate
    ```
5. Create database on your computer or phpMyAdmin
6. In the .env file, add database information to allow Laravel to connect to the database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_didamelid
    DB_USERNAME=DB_USERNAME
    DB_PASSWORD=DB_PASSWORD
    ```
    
6. migrasi database
    ```
    php artisan migrate --seed
    ```
7. install package
    ```
    npm install
    npm run build
    ```
    
8. jalankan project
    ```sh
   php artisan serve
    ```


## usage
- buka chrome masukan link ```laravel_didamelid.test``` atau ``` http://127.0.0.1:8000/ ```
- akses ```laravel_didamelid.test/login``` atau ``` laravel_didamelid.test/register ```
- login dan coba fitur-fiturnya

## credits

[Fahmy Fauzi ](https://github.com/fahmyfauzi)

## screanshot
- Halaman Home
  ![Screenshot (244)](https://github.com/fahmyfauzi/laravel_didamelid/assets/58255031/79421503-06c2-4c8b-87ca-0bdb398d7f00)

- Halaman Pencarian
  ![Screenshot (245)](https://github.com/fahmyfauzi/laravel_didamelid/assets/58255031/ada95c41-bb83-47c9-9cc4-da56a6f568ae)

- Halaman Detail Job
  ![bb7dbc58-ce0d-4746-a657-e0ddcf2b0677](https://github.com/fahmyfauzi/laravel_didamelid/assets/58255031/1f6cf4b9-c307-45ff-9af8-37c39d59a571)

  
- Halaman Dashboard Manage Jobs
  ![Screenshot (246)](https://github.com/fahmyfauzi/laravel_didamelid/assets/58255031/813032e6-45ec-4b8d-af47-88727949e37a)

- Halaman Dashboard Update
  ![e963f2f7-da47-4e15-be30-d76e0dbea42d](https://github.com/fahmyfauzi/laravel_didamelid/assets/58255031/4dca0baa-8805-4abc-bc02-7a87bdeb27a6)
