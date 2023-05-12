-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `mobile`) VALUES
('jojo', '1234', 'ahfgdjskf', 987456123);

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `atmid` varchar(20) NOT NULL,
  `station` varchar(20) DEFAULT NULL,
  `bank` varchar(20) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`atmid`, `station`, `bank`, `landmark`, `distance`) VALUES
('EICICI2', 'ERNAKULAM', 'ICICI', 'MARINE DRIVE', '3KM'),
('ESBI1', 'ERNAKULAM', 'SBI', 'RAILWAY STATION', '1KM'),
('KKYB2', 'KOTTAYAM', 'KYB', 'KSRTC STAND', '4KM'),
('KLICICI2', 'KOLLAM', 'ICICI', 'KSRTC STAND', '3KM'),
('KLSBI1', 'KOLLAM', 'SBI', 'RAILWAY STATION', '3KM'),
('KSBI1', 'KOTTAYAM', 'SBI', 'NAGAMBADAM', '3KM'),
('PHDFC2', 'PALAKKAD', 'HDFC', 'MUNICIPAL STAND', '2KM'),
('PSBI1', 'PALAKKAD', 'SBI', 'STADIUM', '3KM'),
('TPNB2', 'THRISSUR', 'PNB', 'VADAKKE STAND', '5KM'),
('TSBI1', 'THRISSUR', 'SBI', 'BINI', '3KM');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `busid` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `src` varchar(20) DEFAULT NULL,
  `dest` varchar(20) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `seatno` varchar(25) DEFAULT NULL,
  `tot_amt` int(11) DEFAULT NULL,
  `sts` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`busid`, `username`, `src`, `dest`, `doj`, `seatno`, `tot_amt`, `sts`) VALUES
('KL1AP', 'akhil', 'Palakkad', 'Thrissur', '2017-08-17', '1,2', 400, 'BOOKED'),
('KL1AP', 'akhil', 'Palakkad', 'Kottayam', '2017-10-17', '15,16', 1400, 'BOOKED'),
('KL2AP', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL2BP', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 800, 'BOOKED'),
('KL2AR', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL2BR', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL3AP', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL3BP', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL3AR', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL3BR', 'HANDICAPPED', 'PALAKKAD', 'KOLLAM', NULL, '1,2,3,4', 1000, 'BOOKED'),
('KL1AP', 'akhil', 'Ernakulam', 'Palakkad', '0000-00-00', '3', 0, 'BOOKED'),
('KL1AP', 'akhil', 'Kottayam', 'Kollam', '0000-00-00', '26,36', 700, 'BOOKED'),
('KL1AP', 'akhil', 'Palakkad', 'Thrissur', '0000-00-00', '18,28', 400, 'BOOKED'),
('KL1AP', 'jojo', 'Palakkad', 'Thrissur', '2017-12-02', '16,27', 400, 'BOOKED');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busid` varchar(20) NOT NULL,
  `bname` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `src` varchar(20) DEFAULT NULL,
  `dest` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busid`, `bname`, `type`, `src`, `dest`) VALUES
('KL1AP', 'GREENLINE', 'A/C', 'PALAKKAD', 'KOLLAM'),
('KL1AR', 'GREENLINE', 'A/C', 'KOLLAM', 'PALAKKAD'),
('KL1BP', 'GREENLINE', 'NON A/C', 'PALAKKAD', 'KOLLAM'),
('KL1BR', 'GREENLINE', 'NON A/C', 'KOLLAM', 'PALAKKAD'),
('KL2AP', 'VIGHNESH', 'A/C', 'PALAKKAD', 'KOTTAYAM'),
('KL2AR', 'VIGHNESH', 'A/C', 'KOTTAYAM', 'PALAKKAD'),
('KL2BP', 'VIGHNESH', 'NON A/C', 'PALAKKAD', 'KOTTAYAM'),
('KL2BR', 'VIGHNESH', 'NON A/C', 'KOTTAYAM', 'PALAKKAD'),
('KL3AP', 'KALLADA', 'A/C', 'PALAKKAD', 'ERNAKULAM'),
('KL3AR', 'KALLADA', 'A/C', 'ERNAKULAM', 'PALAKKAD'),
('KL3BP', 'KALLADA', 'NON A/C', 'PALAKKAD', 'ERNAKULAM'),
('KL3BR', 'KALLADA', 'NON A/C', 'ERNAKULAM', 'PALAKKAD'),
('KL4AP', 'SRM', 'A/C', 'PALAKKAD', 'THRISSUR'),
('KL4AR', 'SRM', 'A/C', 'THRISSUR', 'PALAKKAD'),
('KL4BP', 'SRM', 'NON A/C', 'PALAKKAD', 'THRISSUR'),
('KL4BR', 'SRM', 'NON A/C', 'THRISSUR', 'PALAKKAD'),
('KL5AP', 'GREENLINE', 'A/C', 'THRISSUR', 'KOLLAM'),
('KL5AR', 'GREENLINE', 'A/C', 'KOLLAM', 'THRISSUR'),
('KL6AP', 'ORANGE', 'A/C', 'THRISSUR', 'KOTTAYAM'),
('KL6AR', 'ORANGE', 'A/C', 'KOTTAYAM', 'THRISSUR'),
('KL7AP', 'SRM', 'A/C', 'ERNAKULAM', 'KOLLAM'),
('KL7AR', 'SRM', 'A/C', 'KOLLAM', 'ERNAKULAM'),
('KL7BP', 'SRM', 'NON A/C', 'ERNAKULAM', 'KOLLAM'),
('KL7BR', 'SRM', 'NON A/C', 'KOLLAM', 'ERNAKULAM'),
('KL8AP', 'AEON', 'A/C', 'ERNAKULAM', 'KOTTAYAM'),
('KL8AR', 'AEON', 'A/C', 'KOTTAYAM', 'ERNAKULAM'),
('KL9BP', 'DREAMLINER', 'NON A/C', 'KOTTAYAM', 'KOLLAM'),
('KL9BR', 'DREAMLINER', 'NON A/C', 'KOLLAM', 'KOTTAYAM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(20) DEFAULT NULL,
  `msg` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `msg`) VALUES
('akhil', 'Thanks for your valuable service');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `src` varchar(20) DEFAULT NULL,
  `dest` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`src`, `dest`, `type`, `rate`) VALUES
('PALAKKAD', 'KOLLAM', 'A/C', 800),
('PALAKKAD', 'KOLLAM', 'NON A/C', 500),
('PALAKKAD', 'KOTTAYAM', 'A/C', 700),
('PALAKKAD', 'KOTTAYAM', 'NON A/C', 400),
('PALAKKAD', 'ERNAKULAM', 'A/C', 500),
('PALAKKAD', 'ERNAKULAM', 'NON A/C', 300),
('PALAKKAD', 'THRISSUR', 'A/C', 200),
('PALAKKAD', 'THRISSUR', 'NON A/C', 100),
('THRISSUR', 'ERNAKULAM', 'A/C', 250),
('THRISSUR', 'ERNAKULAM', 'NON A/C', 150),
('THRISSUR', 'KOTTAYAM', 'A/C', 400),
('THRISSUR', 'KOTTAYAM', 'NON A/C', 320),
('THRISSUR', 'KOLLAM', 'A/C', 600),
('THRISSUR', 'KOLLAM', 'NON A/C', 450),
('ERNAKULAM', 'KOLLAM', 'A/C', 400),
('ERNAKULAM', 'KOLLAM', 'NON A/C', 300),
('ERNAKULAM', 'KOTTAYAM', 'A/C', 300),
('ERNAKULAM', 'KOTTAYAM', 'NON A/C', 180),
('KOTTAYAM', 'KOLLAM', 'A/C', 350),
('KOTTAYAM', 'KOLLAM', 'NON A/C', 200),
('KOLLAM', 'PALAKKAD', 'A/C', 800),
('KOLLAM', 'PALAKKAD', 'NON A/C', 500),
('KOTTAYAM', 'PALAKKAD', 'A/C', 700),
('KOTTAYAM', 'PALAKKAD', 'NON A/C', 400),
('ERNAKULAM', 'PALAKKAD', 'A/C', 500),
('ERNAKULAM', 'PALAKKAD', 'NON A/C', 300),
('THRISSUR', 'PALAKKAD', 'A/C', 200),
('THRISSUR', 'PALAKKAD', 'NON A/C', 100),
('ERNAKULAM', 'THRISSUR', 'A/C', 250),
('ERNAKULAM', 'THRISSUR', 'NON A/C', 150),
('KOTTAYAM', 'THRISSUR', 'A/C', 400),
('KOTTAYAM', 'THRISSUR', 'NON A/C', 320),
('KOLLAM', 'THRISSUR', 'A/C', 600),
('KOLLAM', 'THRISSUR', 'NON A/C', 450),
('KOLLAM', 'ERNAKULAM', 'A/C', 400),
('KOLLAM', 'ERNAKULAM', 'NON A/C', 300),
('KOTTAYAM', 'ERNAKULAM', 'A/C', 300),
('KOTTAYAM', 'ERNAKULAM', 'NON A/C', 180),
('KOLLAM', 'KOTTAYAM', 'A/C', 350),
('KOLLAM', 'KOTTAYAM', 'NON A/C', 200);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelid` varchar(20) NOT NULL,
  `station` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelid`, `station`, `name`, `landmark`, `distance`, `contactno`) VALUES
('ERA2', 'ERNAKULAM', 'RADISSON BLU', 'KADAVANTHARA', '4KM', '0484-2784123'),
('ETH1', 'ERNAKULAM', 'THAJ', 'MARINE DRIVE', '3KM', '0484-2436123'),
('KAR1', 'KOTTAYAM', 'ARACADIA', 'NAGAMBADAM', '3KM', '0481-2875787'),
('KLSA1', 'KOLLAM', 'SARAVANA BHAVAN', 'RAILWAY STATION', '3KM', '0474-2221323'),
('PNO1', 'PALAKKAD', 'NOOR JAHAN', 'STADIUM', '3KM', '0491-2243566'),
('TLU2', 'THRISSUR', 'LUCIYA PALACE', 'MARRAR ROAD', '5KM', '0487-2428457'),
('TMI1', 'THRISSUR', 'MING', 'THRISSUR ROUND', '3KM', '0487-2426123');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `busid` varchar(20) NOT NULL,
  `availseats` int(11) DEFAULT NULL,
  `bookseats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`busid`, `availseats`, `bookseats`) VALUES
('KL1AP', 40, 0),
('KL1AR', 40, 0),
('KL1BP', 40, 0),
('KL1BR', 40, 0),
('KL2AP', 40, 0),
('KL2AR', 40, 0),
('KL2BP', 40, 0),
('KL2BR', 40, 0),
('KL3AP', 40, 0),
('KL3AR', 40, 0),
('KL3BP', 40, 0),
('KL3BR', 40, 0),
('KL4AP', 40, 0),
('KL4AR', 40, 0),
('KL4BP', 40, 0),
('KL4BR', 40, 0),
('KL5AP', 40, 0),
('KL5AR', 40, 0),
('KL6AP', 40, 0),
('KL6AR', 40, 0),
('KL7AP', 40, 0),
('KL7AR', 40, 0),
('KL7BP', 40, 0),
('KL7BR', 40, 0),
('KL8AP', 40, 0),
('KL8AR', 40, 0),
('KL9BP', 40, 0),
('KL9BR', 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `busid` varchar(20) NOT NULL,
  `station` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`busid`, `station`, `time`) VALUES
('KL1AP', 'PALAKKAD', '10:00:00'),
('KL1AP', 'THRISSUR', '11:00:00'),
('KL1AP', 'ERNAKULAM', '12:00:00'),
('KL1AP', 'KOTTAYAM', '13:00:00'),
('KL1AP', 'KOLLAM', '14:00:00'),
('KL1BP', 'PALAKKAD', '12:30:00'),
('KL1BP', 'THRISSUR', '13:30:00'),
('KL1BP', 'ERNAKULAM', '14:30:00'),
('KL1BP', 'KOTTAYAM', '15:30:00'),
('KL1BP', 'KOLLAM', '16:30:00'),
('KL2AP', 'PALAKKAD', '18:30:00'),
('KL2AP', 'THRISSUR', '19:30:00'),
('KL2AP', 'ERNAKULAM', '20:30:00'),
('KL2AP', 'KOTTAYAM', '21:30:00'),
('KL2BP', 'PALAKKAD', '08:30:00'),
('KL2BP', 'THRISSUR', '09:30:00'),
('KL2BP', 'ERNAKULAM', '10:30:00'),
('KL2BP', 'KOTTAYAM', '11:30:00'),
('KL3AP', 'PALAKKAD', '05:00:00'),
('KL3AP', 'THRISSUR', '06:00:00'),
('KL3AP', 'ERNAKULAM', '07:30:00'),
('KL3BP', 'PALAKKAD', '15:00:00'),
('KL3BP', 'THRISSUR', '16:00:00'),
('KL3BP', 'ERNAKULAM', '17:30:00'),
('KL4AP', 'PALAKKAD', '07:00:00'),
('KL4AP', 'THRISSUR', '08:00:00'),
('KL4BP', 'PALAKKAD', '17:00:00'),
('KL4BP', 'THRISSUR', '18:00:00'),
('KL5AP', 'THRISSUR', '15:00:00'),
('KL5AP', 'ERNAKULAM', '16:00:00'),
('KL5AP', 'KOTTAYAM', '17:30:00'),
('KL5AP', 'KOLLAM', '18:30:00'),
('KL6AP', 'THRISSUR', '06:00:00'),
('KL6AP', 'ERNAKULAM', '07:00:00'),
('KL6AP', 'KOTTAYAM', '08:30:00'),
('KL7AP', 'ERNAKULAM', '15:40:00'),
('KL7AP', 'KOTTAYAM', '16:40:00'),
('KL7AP', 'KOLLAM', '18:20:00'),
('KL7BP', 'ERNAKULAM', '20:30:00'),
('KL7BP', 'KOTTAYAM', '21:40:00'),
('KL7BP', 'KOLLAM', '22:20:00'),
('KL8AP', 'ERNAKULAM', '22:00:00'),
('KL8AP', 'KOTTAYAM', '23:10:00'),
('KL1AR', 'PALAKKAD', '14:00:00'),
('KL1AR', 'THRISSUR', '13:00:00'),
('KL1AR', 'ERNAKULAM', '12:00:00'),
('KL1AR', 'KOTTAYAM', '11:00:00'),
('KL1AR', 'KOLLAM', '10:00:00'),
('KL1BR', 'PALAKKAD', '16:30:00'),
('KL1BR', 'THRISSUR', '15:30:00'),
('KL1BR', 'ERNAKULAM', '14:30:00'),
('KL1BR', 'KOTTAYAM', '13:30:00'),
('KL1BR', 'KOLLAM', '12:30:00'),
('KL2AR', 'PALAKKAD', '21:30:00'),
('KL2AR', 'THRISSUR', '20:30:00'),
('KL2AR', 'ERNAKULAM', '19:30:00'),
('KL2AR', 'KOTTAYAM', '18:30:00'),
('KL2BR', 'PALAKKAD', '11:30:00'),
('KL2BR', 'THRISSUR', '10:30:00'),
('KL2BR', 'ERNAKULAM', '09:30:00'),
('KL2BR', 'KOTTAYAM', '08:30:00'),
('KL3AR', 'PALAKKAD', '07:00:00'),
('KL3AR', 'THRISSUR', '06:00:00'),
('KL3AR', 'ERNAKULAM', '05:30:00'),
('KL3BR', 'PALAKKAD', '17:00:00'),
('KL3BR', 'THRISSUR', '16:00:00'),
('KL3BR', 'ERNAKULAM', '15:30:00'),
('KL4AR', 'PALAKKAD', '08:00:00'),
('KL4AR', 'THRISSUR', '07:00:00'),
('KL4BR', 'PALAKKAD', '18:00:00'),
('KL4BR', 'THRISSUR', '17:00:00'),
('KL5AR', 'THRISSUR', '21:00:00'),
('KL5AR', 'ERNAKULAM', '19:30:00'),
('KL5AR', 'KOTTAYAM', '18:30:00'),
('KL5AR', 'KOLLAM', '17:30:00'),
('KL6AR', 'THRISSUR', '08:00:00'),
('KL6AR', 'ERNAKULAM', '07:00:00'),
('KL6AR', 'KOTTAYAM', '06:30:00'),
('KL7AR', 'ERNAKULAM', '17:40:00'),
('KL7AR', 'KOTTAYAM', '16:40:00'),
('KL7AR', 'KOLLAM', '15:20:00'),
('KL7BR', 'ERNAKULAM', '22:30:00'),
('KL7BR', 'KOTTAYAM', '21:40:00'),
('KL7BR', 'KOLLAM', '20:20:00'),
('KL8AR', 'ERNAKULAM', '23:00:00'),
('KL8AR', 'KOTTAYAM', '22:10:00'),
('KL9BP', 'KOTTAYAM', '05:45:00'),
('KL9BP', 'KOLLAM', '06:45:00'),
('KL9BR', 'KOLLAM', '07:45:00'),
('KL9BR', 'KOTTAYAM', '08:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `busid` varchar(20) DEFAULT NULL,
  `srcstn` varchar(20) DEFAULT NULL,
  `deststn` varchar(20) DEFAULT NULL,
  `depttime` time DEFAULT NULL,
  `arrtime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`busid`, `srcstn`, `deststn`, `depttime`, `arrtime`) VALUES
('KL1AP', 'PALAKKAD', 'THRISSUR', '08:00:00', '09:00:00'),
('KL1AP', 'PALAKKAD', 'ERNAKULAM', '08:00:00', '10:00:00'),
('KL1AP', 'PALAKKAD', 'KOTTAYAM', '08:00:00', '11:30:00'),
('KL1AP', 'PALAKKAD', 'KOLLAM', '08:00:00', '13:00:00'),
('KL1AP', 'THRISSUR', 'ERNAKULAM', '09:00:00', '10:00:00'),
('KL1AP', 'THRISSUR', 'KOTTAYAM', '09:00:00', '11:30:00'),
('KL1AP', 'THRISSUR', 'KOLLAM', '09:00:00', '13:00:00'),
('KL1AP', 'ERNAKULAM', 'KOTTAYAM', '10:00:00', '11:30:00'),
('KL1AP', 'ERNAKULAM', 'KOLLAM', '10:00:00', '13:00:00'),
('KL1AP', 'KOTTAYAM', 'KOLLAM', '11:30:00', '13:00:00'),
('KL1BP', 'PALAKKAD', 'THRISSUR', '09:00:00', '10:00:00'),
('KL1BP', 'PALAKKAD', 'ERNAKULAM', '09:00:00', '11:00:00'),
('KL1BP', 'PALAKKAD', 'KOTTAYAM', '09:00:00', '12:30:00'),
('KL1BP', 'PALAKKAD', 'KOLLAM', '09:00:00', '14:00:00'),
('KL1BP', 'THRISSUR', 'ERNAKULAM', '10:00:00', '11:00:00'),
('KL1BP', 'THRISSUR', 'KOTTAYAM', '10:00:00', '12:30:00'),
('KL1BP', 'THRISSUR', 'KOLLAM', '10:00:00', '14:00:00'),
('KL1BP', 'ERNAKULAM', 'KOTTAYAM', '11:00:00', '12:30:00'),
('KL1BP', 'ERNAKULAM', 'KOLLAM', '11:00:00', '14:00:00'),
('KL1BP', 'KOTTAYAM', 'KOLLAM', '12:30:00', '14:00:00'),
('KL2AP', 'PALAKKAD', 'THRISSUR', '12:00:00', '13:00:00'),
('KL2AP', 'PALAKKAD', 'ERNAKULAM', '12:00:00', '14:00:00'),
('KL2AP', 'PALAKKAD', 'KOTTAYAM', '12:00:00', '15:30:00'),
('KL2AP', 'THRISSUR', 'ERNAKULAM', '13:00:00', '14:00:00'),
('KL2AP', 'THRISSUR', 'KOTTAYAM', '13:00:00', '15:30:00'),
('KL2AP', 'ERNAKULAM', 'KOTTAYAM', '14:00:00', '15:30:00'),
('KL2BP', 'PALAKKAD', 'THRISSUR', '16:00:00', '17:00:00'),
('KL2BP', 'PALAKKAD', 'ERNAKULAM', '16:00:00', '18:00:00'),
('KL2BP', 'PALAKKAD', 'KOTTAYAM', '16:00:00', '19:30:00'),
('KL2BP', 'THRISSUR', 'ERNAKULAM', '17:00:00', '18:00:00'),
('KL2BP', 'THRISSUR', 'KOTTAYAM', '17:00:00', '19:30:00'),
('KL2BP', 'ERNAKULAM', 'KOTTAYAM', '18:00:00', '19:30:00'),
('KL3AP', 'PALAKKAD', 'THRISSUR', '10:00:00', '11:00:00'),
('KL3AP', 'PALAKKAD', 'ERNAKULAM', '10:00:00', '12:00:00'),
('KL3AP', 'THRISSUR', 'ERNAKULAM', '11:00:00', '12:00:00'),
('KL3BP', 'PALAKKAD', 'THRISSUR', '09:30:00', '10:30:00'),
('KL3BP', 'PALAKKAD', 'ERNAKULAM', '09:30:00', '11:30:00'),
('KL3BP', 'THRISSUR', 'ERNAKULAM', '10:30:00', '11:30:00'),
('KL4AP', 'PALAKKAD', 'THRISSUR', '13:00:00', '14:00:00'),
('KL4BP', 'PALAKKAD', 'THRISSUR', '16:40:00', '17:40:00'),
('KL5AP', 'THRISSUR', 'ERNAKULAM', '15:00:00', '16:00:00'),
('KL5AP', 'THRISSUR', 'KOTTAYAM', '15:00:00', '17:30:00'),
('KL5AP', 'THRISSUR', 'KOLLAM', '15:00:00', '19:30:00'),
('KL5AP', 'ERNAKULAM', 'KOTTAYAM', '16:00:00', '17:30:00'),
('KL5AP', 'ERNAKULAM', 'KOLLAM', '16:00:00', '19:30:00'),
('KL5AP', 'KOTTAYAM', 'KOLLAM', '17:30:00', '19:30:00'),
('KL6AP', 'THRISSUR', 'ERNAKULAM', '08:10:00', '09:10:00'),
('KL6AP', 'THRISSUR', 'KOTTAYAM', '08:10:00', '10:40:00'),
('KL6AP', 'ERNAKULAM', 'KOTTAYAM', '09:10:00', '10:40:00'),
('KL7AP', 'ERNAKULAM', 'KOTTAYAM', '11:00:00', '12:30:00'),
('KL7AP', 'ERNAKULAM', 'KOLLAM', '11:00:00', '14:30:00'),
('KL7AP', 'KOTTAYAM', 'KOLLAM', '12:30:00', '14:30:00'),
('KL7BP', 'ERNAKULAM', 'KOTTAYAM', '12:00:00', '13:30:00'),
('KL7BP', 'ERNAKULAM', 'KOLLAM', '12:00:00', '15:30:00'),
('KL7BP', 'KOTTAYAM', 'KOLLAM', '13:30:00', '15:30:00'),
('KL8AP', 'ERNAKULAM', 'KOTTAYAM', '11:15:00', '12:45:00'),
('KL9BP', 'KOTTAYAM', 'KOLLAM', '13:45:00', '15:45:00'),
('KL1AR', 'KOLLAM', 'PALAKKAD', '08:00:00', '13:30:00'),
('KL1AR', 'KOLLAM', 'THRISSUR', '08:00:00', '12:30:00'),
('KL1AR', 'KOLLAM', 'ERNAKULAM', '08:00:00', '11:30:00'),
('KL1AR', 'KOLLAM', 'KOTTAYAM', '08:00:00', '10:00:00'),
('KL1AR', 'KOTTAYAM', 'PALAKKAD', '10:00:00', '13:30:00'),
('KL1AR', 'KOTTAYAM', 'THRISSUR', '10:00:00', '12:30:00'),
('KL1AR', 'KOTTAYAM', 'ERANKULAM', '10:00:00', '11:30:00'),
('KL1AR', 'ERNAKULAM', 'PALAKKAD', '11:30:00', '13:30:00'),
('KL1AR', 'ERNAKULAM', 'THRISSUR', '11:30:00', '12:30:00'),
('KL1AR', 'THRISSUR', 'PALAKKAD', '12:30:00', '13:30:00'),
('KL1BR', 'KOLLAM', 'PALAKKAD', '07:00:00', '12:30:00'),
('KL1BR', 'KOLLAM', 'THRISSUR', '07:00:00', '11:30:00'),
('KL1BR', 'KOLLAM', 'ERNAKULAM', '07:00:00', '10:30:00'),
('KL1BR', 'KOLLAM', 'KOTTAYAM', '07:00:00', '09:00:00'),
('KL1BR', 'KOTTAYAM', 'PALAKKAD', '09:00:00', '12:30:00'),
('KL1BR', 'KOTTAYAM', 'THRISSUR', '09:00:00', '11:30:00'),
('KL1BR', 'KOTTAYAM', 'ERANKULAM', '09:00:00', '10:30:00'),
('KL1BR', 'ERNAKULAM', 'PALAKKAD', '10:30:00', '12:30:00'),
('KL1BR', 'ERNAKULAM', 'THRISSUR', '10:30:00', '11:30:00'),
('KL1BR', 'THRISSUR', 'PALAKKAD', '11:30:00', '12:30:00'),
('KL2AR', 'KOTTAYAM', 'PALAKKAD', '05:00:00', '08:30:00'),
('KL2AR', 'KOTTAYAM', 'THRISSUR', '05:00:00', '07:30:00'),
('KL2AR', 'KOTTAYAM', 'ERANKULAM', '05:00:00', '06:30:00'),
('KL2AR', 'ERNAKULAM', 'PALAKKAD', '06:30:00', '08:30:00'),
('KL2AR', 'ERNAKULAM', 'THRISSUR', '06:30:00', '07:30:00'),
('KL2AR', 'THRISSUR', 'PALAKKAD', '07:30:00', '08:30:00'),
('KL2BR', 'KOTTAYAM', 'PALAKKAD', '06:00:00', '09:30:00'),
('KL2BR', 'KOTTAYAM', 'THRISSUR', '06:00:00', '08:30:00'),
('KL2BR', 'KOTTAYAM', 'ERANKULAM', '06:00:00', '07:30:00'),
('KL2BR', 'ERNAKULAM', 'PALAKKAD', '07:30:00', '09:30:00'),
('KL2BR', 'ERNAKULAM', 'THRISSUR', '07:30:00', '08:30:00'),
('KL2BR', 'THRISSUR', 'PALAKKAD', '08:30:00', '09:30:00'),
('KL3AR', 'ERNAKULAM', 'PALAKKAD', '03:30:00', '05:30:00'),
('KL3AR', 'ERNAKULAM', 'THRISSUR', '03:30:00', '04:30:00'),
('KL3AR', 'THRISSUR', 'PALAKKAD', '04:30:00', '05:30:00'),
('KL3BR', 'ERNAKULAM', 'PALAKKAD', '04:30:00', '06:30:00'),
('KL3BR', 'ERNAKULAM', 'THRISSUR', '04:30:00', '05:30:00'),
('KL3BR', 'THRISSUR', 'PALAKKAD', '05:30:00', '06:30:00'),
('KL4BR', 'THRISSUR', 'PALAKKAD', '03:30:00', '04:30:00'),
('KL4AR', 'THRISSUR', 'PALAKKAD', '01:30:00', '02:30:00'),
('KL5AR', 'KOLLAM', 'KOTTAYAM', '10:30:00', '12:30:00'),
('KL5AR', 'KOLLAM', 'ERNAKULAM', '10:30:00', '14:00:00'),
('KL5AR', 'KOLLAM', 'THRISSUR', '10:30:00', '15:00:00'),
('KL5AR', 'KOTTAYAM', 'ERNAKULAM', '12:30:00', '14:00:00'),
('KL5AR', 'KOTTAYAM', 'THRISSUR', '12:30:00', '15:00:00'),
('KL5AR', 'ERNAKULAM', 'THRISSUR', '14:00:00', '15:00:00'),
('KL6AR', 'KOTTAYAM', 'ERNAKULAM', '13:30:00', '15:00:00'),
('KL6AR', 'KOTTAYAM', 'THRISSUR', '13:30:00', '16:00:00'),
('KL6AR', 'ERNAKULAM', 'THRISSUR', '15:00:00', '16:00:00'),
('KL7AR', 'KOLLAM', 'KOTTAYAM', '15:30:00', '17:30:00'),
('KL7AR', 'KOLLAM', 'ERNAKULAM', '15:30:00', '19:00:00'),
('KL7AR', 'KOTTAYAM', 'ERNAKULAM', '17:30:00', '19:00:00'),
('KL7BR', 'KOLLAM', 'KOTTAYAM', '16:30:00', '18:30:00'),
('KL7BR', 'KOLLAM', 'ERNAKULAM', '16:30:00', '20:00:00'),
('KL7BR', 'KOTTAYAM', 'ERNAKULAM', '18:30:00', '20:00:00'),
('KL8AR', 'ERNAKULAM', 'KOTTAYAM', '18:30:00', '20:00:00'),
('KL9BR', 'KOLLAM', 'KOTTAYAM', '18:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `busid` int(25) NOT NULL,
  `seatno` int(11) NOT NULL,
  `tot_amt` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`busid`, `seatno`, `tot_amt`) VALUES
(1, 12, 200),
(1, 15, 500),
(2, 20, 400);

-- --------------------------------------------------------

--
-- Table structure for table `stationorder`
--

CREATE TABLE `stationorder` (
  `no` int(11) NOT NULL,
  `station` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stationorder`
--

INSERT INTO `stationorder` (`no`, `station`) VALUES
(1, 'PALAKKAD'),
(2, 'THRISSUR'),
(3, 'ERNAKULAM'),
(4, 'KOTTAYAM'),
(5, 'KOLLAM');

-- --------------------------------------------------------

--
-- Table structure for table `stn`
--

CREATE TABLE `stn` (
  `name` varchar(20) NOT NULL,
  `stncode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stn`
--

INSERT INTO `stn` (`name`, `stncode`) VALUES
('ERNAKULAM', 'ERS'),
('KOLLAM', 'QLN'),
('KOTTAYAM', 'KTYM'),
('PALAKKAD', 'PKD'),
('THRISSUR', 'TCR');

-- --------------------------------------------------------

--
-- Table structure for table `taxistand`
--

CREATE TABLE `taxistand` (
  `standid` varchar(20) NOT NULL,
  `station` varchar(20) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `distance` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxistand`
--

INSERT INTO `taxistand` (`standid`, `station`, `landmark`, `distance`) VALUES
('EMA1', 'ERNAKULAM', 'MARINE DRIVE', '3KM'),
('KLKS1', 'KOLLAM', 'KSRTC STAND', '3KM'),
('KNA1', 'KOTTAYAM', 'NAGAMBADAM', '3KM'),
('PST1', 'PALAKKAD', 'STADIUM', '3KM'),
('TVA1', 'THRISSUR', 'VADAKKE STAND', '3KM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `emailid`, `password`, `phoneno`) VALUES
('akhil', 'akhil@gmail.com', '123', 984756852),
('akshaya', 'akshaya@gmail.com', '123', 820157784),
('amar', 'amar@gmail.com', '123', 997865453),
('chandana', 'chandana@gmail.com', '123', 956729139),
('HANDICAPPED', 'handi@gmaail.com', '123', 998765453),
('jojo', 'jojo@gmail.com', '123', 702514523),
('nandesh', 'nandesh@gmail.com', '123', 997865453);

-- --------------------------------------------------------

--
-- Table structure for table `userbook`
--

CREATE TABLE `userbook` (
  `userid` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `src` varchar(20) DEFAULT NULL,
  `dest` varchar(20) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `sts` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbook`
--

INSERT INTO `userbook` (`userid`, `name`, `src`, `dest`, `doj`, `rate`, `sts`) VALUES
(1, 'AISWARYA', 'PALAKKAD', 'KOLLAM', '2017-11-12', 800, 'BOOKED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`atmid`),
  ADD KEY `fkatm1` (`station`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD KEY `fkbooking1` (`username`),
  ADD KEY `fkbooking2` (`busid`),
  ADD KEY `fkbooking3` (`src`),
  ADD KEY `fkbooking4` (`dest`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busid`),
  ADD KEY `fkbus1` (`src`),
  ADD KEY `fkbus2` (`dest`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD KEY `fkuser1` (`username`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD KEY `fkfare1` (`dest`),
  ADD KEY `fkfare2` (`src`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelid`),
  ADD KEY `fkhotel1` (`station`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`busid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD KEY `fkroute1` (`busid`),
  ADD KEY `fkroute2` (`station`);

--
-- Indexes for table `stn`
--
ALTER TABLE `stn`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `taxistand`
--
ALTER TABLE `taxistand`
  ADD PRIMARY KEY (`standid`),
  ADD KEY `fktax2` (`station`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userbook`
--
ALTER TABLE `userbook`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userbook`
--
ALTER TABLE `userbook`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atm`
--
ALTER TABLE `atm`
  ADD CONSTRAINT `fkatm1` FOREIGN KEY (`station`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fkbooking1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkbooking2` FOREIGN KEY (`busid`) REFERENCES `bus` (`busid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkbooking3` FOREIGN KEY (`src`) REFERENCES `stn` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkbooking4` FOREIGN KEY (`dest`) REFERENCES `stn` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `fkbus1` FOREIGN KEY (`src`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkbus2` FOREIGN KEY (`dest`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fkuser1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fare`
--
ALTER TABLE `fare`
  ADD CONSTRAINT `fkfare1` FOREIGN KEY (`dest`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkfare2` FOREIGN KEY (`src`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `fkhotel1` FOREIGN KEY (`station`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `fkroute1` FOREIGN KEY (`busid`) REFERENCES `bus` (`busid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkroute2` FOREIGN KEY (`station`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taxistand`
--
ALTER TABLE `taxistand`
  ADD CONSTRAINT `fktax2` FOREIGN KEY (`station`) REFERENCES `stn` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
