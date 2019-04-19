# test_frame
home work: test frame



突然发现快到周五交作业的截止时间了，0_0

只能花了几个小时赶出来个框架，

大部分纯手写，严重缺乏各种判断和异常处理，

试了一下运行没问题MVC都能跑通，

各位老师请见谅 T_T 







以下是配套建表语句
/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2019-04-19 18:11:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `int` int(10) unsigned NOT NULL DEFAULT '0',
  `char` char(64) NOT NULL DEFAULT '',
  `tinyint` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `decimal` decimal(10,3) unsigned NOT NULL DEFAULT '0.000',
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `timestamp` timestamp NOT NULL DEFAULT '1970-01-01 08:00:01' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('5', '222', 'admin3', '0', '0.000', '2019-01-31 17:02:20', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('3', '222', 'admin3', '0', '0.000', '2019-01-31 17:01:53', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('4', '222', 'admin3', '0', '0.000', '2019-01-31 17:02:14', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('6', '123', 'admin3', '0', '0.000', '2019-01-31 17:03:19', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('7', '222', 'admin2', '0', '0.000', '2019-01-31 17:04:04', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('8', '111', 'admin3', '0', '0.000', '2019-01-31 17:57:39', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('9', '222', 'admin2', '0', '0.000', '2019-01-31 17:57:39', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('10', '111', 'admin3', '0', '0.000', '2019-01-31 17:57:48', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('11', '222', 'admin2', '0', '0.000', '2019-01-31 17:57:48', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('12', '111', 'admin3', '0', '0.000', '2019-02-12 18:41:26', '1970-01-01 08:00:01');
INSERT INTO `test` VALUES ('13', '222', 'admin2', '0', '0.000', '2019-02-12 18:41:26', '1970-01-01 08:00:01');
