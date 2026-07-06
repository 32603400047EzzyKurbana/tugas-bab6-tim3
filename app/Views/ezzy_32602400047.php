<?= $this->extend('layout/32602400047_ezzy') ?>

<?= $this->section('content') ?>

<section class="about-me" id="about">
    <div class="aboutme-image">
        <img src="<?= base_url('assets/image/ezzy.jpg') ?>" alt="Foto profil Ezzy">
    </div>

    <div class="aboutme-text">
        <h2>About Me</h2>
        <p>
            Halo, nama saya Ezzy Kurbana. Saya adalah mahasiswa Teknik Informatika
            yang memiliki ketertarikan pada dunia pemrograman web, desain antarmuka,
            dan pengembangan aplikasi berbasis website.
        </p>
        <p>
            Melalui halaman ini, saya menampilkan profil singkat dan pengalaman belajar
            saya dalam membuat halaman web menggunakan CodeIgniter 4.
        </p>
    </div>
</section>

<section class="experience" id="experience">
    <div class="section-title">
        <p>My Journey</p>
        <h2>Experience</h2>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengalaman</th>
                    <th>Deskripsi</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Belajar HTML dan CSS</td>
                    <td>Membuat struktur halaman website sederhana dan mempercantiknya menggunakan CSS.</td>
                    <td>2024</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Belajar PHP</td>
                    <td>Mempelajari dasar sintaks PHP untuk membuat halaman web yang lebih dinamis.</td>
                    <td>2025</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Belajar CodeIgniter 4</td>
                    <td>Membuat route, controller, view, layouting, dan penggunaan base_url.</td>
                    <td>2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection() ?>
