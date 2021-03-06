-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2022 г., 20:48
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_kotiki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kotiki`
--

CREATE TABLE `kotiki` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `url_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kotiki`
--

INSERT INTO `kotiki` (`id`, `name`, `description`, `price`, `url_picture`) VALUES
(2, 'Абиссинский котенок', '', 40000, 'img/abis-cat.jpg'),
(3, 'Мейн-кун', '', 65000, 'img/Main-Kun.jpg'),
(4, 'Британская золотая шиншилла', '', 25000, 'img/britain-gold.jpg'),
(5, 'Шотландский котенок', '', 15000, 'img/scot-cat.jpg'),
(6, 'Селкирк-рекс', '', 5000, 'img/Selcirk-racs.jpg'),
(15, 'ШтормСпилит', 'Фотографирую закат', 228, 'img/stormCats.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Kotik` int(11) NOT NULL,
  `purchased` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_User`, `id_Kotik`, `purchased`) VALUES
(4, 1, 2, 1),
(5, 1, 2, 1),
(6, 1, 15, 1),
(7, 1, 15, 1),
(8, 1, 15, 1),
(9, 1, 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(2048) NOT NULL,
  `is_Admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `is_Admin`) VALUES
(1, 'admin', 'bb7946e7d85c81a9e69fee1cea4a087c', 1),
(4, 'albert228', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kotiki`
--
ALTER TABLE `kotiki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Kotik` (`id_Kotik`),
  ADD KEY `id_User` (`id_User`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kotiki`
--
ALTER TABLE `kotiki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_Kotik`) REFERENCES `kotiki` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
