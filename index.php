<?php
include 'php/menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
  <title>GADJET MARKET</title>

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
      <div class="main">
        <h1>GADJET MARKET</h1>
        <h2>Интернет-магазин компьютеров и компьютерных комплектующих</h2>
      </div>
    </div>

    <div class="footer">
      <p>&copy;"Все права защищены"</p>
    </div>

  </div>

</body>

</html>