-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 03:47 PM
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
-- Database: `rtomsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-12-01 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `ID` int(5) NOT NULL,
  `StateID` int(5) DEFAULT NULL,
  `CityName` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`ID`, `StateID`, `CityName`, `CreationDate`) VALUES
(1, 1, 'Varanasi', '2022-11-09 05:41:55'),
(2, 1, 'Prayagraj', '2022-11-09 05:42:07'),
(3, 1, 'Aligarh', '2022-11-09 05:42:23'),
(4, 3, 'Bhopal', '2022-11-09 05:42:34'),
(5, 5, 'Patna', '2022-11-09 05:42:51'),
(6, 5, 'Bhagalpur', '2022-11-09 05:43:10'),
(7, 7, 'Raipur', '2022-11-09 05:43:38'),
(8, 7, 'Bilaspur', '2022-11-09 05:43:56'),
(9, 7, 'Jagdalpur', '2022-11-09 05:44:13'),
(10, 8, 'Shillong', '2022-12-03 12:55:26'),
(12, 1, 'BulandShahar', '2022-12-03 13:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', 'cost of volvo place pritampura to dwarka', '2021-07-05 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2021-07-09 12:48:40', 1),
(3, 'Test', 'test@gmail.com', 'Want to know price of forest cake', '2021-07-16 12:51:06', 1),
(4, 'Shanu', 'shanu@gmail.com', 'hkjhkjhk', '2021-07-17 07:32:14', 1),
(5, 'Taanu Sharma', 'tannu@gmail.com', 'ytjhdjguqwgyugjhbjdsuy\r\nkjhjkwhkd\r\nljkkljwq\r\nmlkjol ', '2021-07-28 12:09:22', 1),
(6, 'Harish Kumar', 'hari@gmail.com', 'rytweiuyeiouoipoipo[po\r\njknkjlkdsflkjflkdjslk;lsdkf;l\r\nn,mn,ncxm.,m.m.,.', '2021-07-31 16:34:16', 1),
(7, 'test', 'test@gmail.com', 'Test', '2021-08-25 16:56:19', 1),
(8, 'Sarita Pandey', 'sar@gmail.com', 'ytgjq[prooaerh', '2022-02-07 11:38:47', 1),
(9, 'Rakesh', 'rak@gmail.com', 'Tell me procedure of learning licence.', '2022-11-07 13:00:16', NULL),
(10, 'Amit Kumar', 'amitk@gmail.com', 'This is for Testing.', '2022-12-03 13:14:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblldicence`
--

CREATE TABLE `tblldicence` (
  `ID` int(10) NOT NULL,
  `LearningLicenceno` int(10) DEFAULT NULL,
  `ApplicationNumber` int(10) DEFAULT NULL,
  `UserID` int(10) DEFAULT NULL,
  `StateID` int(5) DEFAULT NULL,
  `CityID` int(5) DEFAULT NULL,
  `ProfilePic` varchar(250) DEFAULT NULL,
  `FathersName` varchar(250) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `EducationQualification` varchar(250) DEFAULT NULL,
  `LicenceType` varchar(250) DEFAULT NULL,
  `PermanentAddress` mediumtext DEFAULT NULL,
  `CommunicationAddress` mediumtext DEFAULT NULL,
  `BloodGroup` varchar(100) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblldicence`
--

INSERT INTO `tblldicence` (`ID`, `LearningLicenceno`, `ApplicationNumber`, `UserID`, `StateID`, `CityID`, `ProfilePic`, `FathersName`, `DateofBirth`, `EducationQualification`, `LicenceType`, `PermanentAddress`, `CommunicationAddress`, `BloodGroup`, `ApplyDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, NULL, 585387255, 7, 1, 1, '5823e235e7f8b78cb41b5dbab70190cb1667804303.jpg', 'Harish', '2002-11-14', 'B.SC', 'Three/Four Wheeler', 'K-780, Jhangirpuri, New Delhi', 'K-780, Jhangirpuri, New Delhi', 'A+', '2022-11-07 06:58:23', 'Accepted', 'Accepted', '2022-11-17 07:11:59'),
(2, 789456123, 878723632, 7, 1, 2, 'ad04ad2d96ae326a9ca9de47d9e2fc741667810609.jpg', 'Kailash Singh', '1995-05-07', 'B.Tech', 'Two Wheeler', 'H-908, Borevalley East Mumbai Maharastra', 'H-908, Borevalley East Mumbai Maharastra', 'O-', '2022-11-07 08:43:29', 'Request Has been accepted', 'Accepted', '2022-11-14 12:35:06'),
(3, 2147483647, 864286741, 7, 1, 1, 'ad04ad2d96ae326a9ca9de47d9e2fc741668175619.jpg', 'Nirmal Kimar', '1992-01-11', 'Senior Secondary', 'Two Wheeler', 'L-876, Vasant Vihar Aligarh', 'L-876, Vasant Vihar Aligarh', 'B+', '2022-11-11 14:06:59', 'Rejected Due to insufficient document', 'Rejected', '2022-11-17 07:12:40'),
(4, 12345645, 517450211, 8, 1, 2, 'ad04ad2d96ae326a9ca9de47d9e2fc741668428806.jpg', 'Rajesh Kaushik', '1986-11-01', 'B.Tech', 'Two Wheeler', 'J-703, Civil Line Puarni Gali-90', 'J-703, Civil Line Puarni Gali-90', 'A-', '2022-11-14 12:26:46', 'Rejected', 'Rejected', '2022-11-14 12:36:51'),
(5, 457071175, 266633647, 9, 1, 3, 'ddab77a07a14bee0825b053f682787971669568028.png', 'Gyan Singh', '2001-01-30', 'BA', 'Two Wheeler', 'A 1234 XYZ Street Aligarh UP-201301', 'A 1234 XYZ Street Aligarh UP-201301', 'o+', '2022-11-27 16:53:48', 'Rejected', 'Rejected', '2022-12-03 09:57:45'),
(6, 457071175, 499743901, 9, 1, 3, 'f8ca02d50113fd8a01c1493bc63982d51670061226.png', 'Gyan Singh', '2001-01-30', 'BA', 'Two Wheeler', 'A 1234 XYZ Street Aligarh UP-201301', 'A 1234 XYZ Street Aligarh UP-201301', 'O+', '2022-12-03 09:53:46', 'DL Approved', 'Accepted', '2022-12-03 09:59:04'),
(9, 127928849, 966684672, 10, 1, 12, '104fe685b190416fbc5778ca203e224e1670073068.png', 'Rahul Singh', '2004-11-29', 'BSC', 'Two Wheeler', 'ABC 8566 Bulan Shaher', 'ABC 8566 Bulan Shaher', 'A-', '2022-12-03 13:11:08', 'Rejected', 'Rejected', '2022-12-03 13:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblllicence`
--

CREATE TABLE `tblllicence` (
  `ID` int(10) NOT NULL,
  `ApplicationNumber` int(10) DEFAULT NULL,
  `UserID` int(10) DEFAULT NULL,
  `StateID` int(5) DEFAULT NULL,
  `CityID` int(5) DEFAULT NULL,
  `ProfilePic` varchar(250) DEFAULT NULL,
  `FathersName` varchar(250) DEFAULT NULL,
  `DateofBirth` date DEFAULT NULL,
  `EducationQualification` varchar(250) DEFAULT NULL,
  `LicenceType` varchar(250) DEFAULT NULL,
  `PermanentAddress` mediumtext DEFAULT NULL,
  `CommunicationAddress` mediumtext DEFAULT NULL,
  `BloodGroup` varchar(100) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblllicence`
--

INSERT INTO `tblllicence` (`ID`, `ApplicationNumber`, `UserID`, `StateID`, `CityID`, `ProfilePic`, `FathersName`, `DateofBirth`, `EducationQualification`, `LicenceType`, `PermanentAddress`, `CommunicationAddress`, `BloodGroup`, `ApplyDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 585387255, 4, 1, 2, '5823e235e7f8b78cb41b5dbab70190cb1667804303.jpg', 'Joginder Singh', '2002-11-14', 'B.SC', 'Three/Four Wheeler', 'K-780, Jhangirpuri, New Delhi', 'K-780, Jhangirpuri, New Delhi', 'A+', '2022-11-07 06:58:23', 'Accepted', 'Accepted', '2022-11-14 13:13:14'),
(2, 578821124, 1, 1, 1, 'f9fcf330ee90b7639bc8e5c8722b087f1668174720.jpg', 'J.K Khanna', '1999-10-11', 'B.Tech', 'Two Wheeler', 'H-902 Vihar Kunj Patna', 'H-902 Vihar Kunj Patna', 'A-', '2022-11-11 13:52:00', 'Accepted', 'Accepted', '2022-11-14 07:54:45'),
(3, 911937677, 1, 5, 6, 'ad04ad2d96ae326a9ca9de47d9e2fc741668174915.jpg', 'H.K Lal', '2002-05-11', 'B.A', 'Heavy Motor Vehicle', 'J-900, Kashinagar Bhagalpur', 'J-900, Kashinagar Bhagalpur', 'A-', '2022-11-11 13:55:15', NULL, NULL, '2022-11-14 07:14:58'),
(4, 407583863, 7, 1, 1, 'e9db84d0e11b5c26723e9951e4f7204b1668410046.jpg', 'Kunal Sharma', '1991-01-05', 'B.Com', 'Heavy Motor Vehicle', 'H-990, Mhahamana Road Lanka Varanasi', 'H-990, Mhahamana Road Lanka Varanasi', 'O-', '2022-11-14 07:14:06', 'Rejected due to learning mistake', 'Rejected', '2022-11-14 07:55:24'),
(6, 457071175, 9, 1, 3, 'a55e2a168cab56350d686be483defac11669567674.png', 'Gyan Singh', '2001-01-30', 'BA', 'Two Wheeler', 'A 1234 XYZ Street Aligarh UP-201301', 'A 1234 XYZ Street Aligarh UP-201301', 'O+', '2022-11-27 16:47:54', 'Learning License Approved', 'Accepted', '2022-12-03 09:31:14'),
(7, 127928849, 10, 1, 12, '104fe685b190416fbc5778ca203e224e1670072969.png', 'Rahul Singh', '2004-11-29', 'BSC', 'Two Wheeler', 'Abc  899 Bulandshaher UP', 'Abc  899 Bulandshaher UP', 'A-', '2022-12-03 13:09:29', 'Learning License Approved', 'Accepted', '2022-12-03 13:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<div><font color=\"#202124\" face=\"arial, sans-serif\"><b>Our mission declares our purpose of existence as a company and our objectives.</b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b><br></b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</b></font></div>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541239, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblrto`
--

CREATE TABLE `tblrto` (
  `ID` int(5) NOT NULL,
  `StateID` int(5) DEFAULT NULL,
  `CityID` int(5) DEFAULT NULL,
  `NameofRTO` varchar(250) DEFAULT NULL,
  `RTOAddress` mediumtext DEFAULT NULL,
  `Nodalofficer` varchar(250) DEFAULT NULL,
  `Username` varchar(250) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrto`
--

INSERT INTO `tblrto` (`ID`, `StateID`, `CityID`, `NameofRTO`, `RTOAddress`, `Nodalofficer`, `Username`, `Password`, `CreationDate`) VALUES
(1, 1, 1, 'Babatpur RTO', 'Regional Transport Office, Babatpur Road, (Near Gas Plant), Varanasi, Uttar Pradesh.', 'Mayank Kumar', 'babatpur123', '202cb962ac59075b964b07152d234b70', '2022-11-09 06:24:58'),
(2, 1, 2, 'Allahabad RTO Office', '	T.P Nagar, Transport Nagar, Dhoomanganj, Prayagraj, Uttar Pradesh 211011', 'Krisnan Iyer', 'allahabad123', '202cb962ac59075b964b07152d234b70', '2022-11-09 06:26:25'),
(3, 5, 6, 'Bagalpur RTO Office', '	T.P Nagar, Transport Nagar, Dhoomanganj, Prayagraj, Uttar Pradesh 211011', 'RD Mishra', 'bagalpur123', '202cb962ac59075b964b07152d234b70', '2022-11-09 06:27:13'),
(4, 8, 10, 'Meghalaya RTO', '#23423 Shillong Meghalaya', 'Kumkum Wadwa', 'meg1234', '202cb962ac59075b964b07152d234b70', '2022-11-09 06:51:02'),
(5, 5, 5, 'Patna RTO', 'hgfhgfh', 'hgfhgf', 'hhkjhkj', '202cb962ac59075b964b07152d234b70', '2022-11-11 13:22:44'),
(6, 1, 3, 'Aligarh RTO', 'ABC Road Aligarh', 'Anuj Kumar', 'algrto', '5c428d8875d2948607f3e3fe134d71b4', '2022-12-03 09:22:02'),
(7, 1, 12, 'Bulanshaher RTO', '2423 XYZ Street', 'Amit Kumar', 'rtobuland', 'f925916e2754e5e03f75dd58a5733251', '2022-12-03 13:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `ID` int(5) NOT NULL,
  `StateName` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`ID`, `StateName`, `CreationDate`) VALUES
(1, 'Uttar Pradesh', '2022-11-07 14:28:58'),
(2, 'Maharastra', '2022-11-07 14:29:19'),
(3, 'Madya Pradesh', '2022-11-07 14:29:31'),
(4, 'Tripura', '2022-11-07 14:29:55'),
(5, 'Bihar', '2022-11-07 14:30:04'),
(6, 'J&K', '2022-11-07 14:30:12'),
(7, 'Chattisgarh', '2022-11-07 14:30:27'),
(8, 'Meghalaya', '2022-11-07 14:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `regDate`) VALUES
(1, 'Anuj Kumar', NULL, 'anuj.lpu1@gmail.com', 9009857868, 'f925916e2754e5e03f75dd58a5733251', '2017-02-04 19:30:50'),
(2, 'Amit ', NULL, 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '2017-03-15 17:21:22'),
(3, 'hg', NULL, 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-29 09:30:32'),
(4, 'hhkhj', 'jkh', 'g@gmail.com', 9089879765, '202cb962ac59075b964b07152d234b70', '2022-02-01 10:05:17'),
(5, 'test', 'test1', 'sar@gmail.com', 7987979797, '202cb962ac59075b964b07152d234b70', '2022-02-02 06:12:53'),
(6, 'Manish ', 'Sisodia', 'manish@gmail.com', 8979898989, '202cb962ac59075b964b07152d234b70', '2022-02-05 09:49:18'),
(7, 'Sanyogita', 'Sharma', 'anvi@gmail.com', 9879879879, '81dc9bdb52d04dc20036dbd8313ed055', '2022-11-02 07:14:52'),
(8, 'Yogesh', 'Kaushik', 'yog@gmail.com', 7878979789, '202cb962ac59075b964b07152d234b70', '2022-11-14 12:21:45'),
(9, 'John', 'Doe', 'johndoe12345@gmail.com', 1425362514, 'f925916e2754e5e03f75dd58a5733251', '2022-11-27 03:32:31'),
(10, 'Garima', 'Singh', 'garima12@gmail.com', 1414142536, 'f925916e2754e5e03f75dd58a5733251', '2022-12-03 13:08:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblldicence`
--
ALTER TABLE `tblldicence`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblllicence`
--
ALTER TABLE `tblllicence`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblrto`
--
ALTER TABLE `tblrto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblldicence`
--
ALTER TABLE `tblldicence`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblllicence`
--
ALTER TABLE `tblllicence`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblrto`
--
ALTER TABLE `tblrto`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
