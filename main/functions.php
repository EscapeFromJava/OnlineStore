<?php

$pi = 3.14;

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
    
?>