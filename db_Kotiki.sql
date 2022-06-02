-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2022 г., 17:01
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
-- База данных: `api_db`
--
CREATE DATABASE IF NOT EXISTS `api_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `api_db`;

-- --------------------------------------------------------

--
-- Структура таблицы `balls`
--

CREATE TABLE `balls` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `ball` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `balls`
--

INSERT INTO `balls` (`id`, `id_student`, `id_subject`, `ball`) VALUES
(3, 2, 1, 2),
(4, 2, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `Name`, `Group`) VALUES
(2, 'Утарбаев Альберт', 'АПИБ-20-2');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `Name`) VALUES
(1, 'Программирование'),
(2, 'Философия');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(9, 'User', '$2y$10$uccZABGqzNVnPaSsiacc/ubjdwpQ8d5AGiJYrC6sAmeb9anLeIqOK'),
(10, 'user228', '$2y$10$MGOacWzwMI0fRnCJVK6ZnOeeAELBlLl4nOaDHZ9bcAQUZhLy5ZLI6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `balls`
--
ALTER TABLE `balls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `balls`
--
ALTER TABLE `balls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `balls`
--
ALTER TABLE `balls`
  ADD CONSTRAINT `balls_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `balls_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`);
--
-- База данных: `city`
--
CREATE DATABASE IF NOT EXISTS `city` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `city`;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`ID`, `Name`) VALUES
(1, 'Magnitogorsk'),
(2, 'Omsk');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `ID_person` int(11) NOT NULL,
  `ID_city` int(11) NOT NULL,
  `Name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Surname` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`ID_person`, `ID_city`, `Name`, `Age`, `Surname`) VALUES
(1, 1, 'Ann', 11, NULL),
(2, 1, 'Kate', 13, NULL),
(3, 1, 'Peta', 15, NULL),
(4, 1, 'Andrey', 17, NULL),
(5, 1, 'Peta', 11, NULL),
(6, 1, 'Nataha', 10, NULL),
(7, 1, 'Maksim', 43, NULL),
(8, 1, 'Ganya', 58, NULL),
(9, 1, 'Alina', 88, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`ID_person`),
  ADD KEY `ID_city` (`ID_city`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `ID_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`ID_city`) REFERENCES `city` (`ID`);
--
-- База данных: `db_kotiki`
--
CREATE DATABASE IF NOT EXISTS `db_kotiki` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `db_kotiki`;

-- --------------------------------------------------------

--
-- Структура таблицы `kotiki`
--

CREATE TABLE `kotiki` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `url_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kotiki`
--

INSERT INTO `kotiki` (`id`, `name`, `description`, `price`, `url_picture`) VALUES
(2, 'Абиссинский кот', '', 40000, 'img/abis-cat.jpg'),
(3, 'Мейн-кун', '', 65000, 'img/Main-Kun.jpg'),
(4, 'Британская золо', '', 25000, 'img/britain-gold.jpg'),
(5, 'Шотландский кот', '', 15000, 'img/scot-cat.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `id_Kotik` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `is_Admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `is_Admin`) VALUES
(1, 'admin', '1324', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_Kotik`) REFERENCES `kotiki` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_User`) REFERENCES `users` (`id`);
--
-- База данных: `lab4`
--
CREATE DATABASE IF NOT EXISTS `lab4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `lab4`;

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `Name`, `Country`) VALUES
(2, 'test', 'tesCountry'),
(3, 'test2', 'country2'),
(8, 'Subaru', 'Japan');

-- --------------------------------------------------------

--
-- Структура таблицы `stamp_car`
--

CREATE TABLE `stamp_car` (
  `id` int(11) NOT NULL,
  `id_компании` int(11) NOT NULL,
  `name_stamp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_charactet` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `picture` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stamp_car`
--

INSERT INTO `stamp_car` (`id`, `id_компании`, `name_stamp`, `technical_charactet`, `year`, `picture`) VALUES
(10, 2, 'Volga', 'SSR', 2107, 'image/file1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stamp_car`
--
ALTER TABLE `stamp_car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_компании` (`id_компании`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `stamp_car`
--
ALTER TABLE `stamp_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `stamp_car`
--
ALTER TABLE `stamp_car`
  ADD CONSTRAINT `stamp_car_ibfk_1` FOREIGN KEY (`id_компании`) REFERENCES `company` (`id`);
--
-- База данных: `test4`
--
CREATE DATABASE IF NOT EXISTS `test4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `test4`;

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies`
--

CREATE TABLE `people_hobbies` (
  `ID` int(11) NOT NULL,
  `Name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies2`
--

CREATE TABLE `people_hobbies2` (
  `ID` int(11) NOT NULL,
  `ID_person` int(11) NOT NULL,
  `ID_hobbies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `ID_person` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `people_hobbies2`
--
ALTER TABLE `people_hobbies2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_person` (`ID_person`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`ID_person`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `people_hobbies2`
--
ALTER TABLE `people_hobbies2`
  ADD CONSTRAINT `people_hobbies2_ibfk_1` FOREIGN KEY (`ID_person`) REFERENCES `person` (`ID_person`),
  ADD CONSTRAINT `people_hobbies2_ibfk_2` FOREIGN KEY (`ID_person`) REFERENCES `person` (`ID_person`);
--
-- База данных: `test5`
--
CREATE DATABASE IF NOT EXISTS `test5` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `test5`;

-- --------------------------------------------------------

--
-- Структура таблицы `hobbies`
--

CREATE TABLE `hobbies` (
  `ID_hobbies` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hobbies`
--

INSERT INTO `hobbies` (`ID_hobbies`, `Name`, `Description`) VALUES
(1, 'Sport', 'Sport - is life'),
(2, 'Cinema', 'Cinema - the second reality'),
(3, 'Fashion', 'Beauty will save the world');

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `ID_person` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surname` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`ID_person`, `Name`, `Surname`, `Age`) VALUES
(1, 'Albert', 'Albert228', 19),
(2, 'Vasya', 'Vasya322', 20),
(3, 'iVan', 'Van', 25);

-- --------------------------------------------------------

--
-- Структура таблицы `people_hobbies`
--

CREATE TABLE `people_hobbies` (
  `ID_record` int(11) NOT NULL DEFAULT '0',
  `ID_people` int(11) DEFAULT NULL,
  `ID_hobbies` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `people_hobbies`
--

INSERT INTO `people_hobbies` (`ID_record`, `ID_people`, `ID_hobbies`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`ID_hobbies`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`ID_person`);

--
-- Индексы таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD PRIMARY KEY (`ID_record`),
  ADD KEY `ID_people` (`ID_people`),
  ADD KEY `ID_hobbies` (`ID_hobbies`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `people_hobbies`
--
ALTER TABLE `people_hobbies`
  ADD CONSTRAINT `people_hobbies_ibfk_1` FOREIGN KEY (`ID_people`) REFERENCES `people` (`ID_person`),
  ADD CONSTRAINT `people_hobbies_ibfk_2` FOREIGN KEY (`ID_hobbies`) REFERENCES `hobbies` (`ID_hobbies`);
--
-- База данных: `usersdatabase`
--
CREATE DATABASE IF NOT EXISTS `usersdatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `usersdatabase`;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Login` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Login`, `Password`) VALUES
(4, 'Albert', 'ef1fedf5d32ead6b7aaf687de4ed1b71'),
(5, 'Albert228', 'ef1fedf5d32ead6b7aaf687de4ed1b71'),
(6, 'Genya', '45337ab528ab456381fd0fe311633a6b'),
(8, 'nurlan', '8a2e739d709889f46e90ce649ea5967e');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
