<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Catatan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bab6.css'); ?>">
</head>
<body>

<div class="wrapper">
    <div class="form-page">
        <div class="form-card">
            <span class="badge">Fitur Edit</span>
            <h1>Edit Catatan Harian</h1>
            <p>
                Halaman ini menampilkan data sebelumnya.
                Data dapat diubah, kemudian klik update untuk menyimpan perubahan.
            </p>

            <form action="<?= base_url('bab6/update/' . $catatan['id']); ?>" method="post">
                <label>Judul Catatan</label>
                <input type="text" name="judul" value="<?= esc($catatan['judul']); ?>" required>

                <label>Tanggal</label>
                <input type="date" name="tanggal" value="<?= esc($catatan['tanggal']); ?>" required>

                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="Tugas" <?= $catatan['kategori'] == 'Tugas' ? 'selected' : ''; ?>>Tugas</option>
                    <option value="Kuliah" <?= $catatan['kategori'] == 'Kuliah' ? 'selected' : ''; ?>>Kuliah</option>
                    <option value="Project" <?= $catatan['kategori'] == 'Project' ? 'selected' : ''; ?>>Project</option>
                    <option value="GitHub" <?= $catatan['kategori'] == 'GitHub' ? 'selected' : ''; ?>>GitHub</option>
                </select>

                <label>Isi Catatan</label>
                <textarea name="isi" required><?= esc($catatan['isi']); ?></textarea>

                <div class="form-action">
                    <a href="<?= base_url('bab6'); ?>" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
