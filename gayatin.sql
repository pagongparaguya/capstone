-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 12:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gayatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `allergyname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`id`, `patientid`, `allergyname`) VALUES
(4, 18, '123'),
(5, 18, '321'),
(6, 20, 'bitin'),
(7, 20, 'pahumot'),
(8, 20, 'relo'),
(9, 20, 'mata'),
(10, 20, 'ilong '),
(11, 20, 'nose'),
(12, 21, 'gugma'),
(13, 22, 'iro'),
(14, 23, 'allergy1'),
(15, 23, 'allergy1');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `telno` varchar(11) NOT NULL,
  `patienttype` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_queue`
--

CREATE TABLE IF NOT EXISTS `appointment_queue` (
  `date` date NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `mobileno` varchar(50) NOT NULL,
  `telno` varchar(11) NOT NULL,
  `patienttype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `appointment_queue`
--

INSERT INTO `appointment_queue` (`date`, `id`, `username`, `time`, `firstname`, `lastname`, `middlename`, `mobileno`, `telno`, `patienttype`) VALUES
('2015-02-09', 4, 'pagong', '8:30 AM - 9:30 AM', '', '', '', '', '', 'Old Patient');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_record`
--

CREATE TABLE IF NOT EXISTS `appointment_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `dentistincharge` varchar(30) NOT NULL,
  `chiefcomplaint` varchar(50) NOT NULL,
  `otherfindings` varchar(50) NOT NULL,
  `totalamount` float NOT NULL,
  `amountpaid` float NOT NULL,
  `balance` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `chronicailments`
--

CREATE TABLE IF NOT EXISTS `chronicailments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `chronicailmentname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chronicailments`
--

INSERT INTO `chronicailments` (`id`, `patientid`, `chronicailmentname`) VALUES
(1, 20, 'sakit'),
(2, 20, 'akong'),
(3, 20, 'ngipon'),
(4, 20, 'karon'),
(5, 20, 'sa'),
(6, 21, 'Conan syndrome'),
(7, 23, 'ailment1'),
(8, 23, 'ailment1');

-- --------------------------------------------------------

--
-- Table structure for table `drugstaken`
--

CREATE TABLE IF NOT EXISTS `drugstaken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientid` int(11) NOT NULL,
  `drugname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `drugstaken`
--

INSERT INTO `drugstaken` (`id`, `patientid`, `drugname`) VALUES
(5, 18, '123'),
(6, 18, '321'),
(7, 18, 'weed'),
(8, 20, 'kayasa doh'),
(9, 20, 'wa sa '),
(10, 20, 'gd ta ani'),
(11, 20, 'ba'),
(12, 21, 'love and other drugs'),
(13, 23, 'drug1'),
(14, 23, 'drug1'),
(15, 23, 'drug3');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobileno` varchar(16) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `officeaddress` varchar(150) NOT NULL,
  `officetelno` varchar(20) NOT NULL,
  `occlusion` varchar(20) NOT NULL,
  `periodontalcondition` varchar(50) NOT NULL,
  `oralhygiene` varchar(20) NOT NULL,
  `prevhistoryofbleeding` varchar(20) NOT NULL,
  `bloodpressure` varchar(20) NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `lastmodifiedby` varchar(50) NOT NULL,
  `datemodified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `firstname`, `lastname`, `middlename`, `sex`, `address`, `mobileno`, `telno`, `gender`, `maritalstatus`, `officeaddress`, `officetelno`, `occlusion`, `periodontalcondition`, `oralhygiene`, `prevhistoryofbleeding`, `bloodpressure`, `createdby`, `lastmodifiedby`, `datemodified`) VALUES
(18, '', 'Christian', 'Ompads', 'Hello', 'Female', 'Nasipit', '9123123135', '123-3456', 'Female', 'Married', 'Balay', 'N/A', 'Class II - 1', 'Normal', 'Poor', 'No', 'none', '', '', '0000-00-00'),
(19, 'pagong', 'Andre Paulo', 'Paraguya', 'Ambot', 'Female', 'Cagayan', '9123213123', '123-456', 'Female', 'Married', 'Ayala', 'none', 'Class II - 1', 'Normal', 'Poor', 'No', 'none123', '', '', '0000-00-00'),
(20, '', 'Enricke Paulo', 'Kee', 'Key', 'Male', 'Balay', '09123123135', '424-1234', 'Male', 'Married', 'USC - TC', '424-0000', 'Class II (Div.1)', 'With Periodontal Problem', 'Good', 'No', '140/5004', '', 'test', '0000-00-00'),
(21, '', 'andre', 'loves', 'pie', 'Female', 'taga Talamban', '09059217526', '72247', 'Female', 'Single', 'IBMd', '722471', 'None', 'Normal', 'Good', 'Yes', '100/500', 'test', 'conan', '0000-00-00'),
(22, '', 'Og', 'gungob', 'ambot', 'Male', 'consolacion', '09090909312', '424-1234', 'Male', 'Married', 'none', '424-0000', 'Class I', 'Normal', 'Good', 'Yes', '150/200', 'doe', 'test', '0000-00-00'),
(23, '', 'andre', 'abellanosa', 'dili gwapo', 'Male', 'taga Talamban', '09334079445', '722471', 'Male', 'Married', 'USC - TC', '1234466', 'Class II (Div.1)', 'Normal', 'Good', 'Yes', '100/300', 'test', 'test', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `procedure_type` varchar(20) NOT NULL,
  `dental_procedure` varchar(50) NOT NULL,
  `service_fee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `procedure_type`, `dental_procedure`, `service_fee`) VALUES
(1, 'unit', 'Recementation of Jacket Crowns,Inlays/Onlays', 200),
(2, 'unit', 'Plastic / Acrylic Jacket Crown', 2500),
(3, 'unit', 'Plastic Jacket Crown w/ Metal Backing', 3000),
(4, 'unit', 'Full Metal Crown- posterior', 2500),
(5, 'unit', 'Porcelain Fused to Metal Crown', 5000),
(6, 'unit', 'Porcelain Fused to Gold Crown', 25000),
(7, 'unit', 'Pure Ceramic/ Inceram Crown', 10000),
(8, 'arch', 'Complete/Full Denture -plastic pontic', 3500),
(9, 'arch', 'Complete/Full Denture -porcelain pontic', 7000),
(10, 'arch', 'SuperSoft Complete Denture', 10000),
(11, 'arch', 'Removable Partial Denture -One Piece Metal Casting', 5000),
(12, 'arch', 'Removable Partial Denture -Assemble Type', 2500),
(13, 'arch', 'Valplast / Bioplast Flexite', 12000),
(14, 'unit', 'Metal Inlay', 2000),
(15, 'unit', 'Ceramic Inlay', 5000),
(16, 'post', 'Screw Dowel Post', 1000),
(17, 'post', 'Casted Dowel Post', 1000),
(18, 'none', 'Simple Repair of Dentures', 500),
(19, 'none', 'Denture Relining', 1000),
(20, 'none', 'Consultation/Dental Examination', 0),
(21, 'none', 'Dental Examination with Medical Certificate ', 100),
(22, 'all', 'Oral Prophylaxis - light to moderate', 400),
(23, 'all', 'Oral Prophylaxis - light to heavy', 500),
(24, 'all', 'Flouride Treatment', 400),
(25, 'tooth', 'Simple Tooth Extraction –anterior/posterior', 500),
(26, 'tooth', 'Surgical Removal of Impacted Teeth', 3500),
(27, 'none', 'Removal of Sutures', 0),
(28, 'none', 'Open /Incision & Drainage', 200),
(29, 'none', 'Treatment of Oral Lessions, Sores', 200),
(30, 'tooth', 'Desensitization of Hypersensitive Teeth', 200),
(31, 'tooth', 'Temporary Fillings', 200),
(32, 'tooth', 'Light Cure Composite Fillings', 400),
(33, 'tooth', 'Pits and Fissure Sealant', 400),
(34, 'tooth', 'Tooth Lamination', 500),
(35, 'canal', 'Root Canal Treatment', 1500),
(36, 'tooth', 'Pulpotomy/ Pulpectomy', 1000),
(37, 'none', 'Change Dressing', 0),
(38, 'none', 'Treatment of Oral Lessions, Sores', 200),
(39, 'tentative', 'Ortho/ Braces Package', 0),
(40, 'appliance', 'Myobrace / EF Braces', 5000),
(41, 'appliance', 'Retainer Functional', 2500),
(42, 'appliance', 'Retainer Non-Functional', 2000),
(43, 'appliance', 'TMJ Appliance', 5000),
(44, 'arch', 'Mouth Guard –rubberized / acrylic', 2500),
(45, 'tentative', 'Tooth Bleaching', 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE IF NOT EXISTS `timeslot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`id`, `time`, `type`) VALUES
(1, '7:30 AM - 8:30 AM', 'd'),
(2, '8:30 AM - 9:30 AM', 'd'),
(3, '9:30 AM - 10:30 AM', 'd'),
(4, '10:30 AM - 11:30 AM', 'd'),
(5, '1:00 PM - 2:00 PM', 'd'),
(6, '2:00 PM - 3:00 PM', 'd'),
(7, '3:00 PM - 4:00 PM', 'd'),
(8, '9:00 AM - 10:00 AM', 'e'),
(9, '10:00 AM - 11:00 AM', 'e'),
(10, '11:00 AM - 12:00 PM', 'e'),
(11, '1:00 PM - 2:00 PM', 'e'),
(12, '2:00 PM - 3:00 PM', 'e'),
(13, '3:00 PM - 4:00 PM', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_record_queue`
--

CREATE TABLE IF NOT EXISTS `transaction_record_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_record_id` int(11) NOT NULL,
  `totalamount` float NOT NULL,
  `amountpaid` float NOT NULL,
  `balance` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE IF NOT EXISTS `treatment_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_record_id` int(11) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `toothno` int(11) NOT NULL,
  `toothsurface` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'John', 'Doe', 2),
(9, 'bang123', '6068ea25d64976e6e0e44da9e29e0e41', 'bang bang', 'bang', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
