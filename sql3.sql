SET SQL_MODE = `NO_AUTO_VALUE_ON_ZERO`;
START TRANSACTION;
SET time_zone = `+00:00`;

CREATE TABLE `student_data` (
  `Name` varchar(40) NOT NULL,
  `Admission` varchar(30) NOT NULL,
  `Roll_No` varchar(20) NOT NULL,
  `Place` varchar(50) NOT NULL,

`studentphoto` varchar(250) NOT NULL,
`Time` DATETIME NOT NULL,
`id` int(11) NOT NULL 


  )  ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;