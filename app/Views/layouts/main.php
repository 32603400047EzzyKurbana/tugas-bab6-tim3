<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Profil</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #34495e;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            min-height: 400px;
            padding: 30px;
            background-color: white;
            margin: 20px auto;
            width: 80%;
            border-radius: 8px;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Website Pribadi Saya</h1>
        <p>Contoh Layouting CodeIgniter 4</p>
    </header>

    <nav>
        <a href="/profil">Profil</a>
        <a href="/skill">Pengalaman & Skill</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; 2026 Website Pribadi Saya</p>
    </footer>

</body>
</html>