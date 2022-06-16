<?php
include '../main/paths.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style/dist/main.css">
    <link rel="stylesheet" href="/style/dist/normalize.css">
    <title>Авторизация</title>

</head>

<body>

    <div class="container">

        <?php require_once $header_path; ?>

        <div class="content">
            <div class="main">
                <div id="profile">
                    <div><strong>ФИО: </strong><?= $_SESSION["USER"]["FIO"] ?></div>
                    <div><strong>Email: </strong><?= $_SESSION["USER"]["Email"] ?></div>
                    <div><strong>Phone: </strong><?= $_SESSION["USER"]["Phone"] ?></div>
                </div>
            </div>
        </div>

        <?php require_once $footer_path; ?>

    </div>

</body>

</html>