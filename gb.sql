-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2022 г., 23:49
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `session_id` text NOT NULL,
  `good_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `good_id`) VALUES
(97, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 1),
(98, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 2),
(99, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 3),
(102, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 7),
(103, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 14),
(104, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv', 2),
(105, 'kq7la3m11kqbfdri21mt3lsgdk85lecs', 3),
(106, 'kq7la3m11kqbfdri21mt3lsgdk85lecs', 2),
(110, 'kqj4b0qgj5i2h1alg2u6i62ue7n2l8p4', 1),
(119, '8ekuar4llggknvusu25bsaa6o9h01a5l', 7),
(120, '8ekuar4llggknvusu25bsaa6o9h01a5l', 14),
(121, '8ekuar4llggknvusu25bsaa6o9h01a5l', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Small brown cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 9, '01.jpg'),
(2, 'Black cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 20, '02.jpg'),
(3, 'White cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 15, '03.jpg'),
(4, 'Small grey cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 10, '04.jpg'),
(5, 'Winter and cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 17, '05.jpg'),
(6, 'Playing cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 6, '06.jpg'),
(7, 'Stupid cat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 43, '07.jpg'),
(8, 'Сat with glasses', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae magni iure repellendus officiis sapiente assumenda rerum unde. Hic modi repudiandae debitis nemo eius, ipsum cumque nam, dolores sed laborum maxime!', 24, '08.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `views`) VALUES
(1, '01.jpg', 5),
(2, '02.jpg', 7),
(3, '03.jpg', 8),
(4, '04.jpg', 8),
(5, '05.jpg', 3),
(6, '06.jpg', 2),
(7, '07.jpg', 3),
(8, '08.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` int NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`) VALUES
(1, 'Светлана', 54332, 'v73ilhelcmt234u2r7u1m4h9fo39p2mv'),
(2, 'Влад', 1111, 'kq7la3m11kqbfdri21mt3lsgdk85lecs'),
(8, 'Дмитрий', 12345, '8ekuar4llggknvusu25bsaa6o9h01a5l');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Клавиатура', 'Удобная клавиатура для ввода информации.', 500, 'klava.jpg'),
(2, 'Шуруповерт', 'Мощный и надежный шуруповерт для ремонта.', 4750, 'shurik.jpg'),
(3, 'Умная розетка', 'Отличный инструмент для организации умного дома.', 890, 'rozetka.jpg'),
(4, 'Флеш-накопитель', 'Качественная флешка для хранения и передачи вашей информации.', 730, 'flash.jpg'),
(7, 'Мышка', 'Компьютерная мышь', 500, 'mishka.jpg'),
(14, 'Коврик', 'Коврик для компьютерной мыши', 300, 'kovrik_mishka.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'admin', '$2y$10$KeSoi3Zcbr7G6X1chgOrfOAjJMVsmFlfmc/CLjyaJNbyjMx.TGdDW'),
(5, 'user', '$2y$10$8s7n4ZC/VrqriSwRLZlrLeZSrPpOHW7c05SXr4gM4dLR8h0vW5Ygi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
