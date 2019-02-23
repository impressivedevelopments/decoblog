-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2019 г., 23:07
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `decoblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `comments` int(255) NOT NULL,
  `likes` int(255) NOT NULL,
  `media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `author`, `date`, `description`, `comments`, `likes`, `media`) VALUES
(1, 'lifestyle', 'Moscow', 'Alexander', '0000-00-00', 'Aliquam at neque ut purus suscipit sodales. Etiam porta quam orci, non blandit justo tincidunt eu. Phasellus bibendum tincidunt urna in lacinia. Sed a libero eget turpis lacinia accumsan in vel dolor. Mauris at ipsum eget eros laoreet accumsan. Nunc eu pharetra sem. Sed placerat nibh eget tortor ornare, sit amet commodo metus aliquet. Curabitur et hendrerit felis, at convallis ex. Nunc nec convallis sem, a consectetur nisi. Ut et iaculis dolor. Fusce tempus consequat leo, eget facilisis metus consequat at.', 0, 0, NULL),
(2, 'gallery', 'St.Petesburg', 'Suncheus', '0000-00-00', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 0, 0, NULL),
(3, 'image', 'Tavelling', 'Me', '0000-00-00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 0, 0, NULL),
(4, 'image', 'Moscow', 'as', '0000-00-00', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, 0, NULL),
(5, 'standart', 'Azurmat', 'sd', '0000-00-00', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 0, NULL),
(7, 'image', 'Tavelling', 'Me', '0000-00-00', 'Vivamus sed mauris a neque vulputate mollis. Aenean urna tellus, ornare nec ante vitae, porta rhoncus metus. Curabitur dignissim in arcu ac pulvinar. Suspendisse nec risus ante. Aliquam aliquam aliquam tellus sit amet vulputate. Morbi erat nisi, ornare vel erat et, pellentesque placerat turpis. Aliquam erat volutpat. Nam urna ante, rhoncus id consectetur nec, feugiat nec erat. Proin imperdiet pretium faucibus. Nam eget lorem turpis.\r\n\r\nInteger id orci vitae nisi blandit cursus. Fusce suscipit dignissim arcu non porta. In hac habitasse platea dictumst. Integer venenatis facilisis mi quis rhoncus. Duis dictum aliquet sem, in euismod felis aliquam non. Ut orci ligula, aliquam in placerat ut, aliquam eget dui. Nullam eget lacus congue, malesuada dui vel, venenatis justo.', 0, 0, 'images/banner.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
