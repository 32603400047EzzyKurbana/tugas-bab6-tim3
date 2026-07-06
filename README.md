# Praktikum Web Programming - BAB VI GitHub

## Tim 3
1. Ezzy Kurbana
2. Zachari Yazid
3. Raafi Prawira Setiamudo
4. M. Aldriyan Saputra Andriansya
5. Eky Syaifuddin Ibnu Pratama

## Deskripsi Project
Project ini adalah sistem CRUD sederhana menggunakan framework CodeIgniter 4. Data yang dikelola adalah data mahasiswa yang terdiri dari NIM, nama, prodi, universitas, dan nomor handphone.

## Fitur
- Menampilkan data mahasiswa
- Menambah data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Konfirmasi sebelum hapus data

## File Utama
- app/Controllers/Crud.php
- app/Models/MahasiswaModel.php
- app/Views/CRUD/View.php
- app/Views/CRUD/Upload.php
- app/Views/CRUD/Edit.php
- app/Views/layout/template.php
- public/assets/css/crud.css
- database/mahasiswa.sql

## Cara Menjalankan
1. Buka XAMPP, aktifkan Apache dan MySQL.
2. Buat database dengan mengimpor file `database/mahasiswa.sql` melalui phpMyAdmin.
3. Pastikan konfigurasi database pada file `.env` sesuai dengan nama database `praktikum`.
4. Jalankan perintah berikut pada terminal di folder project:
   ```bash
   php spark serve
   ```
5. Buka browser ke URL berikut:
   ```text
   http://localhost:8080/crud
   ```

## Route
- `/crud` : menampilkan data mahasiswa
- `/tambah` : halaman tambah data mahasiswa
- `/edit/{nim}` : halaman edit data mahasiswa
- `/hapus/{nim}` : menghapus data mahasiswa
