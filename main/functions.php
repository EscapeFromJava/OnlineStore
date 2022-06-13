<?php

$pi = 3.14;
define('current_date', date("Y-m-d"));

/**
 * Складывает 2 числа
 * @var a int 1 число
 * @var b int 2 число
 * @return int - сумма двух чисел
 */
    function sum ($a, $b) {
        return ($a + $b);
    }

    function getAreaCircle ($r) {
        global $pi;
        return ($pi * $r * $r);
    }

    function getAreaRectangle ($a, $b) {
        return ($a * $b);
    }

    function getFeedbackData() {
        $filepath = $_SERVER["DOCUMENT_ROOT"] . "/main/data/" . current_date . ".txt";
        return @file_get_contents($filepath);
    }

    function printFeedbackData() {
        print_r(getFeedbackData());
    }    
?>