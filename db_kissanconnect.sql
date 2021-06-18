/*
SQLyog Community v10.3 
MySQL - 5.5.21 : Database - db_kissanconnect
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kissanconnect` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kissanconnect`;

/*Table structure for table `tbl_allproduct` */

DROP TABLE IF EXISTS `tbl_allproduct`;

CREATE TABLE `tbl_allproduct` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `catid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_allproduct` */

insert  into `tbl_allproduct`(`pid`,`catid`,`pname`,`pimage`,`status`) values (2,4,'Driller','../images/product/6.jpg',0);

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `categoryid` int(10) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `catimg` varchar(100) DEFAULT NULL,
  `cattype` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`categoryid`,`catname`,`catimg`,`cattype`,`status`) values (1,'djgfjhgfaskjsgsdfg',NULL,'expert',0),(2,'lkfjdnhdflghkjdnf',NULL,'expert',0),(4,'Machineries','../images/category/6.jpg','shop',0);

/*Table structure for table `tbl_expert` */

DROP TABLE IF EXISTS `tbl_expert`;

CREATE TABLE `tbl_expert` (
  `expertid` int(10) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) NOT NULL,
  `eaddress` varchar(100) NOT NULL,
  `eemail` varchar(100) NOT NULL,
  `econtact` varchar(10) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `qulaification` varchar(50) NOT NULL,
  `field` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`expertid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_expert` */

insert  into `tbl_expert`(`expertid`,`ename`,`eaddress`,`eemail`,`econtact`,`designation`,`qulaification`,`field`,`image`,`status`) values (1,'dghdsghldkghjq',';lfdhkfhg;dhfj;kl','sdfgsgsd@dsghdfhg','5484544','sgsjggfukggfh','sfkhgsdfglsdjgn','djgfjhgfaskjsgsdfg','images/Penguins.jpg',0),(2,'sdgsdfgsdgfsdfgsd','fgsdfgsdfgsdfgsdfg','sdfgsdgsdfgsdg@fgdsgdsf','959526455','dfhgkldhgsdk','dfg;hdfhkdfjn','lkfjdnhdflghkjdnf','images/Desert.jpg',0);

/*Table structure for table `tbl_farmer` */

DROP TABLE IF EXISTS `tbl_farmer`;

CREATE TABLE `tbl_farmer` (
  `farmerid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `faddr` varchar(100) NOT NULL,
  `fdistrict` varchar(50) NOT NULL,
  `fstate` varchar(50) NOT NULL,
  `fcontact` varchar(10) NOT NULL,
  `femail` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`farmerid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_farmer` */

insert  into `tbl_farmer`(`farmerid`,`fname`,`faddr`,`fdistrict`,`fstate`,`fcontact`,`femail`,`status`) values (1,'dfhjdfjhdfhj','dfhjdfhjdfhj','dfhjdfhjdfh','jdfhjdfhj','9539878967','dfjdfhjfhdfh@sdghfdghdgh',0);

/*Table structure for table `tbl_feedback` */

DROP TABLE IF EXISTS `tbl_feedback`;

CREATE TABLE `tbl_feedback` (
  `feedid` int(10) NOT NULL AUTO_INCREMENT,
  `farmerid` int(10) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`feedid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_feedback` */

insert  into `tbl_feedback`(`feedid`,`farmerid`,`feedback`,`reply`,`status`) values (1,1,'ghdfhgdfhgdfhg','hffddfhgdfghdfghdfghdfhg',1),(2,1,'bdfhmgdgnfdgdghndfgdfgdfg','No Reply Recieved',0);

/*Table structure for table `tbl_finding` */

DROP TABLE IF EXISTS `tbl_finding`;

CREATE TABLE `tbl_finding` (
  `findingid` int(10) NOT NULL AUTO_INCREMENT,
  `expertid` int(10) NOT NULL,
  `fnote` varchar(100) NOT NULL,
  `fdescri` varchar(100) NOT NULL,
  `uplddate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`findingid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_finding` */

insert  into `tbl_finding`(`findingid`,`expertid`,`fnote`,`fdescri`,`uplddate`,`status`) values (1,2,'../findings/Advanced-java.pdf','jhjfjfjfjfhjfhjfghjfghjfghjfghjfghjfghj','2018-01-16',1);

/*Table structure for table `tbl_fproduct` */

DROP TABLE IF EXISTS `tbl_fproduct`;

CREATE TABLE `tbl_fproduct` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_fproduct` */

/*Table structure for table `tbl_login` */

DROP TABLE IF EXISTS `tbl_login`;

CREATE TABLE `tbl_login` (
  `loginid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`),
  KEY `loginid` (`loginid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_login` */

insert  into `tbl_login`(`loginid`,`username`,`password`,`usertype`,`status`) values (1,'admin@gmail.com','admin','admin',1),(5,'dfjdfhjfhdfh@sdghfdghdgh','9539878967','farmer',1),(3,'sdfgsdgsdfgsdg@fgdsgdsf','959526455','expert',1),(2,'sdfgsgsd@dsghdfhg','5484544','expert',2),(4,'sdghsdghsdgh@fhdfhg','656556564','shop',1);

/*Table structure for table `tbl_offer` */

DROP TABLE IF EXISTS `tbl_offer`;

CREATE TABLE `tbl_offer` (
  `offerid` int(10) NOT NULL AUTO_INCREMENT,
  `offername` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `availablefrom` date NOT NULL,
  `availableto` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`offerid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_offer` */

insert  into `tbl_offer`(`offerid`,`offername`,`description`,`availablefrom`,`availableto`,`status`) values (1,'Free Pesticide','Venue : - Krishi Bhavan ,Kunnuvazhy','2018-01-15','2018-02-01',1),(2,'Free Pesticide','Venue : - Krishi Bhavan, kunnuvazhy','2018-01-15','2018-02-01',0);

/*Table structure for table `tbl_order` */

DROP TABLE IF EXISTS `tbl_order`;

CREATE TABLE `tbl_order` (
  `orderid` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL,
  `shopid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `orderdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_order` */

insert  into `tbl_order`(`orderid`,`fid`,`shopid`,`pid`,`quantity`,`orderdate`,`status`) values (1,1,1,2,10,'2018-01-17',1),(5,1,1,2,1,'2018-01-17',1),(6,1,1,2,1,'2018-01-17',0);

/*Table structure for table `tbl_payment` */

DROP TABLE IF EXISTS `tbl_payment`;

CREATE TABLE `tbl_payment` (
  `payid` int(10) NOT NULL AUTO_INCREMENT,
  `payeeemail` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `paydate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_payment` */

insert  into `tbl_payment`(`payid`,`payeeemail`,`amount`,`paydate`,`status`) values (1,'dfjdfhjfhdfh@sdghfdghdgh',1000000,'2018-01-17',0),(2,'dfjdfhjfhdfh@sdghfdghdgh',100000,'2018-01-17',0);

/*Table structure for table `tbl_query` */

DROP TABLE IF EXISTS `tbl_query`;

CREATE TABLE `tbl_query` (
  `qid` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL,
  `catid` int(10) NOT NULL,
  `query` varchar(100) NOT NULL,
  `qdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_query` */

insert  into `tbl_query`(`qid`,`fid`,`catid`,`query`,`qdate`,`status`) values (1,1,1,'fjfhjdfjdfjdfjfjdfhjdfhjdfhjdfjdfjdhjdfjdfhjdfhjdfj','2018-01-17',0);

/*Table structure for table `tbl_queryreply` */

DROP TABLE IF EXISTS `tbl_queryreply`;

CREATE TABLE `tbl_queryreply` (
  `qrid` int(10) NOT NULL AUTO_INCREMENT,
  `qid` int(10) NOT NULL,
  `exid` int(10) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `qrdate` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`qrid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_queryreply` */

/*Table structure for table `tbl_reward` */

DROP TABLE IF EXISTS `tbl_reward`;

CREATE TABLE `tbl_reward` (
  `rewardid` int(10) NOT NULL AUTO_INCREMENT,
  `rewardname` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rewarddate` date NOT NULL,
  `lastdate` date NOT NULL,
  `rdescri` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rewardid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_reward` */

/*Table structure for table `tbl_shop` */

DROP TABLE IF EXISTS `tbl_shop`;

CREATE TABLE `tbl_shop` (
  `shopid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `slocation` varchar(100) NOT NULL,
  `sdistrict` varchar(50) NOT NULL,
  `sstate` varchar(50) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `scontact` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shopid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_shop` */

insert  into `tbl_shop`(`shopid`,`sname`,`slocation`,`sdistrict`,`sstate`,`semail`,`scontact`,`status`) values (1,'sdghsghsdgh','sdghsdghsd','hsdghsdghds','ghsdghsdgh','sdghsdghsdgh@fhdfhg','656556564',0);

/*Table structure for table `tbl_sproduct` */

DROP TABLE IF EXISTS `tbl_sproduct`;

CREATE TABLE `tbl_sproduct` (
  `spid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL,
  `shopid` int(10) NOT NULL,
  `sellprice` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`spid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sproduct` */

insert  into `tbl_sproduct`(`spid`,`pid`,`shopid`,`sellprice`,`quantity`,`status`) values (1,2,1,100000,5,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
