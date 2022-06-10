<?php

$arMenu = [
  [
    "name" => "Главная",
    "link" => "/index.php"
  ],
  [
    "name" => "Каталог",
    "link" => "/catalog.php"
  ],
  [
    "name" => "Контакты",
    "link" => "/contacts.php"
  ]
];

?>

<div class="header">
  <div class="logo"><img src="/img/logo.png" alt="logo"></div>
  <ul class="menu">
    <?php
    foreach ($arMenu as $item) { ?>
      <li><a href="<?= $item["link"] ?>"><?= $item["name"] ?></a></li>
    <?php } ?>
  </ul>
</div>

<?php

//работа с сессиями
session_start();

// $_SESSION[""];

//работа с Cookies
$visit_count = 1;
if (isset($_SESSION["visit_count"])) {
  $visit_count = $_SESSION["visit_count"] + 1;
}
$_SESSION["visit_count"] = $visit_count;

print "Кол-во посещений: " . $visit_count;

// if (isset($_COOKIE["visit_count"])) {
//     $visit_count += $_COOKIE["visit_count"];
// }

// setcookie("visit_count", $visit_count, strtotime("+ 30 days"));
// $_COOKIE["visit_count"];

?>