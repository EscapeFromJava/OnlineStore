<?php
include 'main/paths.php';
include 'main/functions.php';
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

    <?php require_once $header_path; ?>

    <div class="content">
      <div class="main">
        <h1>GADJET MARKET</h1>
        <h2>Интернет-магазин компьютеров и компьютерных комплектующих</h2>

        <?php

        save_basket();

        ?>

      </div>
    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>