-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 08:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bantayit_gts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `AdminID` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`AdminID`, `Password`) VALUES
(1, 'BantayIT2022');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_accounts`
--

CREATE TABLE `alumni_accounts` (
  `ID` int(255) NOT NULL,
  `StudentID` int(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_accounts`
--

INSERT INTO `alumni_accounts` (`ID`, `StudentID`, `FullName`, `Password`) VALUES
(1, 1920104, 'Robert Coro', 'BantayIT2022'),
(2, 1920297, 'Raphael Atienza', 'BantayIT2022'),
(3, 1920738, 'France Madia', 'BantayIT2022'),
(19, 1920774, 'Roi Andal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_queries`
--

CREATE TABLE `alumni_queries` (
  `ID` int(255) NOT NULL,
  `student_ID` int(255) NOT NULL,
  `Full Name` varchar(255) NOT NULL,
  `Query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `educational_attainment`
--

CREATE TABLE `educational_attainment` (
  `ID` int(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educational_attainment`
--

INSERT INTO `educational_attainment` (`ID`, `Degree`, `Date`) VALUES
(1, 'asd', '2022-11-04'),
(2, 'ass', '2022-11-23'),
(3, 'ass', '2022-11-23'),
(4, 'ass', '2022-11-23'),
(5, 'qwe', '2022-11-09'),
(6, 'qwe', '2022-11-09'),
(7, 'qwe', '2022-11-09'),
(8, 'three', '2022-11-18'),
(9, '', '0000-00-00'),
(10, '', '0000-00-00'),
(11, '', '0000-00-00'),
(12, '', '0000-00-00'),
(13, '', '0000-00-00'),
(14, '', '0000-00-00'),
(15, '', '0000-00-00'),
(16, '', '0000-00-00'),
(17, '', '0000-00-00'),
(18, '', '0000-00-00'),
(19, '', '0000-00-00'),
(20, '', '0000-00-00'),
(21, '', '0000-00-00'),
(22, '', '0000-00-00'),
(23, '', '0000-00-00'),
(24, 'asd', '2022-11-18'),
(25, '', '0000-00-00'),
(26, '', '0000-00-00'),
(27, '', '0000-00-00'),
(28, '', '0000-00-00'),
(29, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employed_type`
--

CREATE TABLE `employed_type` (
  `ID` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `form_answers`
--

CREATE TABLE `form_answers` (
  `ID` int(255) NOT NULL,
  `alumni_Picture` varchar(255) NOT NULL,
  `alumni_LastName` varchar(255) NOT NULL,
  `alumni_FirstName` varchar(255) NOT NULL,
  `alumni_MiddleName` varchar(255) NOT NULL,
  `alumni_StudentNumber` int(255) NOT NULL,
  `alumni_Email` varchar(255) NOT NULL,
  `alumni_ContactNumber` varchar(255) NOT NULL,
  `alumni_Address` varchar(255) NOT NULL,
  `alumni_Birthday` date NOT NULL,
  `alumni_Gender` varchar(255) NOT NULL,
  `alumni_CivilStatus` varchar(255) NOT NULL,
  `alumni_YearGraduated` varchar(255) NOT NULL,
  `alumni_Degree` varchar(255) NOT NULL,
  `alumni_DegreeDate` varchar(255) NOT NULL,
  `alumni_Seminar` varchar(255) NOT NULL,
  `alumni_SeminarDate` varchar(255) NOT NULL,
  `alumni_License` varchar(255) NOT NULL,
  `alumni_LicenseDate` varchar(255) NOT NULL,
  `alumni_Certificate` varchar(255) NOT NULL,
  `alumni_CertificateDate` varchar(255) NOT NULL,
  `alumni_Skills` varchar(255) NOT NULL,
  `alumni_EmployementStatus` varchar(255) NOT NULL,
  `alumni_EmployedType` varchar(255) NOT NULL,
  `alumni_EmployedCompany` varchar(255) NOT NULL,
  `alumni_EmployedPlaceOfWork` varchar(255) NOT NULL,
  `alumni_EmployedJobPosition` varchar(255) NOT NULL,
  `alumni_EmployedYearsEmployed` int(255) NOT NULL,
  `alumni_EmployedInitialGross` varchar(255) NOT NULL,
  `alumni_EmployedAddressOfWork` varchar(255) NOT NULL,
  `alumni_EmployedHowFirstJob` varchar(255) NOT NULL,
  `alumni_EmployedHowLongDidItTakeToFindFirstJob` varchar(255) NOT NULL,
  `alumni_JobRelatedToCourse` varchar(255) NOT NULL,
  `alumni_CurriculumRelevant` varchar(255) NOT NULL,
  `alumni_Competencies` varchar(255) NOT NULL,
  `alumni_ReasonUnemployment` varchar(255) NOT NULL,
  `alumni_OtherReasons` varchar(255) NOT NULL,
  `alumni_ThoughtsUBLC` text NOT NULL,
  `alumni_Suggestions1` varchar(255) NOT NULL,
  `alumni_Suggestions2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_answers`
--

INSERT INTO `form_answers` (`ID`, `alumni_Picture`, `alumni_LastName`, `alumni_FirstName`, `alumni_MiddleName`, `alumni_StudentNumber`, `alumni_Email`, `alumni_ContactNumber`, `alumni_Address`, `alumni_Birthday`, `alumni_Gender`, `alumni_CivilStatus`, `alumni_YearGraduated`, `alumni_Degree`, `alumni_DegreeDate`, `alumni_Seminar`, `alumni_SeminarDate`, `alumni_License`, `alumni_LicenseDate`, `alumni_Certificate`, `alumni_CertificateDate`, `alumni_Skills`, `alumni_EmployementStatus`, `alumni_EmployedType`, `alumni_EmployedCompany`, `alumni_EmployedPlaceOfWork`, `alumni_EmployedJobPosition`, `alumni_EmployedYearsEmployed`, `alumni_EmployedInitialGross`, `alumni_EmployedAddressOfWork`, `alumni_EmployedHowFirstJob`, `alumni_EmployedHowLongDidItTakeToFindFirstJob`, `alumni_JobRelatedToCourse`, `alumni_CurriculumRelevant`, `alumni_Competencies`, `alumni_ReasonUnemployment`, `alumni_OtherReasons`, `alumni_ThoughtsUBLC`, `alumni_Suggestions1`, `alumni_Suggestions2`) VALUES
(111, '', 'Andal', 'Roi Samuel', 'Calangi', 1920774, 'roi@gmail.com', '0992039489', 'Tanauan ', '2022-12-13', '', '', '', 'College, Highschool ,, , , , , ', 'December 5 2020, December 5 2020, , , , , , , , , , , , , , , ', 'College, Highschool ,, , , , , ', 'December 5 2020, December 5 2020, , , , , , , , , , , , , , , ', 'College, Highschool , , , , , , ', 'December 5 2020, December 5 2020, , , , , , ', 'HELLO, , , , , ', 'December 5 2020, , , , , ', 'Java, html, css,, , , , , ', 'Employed', 'Full – Time, ', 'asd', 'Local', 'asd', 5, 'P5,000.00 to less than P10,000.00', 'asd', 'Family business', '7 to 11 months', 'yes', 'yes', 'ENTREPRENEURIAL SKILLS', '', '', 'INTERNSHIP CUTIE', '', ''),
(112, '', 'Coro', 'Robert Gabriel', 'Leviste', 1920104, 'coro@gmail.com', '1212131243123', 'asdkjaskdj', '0000-00-00', '', '', '', 'qwe, fgh, tyu, , , , ', '2022-12-30, , , ', ', , , ', '0000-00-00, , , ', ', , , ', '0000-00-00, , , ', ', , , ', '2022-12-29, , , ', ', , , ', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', ''),
(118, '', 'Madia', 'France', 'Pereja', 1920738, '', '', '', '0000-00-00', '', '', '', 'asd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'sd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'asd, , dsa, , , , , , , , , , , , ', 'asd, asd, , , , , , , , , , , , , ', 'Employed', 'Full – Time, ', 'asd', 'Local', 'asda', 0, 'P25,000.00 and above', 'asd', 'Recommended by someone', '7 to 11 months', 'yes', 'yes', 'ENTREPRENEURIAL SKILLS', '', '', 'The sun had just set over the western horizon, painting the sky with vibrant hues of orange, pink, and purple as the small, isolated village nestled in the rolling hills came alive with the sound of crickets and the occasional hoot of an owl. The air was cool and crisp, carrying the faint scent of wood smoke from the chimneys of the wooden houses that dotted the landscape. In the center of the village, a group of children laughed and chased each other through the streets, their happy cries echoing off the surrounding hills. The adults, meanwhile, sat on their porches and chatted, exchanging news and gossip as they watched the stars begin to appear in the sky. ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `partner_account`
--

CREATE TABLE `partner_account` (
  `PartnerID` int(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_account`
--

INSERT INTO `partner_account` (`PartnerID`, `FullName`, `Password`) VALUES
(1, 'Accenture', 'BantayIT2022');

-- --------------------------------------------------------

--
-- Table structure for table `partner_queries`
--

CREATE TABLE `partner_queries` (
  `ID` int(255) NOT NULL,
  `partner_ID` int(255) NOT NULL,
  `Full Name` varchar(255) NOT NULL,
  `Query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `alumni_accounts`
--
ALTER TABLE `alumni_accounts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `FullName` (`FullName`);

--
-- Indexes for table `alumni_queries`
--
ALTER TABLE `alumni_queries`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `educational_attainment`
--
ALTER TABLE `educational_attainment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employed_type`
--
ALTER TABLE `employed_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `form_answers`
--
ALTER TABLE `form_answers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `alumni_StudentNumber` (`alumni_StudentNumber`),
  ADD KEY `alumni_Picture` (`alumni_Picture`),
  ADD KEY `alumni_LastName` (`alumni_LastName`),
  ADD KEY `alumni_FirstName` (`alumni_FirstName`),
  ADD KEY `alumni_MiddleName` (`alumni_MiddleName`),
  ADD KEY `alumni_Email` (`alumni_Email`),
  ADD KEY `alumni_ContactNumber` (`alumni_ContactNumber`),
  ADD KEY `alumni_Address` (`alumni_Address`),
  ADD KEY `alumni_Birthday` (`alumni_Birthday`),
  ADD KEY `alumni_Gender` (`alumni_Gender`),
  ADD KEY `alumni_CivilStatus` (`alumni_CivilStatus`),
  ADD KEY `alumni_YearGraduated` (`alumni_YearGraduated`),
  ADD KEY `alumni_Degree` (`alumni_Degree`),
  ADD KEY `alumni_DegreeDate` (`alumni_DegreeDate`),
  ADD KEY `alumni_Seminar` (`alumni_Seminar`),
  ADD KEY `alumni_SeminarDate` (`alumni_SeminarDate`),
  ADD KEY `alumni_License` (`alumni_License`),
  ADD KEY `alumni_LicenseDate` (`alumni_LicenseDate`),
  ADD KEY `alumni_Certificate` (`alumni_Certificate`),
  ADD KEY `alumni_CertificateDate` (`alumni_CertificateDate`),
  ADD KEY `alumni_Skills` (`alumni_Skills`),
  ADD KEY `alumni_EmployementStatus` (`alumni_EmployementStatus`),
  ADD KEY `alumni_EmployedType` (`alumni_EmployedType`),
  ADD KEY `alumni_EmployedCompany` (`alumni_EmployedCompany`),
  ADD KEY `alumni_EmployedPlaceOfWork` (`alumni_EmployedPlaceOfWork`),
  ADD KEY `alumni_EmployedJobPosition` (`alumni_EmployedJobPosition`),
  ADD KEY `alumni_EmployedInitialGross` (`alumni_EmployedInitialGross`),
  ADD KEY `alumni_EmployedHowFirstJob` (`alumni_EmployedHowFirstJob`),
  ADD KEY `alumni_EmployedHowLongDidItTakeToFindFirstJob` (`alumni_EmployedHowLongDidItTakeToFindFirstJob`),
  ADD KEY `alumni_JobRelatedToCourse` (`alumni_JobRelatedToCourse`),
  ADD KEY `alumni_CurriculumRelevant` (`alumni_CurriculumRelevant`),
  ADD KEY `alumni_Competencies` (`alumni_Competencies`),
  ADD KEY `alumni_ReasonUnemployment` (`alumni_ReasonUnemployment`),
  ADD KEY `alumni_ThoughtsUBLC` (`alumni_ThoughtsUBLC`(768)),
  ADD KEY `alumni_Suggestions1` (`alumni_Suggestions1`),
  ADD KEY `alumni_Suggestions2` (`alumni_Suggestions2`);

--
-- Indexes for table `partner_account`
--
ALTER TABLE `partner_account`
  ADD PRIMARY KEY (`PartnerID`);

--
-- Indexes for table `partner_queries`
--
ALTER TABLE `partner_queries`
  ADD PRIMARY KEY (`partner_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni_accounts`
--
ALTER TABLE `alumni_accounts`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `educational_attainment`
--
ALTER TABLE `educational_attainment`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `employed_type`
--
ALTER TABLE `employed_type`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_answers`
--
ALTER TABLE `form_answers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `partner_account`
--
ALTER TABLE `partner_account`
  MODIFY `PartnerID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
