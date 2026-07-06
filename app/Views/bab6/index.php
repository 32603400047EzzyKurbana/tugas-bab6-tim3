<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Catatan Harian - BAB VI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bab6.css'); ?>">
</head>
<body>

<div class="wrapper">
    <div class="hero">
        <div>
            <span class="badge">BAB VI • GitHub Collaboration</span>
            <h1>Sistem CRUD <span>Catatan Harian</span></h1>
            <p>
                Project ini dibuat menggunakan framework CodeIgniter 4.
                Dalam pengerjaannya, Tim 3 memanfaatkan GitHub sebagai media kolaborasi,
                penyimpanan source code, commit, push, dan dokumentasi contributors.
            </p>
            <a href="<?= base_url('bab6/tambah'); ?>" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </a>
        </div>

        <div class="team-card">
            <h2>Nama Anggota Kelompok</h2>

            <div class="member">1. Ezzy Kurbana</div>
            <div class="member">2. Zachari Yazid</div>
            <div class="member">3. Raafi Prawira Setiamudo</div>
            <div class="member">4. M. Aldriyan Saputra Andriansya</div>
            <div class="member">5. Eky Syaifuddin Ibnu Pratama</div>
        </div>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="dashboard">
        <div class="stat-card">
            <h3><?= count($catatan); ?></h3>
            <p>Total Catatan</p>
        </div>

        <div class="stat-card">
            <h3>5</h3>
            <p>Anggota Tim</p>
        </div>

        <div class="stat-card">
            <h3>CRUD</h3>
            <p>Create Read Update Delete</p>
        </div>
    </div>

    <div class="content-card">
        <div class="section-title">
            <div>
                <h2>Tampilan Website</h2>
                <p>Tampilan website sederhana yaitu Catatan Harian.</p>
            </div>
            <a href="<?= base_url('bab6/tambah'); ?>" class="btn btn-success">
                <i class="bi bi-journal-plus"></i> Tambah Catatan
            </a>
        </div>

        <?php if (empty($catatan)) : ?>
            <div class="empty">
                Tidak ada catatan ditemukan.
            </div>
        <?php else : ?>
            <div class="note-grid">
                <?php foreach ($catatan as $item) : ?>
                    <div class="note-card">
                        <div class="note-header">
                            <span><?= esc($item['kategori']); ?></span>
                            <small><?= esc($item['tanggal']); ?></small>
                        </div>

                        <h3><?= esc($item['judul']); ?></h3>
                        <p><?= esc($item['isi']); ?></p>

                        <div class="action">
                            <a href="<?= base_url('bab6/edit/' . $item['id']); ?>" class="btn btn-edit">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <a href="<?= base_url('bab6/hapus/' . $item['id']); ?>"
                               class="btn btn-delete"
                               onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="content-card">
        <div class="section-title">
            <div>
                <h2>Menampilkan Data Terbaru</h2>
                <p>
                    Data catatan yang sudah ditambahkan akan muncul dalam bentuk kartu catatan harian.
                    Setiap data dapat diedit dan dihapus.
                </p>
            </div>
        </div>

        <p class="note-info">
            Halaman ini menampilkan data terbaru setelah proses tambah data, edit data, dan hapus data.
            Data yang berhasil dimasukkan akan langsung muncul pada daftar Catatan Harian.
        </p>
    </div>

    <div class="content-card">
        <div class="section-title">
            <div>
                <h2>Source Code</h2>
                <p>Berisi file index.php, style.css, tambah.php, dan edit.php.</p>
            </div>
        </div>

        <div class="source-grid">
            <div class="source-box">
                <h3>index.php</h3>
                <p>
                    Berisi tampilan utama website Catatan Harian,
                    daftar data, tombol tambah, edit, dan hapus.
                </p>
            </div>

            <div class="source-box">
                <h3>style.css</h3>
                <p>
                    Berisi desain tampilan website agar terlihat rapi,
                    modern, dan menarik.
                </p>
            </div>

            <div class="source-box">
                <h3>tambah.php</h3>
                <p>
                    Berisi form untuk menambahkan data catatan baru.
                </p>
            </div>

            <div class="source-box">
                <h3>edit.php</h3>
                <p>
                    Berisi form edit data yang menampilkan data sebelumnya
                    agar dapat diperbarui.
                </p>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="section-title">
            <div>
                <h2>Grafik Contributors</h2>
                <p>Grafik contributors GitHub melalui menu Insights &gt; Contributors.</p>
            </div>
        </div>

        <div class="contributors">
            <div class="bar-row">
                <span>Ezzy Kurbana</span>
                <div class="bar">
                    <div style="width: 95%;"></div>
                </div>
                <strong>12 commit</strong>
            </div>

            <div class="bar-row">
                <span>Zachari Yazid</span>
                <div class="bar">
                    <div style="width: 80%;"></div>
                </div>
                <strong>9 commit</strong>
            </div>

            <div class="bar-row">
                <span>Raafi Prawira Setiamudo</span>
                <div class="bar">
                    <div style="width: 70%;"></div>
                </div>
                <strong>7 commit</strong>
            </div>

            <div class="bar-row">
                <span>M. Aldriyan Saputra Andriansya</span>
                <div class="bar">
                    <div style="width: 60%;"></div>
                </div>
                <strong>6 commit</strong>
            </div>

            <div class="bar-row">
                <span>Eky Syaifuddin Ibnu Pratama</span>
                <div class="bar">
                    <div style="width: 50%;"></div>
                </div>
                <strong>5 commit</strong>
            </div>
        </div>

        <p class="note-info">
            Catatan: untuk laporan resmi, screenshot asli contributors tetap diambil
            dari repository GitHub melalui menu Insights &gt; Contributors.
        </p>
    </div>
</div>

</body>
</html>
