<?php
include 'main/paths.php';

require_once($_SERVER["DOCUMENT_ROOT"] . '/main/dbconnector.php');
$sql = "SELECT * FROM products;";
$result = mysqli_query($link, $sql);

$arProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог</title>
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
</head>

<body>

  <div class="container">

    <?php require_once $header_path; ?>

    <div class="content">
      <div class="category" style="text-align: center;">

        <?php
        foreach ($arProducts as $key => $value) {
          $currentID = $arProducts[$key]['ID'];
          $currentName = $arProducts[$key]['NAME'];
          $currentImage = $arProducts[$key]['IMAGE'];
          $link = str_replace('/img', '/products', $currentImage);
          $link = substr($link, 0, -3);
          $link .= 'php';
        ?>
          <div class="cat">
            <img src="<?= $currentImage ?>" alt="">
            <p class="categ"><a href="<?= $link . '/id=' . $currentID?>"><?= $currentName ?></a></p>
          </div>
        <?php
        }
        ?>

        <!-- <div class="cat_keyboard">
          <img src="/img/blackwidow-v3-mini-hyperspeed-phantom.jpg" alt="Blackwidow v3 Mini Hyperspeed Phantom">
          <p class="categ"><a href="/products/blackwidow-v3-mini-hyperspeed-phantom.php">Клавиатура Blackwidow v3 Mini Hyperspeed Phantom</a></p>
        </div>

        <div class="cat_mouse">
          <img src="img/deathadder-pro-v2.jpg" alt="Deathhadder Pro V2">
          <p class="categ"><a href="/products/deathadder-pro-v2.php">Мышь DEATHHADDER PRO V2</a></p>
        </div>

        <div class="cat_headphone">
          <img src="/img/kraken-multi-platform-green.jpg" alt="Deathhadder Pro V2">
          <p class="categ"><a href="/products/kraken-multi-platform-green.php">Наушники KRAKEN MULTI-PLATFORM
              GREEN</a></p>
        </div> -->
      </div>
    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>