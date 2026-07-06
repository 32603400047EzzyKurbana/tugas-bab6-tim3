<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="card">
    <div class="page-header profile-header">
        <div class="profile-info">
            <img src="<?= base_url('assets/image/ezzy.jpg') ?>" alt="Foto Profil Ezzy" class="profile-img">

            <div>
                <p class="label">Bab VI - CRUD Sederhana CI4</p>
                <h1>Data Mahasiswa</h1>
                <h2>Tim 3</h2>
                <p>Ezzy Kurbana, Zachari Yazid, Raafi Prawira Setiamudo, M. Aldriyan Saputra Andriansya, dan Eky Syaifuddin Ibnu Pratama.</p>
                <p>Halaman ini menampilkan data mahasiswa dari database.</p>
            </div>
        </div>

        <a href="<?= base_url('/tambah') ?>" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Universitas</th>
                    <th>Nomor Handphone</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($mahasiswa)) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($mahasiswa as $row) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($row['nim']) ?></td>
                            <td><?= esc($row['nama']) ?></td>
                            <td><?= esc($row['prodi']) ?></td>
                            <td><?= esc($row['universitas']) ?></td>
                            <td><?= esc($row['no_hp']) ?></td>
                            <td class="action">
                                <a href="<?= base_url('/edit/' . $row['nim']) ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('/hapus/' . $row['nim']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data dengan NIM <?= esc($row['nim']) ?>?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="empty">Belum ada data mahasiswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection() ?>