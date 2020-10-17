-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 17 2020 г., 21:31
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prise` bigint(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `balance` bigint(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `title`, `prise`, `description`, `balance`, `id_product`) VALUES
(1, 'product 1', 100, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1),
(2, 'product 2', 100, 'Lorem, ipsum dolor sit amet consectetur awwvefvwvrbtbbdipisicing elit. Quae, sequi.', 5100, 1),
(3, 'product 3', 100, 'Lorem, ipsum dolor sit amet cdfavdfvefwvwwrtbrtbtrbrgtbrtbwtebrbonsectetur adipisicing elit. Quae, sequi.', 5100, 1),
(4, 'product 4', 100, 'Lorem, ipsum dolor sit amet consectetuasdvasdvsdvasdvdvsdvsdasdvdavasdr adipisicing elit. Quae, sequi.', 5100, 1),
(5, 'product 5', 100, 'Loremwvevwevvwefvffv, ipsum dolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1),
(6, 'product 6', 100, 'Lorem, ipsum erferfewrferferwferfrwerfdolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1),
(7, 'product 1', 100, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1),
(8, 'product 2', 100, 'Lorem, ipsum dolor sit amet consectetur awwvefvwvrbtbbdipisicing elit. Quae, sequi.', 5100, 1),
(9, 'product 3', 100, 'Lorem, ipsum dolor sit amet cdfavdfvefwvwwrtbrtbtrbrgtbrtbwtebrbonsectetur adipisicing elit. Quae, sequi.', 5100, 1),
(10, 'product 4', 100, 'Lorem, ipsum dolor sit amet consectetuasdvasdvsdvasdvdvsdvsdasdvdavasdr adipisicing elit. Quae, sequi.', 5100, 1),
(11, 'product 5', 100, 'Loremwvevwevvwefvffv, ipsum dolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1),
(12, 'product 6', 100, 'Lorem, ipsum erferfewrferferwferfrwerfdolor sit amet consectetur adipisicing elit. Quae, sequi.', 5100, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_confirmed` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `hash`, `email_confirmed`) VALUES
(1, 'Андрей Жук', 'test', 'admkl@wcwq', '123', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
