<?php
include '../main/paths.php';
session_start();
require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');
$productId = (int)$_GET["product"];
if ($productId > 0) {
    $sql = "SELECT ID, NAME, SHORT_DESCRIPTION, PRICE, IMAGE FROM products WHERE ID = {$productId};";
    $result = mysqli_query($link, $sql);
    $arProduct = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $arProduct["COUNT"] = @$_SESSION['BASKET'][$arProduct["ID"]]["COUNT"] ? $_SESSION['BASKET'][$arProduct["ID"]]["COUNT"] + 1 : 1;
    unset($arProduct["DESCRIPTION"]);
    $_SESSION['BASKET'][$arProduct["ID"]] = $arProduct;
}
$arBasket = $_SESSION['BASKET'];
$arTitle = [
    "NAME" => "Товар",
    "SHORT_DESCRIPTION" => "Описание",
    "PRICE" => "Цена",
    "IMAGE" => "Изображение",
    "COUNT" => "Количество"
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/dist/main.css">
    <link rel="stylesheet" href="/style/dist/normalize.css">
    <title>Корзина</title>
</head>

<body>
    <div class="container">

        <?php require_once $header_path; ?>

        <div class="content">
            <?php //print_r($arBasket); 
            ?>
            <table width="100%" id="basket">
                <thead>
                    <tr>
                        <?php
                        $arProduct = current($arBasket);
                        foreach ($arProduct as $key => $field) {
                            if ($key == "ID") continue;
                            $title = $arTitle[$key]; ?>
                            <th class="<?= $key ?>"><?= $title ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <?php foreach ($arBasket as $arProduct) {
                ?>
                    <tr>
                        <?php foreach ($arProduct as $key => $field) {
                            if ($key == "ID") continue;
                        ?>
                            <td class="<?= $key ?>"><?= $field ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <?php require_once $footer_path; ?>

    </div>
</body>

</html>