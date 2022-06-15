<?php 
$url = $_SERVER['REQUEST_URI'];
$currentID = stristr($url, '/id=');
$currentID = str_replace('/id=', '', $currentID);

require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');
$sql = "SELECT * FROM products WHERE ID = {$currentID};";
$result = mysqli_query($link, $sql);

$arProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($arProducts as $key => $value) {
    $currentID = $arProducts[$key]['ID'];
    $currentName = $arProducts[$key]['NAME'];
    $currentShortDescription = $arProducts[$key]['SHORT_DESCRIPTION'];
    $currentSpecifications = $arProducts[$key]['SPECIFICATIONS'];
    $currentDescription = $arProducts[$key]['DESCRIPTION'];
    $currentImage = $arProducts[$key]['IMAGE'];
    $currentPrice = $arProducts[$key]['PRICE'];
  }
?>
