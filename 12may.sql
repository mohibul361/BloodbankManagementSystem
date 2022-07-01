-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table bloodbank.blood_delivery
CREATE TABLE IF NOT EXISTS `blood_delivery` (
  `User_ID` int(11) DEFAULT NULL,
  `Request_ID` int(11) DEFAULT NULL,
  `Center` text,
  `Date` date DEFAULT NULL,
  `Blood_group` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  KEY `Request_ID` (`Request_ID`),
  CONSTRAINT `FK_receive_blood_blood_req` FOREIGN KEY (`Request_ID`) REFERENCES `blood_req` (`Request_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.blood_delivery: ~3 rows (approximately)
/*!40000 ALTER TABLE `blood_delivery` DISABLE KEYS */;
INSERT INTO `blood_delivery` (`User_ID`, `Request_ID`, `Center`, `Date`, `Blood_group`, `Quantity`) VALUES
	(16, 11, 'HO', '2019-05-25', 'B+', 2),
	(16, 12, 'HO', '2019-05-30', 'A+', 1),
	(17, 14, 'HO', '2019-05-24', 'O+', 2);
/*!40000 ALTER TABLE `blood_delivery` ENABLE KEYS */;

-- Dumping structure for table bloodbank.blood_req
CREATE TABLE IF NOT EXISTS `blood_req` (
  `Request_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Required_date` date NOT NULL,
  `Blood_Group` varchar(50) NOT NULL,
  `Blood_Type` varchar(50) NOT NULL,
  `Quantity` int(2) NOT NULL,
  `Patient_info` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`Request_ID`),
  KEY `FK_blood_req_user` (`User_ID`),
  CONSTRAINT `FK_blood_req_user` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.blood_req: ~4 rows (approximately)
/*!40000 ALTER TABLE `blood_req` DISABLE KEYS */;
INSERT INTO `blood_req` (`Request_ID`, `User_ID`, `Required_date`, `Blood_Group`, `Blood_Type`, `Quantity`, `Patient_info`, `Contact`, `Location`) VALUES
	(11, 16, '2019-05-06', 'B+', 'Plasma', 1, 'female and attack cancer ', 2123532, 'DMC'),
	(12, 16, '2019-05-22', 'A+', 'Platelets', 2, 'female and attack cancer ', 2123532, 'MMC'),
	(13, 16, '2019-05-23', 'O-', 'Platelets', 1, 'Road Accident', 2123532, 'DMC'),
	(14, 17, '2019-05-16', 'O+', 'Platelets', 2, 'Road Accident', 1711000000, 'Dhaka medical');
/*!40000 ALTER TABLE `blood_req` ENABLE KEYS */;

-- Dumping structure for table bloodbank.collect_blood
CREATE TABLE IF NOT EXISTS `collect_blood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Donor_Id` int(11) DEFAULT NULL,
  `Center` text,
  `Date` date DEFAULT NULL,
  `Blood_group` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Blood_test` varchar(50) DEFAULT NULL,
  `Expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_collect_blood_donor` (`Donor_Id`),
  CONSTRAINT `FK_collect_blood_donor` FOREIGN KEY (`Donor_Id`) REFERENCES `donor` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.collect_blood: ~4 rows (approximately)
/*!40000 ALTER TABLE `collect_blood` DISABLE KEYS */;
INSERT INTO `collect_blood` (`id`, `Donor_Id`, `Center`, `Date`, `Blood_group`, `Quantity`, `Blood_test`, `Expiry_date`) VALUES
	(30, 32, 'HO', '2019-05-30', 'A+', 2, 'ok', '2019-05-30'),
	(31, 33, 'HO', '2019-05-29', 'O+', 2, 'ok', '2019-05-29'),
	(32, 34, 'HO', '2019-05-28', 'B+', 1, 'ok', '2019-05-28'),
	(34, 36, 'HO', '2019-05-28', 'A-', 2, 'ok', '2019-05-28');
/*!40000 ALTER TABLE `collect_blood` ENABLE KEYS */;

-- Dumping structure for table bloodbank.delivery_status
CREATE TABLE IF NOT EXISTS `delivery_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.delivery_status: ~0 rows (approximately)
/*!40000 ALTER TABLE `delivery_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery_status` ENABLE KEYS */;

-- Dumping structure for table bloodbank.donor
CREATE TABLE IF NOT EXISTS `donor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL DEFAULT '0',
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL DEFAULT '0',
  `Blood_group` varchar(50) NOT NULL DEFAULT '0',
  `Address` varchar(255) NOT NULL DEFAULT '0',
  `Mobile_no` varchar(50) NOT NULL DEFAULT '0',
  `Weight` int(2) NOT NULL DEFAULT '0',
  `Age` int(2) NOT NULL DEFAULT '0',
  `Center` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.donor: ~7 rows (approximately)
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` (`ID`, `Name`, `Email`, `Gender`, `Blood_group`, `Address`, `Mobile_no`, `Weight`, `Age`, `Center`) VALUES
	(31, 'abir', '', 'MALE', 'AB+', 'Banasree', '01712000000', 56, 25, 'HO'),
	(32, 'Asif', 'asif@yahoo.com', 'MALE', 'A+', 'Tangi', '01712000000', 56, 25, 'HO'),
	(33, 'Nuha', 'nuha@gmail.com', 'FEMALE', 'O+', 'Dhaka', '01713000000', 57, 25, 'HO'),
	(34, 'Anup', 'anup@gmail.com', 'MALE', 'B+', 'Mohakhali', '017232442233', 60, 26, 'HO'),
	(35, 'Ashik', 'ashik@yahoo.com', 'MALE', 'O+', 'Banani', '017232442233', 63, 27, 'HO'),
	(36, 'Mahi', 'mahi@yahoo.com', 'FEMALE', 'A-', 'Mirpur', '01713000000', 57, 25, 'HO'),
	(37, 'Saruar', 'saruarabir95@yahoo.com', 'MALE', 'AB+', 'Rampura', '01712000000', 55, 25, 'HO');
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;

-- Dumping structure for table bloodbank.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.feedback: ~2 rows (approximately)
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`Id`, `name`, `email`, `message`) VALUES
	(3, 'support', 'saruarabir95@yahoo.com', 'dsdg'),
	(4, 'abir', 'agdg3@gmail.com', 'hello');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;

-- Dumping structure for table bloodbank.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.images: ~11 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `image`) VALUES
	(38, 'Capture-179.jpg'),
	(39, 'dfd.jpg'),
	(40, 'download.jpg'),
	(41, 'download.jpg'),
	(42, 'download.jpg'),
	(43, 'download.jpg'),
	(44, 'test1.png'),
	(45, 'test.png'),
	(46, 'test.png'),
	(47, 'test1.png'),
	(48, 'test.png');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table bloodbank.user
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Blood_Group` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Mobile_No` varchar(11) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Repeat_Pass` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table bloodbank.user: ~4 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`ID`, `Name`, `Email`, `User_Type`, `Gender`, `Blood_Group`, `District`, `Mobile_No`, `DOB`, `Password`, `Repeat_Pass`, `Role`) VALUES
	(15, 'Saruar', 'saruarabir95@gmail.com', 'A+', 'Male', 'organization', 'Dhaka', '21423543', '2017-05-14', '123', '123', 'admin'),
	(16, 'Anup', '123', 'A-', 'Male', 'person', 'Dhaka', '21423543', '2019-05-05', '123', '123', 'public'),
	(17, 'Asif', 'asif@yahoo.com', 'B-', 'Male', 'person', 'Dhaka', '01711000000', '1995-01-09', '123', '123', 'public'),
	(18, 'Ashik', 'ashik@gmail.com', 'A-', 'Male', 'organization', 'Cumilla', '21423543', '1993-01-05', '123', '123', 'public');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
