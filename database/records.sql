-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2019 at 08:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkups`
--

DROP TABLE IF EXISTS `checkups`;
CREATE TABLE IF NOT EXISTS `checkups` (
  `checkups_id` int(11) NOT NULL AUTO_INCREMENT,
  `pregnant` text,
  `weight` text,
  `height` text,
  `syptoms` text,
  `description` text,
  `checkup_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_patient_id` int(11) NOT NULL,
  `Doctor` text,
  `Hospital` text,
  `Date_time_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`checkups_id`),
  KEY `fk_checkups_patient1_idx` (`patient_patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkups`
--

INSERT INTO `checkups` (`checkups_id`, `pregnant`, `weight`, `height`, `syptoms`, `description`, `checkup_time`, `patient_patient_id`, `Doctor`, `Hospital`, `Date_time_saved`) VALUES
(1, 'Pregnant', '34', '50', '  Thread-veins    FGHNMJ,K', 'FGHNMJ,K', '2019-04-23 07:17:46', 8, 'moses mozy', 'ruharo', '2019-04-23 07:17:46'),
(2, '', '', '', '      ', '', '2019-04-23 10:05:03', 13, 'moses mozy', 'ruharo', '2019-04-23 10:05:03'),
(3, '', '', '', '      ', '', '2019-04-23 10:25:56', 13, 'moses mozy', 'ruharo', '2019-04-23 10:25:56'),
(4, 'Pregnant', '82', '170', 'Back-pains Nervous-disorders Thread-veins    ', 'none', '2019-04-23 14:09:53', 9, NULL, NULL, '2019-04-23 14:09:53'),
(5, 'Pregnant', '323', '32', '    Broken-capillaries  svfdsvd', 'svfdsvd', '2019-04-23 14:30:04', 4, 'moses mozy', 'ruharo', '2019-04-23 14:30:04'),
(6, 'Pregnant', '45', '45', '     Reduced reflexes ', 'hjkhlkrthe ', '2019-04-23 14:31:58', 4, NULL, NULL, '2019-04-23 14:31:58'),
(7, '', '', '', '      ', '', '2019-04-24 07:37:16', 6, NULL, NULL, '2019-04-24 07:37:16'),
(8, '', '', '', '      ', '', '2019-04-24 07:37:20', 6, NULL, NULL, '2019-04-24 07:37:20'),
(9, '', '', '', '      ', '', '2019-04-24 07:37:23', 6, NULL, NULL, '2019-04-24 07:37:23'),
(10, '', '', '', '      ', '', '2019-04-24 07:37:36', 6, NULL, NULL, '2019-04-24 07:37:36'),
(11, '', '', '', '      ', '', '2019-04-24 07:37:37', 6, NULL, NULL, '2019-04-24 07:37:37'),
(12, '', '', '', '      ', '', '2019-04-24 07:37:38', 6, NULL, NULL, '2019-04-24 07:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `habits`
--

DROP TABLE IF EXISTS `habits`;
CREATE TABLE IF NOT EXISTS `habits` (
  `habit_id` int(11) NOT NULL AUTO_INCREMENT,
  `habit` text NOT NULL,
  `description` text NOT NULL,
  `patient_patient_id` int(11) NOT NULL,
  PRIMARY KEY (`habit_id`),
  KEY `fk_habits_patient1_idx` (`patient_patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habits`
--

INSERT INTO `habits` (`habit_id`, `habit`, `description`, `patient_patient_id`) VALUES
(1, 'Drinking  ', 'ZASDFGDFNHGMJ', 8),
(2, '  ', '', 13),
(3, '  ', '', 13),
(4, 'Smoking  ', 'vx x ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

DROP TABLE IF EXISTS `medicalhistory`;
CREATE TABLE IF NOT EXISTS `medicalhistory` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `bloodgroup` text NOT NULL,
  `surgery` text NOT NULL,
  `surgery_no` text NOT NULL,
  `hiv` text NOT NULL,
  `history` text NOT NULL,
  `description` text NOT NULL,
  `patient_patient_id` int(11) NOT NULL,
  PRIMARY KEY (`med_id`),
  KEY `fk_medicalhistory_patient_idx` (`patient_patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`med_id`, `bloodgroup`, `surgery`, `surgery_no`, `hiv`, `history`, `description`, `patient_patient_id`) VALUES
(1, 'A+', '', '12', 'Positive', '        ', 'VSFBDGNFHM,H.', 8),
(2, 'Blood Group Type', '', '', '', '        ', '', 13),
(3, 'Blood Group Type', '', '', '', '        ', '', 13),
(4, 'A-', '', '22', 'Positive', 'allergies        ', 'asbl', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mname` text NOT NULL,
  `dob` text NOT NULL,
  `sex` text NOT NULL,
  `address` text NOT NULL,
  `occupation` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(20) NOT NULL,
  `fathersname` text NOT NULL,
  `mothersname` text NOT NULL,
  `nok` text NOT NULL,
  `nok_phone` text NOT NULL,
  `fingerprint` longtext NOT NULL,
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `fname`, `lname`, `mname`, `dob`, `sex`, `address`, `occupation`, `email`, `phone`, `fathersname`, `mothersname`, `nok`, `nok_phone`, `fingerprint`) VALUES
(1, 'JOEL', 'MWESIGYE', 'BRUNO', '2019-04-09', 'Male', 'RUHARO', 'GFHJ', 'bvbvb@gmail.com', 2678, 'dffgh', 'xscdf', 'czxc vbm', '12345', 'Rk1SACAyMAAAAADAAAABGAFUAMUAxQEAAABkG4BjAByFZECpADqAZIAvAD8AZIB7AFR9ZICRAG2LZIAeAG6IZIBPAHOIZICLAJSIZICqAJgCZIBjAKuNZIC AK6FZEA6ALOVZIAYALmNZICrANKHZICiANMHZIAxANcZZIAfANyZZIBoANySZIDTANwAZIBCAOSVZIByAOWSZIBNAOoSZICRAO QZIByAPCZZIBFARIcZIDJARYFZICcAR2XZAAA'),
(2, 'xz', 'xz', 'zx', '2019-04-08', 'Male', 'xz', 'x', 'x@d.com', 123, 'xs', 'asd', 'asd', '121', 'Rk1SACAyMAAAAAECAAABGAFUAMUAxQEAAABkJoDCAEl3ZEBOAE pZEBdAF8kZEBsAGMbZIDDAGvvZICRAGwCZEA4AG8nZIAtAHitZIDdAHloZEB0AIYdZIBcAI6tZIBfAJUyZECxAKTtZIDfAKdoZEBPAK0rZICgALD0ZIC ALTmZEC1ALVrZICBAL0VZECTAMD8ZEAyAMGsZEBwAMMnZEBOAOIqZICJAOYLZIC3APPQZICKAP yZICXAQK9ZIBsAQctZICkAQnEZICAAQqtZICWAQ86ZIClARFEZIBkARSjZEBtAR45ZECMAR6yZIB1AR8rZICUASAnZICcASGqZAAA'),
(3, 'xc ', 'cx', 'xzc', '2019-04-24', 'Female', 'cc', 'cx', 'xc@sd.com', 1341, 'cx', 'xc', 'xc', 'ccx', 'Rk1SACAyMAAAAAEsAAABGAFUAMUAxQEAAABkLUDAADNpZIBPADogZIA/ADujZIBdAD8XZICEAE4CZIC4AFLoZEBjAGMYZEDYAGdiZEBPAGmmZIBLAHMvZEChAITrZEA8AIwsZICRAI7vZIDPAI5kZECmAJVoZICwAJbkZICHAJfyZIBvAJoWZEBeAJ8lZIDhAL1ZZIB/AMPcZEA/AMMyZECjAM3WZEDXANnSZIB ANu6ZIBiAOg0ZEBZAPDBZEDTAPDOZIB0APSyZECVAPW8ZIBHAPZAZIBeAPtLZIBsAP40ZEBnAQO ZIBTAQXIZIBwAQU3ZICIAQnAZIBjAQs3ZICZAQu8ZECRAQ06ZICYARY8ZECuARq8ZIB4AR4uZIChAR7AZECZASKrZAAA'),
(4, ',mnb', 'bvc', 'fvcx ', '2019-04-16', 'Male', 'csxz', 'dcavfbg', 'vcc@gfd.com', 6543, 'dgb', 'dfbfd', 'fgbh', 'fddddbd', 'Rk1SACAyMAAAAACiAAABGAFUAMUAxQEAAABkFkCBAEuIZIBRAE4SZICzAGLtZIC7AGZtZECvAI10ZEA5AJasZIBGAKQjZEBUAK8eZICvALL3ZEAjALYlZIB7ALgIZEDTALtuZEBgANIcZIBIANuyZIDVAOZ0ZEBLAOkpZECjAOv0ZIC3APnvZICWAPr6ZEA/APsvZECrAPt0ZECJAQsDZAAA'),
(5, 'dfgr', 'ikujyhtgrf', 'ujtgrf', '2019-04-17', 'Male', 'bgvfdcs', 'thbfgcx', 'scscsc@hsch.com', 1234465787, 'evrere', 'ererer', 'erre', '11', 'Rk1SACAyMAAAAADkAAABGAFUAMUAxQEAAABkIYB/ADxyZEA6AESNZEDKAEpgZIBiAFKAZIBJAGMIZIB6AHttZEAsAH8ZZIBKAIsIZICMAJTfZEDLAJZaZIB4AKJeZICRAK/eZIDmALPcZECwALZaZEBGALiaZIDdAL9ZZIA/AMEuZIB2AMjNZIBHAM0NZEB5ANdRZIA2ANmhZEBiANnTZEBTANyjZICvAODVZECeAOLKZEA4AOOsZIBKAOatZIBUAPK0ZEA9AQwtZICIAQ7AZIAoAREvZIA ASM0ZECaASi7ZAAA'),
(6, 'cbfcb', 'dfbbf', 'bfb', '2019-04-10', 'Male', 'asa', 'asas', 'bdf@dff.com', 45, 'asasa', 'asas', 'sas', '123', 'Rk1SACAyMAAAAADqAAABGAFUAMUAxQEAAABkIkDVADBbZIA5ADSVZIBtAFF3ZIA7AFUSZEDpAFpTZIBoAGTyZIBeAIvlZICkAJBSZEBoAJNvZIDQAJVSZIBRAKGXZEC0AKrPZIA3AK0kZIDoALBQZEBWALanZIBdALjGZEBUAMOrZEBeAMTDZEA7AMciZIBLANGtZIBOANayZIBoANe4ZECXANvBZIBnAOE4ZEBKAOs0ZEBeAO sZECuAPHFZIBBAPQ6ZIBPAPUqZECHAQm3ZEA/AQ8oZICzASjIZICMASu9ZIBsATKbZAAA'),
(7, 'nhgvbh', 'hbvynb', 'vbyhb', '2019-04-17', 'Male', 'rvvgv', 'vgfcv', 'btcbtrcb@gfht.com', 3542, 'vvgtrv', 'vrvrv', 'rgvtrv', '543', 'Rk1SACAyMAAAAADkAAABGAFUAMUAxQEAAABkIUDMAE2XZECYAFAeZEBRAFynZIDnAGf0ZED1AG17ZID0AHX0ZEDLAIWiZECHAIskZIBeAI0tZIDyAI AZIDMAJMbZICuAJ0eZICdAKCjZIDYAKcNZIBmALkjZIBKALstZEDvAMKBZID0AMntZIB0AM4gZEDdANkNZEClAOghZEDHAOgTZIDMAPoLZEDWAQr7ZECwAQ0dZICnAQ6nZIC5ARCkZEBpARIwZIDMARixZIDPARrAZIDCAR2vZEDlAR7EZICXASgtZAAA'),
(8, 'mncxnznJZHCJ', 'REAL', 'cbxbcxbb', '2019-04-02', 'Male', 'SZFVFV', 'VXVCV', 'fgd@vv.com', 467, 'cdasdca', 'ascsacd', 'cascdasdc', '122', 'Rk1SACAyMAAAAACcAAABGAFUAMUAxQEAAABkFUBFACx6ZECqADhuZIDJAD3tZIDmAEFtZIC3AFLtZIA8AFP9ZECXAFlyZIBwAJGAZICqAJNvZID7AJhqZICaAKZ6ZIBkALqNZIDSAMHqZIDhAMNqZEBSAMUPZEBoAM0KZICmANB0ZECdAOt4ZEDKAOtpZICeAQl9ZEB ARSOZAAA'),
(9, 'phionah', 'zgsgg', 'fggg', '1996-07-03', 'Male', 'kateete', 'wife', 'phionhkiconco@gmail.com', 706094690, 'mike', 'phionak', 'dan', '0703411516', 'Rk1SACAyMAAAAADwAAABGAFUAMUAxQEAAABkI0CxABMBZIBKABqAZIAnAD2AZICDAFGAZIBVAGiIZED3AGlvZECyAG5uZEB6AHeQZIBNAHgCZIB8AIkAZIByAJeFZIDtAKFvZIArAKSSZIC0AL56ZEAmAL8ZZID AMXpZICeAMr9ZIBvAOECZEBDAOKYZIDEAORvZEB3APGFZIDHAPN0ZICGAQCIZIBjAQ0VZECOAQ6LZIB1ARUAZIDdARXoZEBlASAbZIDYASHtZIDzASVlZEDlASdoZEBoASylZICoATB3ZIBFATKtZIBPATwqZAAA'),
(10, 'DFVDBC', 'CXBVDXV', 'VFD', '2019-04-24', 'Male', 'VDSVDSV', 'SDVDSVSD', 'sdjhcj@hdjch.com', 12325515, 'DSCASCASC', 'DSCSA', 'FSDAFSD', '1234567', 'Rk1SACAyMAAAAAEgAAABGAFUAMUAxQEAAABkK0BfAD8wZECCAEWtZICRAE4oZIClAFghZIDEAFsNZEBvAGUoZIBkAG qZECqAHkeZECXAH rZEDpAI3wZECVAI8tZIA6AJwtZIDYAJ76ZECFAKErZIDSAKv6ZEA3AK2xZIC4ALAYZEBnALWqZEClALclZIBEALoqZIAsANUyZECCANYqZEDuANjXZEC ANwSZIC0AOCmZIDdAOLSZICqAOMhZEDIAObJZIDTAOjLZIC APmvZICGAQA9ZIDHAQLFZICvAQovZIA9AQy9ZICRAQ/LZIBrAQ/AZICzAREvZIBSARXAZICkARZLZECBASDOZIBMASVAZIC8AScpZECsAS1NZAAA'),
(11, 'Jascitah', 'hdshcjh', 'jhjhjhjjh', '2019-04-10', 'Male', 'sddhgshdg', 'HGHHGHGGH', 'jhjjh@hfhd.com', 123456, 'dfghjkl', 'sdfghjk', 'rtfghjk', '234567', 'Rk1SACAyMAAAAAC6AAABGAFUAMUAxQEAAABkGoC5ABTyZECtABdyZIBWADV0ZIBPAEF3ZECxAExuZEDZAExrZIBPAE2AZIDqAGb0ZEC8AHNvZIBtAIB9ZIByAK/6ZIDmALRtZICTALV3ZIBoALmAZEDYAMDrZIBrAMX6ZEA1AMqXZECNAOFuZEBZAQCVZIBjAQWeZECQAQVuZIBiAQ4NZIEDARhqZEB3ASTVZIBEASa3ZIB9ATDcZAAA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text,
  `hospitalname` text,
  `firstname` text,
  `lastname` text,
  `password` text,
  `email` text,
  `phonenumber` text,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `hospitalname`, `firstname`, `lastname`, `password`, `email`, `phonenumber`, `last_login`) VALUES
(3, 'Receptionist', 'RWEBIKOONA', 'Jannet', 'Mweru', '0712419327', 'jannet@gmail.com', '0712419327', '2019-04-23 23:23:45'),
(4, 'Adiministartor', 'RWEBIKOONA', 'Niwamanya', 'NIcholus', '0712419327', 'niwannicholus@gmail.com', '0712419327', '2019-04-23 23:17:23'),
(6, 'Doctor', 'RWEBIKOONA', 'Niwamanya4', 'NIcholus', '0712419327', 'niwannicholus4@gmail.com', '0712419327', '2019-04-24 08:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_has_patient`
--

DROP TABLE IF EXISTS `users_has_patient`;
CREATE TABLE IF NOT EXISTS `users_has_patient` (
  `users_user_id` int(11) NOT NULL,
  `patient_patient_id` int(11) NOT NULL,
  `dateadded` date DEFAULT NULL,
  PRIMARY KEY (`users_user_id`,`patient_patient_id`),
  KEY `fk_users_has_patient_patient1_idx` (`patient_patient_id`),
  KEY `fk_users_has_patient_users1_idx` (`users_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
