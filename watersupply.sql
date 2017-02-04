/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : watersupply

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-15 10:58:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for `area`
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `area_id` int(12) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(30) DEFAULT NULL,
  `city_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('3', 'gulghast', '1');
INSERT INTO `area` VALUES ('4', 'chungi nine', '1');
INSERT INTO `area` VALUES ('5', 'MTN', '4');
INSERT INTO `area` VALUES ('6', 'MTN2', '4');

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `city_id` int(12) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('2', 'Karachi');
INSERT INTO `city` VALUES ('3', 'islamabad');
INSERT INTO `city` VALUES ('4', 'NewCity');

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(18) DEFAULT NULL,
  `last_name` varchar(13) DEFAULT NULL,
  `father_name` varchar(12) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `cnic` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `registeration_date` varchar(0) DEFAULT NULL,
  `city_id` varchar(12) DEFAULT NULL,
  `area_id` varchar(12) DEFAULT NULL,
  `cellno` varchar(12) DEFAULT NULL,
  `tel_landline` varchar(11) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('0', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `customer` VALUES ('1', '$fname', '$lname', '$faname', '$phoneno', '$tellandline', '$cnic', '$city', null, null, null, '0', '0', '$address');
INSERT INTO `customer` VALUES ('2', 'abdul', 'basit', '', '0092678765', '06123456777', '3630212345677', '', null, null, null, '0', '0', 'new multan coloney house no 25');
INSERT INTO `customer` VALUES ('3', 'abdul', 'basit', 'javed iqbal', '0092678765', '06123456777', '3630212345677', '', null, null, null, 'basit22@gmai', 'abcd1234', 'new multan coloney block w hou');
INSERT INTO `customer` VALUES ('4', 'abdul', 'basit', 'javed iqbal', 'basit22@gm', 'abcd1234', '3630212345677', '', null, null, null, '009267876567', '06123456777', 'new multan coloney house no 25');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(12) NOT NULL AUTO_INCREMENT,
  `order_date` datetime NOT NULL,
  `area_id` int(12) NOT NULL,
  `customer_id` int(12) NOT NULL,
  `narration` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  `suppleir_od` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('1', '2016-08-09 13:49:56', '1', '1', 'safsav', 'Approve', '1');
INSERT INTO `order` VALUES ('2', '2016-08-05 15:27:15', '1', '1', 'monthy', 'pending ', '1');

-- ----------------------------
-- Table structure for `order_detail`
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `order_detail_id` int(12) NOT NULL AUTO_INCREMENT,
  `order_id` int(12) DEFAULT NULL,
  `product_id` int(12) DEFAULT NULL,
  `order_qty` varchar(12) DEFAULT NULL,
  `totalprice` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('1', '1', '3', '20', '300');
INSERT INTO `order_detail` VALUES ('2', '2', '4', '10', '300');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(12) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(16) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `liter` varchar(20) DEFAULT NULL,
  `sales_price` varchar(20) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('3', 'water', 'water picture', '20', '300', 'water1.jpg');

-- ----------------------------
-- Table structure for `purchase_order`
-- ----------------------------
DROP TABLE IF EXISTS `purchase_order`;
CREATE TABLE `purchase_order` (
  `purchase_order_id` int(50) NOT NULL AUTO_INCREMENT,
  `purcahse_date` datetime DEFAULT NULL,
  `vendor_id` int(50) DEFAULT NULL,
  `narration` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`purchase_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of purchase_order
-- ----------------------------

-- ----------------------------
-- Table structure for `purchase_order_detail`
-- ----------------------------
DROP TABLE IF EXISTS `purchase_order_detail`;
CREATE TABLE `purchase_order_detail` (
  `purcahase_order_detail_id` int(12) NOT NULL AUTO_INCREMENT,
  `purchase_order_id` int(12) DEFAULT NULL,
  `product_id` int(12) DEFAULT NULL,
  `quantity` decimal(50,0) DEFAULT NULL,
  `purchase_price` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`purcahase_order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of purchase_order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `supplier`
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `supplier_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` text,
  `fname` text,
  `cellno` decimal(50,0) DEFAULT NULL,
  `cnic` decimal(50,0) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('1', 'sabir', 'iqbal', '9213234345333', '1244534534333', 'multan coloney');
INSERT INTO `supplier` VALUES ('2', 'hamza', 'imran', '9213234345333', '1244534534333', 'resheedabad');

-- ----------------------------
-- Table structure for `transaction`
-- ----------------------------
DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `transaction_id` int(12) NOT NULL AUTO_INCREMENT,
  `narration` text,
  `date` date DEFAULT NULL,
  `order_id` varchar(12) DEFAULT NULL,
  `dr` int(12) DEFAULT NULL,
  `cr` int(12) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaction
-- ----------------------------

-- ----------------------------
-- Table structure for `usercomment`
-- ----------------------------
DROP TABLE IF EXISTS `usercomment`;
CREATE TABLE `usercomment` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` text,
  `last_name` text,
  `contactno` varchar(12) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usercomment
-- ----------------------------
INSERT INTO `usercomment` VALUES ('2', 'abdul', 'basit', '929837492374', 'this is the best site ever ');
INSERT INTO `usercomment` VALUES ('4', 'sabir', 'iqbal', '03434259420', 'I have found this site the best site ever .This site is providing the great facility');
INSERT INTO `usercomment` VALUES ('5', '', '', '', 'message');

-- ----------------------------
-- Table structure for `vendor`
-- ----------------------------
DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor` (
  `vendor_id` int(12) NOT NULL AUTO_INCREMENT,
  `name` text,
  `fname` text,
  `phone` decimal(50,0) DEFAULT NULL,
  `cnic` decimal(50,0) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vendor
-- ----------------------------
