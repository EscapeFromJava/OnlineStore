<?php
include '../main/paths.php';
require_once ($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');

if (!empty($_POST)) {
    
    $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $login = $_POST['login'];
    $fio = $_POST['fio'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `users`(`FIO`, `LOGIN`, `EMAIL`, `PASS_WORD`) VALUES ('{$fio}','{$login}','{$email}','{$passwordHash}')";
    $result = mysqli_query($link, $sql);
    if ($result == false) {
        // print("Произошла ошибка при выполнении запроса<br>");
        // print mysqli_error($link);
    } else {
        $userID = mysqli_insert_id($link);
        // print("Запись '$userID' успешно добавлена!<br>");
    }
}

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
                    <form action="../profile/registration.php" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <p>Имя *</p>
                            <p><input type="text" name="fio"></p>
                            <p>Логин *</p>
                            <p><input type="text" name="login"></p>
                            <p>Пароль *</p>
                            <p><input type="password" name="password"></p>
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