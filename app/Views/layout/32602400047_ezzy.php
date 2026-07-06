<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profil Ezzy</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/ezzy-style.css') ?>">
</head>
<body>
    <header class="navbar">
        <div class="navbar-brand">Ezzy Profile</div>

        <nav class="navbar-page">
            <ul>
                <li><a href="<?= base_url('ezzy') ?>">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="biodata">
        <p class="label">Website Profil</p>
        <h1>Ezzy Kurbana</h1>
        <p class="description">
            Mahasiswa Teknik Informatika angkatan 2024 yang sedang mempelajari
            pengembangan website menggunakan HTML, CSS, PHP, dan CodeIgniter 4.
        </p>
    </section>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="footer" id="contact">
        <p>Connect with me</p>
        <div class="social-links">
            <span>LinkedIn</span>
            <span>Instagram</span>
            <span>Facebook</span>
            <span>WhatsApp</span>
        </div>
        <small>&copy; 2026 Ezzy Kurbana. All Rights Reserved.</small>
    </footer>
</body>
</html>
