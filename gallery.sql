-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 19-12-17 12:05
-- 서버 버전: 5.7.28-0ubuntu0.18.04.4
-- PHP 버전: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `opensw_art`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `collection_id` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `collection_id`) VALUES
(1, 'open', '288'),
(2, 'open', '290'),
(3, 'open', '275'),
(4, 'open', '300'),
(5, 'open', '177'),
(6, 'open', '180'),
(7, 'open', '3'),
(8, 'open', '200'),
(9, 'art', '210'),
(10, 'art', '160'),
(11, 'art', '156'),
(12, 'art', '190'),
(13, 'gogh', '201'),
(14, 'gogh', '202'),
(15, 'gogh', '203'),
(16, 'open', '23'),
(17, 'gogh', '204'),
(18, 'gogh', '205'),
(19, 'monet', '12'),
(20, 'monet', '13'),
(21, 'monet', '14'),
(22, 'monet', '15'),
(23, 'monet', '16'),
(24, 'monet', '17'),
(25, 'monet', '18'),
(26, 'open', '5'),
(27, 'open', '6'),
(28, 'open', '8'),
(29, 'open', '9'),
(30, 'open', '10'),
(31, 'open', '11'),
(32, 'art', '161'),
(33, 'art', '162'),
(34, 'art', '163'),
(35, 'art', '164'),
(36, 'art', '165'),
(37, 'art', '166');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
