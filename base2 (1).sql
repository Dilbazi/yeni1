-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 16 2019 г., 17:57
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coment`
--

CREATE TABLE `coment` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_tarix` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_mes` varchar(300) NOT NULL,
  `c_img` varchar(300) NOT NULL,
  `c_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coment`
--

INSERT INTO `coment` (`c_id`, `c_name`, `c_tarix`, `c_mes`, `c_img`, `c_link`) VALUES
(26, 'QWQEEEE', '2019-02-27 20:08:17', 'sws', '', 'qwqeeee'),
(27, 'aytac', '2019-02-27 20:34:08', 'very beautiful and  perfect', '', 'aytac'),
(28, 'dilbazi merd', '2019-02-28 10:47:33', 'askkeffijrifrifjrjjr', '', 'dilbazi-merd'),
(29, 'ad', '2019-02-28 11:02:31', 'message', '', 'ad'),
(31, 'gulmira', '2019-02-28 14:34:24', 'privet', '', 'gulmira'),
(32, 'aliya', '2019-02-28 14:38:36', 'ya xocu kushat', '', 'aliya'),
(33, 'sema', '2019-03-04 07:45:57', 'afgghduwejiwerj', '', 'sema'),
(34, 'dilbazi', '2019-04-14 09:05:39', 'ftftf', '', 'dilbazi');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `c_tel` varchar(250) NOT NULL,
  `c_mail` varchar(300) NOT NULL,
  `c_inst` varchar(200) NOT NULL,
  `c_twit` varchar(150) NOT NULL,
  `c_linkedin` varchar(250) NOT NULL,
  `c_yer` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`contact_id`, `c_tel`, `c_mail`, `c_inst`, `c_twit`, `c_linkedin`, `c_yer`) VALUES
(1, '+994703210298', 'dilbazi.mardaliyeva@gmail.com', 'mrdlyva_', 'Mardliyeva dilbazi', 'Mardliyeva dilbazi', 'baki');

-- --------------------------------------------------------

--
-- Структура таблицы `inf`
--

CREATE TABLE `inf` (
  `i_id` int(11) NOT NULL,
  `i_uni` varchar(250) NOT NULL,
  `i_tb` int(250) NOT NULL,
  `i_umg` int(200) NOT NULL,
  `i_n1` varchar(150) NOT NULL,
  `i_n2` varchar(250) NOT NULL,
  `i_d1` varchar(100) NOT NULL,
  `i_s2` varchar(100) NOT NULL,
  `i_s1` varchar(100) NOT NULL,
  `i_s3` varchar(100) NOT NULL,
  `i_s4` varchar(100) NOT NULL,
  `i_s5` varchar(100) NOT NULL,
  `i_s6` varchar(100) NOT NULL,
  `c_l` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `inf`
--

INSERT INTO `inf` (`i_id`, `i_uni`, `i_tb`, `i_umg`, `i_n1`, `i_n2`, `i_d1`, `i_s2`, `i_s1`, `i_s3`, `i_s4`, `i_s5`, `i_s6`, `c_l`) VALUES
(1, 'Baku State Universitety', 578, 94, 'TTT(Train The Trainer) certificate', '', 'English languagt-B1\r\nRussian language-c1', 'C++', 'C#', 'PHP', 'Python', 'HTML', 'CSS', 'http://localhost/');

-- --------------------------------------------------------

--
-- Структура таблицы `uzv`
--

CREATE TABLE `uzv` (
  `uzv_adi` varchar(250) NOT NULL,
  `shifre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uzv`
--

INSERT INTO `uzv` (`uzv_adi`, `shifre`) VALUES
('dilbazi', 'basu');

-- --------------------------------------------------------

--
-- Структура таблицы `uzvler`
--

CREATE TABLE `uzvler` (
  `uzv_id` int(11) NOT NULL,
  `uzv_adi` int(11) NOT NULL,
  `shifre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `uzvler1`
--

CREATE TABLE `uzvler1` (
  `uzv_id` int(11) NOT NULL,
  `uzv_adi` varchar(250) NOT NULL,
  `shifre` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uzvler1`
--

INSERT INTO `uzvler1` (`uzv_id`, `uzv_adi`, `shifre`) VALUES
(1, 'dilbazi', 'basu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`c_id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Индексы таблицы `inf`
--
ALTER TABLE `inf`
  ADD PRIMARY KEY (`i_id`);

--
-- Индексы таблицы `uzvler`
--
ALTER TABLE `uzvler`
  ADD PRIMARY KEY (`uzv_id`);

--
-- Индексы таблицы `uzvler1`
--
ALTER TABLE `uzvler1`
  ADD PRIMARY KEY (`uzv_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coment`
--
ALTER TABLE `coment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `inf`
--
ALTER TABLE `inf`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `uzvler`
--
ALTER TABLE `uzvler`
  MODIFY `uzv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `uzvler1`
--
ALTER TABLE `uzvler1`
  MODIFY `uzv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
