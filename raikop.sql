-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 30 2025 г., 22:18
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `raikop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `login` text,
  `password` text,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'director', '123123123', 'admin'),
(2, 'user', '123123123', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id` bigint NOT NULL,
  `title` text,
  `adress` text,
  `price` int NOT NULL DEFAULT '0',
  `responsibilities` text,
  `requirements` text,
  `conditions` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id`, `title`, `adress`, `price`, `responsibilities`, `requirements`, `conditions`) VALUES
(1, 'Продавец-кассир', 'г. Острогожск', 25000, 'Обслуживание покупателей на кассе\r\nКонсультирование по ассортименту товаров\r\nВыкладка товара и поддержание порядка в торговом зале\r\nРабота с кассовой техникой', 'Опыт работы приветствуется, но не обязателен\r\nОтветственность, вежливость, коммуникабельность\r\nГотовность к работе в графике 2/2', 'Официальное трудоустройство\r\nОбучение на рабочем месте\r\nСоциальный пакет'),
(2, 'Водитель-экспедитор', 'Острогожский район', 35000, 'Доставка товаров по торговым точкам района\r\nПогрузка/разгрузка товара\r\nВедение сопроводительной документации\r\nКонтроль состояния автомобиля', 'Категория С, стаж вождения от 3 лет\r\nОпыт работы экспедитором\r\nЗнание района\r\nОтветственность, аккуратность', 'График работы 5/2\r\nОфициальное трудоустройство\r\nСлужебный автомобиль'),
(3, 'Товаровед', 'г. Острогожск', 30000, 'Формирование ассортимента магазинов\r\nРабота с поставщиками\r\nКонтроль сроков годности товаров\r\nАнализ продаж и товарных остатков\r\nВедение товарного учета', 'Опыт работы товароведом от 1 года\r\nЗнание 1С:Торговля и Склад\r\nАналитическое мышление\r\nВнимательность к деталям', 'Работа в офисе\r\nГрафик 5/2 с 9:00 до 18:00\r\nВозможность профессионального роста');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
