<?php 
$url = $_SERVER['REQUEST_URI'];
$currentID = stristr($url, '/id=');
$currentID = str_replace('/id=', '', $currentID);

require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');
$sql = "SELECT * FROM products WHERE ID = {$currentID};";
$result = mysqli_query($link, $sql);

$arProduct = mysqli_fetch_array($result, MYSQLI_ASSOC);

$currentID = $arProduct['ID'];
$currentName = $arProduct['NAME'];
$currentShortDescription = $arProduct['SHORT_DESCRIPTION'];
$currentDescription = $arProduct['DESCRIPTION'];
$currentImage = $arProduct['IMAGE'];
$currentPrice = $arProduct['PRICE'];

?>
