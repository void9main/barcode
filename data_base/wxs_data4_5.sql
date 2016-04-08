# Host: localhost  (Version: 5.5.40)
# Date: 2016-04-05 18:43:38
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "order"
#

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `errorCode` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `orderNo` varchar(255) DEFAULT NULL,
  `orderMemo` varchar(255) DEFAULT NULL,
  `deliverNo` varchar(255) DEFAULT NULL,
  `deliverMsg` varchar(255) DEFAULT NULL,
  `download` varchar(255) DEFAULT '0',
  `pro_strat` varchar(255) DEFAULT NULL,
  `pro_end` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `bindingStyle` varchar(255) DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `n_type` varchar(255) DEFAULT NULL,
  `f_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=1290 DEFAULT CHARSET=utf8;

#
# Data for table "order"
#

/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1285,'ok',NULL,'16040103498078570043','','1','1|卡卡|18606524001|18606524001|北京市北京市','1','','','1','2',NULL,NULL,NULL),(1287,'ok',NULL,'16040103502340290043','','1','1|卡卡|18606524001|18606524001|河北省衡水市','1','','','1','3',NULL,NULL,NULL),(1289,'ok',NULL,'16040103507849390043','','1','1|卡卡|18606524001|18606524001|浙江省杭州市','1','','','1','1',NULL,NULL,NULL);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

#
# Structure for table "order_detail"
#

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `cover_url` varchar(255) DEFAULT NULL,
  `cover_md5` varchar(255) DEFAULT NULL,
  `content_url` varchar(255) DEFAULT NULL,
  `content_md5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "order_detail"
#

/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
INSERT INTO `order_detail` VALUES (1,'1285','http://inimg01.jiuyan.info/9089cf456e71fcfebc3f45a4f27d85ed','29916f51aeb921019b21bb9e14ae5cb6','http://inimg01.jiuyan.info/b1eda98c3386ee1caabb95cc9ce196e8','f71a7248d0c614feb3ecbb5782158934'),(2,'1287','http://inimg01.jiuyan.info/425f38aee141deb249820190a7d816d3','c51152398180182ca279296d046f2ee5','http://inimg01.jiuyan.info/3e674cebca60eb472d4f0848a5210a68','89719aa039b41973b3caaea436c45378'),(3,'1289','http://inimg01.jiuyan.info/c79b84f80890a114f14df0fd2fdbb32c','4e4707fa60da312bab5fbcd14d312130','http://inimg01.jiuyan.info/e9f0ae2d6c396ceaa4c6787224019598','663f73b8f0d0e3740ef7228ae3033421');
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
