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
        ?>
          <div class="cat">
            <img src="<?= $currentImage ?>" alt="">
            <p class="categ"><a href="/products/product.php?id=<?= $currentID ?>"><?= $currentName ?></a></p>
          </div>
        <?php
        }
        ?>
      </div>
    </div>

    <?php require_once $footer_path; ?>

  </div>

</body>

</html>