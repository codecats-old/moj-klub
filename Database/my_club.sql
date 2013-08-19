-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2013 at 12:17 PM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE IF NOT EXISTS `avatars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(145) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `path_UNIQUE` (`path`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `path`) VALUES
(17, 'upload/avatars/teams/19.png'),
(19, 'upload/avatars/teams/26.jpeg'),
(15, 'upload/avatars/users/1.jpeg'),
(18, 'upload/avatars/users/2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `show_phone` tinyint(1) DEFAULT NULL,
  `show_email` tinyint(1) DEFAULT NULL,
  `height` tinyint(4) DEFAULT NULL,
  `weight` tinyint(4) DEFAULT NULL,
  `age` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `surname`, `phone`, `show_phone`, `show_email`, `height`, `weight`, `age`) VALUES
(1, 'Tomasz', 'Strzeszkowski', 666666667, 0, 1, NULL, NULL, NULL),
(2, 'Tomek', NULL, 666666666, NULL, NULL, NULL, NULL, NULL),
(7, 'aaa', '', 666666666, 1, 1, NULL, NULL, NULL),
(8, 'a', '', 666666666, 1, 1, NULL, NULL, NULL),
(9, 'aba', '', 666666666, 1, 1, NULL, NULL, NULL),
(14, '', '', 666666666, 1, 1, NULL, NULL, NULL),
(15, '', '', 666666666, 1, 1, NULL, NULL, NULL),
(16, '', '', 0, 1, 1, NULL, NULL, NULL),
(17, '', '', 0, 1, 1, NULL, NULL, NULL),
(18, '', '', 0, 1, 1, NULL, NULL, NULL),
(19, '', '', 0, 1, 1, NULL, NULL, NULL),
(20, '', '', 0, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `description` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_messages_users1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `message_users`
--

CREATE TABLE IF NOT EXISTS `message_users` (
  `user_id` int(11) unsigned NOT NULL,
  `message_id` int(11) unsigned NOT NULL,
  `recived` date DEFAULT NULL,
  PRIMARY KEY (`user_id`,`message_id`),
  UNIQUE KEY `message_UNIQUE` (`message_id`,`user_id`),
  KEY `fk_message_users_messages1` (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(145) NOT NULL,
  `team_id` int(10) unsigned DEFAULT NULL,
  `uploaded` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `compressed` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `address_UNIQUE` (`address`),
  KEY `fk_photos_1` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `address`, `team_id`, `uploaded`, `compressed`) VALUES
(36, 'upload/gallery/teams/19/1376332042.jpeg', 19, '2013-08-12 18:27:22', NULL),
(42, 'upload/gallery/teams/19/1376491855.jpeg', 19, '2013-08-14 14:50:55', NULL),
(43, 'upload/gallery/teams/19/1376491863.jpeg', 19, '2013-08-14 14:51:03', NULL),
(46, 'upload/gallery/teams/19/1376559806.jpeg', 19, '2013-08-15 09:43:26', NULL),
(47, 'upload/gallery/teams/19/1376559833.png', 19, '2013-08-15 09:43:54', NULL),
(48, 'upload/gallery/teams/26/1376590320.jpeg', 26, '2013-08-15 18:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `user_id` int(10) unsigned NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` blob,
  PRIMARY KEY (`user_id`,`team_id`),
  KEY `fk_request_1` (`user_id`),
  KEY `fk_request_2` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`user_id`, `team_id`, `date`, `status`) VALUES
(1, 19, '2013-08-16 06:49:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'player', 'Player privileges, access to player options'),
(4, 'staff', 'Staff privileges, access to staff options'),
(5, 'accountant', 'Accountant privileges, access to accountant options'),
(6, 'manager', 'Manager privileges, manage the club options'),
(7, 'coach', 'Coach privileges, manage players'),
(8, 'capitan', 'Capitan privileges, manage players');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `fk_role_users_users1` (`user_id`),
  KEY `fk_role_users_roles1` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`role_id`, `user_id`) VALUES
(1, 1),
(3, 1),
(6, 1),
(1, 2),
(3, 2),
(8, 2),
(1, 5),
(1, 7),
(1, 8),
(1, 9),
(1, 14),
(1, 15),
(1, 16),
(3, 16),
(6, 16),
(1, 17),
(3, 17),
(1, 18),
(3, 18),
(1, 19),
(2, 19),
(3, 19),
(6, 19),
(1, 20),
(6, 20);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `short_name` varchar(15) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `success` varchar(255) DEFAULT NULL,
  `training` varchar(255) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `street_no` varchar(5) DEFAULT NULL,
  `zip_code` varchar(6) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `short_name_UNIQUE` (`short_name`),
  UNIQUE KEY `full_name_UNIQUE` (`full_name`),
  KEY `fk_teams_1` (`avatar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `short_name`, `full_name`, `description`, `success`, `training`, `email`, `phone`, `street`, `street_no`, `zip_code`, `city`, `avatar_id`) VALUES
(18, 'Ts. Wisła', 'Towarzystwo Sportowe Wisła Kraków', 'aa'' a"aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kraków', NULL),
(19, 'Fc Barcelonia', 'Duma KaTaloni', 'Pierwszy opis klubu!', 'Przed nami', 'Każdy piątek i niedziele co tydzień. \nHala sportowa Gryf.', NULL, NULL, NULL, NULL, NULL, 'Barcelona', 17),
(20, 'Urlich', 'Urlich Boxing Promotion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Aaabbb', 'Aaaaaaac', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Real Madryt', 'FC Real Madryt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE IF NOT EXISTS `trainings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `description_UNIQUE` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training_users`
--

CREATE TABLE IF NOT EXISTS `training_users` (
  `user_id` int(11) unsigned NOT NULL,
  `training_id` int(11) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `duration` int(2) NOT NULL,
  PRIMARY KEY (`user_id`,`training_id`),
  KEY `fk_user_training_trainings1` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `avatar_id` int(10) unsigned DEFAULT NULL,
  `team_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_users_1` (`avatar_id`),
  KEY `fk_users_2` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`, `avatar_id`, `team_id`) VALUES
(1, 'tomek11@gmail.com', 'tomek11', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 241, 1376816732, 15, 19),
(2, 'firstUser@fu.pl', 'firstUser', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 9, 1376395891, 18, 19),
(3, 'firstUse2r@fu.pl', 'firstUser2', 'c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8', 0, NULL, 15, NULL),
(4, 'alvarez@gmail.com', 'alvarez', '507522b9b40371cd325e9b822d2dabdfaae0f79e2320c7359cec1029bc1dc07e', 0, NULL, 15, NULL),
(5, 'alvarez2@gmail.com', 'alvarez2', 'c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8', 0, NULL, 15, NULL),
(6, 'beton@blue.pl', 'beton', 'c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8', 0, NULL, 15, NULL),
(7, 'tz23a@bbb.cc', 'agatameble', 'c1a74bf0c5f4293ec64267e9c059ae27f1706522cb933b410c4a453b0bd3b5c8', 0, NULL, 15, NULL),
(8, 'aaa@pol.ol', 'bbbbc', '593199015e73b11c11ed8c5bafbea9866e8cf4b6fa04b2195c011d5ec39e0ffe', 0, NULL, 15, NULL),
(9, '11aaa@pol.ola', 'bacccc', '593199015e73b11c11ed8c5bafbea9866e8cf4b6fa04b2195c011d5ec39e0ffe', 0, NULL, 15, NULL),
(14, 'tomekGboot@bot.pl', 'tommekHashBogt', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 0, NULL, 15, NULL),
(15, 'tomek22@gmail.com', 'tomek22', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 1, 1373469982, 15, NULL),
(16, 'testowy@testowy.pl', 'testowy', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 6, 1376395827, 15, 20),
(17, 'testowy2@gmail.com', 'testowy2', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 0, NULL, 15, NULL),
(18, 'testowy3@test.pl', 'testowy3', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 0, NULL, 15, NULL),
(19, 'testowy4@test.pl', 'testowy4', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 8, 1376683289, 15, 26),
(20, 'tomek33@gmail.com', 'tomek33', '311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da', 10, 1375791361, 15, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_tokens_users1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `user_agent`, `token`, `created`, `expires`) VALUES
(72, 1, 'f6f47fa7f35f68b8cfd52032cdd321622bc11838', '5111aab85bb62312cfcb8fc9264e7d04fba00cfc', 1375988518, 1377198118),
(83, 19, 'e9690e9f42164b3b38e25866f08c493bd1835e32', 'aeeb6c23b39701eb59418d0108a8d14313f9cd9b', 1376573530, 1377783130),
(98, 1, '43eed23922a4bff99d7076f69755271510a6d714', 'fe3195494f925d5f0ab317fe247bca1c0efaefc5', 1376681537, 1377891137);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `fk_infos_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message_users`
--
ALTER TABLE `message_users`
  ADD CONSTRAINT `fk_message_users_messages1` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `fk_photos_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_request_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_request_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `fk_role_users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `fk_teams_1` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `training_users`
--
ALTER TABLE `training_users`
  ADD CONSTRAINT `fk_user_training_trainings1` FOREIGN KEY (`training_id`) REFERENCES `trainings` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_training_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_1` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users_2` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `fk_user_tokens_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
