/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : shopping

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-28 18:28:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_tile` varchar(255) DEFAULT NULL,
  `post_desc` text,
  `created` datetime DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'minh', 'hoai', '2019-05-28 18:26:06', null);
INSERT INTO `posts` VALUES ('2', null, null, null, null);
INSERT INTO `posts` VALUES ('3', null, null, null, null);
