# Used Car Prediction
Aplikasi prediksi harga mobil bekas menggunakan Laravel, Python, dan Flask.

![Laravel](https://img.shields.io/badge/Laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Python](https://img.shields.io/badge/python-3670A0?style=for-the-badge&logo=python&logoColor=ffdd54)
![Flask](https://img.shields.io/badge/flask-%23000.svg?style=for-the-badge&logo=flask&logoColor=white)

## Cara Menjalankan Aplikasi

### 1. Menjalankan Aplikasi Laravel
1. Pastikan Anda sudah menginstal [Composer](https://getcomposer.org/) dan [Node.js](https://nodejs.org/).
2. Buka terminal dan arahkan ke direktori proyek Laravel.
3. Jalankan perintah berikut untuk menginstal dependensi:

```bash
composer install
npm install
npm run dev
```

4. Salin file `.env.example` menjadi `.env` dan atur konfigurasi database Anda.
5. Jalankan migrasi database:

```bash
php artisan migrate
```

6. Jalankan server Laravel:

```bash
php artisan serve
```

7. Akses aplikasi di browser melalui [http://localhost:8000](http://localhost:8000).

### 2. Menjalankan API Python
1. Pastikan Anda sudah menginstal [Python](https://www.python.org/).
2. Buka terminal dan arahkan ke direktori proyek Flask.
3. Aktifkan virtual environment:

```bash
python -m venv venv
source venv/bin/activate  # Linux/Mac
venv\Scripts\activate  # Windows
```

4. Instal dependensi:

```bash
pip install -r requirements.txt
```

5. Jalankan server Flask:

```bash
python app.py
```

6. API akan tersedia di [http://localhost:5000](http://localhost:5000).

## Catatan
Pastikan koneksi antara Laravel dan API Flask berjalan dengan baik. Anda dapat mengatur URL API Flask di file `.env` pada proyek Laravel.

## Kontribusi
Jika Anda ingin berkontribusi, silakan buat pull request atau buka issue pada repository ini.

---
&copy; 2025 Used Car Prediction
