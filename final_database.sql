-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 08:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `care_giver`
--

CREATE TABLE `care_giver` (
  `careID` int(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contactNumber` char(15) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `speciality` varchar(100) NOT NULL DEFAULT 'General Care'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `care_giver`
--

INSERT INTO `care_giver` (`careID`, `first_name`, `last_name`, `email`, `contactNumber`, `gender`, `speciality`) VALUES
(1111, 'Fahim', 'Ahmed', 'afahim@gmail.com', '01894749453', 'M', 'General Care');

-- --------------------------------------------------------

--
-- Table structure for table `chronic_disease`
--

CREATE TABLE `chronic_disease` (
  `diseaseID` int(3) NOT NULL,
  `diseaseName` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `symptoms` text DEFAULT NULL,
  `managementPlan` text DEFAULT NULL,
  `riskFactors` text DEFAULT NULL,
  `preventiveMeasures` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chronic_disease`
--

INSERT INTO `chronic_disease` (`diseaseID`, `diseaseName`, `description`, `symptoms`, `managementPlan`, `riskFactors`, `preventiveMeasures`) VALUES
(10, 'Diabetes', 'A condition that results from an imbalance of water in the body. ', 'Causes extreme thirst, and frequent excessive urination.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docID` int(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `yearOfExperience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docID`, `first_name`, `last_name`, `yearOfExperience`) VALUES
(101, 'Dr. Emily ', 'Johnson', 15),
(102, 'Dr. Marcus ', 'Rodriguez', 10),
(103, 'Dr. Sophia', ' Chen', 7),
(104, 'Dr. Samuel ', 'Walker', 17),
(105, 'Dr. Vanessa ', 'Carter', 9),
(106, 'Dr. James ', 'Anderson', 15),
(107, 'Dr. Malik ', 'Khan', 12),
(108, 'Dr. Christopher ', 'Wong', 5);

-- --------------------------------------------------------

--
-- Table structure for table `doctordegree`
--

CREATE TABLE `doctordegree` (
  `docID` int(6) NOT NULL,
  `degree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctordegree`
--

INSERT INTO `doctordegree` (`docID`, `degree`) VALUES
(101, 'DO (Doctor of Osteopathic Medicine)'),
(102, 'MD (Doctor of Medicine)'),
(103, 'MD (Doctor of Medicine)'),
(104, 'MD (Doctor of Medicine)'),
(105, 'MD (Doctor of Medicine)'),
(106, 'MD (Doctor of Medicine)'),
(107, ' DO (Doctor of Osteopathic Medicine)'),
(108, 'MD (Doctor of Medicine)');

-- --------------------------------------------------------

--
-- Table structure for table `doctorrefferedby`
--

CREATE TABLE `doctorrefferedby` (
  `S_docID` int(6) NOT NULL,
  `P_docID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `tradeNo` int(11) NOT NULL,
  `formula` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`tradeNo`, `formula`, `startDate`, `endDate`) VALUES
(1, 'ajhddjshjsa', '2023-12-17', '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `health_record`
--

CREATE TABLE `health_record` (
  `diseaseID` int(3) NOT NULL,
  `userID` int(8) NOT NULL,
  `docID` int(6) NOT NULL,
  `recordNo` int(11) NOT NULL,
  `oxygenSaturation` decimal(5,2) DEFAULT NULL,
  `systolic` int(11) DEFAULT NULL,
  `dystolic` int(11) DEFAULT NULL,
  `heartRate` int(11) DEFAULT NULL,
  `glucoseLevel` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `symptoms` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `userID` int(8) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `contactNo` char(15) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `emergencyContactNo` char(15) NOT NULL,
  `careID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`userID`, `first_name`, `last_name`, `email`, `password`, `dateOfBirth`, `contactNo`, `gender`, `address`, `emergencyContactNo`, `careID`) VALUES
(4, 'Tiba', '', 'ttabassum1403@gmail.com', 'asdf', '2023-12-14', '01611383770', 'm', '161 Baganbari, North Vashantek, Dhaka Cantonment, Dhaka - 1206', '01611383770', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patientcanjoin_supportgroup`
--

CREATE TABLE `patientcanjoin_supportgroup` (
  `userID` int(8) NOT NULL,
  `groupID` int(5) NOT NULL,
  `joinDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patienttake_appointment`
--

CREATE TABLE `patienttake_appointment` (
  `serialNo` int(11) NOT NULL,
  `userID` int(8) NOT NULL,
  `docID` int(6) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `purpose` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `userID` int(8) NOT NULL,
  `docID` int(6) NOT NULL,
  `tradeNo` int(11) NOT NULL,
  `medicineName` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `dosage` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`userID`, `docID`, `tradeNo`, `medicineName`, `date`, `dosage`) VALUES
(4, 101, 1, 'dhjwiuwjdj', '2023-12-22', '3');

-- --------------------------------------------------------

--
-- Table structure for table `primary_care_doctor`
--

CREATE TABLE `primary_care_doctor` (
  `P_docID` int(6) NOT NULL,
  `S_docID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialist_doctor`
--

CREATE TABLE `specialist_doctor` (
  `S_docID` int(6) NOT NULL,
  `speciality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialist_doctor`
--

INSERT INTO `specialist_doctor` (`S_docID`, `speciality`) VALUES
(101, 'Pulmonology (Chronic Respiratory Conditions)');

-- --------------------------------------------------------

--
-- Table structure for table `support_group`
--

CREATE TABLE `support_group` (
  `groupID` int(5) NOT NULL,
  `groupName` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `care_giver`
--
ALTER TABLE `care_giver`
  ADD PRIMARY KEY (`careID`);

--
-- Indexes for table `chronic_disease`
--
ALTER TABLE `chronic_disease`
  ADD PRIMARY KEY (`diseaseID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docID`);

--
-- Indexes for table `doctordegree`
--
ALTER TABLE `doctordegree`
  ADD PRIMARY KEY (`docID`);

--
-- Indexes for table `doctorrefferedby`
--
ALTER TABLE `doctorrefferedby`
  ADD PRIMARY KEY (`S_docID`,`P_docID`),
  ADD KEY `doctorrefferedby_FK2` (`P_docID`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`tradeNo`);

--
-- Indexes for table `health_record`
--
ALTER TABLE `health_record`
  ADD PRIMARY KEY (`recordNo`),
  ADD KEY `health_FK1` (`diseaseID`),
  ADD KEY `health_FK2` (`docID`),
  ADD KEY `health_FK3` (`userID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `patient_FK` (`careID`);

--
-- Indexes for table `patientcanjoin_supportgroup`
--
ALTER TABLE `patientcanjoin_supportgroup`
  ADD PRIMARY KEY (`userID`,`groupID`);

--
-- Indexes for table `patienttake_appointment`
--
ALTER TABLE `patienttake_appointment`
  ADD PRIMARY KEY (`serialNo`),
  ADD KEY `patienttake_FK1` (`userID`),
  ADD KEY `patienttake_FK2` (`docID`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`userID`,`docID`,`tradeNo`),
  ADD KEY `prescription_FK1` (`docID`);

--
-- Indexes for table `primary_care_doctor`
--
ALTER TABLE `primary_care_doctor`
  ADD PRIMARY KEY (`P_docID`),
  ADD KEY `primary_FK` (`S_docID`);

--
-- Indexes for table `specialist_doctor`
--
ALTER TABLE `specialist_doctor`
  ADD PRIMARY KEY (`S_docID`);

--
-- Indexes for table `support_group`
--
ALTER TABLE `support_group`
  ADD PRIMARY KEY (`groupID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `care_giver`
--
ALTER TABLE `care_giver`
  MODIFY `careID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `chronic_disease`
--
ALTER TABLE `chronic_disease`
  MODIFY `diseaseID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `doctordegree`
--
ALTER TABLE `doctordegree`
  MODIFY `docID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `tradeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_record`
--
ALTER TABLE `health_record`
  MODIFY `recordNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `userID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patienttake_appointment`
--
ALTER TABLE `patienttake_appointment`
  MODIFY `serialNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `primary_care_doctor`
--
ALTER TABLE `primary_care_doctor`
  MODIFY `P_docID` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_group`
--
ALTER TABLE `support_group`
  MODIFY `groupID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctorrefferedby`
--
ALTER TABLE `doctorrefferedby`
  ADD CONSTRAINT `doctorrefferedby_FK1` FOREIGN KEY (`S_docID`) REFERENCES `specialist_doctor` (`S_docID`),
  ADD CONSTRAINT `doctorrefferedby_FK2` FOREIGN KEY (`P_docID`) REFERENCES `primary_care_doctor` (`P_docID`);

--
-- Constraints for table `health_record`
--
ALTER TABLE `health_record`
  ADD CONSTRAINT `health_FK1` FOREIGN KEY (`diseaseID`) REFERENCES `chronic_disease` (`diseaseID`),
  ADD CONSTRAINT `health_FK2` FOREIGN KEY (`docID`) REFERENCES `doctor` (`docID`),
  ADD CONSTRAINT `health_FK3` FOREIGN KEY (`userID`) REFERENCES `patient` (`userID`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_FK` FOREIGN KEY (`careID`) REFERENCES `patient` (`userID`);

--
-- Constraints for table `patientcanjoin_supportgroup`
--
ALTER TABLE `patientcanjoin_supportgroup`
  ADD CONSTRAINT `patientcajoin_FK` FOREIGN KEY (`userID`) REFERENCES `patient` (`userID`);

--
-- Constraints for table `patienttake_appointment`
--
ALTER TABLE `patienttake_appointment`
  ADD CONSTRAINT `patienttake_FK1` FOREIGN KEY (`userID`) REFERENCES `patient` (`userID`),
  ADD CONSTRAINT `patienttake_FK2` FOREIGN KEY (`docID`) REFERENCES `doctor` (`docID`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_FK1` FOREIGN KEY (`docID`) REFERENCES `doctor` (`docID`),
  ADD CONSTRAINT `prescription_FK2` FOREIGN KEY (`userID`) REFERENCES `patient` (`userID`);

--
-- Constraints for table `primary_care_doctor`
--
ALTER TABLE `primary_care_doctor`
  ADD CONSTRAINT `primary_FK` FOREIGN KEY (`S_docID`) REFERENCES `specialist_doctor` (`S_docID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
