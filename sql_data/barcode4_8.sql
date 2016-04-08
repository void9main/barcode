# Host: localhost  (Version: 5.5.40)
# Date: 2016-04-08 18:51:18
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "barcode"
#

DROP TABLE IF EXISTS `barcode`;
CREATE TABLE `barcode` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT '0' COMMENT '封面状态1是0否',
  `barcode` varchar(255) DEFAULT NULL COMMENT '条形码编号',
  `pdf_url` varchar(255) DEFAULT NULL COMMENT '生成封面的地址',
  `name` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `page` varchar(255) DEFAULT NULL COMMENT '页数',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话',
  `address` text COMMENT '地址',
  `pdfn_url` varchar(255) DEFAULT NULL COMMENT '生成内页地址',
  `book_type` varchar(255) DEFAULT NULL COMMENT '1经济2文艺3精装',
  `typen` varchar(255) DEFAULT '0' COMMENT '内页状态1是0否',
  `log` int(11) DEFAULT NULL COMMENT '备注数量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='条形码';

#
# Data for table "barcode"
#

/*!40000 ALTER TABLE `barcode` DISABLE KEYS */;
/*!40000 ALTER TABLE `barcode` ENABLE KEYS */;

#
# Structure for table "barcode_data"
#

DROP TABLE IF EXISTS `barcode_data`;
CREATE TABLE `barcode_data` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Copy_of_Id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '0' COMMENT '封面状态1是0否',
  `barcode` varchar(255) DEFAULT NULL COMMENT '条形码编号',
  `pdf_url` varchar(255) DEFAULT NULL COMMENT '生成封面的地址',
  `name` varchar(255) DEFAULT NULL COMMENT '用户姓名',
  `page` varchar(255) DEFAULT NULL COMMENT '页数',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话',
  `address` text COMMENT '地址',
  `pdfn_url` varchar(255) DEFAULT NULL COMMENT '生成内页地址',
  `book_type` varchar(255) DEFAULT NULL COMMENT '1经济2文艺3精装',
  `typen` varchar(255) DEFAULT '0' COMMENT '内页状态1是0否',
  `log` int(11) DEFAULT NULL COMMENT '备注数量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "barcode_data"
#

/*!40000 ALTER TABLE `barcode_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `barcode_data` ENABLE KEYS */;

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "order"
#

/*!40000 ALTER TABLE `order` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "order_detail"
#

/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;

#
# Structure for table "order_p_detail"
#

DROP TABLE IF EXISTS `order_p_detail`;
CREATE TABLE `order_p_detail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `photo_md5` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL COMMENT '数量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='照片详情';

#
# Data for table "order_p_detail"
#

/*!40000 ALTER TABLE `order_p_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_p_detail` ENABLE KEYS */;
