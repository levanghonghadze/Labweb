-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2016 at 04:01 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `photo`, `text`) VALUES
(1, 'Available Equipment & Materials at Garage48 Hardware & Arts 2016 Hackathon\r\n', '2015-12-26 14:15:23', 'http://garage48.org/photos/kala.png', 'Garage48 Hardware & Arts 2016 hackathon in Tartu is going to be as exciting as ever! Naturally we will provide all the teams with necessary tools to enable them to bring their ideas to life! We have a big list of materials and equipment suitable for all sorts of hardware and arts projects. In case you are missing something, e-mail to hardware@garage48.org so we can try to get you your desired equipment. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `event_start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `overview` text CHARACTER SET utf8 NOT NULL,
  `form_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_id` varchar(255) NOT NULL,
  `mentors_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `photo`, `event_start_date`, `event_end_date`, `location`, `overview`, `form_id`, `lab_id`, `mentors_id`) VALUES
(10, 'Geolab Project', 'geolabu.jpg', '2016-01-11 10:18:41', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '1', '1', '71'),
(11, 'Geolab Project', 'geolabu.jpg', '2016-01-12 03:30:00', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '', '', ''),
(12, 'Geolab Project', 'geolabu.jpg', '2016-01-11 10:18:41', '2016-01-12 04:00:00', 'Merab Aleksidze St.8 Tbilisi, Georgia', 'ჯეოლაბი წარმოადგენს მობილური და ვებ აპლიკაციების ლაბორატორიას. ეს არის სივრცე, რომელიც 24 საათის განმავლობაში ღიაა სხვადასხვა საინტერესო და ინოვაციური პროექტების განხორციელებისათვის. ჯეოლაბი აღჭურვილია უახლესი ტექნოლოგიებით და ყოველთვის მზადაა დაგეხმაროთ თქვენი კრეატიული აზროვნებისა და ტექნიკური უნარ–ჩვევების რეალიზებაში.\r\n\r\nჯეოლაბის განუყოფელი ნაწილია სასწავლო ცენტრი – ინფორმაციული ტექნოლოგიების ინსტიტუტი (ITI). აქ ნებისმიერ მსურველს 15 სპეციალობიდან შეუძლება აირჩიოს და 3 თვის განმავლობაში დაეუფლოს მისთვის საინტერესო პროფესიას. ჯეოლაბი საშუალებას გაძლევთ თავად შექმნათ პროგრამული პროდუქტი, შეიმუშაოთ ვებ-გვერდის ან მობილური აპლიკაციის დიზაინი, დააპროექტოთ და მართოთ პროგრამულ სფეროსთან დაკავშირებული პროექტები.\r\n', '1', '1', '71');

-- --------------------------------------------------------

--
-- Table structure for table `former`
--

CREATE TABLE IF NOT EXISTS `former` (
  `id` int(11) NOT NULL,
  `val1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `val2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `val3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `val4` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `event_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `former`
--

INSERT INTO `former` (`id`, `val1`, `val2`, `val3`, `val4`, `event_id`) VALUES
(1, 'vvnbvn', '', NULL, NULL, '71');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL,
  `form` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form`) VALUES
(1, 'თქვენი სახელი:<br>\r\n  <input type="text" name="val1" value="">\r\n  <br>\r\n  თქვენი გვარი:<br>\r\n  <input type="text" name="val2" value="">\r\n  <br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE IF NOT EXISTS `labs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_photo` varchar(255) NOT NULL,
  `lab_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_phone` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `lab_name`, `lab_photo`, `lab_address`, `lab_phone`) VALUES
(1, 'Geolab', '', 'Georgian American University | 8 Merab Aleksidze St, Tbilisi 0160', '577 67 04 04');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE IF NOT EXISTS `mentors` (
  `id` int(11) NOT NULL,
  `mentor_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `mentor_name`, `info`, `photo`) VALUES
(67, 'Krists Avots', 'Garage48 events & sponsors; Marketing at infogr.am', '1025269_10151660814857230_30172558_o.jpg'),
(68, 'Priit Salumaa', 'Co-Founder of Mooncascade and Garage48', '13928_10200766204654812_1301722864_n.jpg'),
(69, 'Helen Kokk', 'UI/UX expert and Graphic Designer @ Made By', 'Helen.jpg'),
(70, 'Jurgis Orups', 'CTO @ Clusterpoint', 'jurgis.jpg'),
(71, 'Kärt Ojavee', 'textile designer at KO! and KAUN, co-founder of SymbiosisO', 'tal-urb-p63-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_url`, `page_text`) VALUES
(1, 'ჩვენ შესახებ\r\n', 'about_us', 'People are often afraid to start their own project or business. Common problems include lack of know-how and co-founders, lack of money, unknown risks etc. Garage48 is here to change that mindset and show that it''s all about positive "let''s do it" attitud');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lab_id` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `lab_id`) VALUES
(1, 'levani', 'b7ad03d0f70e378eff4df7d35d6e8f6effa64b3d', 'levani@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `former`
--
ALTER TABLE `former`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
