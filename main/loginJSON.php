<?php
include '../main/paths.php';
if (!isset($_SESSION)) {
    session_start();
}
// сохраняем в локальные переменные данные пользователя
$currentLogin = $_POST['login'];
$currentPassword = $_POST['password'];

$json_path = $_SERVER["DOCUMENT_ROOT"] . '/main/users.json';
// считываем весь файл users.json
$data = file_get_contents($json_path);
// преобразуем в массив
$arUsers = json_decode($data, true);

foreach ($arUsers as $name => $val) {
    if ($currentLogin == $val['login']) {
        if (password_verify($currentPassword, $val['password'])) {
            $_SESSION['name'] = $val['name'];
            $_SESSION['login'] = $currentLogin;
        }
    }
}

if (isset($_SESSION['name'])) {
    $loginInfo = 'Авторизация прошла успешно!';
} else {
    $loginInfo = 'Неверные данные!';
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
    <title>Авторизация</title>

</head>

<body>
    <div class="container">

        <?php require_once $header_path; ?>

        <div class="content">
            <div class="main">
                <div id="profile">
                    <h1><?= $loginInfo ?></h1>
                </div>
            </div>
        </div>

        <?php require_once $footer_path; ?>

</body>

</html>