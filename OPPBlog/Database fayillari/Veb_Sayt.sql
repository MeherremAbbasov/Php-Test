-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Nis 2021, 09:39:34
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `Veb_Sayt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Bloglar`
--

CREATE TABLE `Bloglar` (
  `Blog_id` int(11) NOT NULL,
  `Blog_Basliqi` varchar(1000) NOT NULL,
  `Blog_Metni` varchar(1000) NOT NULL,
  `Blog_Tarixi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Register`
--

CREATE TABLE `Register` (
  `User_id` int(11) NOT NULL,
  `User_Name` varchar(140) NOT NULL,
  `User_Surname` varchar(150) NOT NULL,
  `User_Password` varchar(200) NOT NULL,
  `User_Email` varchar(159) NOT NULL,
  `Register_Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `Register`
--

INSERT INTO `Register` (`User_id`, `User_Name`, `User_Surname`, `User_Password`, `User_Email`, `Register_Date`) VALUES
(1, 'Samir', 'Kerimvo', 'eeeeeeee', 'fffff', '2021-04-23 09:21:08'),
(2, 'Meherrem', 'Abbasov`', '498789', 'Meherrem632@gmail.com', '2021-04-23 09:22:18'),
(3, 'AYdan ', 'Alizade', '498789', 'AYdan@fgmail.com', '2021-04-23 09:23:26'),
(4, 'Batya', 'Abbasov', 'aaaa', 'aaaaaa', '2021-04-27 14:23:41'),
(5, 'Nazim', 'Mesimov', 'Nazim@gmail.com', '8787987', '2021-04-27 14:28:28'),
(6, 'Nazim', 'Mesimov', 'Nazim@gmail.com', '8787987', '2021-04-27 14:39:32'),
(7, '', 'Mesimov', 'Nazim@gmail.com', '8787987', '2021-04-27 14:40:14'),
(8, '', 'Mesimov', 'Nazim@gmail.com', '8787987', '2021-04-27 14:41:38'),
(9, '', 'Mesimov', 'Nazim@gmail.com', '8787987', '2021-04-27 14:41:41'),
(10, '', '', '', '', '2021-04-27 14:50:52'),
(11, '', '', '', '', '2021-04-27 14:52:34'),
(12, '', 'aaaaaaaaa', 'aaaaaaaaa', 'a', '2021-04-27 14:52:42'),
(13, 'qqqqqq', '', '', '', '2021-04-27 14:56:54'),
(14, 'qqqqqqqq', '', '', '', '2021-04-27 14:57:07'),
(15, 'aaaaaaaaa', 'aaaaaaaa', '', '', '2021-04-27 14:57:35'),
(16, 'aaaaaa', 'aaaaaaaaa', 'aaaa', '', '2021-04-27 15:03:05'),
(17, 'Meherrem', 'Abbasov', 'Meherrem632@gmail.com', '4544', '2021-04-27 17:33:50'),
(18, '', '', '', '', '2021-04-27 17:49:09'),
(19, '', '', '', '', '2021-04-27 17:54:21'),
(20, 'Camal', 'Agayev', 'Meherrem632@gmail.com', '123456789', '2021-04-29 06:31:07'),
(21, 'Camal', 'Agayev', 'Meherrem632@gmail.com', '123456789', '2021-04-29 06:31:30'),
(22, 'Ali', 'Aliyev', 'Ali@gmail.com', '123456789', '2021-04-29 06:33:46'),
(23, 'Arzu', 'azru', 'Meherrem632@gmail.com', '123456789', '2021-04-29 06:35:02'),
(24, 'Nara', 'Aliyeva', 'Meherrem632@gmail.com', '0554211075', '2021-04-29 06:41:08'),
(25, 'Fexreddin', 'Eliyeva', '0554211075', 'Meherrem632@gmail.com', '2021-04-29 06:44:11'),
(26, 'test', 'test', '123456789', 'Meherrem632@gmail.com', '2021-04-29 06:47:05'),
(27, 'emine', 'abasova', '123456789', 'meherrem632@gmail.com', '2021-04-29 07:28:00'),
(28, 'Xeyale', 'Abaszade', 'Xeyale12', 'XeyaleAbaszade@gmail.com', '2021-04-29 07:37:51');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Bloglar`
--
ALTER TABLE `Bloglar`
  ADD PRIMARY KEY (`Blog_id`);

--
-- Tablo için indeksler `Register`
--
ALTER TABLE `Register`
  ADD PRIMARY KEY (`User_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `Bloglar`
--
ALTER TABLE `Bloglar`
  MODIFY `Blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `Register`
--
ALTER TABLE `Register`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
