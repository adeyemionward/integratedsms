-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 05:42 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `integratedsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_duration` text NOT NULL,
  `lecturer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_name`, `email`, `password`, `date_created`) VALUES
(1, 'adeyemi adeshina', 'adeyemiadeshina6@gmail.com', 'as', '2020-07-17 16:34:44'),
(3, 'adeyemi adeshina', 'adeyemiadeshina6@gmail.com', 'baa7a52965b99778f38ef37f235e9053', '2020-07-17 16:39:31'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-07-17 17:33:36'),
(6, 'adeyemi adeshivcna', 'adeyemiadeshhhina6@gmail.com', 'a145666710fd1093c1b53f610d707491', '2020-07-17 19:19:23'),
(7, 'adeyemi adeshbina', 'adeyemiadheshina6@gmail.com', 'a25c44ea22be0f1d931c3d78f166d020', '2020-07-17 19:22:37'),
(8, 'adeyemi aerrdeshina', 'adeyemiadertfshina6@gmail.com', '062f42e7f8381645dade98ae9afd5b4d', '2020-07-17 19:27:21'),
(9, 'adeyemi adeshinannn', 'adeyemiadeytgshina6@gmail.com', 'd61170fb5179a99816eca2c9dc6a95a0', '2020-07-17 19:28:05'),
(10, 'adeyemi adeshinabb', 'adeyemiadeshinam6@gmail.com', 'a1931ec126bbad3fa7a3fc64209fd921', '2020-07-17 19:29:27'),
(11, 'adeyemi adeshinauyuh', 'adeyemiadeshinaygh6@gmail.com', '294c57dd1c7561120d7d7dc90ac39749', '2020-07-17 19:46:59'),
(12, 'adeyemi aytyjdeshina', 'adeyemiadertshina6@gmail.com', 'a33481085560bc09e2e95fb419719082', '2020-07-17 19:49:12'),
(13, 'adeyemi adeshinauhj', 'adeyemiuuadeshina6@gmail.com', '7b774effe4a349c6dd82ad4f4f21d34c', '2020-07-17 19:49:46'),
(14, 'adeyemi adeshina7y76', 'adeyemi65rtyadeshina6@gmail.com', '04ee2278917d3848becab9337dcc1a1c', '2020-07-17 19:50:30'),
(15, 'adeyemi adeytyhshina', 'adeyemiadeshytghina6@gmail.com', '8261e481335b647a38dc3bd4f9511600', '2020-07-17 19:50:57'),
(16, 'adeyemi adeshinauyuhj', 'adeyemiadeshiyutyna6@gmail.com', 'bf2cc4eed2fcdf40420431982726f05a', '2020-07-17 19:52:37'),
(17, 'adeyemi adeshinayuhj', 'adeyemiadjyghjeshina6@gmail.com', '810db8842da8cf65c5d50c8e340f1328', '2020-07-17 19:54:12'),
(18, 'adeyemi adeshytyghinabb', 'adeyemiadeshinahytg6@gmail.com', '7c8303b37af5ff0e13bd22f6f9406482', '2020-07-17 19:54:54'),
(19, 'adeyemi adeshinaytygh', 'adeyemiytgyhjadeshina6@gmail.com', 'e41ccd64608fc3205cdb61c918a781a5', '2020-07-17 19:55:32'),
(20, 'adeyemi adejyghshina', 'adeyehghbmiadeshina6@gmail.com', '8c2291b51e82ea10c69ca00737ced8ab', '2020-07-17 19:56:51'),
(21, 'Trinity school', 'trinity@gmail.com', 'e219b56989281a7846dd836161d7a2bd', '2020-07-17 19:57:59'),
(22, 'ggg', 'adeyemiavvdeshina6@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', '2020-07-18 02:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `student_name` text NOT NULL,
  `reg_no` text NOT NULL,
  `admission_date` text NOT NULL,
  `course` text NOT NULL,
  `session` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `school_name`, `student_name`, `reg_no`, `admission_date`, `course`, `session`) VALUES
(1, 'Trinity school', 'n', 'agy/12/8952', '2020-07-29', 'SAH', 'd'),
(2, '<br />\r\n<b>Notice</b>:  Undefined index: school_name in <b>C:xamppNEWhtdocssmsadmin-dashboard\register-students.php</b> on line <b>81</b><br />\r\n', 'Adeyemi', 'agy/12/8952', '2020-07-29', 'SAHza', '2020'),
(3, 'Trinity school', 'Adeyemi', 'agy/12/8952', '2020-07-29', 'SAHza', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
