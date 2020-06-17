-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 03:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `date_of_entry` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `status` enum('Aktif','Cuti','Lulus','DO') NOT NULL,
  `status_of_profil` double NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `email`, `nim`, `date_of_entry`, `date_of_birth`, `status`, `status_of_profil`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(122, 'Winda Astuti S.E.', 'suartini.hani@example.net', 'E1E115000', '1977-06-03', '1992-05-20', 'Aktif', 87, 1, '2020-04-19 08:11:58', NULL, NULL),
(123, 'Raden Praba Hutapea', 'winarsih.saadat@example.net', 'E1E115001', '1972-03-26', '1998-07-11', 'Lulus', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(124, 'Oman Anggriawan', 'sihombing.karya@example.org', 'E1E115002', '1980-10-11', '1975-09-18', 'Cuti', 100, 1, '2020-04-19 08:11:58', NULL, NULL),
(125, 'Lili Safitri M.Kom.', 'maimunah.farida@example.net', 'E1E115003', '1987-02-24', '1982-12-05', 'DO', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(126, 'Ivan Daliman Megantara S.Gz', 'mangunsong.cici@example.com', 'E1E115004', '2010-10-07', '2000-10-07', 'DO', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(127, 'Gasti Hastuti', 'humaira.padmasari@example.net', 'E1E115005', '1986-02-22', '1984-05-05', 'Aktif', 100, 1, '2020-04-19 08:11:58', NULL, NULL),
(128, 'Jabal Adika Adriansyah S.Kom', 'darsirah.susanti@example.org', 'E1E115006', '2006-02-15', '2008-05-13', 'Aktif', 87, 1, '2020-04-19 08:11:58', NULL, NULL),
(129, 'Anita Novitasari', 'ulva07@example.org', 'E1E115007', '2000-10-14', '1990-04-23', 'Cuti', 50, 1, '2020-04-19 08:11:58', NULL, NULL),
(130, 'Maria Cinthia Pratiwi S.Farm', 'ella22@example.org', 'E1E115008', '1988-08-30', '2005-08-28', 'Lulus', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(131, 'Reza Paiman Dabukke', 'saragih.olivia@example.org', 'E1E115009', '1986-11-12', '1992-09-02', 'DO', 100, 1, '2020-04-19 08:11:58', NULL, NULL),
(132, 'Suci Halimah', 'prastuti.endra@example.com', 'E1E115010', '2009-08-06', '2010-01-01', 'Lulus', 87, 1, '2020-04-19 08:11:58', NULL, NULL),
(133, 'Michelle Purnawati', 'iswahyudi.ayu@example.net', 'E1E115011', '1992-01-08', '2006-10-04', 'Lulus', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(134, 'Yoga Simanjuntak', 'uanggriawan@example.net', 'E1E115012', '1995-09-03', '1994-09-21', 'DO', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(135, 'Lukman Darmanto Hutapea S.Pd', 'saadat28@example.com', 'E1E115013', '2003-02-15', '1981-07-26', 'Lulus', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(136, 'Faizah Wulandari', 'pradipta.humaira@example.com', 'E1E115014', '2020-01-02', '1992-04-07', 'DO', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(137, 'Anastasia Pudjiastuti', 'lsaptono@example.org', 'E1E115015', '1984-01-18', '1985-07-19', 'Aktif', 50, 1, '2020-04-19 08:11:58', NULL, NULL),
(138, 'Ikin Tarihoran', 'hairyanto15@example.org', 'E1E115016', '1991-11-15', '1978-11-15', 'Lulus', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(139, 'Gaiman Prakasa', 'mandasari.darsirah@example.org', 'E1E115017', '1992-10-14', '1970-09-07', 'Cuti', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(140, 'Edison Jagaraga Simbolon', 'cornelia36@example.net', 'E1E115018', '1998-05-11', '1976-02-28', 'Lulus', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(141, 'Timbul Siregar', 'thamrin.shakila@example.com', 'E1E115019', '2008-09-23', '2005-04-16', 'Lulus', 87, 1, '2020-04-19 08:11:58', NULL, NULL),
(142, 'Jail Rajata', 'irma56@example.com', 'E1E115020', '1997-04-11', '1978-12-15', 'Aktif', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(143, 'Ellis Namaga', 'martana.andriani@example.org', 'E1E115021', '1979-06-07', '2017-12-27', 'Lulus', 50, 1, '2020-04-19 08:11:58', NULL, NULL),
(144, 'Titin Hariyah', 'hamzah.andriani@example.org', 'E1E115022', '1973-06-09', '2010-11-09', 'Lulus', 80, 1, '2020-04-19 08:11:58', NULL, NULL),
(145, 'Septi Mardhiyah M.Pd', 'mustofa.elma@example.net', 'E1E115023', '2008-06-05', '1999-01-29', 'DO', 35, 1, '2020-04-19 08:11:58', NULL, NULL),
(146, 'Zulaikha Handayani', 'kala.adriansyah@example.com', 'E1E115024', '2010-03-03', '2003-07-19', 'Aktif', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(147, 'Jagaraga Nashiruddin', 'onasyiah@example.net', 'E1E115025', '1992-10-15', '2008-11-29', 'Cuti', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(148, 'Mala Almira Wahyuni S.Kom', 'malika.hastuti@example.net', 'E1E115026', '2006-02-05', '1993-08-08', 'Aktif', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(149, 'Lasmono Wahyudin', 'atmaja60@example.org', 'E1E115027', '1995-07-01', '2013-10-18', 'Lulus', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(150, 'Tira Andriani S.Farm', 'carla.yuliarti@example.org', 'E1E115028', '1989-07-02', '2000-04-17', 'Cuti', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(151, 'Darsirah Manullang', 'ratih90@example.com', 'E1E115029', '1985-05-10', '1997-12-11', 'Lulus', 80, 1, '2020-04-19 08:11:58', NULL, NULL),
(152, 'Julia Widiastuti S.H.', 'salimah.mardhiyah@example.net', 'E1E115030', '1991-10-07', '2006-05-27', 'DO', 90, 1, '2020-04-19 08:11:58', NULL, NULL),
(153, 'Jaga Tarihoran', 'qprasasta@example.org', 'E1E115031', '1997-11-03', '1984-05-21', 'Aktif', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(154, 'Pia Aryani M.Ak', 'nprasasta@example.com', 'E1E115032', '1989-07-29', '1994-01-23', 'Cuti', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(155, 'Alika Cici Rahimah S.Pd', 'samosir.bambang@example.com', 'E1E115033', '2000-11-23', '1970-08-25', 'Cuti', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(156, 'Ira Ani Agustina S.Ked', 'febi.saputra@example.net', 'E1E115034', '2006-06-25', '2009-09-23', 'DO', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(157, 'Lulut Hidayanto', 'raisa.narpati@example.com', 'E1E115035', '2016-04-08', '2009-10-05', 'Lulus', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(158, 'Ika Hassanah S.Gz', 'mmulyani@example.org', 'E1E115036', '1975-09-22', '1992-09-18', 'Lulus', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(159, 'Oni Wahyuni M.Pd', 'salimah.uyainah@example.com', 'E1E115037', '2006-04-04', '2013-11-20', 'Aktif', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(160, 'Lutfan Danu Nababan S.Pt', 'ajiono10@example.com', 'E1E115038', '1990-03-29', '1999-05-11', 'Aktif', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(161, 'Kadir Wibisono S.Pd', 'lprastuti@example.net', 'E1E115039', '2000-08-08', '1973-03-25', 'DO', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(162, 'Liman Radit Budiyanto', 'nmardhiyah@example.com', 'E1E115040', '1993-04-15', '2004-07-17', 'DO', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(163, 'Malik Praba Maheswara', 'kawaca.sihombing@example.net', 'E1E115041', '1973-07-15', '1982-04-16', 'Cuti', 80, 1, '2020-04-19 08:11:58', NULL, NULL),
(164, 'Salwa Uchita Wijayanti S.Farm', 'latika.rahayu@example.com', 'E1E115042', '2003-03-31', '1976-10-30', 'Lulus', 35, 1, '2020-04-19 08:11:58', NULL, NULL),
(165, 'Gangsar Simanjuntak', 'putra.michelle@example.net', 'E1E115043', '1974-03-31', '1978-02-04', 'Aktif', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(166, 'Edward Mansur', 'lpadmasari@example.net', 'E1E115044', '2014-09-22', '1986-12-25', 'DO', 35, 1, '2020-04-19 08:11:58', NULL, NULL),
(167, 'Wage Pratama', 'hassanah.reksa@example.com', 'E1E115045', '1998-06-04', '1988-03-09', 'Lulus', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(168, 'Asirwanda Lazuardi', 'firmansyah.ayu@example.com', 'E1E115046', '1977-01-15', '1979-06-10', 'Cuti', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(169, 'Garang Firmansyah M.TI.', 'riyanti.wirda@example.com', 'E1E115047', '1973-01-17', '2017-01-25', 'Lulus', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(170, 'Raisa Ami Laksita S.E.I', 'rajata.maman@example.com', 'E1E115048', '2006-04-06', '1979-06-09', 'Lulus', 87, 1, '2020-04-19 08:11:58', NULL, NULL),
(171, 'Radit Saragih', 'rfujiati@example.com', 'E1E115049', '2014-04-30', '1973-10-09', 'Aktif', 45, 1, '2020-04-19 08:11:58', NULL, NULL),
(172, 'Cindy Anggraini', 'zanggriawan@example.org', 'E1E115050', '1988-11-23', '2004-07-08', 'Lulus', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(173, 'Cengkir Prasetyo', 'puspita.lasmono@example.net', 'E1E115051', '2005-11-27', '1994-12-03', 'Cuti', 50, 1, '2020-04-19 08:11:58', NULL, NULL),
(174, 'Dodo Santoso', 'oirawan@example.net', 'E1E115052', '2013-08-28', '1988-12-20', 'Cuti', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(175, 'Kasiyah Aryani', 'janet.zulaika@example.org', 'E1E115053', '2011-07-11', '1993-08-16', 'Aktif', 67, 1, '2020-04-19 08:11:58', NULL, NULL),
(176, 'Gandi Megantara', 'tami.hutasoit@example.net', 'E1E115054', '1979-08-15', '2000-07-18', 'Aktif', 80, 1, '2020-04-19 08:11:58', NULL, NULL),
(177, 'Cakrabuana Nainggolan', 'fpalastri@example.org', 'E1E115055', '1988-03-30', '2001-06-23', 'Cuti', 95, 1, '2020-04-19 08:11:58', NULL, NULL),
(178, 'Devi Shania Yulianti S.IP', 'nmardhiyah@example.net', 'E1E115056', '1970-09-01', '2000-09-28', 'Cuti', 70, 1, '2020-04-19 08:11:58', NULL, NULL),
(179, 'Danang Koko Siregar S.Farm', 'winarsih.shakila@example.com', 'E1E115057', '2004-06-30', '1985-06-22', 'Cuti', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(180, 'Ulva Rahayu', 'emas55@example.net', 'E1E115058', '1974-08-10', '1988-10-02', 'Lulus', 30, 1, '2020-04-19 08:11:58', NULL, NULL),
(181, 'Ajimat Jumari Sihombing', 'narpati.lembah@example.com', 'E1E115059', '1977-10-09', '2019-09-16', 'DO', 67, 1, '2020-04-19 08:11:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('verify','active','nonactive') NOT NULL DEFAULT 'verify',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `username`, `password`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'active', 1, '2020-06-16 23:35:13', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
