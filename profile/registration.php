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
    <title>Регистрация</title>

</head>

<body>

    <div class="container">

        <?php require_once $header_path; ?>

        <div class="content">
            <div class="main">
                <h1>Регистрация</h1>
                <div class="registr">
                    <form action="../main/registration.php" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <p>Имя *</p>
                            <p><input type="text" name="name"></p>
                            <p>Логин *</p>
                            <p><input type="text" name="login"></p>
                            <p>Пароль *</p>
                            <p><input type="password" name="firstPassword"></p>
                            <p>Повтор пароля *</p>
                            <p><input type="password" name="secondPassword"></p>
                            <p>Email</p>
                            <p><input type="text" name="email"></p>
                            <p><input class="button" type="submit" value="Зарегистрироваться"></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <?php require_once $footer_path; ?>

    </div>

</body>

</html>