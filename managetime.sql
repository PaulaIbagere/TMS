-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `acaddegree`
--

CREATE TABLE `acaddegree` (
  `AcadDegreeId` int(11) NOT NULL,
  `AcadDegreeName` text NOT NULL,
  `NoOfSemester` int(11) DEFAULT NULL,
  `AcadProgType` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acaddegree`
--

INSERT INTO `acaddegree` (`AcadDegreeId`, `AcadDegreeName`, `NoOfSemester`, `AcadProgType`) VALUES
(1, 'Political Science', 10, 1),
(2, 'Nursing', 13, 1),
(3, 'computer technology', 10, 1),
(4, 'computer technology', 8, 1),
(5, 'Economics', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `acadyear`
--

CREATE TABLE `acadyear` (
  `AcadYNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acadyear`
--

INSERT INTO `acadyear` (`AcadYNo`) VALUES
('2009/2008');

-- --------------------------------------------------------

--
-- Table structure for table `buildingseminar`
--

CREATE TABLE `buildingseminar` (
  `BId` int(11) NOT NULL,
  `BName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildingseminar`
--

INSERT INTO `buildingseminar` (`BId`, `BName`) VALUES
(3, 'Bucodel'),
(2, 'Labaratory'),
(1, 'Lecture Room');

-- --------------------------------------------------------

--
-- Table structure for table `classyear`
--

CREATE TABLE `classyear` (
  `ClassNo` int(11) NOT NULL,
  `ClassName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classyear`
--

INSERT INTO `classyear` (`ClassNo`, `ClassName`) VALUES
(1, 'first year'),
(2, 'Second Year'),
(3, 'Third Year'),
(4, 'Fourth Year'),
(5, 'Fifth Year'),
(6, 'Sixth Year');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `CollegeCode` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `CollegeName` text NOT NULL,
  `UserName` varchar(16) NOT NULL,
  `Passwd` varchar(40) NOT NULL,
  `UnLoc` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`CollegeCode`, `UniversityCode`, `CollegeName`, `UserName`, `Passwd`, `UnLoc`) VALUES
(1, 1, 'Computer Engineering', 'ceng', 'ceng', 'Ilishan'),
(1, 111, '&#1603;&#1604;&#1610;&#1577; &#1593;&#1604;&#1608;&#1605; &#1575;&#1604;&#1581;&#1575;&#1587;&#1608;&#1576;', 'cs', 'cscs', '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1594;&#1585;&#1576;&#1609;'),
(2, 111, '&#1603;&#1604;&#1610;&#1577; &#1575;&#1604;&#1607;&#1606;&#1583;&#1587;&#1577;', 'eng', 'engeng', '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1580;&#1606;&#1608;&#1576;&#1609;'),
(3, 1, 'Computer Tech', 'ctech', 'ctech', 'Ilishan');

-- --------------------------------------------------------

--
-- Table structure for table `collegestarttime`
--

CREATE TABLE `collegestarttime` (
  `AcadYNo` varchar(10) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `SemNo` int(11) NOT NULL,
  `TSID` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegestarttime`
--

INSERT INTO `collegestarttime` (`AcadYNo`, `CollegeCode`, `UniversityCode`, `SemNo`, `TSID`) VALUES
('2009/2008', 1, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `collegesubject`
--

CREATE TABLE `collegesubject` (
  `AcadYNo` varchar(200) NOT NULL,
  `DeptNo` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `AcadDegreeId` int(11) NOT NULL,
  `ClassNo` int(11) NOT NULL,
  `SecID` int(2) NOT NULL,
  `SemNo` int(11) NOT NULL,
  `SubCode` varchar(400) NOT NULL,
  `SubName` text NOT NULL,
  `SubHour` int(11) NOT NULL,
  `SubTHour` int(11) NOT NULL,
  `SubType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegesubject`
--

INSERT INTO `collegesubject` (`AcadYNo`, `DeptNo`, `CollegeCode`, `UniversityCode`, `AcadDegreeId`, `ClassNo`, `SecID`, `SemNo`, `SubCode`, `SubName`, `SubHour`, `SubTHour`, `SubType`) VALUES
('2009/2008', 1, 1, 1, 3, 1, 0, 1, 'CT400', 'reverse engineering', 3, 2, 1),
('2009/2008', 1, 1, 1, 3, 1, 0, 1, 'CT400L', 'reverse engineering', 1, 0, 2),
('2009/2008', 1, 1, 111, 1, 3, 0, 1, 'PS301', 'intro to politics', 3, 2, 1),
('2009/2008', 1, 1, 111, 1, 3, 0, 1, 'PS301L', 'intro to politics', 1, 0, 2),
('2009/2008', 2, 1, 1, 5, 1, 0, 1, 'ECONS', 'Basics of economics', 3, 0, 1),
('2009/2008', 2, 1, 1, 5, 1, 0, 1, 'ECONSL', 'Basics of economics', 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `DeptNo` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `AcadDegreeId` int(11) NOT NULL,
  `DeptName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`DeptNo`, `CollegeCode`, `UniversityCode`, `AcadDegreeId`, `DeptName`) VALUES
(1, 1, 1, 3, 'computer technology'),
(1, 1, 111, 1, 'Political Science'),
(1, 3, 1, 4, 'computer technology'),
(2, 1, 1, 5, 'Introduction to economics'),
(2, 1, 111, 2, 'Nursing');

-- --------------------------------------------------------

--
-- Table structure for table `deptandsem`
--

CREATE TABLE `deptandsem` (
  `UniversityCode` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `DeptNo` int(11) NOT NULL,
  `AcadDegreeId` int(11) NOT NULL,
  `SemNo` int(11) NOT NULL,
  `ClassNo` int(11) NOT NULL,
  `SecID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptandsem`
--

INSERT INTO `deptandsem` (`UniversityCode`, `CollegeCode`, `DeptNo`, `AcadDegreeId`, `SemNo`, `ClassNo`, `SecID`) VALUES
(1, 1, 1, 3, 1, 1, 0),
(1, 1, 1, 3, 1, 2, 0),
(1, 1, 1, 3, 1, 3, 0),
(1, 1, 1, 3, 1, 4, 0),
(1, 1, 1, 3, 1, 5, 0),
(1, 1, 1, 3, 2, 1, 0),
(1, 1, 1, 3, 2, 2, 0),
(1, 1, 1, 3, 2, 3, 0),
(1, 1, 1, 3, 2, 4, 0),
(1, 1, 1, 3, 2, 5, 0),
(1, 1, 2, 5, 1, 1, 0),
(1, 1, 2, 5, 2, 1, 0),
(1, 3, 1, 4, 1, 1, 0),
(1, 3, 1, 4, 1, 2, 0),
(1, 3, 1, 4, 1, 3, 0),
(1, 3, 1, 4, 1, 4, 0),
(1, 3, 1, 4, 2, 1, 0),
(1, 3, 1, 4, 2, 2, 0),
(1, 3, 1, 4, 2, 3, 0),
(1, 3, 1, 4, 2, 4, 0),
(111, 1, 1, 1, 1, 1, 0),
(111, 1, 1, 1, 1, 2, 0),
(111, 1, 1, 1, 1, 3, 0),
(111, 1, 1, 1, 1, 4, 0),
(111, 1, 1, 1, 1, 5, 0),
(111, 1, 1, 1, 2, 1, 0),
(111, 1, 1, 1, 2, 2, 0),
(111, 1, 1, 1, 2, 3, 0),
(111, 1, 1, 1, 2, 4, 0),
(111, 1, 1, 1, 2, 5, 0),
(111, 1, 2, 2, 1, 1, 0),
(111, 1, 2, 2, 1, 2, 0),
(111, 1, 2, 2, 1, 3, 0),
(111, 1, 2, 2, 1, 4, 0),
(111, 1, 2, 2, 1, 5, 0),
(111, 1, 2, 2, 1, 6, 0),
(111, 1, 2, 2, 2, 1, 0),
(111, 1, 2, 2, 2, 2, 0),
(111, 1, 2, 2, 2, 3, 0),
(111, 1, 2, 2, 2, 4, 0),
(111, 1, 2, 2, 2, 5, 0),
(111, 1, 2, 2, 2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deptsection`
--

CREATE TABLE `deptsection` (
  `UniversityCode` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `DeptNo` int(11) NOT NULL,
  `AcadDegreeId` int(11) NOT NULL,
  `ClassNo` int(11) NOT NULL,
  `SecID` int(11) NOT NULL,
  `SecName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grouppersem`
--

CREATE TABLE `grouppersem` (
  `AcadYNo` varchar(200) NOT NULL,
  `UniversityCode` int(4) NOT NULL,
  `CollegeCode` int(4) NOT NULL,
  `DeptNo` int(4) NOT NULL,
  `AcadDegreeId` int(3) NOT NULL,
  `SemNo` int(2) NOT NULL,
  `ClassNo` int(2) NOT NULL,
  `SecID` int(2) NOT NULL,
  `GId` int(2) NOT NULL,
  `GName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grouppersem`
--

INSERT INTO `grouppersem` (`AcadYNo`, `UniversityCode`, `CollegeCode`, `DeptNo`, `AcadDegreeId`, `SemNo`, `ClassNo`, `SecID`, `GId`, `GName`) VALUES
('2009/2008', 1, 1, 1, 3, 1, 1, 0, 1, '&#1605;&#1580;&nbsp;1'),
('2009/2008', 1, 1, 1, 3, 1, 1, 0, 2, '&#1605;&#1580;&nbsp;2'),
('2009/2008', 1, 1, 1, 3, 1, 1, 0, 3, '&#1605;&#1580;&nbsp;3'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 1, '&#1605;&#1580;&nbsp;1'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 2, '&#1605;&#1580;&nbsp;2'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 3, '&#1605;&#1580;&nbsp;3'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 4, '&#1605;&#1580;&nbsp;4'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 5, '&#1605;&#1580;&nbsp;5'),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 6, '&#1605;&#1580;&nbsp;6');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `UserName` varchar(16) NOT NULL,
  `Passwd` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`UserName`, `Passwd`) VALUES
('manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `managinglec`
--

CREATE TABLE `managinglec` (
  `AcadYNo` varchar(200) NOT NULL,
  `MDays` int(11) NOT NULL,
  `MTimes` varchar(15) NOT NULL,
  `BId` int(11) NOT NULL,
  `SubBId` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `DeptNo` int(11) NOT NULL,
  `AcadDegreeId` int(11) NOT NULL,
  `SemNo` int(11) NOT NULL,
  `ClassNo` int(11) NOT NULL,
  `SecID` int(11) NOT NULL,
  `SubCode` varchar(400) NOT NULL,
  `SubType` int(2) NOT NULL,
  `GId` int(2) NOT NULL,
  `TeacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managinglec`
--

INSERT INTO `managinglec` (`AcadYNo`, `MDays`, `MTimes`, `BId`, `SubBId`, `UniversityCode`, `CollegeCode`, `DeptNo`, `AcadDegreeId`, `SemNo`, `ClassNo`, `SecID`, `SubCode`, `SubType`, `GId`, `TeacherId`) VALUES
('2009/2008', 2, '3', 1, 0, 1, 1, 1, 3, 1, 1, 0, 'CT400', 1, 0, 1),
('2009/2008', 2, '-', 1, 0, 1, 1, 1, 3, 1, 1, 0, 'CT400', 1, 0, 1),
('2009/2008', 2, '3', 1, 0, 1, 1, 1, 3, 1, 1, 0, 'CT400', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SemNo` int(11) NOT NULL,
  `ClassNo` int(11) NOT NULL,
  `SemName` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SemNo`, `ClassNo`, `SemName`) VALUES
(1, 1, 'First Semester'),
(1, 2, 'First Semester'),
(1, 3, 'First Semester'),
(1, 4, 'First Semester'),
(1, 5, 'First Semester'),
(1, 6, 'First Semester'),
(2, 1, 'Second Semester'),
(2, 2, 'Second Semester'),
(2, 3, 'Second Semester'),
(2, 4, 'Second Semester'),
(2, 5, 'Second Semester'),
(2, 6, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `studypersem`
--

CREATE TABLE `studypersem` (
  `AcadYNo` varchar(200) NOT NULL,
  `UniversityCode` int(4) NOT NULL,
  `CollegeCode` int(4) NOT NULL,
  `DeptNo` int(4) NOT NULL,
  `AcadDegreeId` int(3) NOT NULL,
  `SemNo` int(2) NOT NULL,
  `ClassNo` int(2) NOT NULL,
  `SecID` int(11) NOT NULL,
  `NoOfStud` int(11) NOT NULL,
  `NoOfGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studypersem`
--

INSERT INTO `studypersem` (`AcadYNo`, `UniversityCode`, `CollegeCode`, `DeptNo`, `AcadDegreeId`, `SemNo`, `ClassNo`, `SecID`, `NoOfStud`, `NoOfGroup`) VALUES
('2009/2008', 1, 1, 1, 3, 1, 1, 0, 20, 3),
('2009/2008', 1, 1, 1, 3, 2, 1, 0, 500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `subbuildingseminar`
--

CREATE TABLE `subbuildingseminar` (
  `UniversityCode` int(11) NOT NULL,
  `BId` int(11) NOT NULL,
  `SubBId` int(11) NOT NULL,
  `SubBName` varchar(800) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `UnLoc` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subbuildingseminar`
--

INSERT INTO `subbuildingseminar` (`UniversityCode`, `BId`, `SubBId`, `SubBName`, `Capacity`, `UnLoc`) VALUES
(1, 1, 1, 'Havillah', 800, 'Ilishan'),
(1, 1, 2, 'Topaz', 600, 'Abuja'),
(1, 2, 1, 'E102', 40, 'Ilishan'),
(1, 2, 2, 'B102', 50, 'Ilishan'),
(111, 1, 1, '&#1575;&#1604;&#1602;&#1575;&#1593;&#1577;1', 500, '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1594;&#1585;&#1576;&#1609;'),
(111, 1, 2, '&#1575;&#1604;&#1602;&#1575;&#1593;&#1577;4', 1000, '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1580;&#1606;&#1608;&#1576;&#1609;'),
(111, 2, 1, '&#1605;&#1593;&#1605;&#1604;1', 50, '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1594;&#1585;&#1576;&#1609;'),
(111, 2, 2, '&#1605;&#1593;&#1605;&#1604;2', 50, '&#1575;&#1604;&#1580;&#1606;&#1575;&#1581; &#1575;&#1604;&#1580;&#1606;&#1608;&#1576;&#1609;');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `AcadYNo` varchar(200) NOT NULL,
  `TeacherNo` int(4) NOT NULL,
  `UniversityCode` int(3) NOT NULL,
  `CollegeCode` int(2) NOT NULL,
  `TeacherName` text NOT NULL,
  `Qualif` int(2) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`AcadYNo`, `TeacherNo`, `UniversityCode`, `CollegeCode`, `TeacherName`, `Qualif`, `Status`) VALUES
('2009/2008', 1, 1, 1, 'of the.Paula Ibagere', 4, 0),
('2009/2008', 2, 1, 1, '?.John Brown', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `timeslots`
--

CREATE TABLE `timeslots` (
  `TSID` int(1) NOT NULL,
  `Slot1` varchar(5) NOT NULL,
  `Slot2` varchar(5) NOT NULL,
  `Slot3` varchar(5) NOT NULL,
  `Slot4` varchar(5) NOT NULL,
  `Slot5` varchar(5) NOT NULL,
  `Slot6` varchar(5) NOT NULL,
  `Slot7` varchar(5) NOT NULL,
  `Slot8` varchar(5) NOT NULL,
  `Slot9` varchar(5) NOT NULL,
  `Slot10` varchar(5) NOT NULL,
  `Slot11` varchar(5) NOT NULL,
  `Slot12` varchar(5) NOT NULL,
  `Slot13` varchar(5) NOT NULL,
  `Slot14` varchar(5) NOT NULL DEFAULT '0',
  `Slot15` varchar(5) NOT NULL DEFAULT '0',
  `Slot16` varchar(5) NOT NULL DEFAULT '0',
  `Slot17` varchar(5) NOT NULL DEFAULT '0',
  `Slot18` varchar(5) NOT NULL DEFAULT '0',
  `Slot19` varchar(5) NOT NULL DEFAULT '0',
  `Slot20` varchar(5) NOT NULL DEFAULT '0',
  `Slot21` varchar(5) NOT NULL DEFAULT '0',
  `Slot22` varchar(5) NOT NULL DEFAULT '0',
  `Slot23` varchar(5) NOT NULL DEFAULT '0',
  `Slot24` varchar(5) NOT NULL DEFAULT '0',
  `Slot25` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`TSID`, `Slot1`, `Slot2`, `Slot3`, `Slot4`, `Slot5`, `Slot6`, `Slot7`, `Slot8`, `Slot9`, `Slot10`, `Slot11`, `Slot12`, `Slot13`, `Slot14`, `Slot15`, `Slot16`, `Slot17`, `Slot18`, `Slot19`, `Slot20`, `Slot21`, `Slot22`, `Slot23`, `Slot24`, `Slot25`) VALUES
(4, '7:30', '8', '8:30', '9', '9:30', '10', '10:30', '11', '11:30', '12', '12:30', '1', '1:30', '2', '2:30', '3', '3:30', '4', '4:30', '5', '5:30', '6', '6:30', '7', '7:30');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `UniversityCode` int(11) NOT NULL,
  `UniversityName` text NOT NULL,
  `Logo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`UniversityCode`, `UniversityName`, `Logo`) VALUES
(1, 'Babcock University', 'logo/un1.jpg'),
(2, 'Convenant University', 'logo/un2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `univloc`
--

CREATE TABLE `univloc` (
  `LocId` int(11) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `UnLoc` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `univloc`
--

INSERT INTO `univloc` (`LocId`, `UniversityCode`, `UnLoc`) VALUES
(1, 111, 'Ilishan;'),
(2, 111, 'Abuja;'),
(1, 2, 'Cannan Land'),
(1, 1, 'Ilishan'),
(2, 1, 'Abuja'),
(3, 1, 'San Francisco');

-- --------------------------------------------------------

--
-- Table structure for table `usedby`
--

CREATE TABLE `usedby` (
  `AcadYNo` varchar(200) NOT NULL,
  `UniversityCode` int(11) NOT NULL,
  `CollegeCode` int(11) NOT NULL,
  `BId` int(11) NOT NULL,
  `SubBId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usedby`
--

INSERT INTO `usedby` (`AcadYNo`, `UniversityCode`, `CollegeCode`, `BId`, `SubBId`) VALUES
('2009/2008', 1, 1, 1, 2009),
('2009/2008', 1, 1, 2, 1),
('2009/2008', 1, 1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acaddegree`
--
ALTER TABLE `acaddegree`
  ADD PRIMARY KEY (`AcadDegreeId`);

--
-- Indexes for table `acadyear`
--
ALTER TABLE `acadyear`
  ADD UNIQUE KEY `AcadYNo` (`AcadYNo`);

--
-- Indexes for table `buildingseminar`
--
ALTER TABLE `buildingseminar`
  ADD PRIMARY KEY (`BId`),
  ADD UNIQUE KEY `BName` (`BName`);

--
-- Indexes for table `classyear`
--
ALTER TABLE `classyear`
  ADD PRIMARY KEY (`ClassNo`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`CollegeCode`,`UniversityCode`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Indexes for table `collegestarttime`
--
ALTER TABLE `collegestarttime`
  ADD PRIMARY KEY (`AcadYNo`,`CollegeCode`,`UniversityCode`,`SemNo`);

--
-- Indexes for table `collegesubject`
--
ALTER TABLE `collegesubject`
  ADD PRIMARY KEY (`AcadYNo`,`DeptNo`,`CollegeCode`,`UniversityCode`,`AcadDegreeId`,`ClassNo`,`SemNo`,`SubCode`,`SecID`),
  ADD KEY `AcadDegreeId` (`AcadDegreeId`),
  ADD KEY `DeptNo` (`DeptNo`),
  ADD KEY `CollegeCode` (`CollegeCode`),
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`DeptNo`,`CollegeCode`,`UniversityCode`,`AcadDegreeId`),
  ADD KEY `CollegeCode` (`CollegeCode`),
  ADD KEY `UniversityCode` (`UniversityCode`),
  ADD KEY `AcadDegreeId` (`AcadDegreeId`);

--
-- Indexes for table `deptandsem`
--
ALTER TABLE `deptandsem`
  ADD PRIMARY KEY (`UniversityCode`,`CollegeCode`,`DeptNo`,`AcadDegreeId`,`SemNo`,`ClassNo`,`SecID`),
  ADD KEY `AcadDegreeId` (`AcadDegreeId`),
  ADD KEY `DeptNo` (`DeptNo`),
  ADD KEY `CollegeCode` (`CollegeCode`);

--
-- Indexes for table `deptsection`
--
ALTER TABLE `deptsection`
  ADD PRIMARY KEY (`UniversityCode`,`CollegeCode`,`DeptNo`,`AcadDegreeId`,`SecID`,`ClassNo`),
  ADD KEY `DeptNo` (`DeptNo`);

--
-- Indexes for table `grouppersem`
--
ALTER TABLE `grouppersem`
  ADD PRIMARY KEY (`AcadYNo`,`UniversityCode`,`CollegeCode`,`DeptNo`,`AcadDegreeId`,`SemNo`,`ClassNo`,`GId`,`SecID`),
  ADD KEY `CollegeCode` (`CollegeCode`),
  ADD KEY `DeptNo` (`DeptNo`),
  ADD KEY `AcadDegreeId` (`AcadDegreeId`),
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `managinglec`
--
ALTER TABLE `managinglec`
  ADD KEY `AcadYNo` (`AcadYNo`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SemNo`,`ClassNo`),
  ADD KEY `ClassNo` (`ClassNo`);

--
-- Indexes for table `studypersem`
--
ALTER TABLE `studypersem`
  ADD PRIMARY KEY (`AcadYNo`,`UniversityCode`,`CollegeCode`,`DeptNo`,`AcadDegreeId`,`SemNo`,`ClassNo`,`SecID`),
  ADD KEY `DeptNo` (`DeptNo`),
  ADD KEY `CollegeCode` (`CollegeCode`),
  ADD KEY `AcadDegreeId` (`AcadDegreeId`),
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Indexes for table `subbuildingseminar`
--
ALTER TABLE `subbuildingseminar`
  ADD PRIMARY KEY (`UniversityCode`,`BId`,`SubBId`),
  ADD KEY `UniversityCode` (`UniversityCode`),
  ADD KEY `BId` (`BId`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`AcadYNo`,`TeacherNo`,`UniversityCode`,`CollegeCode`),
  ADD KEY `AcadYNo` (`AcadYNo`),
  ADD KEY `UniversityCode` (`UniversityCode`),
  ADD KEY `CollegeCode` (`CollegeCode`);

--
-- Indexes for table `timeslots`
--
ALTER TABLE `timeslots`
  ADD PRIMARY KEY (`TSID`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`UniversityCode`);

--
-- Indexes for table `univloc`
--
ALTER TABLE `univloc`
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Indexes for table `usedby`
--
ALTER TABLE `usedby`
  ADD PRIMARY KEY (`AcadYNo`,`UniversityCode`,`CollegeCode`,`BId`,`SubBId`),
  ADD KEY `CollegeCode` (`CollegeCode`),
  ADD KEY `UniversityCode` (`UniversityCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usedby`
--
ALTER TABLE `usedby`
  ADD CONSTRAINT `usedby_ibfk_1` FOREIGN KEY (`AcadYNo`) REFERENCES `acadyear` (`AcadYNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usedby_ibfk_2` FOREIGN KEY (`CollegeCode`) REFERENCES `colleges` (`CollegeCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usedby_ibfk_3` FOREIGN KEY (`UniversityCode`) REFERENCES `universities` (`UniversityCode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
