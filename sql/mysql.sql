-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 02 月 04 日 11:08
-- 服务器版本: 5.1.69
-- PHP 版本: 5.2.17p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `qwe7002_radio`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- --------------------------------------------------------

--
-- 表的结构 `radio`
--

CREATE TABLE IF NOT EXISTS `radio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET latin1 NOT NULL,
  `user` text CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `to` text CHARACTER SET latin1 NOT NULL,
  `time` text CHARACTER SET latin1 NOT NULL,
  `uptime` text CHARACTER SET latin1 NOT NULL,
  `ip` text CHARACTER SET latin1 NOT NULL,
  `info` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `songtable`
--

CREATE TABLE IF NOT EXISTS `songtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `song` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- 表的结构 `takeoff`
--

CREATE TABLE IF NOT EXISTS `takeoff` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `deltime` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `timetable`
--

INSERT INTO `timetable` (`deltime`) VALUES
('0000-00-00 00:00:00');
