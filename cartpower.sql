-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июн 22 2022 г., 13:13
-- Версия сервера: 5.7.33
-- Версия PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cartpower`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `task` text NOT NULL,
  `image` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `status`, `task`, `image`, `name`, `email`) VALUES
(1, 0, 'test', '62b3146debc3c.jpg', 'test', 'test@gmail.com'),
(2, 1, 'Cart-Power â€” ÑÑ‚Ð¾ ÐºÐ¾Ð¼Ð°Ð½Ð´Ð° Ð¸Ð· 35+ Ð¿Ñ€Ð¾Ñ„ÐµÑÑÐ¸Ð¾Ð½Ð°Ð»Ð¾Ð² Ñ Ð±Ð¾Ð³Ð°Ñ‚Ñ‹Ð¼ Ð¾Ð¿Ñ‹Ñ‚Ð¾Ð¼ Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹. ÐœÑ‹ â€” Ð·Ð¾Ð»Ð¾Ñ‚Ñ‹Ðµ Ð¿Ð°Ñ€Ñ‚Ð½ÐµÑ€Ñ‹ CS-Cart, Ñ‚Ð¾ ÐµÑÑ‚ÑŒ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð½Ð¾ Ñ€Ð°Ð·Ð±Ð¸Ñ€Ð°ÐµÐ¼ÑÑ Ð² Ñ‚Ð¾Ð½ÐºÐ¾ÑÑ‚ÑÑ… Ñ€Ð°Ð±Ð¾Ñ‚Ñ‹ Ñ ÑÑ‚Ð¾Ð¹ Ð¿Ð»Ð°Ñ‚Ñ„Ð¾Ñ€Ð¼Ð¾Ð¹. Ð—Ð°ÐºÐ°Ð·Ñ‹Ð²Ð°Ñ Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÑƒ, ÐºÐ°ÑÑ‚Ð¾Ð¼Ð¸Ð·Ð°Ñ†Ð¸ÑŽ Ð¸Ð»Ð¸ Ð¾Ð±ÑÐ»ÑƒÐ¶Ð¸Ð²Ð°Ð½Ð¸Ðµ Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚-Ð¼Ð°Ð³Ð°Ð·Ð¸Ð½Ð° Ñƒ Ð½Ð°Ñ, Ð²Ñ‹ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚Ðµ Ð½Ð°Ð¸Ð»ÑƒÑ‡ÑˆÐ¸Ð¹ Ñ€ÐµÐ·ÑƒÐ»ÑŒÑ‚Ð°Ñ‚ Ð¸ Ð½Ðµ Ð¿Ð¾Ð¶Ð°Ð»ÐµÐµÑ‚Ðµ Ð¾ Ð²Ð»Ð¾Ð¶ÐµÐ½Ð½Ñ‹Ñ… Ð´ÐµÐ½ÑŒÐ³Ð°Ñ….\r\n\r\n- 35 ÑÑ‚Ñ€Ð°Ð½,\r\n- 450+ Ð¿Ñ€Ð¾ÐµÐºÑ‚Ð¾Ð² Ð½Ð° CS-Cart,\r\n- 3 650 Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ð½Ð½Ñ‹Ñ… Ð¼Ð¾Ð´Ð¸Ñ„Ð¸ÐºÐ°Ñ†Ð¸Ð¹,\r\n- 140+ Ð³Ð¾Ñ‚Ð¾Ð²Ñ‹Ñ… Ñ€ÐµÑˆÐµÐ½Ð¸Ð¹,\r\n- 10 Ð»ÐµÑ‚ Ð¾Ð¿Ñ‹Ñ‚Ð°,\r\n- 13 500 ÐºÐ»Ð¸ÐµÐ½Ñ‚Ð¾Ð².\r\n\r\nÐ•Ð¶ÐµÐ³Ð¾Ð´Ð½Ð¾ Cart-Power Ð·Ð°Ð½Ð¸Ð¼Ð°ÐµÑ‚ Ñ‚Ð¾Ð¿Ð¾Ð²Ñ‹Ðµ Ð¼ÐµÑÑ‚Ð° Ð² Ñ€Ð°Ð·Ð»Ð¸Ñ‡Ð½Ñ‹Ñ… ÑÐµÐ³Ð¼ÐµÐ½Ñ‚Ð°Ñ… Ð¸ ÐºÐ°Ñ‚ÐµÐ³Ð¾Ñ€Ð¸ÑÑ… Ð ÐµÐ¹Ñ‚Ð¸Ð½Ð³Ð° Ð ÑƒÐ½ÐµÑ‚Ð°.', '62b314f98fa85.jpg', 'Cart-Power', 'cartpower@gmail.com'),
(3, 0, 'Adobe Photoshop â€” Ð¼Ð½Ð¾Ð³Ð¾Ñ„ÑƒÐ½ÐºÑ†Ð¸Ð¾Ð½Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ð³Ñ€Ð°Ñ„Ð¸Ñ‡ÐµÑÐºÐ¸Ð¹ Ñ€ÐµÐ´Ð°ÐºÑ‚Ð¾Ñ€, Ñ€Ð°Ð·Ñ€Ð°Ð±Ð°Ñ‚Ñ‹Ð²Ð°ÐµÐ¼Ñ‹Ð¹ Ð¸ Ñ€Ð°ÑÐ¿Ñ€Ð¾ÑÑ‚Ñ€Ð°Ð½ÑÐµÐ¼Ñ‹Ð¹ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸ÐµÐ¹ Adobe Systems. Ð’ Ð¾ÑÐ½Ð¾Ð²Ð½Ð¾Ð¼ Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÐµÑ‚ Ñ Ñ€Ð°ÑÑ‚Ñ€Ð¾Ð²Ñ‹Ð¼Ð¸ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑÐ¼Ð¸, Ð¾Ð´Ð½Ð°ÐºÐ¾ Ð¸Ð¼ÐµÐµÑ‚ Ð½ÐµÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð²ÐµÐºÑ‚Ð¾Ñ€Ð½Ñ‹Ðµ Ð¸Ð½ÑÑ‚Ñ€ÑƒÐ¼ÐµÐ½Ñ‚Ñ‹.', '62b31549158d4.jpg', 'Adobe Photoshop', 'adobe@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$hyqEcZA0qdNHymQpVgokLej3NzaCXv1wcVsKs/Hw.wVF21Uei1J7S');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
