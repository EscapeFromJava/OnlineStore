-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2022 г., 22:17
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gadjet_market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL COMMENT 'ID заказа',
  `STATUS` varchar(50) NOT NULL COMMENT 'Статус',
  `DATE` datetime NOT NULL COMMENT 'Создание заказа',
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Заказы';

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL COMMENT 'ID',
  `NAME` varchar(100) NOT NULL COMMENT 'Название товара',
  `SHORT_DESCRIPTION` varchar(255) DEFAULT NULL COMMENT 'Кратное описание',
  `DESCRIPTION` text DEFAULT NULL COMMENT 'Описание',
  `PRICE` float NOT NULL COMMENT 'Цена',
  `IMAGE` varchar(255) NOT NULL COMMENT 'Изображение'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Товары';

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`ID`, `NAME`, `SHORT_DESCRIPTION`, `DESCRIPTION`, `PRICE`, `IMAGE`) VALUES
(1, 'Клавиатура RAZER BLACKWIDOW V3 MINI HYPERSPEED - PHANTOM EDITION', 'Достаточно компактная для любого окружения и достаточно универсальная для любых настроек - это Razer BlackWidow V3 Mini HyperSpeed. Наслаждайтесь безупречной игрой в элегантном корпусе с беспроводной 65% механической игровой клавиатурой с идеальным баланс', '<h4>65% ФОРМ-ФАКТОР</h4>\r\n        Для элегантной и компактной производительности\r\n        Без функционального ряда, домашнего кластера и цифрового блока, эта клавиатура похожа на 60% клавиатуру, но с\r\n        одним ключевым отличием - у нее все еще есть клавиши со стрелками. Сохраняя большую функциональность при\r\n        сохранении компактности, Razer BlackWidow V3 Mini HyperSpeed ​​идеально подходит для минималистичных или небольших\r\n        сетапов, где в приоритете пространство рабочего места.\r\n\r\n        <h4>ТЕХНОЛОГИЯ БЕСПРОВОДНОЙ СВЯЗИ RAZER™ HYPERSPEED</h4>\r\n        Для игр с минимальной задержкой\r\n        Эта беспроводная 65% механическая игровая клавиатура оснащена нашей самой передовой беспроводной технологией для\r\n        игр с малой задержкой и сверхчувствительностью ввода - это стало возможным благодаря оптимизированному протоколу\r\n        передачи данных, сверхбыстрой радиочастоте и плавному переключению частот в самых шумных средах, насыщенных\r\n        данными. Благодаря поддержке нескольких устройств упростите настройку своего сетапа, подключив беспроводную мышь и\r\n        клавиатуру к одному адаптеру - функцию, которую можно активировать в наших последних периферийных устройствах\r\n        Razer HyperSpeed.\r\n\r\n        <h4>3 ВИДА ПОДКЛЮЧЕНИЯ</h4>\r\n        БЕСПРОВОДНОЕ ПОДКЛЮЧЕНИЕ RAZER™ HYPERSPEED\r\n        Для непрерывных игр с минимальной задержкой\r\n\r\n        <h4>BLUETOOTH</h4>\r\n        Подключение и переключение между 3 устройствами\r\n\r\n        <h4>USB-C</h4>\r\n        Через съемный кабель ( идет в комплекте)\r\n\r\n        <h4>ПОДДЕРЖКА НЕСКОЛЬКИХ УСТРОЙСТВ RAZER™ HYPERSPEED</h4>\r\n        Оптимизируйте свой сетап и освободите порт USB, подключив беспроводную мышь и клавиатуру через один адаптер -\r\n        функцию, которую можно активировать в нашей последней линейке беспроводных устройств с поддержкой Razer\r\n        HyperSpeed.\r\n\r\n        <h4>МЕХАНИЧЕСКИЕ ПЕРЕКЛЮЧАТЕЛИ RAZER™</h4>\r\n        Эта беспроводная 65% механическая игровая клавиатура доступна в двух вариантах:\r\n\r\n        <h4>МЕХАНИЧЕСКИЕ ПЕРЕКЛЮЧАТЕЛИ RAZER™ GREEN</h4>\r\n        Слушайте и ощущайте приятную обратную связь при каждом нажатии клавиши с помощью щелкающего тактильного дизайна\r\n        переключателей, который предлагает оптимизированные точки срабатывания и сброса для повышения точности и\r\n        производительности во время игры.\r\n\r\n        <h4>МЕХАНИЧЕСКИЕ ПЕРЕКЛЮЧАТЕЛИ RAZER™ YELLOW</h4>\r\n        Эти линейные бесшумные переключатели обеспечивают чрезвычайно плавное нажатие клавиш без тактильного отклика и\r\n        включают звукоизоляцию, чтобы еще больше уменьшить и без того низкий звуковой профиль.\r\n\r\n        <h4>КОЛПАЧКИ КЛАВИШ С БОКОВОЙ РАЗМЕТКОЙ</h4>\r\n        Выберите модель клавиатуры с колпачками клавиш, которые подойдут вам, оба варианта кейкапов оснащены боковой\r\n        разметкой дополнительных функций для более удобного использования при выполнении команд и ориентирования в горячих\r\n        клавишах.\r\n\r\n        <h4>ABS КОЛПАЧКИ КЛАВИШ ДВОЙНОГО ЛИТЬЯ</h4>\r\n        Используя двойное литье, чтобы маркировка никогда не стиралась, колпачки клавиш этой беспроводной клавиатуры также\r\n        обладают очень толстыми стенками, что делает их чрезвычайно прочными, чтобы выдерживать длительное многократное\r\n        использование.\r\n\r\n        <h4>ОБНОВЛЕННЫЕ КЕЙКАПЫ RAZER PHANTOM</h4>\r\n        Независимо от того, хотите ли вы для вашего сетапа сдержанный вид или более яркую RGB подсветку, наш уникальный\r\n        дизайн колпачков клавиш позволит вам получить и то, и другое. С полупрозрачными сторонами, пропускающими больше\r\n        света, эти кейкапы раскрывают все сияние Razer Chroma™ RGB, сохраняя лаконичный черный вид в выключенном\r\n        состоянии.\r\n\r\n        <h4>ДО 200 ЧАСОВ АВТОНОМНОЙ РАБОТЫ</h4>\r\n        Наслаждайтесь длительной производительностью независимо от того, используети ли вы беспроводное подключение Razer™\r\n        HyperSpeed или Bluetooth, и минимизируйте время простоя благодаря зарядке, которая с нуля до полной составляет\r\n        чуть менее 5 часов.\r\n\r\n        <h4>ПОДДЕРЖКА RAZER CHROMA™ RGB</h4>\r\n        Благодаря 16,8 миллионам цветов и набору эффектов, синхронизируйте подсветку для каждой клавиши с остальной частью\r\n        вашего сетапа и наслаждайтесь большим погружением, поскольку подсветка динамически реагирует на более чем 150\r\n        интегрированных игр.', 12000, '/img/blackwidow-v3-mini-hyperspeed-phantom.jpg'),
(3, 'Мышь DEATHHADDER PRO V2', 'Более чем 10 миллионов проданных устройств, самая успешная игровая мышь всех времен Razer DeathAdder обеспечивает безграничный комфорт. Встречайте Razer DeathAdder V2 Pro - беспроводную эргономичную игровую мышь, которая открывает новую эру господства бла', '<h4>БЕСПРОВОДНАЯ СВЯЗЬ RAZER™ HYPERSPEED</h4>\r\n        На 25% быстрее, чем любая другая доступная беспроводная технология, вы даже не почувствуете, что используете\r\n        беспроводную игровую мышь из-за ее высокой скорости передачи, минимальной задержки отклика и плавного переключения\r\n        частот в самых шумных, насыщенных данными средах.\r\n\r\n        <h4>ОПТИЧЕСКИЙ СЕНСОР RAZER™ FOCUS+</h4>\r\n        Наш новый улучшенный сенсор имеет лидирующее в отрасли разрешение 20000 точек на дюйм с точностью разрешения\r\n        99,6%, гарантируя, что даже самые малые движения этой беспроводной эргономичной игровой мыши будут постоянно\r\n        отслеживаться. Оснащенный интеллектуальными функциями датчик становится еще более точным, обеспечивая высокий\r\n        уровень точности для победоносных хедшотов в игре.\r\n\r\n        <h4>ОПТИЧЕСКИЕ ПЕРЕКЛЮЧАТЕЛИ RAZER™ 2-ГО ПОКОЛЕНИЯ ДЛЯ МЫШЕЙ</h4>\r\n        Благодаря улучшенной тактильной обратной связи каждый щелчок теперь ощущается и звучит более приятно, а\r\n        переключатели приводятся в действие с ведущим в отрасли временем отклика 0,2 миллисекунды. Поскольку больше не\r\n        требуется традиционный физический контакт, эта форма срабатывания устраняет необходимость в задержке срабатывания\r\n        дребезга и никогда не вызывает непреднамеренных щелчков, обеспечивая более точный контроль и безупречное\r\n        выполнение.\r\n\r\n        <h4>ДО 120 ЧАСОВ АВТОНОМНОЙ РАБОТЫ</h4>\r\n        Эта беспроводная эргономичная игровая мышь предлагает 3 режима подключения для адаптации к вашим потребностям: до\r\n        120 часов через Bluetooth для максимального использования, до 70 часов через беспроводное подключение Razer ™\r\n        HyperSpeed ​​для игр с малой задержкой или подключение через кабель Razer ™ Speedflex чтобы вы могли продолжить\r\n        игру даже во время зарядки.\r\n\r\n        <h4>ТОЧНО НАСТРАИВАЕМАЯ ТАКТИЛЬНОСТЬ КОЛЕСА ПРОКРУТКИ</h4>\r\n        Предлагая приятную обратную связь с отчетливым ощущением зубцов, колесо прокрутки также имеет более низкое\r\n        сопротивление прокрутки, которое кажется более легким и простым в использовании, поэтому переключение между\r\n        оружием и выполнение прыжков становится поистине естественным.\r\n\r\n        <h4>РАСШИРЕННАЯ ВСТРОЕННАЯ ПАМЯТЬ</h4>\r\n        Будьте готовы к сражением где угодно, имея до 5 сохраненных профилей, которые дают вам доступ к оптимальным\r\n        раскладкам клавиш, макросам и двойному вводу с помощью функции Razer Hypershift.\r\n\r\n        <h4>СОВМЕСТИМА С ЗАРЯДНОЙ ДОК-СТАНЦИЕЙ RAZER MOUSE DOCK CHROMA</h4>\r\n        Razer DeathAdder V2 Pro работает с той же док-станцией для мыши, которая используется для зарядки Razer Viper\r\n        Ultimate или Razer Basilisk Ultimate - идеальное обновление для вашей боевой станции RGB, которое можно приобрести\r\n        отдельно.\r\n\r\n        <h4>ТЕКСТУРИРОВАННЫЕ РЕЗИНОВЫЕ БОКОВЫЕ НАКЛАДКИ</h4>\r\n        Для более уверенных движений, мышь снабжена резиновыми накладками, которые полностью закрывают ее левую и правую\r\n        стороны и сформованы как часть корпуса, чтобы не отслаивались.\r\n\r\n        <h4>НОЖКИ ИЗ 100% ФТОРОПЛАСТА PTFE</h4>\r\n        Наслаждайтесь плавным перемещением мыши по любой поверхности с помощью ножек для мыши, изготовленных из чистейшего\r\n        фторопласта (PTFE) высочайшего качества.', 8000, '/img/deathadder-pro-v2.jpg'),
(4, 'Наушники KRAKEN MULTI-PLATFORM GREEN', 'С момента своего первого появления игровая гарнитура Razer Kraken завоевала репутацию культовой классики в игровом сообществе. Она оставила свой след в бесчисленных игровых событиях, соревнованиях и турнирах. В этой модели мы еще больше улучшили этого люб', '<h4>ЧИСТЫЙ ЗВУК С ТОЧНЫМ ПОЗИЦИОНИРОВАНИЕМ</h4>\r\n        Наушники Razer Kraken можно использовать совместно с программой для формирования виртуального объемного звука\r\n        7.1 surround sound, которая позволяет добиться точного позиционирования звука во время игры — вы сможете на слух\r\n        определять направление, где происходит активность противника, чтобы вовремя присоединиться к перестрелке.\r\n\r\n        <h4>ЧИСТЫЙ И МОЩНЫЙ ЗВУК</h4>\r\n        Наслаждайтесь превосходной четкостью звука и широкой звуковой сценой с глубокими, плотными басами. Теперь вы\r\n        сможете услышать каждую деталь: от тихих шагов крадущегося сзади противника до оглушительных сотрясающих вас\r\n        взрывов.\r\n\r\n        <h4>ОГОЛОВЬЕ МЯГЧЕ И ТОЛЩЕ</h4>\r\n        Мы улучшили обивку оголовья и сделали его еще толще, чтобы оно меньше давило на голову для максимально\r\n        продолжительного комфорта. Алюминиевый каркас Razer Kraken делает гарнитуру легкой, гибкой и чрезвычайно прочной.\r\n\r\n        <h4>ДОЛГАЯ ИГРА С КОМФОРТОМ</h4>\r\n        Чтобы поднять уровень комфорта на новый уровень, мы добавили амбушюры наполненные охлаждающим гелем, чтобы\r\n        уменьшить накопление тепла. Комбинация мягкой ткани и тонкой искусственной кожи обеспечивает превосходные ощущения\r\n        и отличную звукоизоляцию, что позволит вам наслаждаться игрой максимально долго.\r\n\r\n        <h4>УЛУЧШЕННЫЙ КАРДИОИДНЫЙ МИКРОФОН</h4>\r\n        Микрофон Razer Kraken имеет кардиоидную диаграмму направленности, благодаря чему ваш голос звучит четко и без\r\n        фоновых шумов. Она отсекает шумы сбоку и сзади микрофона, поэтому ваши товарищи по команде всегда будут слышать\r\n        вас громко и четко.\r\n\r\n        <p>\r\n          Охлаждающий гель: Уменьшает накопление тепла во время жаркой игры;\r\n          Скрытые каналы для дужек очков: Снижают давление очков;\r\n          Пена с эффектом памяти: Принимает комфортную форму головы любого геймера;\r\n          Теплообменная ткань: Обеспечивает теплообмен с более быстрым испарением пота.\r\n        </p>', 15000, '/img/kraken-multi-platform-green.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `FIO` varchar(255) NOT NULL COMMENT 'ФИО',
  `LOGIN` varchar(100) NOT NULL COMMENT 'Логин',
  `EMAIL` varchar(255) NOT NULL COMMENT 'Почта',
  `PASS_WORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Пользователи';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `FIO`, `LOGIN`, `EMAIL`, `PASS_WORD`) VALUES
(1, 'Админов Админ Админович', 'admin', 'admin@yandex.ru', '$2y$10$yQJy9BXHgLd/7ZJl.TOhKe/.6TbGepOJ1LfAET5v4hLHio62MdM4S'),
(4, 'Пользователь 1', 'user', 'user@user.ru', '$2y$10$PFb.oXyhaKhJPAG88SiyTed4toWTszSqeipl1ikaa75/hxqx79ueO'),
(13, 'admin', 'admin', 'admin@google.com', '$2y$10$JLXhm9G8DqJmgo4h9dhTH.Dhy4LvKBrs917b1bLMW4csKKtWfa3Je'),
(14, 'Петров Олег Владимирович', 'raynor', 'raynor@rambler.ru', '$2y$10$oDv.vHXuVLq3gaRdofLqmOhTCLNPVYkKjd8N9KrDbC0mO5G/s49Sy'),
(15, 'оператор', 'oper', 'operator@yandex.ru', '$2y$10$3VWyIkeoBv0UVbv05Hm4teNQUgj6j2BRloNkzydM7CHWe/V.nia1a');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID заказа';

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
