-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 08:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gowarmindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `deskripsi`, `harga`, `foto`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Indomie (Rebus / Goreng) Tante', 'Indomie rebus atau goreng tanpa telur dengan tambahan sayuran', '5000', 'makanan_1624981579.jpg', 1, '2021-06-29 22:47:41', NULL, NULL),
(2, 'Indomie (Rebus / Goreng) Telur', 'Indomie rebus atau goreng telur dengan tambahan sayuran', '7000', 'makanan_1624981679.jpg', 1, '2021-06-29 22:47:41', NULL, NULL),
(3, 'Nasi Telor', 'Nasi dengan telur dadar dan sayuran sehat', '7000', 'makanan_1624985660.jpg', 1, '2021-06-29 17:56:12', 1, '2021-06-29 18:54:20'),
(6, 'Nasi Sarden', 'Nasi putih dengan ikan sarden', '8000', 'makanan_1624986625.jpg', 1, '2021-06-29 19:10:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` varchar(40) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `deskripsi`, `id_user`, `waktu`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit a libero in volutpat. Ut aliquam eget enim at dapibus. Donec non diam a lacus malesuada eleifend a porttitor quam. Mauris quis lorem nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam nunc turpis, scelerisque sit amet sapien ac, blandit porta metus. Pellentesque nec lectus dui.', 2, '2021-07-01 19:47:24'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit a libero in volutpat. Ut aliquam eget enim at dapibus. Donec non diam a lacus malesuada eleifend a porttitor quam. Mauris quis lorem nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam nunc turpis, scelerisque sit amet sapien ac, blandit porta metus. Pellentesque nec lectus dui.', 2, '2021-07-01 19:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `password`, `role`) VALUES
(1, 'admin@mail.com', 'Admin', '0192023a7bbd73250516f069df18b500', 1),
(2, 'abdiltegar12@gmail.com', 'Abdil Tegar Arifin', '4c7420670566ee2315c2292921c55166', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `fk_user_makanan` (`created_by`),
  ADD KEY `fk_user_makanan_edited` (`modified_by`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`),
  ADD KEY `fk_user_minuman` (`created_by`),
  ADD KEY `fk_user_minuman_edited` (`modified_by`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `fk_user_testimoni` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `fk_user_makanan` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_makanan_edited` FOREIGN KEY (`modified_by`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `minuman`
--
ALTER TABLE `minuman`
  ADD CONSTRAINT `fk_user_minuman` FOREIGN KEY (`created_by`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_minuman_edited` FOREIGN KEY (`modified_by`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_user_testimoni` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
