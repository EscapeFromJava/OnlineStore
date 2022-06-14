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
  <title>DEATHHADDER PRO V2</title>
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
</head>

<body>

  <div class="container">

    <?php require_once $header_path; ?>

    <div class="content">
      <h1 id="block_h1"><?= $currentName ?></h1>

      <a href="<?= $currentImage ?>" target="_blank"><img src="<?= $currentImage ?>" alt="DEATHHADDER PRO V2"></a>

      <p>НЕСРАВНЕННАЯ ЭРГОНОМИКА. БЕЗ ОГРАНИЧЕНИЙ</p>
      <p class="short_desc"><?= $currentShortDescription ?></p>
      <div class="f_price">
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
          <td>Slow</td>
          <td>RB-30</td>
          <td>белая</td>
          <td>USB 2.0</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Middle</td>
          <td>RB-70</td>
          <td>3-х цветная</td>
          <td rowspan="2">3xAAA</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Fast</td>
          <td>SRT-25</td>
          <td rowspan="2">RGB</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Turbo</td>
          <td>SRT++ 99</td>
          <td>Li-ion</td>
        </tr>
      </table>
      <ul class="spec">
        <li>Оптический сенсор Razer Focus+ с настоящим разрешением 20 000 DPI с точностью разрешения 99,6%</li>
        <li>До 650 дюймов в секунду (IPS) / ускорение 50 G</li>
        <li>Расширенная настройка расстояния отрыва / посадки</li>
        <li>Оптические переключатели Razer ™ для мышей с долговечностью до 70 млн кликов</li>
        <li>Двойная беспроводная связь - Razer HyperSpeed ​​(2,4 ГГц) и BLE</li>
        <li>(7 + 1) независимо программируемых кнопок</li>
        <li>Ножки для мыши из 100% фторопласта(PTFE), толщиной 0,8 мм</li>
        <li>Эргономичный дизайн для правой руки с текстурированными боковыми вставками.</li>
        <li>Тактильное колесо прокрутки игрового уровня</li>
        <li>Регулировка чувствительности на лету (настройки по умолчанию: 400/800/1600/3200/6400)</li>
        <li>Расширенная встроенная память (4 + 1 профиля)</li>
        <li>Поддержка Razer Synapse 3</li>
        <li>Подсветка Razer Chroma™ с настройкой 16,8 млн цветовых оттенков</li>
        <li>Синхронизация подсветки с другими устройствами</li>
        <li>Кабель Speedflex 1,8 м для зарядки и проводного подключения</li>
        <li>Совместимость с док-станцией Razer для зарядки мыши</li>
        <li>Срок службы батареи: около 70 часов с HyperSpeed ​​Wireless, 120 часов с BLE (при работе без подсветки, время
        </li>
        <li>автономной работы зависит от настроек использования)</li>
        <li>Приблизительный размер: 127,0 мм (длина) x 61,7 мм (ширина захвата) x 42,7 мм (высота)</li>
        <li>Приблизительный вес: 88 г(без передатчика)</li>
        <li>Совместима с Xbox One с базовыми настройками</li>
      </ul>

      <h3 id="block_h3">Подробное описание товара</h3>

      <div class="full_desc"><?= $currentDescription ?></div>

    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>