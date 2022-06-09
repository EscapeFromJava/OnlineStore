<?php
  include 'main/menu.php';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты</title>
  <link rel="stylesheet" href="/style/dist/main.css">
  <link rel="stylesheet" href="/style/dist/normalize.css">
  <style>
    form {
      float: left;
    }
  </style>
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
      <form action="">
        <fieldset>
          <legend>НАПИШИТЕ НАМ</legend>
          <p><input class="field" type="name" placeholder="Ваше имя:"></p>
          <p><input class="field" type="phone" placeholder="Телефон:"></p>
          <p>
            <center> Не звонить?<input type="checkbox"></center>
          </p>
          <p><input class="field" type="email" placeholder="E-mail:"></p>
          <p><select name="topic">
              <option svalue="" disabled selected>Выберите тему</option>
              <option value="mo">Сделать заказ</option>
              <option value="ss">Предложения и пожелания</option>
              <option value="oth">Другое</option>
            </select></p>
          <p><textarea class="area" name="comment" cols="40" rows="11" placeholder="Комментарий:"></textarea></p>
          <p>
            <center>
              <input type="submit" value="Отправить">
              <input type="reset" value="Очистить">
            </center>
          </p>
        </fieldset>
      </form>

      <fieldset>
        <legend>КАК НАС НАЙТИ</legend>
        <p>Телефон: 8-800-800-80-80</p>
        <p>Адрес: Россия, Санкт-Петербург, Дворцовая площадь</p>
        <p>E-mail: gadjet.market@info.com</p>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af3bea407f9434bd7169e2abfa974108951947e88e3fbd629839a2b7e4b9f4a49&amp;width=100%&amp;height=374&amp;lang=ru_RU&amp;scroll=true"></script>
      </fieldset>
    </div>

    <div class="footer">
      <p>&copy;"Все права защищены"</p>
    </div>

  </div>

</body>

</html>