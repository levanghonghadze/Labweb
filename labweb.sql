-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 09 2016 г., 14:21
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `labweb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `photo`, `text`) VALUES
(1, 'Available Equipment & Materials at Garage48 Hardware & Arts 2016 Hackathon\r\n', '2015-12-26 14:15:23', 'http://garage48.org/photos/kala.png', 'Garage48 Hardware & Arts 2016 hackathon in Tartu is going to be as exciting as ever! Naturally we will provide all the teams with necessary tools to enable them to bring their ideas to life! We have a big list of materials and equipment suitable for all sorts of hardware and arts projects. In case you are missing something, e-mail to hardware@garage48.org so we can try to get you your desired equipment. \r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `event_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `overview` text CHARACTER SET utf8 NOT NULL,
  `form_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_id` varchar(255) NOT NULL,
  `mentors_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `event_name`, `photo`, `event_start_date`, `event_end_date`, `location`, `overview`, `form_id`, `lab_id`, `mentors_id`) VALUES
(10, 'Geolab Project', 'geolabu.jpg', '2016-01-11 10:18:41', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '1', '1', '71'),
(11, 'Geolab Project', 'geolabu.jpg', '2016-01-12 03:30:00', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '', '', ''),
(12, 'Geolab Project', 'geolabu.jpg', '2016-01-11 10:18:41', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '1', '1', '71');

-- --------------------------------------------------------

--
-- Структура таблицы `event_mentors`
--

CREATE TABLE `event_mentors` (
  `event_mentors_id` int(11) NOT NULL,
  `mentor_id` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `event_mentors`
--

INSERT INTO `event_mentors` (`event_mentors_id`, `mentor_id`, `event_id`) VALUES
(1, '67\r\n', '12'),
(2, '70', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `former`
--

CREATE TABLE `former` (
  `id` int(11) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `former_form` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `former`
--

INSERT INTO `former` (`id`, `event_id`, `former_form`) VALUES
(1, '71', ''),
(2, '71', ''),
(3, '71', '');

-- --------------------------------------------------------

--
-- Структура таблицы `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `form` text NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `event_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `forms`
--

INSERT INTO `forms` (`id`, `form`, `form_name`, `event_id`) VALUES
(1, '{"label":"სახელი","field_type":"text","required":true,"field_options":{},"cid":"c1"},{"label":"გვარი","field_type":"text","required":true,"field_options":{},"cid":"c1"},{"label":"ელ-ფოსტა","field_type":"email","აუცილებელია":true,"field_options":{"description":"მაგ: geolab@geolab.edu.ge"},"cid":"c67"},{"label":"ტელეფონის ნომერი","field_type":"number","required":true,"field_options":{"description":"მაგ: 557 43 44 93"},"cid":"c1"},{"label":"სქესი","field_type":"dropdown","required":true,"field_options":{"options":[{"label":"ქალი","checked":false},{"label":"კაცი","checked":false}],"include_blank_option":false},"cid":"c22"},{"label":"ჩეკბოქსი","field_type":"checkboxes","აუცილებელია":true,"field_options":{"options":[{"label":"check1","checked":false},{"label":"check2","checked":false}],"description":"დამატებითი ტექსტი"},"cid":"c21"},{"label":"თარიღი","field_type":"date","აუცილებელია":true,"field_options":{"description":"ივენთის დაწყების თარიღი"},"cid":"c25"},{"label":"დრო","field_type":"time","აუცილებელია":true,"field_options":{"description":"ივენთის დაწყების დრო"},"cid":"c30"},{"label":"ვებსაიტი","field_type":"website","აუცილებელია":true,"field_options":{},"cid":"c39"},{"label":"ფასი","field_type":"price","აუცილებელია":true,"field_options":{"description":"არასაჭირო ფუნქცია მემგონი მარა იყოს რას მიშლის :D"},"cid":"c43"},{"label":"პარაგრაფი","field_type":"paragraph","აუცილებელია":true,"field_options":{"size":"large","description":"ესეც კაი რამეა"},"cid":"c47"},{"label":"რადიო","field_type":"radio","აუცილებელია":true,"field_options":{"options":[{"label":"რადიო 1","checked":false},{"label":"რადიო 2","checked":false}],"description":"ოპ ოპ ოპლა"},"cid":"c55"},{"label":"ჰოპა თუ ოპა","field_type":"dropdown","აუცილებელია":true,"field_options":{"options":[{"label":"ჰოპა","checked":false},{"label":"ოპა","checked":false}],"include_blank_option":false,"description":"მოასელექთე "},"cid":"c59"},{"label":"ნამბერ","field_type":"number","აუცილებელია":true,"field_options":{"description":"ჰოო, აქ იწერება მარტო ციფრები","units":"ჰოი","min":"","integer_only":false},"cid":"c63"},{"label":"მისამართი","field_type":"address","აუცილებელია":true,"field_options":{},"cid":"c71"}', 'geolab project form', '12');

-- --------------------------------------------------------

--
-- Структура таблицы `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_photo` varchar(255) NOT NULL,
  `lab_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `labs`
--

INSERT INTO `labs` (`id`, `lab_name`, `lab_photo`, `lab_address`, `lab_phone`) VALUES
(1, 'Geolab', '', 'Georgian American University | 8 Merab Aleksidze St, Tbilisi 0160', '577 67 04 04');

-- --------------------------------------------------------

--
-- Структура таблицы `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `mentor_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `mentors`
--

INSERT INTO `mentors` (`id`, `mentor_name`, `info`, `photo`) VALUES
(67, 'Krists Avots', 'Garage48 events & sponsors; Marketing at infogr.am', '1025269_10151660814857230_30172558_o.jpg'),
(68, 'Priit Salumaa', 'Co-Founder of Mooncascade and Garage48', '13928_10200766204654812_1301722864_n.jpg'),
(69, 'Helen Kokk', 'UI/UX expert and Graphic Designer @ Made By', 'Helen.jpg'),
(70, 'Jurgis Orups', 'CTO @ Clusterpoint', 'jurgis.jpg'),
(71, 'Kärt Ojavee', 'textile designer at KO! and KAUN, co-founder of SymbiosisO', 'tal-urb-p63-1.jpg'),
(72, 'levan gongadze', 'geolab', '086.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_url`, `page_text`) VALUES
(1, 'ჩვენ შესახებ\r\n', 'about_us', 'არსებული პროექტი წარმოადგენს Geolab-ის სტუდენტის საკურსო ნაშრომს, რომელიც ფინალურ ეტაპზე შეასრულა. კონკრეტულად არის პლატფორმა, რომელიც შესაძლებლობას იძლევა ღონისძიებებისთვის შეიქმნას სარეგისტრაციო ფორმები. ამის გარდა შესაძლებელია ღონისძიებების დათვალიერება და ინფორმაციის მიღება.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lab_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `lab_id`) VALUES
(1, 'levani', 'b7ad03d0f70e378eff4df7d35d6e8f6effa64b3d', 'levani@gmail.com', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event_mentors`
--
ALTER TABLE `event_mentors`
  ADD PRIMARY KEY (`event_mentors_id`);

--
-- Индексы таблицы `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `event_mentors`
--
ALTER TABLE `event_mentors`
  MODIFY `event_mentors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `former`
--
ALTER TABLE `former`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
