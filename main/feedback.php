<pre>
<?php
define('current_date', date("Y-m-d"));
implode("-", $_GET);
explode('.', '1.2.3.4.5');

//print_r($_GET);
$file_path = $_SERVER["DOCUMENT_ROOT"] . "/main/data/" . current_date . ".txt";
$data = '*** ' . date("H:i:s") . " ***\n";
// print_r($data);
foreach ($_REQUEST as $name => $val) {
    $data .= $name . '=' . $val . "\n";
}
// print $data;
$result = file_put_contents($file_path, $data, FILE_APPEND);
var_dump($result);
?>
<pre>

<a href="/contacts.php">Назад</a>