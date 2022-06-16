<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');

$pi = 3.14;
define('current_date', date("Y-m-d"));

/**
 * Складывает 2 числа
 * @var a int 1 число
 * @var b int 2 число
 * @return int - сумма двух чисел
 */
function sum($a, $b)
{
    return ($a + $b);
}

function getAreaCircle($r)
{
    global $pi;
    return ($pi * $r * $r);
}

function getAreaRectangle($a, $b)
{
    return ($a * $b);
}

function getFeedbackData()
{
    $filepath = $_SERVER["DOCUMENT_ROOT"] . "/main/data/" . current_date . ".txt";
    return @file_get_contents($filepath);
}

function printFeedbackData()
{
    print_r(getFeedbackData());
}

function save_basket()
{
    global $link;
    $arUserLogin = $_SESSION["login"];
    $sql = "SELECT ID FROM users WHERE LOGIN = '{$arUserLogin}';";
    $result = mysqli_query($link, $sql);
    $arUser = mysqli_fetch_array($result);
    $expDate = date("Y-m-d H:i:s", strtotime('+30 day'));
    $sql = "INSERT INTO basket SET USER_ID = {$arUser['ID']}, DATE = '{$expDate}'";
    $result =  mysqli_query($link, $sql);
    if ($result == false) {
        print("Произошла ошибка при выполнении запроса<br>");
        print mysqli_error($link);
    } else {
        $basketID = mysqli_insert_id($link);
        $success = save_basket_product($basketID);
        if ($success) {
            unset($_SESSION["BASKET"]);
        } else {
            print("Корзина не сохранена<br>");
        }
    }
}

function save_basket_product($basketID)
{
    global $link;
    $arBasket = $_SESSION["BASKET"];
    foreach ($arBasket as $arProduct) {
        $productID = $arProduct["ID"];
        $sql = "INSERT INTO product_basket SET BASKET_ID = {$basketID}, PRODUCT_ID = {$productID}";
        $result =  mysqli_query($link, $sql);
        if ($result == false) {
            print("ошибка");
            print mysqli_error($link);
            return false;
        }
    }
    return true;
}

function save_order($arFields) {
    global $link;
    $arUserLogin = $_SESSION["login"];
    $sql = "SELECT ID FROM users WHERE LOGIN = '{$arUserLogin}';";
    $result = mysqli_query($link, $sql);
    $arUser = mysqli_fetch_array($result);

    $basketID = save_basket();
    $addDate = date("Y-m-d H:i:s");
    $sql = "INSERT INTO orders SET USER_ID = {$arUser['ID']}, DATE = '{$addDate}', ADDRESS = '{$arFields['ADDRESS']}';";
    $result =  mysqli_query($link, $sql);
    if ($result == false) {
        print("Произошла ошибка при выполнении запроса<br>");
        print mysqli_error($link);
    } else {
        $orderID = mysqli_insert_id($link);
        return "Заказ № '{$orderID}' создан!<br>";
    }
}