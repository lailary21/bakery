/*
SQLyog Community v11.1 (32 bit)
MySQL - 5.5.5-10.1.9-MariaDB : Database - bakery_online
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bakery_online` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `bakery_online`;

/*Table structure for table `bakery` */

DROP TABLE IF EXISTS `bakery`;

CREATE TABLE `bakery` (
  `id_bakery` int(5) NOT NULL AUTO_INCREMENT,
  `id_sp` int(5) NOT NULL,
  `id_type` int(5) NOT NULL,
  `name_bakery` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_bakery` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_bakery`,`id_sp`,`id_type`),
  KEY `id_sp` (`id_sp`),
  KEY `id_type` (`id_type`),
  CONSTRAINT `bakery_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `size_price` (`id_sp`),
  CONSTRAINT `bakery_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `bakery_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=51006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bakery` */

insert  into `bakery`(`id_bakery`,`id_sp`,`id_type`,`name_bakery`,`photo`,`status_bakery`) values (51001,41001,31001,'เค้กส้ม','../bk_pic/1387176222-DSC2292pt-o.jpg','1'),(51002,41002,31002,'คกกี้เนย','../bk_pic/rrrr.jpg','1'),(51003,41001,31003,'พายมะพร้าว','../bk_pic/D9684296-17.jpg','1'),(51004,41001,31004,'ขนมปังกระเทียม','../bk_pic/Picture11270_normal.jpg','1'),(51005,41002,31005,'คัพเค้กช๊อคโกแลต','../bk_pic/Ql5MuewO.jpeg','1');

/*Table structure for table `bakery_group` */

DROP TABLE IF EXISTS `bakery_group`;

CREATE TABLE `bakery_group` (
  `id_group` int(5) NOT NULL AUTO_INCREMENT,
  `name_group` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status_group` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=21006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bakery_group` */

insert  into `bakery_group`(`id_group`,`name_group`,`status_group`) values (21001,'เค้ก','1'),(21002,'คุกกี้','1'),(21003,'พาย','1'),(21004,'ขนมปัง','1'),(21005,'คัพเค้ก','1');

/*Table structure for table `bakery_type` */

DROP TABLE IF EXISTS `bakery_type`;

CREATE TABLE `bakery_type` (
  `id_type` int(5) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status_type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_group` int(5) NOT NULL,
  PRIMARY KEY (`id_type`),
  KEY `id_group` (`id_group`),
  CONSTRAINT `bakery_type_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `bakery_group` (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=31006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `bakery_type` */

insert  into `bakery_type`(`id_type`,`name_type`,`status_type`,`id_group`) values (31001,'เค้กส้ม','1',21001),(31002,'คุกกี้เนย','1',21002),(31003,'พายมะพร้าว','1',21003),(31004,'ขนมปังกระเทียม','1',21004),(31005,'คัพเค้กช๊อคโกแล','1',21005);

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `id_bank` int(5) NOT NULL AUTO_INCREMENT,
  `name_bank` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `accname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `accnum` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status_bank` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=InnoDB AUTO_INCREMENT=61002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bank` */

insert  into `bank`(`id_bank`,`name_bank`,`accname`,`accnum`,`branch`,`status_bank`) values (61001,'ไทยพาณิชย์','ปฐมพร','123-4567-8-9','มีนบุรี','1');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id_com` int(5) NOT NULL AUTO_INCREMENT,
  `id_order` int(9) NOT NULL,
  `orderno` int(9) NOT NULL,
  `id_bakery` int(5) NOT NULL,
  `id_sp` int(5) NOT NULL,
  `id_type` int(5) NOT NULL,
  `datetime_com` datetime NOT NULL,
  `com_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_com`,`id_order`,`orderno`,`id_bakery`,`id_sp`,`id_type`),
  KEY `id_order` (`id_order`),
  KEY `orderno` (`orderno`),
  KEY `id_bakery` (`id_bakery`),
  KEY `id_sp` (`id_sp`),
  KEY `id_type` (`id_type`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `preorder_detail` (`id_order`),
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`orderno`) REFERENCES `preorder_detail` (`orderno`),
  CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_bakery`) REFERENCES `preorder_detail` (`id_bakery`),
  CONSTRAINT `comment_ibfk_4` FOREIGN KEY (`id_sp`) REFERENCES `preorder_detail` (`id_sp`),
  CONSTRAINT `comment_ibfk_5` FOREIGN KEY (`id_type`) REFERENCES `preorder_detail` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=12011 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `comment` */

insert  into `comment`(`id_com`,`id_order`,`orderno`,`id_bakery`,`id_sp`,`id_type`,`datetime_com`,`com_text`) values (12001,201600005,590000005,51005,41002,31005,'2016-05-08 21:25:46','อร่อยมากก'),(12002,201600001,590000001,51001,41001,31001,'2016-05-08 22:23:51','อร่อยมากกกก'),(12003,201600001,590000001,51001,41001,31001,'2016-05-08 22:24:07','อร่อย'),(12004,201600001,590000001,51001,41001,31001,'2016-05-08 22:24:18','อร่อย'),(12005,201600005,590000005,51005,41002,31005,'2016-05-08 22:24:29','อร่อย'),(12006,201600003,590000003,51003,41001,31003,'2016-05-08 22:24:38','อร่อย'),(12007,201600002,590000002,51002,41002,31002,'2016-05-08 22:27:39','อร่อย'),(12008,201600002,590000002,51002,41002,31002,'2016-05-08 22:27:54','อร่อย'),(12009,201600002,590000002,51002,41002,31002,'2016-05-08 22:28:01','อร่อย'),(12010,201600002,590000002,51002,41002,31002,'2016-05-08 22:28:17','อร่อย');

/*Table structure for table `deliver_rate` */

DROP TABLE IF EXISTS `deliver_rate`;

CREATE TABLE `deliver_rate` (
  `id_rate` int(5) NOT NULL AUTO_INCREMENT,
  `name_rate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rate_price` double NOT NULL,
  `status_rate` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=71005 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `deliver_rate` */

insert  into `deliver_rate`(`id_rate`,`name_rate`,`rate_price`,`status_rate`) values (71001,'หนองจอก',10,'1'),(71002,'มีนบุรี',15,'1'),(71003,'ลาดกระบัง',15,'1'),(71004,'คันนายาว',20,'1');

/*Table structure for table `delivery_bakery` */

DROP TABLE IF EXISTS `delivery_bakery`;

CREATE TABLE `delivery_bakery` (
  `id_delivery` int(5) NOT NULL AUTO_INCREMENT,
  `deliverno` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_price` double NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_delivery` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_produce` int(5) NOT NULL,
  `id_owner` int(7) NOT NULL,
  PRIMARY KEY (`id_delivery`),
  KEY `id_produce` (`id_produce`),
  KEY `id_owner` (`id_owner`),
  CONSTRAINT `delivery_bakery_ibfk_1` FOREIGN KEY (`id_produce`) REFERENCES `produce_bakery` (`id_produce`),
  CONSTRAINT `delivery_bakery_ibfk_2` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id_owner`)
) ENGINE=InnoDB AUTO_INCREMENT=11002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `delivery_bakery` */

insert  into `delivery_bakery`(`id_delivery`,`deliverno`,`shipping_price`,`address`,`status_delivery`,`id_produce`,`id_owner`) values (11001,'5911001',100,'มีนบุรี','1',10001,2200001);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id_mem` int(7) NOT NULL AUTO_INCREMENT,
  `fname_mem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname_mem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex_mem` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `address_mem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_mem` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_mem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passwd_mem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_mem` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_mem`)
) ENGINE=InnoDB AUTO_INCREMENT=1100002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `member` */

insert  into `member`(`id_mem`,`fname_mem`,`lname_mem`,`sex_mem`,`address_mem`,`email_mem`,`user_mem`,`passwd_mem`,`status_mem`) values (1100001,'นุจรินทร์','สันประเสริฐ','หญิง','39 ถ.อยู่วิทยา กระทุ่มราย หนองจอก กทม. 10530','lailaelf21@gmail.com','lailary','81dc9bdb52d04dc20036dbd8313ed055','1');

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `id_owner` int(7) NOT NULL AUTO_INCREMENT,
  `fname_owner` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname_owner` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex_owner` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `address_owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_owner` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_owner` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passwd_owner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_owner` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_owner`)
) ENGINE=InnoDB AUTO_INCREMENT=2200002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `owner` */

insert  into `owner`(`id_owner`,`fname_owner`,`lname_owner`,`sex_owner`,`address_owner`,`email_owner`,`user_owner`,`passwd_owner`,`status_owner`) values (2200001,'นุจรินทร์','สันประเสริฐ','หญิง','กรุงเทพ','lailaelf21@gmail.com','lailaelf','81dc9bdb52d04dc20036dbd8313ed055','1');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id_payment` int(5) NOT NULL AUTO_INCREMENT,
  `datetime_pay` datetime NOT NULL,
  `amount_payment` double NOT NULL,
  `evidence_payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_pay` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_bank` int(5) NOT NULL,
  `id_owner` int(7) DEFAULT NULL,
  `orderno` int(9) NOT NULL,
  PRIMARY KEY (`id_payment`),
  KEY `id_bank` (`id_bank`),
  KEY `id_owner` (`id_owner`),
  KEY `orderno` (`orderno`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`),
  CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id_owner`),
  CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`orderno`) REFERENCES `preorder_bakery` (`orderno`)
) ENGINE=InnoDB AUTO_INCREMENT=91002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `payment` */

insert  into `payment`(`id_payment`,`datetime_pay`,`amount_payment`,`evidence_payment`,`status_pay`,`id_bank`,`id_owner`,`orderno`) values (91001,'2016-05-03 10:58:07',500,'','1',61001,2200001,590000001);

/*Table structure for table `preorder_bakery` */

DROP TABLE IF EXISTS `preorder_bakery`;

CREATE TABLE `preorder_bakery` (
  `orderno` int(9) NOT NULL AUTO_INCREMENT,
  `datetime_pre` datetime NOT NULL,
  `total` double NOT NULL,
  `amount_piece` double NOT NULL,
  `deliver_price` double NOT NULL DEFAULT '100',
  `pct` varchar(3) COLLATE utf8_unicode_ci DEFAULT '0',
  `status_cancel` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_mem` int(7) NOT NULL,
  `id_pro` int(5) NOT NULL,
  `id_rate` int(5) NOT NULL,
  PRIMARY KEY (`orderno`),
  KEY `id_mem` (`id_mem`),
  KEY `id_pro` (`id_pro`),
  KEY `id_rate` (`id_rate`),
  CONSTRAINT `preorder_bakery_ibfk_1` FOREIGN KEY (`id_mem`) REFERENCES `member` (`id_mem`),
  CONSTRAINT `preorder_bakery_ibfk_2` FOREIGN KEY (`id_pro`) REFERENCES `promotion` (`id_pro`),
  CONSTRAINT `preorder_bakery_ibfk_3` FOREIGN KEY (`id_rate`) REFERENCES `deliver_rate` (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=590000006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `preorder_bakery` */

insert  into `preorder_bakery`(`orderno`,`datetime_pre`,`total`,`amount_piece`,`deliver_price`,`pct`,`status_cancel`,`id_mem`,`id_pro`,`id_rate`) values (590000001,'2016-05-01 10:13:39',1000,50,110,'20','n',1100001,81001,71001),(590000002,'2016-05-02 10:17:17',800,30,100,'0','n',1100001,81001,71001),(590000003,'2016-05-01 14:06:23',1000,50,100,'0','n',1100001,81002,71002),(590000004,'2016-05-01 15:07:24',500,20,100,'0','n',1100001,81001,71002),(590000005,'2016-05-01 16:08:02',400,20,100,'0','n',1100001,81003,71003);

/*Table structure for table `preorder_detail` */

DROP TABLE IF EXISTS `preorder_detail`;

CREATE TABLE `preorder_detail` (
  `id_order` int(9) NOT NULL AUTO_INCREMENT,
  `orderno` int(9) NOT NULL,
  `id_bakery` int(5) NOT NULL,
  `id_sp` int(5) NOT NULL,
  `id_type` int(5) NOT NULL,
  `amount` int(4) NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id_order`,`orderno`,`id_bakery`,`id_sp`,`id_type`),
  KEY `orderno` (`orderno`),
  KEY `id_bakery` (`id_bakery`),
  KEY `id_sp` (`id_sp`),
  KEY `id_type` (`id_type`),
  CONSTRAINT `preorder_detail_ibfk_1` FOREIGN KEY (`orderno`) REFERENCES `preorder_bakery` (`orderno`),
  CONSTRAINT `preorder_detail_ibfk_2` FOREIGN KEY (`id_bakery`) REFERENCES `bakery` (`id_bakery`),
  CONSTRAINT `preorder_detail_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `bakery` (`id_sp`),
  CONSTRAINT `preorder_detail_ibfk_4` FOREIGN KEY (`id_type`) REFERENCES `bakery` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=201600006 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `preorder_detail` */

insert  into `preorder_detail`(`id_order`,`orderno`,`id_bakery`,`id_sp`,`id_type`,`amount`,`size`,`price`) values (201600001,590000001,51001,41001,31001,50,'3.5*3.5',20),(201600002,590000002,51002,41002,31002,30,'3.5*4.0',22),(201600003,590000003,51003,41001,31003,50,'3.5*3.5',20),(201600004,590000004,51004,41001,31004,20,'3.5*3.5',20),(201600005,590000005,51005,41002,31005,20,'3.5*4.0',22);

/*Table structure for table `produce_bakery` */

DROP TABLE IF EXISTS `produce_bakery`;

CREATE TABLE `produce_bakery` (
  `id_produce` int(5) NOT NULL AUTO_INCREMENT,
  `name_produce` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datetime_pro` datetime NOT NULL,
  `net_weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `status_order` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_payment` int(5) NOT NULL,
  `id_owner` int(7) NOT NULL,
  PRIMARY KEY (`id_produce`),
  KEY `id_payment` (`id_payment`),
  KEY `id_owner` (`id_owner`),
  CONSTRAINT `produce_bakery_ibfk_1` FOREIGN KEY (`id_payment`) REFERENCES `payment` (`id_payment`),
  CONSTRAINT `produce_bakery_ibfk_2` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id_owner`)
) ENGINE=InnoDB AUTO_INCREMENT=10002 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `produce_bakery` */

insert  into `produce_bakery`(`id_produce`,`name_produce`,`datetime_pro`,`net_weight`,`status_order`,`id_payment`,`id_owner`) values (10001,'เค้กส้ม','2016-05-03 10:59:05','15','3',91001,2200001);

/*Table structure for table `promotion` */

DROP TABLE IF EXISTS `promotion`;

CREATE TABLE `promotion` (
  `id_pro` int(5) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pro_descrip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `initial_date_pro` date NOT NULL,
  `start_price` int(3) NOT NULL,
  `end_price` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `percent` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `status_pro` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=81004 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `promotion` */

insert  into `promotion`(`id_pro`,`pro_name`,`pro_descrip`,`initial_date_pro`,`start_price`,`end_price`,`percent`,`status_pro`) values (81001,'โปรโมชันหลัก','ซื้อเบเกอรี่ตั้งแต่ 500 ถึง 999 รับส่วนลด 5%','2016-05-01',500,'999','5','1'),(81002,'โปรโมชันหลัก1','ซื้อเบเกอรี่ตั้งแต่ 1000 บาทขึ้นไป รับส่วนลด 10%','2016-01-01',1000,'','10','1'),(81003,'วันเกิด','ลด 2%','2016-05-26',300,'500','2','1');

/*Table structure for table `size_price` */

DROP TABLE IF EXISTS `size_price`;

CREATE TABLE `size_price` (
  `id_sp` int(5) NOT NULL AUTO_INCREMENT,
  `name_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size_sp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price_sp` double NOT NULL,
  `status_sp` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=41003 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `size_price` */

insert  into `size_price`(`id_sp`,`name_sp`,`size_sp`,`price_sp`,`status_sp`) values (41001,'ขนาดเล็ก','3.5*3.5',20,'1'),(41002,'ขนาดกลาง','3.5*4.0',22,'1');

/*Table structure for table `tel_mem` */

DROP TABLE IF EXISTS `tel_mem`;

CREATE TABLE `tel_mem` (
  `id_mem` int(7) NOT NULL,
  `tel_mem` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_mem`,`tel_mem`),
  CONSTRAINT `tel_mem_ibfk_1` FOREIGN KEY (`id_mem`) REFERENCES `member` (`id_mem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tel_mem` */

insert  into `tel_mem`(`id_mem`,`tel_mem`) values (1100001,'0855180463');

/*Table structure for table `tel_owner` */

DROP TABLE IF EXISTS `tel_owner`;

CREATE TABLE `tel_owner` (
  `id_owner` int(7) NOT NULL,
  `tel_owner` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_owner`,`tel_owner`),
  CONSTRAINT `tel_owner_ibfk_1` FOREIGN KEY (`id_owner`) REFERENCES `owner` (`id_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tel_owner` */

insert  into `tel_owner`(`id_owner`,`tel_owner`) values (2200001,'0855180463');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
