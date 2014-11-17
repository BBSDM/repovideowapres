-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2014 at 11:50 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_wapres_video`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id_level` int(11) NOT NULL,
  `nama_level` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `log_login`
--

CREATE TABLE IF NOT EXISTS `log_login` (
`id_log_login` int(4) NOT NULL,
  `user_id` varchar(4) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `keterangan` enum('login','logout') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `log_login`
--

INSERT INTO `log_login` (`id_log_login`, `user_id`, `ip`, `waktu`, `keterangan`) VALUES
(1, '82', '::1', '2014-10-09 10:52:47', 'login'),
(2, '82', '::1', '2014-10-09 02:57:46', 'login'),
(3, '82', '::1', '2014-10-12 07:46:51', 'logout'),
(4, '82', '::1', '2014-10-12 07:48:12', 'login'),
(5, '82', '::1', '2014-10-12 07:56:25', 'logout'),
(6, '82', '::1', '2014-10-12 07:57:32', 'login'),
(7, '82', '::1', '2014-10-12 07:57:56', 'logout'),
(8, '82', '::1', '2014-10-12 07:58:02', 'login'),
(9, '82', '::1', '2014-10-12 07:58:29', 'logout'),
(10, '82', '::1', '2014-10-12 08:03:06', 'login'),
(11, '82', '::1', '2014-10-12 08:03:38', 'logout'),
(12, '82', '::1', '2014-10-12 08:12:53', 'logout'),
(13, '82', '::1', '2014-10-12 08:13:53', 'login'),
(14, '82', '::1', '2014-10-12 08:14:00', 'logout'),
(15, '82', '::1', '2014-10-12 08:14:07', 'login'),
(16, '82', '::1', '2014-10-12 08:15:27', 'logout'),
(17, '82', '::1', '2014-10-12 08:18:55', 'login'),
(18, '82', '::1', '2014-10-12 08:46:36', 'logout'),
(19, '106', '::1', '2014-10-12 08:46:44', 'login'),
(20, '106', '::1', '2014-10-12 09:02:34', 'logout'),
(21, '82', '::1', '2014-10-12 09:02:44', 'login'),
(22, '82', '::1', '2014-10-12 09:13:40', 'logout'),
(23, '106', '::1', '2014-10-12 09:13:57', 'login'),
(24, '106', '::1', '2014-10-12 09:57:34', 'logout'),
(25, '82', '::1', '2014-10-12 09:58:38', 'login'),
(26, '82', '::1', '2014-10-12 10:31:58', 'logout'),
(27, '82', '::1', '2014-10-12 10:38:19', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `log_video`
--

CREATE TABLE IF NOT EXISTS `log_video` (
`id_log` int(4) NOT NULL,
  `user_id` varchar(4) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `keterangan` enum('upload','lihat') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `log_video`
--

INSERT INTO `log_video` (`id_log`, `user_id`, `ip`, `nama_file`, `waktu`, `keterangan`) VALUES
(1, '82', '::1', 'g1.jpg', '2014-10-09 02:58:57', ''),
(2, '82', '::1', 'oceans-clip - Copy (2).png', '2014-10-09 02:58:57', ''),
(3, '82', '::1', 'oceans-clip - Copy (3).png', '2014-10-09 02:58:57', ''),
(4, '82', '::1', 'oceans-clip - Copy (4).png', '2014-10-09 02:58:57', ''),
(5, '82', '::1', 'oceans-clip - Copy.png', '2014-10-09 02:58:57', ''),
(6, '82', '::1', 'oceans-clip.png', '2014-10-09 02:58:57', ''),
(7, '82', '::1', 'g1.jpg', '2014-10-09 02:59:11', ''),
(8, '82', '::1', 'oceans-clip - Copy (2).png', '2014-10-09 02:59:11', ''),
(9, '82', '::1', 'oceans-clip - Copy (3).png', '2014-10-09 02:59:11', ''),
(10, '82', '::1', 'oceans-clip - Copy (4).png', '2014-10-09 02:59:11', ''),
(11, '82', '::1', 'oceans-clip - Copy.png', '2014-10-09 02:59:11', ''),
(12, '82', '::1', 'oceans-clip.png', '2014-10-09 02:59:11', ''),
(13, '82', '::1', 'g1.jpg', '2014-10-09 08:01:34', ''),
(14, '82', '::1', 'oceans-clip - Copy (2).png', '2014-10-09 08:01:34', ''),
(15, '82', '::1', 'oceans-clip - Copy (3).png', '2014-10-09 08:01:34', ''),
(16, '82', '::1', 'oceans-clip - Copy (4).png', '2014-10-09 08:01:34', ''),
(17, '82', '::1', 'oceans-clip - Copy.png', '2014-10-09 08:01:34', ''),
(18, '82', '::1', 'oceans-clip.png', '2014-10-09 08:01:34', '');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_aplikasi`
--

CREATE TABLE IF NOT EXISTS `manajemen_aplikasi` (
`id_aplikasi` int(4) NOT NULL,
  `nama_client` varchar(50) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `manajemen_aplikasi`
--

INSERT INTO `manajemen_aplikasi` (`id_aplikasi`, `nama_client`, `ip`, `uuid`, `status`) VALUES
(4, 'Setwapres', '202.134.25.0', '81be0850-51a6-11e4-b11c-3230322e3133', 0),
(5, 'Gunadarma', '192.168.1.1', '7408d1a0-51a6-11e4-a4da-3139322e3136', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
`id_tag` int(4) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(34) DEFAULT NULL,
  `confirm` enum('yes','no') NOT NULL DEFAULT 'no',
  `id_key` text NOT NULL,
  `session` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `instansi`, `image`, `no_ktp`, `hp`, `email`, `password`, `level`, `confirm`, `id_key`, `session`, `waktu`) VALUES
(82, 'administrator', 'akhmad fauzi', 'Universitas Gunadarma', 'user_2014-10-10_Untitled.png', '12121212121212121212121', '08777093392112121', 'akhfauz@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '1', 'yes', 'cf835de3d4ea01367c45e412e7a9393a85a4e40af149ed8c3ed6c37c05b67b27813d7ff8072c1035cedd19415adf17128d63186f05f0d656002b0ca1c34f44a0', '', '2014-10-12 10:10:01'),
(106, 'userbiasa', 'user biasa aja keles', '', 'user_2014-10-12_Untitled.png', '12121212121212121kkkkkkkkkkkk', '121212121212121212121lllllllll', 'akhfauz@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '3', 'yes', '0295f34a3ee31cd1a203039294d5cbcf3b87a5e653a9f5b2fa2ccfb8dfd823e8e4ce678e35d828cf4b33e1f804310f921277143d12bd63e31217acc46c94575e', '', '2014-10-12 09:10:18'),
(109, 'akhfauz', 'akhmad fauzi', 'Universitas Gunadarma', '', '0987654321234567', '09876543212345', 'akhfauz.sisfo@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '3', 'yes', 'e2699d00832ed4b94c3aa75e3e796e7c763e5c156b95e48d5226e12b3c2a314c889819e208d7e534d90947a019c68c522dfeed0a7ddb7c4d194700372e620c43', '', '2014-10-13 02:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id_video` int(4) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `waktu` time NOT NULL,
  `tag` text NOT NULL,
  `rating` decimal(30,0) NOT NULL,
  `hit` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `log_login`
--
ALTER TABLE `log_login`
 ADD PRIMARY KEY (`id_log_login`);

--
-- Indexes for table `log_video`
--
ALTER TABLE `log_video`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `manajemen_aplikasi`
--
ALTER TABLE `manajemen_aplikasi`
 ADD PRIMARY KEY (`id_aplikasi`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
 ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`), ADD FULLTEXT KEY `level` (`level`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `log_login`
--
ALTER TABLE `log_login`
MODIFY `id_log_login` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `log_video`
--
ALTER TABLE `log_video`
MODIFY `id_log` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `manajemen_aplikasi`
--
ALTER TABLE `manajemen_aplikasi`
MODIFY `id_aplikasi` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
MODIFY `id_tag` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id_video` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
