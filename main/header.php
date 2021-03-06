<?php
if (!isset($_SESSION)) {
  session_start();
}

$arMenu = [
  [
    "name" => "Регистрация",
    "link" => "/profile/registration.php"
  ],
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

if (isset($_SESSION['name'])) {
  $arMenuLogin = [
    [
      "name" => $_SESSION['name'] . ' [Выход]',
      "link" => "/profile/logout.php"
    ],
    [
      "name" => 'Корзина',
      "link" => "/products/buy.php"
    ],
    [
      "name" => 'Оформить заказ',
      "link" => "/products/get_order.php"
    ]
  ];
} else {
  $arMenuLogout = [
    [
      "name" => 'Авторизация',
      "link" => "/profile/login.php"
    ]
  ];
}

if (isset($_SESSION['name'])) {
  $arMenu = array_merge($arMenu, $arMenuLogin);
} else {
  $arMenu = array_merge($arMenu, $arMenuLogout);
}

?>

<div class="header">
  <div class="logo"><img src="/img/logo.png" alt="logo"></div>
  <ul class="menu">
    <?php
    foreach ($arMenu as $item) {
      if ($item["name"] == "Регистрация") { ?>
        <li><a style="color: yellow;" href="<?= $item["link"] ?> "><?= $item["name"] ?></a></li>
      <?php } else if ($item["name"] == "Авторизация") { ?>
        <li><a style="color: red;" href="<?= $item["link"] ?> "><?= $item["name"] ?></a></li>
      <?php } else if ($item["name"] == "Корзина") { ?>
        <li><a style="color: purple;" href="<?= $item["link"] ?> "><?= $item["name"] ?></a></li>
      <?php } else { ?>
        <li><a href="<?= $item["link"] ?>"><?= $item["name"] ?></a></li>
    <?php }
    } ?>
  </ul>
</div>

<?php

//========================работа с сессиями
// session_start();

// $_SESSION[""];

//========================работа с Cookies
// $visit_count = 1;
// if (isset($_SESSION["visit_count"])) {
//   $visit_count = $_SESSION["visit_count"] + 1;
// }
// $_SESSION["visit_count"] = $visit_count;

// print "Кол-во посещений: " . $visit_count;

// if (isset($_COOKIE["visit_count"])) {
//     $visit_count += $_COOKIE["visit_count"];
// }

// setcookie("visit_count", $visit_count, strtotime("+ 30 days"));
// $_COOKIE["visit_count"];

//========================хэширование

// $password = "kolokol!23";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// print $hash;
// получили из базы $hash
// $isVerify = password_verify($password, $hash);
// print $isVerify;

?>