-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 23 2024 г., 17:20
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `short_url`
--

-- --------------------------------------------------------

--
-- Структура таблицы `urls`
--

CREATE TABLE `urls` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `short` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `urls`
--

INSERT INTO `urls` (`id`, `url`, `short`) VALUES
(9, 'https://www.google.com/', '7er41018'),
(10, 'https://vk.com/friends', '2rr41018'),
(11, 'https://developer.mozilla.org/en-US/docs/Web/API/Element/append', 'x6r41018'),
(12, 'https://html5css.ru/howto/howto_js_copy_clipboard.php', 'm0r41018'),
(13, 'https://htmlbook.ru/html/embed/hidden', 'zut41018'),
(14, 'https://bootstrap-4.ru/articles/cheatsheet/', 'j6y41018'),
(15, 'https://www.youtube.com/watch?v=_qmU3tUQTBk', '0gu41018'),
(16, 'http://localhost/0gu41018', 'yju41018'),
(17, 'https://htmlbook.ru/html/BUTTON', 'lku41018');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
