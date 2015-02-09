-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Server Version :  5.6.20
-- PHP Version :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- DataBase :  `Peterbook`
--
CREATE DATABASE IF NOT EXISTS `Peterbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Peterbook`;

-- --------------------------------------------------------

--
-- Structure of `post` table
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
`IDPOST` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `CONTENT` varchar(2000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Content of `post` table
--

INSERT INTO `post` (`IDPOST`, `USERNAME``, `CONTENT`) VALUES
(3, 'testUsername', 'testContent');

-- --------------------------------------------------------


--
-- Structure of `comment` table
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
`IDCOMMENT` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `IDPOST` int(11) NOT NULL,
  `TEXT` varchar(500) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure of `user` table
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `USER_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `PICTURE` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Content of `user` table
--

INSERT INTO `user` (`USER_NAME`, `EMAIL`, `PASSWORD`, `DESCRIPTION`, `PICTURE`, `FIRSTNAME`, `LASTNAME`) VALUES
('aTestUser', 'hello@hello.com', 'password1236456987', 'hello, im a user !', 'pic.jpg', 'tommy', 'cabrelli'),


--
-- Index for `post` table
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`IDPOST`), ADD KEY `FK_REFERENCE_1` (`USERNAME`);


--
-- Index for `comment` table
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`IDCOMMENT`), ADD KEY `UserToComment` (`USERNAME`), ADD KEY `PostToComment` (`IDPOST`);

--
-- Index for `user` table
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`USERNAME``);

--
-- AUTO_INCREMENT for `post` table
--
ALTER TABLE `post`
MODIFY `IDPOST` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for `comment` table
--
ALTER TABLE `comment`
MODIFY `IDCOMMENT` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
