<?php
include_once 'config.php'
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>
        <?= $config['title']; ?>
    </title>

    <script src="https://kit.fontawesome.com/<?= $config['fontawesome-key']; ?>.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/homeStylesheet.css">
    <link rel="shortcut icon" href="<?= $config['faviconPath']; ?>" type="image/x-icon" />

</head>

<html>

<head>

    <meta charset="utf-8" />

    <title>
        <?= $config['title']; ?>
    </title>

</head>

<style>
    body {
        background-image: url(<?= $config['bannerPath']; ?>);
    }
</style>

<body>

    <img src="<?= $config['logoPath']; ?>" alt="logo" class="logo">

    <button class="btn" onclick="window.location.href='upload.php'"><i class="fas fa-cloud-upload-alt"></i> Upload</button>

    <p class="desc"><?= $config['description'] ?></p>

    <button class="big-btn" onclick="window.location.href='upload.php'"><i class="fas fa-cloud-upload-alt"></i> Upload</button>

</body>

</html>