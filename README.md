# BAB VI GITHUB - TIM 3

## Nama Kelompok
Tim 3

## Anggota Kelompok
1. Ezzy Kurbana
2. Zachari Yazid
3. Raafi Prawira Setiamudo
4. M. Aldriyan Saputra Andriansya
5. Eky Syaifuddin Ibnu Pratama

## Judul Project
Sistem CRUD Catatan Harian Menggunakan CodeIgniter 4

## Deskripsi Project
Project ini merupakan sistem CRUD sederhana berbasis framework CodeIgniter 4.
Project dibuat untuk memenuhi tugas BAB VI GitHub, yaitu membuat sistem CRUD,
menggunakan GitHub sebagai media kolaborasi, dan menampilkan dokumentasi
source code, tampilan website, serta grafik contributors.

## Fitur Website
1. Menampilkan daftar catatan harian
2. Menambahkan data catatan baru
3. Mengedit data catatan
4. Menghapus data catatan
5. Menampilkan bagian source code
6. Menampilkan bagian grafik contributors

## Struktur File Penting
- `app/Controllers/Bab6.php`
  Berisi controller untuk menjalankan fitur CRUD BAB VI.

- `app/Views/bab6/index.php`
  Berisi tampilan utama website Catatan Harian.

- `app/Views/bab6/tambah.php`
  Berisi form tambah data catatan.

- `app/Views/bab6/edit.php`
  Berisi form edit data catatan.

- `public/assets/css/bab6.css`
  Berisi desain tampilan website.

- `app/Config/Routes.php`
  Berisi pengaturan alamat URL untuk mengakses halaman BAB VI.

## Pembagian Tugas
1. Ezzy Kurbana
   - Membuat repository GitHub
   - Mengupload project awal
   - Mengatur route BAB VI

2. Zachari Yazid
   - Membuat controller BAB VI
   - Mengatur proses tambah, edit, update, dan hapus data

3. Raafi Prawira Setiamudo
   - Membuat tampilan utama website
   - Menyusun halaman daftar catatan

4. M. Aldriyan Saputra Andriansya
   - Membuat halaman tambah data
   - Membuat halaman edit data

5. Eky Syaifuddin Ibnu Pratama
   - Membuat desain CSS
   - Menambahkan dokumentasi project

## Route BAB VI
Tambahkan kode berikut pada file `app/Config/Routes.php`:

```php
$routes->get('/', 'Bab6::index');
$routes->get('bab6', 'Bab6::index');
$routes->get('bab6/tambah', 'Bab6::tambah');
$routes->post('bab6/simpan', 'Bab6::simpan');
$routes->get('bab6/edit/(:num)', 'Bab6::edit/$1');
$routes->post('bab6/update/(:num)', 'Bab6::update/$1');
$routes->get('bab6/hapus/(:num)', 'Bab6::hapus/$1');
```

## Cara Menjalankan Project
1. Buka folder project.
2. Jalankan server CodeIgniter 4:

```bash
php spark serve
```

3. Buka browser:

```text
http://localhost:8080
```

atau:

```text
http://localhost:8080/bab6
```

## Perintah GitHub yang Digunakan
```bash
git init
git add .
git commit -m "Upload project CRUD CodeIgniter BAB 6 Tim 3"
git branch -M main
git remote add origin https://github.com/32603400047EzzyKurbana/tugas-kelompok3.git
git push -u origin main
```

## Grafik Contributors
Grafik contributors dapat dilihat melalui menu:

```text
Insights > Contributors
```

pada repository GitHub. Grafik ini digunakan untuk melihat aktivitas commit
dan kontribusi anggota kelompok pada repository.

## Kesimpulan
Dengan project ini, anggota kelompok dapat memahami cara membuat sistem CRUD
menggunakan CodeIgniter 4 serta menggunakan GitHub untuk menyimpan project,
melakukan commit, push, dan kolaborasi antar anggota kelompok.
