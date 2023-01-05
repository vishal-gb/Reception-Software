SET SQL_MODE = `NO_AUTO_VALUE_ON_ZERO`;
START TRANSACTION;
SET time_zone = `+00:00`;

CREATE TABLE `student_data1` (
  `Name` varchar(40) NOT NULL,
  `ModeOfEntry` varchar(30) NOT NULL,
  `NameOfClg` varchar(100) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Sex` varchar(50) NOT NULL,
  `IdentityProof` varchar(50) NOT NULL,
  `IdentityProofNo` varchar(50) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `PurposeOfVisit` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `MeetingPerson` varchar(50) NOT NULL,
  `NumberOfPersons` varchar(50) NOT NULL,

`studentphoto` varchar(250) NOT NULL,
`Time` DATETIME NOT NULL,
`id` int(11) NOT NULL 


  )  ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;