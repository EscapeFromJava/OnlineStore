<?php
  include 'main/menu.php';
?><!DOCTYPE html>
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

    <div class="header">
      <div class="logo"><img src="/img/logo.png" alt="logo"></div>
      <ul class="menu">
        <?php
        foreach ($arMenu as $item) { ?>
          <li><a href="<?= $item["link"] ?>"><?= $item["name"] ?></a></li>
        <?php } ?>
      </ul>
    </div>

    <div class="content">
      <div class="category" style="text-align: center;">
        <div class="cat_keyboard">
          <img src="/img/blackwidow-v3-mini-hyperspeed-phantom.jpg" alt="Blackwidow v3 Mini Hyperspeed Phantom">
          <p class="categ"><a href="/products/keyboard/blackwidow-v3-mini-hyperspeed-phantom.php">Клавиатура Blackwidow v3 Mini Hyperspeed Phantom</a></p>
        </div>

        <div class="cat_mouse">
          <img src="img/deathadder-pro-v2.jpg" alt="Deathhadder Pro V2">
          <p class="categ"><a href="/products/mouse/deathadder-pro-v2.php">Мышь DEATHHADDER PRO V2</a></p>
        </div>

        <div class="cat_headphone">
          <img src="/img/kraken-multi-platform-green.jpg" alt="Deathhadder Pro V2">
          <p class="categ"><a href="/products/headphone/kraken-multi-platform-green.php">Наушники KRAKEN MULTI-PLATFORM
              GREEN</a></p>
        </div>
      </div>
    </div>

    <div class="footer">
      <p>&copy;"Все права защищены"</p>
    </div>

  </div>

</body>

</html>