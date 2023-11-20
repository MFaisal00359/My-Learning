# My-Learning

My Learning adalah platform belajar bagi siswa di sekolah SMA Terkhusus nya SMA 1 Natar untuk memenuhi tugas kelompok kami yaitu salah satu indikator SDGs dalam hal pendidikan. My Learning berisi 3 komponen utama yaitu: 1. Informasi modul pembelajaran siswa yang dapat diakses dengan cepat di website Learning App; 2. Informasi beasiswa untuk siswa yang mencari tahu mengenai beasiswa; 3. Layanan pengaduan dan konseling melalui gform yang dapat diakses oleh siswa menggunakan email belajar siswa 

## Daftar Isi

- [Persyaratan](#persyaratan)
- [Pengaturan Awal](#pengaturan-awal)
- [Menjalankan Proyek](#menjalankan-proyek)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## Persyaratan

Sebelum memulai proyek, pastikan memiliki persyaratan berikut untuk diinstal di komputer:
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)

## Menjalankan Program

1. **Clone Proyek**: clone repository ini : 

   ```bash
   git clone https://github.com/nama-user/nama-proyek.git
   cd learning-app
   ```

   copy env
   ```bash
   cp .env.example .env
   ```
   Install Composer
   ```bash
   composer install
   ```

   Install npm
   ```bash
   npm install
   ```
   
   kalau gagal coba 
   ```bash
   composer update
   ```
   
   jika error saat update composer (kalau nggak skip bagian ini). coba ketik pada teminal "
   ```bash
   composer update --ignore-platform-reqs
   ```

   cek lagi (opsi jika tadi update composer gagal)    
   ```bash
   php artisan list
   ```

   kalau lanjut migrate dulu untuk create db ny. ketik dibawah ini
   ```bash
   php artisan migrate
   ```
   
   defenisiin admin role ke db nya 
   ```bash
   php artisan db:seed --class=AdminUserSeeder
   ```

   coba jalankan
   ```bash
   php artisan serve
   ```

   jalankan run dev untuk load tailwind (ganti terminal)
   ```bash
   npm run dev
   ```
    
## Kontribusi
- Faisal
- Kevin
- Artha
- Giovanni
- Qaisya
- Marsella

## Lisensi
MIT license
