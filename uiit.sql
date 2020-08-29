-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 07:43 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `registration_number` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`registration_number`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `stream` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `last_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`stream`, `batch`, `subject`, `file_url`, `last_date`) VALUES
('CSE', 'first', 'subject1', 'assignment/74a564781bf38f42f6d60ae0c8e2d63a1.jpg', '2017-08-15'),
('IT', 'first', 'subject5', 'assignment/f30402d250ee0d24b57be8e69299e1f9Jellyfish.jpg', '2017-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `attend_student`
--

CREATE TABLE IF NOT EXISTS `attend_student` (
  `studentid` int(11) NOT NULL,
  `batch` char(20) NOT NULL,
  `branch` char(20) NOT NULL,
  `year` int(11) NOT NULL,
  `month` char(20) NOT NULL,
  `d01` char(10) NOT NULL,
  `d02` char(10) NOT NULL,
  `d03` char(10) NOT NULL,
  `d04` char(10) NOT NULL,
  `d05` char(10) NOT NULL,
  `d06` char(10) NOT NULL,
  `d07` char(10) NOT NULL,
  `d08` char(10) NOT NULL,
  `d09` char(10) NOT NULL,
  `d10` char(10) NOT NULL,
  `d11` char(10) NOT NULL,
  `d12` char(10) NOT NULL,
  `d13` char(10) NOT NULL,
  `d14` char(10) NOT NULL,
  `d15` char(10) NOT NULL,
  `d16` char(10) NOT NULL,
  `d17` char(10) NOT NULL,
  `d18` char(10) NOT NULL,
  `d19` char(10) NOT NULL,
  `d20` char(10) NOT NULL,
  `d21` char(10) NOT NULL,
  `d22` char(10) NOT NULL,
  `d23` char(10) NOT NULL,
  `d24` char(10) NOT NULL,
  `d25` char(10) NOT NULL,
  `d26` char(10) NOT NULL,
  `d27` char(10) NOT NULL,
  `d28` char(10) NOT NULL,
  `d29` char(10) NOT NULL,
  `d30` char(10) NOT NULL,
  `d31` char(10) NOT NULL,
  `subjectcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `image_id` int(11) NOT NULL,
  `event_name` char(50) NOT NULL,
  `event_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`image_id`, `event_name`, `event_img`) VALUES
(335, 'uttkarsh', 'images/335.jpg'),
(336, 'freshers', ''),
(337, 'freshers', 'images/337.jpg'),
(339, 'uttkarsh', 'images/339.jpg'),
(340, 'uttkarsh', 'images/340.jpg'),
(341, 'uttkarsh', 'images/341.jpg'),
(342, 'ricsit', 'images/342.jpg'),
(343, 'ricsit', 'images/343.jpg'),
(344, 'ricsit', 'images/344.jpg'),
(345, 'freshers', 'images/345.jpg'),
(346, 'freshers', 'images/346.jpg'),
(347, 'annual_dinner', 'images/347.jpg'),
(348, 'annual_dinner', 'images/348.jpg'),
(349, 'uttkarsh', ''),
(350, 'uttkarsh', ''),
(354, 'freshers', 'images/354.jpg'),
(355, 'uttkarsh', 'images/355.jpg'),
(356, 'uttkarsh', 'images/356.jpg'),
(357, 'freshers', 'images/357.jpg'),
(358, 'ricsit', 'images/358.jpg'),
(359, 'annual_dinner', 'images/359.jpg'),
(360, 'freshers', 'images/360.jpg'),
(361, 'uttkarsh', 'images/361.JPG'),
(362, 'freshers', 'images/362.JPG'),
(363, 'ricsit', 'images/363.JPG'),
(364, 'annual_dinner', 'images/364.JPG'),
(365, 'ricsit', 'images/365.JPG'),
(366, 'ricsit', 'images/366.JPG'),
(367, 'ricsit', 'images/367.JPG'),
(368, 'annual_dinner', 'images/368.JPG'),
(369, 'fghhhjkd', 'images/369.jpg'),
(370, 'fghhhjkd', 'images/370.jpg'),
(371, 'uttkarsh', 'images/371.jpg'),
(372, 'freshers', 'images/372.jpg'),
(373, 'uttkarsh', 'images/373.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`) VALUES
(9, 'uttkarsh'),
(10, 'freshers'),
(11, 'ricsit'),
(12, 'annual_dinner'),
(13, 'fghhhjkd'),
(14, 'hire'),
(15, 'helloyuh'),
(16, 'helloyuh'),
(17, 'hi'),
(18, 'sksharma'),
(19, 'sksharma');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `image_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`image_id`, `subject`, `img`) VALUES
(17, 'hellocheck', 'images/17.jpg'),
(18, 'hifyhvsdnk', 'images/18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `stream` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file_url` varchar(250) NOT NULL,
  `last_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`stream`, `batch`, `subject`, `file_url`, `last_date`) VALUES
('CSE', 'first', 'subject1', 'project/8e200fc779d0a8e7eaba42e877f0a5c0Tulips.jpg', '2017-08-15');

-- --------------------------------------------------------

--
-- Table structure for table `project_upload`
--

CREATE TABLE IF NOT EXISTS `project_upload` (
  `registration_number` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_upload`
--

INSERT INTO `project_upload` (`registration_number`, `firstname`, `stream`, `batch`, `subject`, `file_url`) VALUES
(14, 'sudershan', 'CSE', 'first', 'subject1', 'student_project/b14573b9273c38ba0f89bb63abc87973Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, 'shikha', 'thakurshikha636@gmail.com', 'hello', 'hello spic.'),
(8, 'abc', 'abc@gmail.com', '', 'hello spic.....'),
(9, 'harry', 'abc@gmail.com', '', 'hello world\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `name` varchar(20) DEFAULT NULL,
  `clearence` varchar(11) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `stream` varchar(10) DEFAULT NULL,
  `registration_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `clearence`, `year`, `stream`, `registration_id`) VALUES
('sudarshan', 'allowed', 'first', 'CSE', '1'),
('sourabh', 'allowed', 'first', 'IT', '3'),
('nikhil   sharma', 'allowed', 'first', 'CSE', '13'),
('sudershan   sharma', 'allowed', 'first', 'CSE', '14'),
('sourav   katoch', NULL, 'first', 'IT', '15');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE IF NOT EXISTS `student_detail` (
  `registration_number` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `year` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`registration_number`, `firstname`, `lastname`, `email`, `password`, `sex`, `stream`, `address`, `year`, `image`) VALUES
(13, 'nikhil', 'sharma', 'ns126190@gmail.com', 'hello', 'male', 'CSE', 'hjgvubuk', 'first', 'document/13.jpg'),
(14, 'sudershan', 'sharma', 'ns21@gmail.com', 'hello', 'male', 'CSE', 'khvsdhfouo', 'first', 'document/14.jpg'),
(15, 'sourav', 'katoch', 'sk@gmail.com', '12345', 'male', 'IT', 'abcdef', 'first', 'document/c728615c8a166f73ec481b345cac1e84Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

CREATE TABLE IF NOT EXISTS `student_result` (
  `studentid` int(11) NOT NULL,
  `batch` char(20) NOT NULL,
  `branch` char(20) NOT NULL,
  `marks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_result`
--

INSERT INTO `student_result` (`studentid`, `batch`, `branch`, `marks`) VALUES
(23, 'first', 'it', 750),
(24, 'first', 'it', 899),
(25, 'first', 'it', 953),
(26, 'first', 'it', 1258),
(27, 'first', 'it', 987),
(28, 'first', 'cse', 1000),
(29, 'first', 'cse', 900),
(30, 'first', 'cse', 850),
(31, 'first', 'cse', 1150),
(32, 'first', 'cse', 789),
(43, 'third', 'it', 1212),
(44, 'third', 'it', 1213),
(45, 'third', 'it', 1014),
(46, 'third', 'it', 1142),
(47, 'third', 'it', 987),
(38, 'second', 'cse', 741),
(39, 'second', 'cse', 852),
(40, 'second', 'cse', 963),
(41, 'second', 'cse', 789),
(42, 'second', 'cse', 654),
(48, 'third', 'cse', 951),
(49, 'third', 'cse', 753),
(50, 'third', 'cse', 846),
(51, 'third', 'cse', 831),
(52, 'third', 'cse', 1236),
(58, 'fourth', 'cse', 945),
(59, 'fourth', 'cse', 1112),
(60, 'fourth', 'cse', 785),
(61, 'fourth', 'cse', 863),
(62, 'fourth', 'cse', 888),
(33, 'second', 'it', 777),
(34, 'second', 'it', 888),
(35, 'second', 'it', 999),
(36, 'second', 'it', 987),
(37, 'second', 'it', 1212),
(53, 'fourth', 'it', 963),
(54, 'fourth', 'it', 951),
(55, 'fourth', 'it', 987),
(56, 'fourth', 'it', 941),
(57, 'fourth', 'it', 952),
(3, 'first', 'cse', 12),
(5, 'first', 'cse', 60),
(12, 'first', 'cse', 789);

-- --------------------------------------------------------

--
-- Table structure for table `student_upload`
--

CREATE TABLE IF NOT EXISTS `student_upload` (
  `registration_number` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `file_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_upload`
--

CREATE TABLE IF NOT EXISTS `syllabus_upload` (
  `branch` char(50) NOT NULL,
  `batch` char(50) NOT NULL,
  `subject` char(50) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `syllabus_url` char(50) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus_upload`
--

INSERT INTO `syllabus_upload` (`branch`, `batch`, `subject`, `subjectcode`, `syllabus_url`, `sid`) VALUES
('CSE', 'first', 'subject1', 'sub1', 'syllabus/sub1.jpg', 14),
('CSE', 'first', 'subject2', 'sub2', 'syllabus/sub2.jpg', 15),
('CSE', 'first', 'subject3', 'sub3', 'syllabus/sub3.jpg', 16),
('CSE', 'first', 'subject4', 'sub4', 'syllabus/sub4.jpg', 17),
('IT', 'first', 'subject5', 'sub5', 'syllabus/sub5.jpg', 18),
('IT', 'first', 'subject6', 'sub6', 'syllabus/sub6.jpg', 19),
('IT', 'first', 'subject7', 'sub7', 'syllabus/sub7.jpg', 20),
('IT', 'first', 'subject8', 'sub8', 'syllabus/sub8.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `registration_number` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`registration_number`, `password`) VALUES
('teacher1', 'sub1'),
('teacher2', 'sub2'),
('teacher3', 'sub3'),
('teacher4', 'sub4'),
('teacher5', 'sub5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend_student`
--
ALTER TABLE `attend_student`
  ADD KEY `studentid` (`studentid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD UNIQUE KEY `registration_number` (`registration_number`);

--
-- Indexes for table `syllabus_upload`
--
ALTER TABLE `syllabus_upload`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=374;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
  MODIFY `registration_number` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `syllabus_upload`
--
ALTER TABLE `syllabus_upload`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
