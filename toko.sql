/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - toko
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`toko` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `toko`;

/*Table structure for table `baju` */

DROP TABLE IF EXISTS `baju`;

CREATE TABLE `baju` (
  `id_baju` varchar(7) NOT NULL,
  `nama_baju` varchar(30) DEFAULT NULL,
  `jenis_baju` varchar(30) DEFAULT NULL,
  `ukuran` varchar(30) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `id_merk` varchar(7) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_baju`),
  KEY `id_merk` (`id_merk`),
  CONSTRAINT `id_merk` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `baju` */

/*Table structure for table `batal_jual` */

DROP TABLE IF EXISTS `batal_jual`;

CREATE TABLE `batal_jual` (
  `kd_trx` varchar(50) DEFAULT NULL,
  `id_baju` varchar(7) DEFAULT NULL,
  `kasir` varchar(30) DEFAULT NULL,
  `nama_baju` varchar(30) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `harga_total` int(10) DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  KEY `kd_trx2` (`kd_trx`),
  KEY `id_baju3` (`id_baju`),
  CONSTRAINT `id_baju3` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id_baju`),
  CONSTRAINT `kd_trx2` FOREIGN KEY (`kd_trx`) REFERENCES `trx_out` (`kd_trx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `batal_jual` */

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `id_merk` varchar(7) NOT NULL,
  `nm_merk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `merk` */

/*Table structure for table `no_trx` */

DROP TABLE IF EXISTS `no_trx`;

CREATE TABLE `no_trx` (
  `id` int(1) NOT NULL,
  `no_trx` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `no_trx` (`no_trx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `no_trx` */

/*Table structure for table `trx_out` */

DROP TABLE IF EXISTS `trx_out`;

CREATE TABLE `trx_out` (
  `kd_trx` varchar(50) NOT NULL,
  `id_baju` varchar(7) DEFAULT NULL,
  `kasir` varchar(30) DEFAULT NULL,
  `nama_baju` varchar(30) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `harga_total` int(10) DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  PRIMARY KEY (`kd_trx`),
  KEY `id_baju` (`id_baju`),
  CONSTRAINT `id_baju` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id_baju`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `trx_out` */

/*Table structure for table `trx_sementara` */

DROP TABLE IF EXISTS `trx_sementara`;

CREATE TABLE `trx_sementara` (
  `kd_trx` varchar(50) DEFAULT NULL,
  `id_baju` varchar(7) DEFAULT NULL,
  `kasir` varchar(30) DEFAULT NULL,
  `nama_baju` varchar(30) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `harga_total` int(10) DEFAULT NULL,
  `tgl_trx` date DEFAULT NULL,
  KEY `kd_trx` (`kd_trx`),
  KEY `id_baju2` (`id_baju`),
  CONSTRAINT `id_baju2` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id_baju`),
  CONSTRAINT `kd_trx` FOREIGN KEY (`kd_trx`) REFERENCES `trx_out` (`kd_trx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `trx_sementara` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varbinary(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlp` varchar(30) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama`,`alamat`,`no_tlp`,`level`) values 
('A01','admin','admin','admin','rahasis','0','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
