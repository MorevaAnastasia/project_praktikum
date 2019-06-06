-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 11 2019 г., 19:36
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lab2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `klient`
--

INSERT INTO `klient` (`id`, `name`) VALUES
(2, 'Клиент66'),
(3, 'Клиент3'),
(4, 'Клиент4'),
(5, 'Клиент5');

-- --------------------------------------------------------

--
-- Структура таблицы `usluga`
--

CREATE TABLE `usluga` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `usluga`
--

INSERT INTO `usluga` (`id`, `text`) VALUES
(2, 'Ремонт машины'),
(3, 'Починить Домофон');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavka`
--

CREATE TABLE `zayavka` (
  `id` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `id_uslugi` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zayavka`
--

INSERT INTO `zayavka` (`id`, `id_klient`, `id_uslugi`, `data`) VALUES
(1, 4, 2, '2019-04-07'),
(2, 3, 3, '2019-04-07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usluga`
--
ALTER TABLE `usluga`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayavka`
--
ALTER TABLE `zayavka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `usluga`
--
ALTER TABLE `usluga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `zayavka`
--
ALTER TABLE `zayavka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
