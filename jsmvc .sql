/*
SQLyog Ultimate v11.27 (32 bit)
MySQL - 5.5.47 : Database - jsmvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jsmvc` /*!40100 DEFAULT CHARACTER SET gbk */;

USE `jsmvc`;

/*Table structure for table `js_news` */

DROP TABLE IF EXISTS `js_news`;

CREATE TABLE `js_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号 自增',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `uid` int(11) DEFAULT NULL COMMENT '作者',
  `content` text COMMENT '内容',
  `from` varchar(200) DEFAULT NULL COMMENT '出处',
  `author` varchar(200) DEFAULT NULL COMMENT '作者',
  `dateline` int(10) DEFAULT NULL COMMENT '写作时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `js_news` */

insert  into `js_news`(`id`,`title`,`uid`,`content`,`from`,`author`,`dateline`) values (4,'川普获胜了',1,'真的获胜了','4','3',1478608580),(3,'希拉里败选了',1,'真的败选了','4','3',1478608506);

/*Table structure for table `js_user` */

DROP TABLE IF EXISTS `js_user`;

CREATE TABLE `js_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `username` varchar(200) NOT NULL COMMENT '用户名',
  `pwd` varchar(200) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='景山MVC显示用户表';

/*Data for the table `js_user` */

insert  into `js_user`(`id`,`username`,`pwd`) values (1,'admin','admin'),(2,'jingshan','123123'),(3,'jingshan','123123'),(4,'jingshan','123123'),(6,'jingshan33','123123'),(7,'jingshan33','123123'),(8,'jingshan33','123123'),(9,'jingshan33','123123'),(10,'jingshan33','123123'),(11,'jingshan33','123123'),(12,'jingshan33','123123'),(13,'jingshan33','123123'),(14,'jingshan33','123123'),(15,'jingshan33','123123'),(16,'jingshan33','123123'),(17,'jingshan33','123123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
