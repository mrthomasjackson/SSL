# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: ssl
# Generation Time: 2015-10-16 01:25:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table fruits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fruits`;

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fruitname` varchar(50) NOT NULL DEFAULT '',
  `fruitcolor` varchar(50) NOT NULL DEFAULT '',
  `fruitimage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `fruits` WRITE;
/*!40000 ALTER TABLE `fruits` DISABLE KEYS */;

INSERT INTO `fruits` (`id`, `fruitname`, `fruitcolor`, `fruitimage`)
VALUES
	(15,'Orange','Prange','https://upload.wikimedia.org/wikipedia/commons/7/7b/Orange-Whole-%26-Split.jpg'),
	(17,'Apple','Green','http://www.lanierupshaw.com/wp-content/uploads/2014/10/green-apple-fruit-hd-wallpaper.jpg'),
	(18,'Banana','Yellow','https://www.organicfacts.net/wp-content/uploads/2013/05/Banana21.jpg'),
	(19,'Apple','Red','http://www.dialfredo.com/wp-content/uploads/2015/05/redapplepic.jpg'),
	(21,'grapefruit','red','http://cdn1.medicalnewstoday.com/content/images/articles/280/280882/grapefruit.jpg');

/*!40000 ALTER TABLE `fruits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
