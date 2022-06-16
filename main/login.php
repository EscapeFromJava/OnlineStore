<?php
include '../main/paths.php';

// сохраняем в локальные переменные данные пользователя
$currentLogin = $_POST['login'];
$currentPassword = $_POST['password'];

require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');

// $sql = "SELECT * FROM users WHERE LOGIN = '{$currentLogin}';";
$sql = "SELECT * FROM users WHERE LOGIN = '{$currentLogin}';";
$result = mysqli_query($link, $sql);

$userSQL = [];
while ($row = mysqli_fetch_array($result)) {
    $userSQL = [
        "FIO" => $row['FIO'],
        "LOGIN" => $row['LOGIN'],
        "PASSWORD" => $row['PASS_WORD'],
        "EMAIL" => $row['EMAIL']
    ];
}

$fioSQL = $userSQL["FIO"];
$loginSQL = $userSQL["LOGIN"];
$passwordSQL = $userSQL["PASSWORD"];

if (!isset($_SESSION)) {
    session_start();
}

if (!empty($passwordSQL)) {
    if (password_verify($currentPassword, $passwordSQL)) {
        $_SESSION['name'] = $fioSQL;
        $_SESSION['login'] = $loginSQL;
        $loginInfo = 'Авторизация прошла успешно!';
    }
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