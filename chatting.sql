-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 17-06-25 01:50
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `chatting`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `cha2t`
--

CREATE TABLE `cha2t` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `chat`
--

CREATE TABLE `chat` (
  `no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `cha2t`
--
ALTER TABLE `cha2t`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date` (`date`);

--
-- 테이블의 인덱스 `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`no`),
  ADD KEY `date` (`date`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `cha2t`
--
ALTER TABLE `cha2t`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3370;
--
-- 테이블의 AUTO_INCREMENT `chat`
--
ALTER TABLE `chat`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=755;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
