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
  <title>KRAKEN MULTI-PLATFORM GREEN</title>
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
</head>

<body>

  <div class="container">

    <?php require_once $header_path; ?>

    <div class="content">
      <h1 id="block_h1"><?= $currentName ?></h1>

      <a href="<?= $currentImage ?>" target="_blank"><img src="<?= $currentImage ?>" alt="KRAKEN MULTI-PLATFORM GREEN"></a>

      <p>ОБНОВЛЕННАЯ КУЛЬТОВАЯ ИГРОВАЯ ГАРНИТУРА</p>
      <p class=" short_desc"><?= $currentShortDescription ?></p>
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
          <td>Чувствительность динамиков, Ом</td>
          <td>Подсветка</td>
          <td>Питание</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Silent</td>
          <td>30</td>
          <td>белая</td>
          <td>USB 2.0</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Normal</td>
          <td>40</td>
          <td>3-х цветная</td>
          <td rowspan="2">3xAAA</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Loud</td>
          <td>55</td>
          <td rowspan="2">RGB</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Loud + BASS</td>
          <td>80</td>
          <td>Li-ion</td>
        </tr>
      </table>
      <ul class="spec">
        <li>Тип: Полноразмерные закрытые наушники</li>
        <li>Диапазон частот: 12 – 28 000 Гц</li>
        <li>Сопротивление при 1 кГц: 32 Ом</li>
        <li>Чувствительность при 1 кГц: 109±3 дБ</li>
        <li>Мощность на входе: 30 мВт (макс.)</li>
        <li>Динамики: 50 мм, с неодимовыми магнитами</li>
        <li>Внутренний диаметр чашки наушника: 54 x 65 мм</li>
        <li>Тип соединения: аналоговый разъем 3,5 мм, совмещенный аудио+микрофон</li>
        <li>Длина кабеля: 1,3 м</li>
        <li>Длина кабеля удлинителя-переходника с раздельными разъемами аудио/микрофон: 2 м</li>
        <li>Тип амбушюр: Овальные амбушюры: полностью охватывают ухо, наполнены охлаждающим гелевым материалом. Отлично
          подходят</li>
        <li>для длительного комфортного использования наушников.</li>
        <li>Примерный вес: 322 г</li>
        <li>Тип микрофона: Электретный конденсаторный микрофон, выдвижной на гибкой штанге</li>
        <li>Диапазон частот: 100 – 10 000 Гц</li>
        <li>Отношение сигнал-шум: 60 дБ</li>
        <li>Чувствительность при 1 кГц: -45 ± 3 дБ</li>
        <li>Диаграмма направленности: однонаправленный конденсаторный микрофон ECM</li>
      </ul>

      <h3 id="block_h3">Подробное описание товара</h3>

      <div class="full_desc"><?= $currentDescription ?></div>
    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>