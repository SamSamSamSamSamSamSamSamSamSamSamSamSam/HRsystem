-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 09:04 AM
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
-- Database: `webdev_hrsys_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `appID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bDate` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`appID`, `name`, `email`, `bDate`, `nationality`, `gender`, `address`) VALUES
(1, 'Joan Doe', 'doe123@gmail.com', '2002-08-02', 'German', 'Female', 'Cebu, Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `application_progress`
--

CREATE TABLE `application_progress` (
  `progID` int(11) NOT NULL,
  `prog_appID` int(11) DEFAULT NULL,
  `prog_ivwID` int(11) DEFAULT NULL,
  `resumeScr` varchar(20) NOT NULL DEFAULT 'PENDING',
  `phoneScr` varchar(20) NOT NULL DEFAULT 'PENDING',
  `refCheck` varchar(20) NOT NULL DEFAULT 'PENDING',
  `shortListed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_progress`
--

INSERT INTO `application_progress` (`progID`, `prog_appID`, `prog_ivwID`, `resumeScr`, `phoneScr`, `refCheck`, `shortListed`) VALUES
(1, 1, 1, 'PENDING', 'PENDING', 'PENDING', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `attID` int(11) NOT NULL,
  `att_eID` int(11) DEFAULT NULL,
  `presDays` int(255) NOT NULL,
  `absDays` int(255) NOT NULL,
  `numLates` int(255) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`attID`, `att_eID`, `presDays`, `absDays`, `numLates`, `remarks`) VALUES
(1, 1, 10, 3, 1, 'Absent - 3 days, reason: private matter'),
(2, 2, 13, 0, 0, 'Perfect attendance so far'),
(3, 3, 13, 0, 1, 'Late - 1 time, reason: traffic');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_plans`
--

CREATE TABLE `benefit_plans` (
  `benID` int(11) NOT NULL,
  `planName` varchar(255) NOT NULL,
  `planType` varchar(255) NOT NULL,
  `coverage` int(255) NOT NULL,
  `deductible` int(255) NOT NULL,
  `premium` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benefit_plans`
--

INSERT INTO `benefit_plans` (`benID`, `planName`, `planType`, `coverage`, `deductible`, `premium`) VALUES
(1, 'Yearly Health Dental Insurance', 'Health', 60, 2500, 0),
(2, 'Yearly Paid Vacation', 'PTO', 70, 4500, 1),
(3, 'Retirement Funds', 'Retirement', 90, 5000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `compensations_benefits`
--

CREATE TABLE `compensations_benefits` (
  `cbID` int(11) NOT NULL,
  `cb_eID` int(11) DEFAULT NULL,
  `cb_benID` int(11) DEFAULT NULL,
  `wageRph` int(255) NOT NULL,
  `rgwHrs` int(255) NOT NULL,
  `otwHrs` int(255) NOT NULL,
  `deductions` int(255) NOT NULL,
  `payMethod` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compensations_benefits`
--

INSERT INTO `compensations_benefits` (`cbID`, `cb_eID`, `cb_benID`, `wageRph`, `rgwHrs`, `otwHrs`, `deductions`, `payMethod`) VALUES
(1, 1, 2, 500, 80, 5, 2500, 'Cash'),
(2, 2, 1, 700, 104, 13, 2500, 'Direct Deposit'),
(3, 3, 1, 490, 104, 8, 2500, 'Paycheck');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `depID` int(11) NOT NULL,
  `depName` varchar(255) NOT NULL,
  `depLdr_eID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`depID`, `depName`, `depLdr_eID`) VALUES
(1, 'Software Development', 2),
(2, 'Network Operations', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `eID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bDate` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eID`, `name`, `email`, `bDate`, `nationality`, `gender`, `address`) VALUES
(1, 'Sam Pacaldo', 'pacaldo@gmail.com', '2001-06-15', 'Filipino', 'Male', 'Cebu, Philippines'),
(2, 'Japeth Guzon', 'guzon@gmail.com', '2002-03-07', 'British', 'Male', 'Cebu, Philippines'),
(3, 'Kyle Llaguno', 'llaguno@gmail.com', '2000-10-26', 'Canadian', 'Male', 'Cebu, Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `employment_details`
--

CREATE TABLE `employment_details` (
  `edID` int(11) NOT NULL,
  `ed_eID` int(11) DEFAULT NULL,
  `ed_jobID` int(11) DEFAULT NULL,
  `ed_shfID` int(11) DEFAULT NULL,
  `contract` varchar(255) NOT NULL,
  `hDate` date NOT NULL,
  `jobSts` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employment_details`
--

INSERT INTO `employment_details` (`edID`, `ed_eID`, `ed_jobID`, `ed_shfID`, `contract`, `hDate`, `jobSts`) VALUES
(1, 1, 2, 1, 'Part-Time', '2021-05-21', 'ACTIVE'),
(2, 2, 1, 2, 'Full-Time', '2021-05-21', 'ACTIVE'),
(3, 3, 3, 3, 'Full-Time', '2021-05-21', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `fbID` int(11) NOT NULL,
  `fb_eID` int(11) DEFAULT NULL,
  `permFb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `fileID` int(11) NOT NULL,
  `filedata` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`fileID`, `filedata`) VALUES
(2, 0x53454c45435420515545524945532e747874),
(3, 0x53454c45435420515545524945532e747874);

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `goalID` int(11) NOT NULL,
  `goal_eID` int(11) DEFAULT NULL,
  `goals` text NOT NULL,
  `progress` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grief_plans`
--

CREATE TABLE `grief_plans` (
  `grvID` int(11) NOT NULL,
  `grv_eID` int(11) DEFAULT NULL,
  `docs_fileID` int(11) DEFAULT NULL,
  `assTo_eID` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `grvDT` datetime NOT NULL,
  `grvDesc` text NOT NULL,
  `grvSts` varchar(20) NOT NULL DEFAULT 'PENDING',
  `uplDate` date NOT NULL DEFAULT curdate(),
  `invDesc` text NOT NULL,
  `actDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grief_plans`
--

INSERT INTO `grief_plans` (`grvID`, `grv_eID`, `docs_fileID`, `assTo_eID`, `name`, `grvDT`, `grvDesc`, `grvSts`, `uplDate`, `invDesc`, `actDesc`) VALUES
(3, 1, 2, 2, 'Sam Pacaldo', '2023-05-24 02:55:00', 'Overnight in completing project', 'PENDING', '2023-05-24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `improvements`
--

CREATE TABLE `improvements` (
  `impID` int(11) NOT NULL,
  `imp_eID` int(11) DEFAULT NULL,
  `goals` text NOT NULL,
  `progress` text NOT NULL,
  `docs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interview_scheds`
--

CREATE TABLE `interview_scheds` (
  `ivwID` int(11) NOT NULL,
  `ivw_appID` int(11) DEFAULT NULL,
  `ivwPanel_eID` int(11) DEFAULT NULL,
  `ivwDate` date NOT NULL,
  `ivwTime` time NOT NULL,
  `ivwLoc` varchar(255) NOT NULL,
  `ivwSts` varchar(20) NOT NULL DEFAULT 'SCHEDULED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interview_scheds`
--

INSERT INTO `interview_scheds` (`ivwID`, `ivw_appID`, `ivwPanel_eID`, `ivwDate`, `ivwTime`, `ivwLoc`, `ivwSts`) VALUES
(1, 1, 2, '2023-05-30', '10:00:00', 'Software Development Office', 'SCHEDULED'),
(2, 1, NULL, '2023-05-31', '16:30:00', 'HR Management Office', 'SCHEDULED');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `depID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `jobTitle`, `depID`) VALUES
(1, 'Front-End Developer', 1),
(2, 'Back-End Developer', 1),
(3, 'Network Administrator', 2),
(4, 'Network Performance Analyst', 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `jpID` int(11) NOT NULL,
  `jp_jobID` int(11) DEFAULT NULL,
  `jobDesc` text NOT NULL,
  `qualDesc` text NOT NULL,
  `expReq` text NOT NULL,
  `salRange` text NOT NULL,
  `otherDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`jpID`, `jp_jobID`, `jobDesc`, `qualDesc`, `expReq`, `salRange`, `otherDesc`) VALUES
(1, 4, 'Monitors and analyzes network performance data to identify areas for improvement.', 'Bachelors Degree In Computer Science', '2+ Years', 'P70,000.00 - P90,000.00', 'Skill: Proficient in Networking\r\n<br>Job Details: Works on optimizing network performance, troubleshooting bottlenecks, and implementing performance-enhancing solutions.'),
(2, 1, 'Wanted new front end dev', 'college grad BSCS', 'no specific requirement', '30,000 - 50,000', 'master in c language');

-- --------------------------------------------------------

--
-- Table structure for table `leave_plans`
--

CREATE TABLE `leave_plans` (
  `lveID` int(11) NOT NULL,
  `lve_eID` int(11) DEFAULT NULL,
  `mgr_eID` int(11) DEFAULT NULL,
  `mgrSign_fileID` int(11) DEFAULT NULL,
  `avlLve` int(255) NOT NULL,
  `lveType` varchar(255) NOT NULL,
  `numdLve` int(255) NOT NULL,
  `staDate` date NOT NULL,
  `endDate` date NOT NULL,
  `decisionDate` date NOT NULL,
  `decisionSts` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_plans`
--

INSERT INTO `leave_plans` (`lveID`, `lve_eID`, `mgr_eID`, `mgrSign_fileID`, `avlLve`, `lveType`, `numdLve`, `staDate`, `endDate`, `decisionDate`, `decisionSts`) VALUES
(1, 1, 2, NULL, 10, 'Unpaid Leave', 5, '2023-05-25', '2023-05-30', '0000-00-00', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `revID` int(11) NOT NULL,
  `rev_eID` int(11) DEFAULT NULL,
  `period` text NOT NULL,
  `reviewer` text NOT NULL,
  `progress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `shfID` int(11) NOT NULL,
  `shfName` varchar(255) NOT NULL,
  `staTime` time NOT NULL,
  `endTime` time NOT NULL,
  `dotw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`shfID`, `shfName`, `staTime`, `endTime`, `dotw`) VALUES
(1, 'Regular Day Shift', '09:00:00', '17:00:00', 'Monday to Friday'),
(2, 'Evening Shift', '14:00:00', '22:00:00', 'Monday to Friday'),
(3, 'Night Shift', '22:00:00', '06:00:00', 'Sunday to Thursday'),
(4, 'Part-Time Night Shift', '23:00:00', '07:00:00', 'Only on Weekends');

-- --------------------------------------------------------

--
-- Table structure for table `shift_requests`
--

CREATE TABLE `shift_requests` (
  `srID` int(11) NOT NULL,
  `sr_eID` int(11) DEFAULT NULL,
  `curr_shfID` int(11) DEFAULT NULL,
  `req_shfID` int(11) DEFAULT NULL,
  `reqSts` varchar(20) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shift_requests`
--

INSERT INTO `shift_requests` (`srID`, `sr_eID`, `curr_shfID`, `req_shfID`, `reqSts`) VALUES
(2, 1, 1, 2, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `uaID` int(11) NOT NULL,
  `user_eID` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`uaID`, `user_eID`, `username`, `email`, `pwd`) VALUES
(1, 1, 'sam1', 'pacaldo@gmail.com', 'kylogwapo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `application_progress`
--
ALTER TABLE `application_progress`
  ADD PRIMARY KEY (`progID`),
  ADD KEY `prog_appID` (`prog_appID`),
  ADD KEY `prog_ivwID` (`prog_ivwID`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`attID`),
  ADD KEY `att_eID` (`att_eID`);

--
-- Indexes for table `benefit_plans`
--
ALTER TABLE `benefit_plans`
  ADD PRIMARY KEY (`benID`);

--
-- Indexes for table `compensations_benefits`
--
ALTER TABLE `compensations_benefits`
  ADD PRIMARY KEY (`cbID`),
  ADD KEY `cb_benID` (`cb_benID`),
  ADD KEY `cb_eID` (`cb_eID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`depID`),
  ADD KEY `depLdr_eID` (`depLdr_eID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`eID`);

--
-- Indexes for table `employment_details`
--
ALTER TABLE `employment_details`
  ADD PRIMARY KEY (`edID`),
  ADD KEY `ed_eID` (`ed_eID`),
  ADD KEY `ed_jobID` (`ed_jobID`),
  ADD KEY `ed_shfID` (`ed_shfID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`fbID`),
  ADD KEY `fb_eID` (`fb_eID`);

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goalID`),
  ADD KEY `goal_eID` (`goal_eID`);

--
-- Indexes for table `grief_plans`
--
ALTER TABLE `grief_plans`
  ADD PRIMARY KEY (`grvID`),
  ADD KEY `docs_fileID` (`docs_fileID`),
  ADD KEY `grv_eID` (`grv_eID`),
  ADD KEY `assTo_eID` (`assTo_eID`);

--
-- Indexes for table `improvements`
--
ALTER TABLE `improvements`
  ADD PRIMARY KEY (`impID`),
  ADD KEY `imp_eID` (`imp_eID`);

--
-- Indexes for table `interview_scheds`
--
ALTER TABLE `interview_scheds`
  ADD PRIMARY KEY (`ivwID`),
  ADD KEY `ivw_appID` (`ivw_appID`),
  ADD KEY `ivwPanel_eID` (`ivwPanel_eID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`),
  ADD KEY `depID` (`depID`);

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD PRIMARY KEY (`jpID`),
  ADD KEY `jp_jobID` (`jp_jobID`);

--
-- Indexes for table `leave_plans`
--
ALTER TABLE `leave_plans`
  ADD PRIMARY KEY (`lveID`),
  ADD KEY `mgrSign_fileID` (`mgrSign_fileID`),
  ADD KEY `lve_eID` (`lve_eID`),
  ADD KEY `mgr_eID` (`mgr_eID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`revID`),
  ADD KEY `rev_eID` (`rev_eID`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shfID`);

--
-- Indexes for table `shift_requests`
--
ALTER TABLE `shift_requests`
  ADD PRIMARY KEY (`srID`),
  ADD KEY `curr_shfID` (`curr_shfID`),
  ADD KEY `sr_eID` (`sr_eID`),
  ADD KEY `req_shfID` (`req_shfID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`uaID`),
  ADD KEY `user_eID` (`user_eID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_progress`
--
ALTER TABLE `application_progress`
  MODIFY `progID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `attID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `benefit_plans`
--
ALTER TABLE `benefit_plans`
  MODIFY `benID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `compensations_benefits`
--
ALTER TABLE `compensations_benefits`
  MODIFY `cbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `depID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `eID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employment_details`
--
ALTER TABLE `employment_details`
  MODIFY `edID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `fbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `fileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `goalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grief_plans`
--
ALTER TABLE `grief_plans`
  MODIFY `grvID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `improvements`
--
ALTER TABLE `improvements`
  MODIFY `impID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interview_scheds`
--
ALTER TABLE `interview_scheds`
  MODIFY `ivwID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_postings`
--
ALTER TABLE `job_postings`
  MODIFY `jpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_plans`
--
ALTER TABLE `leave_plans`
  MODIFY `lveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `revID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shfID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shift_requests`
--
ALTER TABLE `shift_requests`
  MODIFY `srID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `uaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_progress`
--
ALTER TABLE `application_progress`
  ADD CONSTRAINT `application_progress_ibfk_1` FOREIGN KEY (`prog_appID`) REFERENCES `applicants` (`appID`) ON DELETE SET NULL,
  ADD CONSTRAINT `application_progress_ibfk_2` FOREIGN KEY (`prog_ivwID`) REFERENCES `interview_scheds` (`ivwID`) ON DELETE SET NULL;

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_ibfk_1` FOREIGN KEY (`att_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `compensations_benefits`
--
ALTER TABLE `compensations_benefits`
  ADD CONSTRAINT `compensations_benefits_ibfk_1` FOREIGN KEY (`cb_benID`) REFERENCES `benefit_plans` (`benID`) ON DELETE SET NULL,
  ADD CONSTRAINT `compensations_benefits_ibfk_2` FOREIGN KEY (`cb_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`depLdr_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `employment_details`
--
ALTER TABLE `employment_details`
  ADD CONSTRAINT `employment_details_ibfk_1` FOREIGN KEY (`ed_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL,
  ADD CONSTRAINT `employment_details_ibfk_2` FOREIGN KEY (`ed_jobID`) REFERENCES `jobs` (`jobID`) ON DELETE SET NULL,
  ADD CONSTRAINT `employment_details_ibfk_3` FOREIGN KEY (`ed_shfID`) REFERENCES `shifts` (`shfID`) ON DELETE SET NULL;

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`fb_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_ibfk_1` FOREIGN KEY (`goal_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `grief_plans`
--
ALTER TABLE `grief_plans`
  ADD CONSTRAINT `grief_plans_ibfk_1` FOREIGN KEY (`docs_fileID`) REFERENCES `file_uploads` (`fileID`) ON DELETE SET NULL,
  ADD CONSTRAINT `grief_plans_ibfk_2` FOREIGN KEY (`grv_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL,
  ADD CONSTRAINT `grief_plans_ibfk_3` FOREIGN KEY (`assTo_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `improvements`
--
ALTER TABLE `improvements`
  ADD CONSTRAINT `improvements_ibfk_1` FOREIGN KEY (`imp_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `interview_scheds`
--
ALTER TABLE `interview_scheds`
  ADD CONSTRAINT `interview_scheds_ibfk_1` FOREIGN KEY (`ivw_appID`) REFERENCES `applicants` (`appID`) ON DELETE SET NULL,
  ADD CONSTRAINT `interview_scheds_ibfk_2` FOREIGN KEY (`ivwPanel_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`depID`) REFERENCES `departments` (`depID`) ON DELETE SET NULL;

--
-- Constraints for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD CONSTRAINT `job_postings_ibfk_1` FOREIGN KEY (`jp_jobID`) REFERENCES `jobs` (`jobID`) ON DELETE SET NULL;

--
-- Constraints for table `leave_plans`
--
ALTER TABLE `leave_plans`
  ADD CONSTRAINT `leave_plans_ibfk_1` FOREIGN KEY (`mgrSign_fileID`) REFERENCES `file_uploads` (`fileID`) ON DELETE SET NULL,
  ADD CONSTRAINT `leave_plans_ibfk_2` FOREIGN KEY (`lve_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL,
  ADD CONSTRAINT `leave_plans_ibfk_3` FOREIGN KEY (`mgr_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`rev_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;

--
-- Constraints for table `shift_requests`
--
ALTER TABLE `shift_requests`
  ADD CONSTRAINT `shift_requests_ibfk_1` FOREIGN KEY (`curr_shfID`) REFERENCES `shifts` (`shfID`) ON DELETE SET NULL,
  ADD CONSTRAINT `shift_requests_ibfk_2` FOREIGN KEY (`sr_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL,
  ADD CONSTRAINT `shift_requests_ibfk_3` FOREIGN KEY (`req_shfID`) REFERENCES `shifts` (`shfID`) ON DELETE SET NULL;

--
-- Constraints for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD CONSTRAINT `user_accounts_ibfk_1` FOREIGN KEY (`user_eID`) REFERENCES `employees` (`eID`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
