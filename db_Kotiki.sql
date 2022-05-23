-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2022 г., 11:45
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_Kotiki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Kotiki`
--

CREATE TABLE `Kotiki` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `url_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Kotiki`
--

INSERT INTO `Kotiki` (`id`, `name`, `description`, `price`, `url_picture`) VALUES
(1, 'Абиссинский кот', '', 40000, 'img/abis-cat.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Kotik` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `is_Admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `login`, `password`, `is_Admin`) VALUES
(1, 'admin', '1324', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Kotiki`
--
ALTER TABLE `Kotiki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Kotik` (`id_Kotik`),
  ADD KEY `id_User` (`id_User`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Kotiki`
--
ALTER TABLE `Kotiki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_Kotik`) REFERENCES `Kotiki` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
