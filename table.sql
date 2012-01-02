# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.9)
# Database: kikrfoursquare1_phpfogapp_com
# Generation Time: 2012-01-02 05:23:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table checkins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `checkins`;

CREATE TABLE `checkins` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `4sq_id` int(25) DEFAULT NULL,
  `createdAt` int(25) DEFAULT NULL,
  `user_id` varchar(25) DEFAULT NULL,
  `user_firstName` varchar(25) DEFAULT '',
  `user_lastname` varchar(25) DEFAULT NULL,
  `user_gender` varchar(25) DEFAULT NULL,
  `user_homeCity` varchar(25) DEFAULT NULL,
  `venue_id` varchar(25) DEFAULT NULL,
  `venue_name` varchar(100) DEFAULT NULL,
  `venue_location_address` varchar(100) DEFAULT NULL,
  `venue_lat` varchar(25) DEFAULT NULL,
  `venue_lng` varchar(25) DEFAULT NULL,
  `venue_city` varchar(25) DEFAULT NULL,
  `venue_state` varchar(2) DEFAULT NULL,
  `venue_postalCode` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
