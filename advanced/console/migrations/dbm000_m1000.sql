/*
Navicat MySQL Data Transfer

Source Server         : phpmyadmin
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : dbm000

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-06-17 16:15:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `m1000`
-- ----------------------------
DROP TABLE IF EXISTS `m1000`;
CREATE TABLE `m1000` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kd_menu` varchar(50) NOT NULL,
  `nm_menu` varchar(200) NOT NULL,
  `jval` longtext,
  `note` text,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`,`kd_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m1000
-- ----------------------------
INSERT INTO `m1000` VALUES ('1', 'sss_berita_acara', 'Berita Acara', '[{\"label\":\"<i class=\\\"fa fa-pencil\\\"></i> New\",\"url\":[\"new\"]},{\"label\":\"<i class=\\\"fa fa-suitcase\\\"></i> PM <span id=\\\"menu-badge-1\\\" class=\\\"badge badge-purple\\\" style=\\\"float: right\\\"></span>\",\"url\":[\"pm\"]},{\"label\":\"<i class=\\\"fa fa-inbox\\\"></i> Inbox\",\"url\":[\"inbox\"]},{\"label\":\"<i class=\\\"fa fa-send\\\"></i> Sent\",\"url\":[\"sent\"]},{\"label\":\"<i class=\\\"fa fa-folder-o\\\"></i> Draft\",\"url\":[\"draft\"]}]', '', null, null, null, '2015-06-13 17:10:22', '1');
INSERT INTO `m1000` VALUES ('2', 'sss_po', 'Purchase Order', '[{\"label\":\"<i class=\\\"fa fa-pencil\\\"></i> New\",\"url\":[\"new\"]},{\"label\":\"<i class=\\\"fa fa-suitcase\\\"></i> PO List<span id=\\\"menu-badge-1\\\" class=\\\"badge badge-purple\\\" style=\\\"float: right\\\"></span>\",\"url\":[\"list\"]},{\"label\":\"<i class=\\\"fa fa-inbox\\\"></i> Setup\",\"url\":[\"setup\"]}]', null, null, null, null, '2015-06-12 11:23:40', '1');
