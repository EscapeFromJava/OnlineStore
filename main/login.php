<pre>
<?php
// считываем и пишем в массив
if (isset($_POST)) {
    $array = array(
        'login' => $_POST['login'],
        'password' => $_POST['password']
    );
}
// преобразуем в json
$json = json_encode($array) . "\n";
// путь к файлу users.json
$json_path = $_SERVER["DOCUMENT_ROOT"] . '/main/users.json';
// добавляем пользователя в users.json
file_put_contents($json_path, $json, FILE_APPEND);

$data = file_get_contents($json_path);

$decodeArray = json_decode($json_path, true);
print $decodeArray;

// $data = json_decode($json_path, true);



?>
</pre>

<a href="/profile/login.php">Назад</a>