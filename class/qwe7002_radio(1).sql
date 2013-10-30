

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
-- 表的结构 `delradio`
--

CREATE TABLE IF NOT EXISTS `delradio` (
  `name` text CHARACTER SET latin1 NOT NULL,
  `user` text CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `to` text CHARACTER SET latin1 NOT NULL,
  `time` text CHARACTER SET latin1 NOT NULL,
  `uptime` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;


-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;


--
-- 表的结构 `radio`
--

CREATE TABLE IF NOT EXISTS `radio` (
  `name` text CHARACTER SET latin1 NOT NULL,
  `user` text CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `to` text CHARACTER SET latin1 NOT NULL,
  `time` text CHARACTER SET latin1 NOT NULL,
  `uptime` text CHARACTER SET latin1 NOT NULL,
  `ip` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 表的结构 `robot`
--

CREATE TABLE IF NOT EXISTS `robot` (
  `keywords` text NOT NULL,
  `retun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;


--
-- 表的结构 `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `deltime` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;


