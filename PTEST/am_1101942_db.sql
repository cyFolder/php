/* Create Database and Table */
create database uecs2094_ptest;

use uecs2094_ptest;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255),
  `staffNo` varchar(255),
  `email` varchar(255),
  `phone` varchar(255),
  PRIMARY KEY  (`id`)
);