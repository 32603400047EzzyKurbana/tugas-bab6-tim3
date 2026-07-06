<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CRUD Mahasiswa' ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/crud.css') ?>">
</head>
<body>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-error">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <main class="container">
        <?= $this->renderSection('content') ?>
    </main>

</body>
</html>