<?php
include '../main/paths.php';
$answer = 'Регистрация прошла успешно!';
// считываем и пишем в массив
if (isset($_POST)) {
    if ($_POST['firstPassword'] == $_POST['secondPassword']) {
        $array = array(
            'name' => $_POST['name'],
            'login' => $_POST['login'],
            'password' => password_hash($_POST['firstPassword'], PASSWORD_DEFAULT),
            'email' => $_POST['email']
        );
        // преобразуем в json
        $json = json_encode($array);
        // путь к файлу users.json
        $json_path = $_SERVER["DOCUMENT_ROOT"] . '/main/users.json';
        // добавляем пользователя в users.json

        // проверяем файл на наличие данных. если есть - то добавляем новые
        if (!file_get_contents($json_path)) {
            file_put_contents($json_path, "[" . $json . "]");
        } else {
            $temp = file_get_contents($json_path);
            $temp = substr($temp, 0, -1);
            $temp .= ",\n" . $json . "]";
            file_put_contents($json_path, $temp);
        }
    } else
        $answer = 'Пароли не совпадают!';
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
                <h1><?=$answer ?></h1>
            </div>
        </div>

        <?php require_once $footer_path; ?>

    </div>
</body>

</html>