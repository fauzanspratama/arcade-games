/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.18-MariaDB : Database - db_cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_cms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_cms`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admins` */

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(5) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `artikel` */

insert  into `artikel`(`id_artikel`,`id_kategori`,`judul`,`isi`,`tanggal`,`id_user`) values 
(11,6,'Contoh Artikel','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"img/Logo UPI.png\" alt=\"\" width=\"145\" height=\"134\" /></p>\r\n<p style=\"text-align: center;\">Ini adalah tulisan dengan font 12 berwarna hitam</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; color: #f1c40f;\">ini adalah tulisan dengan font 14 berwarna kuning</span></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: 14pt; color: #f40404;\">Ini adalah tulisan bold berwarna merah</span></strong></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2880b9;\"><em><span style=\"text-decoration: underline;\"><strong><span style=\"font-size: 14pt;\">ini adalah tulisan italic dengan garis bawah berwarna biru</span></strong></span></em></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2fcc71; font-family: impact, sans-serif; font-size: 36pt;\"><em><span style=\"text-decoration: underline;\"><strong>SUDAH DI EDIT</strong></span></em></span></p>','2021-05-26',101),
(12,7,'Judul Baru','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"img/Logo UPI.png\" alt=\"\" width=\"145\" height=\"134\" /></p>\r\n<p style=\"text-align: center;\">Ini adalah tulisan dengan font 12 berwarna hitam</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; color: #f1c40f;\">ini adalah tulisan dengan font 14 berwarna kuning</span></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: 14pt; color: #f40404;\">Ini adalah tulisan bold berwarna merah</span></strong></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2880b9;\"><em><span style=\"text-decoration: underline;\"><strong><span style=\"font-size: 14pt;\">ini adalah tulisan italic dengan garis bawah berwarna biru</span></strong></span></em></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2fcc71; font-family: impact, sans-serif; font-size: 36pt;\"><em><span style=\"text-decoration: underline;\"><strong>SUDAH DI EDIT</strong></span></em></span></p>','2021-05-26',101),
(14,6,'Artikel Lainnya','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"img/Logo UPI.png\" alt=\"\" width=\"145\" height=\"134\" /></p>\r\n<p style=\"text-align: center;\">Ini adalah tulisan dengan font 12 berwarna hitam</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; color: #f1c40f;\">ini adalah tulisan dengan font 14 berwarna kuning</span></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: 14pt; color: #f40404;\">Ini adalah tulisan bold berwarna merah</span></strong></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2880b9;\"><em><span style=\"text-decoration: underline;\"><strong><span style=\"font-size: 14pt;\">ini adalah tulisan italic dengan garis bawah berwarna biru</span></strong></span></em></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2fcc71; font-family: impact, sans-serif; font-size: 36pt;\"><em><span style=\"text-decoration: underline;\"><strong>SUDAH DI EDIT</strong></span></em></span></p>','2021-05-27',101),
(15,8,'Contoh Baru','<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"img/Logo UPI.png\" alt=\"\" width=\"145\" height=\"134\" /></p>\r\n<p style=\"text-align: center;\">Ini adalah tulisan dengan font 12 berwarna hitam</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt; color: #f1c40f;\">ini adalah tulisan dengan font 14 berwarna kuning</span></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"font-size: 14pt; color: #f40404;\">Ini adalah tulisan bold berwarna merah</span></strong></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2880b9;\"><em><span style=\"text-decoration: underline;\"><strong><span style=\"font-size: 14pt;\">ini adalah tulisan italic dengan garis bawah berwarna biru</span></strong></span></em></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2fcc71; font-family: impact, sans-serif; font-size: 36pt;\"><em><span style=\"text-decoration: underline;\"><strong>SUDAH DI EDIT</strong></span></em></span></p>','2021-05-27',101),
(18,7,'Selamat Hari Jadian','<p><img src=\"img/Codepolitan.jpg\" alt=\"\" width=\"225\" height=\"225\" /></p>\r\n<p>Halo Say..</p>','2021-06-03',101),
(19,11,'Kalau Nasi Kuning, Rasa apa?','<p>aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbbbbbbbbccccccccccccccccccccccccccccccddddddddddddddddddddddddddeeeeeeeeeeeeefffffffffffffffffffffffffffggggggggggggggggggggggggggggghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiijjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjkkkkkkkkkkkkkkkkkkkkkkkkkkkklllllllllllllllllllllllllllllllllllllllllmmmmmmmmmmmmmmmmmmmmmmmmmmmmmnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnooooooooooooooooooooooooooooooooooooooopppppppppppppppppppp</p>','2021-06-03',101);

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values 
(6,'contoh'),
(7,'baru'),
(11,'Makanan');

/*Table structure for table `pengguna` */

DROP TABLE IF EXISTS `pengguna`;

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengguna` */

insert  into `pengguna`(`id`,`username`,`nama_lengkap`,`password`,`level`) values 
(1,'admin','Admin','21232f297a57a5a743894a0e4a801fc3','admin'),
(5,'fauzan','Fauzan','eacaf53cb2b533a68baa765faedf7e59','admin'),
(6,'amtsal','Amtsal','8c9ba93149d44ae9e27b2f58631bf710','user'),
(7,'david','David','172522ec1028ab781d9dfd17eaca4427','admin'),
(8,'ronaldo','Cristiano Ronaldo','c5aa3124b1adad080927ce4d144c6b33','user'),
(9,'kaka','Ricardo Kaka','5541c7b5a06c39b267a5efae6628e003','user'),
(10,'dono','Dono Kasino Indro','e3b810115555736a216f137df55789f6','admin');

/* Procedure structure for procedure `InsertDataUser` */

/*!50003 DROP PROCEDURE IF EXISTS  `InsertDataUser` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertDataUser`(IN username VARCHAR(50), IN nama_lengkap VARCHAR(50), IN PASSWORD VARCHAR(50), IN LEVEL char(50))
BEGIN
		INSERT INTO pengguna (username, nama_lengkap, PASSWORD, LEVEL) VALUES (username, nama_lengkap, PASSWORD, LEVEL); 
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
