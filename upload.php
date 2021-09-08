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
    <link rel="stylesheet" href="css/uploadStylesheet.css">
    <link rel="shortcut icon" href="<?= $config['faviconPath']; ?>" type="image/x-icon" />

</head>

<body>

    <img src="<?= $config['logoPath']; ?>" alt="logo" class="logo">

    <div class="popup">
        <form action="file-uploader.php" method="POST" enctype="multipart/form-data">
            <btn class="close-btn" onclick="window.location.href='home.php'"><svg width="88" height="88" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><circle cx="44" cy="36" r="20" fill="#3C424B" /></g><path fill-rule="evenodd" clip-rule="evenodd" d="M39.121 29.828a1.04 1.04 0 0 0-1.414 0c-.39.37-.39.97 0 1.34l4.95 4.687-4.95 4.688c-.39.37-.39.969 0 1.339s1.024.37 1.414 0l4.95-4.688 4.95 4.688c.39.37 1.023.37 1.414 0 .39-.37.39-.97 0-1.34l-4.95-4.687 4.95-4.688a.912.912 0 0 0 0-1.339 1.04 1.04 0 0 0-1.414 0l-4.95 4.688-4.95-4.688z" fill="#fff" /><defs><filter id="filter0_d" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix" /><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" /><feOffset dy="8" /><feGaussianBlur stdDeviation="12" /><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.56 0" /><feBlend in2="BackgroundImageFix" result="effect1_dropShadow" /><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape" /></filter></defs></svg></btn>
            <label for="file-upload" class="file-btn">
                <i class="fa fa-cloud-upload"></i> Upload
            </label>
            <input id="file-upload" type="file" name="file" accept=".jpeg,.jpg,.png,.gif" />
            <button type="submit" class="submit-btn" name="submit"><i class="fas fa-check"></i></button>
        </form>
    </div>

</body>

</html>