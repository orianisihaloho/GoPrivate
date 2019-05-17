-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 09:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goprivate`
--

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_user_id` int(10) NOT NULL,
  `to_user_id` int(10) NOT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `from_user_id`, `to_user_id`, `subject`, `message`) VALUES
(1, 1, 2, 'kuliah?', 'kuliah IBAD jadi jam 8 apa jam 10,.?'),
(2, 3, 2, 'balikin buku', 'udah mau habisa masa pinjam nih,\r\nbalikin buku gue dong brur,.'),
(3, 2, 1, '[ask]: tugas', 'jak, tugas ibad dah submit blum?'),
(4, 3, 1, 'kerja kelompok', 'bro, di mana nih,.?\r\nkita kumpul di EH yak,.!'),
(5, 1, 2, 'tugas ibad', 'udah ngumpul tadi siang,.\r\ndeadline hari ini lho,.!'),
(6, 1, 2, 'UTS', 'coy, ujian ali ini, bisa lah,... :)'),
(7, 1, 2, 'hai', 'apa kabar?'),
(8, 1, 2, 'hai', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `fullname`, `email`, `role`, `username`, `password`) VALUES
(1, 'admin', 'elisajesica@gmail.com', 'guru', 'admin', 'admin'),
(2, 'elisabeth', 'elisabeth@gmail', 'guru', 'elisa', 'elisa'),
(3, 'jesi', 'jesi@gmail.com', 'orangtua', 'je', 'jesica'),
(4, 'adhyka', 'adhyka@gmail.com', 'orangtua', 'adhyka', 'adhyka'),
(5, 'Wilda Sinaga', 'wildasinaga@gmail.com', 'guru', 'wilda', 'wilda');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_guru`
--

CREATE TABLE `pesan_guru` (
  `id_pesanan` int(30) NOT NULL,
  `namaguru` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `pelajaran` varchar(30) NOT NULL,
  `hari1` varchar(30) NOT NULL,
  `pukul1` varchar(10) NOT NULL,
  `hari2` varchar(30) NOT NULL,
  `pukul2` varchar(10) NOT NULL,
  `hari3` varchar(30) NOT NULL,
  `pukul3` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_guru`
--

INSERT INTO `pesan_guru` (`id_pesanan`, `namaguru`, `telepon`, `level`, `pelajaran`, `hari1`, `pukul1`, `hari2`, `pukul2`, `hari3`, `pukul3`) VALUES
(1, 'Sondang Aritonang', '082387105770', 'smp', 'Fisika', 'selasa', '12:12', 'disabled', '', 'disabled', ''),
(2, 'Winner', '08235566777', 'sd', 'IPA', 'selasa', '13:50', 'disabled', '', 'disabled', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_tes` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL,
  `testimoni` varchar(250) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_tes`, `nama`, `email`, `testimoni`, `date`, `art_id`, `art_url`) VALUES
(1, 'desy', 'desykristinasiahaan@gmail.com', 'bagus', '2017-12-01 15:11:24', 1, 'testimoni.php'),
(2, 'jesica', 'jesica@gmail.com', 'saya suka sekali', '2017-12-01 15:33:51', 1, 'testimoni.php'),
(3, 'oriani', 'oriani@gmail.com', 'bagus', '2017-12-01 15:44:28', 1, 'testimoni.php'),
(4, 'dippu', 'dippu@gmail.com', 'anak saya jadi tambah pintar. saya suka sekali website ini.', '2017-12-01 15:47:20', 1, 'testimoni.php');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `role`, `username`, `password`) VALUES
(1, 'admin', 'elisajesica@gmail.com', 'guru', 'admin', 'admin'),
(2, 'elisabeth', 'elisabeth@gmail', 'guru', 'elisa', 'elisa'),
(3, 'jesi', 'jesi@gmail.com', 'orangtua', 'je', 'jesica'),
(4, 'adhyka', 'adhyka@gmail.com', 'orangtua', 'adhyka', 'adhyka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from` (`from_user_id`),
  ADD KEY `to` (`to_user_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesan_guru`
--
ALTER TABLE `pesan_guru`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesan_guru`
--
ALTER TABLE `pesan_guru`
  MODIFY `id_pesanan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_tes` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
