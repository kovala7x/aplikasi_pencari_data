- Database yang digunakan : MySQL menggunakan XAMPP
- Framework yang digunakan : Laravel

## Tutorial Install Aplikasi Pencari Data

1. Clone project ini
2. Buka folder project ini
3. Rename file `.env.example` menjadi `.env` untuk konfigurasi database
4. Buat database dengan nama `example_data` sesuai dengan konfigurasi pada .env
5. Buka command prompt / terminal dan arahkan ke folder project ini
6. Jalankan perintah `composer install` dan tunggu hingga berhasil
7. Jalankan MySQL, disini saya menggunakan XAMPP
8. Jalankan perintah `php artisan migrate` untuk migrasi data ke database dan tunggu hingga berhasil
9. Jalankan perintah `php artisan db:seed --class=PegawaiSeeder` untuk membuat data dengan faker dan tunggu hingga berhasil (Proses ini membutuhkan waktu yang lama karena input data sebanyak 500.000)
10. Jalankan perintah `php artisan serve` untuk menjalankan project
