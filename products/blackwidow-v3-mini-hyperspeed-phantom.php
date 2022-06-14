<?php
include '../main/paths.php';
require_once '../main/productSQL.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAZER BLACKWIDOW V3 MINI HYPERSPEED - PHANTOM EDITION</title>
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
</head>

<body>

  <div class="container">

    <?php require_once $header_path; ?>

    <div class="content">
      <h1 id="block_h1"><?= $currentName ?></h1>

      <a href="<?= $currentImage ?>" target="_blank"><img src="<?= $currentImage ?>" alt="RAZER BLACKWIDOW V3 MINI HYPERSPEED - PHANTOM EDITION"></a>

      <p>СВОБОДА В ФОРМЕ</p>
      <p class="short_desc"><?= $currentShortDescription ?></p>
      <div class="price">
        <p>Цена: <?= $currentPrice ?> рублей</p>
      </div>
      <a href="../buy.php?product=<?= $currentID ?>" class="button_buy">Купить</a>

      <h2 id="block_h2">Характеристики товара</h2>

      <table class="descrip">
        <col style="width: 4%;">
        <col style="width: 24%;">
        <col style="width: 24%;">
        <col style="width: 24%;">
        <col style="width: 24%;">
        <tr style="color: rgb(255, 255, 255); background-color: rgb(0, 48, 0);">
          <td>№</td>
          <td>Модель</td>
          <td>Тип переключателей</td>
          <td>Подсветка</td>
          <td>Питание</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Base</td>
          <td>мембранные</td>
          <td>белая</td>
          <td>USB 2.0</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Start</td>
          <td>механические</td>
          <td>3-х цветная</td>
          <td rowspan="2">3xAAA</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Expert</td>
          <td>сенсорные</td>
          <td rowspan="2">RGB</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Maestro</td>
          <td>телескопические</td>
          <td>Li-ion</td>
        </tr>
      </table>
      <ul class="spec">
        <li>Механические переключатели Razer™</li>
        <li>Элегантный и компактный 65% форм-фактор</li>
        <li>Беспроводное подключение Razer™ HyperSpeed (2,4 ГГц), Bluetooth или USB-C</li>
        <li>Настраиваемая подсветка Razer Chroma™ RGB с 16,8 миллионами цветовых оттенков</li>
        <li>Гибридная встроенная память и облачное хранилище - до 5 профилей</li>
        <li>ABS колпачки клавиш двойного литья</li>
        <li>Поддержка нескольких устройств Razer™ HyperSpeed ​</li>
        <li>Ресурс нажатия клавиш 80 миллионов</li>
        <li>N-key roll over, любое количество одновременно нажатых клавиш</li>
        <li>Полностью программируемые клавиши с записью макросов на лету</li>
        <li>Опция игрового режима</li>
        <li>Частота опроса 1000 Гц (Ultrapolling)</li>
        <li>Алюминиевый корпус</li>
      </ul>

      <h3 id="block_h3">Подробное описание товара</h3>

      <div class="full_desc"><?= $currentDescription ?></div>
    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>