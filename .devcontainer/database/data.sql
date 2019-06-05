DROP TABLE IF EXISTS `dockerSample`;

CREATE TABLE `dockerSample` (
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dockerSample` WRITE;
INSERT INTO `dockerSample` VALUES ('A'),('B'),('C');
UNLOCK TABLES;