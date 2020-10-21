-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_booking.booking
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_jadwal` varchar(50) DEFAULT NULL,
  `booking_kendaraan` varchar(50) DEFAULT NULL,
  `booking_cuci` varchar(50) DEFAULT NULL,
  `booking_plat` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `booking_harga` varchar(50) DEFAULT NULL,
  `booking_status` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table db_booking.booking: ~11 rows (approximately)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` (`booking_id`, `booking_jadwal`, `booking_kendaraan`, `booking_cuci`, `booking_plat`, `user_id`, `booking_harga`, `booking_status`, `created_at`, `updated_at`) VALUES
	(10, '23-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'B2345H', 2, '0', 'Antrian', '2020-09-23 12:53:43', NULL),
	(11, '23-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'B2345H', 2, '30000', 'Antrian', '2020-09-23 12:55:16', NULL),
	(12, '23-09-2020', 'Mobil Besar', 'Cuci Biasa', 'B3456H', 2, '30000', 'Antrian', '2020-09-23 13:08:56', NULL),
	(13, '23-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'c1234b', 2, '30000', 'Antrian', '2020-09-23 13:09:45', NULL),
	(14, '23-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'H7887N', 2, '30000', 'Antrian', '2020-09-23 13:11:06', NULL),
	(15, '24-09-2020', 'Mobil Kecil', 'Cuci Hidrolik', 'A6767T', 2, '35000', 'Antrian', '2020-09-23 13:13:55', NULL),
	(16, '24-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'H6777R', 2, '30000', 'Antrian', '2020-09-23 13:17:19', NULL),
	(17, '24-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'J78786', 2, '30000', 'Antrian', '2020-09-23 13:20:41', NULL),
	(18, '28-09-2020', 'Mobil Offroad', 'Cuci Hidrolik', 'BNT5656', 5, '0', 'Antrian', '2020-09-28 14:40:18', NULL),
	(19, '28-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'ab6767', 5, '30000', 'Antrian', '2020-09-28 14:40:39', NULL),
	(20, '28-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'B8989r', 1, '30000', 'Antrian', '2020-09-28 14:48:29', NULL),
	(21, '28-09-2020', 'Mobil Kecil', 'Cuci Biasa', 'B8989r', 1, '30000', 'Antrian', '2020-09-28 14:48:29', NULL);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Dumping structure for table db_booking.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_booking.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `username`, `fullname`, `password`, `status`, `level`, `no_hp`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'Administrator', '0192023a7bbd73250516f069df18b500', 'aktif', 'admin', '087722686655', '2020-09-02 20:19:41', NULL),
	(2, 'wildanbasry', 'Wildan Basry', '0192023a7bbd73250516f069df18b500', 'active', 'user', '087722686677', '2020-09-10 15:39:13', NULL),
	(3, 'halo', 'Halo', 'b4e4f42fe0f0783001bb15f0d375b795', 'active', 'user', '878878', '2020-09-11 08:04:12', NULL),
	(4, 'gcydgcyd', 'ycdgcydgy', '999e872a9072f8a80ec4f6149b8c412b', 'active', 'user', '56566', '2020-09-11 08:06:06', NULL),
	(5, 'muzhaffar', 'Muzhaffar', '0192023a7bbd73250516f069df18b500', 'active', 'user', '087722686655', '2020-09-28 14:39:39', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
