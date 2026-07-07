<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Catatan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bab6.css'); ?>">
</head>
<body>

<div class="wrapper">
    <div class="form-page">
        <div class="form-card">
            <span class="badge">Tambah Data</span>
            <h1>Tambah Catatan Harian</h1>
            <p>
                Halaman ini digunakan untuk menambahkan data catatan baru.
                Setelah data diisi, klik tombol simpan untuk menyimpan catatan.
            </p>

            <form action="<?= base_url('bab6/simpan'); ?>" method="post">
                <label>Judul Catatan</label>
                <input type="text" name="judul" placeholder="Masukkan judul catatan" required>

                <label>Tanggal</label>
                <input type="date" name="tanggal" required>

                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="Tugas">Tugas</option>
                    <option value="Kuliah">Kuliah</option>
                    <option value="Project">Project</option>
                    <option value="GitHub">GitHub</option>
                </select>

                <label>Isi Catatan</label>
                <textarea name="isi" placeholder="Tulis isi catatan harian..." required></textarea>

                <div class="form-action">
                    <a href="<?= base_url('bab6'); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
