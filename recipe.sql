-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 21 2023 г., 20:00
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `recipe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `recipes`
--

CREATE TABLE `recipes` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`) VALUES
(1, 'Яичница обычная', 'Самый быстрый и простой завтрак. Жареные яйца — прекрасное блюдо для тех, кто не любит долго стоять у плиты. Смотрите, как приготовить яичницу обычную. Это сделает каждый, даже новичок на кухне.'),
(2, 'Мясо по-французски\" из куриного фарша', 'Рецепт приготовления популярного мясного блюда с использованием куриного фарша. По сути, готовим то же мясо по-французски, однако вместо отбивного мяса используем куриный фарш. Очень вкусно!'),
(3, 'Узбекский Плов', 'Правильный рецепт узбекского плова. Теперь вы точно будете знать, как приготовить настоящий узбекский плов. '),
(4, 'Литовские цеппелины', 'Приготовить настоящие литовские цеппелины непросто, но оно того, поверьте, стоит. Одно из самых вкусных блюд, что мне доводилось готовить и пробовать. Итак, мой мастер-класс приготовления цеппелинов. '),
(5, 'Плов с курицей в мультиварке', 'Любите плов? Попробуйте приготовить легкий и вкусный плов с куриным мясом - простое и очень вкусное блюдо для семейного обеда или ужина. Читайте рецепт с фото. '),
(6, 'Сырный соус', 'Вашему вниманию - классический рецепт приготовления соуса из сыра. Этот соус обычно подается к макаронам и блюдам из овощей, хотя также его можно подавать к разного рода закускам, чипсам, мясу. '),
(7, 'Обычный плов', 'Ничего сложного в приготовлении этого вкусного и сытного блюда нет, самое главное — соблюдать основные правила приготовления. Результат приятно удивит и вас и ваших родных, плов получится вкусным. '),
(8, 'Подлив из свинины', 'Подлив из свинины очень удобное и универсальное блюдо. Его можно подать с любым гарниром. Можно приготовить кашу из круп, картофельное пюре, макароны. Любому гарниру этот подлив даст прекрасный вкус. '),
(9, 'Манты по-узбекски', 'Вы любите настоящие, сочные, ароматные манты и хотите приготовить их дома? Тогда обязательно обратите внимание на эти удивительно вкусные манты по-узбекски.  ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `recipe_1` int NOT NULL DEFAULT '0',
  `recipe_2` int NOT NULL DEFAULT '0',
  `recipe_3` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `recipe_1`, `recipe_2`, `recipe_3`) VALUES
(1, 'Sofia', '', 0, 0, 0),
(2, 'Ivan', '', 1, 2, 4),
(3, 'Ivan666', 'ff7d0f525b3be596a51fb919492c099c', 0, 0, 0),
(4, 'SashaFigma', '202cb962ac59075b964b07152d234b70', 0, 0, 0),
(5, 'SashaFigma13', '202cb962ac59075b964b07152d234b70', 0, 0, 0),
(6, 'ivan1', '81dc9bdb52d04dc20036dbd8313ed055', 7, 3, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `recipes`
--
ALTER TABLE `recipes`
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
-- AUTO_INCREMENT для таблицы `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
