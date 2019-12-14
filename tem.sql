-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 03:22 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tem`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventorganized`
--

CREATE TABLE `eventorganized` (
  `eventOrgId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `OrgId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `eventTitle` varchar(50) NOT NULL,
  `eventAddress` varchar(50) NOT NULL,
  `eventCity` varchar(50) NOT NULL,
  `eventState` varchar(50) NOT NULL,
  `eventdateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fuploads`
--

CREATE TABLE `fuploads` (
  `upLoadId` int(11) NOT NULL,
  `eventId` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `timeUpload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orgnizers`
--

CREATE TABLE `orgnizers` (
  `orgId` int(11) NOT NULL,
  `orgName` varchar(50) NOT NULL,
  `orgPhone` varchar(50) NOT NULL,
  `orgTwitter` varchar(50) NOT NULL,
  `orgLinkedIn` varchar(50) NOT NULL,
  `orgFacebook` varchar(50) NOT NULL,
  `orgEmail` varchar(50) NOT NULL,
  `orgPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventorganized`
--
ALTER TABLE `eventorganized`
  ADD PRIMARY KEY (`eventOrgId`),
  ADD KEY `eventId` (`eventId`),
  ADD KEY `OrgId` (`OrgId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `fuploads`
--
ALTER TABLE `fuploads`
  ADD PRIMARY KEY (`upLoadId`),
  ADD UNIQUE KEY `fName` (`fName`),
  ADD KEY `eventId` (`eventId`);

--
-- Indexes for table `orgnizers`
--
ALTER TABLE `orgnizers`
  ADD PRIMARY KEY (`orgId`),
  ADD UNIQUE KEY `orgEmail` (`orgEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventorganized`
--
ALTER TABLE `eventorganized`
  MODIFY `eventOrgId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fuploads`
--
ALTER TABLE `fuploads`
  MODIFY `upLoadId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orgnizers`
--
ALTER TABLE `orgnizers`
  MODIFY `orgId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventorganized`
--
ALTER TABLE `eventorganized`
  ADD CONSTRAINT `eventorganized_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`) ON DELETE CASCADE,
  ADD CONSTRAINT `eventorganized_ibfk_2` FOREIGN KEY (`OrgId`) REFERENCES `orgnizers` (`orgId`) ON DELETE CASCADE;

--
-- Constraints for table `fuploads`
--
ALTER TABLE `fuploads`
  ADD CONSTRAINT `fuploads_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `events` (`eventId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
