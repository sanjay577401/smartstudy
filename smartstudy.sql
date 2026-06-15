-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2026 at 06:23 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'password'),
('sanjay', '123');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notesid` int(10) NOT NULL,
  `notestitle` varchar(10) NOT NULL,
  `uplodby` varchar(10) NOT NULL,
  `uploddate` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notesid`, `notestitle`, `uplodby`, `uploddate`, `sem`, `subject`, `file`) VALUES
(4, 'EXAM PROPA', 'Admin', 2026, 2, '8', 'uploads/1769665648_Form_6_English.pdf'),
(5, 'FOC', 'Admin', 2026, 1, '26', 'uploads/1770788569_Form_6_English.pdf'),
(8, 'JAVA LAB', 'Admin', 2026, 4, '19', 'uploads/1771747319_Eligibility Criteria.pdf'),
(9, 'Engineerun', 'Admin', 2026, 1, '27', 'uploads/1775543436_clms liquor .pdf'),
(10, 'Quary Note', 'Admin', 2026, 3, '14', 'uploads/1775543619_clms liquor .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `id` int(11) NOT NULL,
  `qptitle` varchar(255) NOT NULL,
  `uploadby` varchar(100) DEFAULT NULL,
  `uploaddate` datetime DEFAULT NULL,
  `sem` int(11) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `qptitle`, `uploadby`, `uploaddate`, `sem`, `subject`, `file`) VALUES
(1, 'Test', 'Admin', '2026-02-10 06:17:35', 5, 22, 'uploads/1770700655_MITUNA.docx'),
(2, '2022 PMS ', 'Admin', '2026-02-11 06:48:40', 2, 8, 'uploads/1770788920_Eligibility Criteria.pdf'),
(3, 'PYTHON 2024 LAB', 'Admin', '2026-02-11 06:49:30', 3, 13, 'uploads/1770788970_Eligibility Criteria.pdf'),
(4, '2020 LAB OPERATING SYSTEM ', 'Admin', '2026-02-11 06:51:10', 4, 21, 'uploads/1770789070_Eligibility Criteria.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `semester` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject`, `id`, `semester`) VALUES
('English', 1, 1),
('Kannada', 2, 1),
('English', 3, 1),
('FOC', 4, 1),
('IT SKILLS', 5, 1),
('FEEE', 6, 1),
('PMS', 8, 2),
('COMMUNICATION SKILLS', 9, 2),
('KANNADA', 10, 2),
('SA', 11, 2),
('MULTI MEDIA', 12, 2),
('PYTHON', 13, 3),
('DBMS', 14, 3),
('COMPUTER NETWORK', 15, 3),
('KANNADA PART 2', 16, 3),
('HARDWARE LAB', 17, 4),
('SOFTWARE ENG', 18, 4),
('JAVA', 19, 4),
('PYTHON DATA STRUCTUR', 20, 4),
('OPERATING SYSTEM', 21, 4),
('FULL STACK DEV', 22, 5),
('AI ML', 23, 5),
('CYBER SCURITY', 24, 5),
('IT SKILLS', 26, 1),
('IT SKILLS', 28, 1),
('FOC', 30, 1),
('FULL STACK DEV', 31, 6),
('AI ML', 32, 6),
('CYBER SCURITY', 33, 6),
('ENGINEERING MATHEMAT', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `phno` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `collage` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`phno`, `name`, `password`, `collage`, `address`, `email`) VALUES
(321, 'sanjay', '123', 'smp', 'SAGARA', 'blackcobrablacki@gma'),
(345, 'MANOJAKUMAR H n', '321', 'smp', 'sagara', 'blackcobrablacki@gma');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `sino` int(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`sino`, `subject`, `sem`, `course`) VALUES
(1, 'math', '1', 'cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notesid`);

--
-- Indexes for table `question_paper`
--
ALTER TABLE `question_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notesid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `question_paper`
--
ALTER TABLE `question_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
