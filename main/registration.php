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
                <h1>Регистрация прошла успешно!</h1>
                <div class="login-info">
                    <p>Логин: <?= $login ?></p>
                    <p>Имя: <?= $fio ?></p>
                </div>
            </div>
        </div>

        <?php require_once $footer_path; ?>

    </div>
</body>

</html>