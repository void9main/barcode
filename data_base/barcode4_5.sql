# Host: localhost  (Version: 5.5.40)
# Date: 2016-04-05 18:43:26
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='条形码';

#
# Data for table "barcode"
#

/*!40000 ALTER TABLE `barcode` DISABLE KEYS */;
INSERT INTO `barcode` VALUES (27,'0','603113195619','../source/GnLyApe9zVF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/GnLyApe9zVN.pdf','2','0',1),(28,'0','405635147734','../source/KmOU4ooGwRF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/KmOU4ooGwRN.pdf','2','0',1),(29,'0','627763319384','../source/SSb1Zug7X4F.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SSb1Zug7X4N.pdf','2','0',1),(30,'0','366797249471','../source/SdnxPrcHCuF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SdnxPrcHCuN.pdf','2','0',1),(31,'0','435186116110','../source/d3gcfy0aDMF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/d3gcfy0aDMN.pdf','2','0',1),(32,'0','649852309442','../source/djPcq8QgatF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/djPcq8QgatN.pdf','2','0',1),(33,'0','682915390310','../source/sHfWUMkiujF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/sHfWUMkiujN.pdf','2','0',1);
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "barcode_data"
#

/*!40000 ALTER TABLE `barcode_data` DISABLE KEYS */;
INSERT INTO `barcode_data` VALUES (1,0,'0','807828632805','../source/W79875A5012186679875F.pdf','  张国飞','210 P','18811213618','北京市北京市西城区大半截胡同2号护国寺中医院新街口门诊部骨科\n','../source/W79875A5012186679875N.pdf','1','0',1),(2,0,'0','067439204158','../source/W79875A5012186779875F.pdf','  张国飞','221 P','18811213618','北京市北京市西城区大半截胡同2号护国寺中医院新街口门诊部骨科\n','../source/W79875A5012186779875N.pdf','1','0',1),(3,0,'0','608453229943','../source/W79875A5012186879875F.pdf','  张国飞','236 P','18811213618','北京市北京市西城区大半截胡同2号护国寺中医院新街口门诊部骨科\n','../source/W79875A5012186879875N.pdf','1','0',1),(4,0,'0','820915122530','../source/W79875A5012186979875F.pdf','  张国飞','228 P','18811213618','北京市北京市西城区大半截胡同2号护国寺中医院新街口门诊部骨科\n','../source/W79875A5012186979875N.pdf','1','0',1),(5,0,'0','764598824352','../source/W79875A5012187079875F.pdf','  张国飞','208 P','18811213618','北京市北京市西城区大半截胡同2号护国寺中医院新街口门诊部骨科\n','../source/W79875A5012187079875N.pdf','1','0',1),(6,0,'0','485132899867','../source/GnLyApe9zVF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/GnLyApe9zVN.pdf','2','0',1),(7,0,'0','436315254911','../source/KmOU4ooGwRF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/KmOU4ooGwRN.pdf','2','0',1),(8,0,'0','413565557952','../source/SSb1Zug7X4F.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SSb1Zug7X4N.pdf','2','0',1),(9,0,'0','975238780886','../source/SdnxPrcHCuF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SdnxPrcHCuN.pdf','2','0',1),(10,0,'0','233514874926','../source/d3gcfy0aDMF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/d3gcfy0aDMN.pdf','2','0',1),(11,0,'0','364250073393','../source/djPcq8QgatF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/djPcq8QgatN.pdf','2','0',1),(12,0,'0','089565338689','../source/sHfWUMkiujF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/sHfWUMkiujN.pdf','2','0',1),(13,0,'0','648497778134','../source/GnLyApe9zVF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/GnLyApe9zVN.pdf','2','0',1),(14,0,'0','044335148917','../source/KmOU4ooGwRF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/KmOU4ooGwRN.pdf','2','0',1),(15,0,'0','214524314309','../source/SSb1Zug7X4F.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SSb1Zug7X4N.pdf','2','0',1),(16,0,'0','073331918284','../source/SdnxPrcHCuF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SdnxPrcHCuN.pdf','2','0',1),(17,0,'0','631758549203','../source/d3gcfy0aDMF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/d3gcfy0aDMN.pdf','2','0',1),(18,0,'0','329036600902','../source/djPcq8QgatF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/djPcq8QgatN.pdf','2','0',1),(19,0,'0','039234893914','../source/sHfWUMkiujF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/sHfWUMkiujN.pdf','2','0',1),(20,0,'0','061108426619','../source/GnLyApe9zVF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/GnLyApe9zVN.pdf','2','0',1),(21,0,'0','652821918558','../source/KmOU4ooGwRF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/KmOU4ooGwRN.pdf','2','0',1),(22,0,'0','499405664248','../source/SSb1Zug7X4F.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SSb1Zug7X4N.pdf','2','0',1),(23,0,'0','582231761038','../source/SdnxPrcHCuF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SdnxPrcHCuN.pdf','2','0',1),(24,0,'0','641497982045','../source/d3gcfy0aDMF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/d3gcfy0aDMN.pdf','2','0',1),(25,0,'0','764208507309','../source/djPcq8QgatF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/djPcq8QgatN.pdf','2','0',1),(26,0,'0','161451466639','../source/sHfWUMkiujF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/sHfWUMkiujN.pdf','2','0',1),(27,0,'0','603113195619','../source/GnLyApe9zVF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/GnLyApe9zVN.pdf','2','0',1),(28,0,'0','405635147734','../source/KmOU4ooGwRF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/KmOU4ooGwRN.pdf','2','0',1),(29,0,'0','627763319384','../source/SSb1Zug7X4F.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SSb1Zug7X4N.pdf','2','0',1),(30,0,'0','366797249471','../source/SdnxPrcHCuF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/SdnxPrcHCuN.pdf','2','0',1),(31,0,'0','435186116110','../source/d3gcfy0aDMF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/d3gcfy0aDMN.pdf','2','0',1),(32,0,'0','649852309442','../source/djPcq8QgatF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/djPcq8QgatN.pdf','2','0',1),(33,0,'0','682915390310','../source/sHfWUMkiujF.pdf',' ----制作1本','210P','卡卡','18606524001','../source/sHfWUMkiujN.pdf','2','0',1);
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "order_detail"
#

/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
