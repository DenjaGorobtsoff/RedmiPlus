-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 20 2017 г., 08:58
-- Версия сервера: 10.0.32-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jxvjcobs_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ctegories`
--

CREATE TABLE `ctegories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dispatch`
--

INSERT INTO `dispatch` (`id`, `email`, `date`) VALUES
(1, '32gj5524@mkskks.ty', '2017-10-15 08:52:58'),
(2, 'Dffgtthhgd@fgg.gy', '2017-10-17 14:41:16');

-- --------------------------------------------------------

--
-- Структура таблицы `fotogallery`
--

CREATE TABLE `fotogallery` (
  `id` int(10) NOT NULL,
  `image-name` text NOT NULL,
  `image-path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fotogallery`
--

INSERT INTO `fotogallery` (`id`, `image-name`, `image-path`) VALUES
(1, 'lukawevich.jpg', '/img/fotogallery/lukawevich.jpg'),
(2, '00536146.jpg', '/img/fotogallery/00536146.jpg'),
(3, '016852655.jpg', '/img/fotogallery/016852655.jpg'),
(4, '05a13c8e02a5.jpg', '/img/fotogallery/05a13c8e02a5.jpg'),
(5, '0_a4c09_b9210f37_XXL.jpg', '/img/fotogallery/0_a4c09_b9210f37_XXL.jpg'),
(6, 'tawny-owl-564497_960_720.jpg', '/img/fotogallery/tawny-owl-564497_960_720.jpg'),
(7, '18590202_303.jpg', '/img/fotogallery/18590202_303.jpg'),
(8, '14-2290-SpaceLaunchSystem-AfterLaunch-20140827.jpg', '/img/fotogallery/14-2290-SpaceLaunchSystem-AfterLaunch-20140827.jpg'),
(9, 'snowboard-227541_960_720.jpg', '/img/fotogallery/snowboard-227541_960_720.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `category` int(10) NOT NULL,
  `meta-title` text NOT NULL,
  `meta-description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `category`, `meta-title`, `meta-description`) VALUES
(8, 'jkdlskdl ', 'Ð´Ñ‹Ð²ÑŒÐ°Ð´Ñ‹ÑŒÐ²Ð°Ñ‹ÑŒÐ²ÑŽkl klsdks klskdlfks ksldklskdf sldklfksldfk ksldkflsdf sldkfsmf.smf.,m.dfm.,mf .smd.,fm .,smd.f, m.sdm. ', '/img/logo-primer-colors.png', 0, 'redmi plus Ð½Ð¾Ð²Ð¾ÑÑ‚Ð¸ mi6 ', 'ÐžÐ±Ð·Ð¾Ñ€ redmi plus Ð½Ð¾Ð²Ð¾ÑÑ‚Ð¸ mi6 ');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'admin', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ctegories`
--
ALTER TABLE `ctegories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fotogallery`
--
ALTER TABLE `fotogallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT для таблицы `ctegories`
--
ALTER TABLE `ctegories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `fotogallery`
--
ALTER TABLE `fotogallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
