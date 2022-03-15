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
    <link rel="stylesheet" href="css/file-uploaderStylesheet.css">
    <link rel="shortcut icon" href="<?= $config['faviconPath'] ?>" type="image/x-icon" />

</head>

<body>

    <?php

    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        if (!$fileName) {
            $desc = "Your upload could not be processed because you didn't specify a file.";
            include "errors/errorPopup.php";
            return;
        };

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < $config['maxFileSize']) {
                    $id = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 6);
                    $newFileName = "$id.$fileActualExt";
                    $fileDestination = 'uploads/' . $newFileName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    include "success/success.php";
                } else {
                    echo $fileSize;
                    $desc = "Your uploaded image is larger than 25mb, try again with a smaller image.";
                    include "errors/errorPopup.php";
                    return;
                }
            } else {
                $desc = "An error was received while uploading your file, please try again later.";
                include "errors/errorPopup.php";
                return;
            }
        } else {
            $desc = "This type of file is not an image or is not supported.";
            include "errors/errorPopup.php";
            return;
        }
    }
    ?>
</body>

</html>
