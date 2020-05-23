-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-12-10 09:08
-- 서버 버전: 10.4.6-MariaDB
-- PHP 버전: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `login`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `login`
--

CREATE TABLE `login` (
  `usrID` text NOT NULL,
  `usrPW` text NOT NULL,
  `email` text NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `login`
--

INSERT INTO `login` (`usrID`, `usrPW`, `email`, `year`, `month`, `day`, `active`) VALUES
('asdf', 'asdfasdf', 'asdf', 19, 19, 19, 0),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1),
('', '', '', 0, 0, 0, 0),
('asdfasdf', '6a204bd89f3c8348afd5c77c717a097a', 'asdf', 1901, 1, 1, 0),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1),
('asdf', '6a204bd89f3c8348afd5c77c717a097a', '', 1901, 6, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
