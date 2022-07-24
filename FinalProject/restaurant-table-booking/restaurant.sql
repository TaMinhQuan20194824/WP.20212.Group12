SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltables`
--

use restaurant;

CREATE TABLE IF NOT EXISTS `alltables` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `purpose` varchar(15) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `cid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `alltables`
--

INSERT INTO `alltables` (`id`, `type`, `purpose`, `status`, `cid`) VALUES
(1, 'Table for 2', 'Meeting', 'Available', 1),
(2, 'Table for 3', 'Casual', 'Available', 2),
(3, 'Table for 4', 'Celebratio', 'Available', NULL),
(4, 'Table for 5', 'Meeting', 'Available', NULL);
-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `approval` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `approval`) VALUES
(1, 'Quan Ta', 2147483647, 'xyz@gmail.com', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pass`) VALUES
(1, 'Admin', '1234'),

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE IF NOT EXISTS `newsletterlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Gameplay trailer news', 'Euro Truck Simulator', 'The gameplay has been uploaded to the site. Check out.'),
(2, 'Test Message', 'Greetings', 'This is test newsletter message from the admin.');

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE IF NOT EXISTS `tablebook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `Tbltyp` varchar(20) DEFAULT NULL,
  `Purpose` varchar(10) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `Tbltyp`, `Purpose`, `Meal`, `time`, `date`, `status`) VALUES
(1, 'Mr.', 'Amit', 'Garg', 'amt@yahoo.in', 'Indian', 'New Delhi', '22428756', 'Table for 2', 'Meeting', 'Breakfast', '10:05:00', '2019-09-28', 'Confirm'),
(2, 'Miss.', 'Elena ', 'Fox', 'elena@yahoo.in', 'Foreigner', 'Rio', '22487546', 'Table for 3', 'Casual', 'Dinner', '22:45:00', '2020-10-29', 'Confirm');

