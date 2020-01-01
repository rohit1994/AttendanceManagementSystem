-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 04:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendencemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(10) NOT NULL,
  `division` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `an` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `date`, `course`, `division`, `name`, `fn`, `an`, `status`, `subject_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '2020-01-01', '', '', '', '', '', '', 0, '2020-01-01 14:24:21', 0, '', 0),
(2, '2020-01-01', 'ed', 'a', 'kichu', 'present', 'present', '', 0, '2020-01-01 14:24:30', 0, '', 0),
(3, '2020-01-02', '', '', '', '', '', '', 0, '2020-01-01 14:41:17', 0, '', 0),
(4, '2020-01-02', 'jsd', 'a', 'riya', 'present', '', '', 0, '2020-01-01 14:41:29', 0, '', 0),
(5, '0000-00-00', '', '', '', '', '', '', 0, '2020-01-01 14:48:11', 0, '', 0),
(6, '2020-01-01', '', '', '', '', '', '', 0, '2020-01-01 14:55:46', 0, '', 0),
(7, '2020-01-01', '', '', '', '', '', '', 0, '2020-01-01 14:58:23', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `course_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `name`, `start_date`, `end_date`, `course_id`, `division_id`, `teacher_id`) VALUES
(1, 'varu', '2019-12-03', '2019-12-12', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `student_id`, `batch_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `duration`) VALUES
(1, 'JSD', '3 month');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_report`
--

CREATE TABLE `leave_report` (
  `date` date NOT NULL,
  `stud_name` varchar(20) NOT NULL,
  `teacher` varchar(25) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `content` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_report`
--

INSERT INTO `leave_report` (`date`, `stud_name`, `teacher`, `subject`, `content`) VALUES
('2019-12-12', 'riya', 'jibi', 'leave', 'aesdxfcgbhjnmk vcfxd');

-- --------------------------------------------------------

--
-- Table structure for table `student_parent`
--

CREATE TABLE `student_parent` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `relation_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(25) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `sub_name`, `course_id`) VALUES
(1, '', 0),
(2, 'english', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `doc` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(20) NOT NULL,
  `is_ative` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `email`, `mobile`, `gender`, `address`, `course`, `division`, `doj`, `doc`, `qualification`, `username`, `password`, `type`, `created_at`, `created_by`, `updated_at`, `updated_by`, `is_ative`) VALUES
(1, 'admin', '0000-00-00', '', '', 'female', '', '', '', '0000-00-00', '0000-00-00', '', '', 'admin', '0', '2019-12-18 12:19:45', '', '2019-12-18 12:19:45', '', 0),
(2, 'jibi', '1996-11-14', 'jibijohnson96@gmail.com', '7561840023', 'female', 'abc', '', '', '2019-12-13', '0000-00-00', 'dp', 'jibijohnson', '123456', 'teach', '2019-12-20 09:24:48', '', '2019-12-20 09:24:48', '', 0),
(3, '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 'admin', 'admin', 'admin', '2019-12-20 10:38:20', '', '2019-12-20 10:38:20', '', 0),
(4, 'Amritha', '2019-12-12', 'jibijohnn96@gmail.com', '9745965590', 'female', 'r4vrtgvt5gb5tgt6v', '', '', '2019-12-20', '2020-01-05', '', 'amritha', '1q2w3e', '', '2019-12-28 08:53:06', '', '2019-12-28 08:53:06', '', 0),
(5, 'gana', '2019-09-02', 'gana123@gmail.com', '9923456712', 'female', 'dfgh', '', '', '2019-10-04', '0000-00-00', 'dp', 'gana', 'asdfgh', '', '2019-12-28 09:06:21', '', '2019-12-28 09:06:21', '', 0),
(6, 'riya', '2019-12-06', 'riya123@gmail.com', '974596545', 'female', 'sdfgh', 'jsd', 'a', '2019-11-15', '2019-12-15', '', 'riya', '123456', 'stu', '2019-12-28 09:25:31', '', '2019-12-28 09:25:31', '', 0),
(8, 'manu', '2019-12-15', 'manus96@gmail.com', '9745968565', 'male', 'asdfghj', '', '', '2019-12-08', '0000-00-00', 'dp', 'manus', '123654', 'teach', '2019-12-28 10:20:46', '', '2019-12-28 10:20:46', '', 0),
(9, 'bony baby', '2019-12-15', 'bony@gmail.com', '9745965571', 'male', 'asdfgh', '', '', '2019-12-12', '0000-00-00', 'B.tech', 'bony', '123456', 'teach', '2019-12-28 10:59:20', '', '2019-12-28 10:59:20', '', 0),
(10, 'jitty', '2019-12-18', 'jitty123@gmail.com', '8547512298', 'female', 'kjhgf', 'jsd', 'a', '2019-12-19', '2020-02-16', '', 'jitty', '987654', 'stu', '2019-12-28 11:42:41', '', '2019-12-28 11:42:41', '', 0),
(11, 'kripa m', '1997-07-11', 'kripa123@gmail.com', '8745962514', 'female', 'fghjk', 'ui', 'a', '2019-12-20', '2019-12-15', '', 'kri', '123456', 'stu', '2019-12-28 11:54:29', '', '2019-12-28 11:54:29', '', 0),
(14, 'jithu', '0000-00-00', 'jithu123@gmail.com', '8965321478', '', 'sadfghjk', '', '', '0000-00-00', '0000-00-00', '', 'jiyhu', '123456', 'parent', '2019-12-28 12:30:35', '', '2019-12-28 12:30:35', '', 0),
(16, 'suryanarayan', '2019-12-14', 'surya@gmail.com', '4287459612', 'male', 'asdfghj', '', '', '2019-12-28', '0000-00-00', 'MCA', 'surya', '123456', 'teach', '2019-12-29 03:49:11', '', '2019-12-29 03:49:11', '', 0),
(19, 'amritha', '1996-03-01', 'aritha@gmail.com', '98456694712', 'female', 'mnbvc', '', '', '2019-12-29', '0000-00-00', 'B.tech', 'ammu', '123456', 'teach', '2019-12-30 08:24:16', '', '2019-12-30 08:24:16', '', 0),
(20, 'kichu', '2019-12-21', 'kichu@gmail.com', '9745965547', 'male', 'vbnm', 'ed', 'a', '2019-12-29', '2019-12-15', '', 'kichus', '987456', 'stu', '2019-12-30 08:26:08', '', '2019-12-30 08:26:08', '', 0),
(21, 'madhavan', '0000-00-00', 'madavan@gmail.com', '97459658745', '', 'vbn', '', '', '0000-00-00', '0000-00-00', '', 'madhu', '654789', 'parent', '2019-12-30 08:27:11', '', '2019-12-30 08:27:11', '', 0),
(22, 'gopi', '0000-00-00', 'gopi123@gmail.com', '97123695878', '', 'mnbvfghj', '', '', '0000-00-00', '0000-00-00', '', 'gopu', '123456', 'parent', '2019-12-30 09:17:19', '', '2019-12-30 09:17:19', '', 0),
(23, 'ganga', '0000-00-00', 'ganga@gmail.com', '97423658596', '', 'nbvcdfgh', '', '', '0000-00-00', '0000-00-00', '', 'gangas', '695847', 'parent', '2019-12-30 09:18:53', '', '2019-12-30 09:18:53', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `student_parent`
--
ALTER TABLE `student_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_parent`
--
ALTER TABLE `student_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
