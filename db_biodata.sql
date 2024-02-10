-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_biodata
CREATE DATABASE IF NOT EXISTS `db_biodata` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_biodata`;

-- Dumping structure for table db_biodata.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(15) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text,
  `pekerjaan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `foto_kk` varchar(50) NOT NULL,
  `foto_sktm` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_biodata.mahasiswa: ~1 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
REPLACE INTO `mahasiswa` (`id`, `nama`, `ktp`, `ttl`, `jenis_kelamin`, `no_hp`, `alamat`, `pekerjaan`, `kecamatan`, `foto_ktp`, `foto_kk`, `foto_sktm`) VALUES
	(1, 'aji firlana', '3473276', 'JAMBI,27-MEI-1990', 'Lak-Laki', '0895777', 'JAMBI', 'KERJA', 'Muara Tembesi', '', '', ''),
	(3, 'tes', '7476647', 'JAMBI', 'LAKI LAKI', '0847445', 'MUARA TEMBESI', 'KERJA', 'MUARA TEMBESI', '', '', '');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table db_biodata.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` enum('user','admin','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_biodata.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `email`, `password`, `role`) VALUES
	(1, 'firlana89@gmail.com', '123', 'user'),
	(2, 'admin@gmail.com', '12345', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
