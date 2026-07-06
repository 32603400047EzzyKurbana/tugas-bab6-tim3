<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="card form-card">
    <p class="label">Update</p>
    <h1>Edit Data Mahasiswa</h1>
    <p>Ubah data mahasiswa, lalu klik tombol update.</p>

    <form action="<?= base_url('/update') ?>" method="post">
        <input type="hidden" name="nim_lama" value="<?= esc($mahasiswa['nim']) ?>">

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?= old('nim', $mahasiswa['nim']) ?>" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= old('nama', $mahasiswa['nama']) ?>" required>
        </div>

        <div class="form-group">
            <label for="prodi">Prodi</label>
            <input type="text" id="prodi" name="prodi" value="<?= old('prodi', $mahasiswa['prodi']) ?>" required>
        </div>

        <div class="form-group">
            <label for="universitas">Universitas</label>
            <input type="text" id="universitas" name="universitas" value="<?= old('universitas', $mahasiswa['universitas']) ?>" required>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" id="no_hp" name="no_hp" value="<?= old('no_hp', $mahasiswa['no_hp']) ?>" required>
        </div>

        <div class="form-action">
            <a href="<?= base_url('/crud') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</section>

<?= $this->endSection() ?>