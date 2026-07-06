<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="card form-card">
    <p class="label">Create</p>
    <h1>Tambah Data Mahasiswa</h1>
    <p>Isi data mahasiswa pada form berikut, lalu klik tombol submit.</p>

    <form action="<?= base_url('/simpan') ?>" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" value="<?= old('nim') ?>" placeholder="Masukkan NIM" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= old('nama') ?>" placeholder="Masukkan nama" required>
        </div>

        <div class="form-group">
            <label for="prodi">Prodi</label>
            <input type="text" id="prodi" name="prodi" value="<?= old('prodi') ?>" placeholder="Masukkan prodi" required>
        </div>

        <div class="form-group">
            <label for="universitas">Universitas</label>
            <input type="text" id="universitas" name="universitas" value="<?= old('universitas') ?>" placeholder="Masukkan universitas" required>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor Handphone</label>
            <input type="text" id="no_hp" name="no_hp" value="<?= old('no_hp') ?>" placeholder="Masukkan nomor handphone" required>
        </div>

        <div class="form-action">
            <a href="<?= base_url('/crud') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>

<?= $this->endSection() ?>