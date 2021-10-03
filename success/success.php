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
    <link rel="shortcut icon" href="<?= $config['faviconPath']; ?>" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/successStylesheet.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>


<script>
    function copy() {
        let url = document.getElementById("url");
        let btn = document.getElementById("copyBtn")

        url.select();
        url.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(url.value);

        btn.innerHTML = "Copied";
        setTimeout(function() {
            btn.innerHTML = "Copy";
        }, 3000);
    }
</script>
</head>

<body>

    <img src="<?= $config['logoPath']; ?>" alt="logo" class="logo">

    <div class="modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons">&#xE876;</i>
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Your image has been uploaded successfully!</p>
                <br>
                <?
                $URL = $config["url"];
                echo "<input type=\"text\" class=\"link-input\" readonly=\"\" id=\"url\" value=\"$URL/uploads/$newFileName\">";
                ?>

                <button class="copy-btn" onclick="copy()" id="copyBtn">Copy</button>

            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" onclick="window.location.href='home.php'">OK</button>
            </div>
        </div>
    </div>
</body>

</html>