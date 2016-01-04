-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 12:12 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `photo`, `text`) VALUES
(1, 'Available Equipment & Materials at Garage48 Hardware & Arts 2016 Hackathon\r\n', '2015-12-26 14:15:23', 'http://garage48.org/photos/kala.png', 'Garage48 Hardware & Arts 2016 hackathon in Tartu is going to be as exciting as ever! Naturally we will provide all the teams with necessary tools to enable them to bring their ideas to life! We have a big list of materials and equipment suitable for all sorts of hardware and arts projects. In case you are missing something, e-mail to hardware@garage48.org so we can try to get you your desired equipment. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location` varchar(255) CHARACTER SET utf8 NOT NULL,
  `overview` text NOT NULL,
  `form` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `photo`, `date`, `location`, `overview`, `form`) VALUES
(1, 'Student Startup Camp Tartu 2016', 'http://geolab.edu.ge/img/bg/sc-3.png', '2015-12-26 12:20:19', 'University of Tartu / Garage48 HUB Tartu', 'The Estonian Student Startup Camp (ESSC) is an intensive tech entrepreneurship boot-camp designed to arm students with skills and inspiration to launch technology-related ventures. The program is built and delivered by startup entrepreneurs from Estonia and abroad who collaborate to create a hands-on learning experience.\r\n', '<form><input type="text" name="name" value="სახელი"><br><input type="text" name="lastname" value="გვარი"><br><input type="radio" name="მოგწონს ფორმა?" value="კი">კი<br><input type="radio" name="მოგწონს ფორმა?" value="არა">არა<br><select name="სქესი"><option>ქალი</option><option>კაცი</option></select><br></form>'),
(2, 'Student Startup Camp Tartu 2016', 'http://geolab.edu.ge/img/bg/sc-3.png', '2015-12-26 12:20:19', 'University of Tartu / Garage48 HUB Tartu', 'The Estonian Student Startup Camp (ESSC) is an intensive tech entrepreneurship boot-camp designed to arm students with skills and inspiration to launch technology-related ventures. The program is built and delivered by startup entrepreneurs from Estonia and abroad who collaborate to create a hands-on learning experience.\r\n', '<form><input type="text" name="name" value="სახელი"><br><input type="text" name="lastname" value="გვარი"><br><input type="radio" name="მოგწონს ფორმა?" value="კი">კი<br><input type="radio" name="მოგწონს ფორმა?" value="არა">არა<br><select name="სქესი"><option>ქალი</option><option>კაცი</option></select><br></form>'),
(3, 'Student Startup Camp Tartu 2016', 'http://geolab.edu.ge/img/bg/sc-3.png', '2015-12-26 12:20:19', 'University of Tartu / Garage48 HUB Tartu', 'The Estonian Student Startup Camp (ESSC) is an intensive tech entrepreneurship boot-camp designed to arm students with skills and inspiration to launch technology-related ventures. The program is built and delivered by startup entrepreneurs from Estonia and abroad who collaborate to create a hands-on learning experience.\r\n', '<form><input type="text" name="name" value="სახელი"><br><input type="text" name="lastname" value="გვარი"><br><input type="radio" name="მოგწონს ფორმა?" value="კი">კი<br><input type="radio" name="მოგწონს ფორმა?" value="არა">არა<br><select name="სქესი"><option>ქალი</option><option>კაცი</option></select><br></form>');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_photo` varchar(255) NOT NULL,
  `lab_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lab_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `lab_name`, `lab_photo`, `lab_address`, `lab_phone`) VALUES
(1, 'Geolab', '', 'Georgian American University | 8 Merab Aleksidze St, Tbilisi 0160', '577 67 04 04');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `info`, `photo`) VALUES
(11, 'Andrei Korobeinik', 'Board member at Enterprise Estonia and EstBAN', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_text` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_url`, `page_text`) VALUES
(1, 'ჩვენ შესახებ\r\n', 'about_us', 'People are often afraid to start their own project or business. Common problems include lack of know-how and co-founders, lack of money, unknown risks etc. Garage48 is here to change that mindset and show that it''s all about positive "let''s do it" attitud');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lab_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `lab_id`) VALUES
(1, 'levani', 'levani', 'tesli@gmail.com', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
