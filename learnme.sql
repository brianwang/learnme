-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 年 03 月 05 日 03:54
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `learnme`
--
CREATE DATABASE IF NOT EXISTS `learnme` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `learnme`;

-- --------------------------------------------------------

--
-- 表的结构 `four_quadrant`
--

CREATE TABLE IF NOT EXISTS `four_quadrant` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `important` int(1) DEFAULT NULL,
  `emergency` int(1) DEFAULT NULL,
  `unimportant` int(1) DEFAULT NULL,
  `unemergency` int(1) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  `authorname` varchar(45) DEFAULT NULL,
  `importance` int(11) DEFAULT NULL COMMENT '重要性',
  `duration` int(11) unsigned zerofill DEFAULT '00000000000',
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `plans`
--

INSERT INTO `plans` (`id`, `title`, `content`, `create_time`, `author`, `authorname`, `importance`, `duration`, `type`) VALUES
(1, '我想学习炒菜', '炒菜', '2015-03-04 06:43:40', 33, NULL, NULL, 00000000000, '00000000000'),
(4, '我想学日语', '学习日语到二级\n', '2015-03-04 06:48:36', 33, NULL, NULL, 00000043200, 'month'),
(5, '我想学日语', '学习日语到二级\n', '2015-03-04 06:48:38', 33, NULL, NULL, 00000043200, 'month');

-- --------------------------------------------------------

--
-- 表的结构 `plan_comments`
--

CREATE TABLE IF NOT EXISTS `plan_comments` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_time` timestamp NULL DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `plan_steps`
--

CREATE TABLE IF NOT EXISTS `plan_steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `plan_steps`
--

INSERT INTO `plan_steps` (`id`, `plan_id`, `title`, `idx`, `create_time`, `uid`) VALUES
(1, 2, '123', 1, '2015-03-04 10:51:28', NULL),
(2, 2, '456', 1, '2015-03-04 10:52:03', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `plan_tags`
--

CREATE TABLE IF NOT EXISTS `plan_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `plan_tags`
--

INSERT INTO `plan_tags` (`id`, `plan_id`, `tag`, `create_time`, `uid`) VALUES
(1, NULL, ',', '2015-03-04 06:34:46', NULL),
(2, 4, '语言', '2015-03-04 06:48:36', NULL),
(3, 4, '学习', '2015-03-04 06:48:36', NULL),
(4, 5, '语言', '2015-03-04 06:48:38', NULL),
(5, 5, '学习', '2015-03-04 06:48:38', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `step_comments`
--

CREATE TABLE IF NOT EXISTS `step_comments` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `step_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_time` timestamp NULL DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `importance` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `regist_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
