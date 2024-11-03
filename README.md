# 🎬 KajiFilm - Platform Komunitas Pecinta Film Indonesia

[![Laravel](https://img.shields.io/badge/Laravel-11.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.0-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)

KajiFilm adalah platform komunitas yang dirancang khusus untuk para pecinta film di Indonesia. Website ini menyediakan ruang untuk berbagi ulasan, berdiskusi, membandingkan film, dan mengeksplorasi sinopsis dari berbagai genre film.

## ✨ Fitur Utama

- 📝 Ulasan Film
  - Rating dan review detail
  - Upload foto screenshot film
  - Like dan komentar pada ulasan
  
- 💬 Forum Diskusi
  - Kategori berdasarkan genre
  - Thread diskusi yang interaktif
  - Moderasi konten
  
- 🔄 Compare Film
  - Perbandingan rating
  - Perbandingan review
  - Analisis persamaan dan perbedaan
  
- 📖 Sinopsis Film
  - Detail informasi film
  - Cast dan crew
  - Trailer dan media terkait

## 🛠️ Teknologi

- **Framework:** Laravel 11
- **Frontend:** Bootstrap 5
- **Database:** MySQL
- **Storage:** 
  - Local Storage untuk development
  - AWS S3 untuk production (opsional)

## 🚀 Instalasi

### Prasyarat

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL
- Extension PHP yang dibutuhkan:
  - PHP GD Extension
  - PHP Fileinfo Extension

### Langkah Instalasi

1. Clone repository
```bash
git clone https://github.com/username/kajifilm.git
cd kajifilm
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kajifilm
DB_USERNAME=root
DB_PASSWORD=
```


5. Setup storage link
```bash
php artisan storage:link
```

6. Jalankan migrasi dan seeder
```bash
php artisan migrate --seed
```

7. Compile assets
```bash
npm run dev
```

8. Jalankan aplikasi
```bash
php artisan serve
```


## 👥 User Roles

1. **Admin**
   - Mengelola seluruh konten
   - Moderasi forum
   - Manajemen user

2. **User**
   - Membuat ulasan
   - Berpartisipasi di forum
   - Membandingkan film

## 💻 Penggunaan

1. Akses aplikasi di `http://localhost:8000`
2. Login dengan kredensial default:
   - Admin:
     - Email: admin1@example.com
     - Password: password123
   - User:
     - Email: barito123.com
     - Password: password123

## 📝 Panduan Kontribusi

1. Fork repository
2. Buat branch baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## ⚙️ Environment Variables

```env
APP_NAME=KajiFilm
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your name_database
DB_USERNAME=your username_database
DB_PASSWORD=your password_database
```


## 📧 Support

Jika Anda menemukan bug atau memiliki saran:
- Buka issue di GitHub
- Email: baritosurya13@gmail.com
- Github: [@ramaboy13](https://github.com/ramaboy13)

## 📜 Lisensi

Distributed under the MIT License. Lihat `LICENSE` untuk informasi lebih lanjut.

## 🙏 Acknowledgments

- [Laravel](https://laravel.com)
- [Bootstrap](https://getbootstrap.com)
- [Font Awesome](https://fontawesome.com)
- [Intervention Image](http://image.intervention.io/)

---
Made with ❤️ KajiFilm Team
