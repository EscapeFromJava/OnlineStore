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
                    <h1>Авторизация</h1>
                    <div class="login">
                        <form action="../main/login.php" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <p>Логин</p>
                                <p><input type="text" name="login"></p>
                                <p>Пароль</p>
                                <p><input type="password" name="password"></p>
                                <p><input class="button" type="submit" value="Войти"></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once $footer_path; ?>

    </div>

</body>

</html>