<?php
include '../main/paths.php';
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');
$productId = (int)$_GET["id"];
if ($productId > 0) {
    $sql = "SELECT * FROM products WHERE ID = {$productId};";
    $result = mysqli_query($link, $sql);
    $arProduct = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $currentID = $arProduct['ID'];
    $currentName = $arProduct['NAME'];
    $currentShortDescription = $arProduct['SHORT_DESCRIPTION'];
    $currentSpecifications = $arProduct['SPECIFICATIONS'];
    $currentDescription = $arProduct['DESCRIPTION'];
    $currentImage = $arProduct['IMAGE'];
    $currentPrice = $arProduct['PRICE'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $currentName ?></title>
    <link rel="stylesheet" href="/style/dist/main.css">
    <link rel="stylesheet" href="/style/dist/normalize.css">
</head>

<body>
    <div class="container">

        <?php require_once $header_path; ?>

        <div class="content">

            <h1 id="block_h1"><?= $currentName ?></h1>

            <a href="<?= $currentImage ?>" target="_blank"><img src="<?= $currentImage ?>" alt="<?= $currentName ?>"></a>

            <p class=" short_desc"><?= $currentShortDescription ?></p>

            <div class="f_price">
                <p>Цена: <?= $currentPrice ?> рублей</p>
            </div>

            <a href="/products/buy.php?product=<?= $currentID ?>" class="button_buy">Купить</a>

            <h2 id="block_h2">Характеристики товара</h2>
            <?= $currentSpecifications ?>

            <h3 id="block_h3">Подробное описание товара</h3>
            <div class="full_desc"><?= $currentDescription ?></div>

        </div>

        <?php require_once $footer_path; ?>

    </div>
</body>

</html>