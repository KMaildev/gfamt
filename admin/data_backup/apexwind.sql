-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 01:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apexwind`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `photo`) VALUES
(1, 'uploads/files/uhwd86305xcrpgk.jpeg,uploads/files/mt1bqnd7xg8_rol.jpg,uploads/files/_3sj6izer81pfxv.jpeg,uploads/files/8maw0ply_duzocf.jpeg,uploads/files/k4rz0jpugb2n5y9.jpeg,uploads/files/yszupc9jeknta5h.jpeg,uploads/files/vh1ksqxfzawdrj2.jpeg,uploads/files/z32lp7hydna9ei5.jpeg,uploads/files/1vw4iocl_fy3d9h.jpeg,uploads/files/iwgvl3f8uj2ms9z.jpeg,uploads/files/b641elqtgyow_f9.jpeg,uploads/files/m9bfiatg6el_yoq.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'UAE/QATAR'),
(2, 'JAPAN'),
(3, 'THAILAND'),
(4, 'MALAYSIA'),
(5, 'SINGAPORE');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `cv_file` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `name`, `phone`, `cv_file`, `upload_date`) VALUES
(1, 'asdf', 'asfd', 'http://localhost/projects/apexwind/uploads/285427202c99424dddfb7f4450c12cb6.pdf', '2022/07/08');

-- --------------------------------------------------------

--
-- Table structure for table `employer_form`
--

CREATE TABLE `employer_form` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_category` varchar(255) DEFAULT NULL,
  `age_limit` varchar(255) DEFAULT NULL,
  `educational_requirement` varchar(255) DEFAULT NULL,
  `working_experience_requirement` varchar(255) DEFAULT NULL,
  `other_additional_requirement` varchar(255) DEFAULT NULL,
  `estimate_salary_offer` varchar(255) DEFAULT NULL,
  `other_allowance` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `interview_type` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_form`
--

INSERT INTO `employer_form` (`id`, `company_name`, `company_type`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `date`) VALUES
(1, 'dsf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdf@gmail.com', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'adsf', 'adf', 'adsf', 'adsf', '2022/07/08');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `inquiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `phone`, `subject`, `message`, `inquiry_date`) VALUES
(1, 'asd', 'asfd@gmail.com', 'asdf', 'asdfas', 'df', '2022/07/08');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nrc_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `skill` text NOT NULL,
  `language` text DEFAULT NULL,
  `current_address` varchar(255) NOT NULL,
  `passport` text DEFAULT NULL,
  `expire_date` text DEFAULT NULL,
  `registration_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `name`, `nrc_no`, `email`, `phone`, `date_of_birth`, `age`, `gender`, `health_status`, `height`, `weight`, `education`, `skill`, `language`, `current_address`, `passport`, `expire_date`, `registration_date`) VALUES
(1, 'asdf', 'asdf', 'asdf@gmail.com', 'adsf', 'asdf', 'asdf', 'Male', 'asf', 'asdfa', 'adf', 'ad', 'afda', 'sfd', 'asdf', 'asdf', 'adf', '2022/07/08');

-- --------------------------------------------------------

--
-- Table structure for table `oversea_jobs`
--

CREATE TABLE `oversea_jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oversea_jobs`
--

INSERT INTO `oversea_jobs` (`id`, `name`, `description`, `country_id`) VALUES
(1, 'Restaurant', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(2, 'Hotel', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(3, 'Sales Man/Girl', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(4, 'Airport Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(5, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(6, 'Dubai Dry Dock Yard', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 1),
(7, 'Office Staff', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(8, 'Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(9, 'Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(10, 'Super Market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(11, 'Restaurant', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(12, 'Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(13, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(14, 'Engineering Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(15, '✦ Building Meterials Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(16, 'Car Service (Hyundai, Mercedes Benz, Nissan, Toyota ... etc..)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 2),
(17, 'Office Staff', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(18, '✦ Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(19, '✦ Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(20, '✦ Super Market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(21, '✦ Restaurant', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(22, '✦ Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(23, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(24, '✦ Engineering Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(25, 'Meterials ', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(26, 'Car Service (Hyundai, Mercedes Benz, Nissan, Toyota... etc..)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 3),
(27, 'Office Staff', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(28, 'Electronic Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(29, 'Furniture Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(30, 'Super Market', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(31, 'Restaurant', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(32, 'Agriculture', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(33, 'Construction', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(34, 'Engineering Services', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(35, 'Building Meterials Factory', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(36, 'Car Service (Hyundai, Mercedes Benz, Nissan, Toyota ... etc..)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 4),
(37, 'Engineers (All Department)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(38, 'IT Staff', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(39, 'QS', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(40, 'Draft Persons', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(41, 'Designers', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(42, 'Drivers', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(43, 'Technicians', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(44, 'Welders', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(45, 'Admin Staffs (Office Staff)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(46, 'Account', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(47, 'Marketing and Sales Persons', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(48, 'General Workers (Low Levy, High Levy)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(49, 'F&B Staffs (Cook, Waiters, Kitchen Helper, Washers, Cleaners)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(50, 'All Industries (Manufacturing)', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(51, 'Construction Workers', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(52, 'Marine Workers', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5),
(53, 'Landscape Workers', '<p>Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.<br></p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2022-01-25 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$lVnOwXBFb8GZTrzI9KvY1OlcODngr/ujvpCPsEXb4ngiY5VaowEMu', 'c4c42a0990fff782d7b39cd1dc4aa0b4', NULL, '2022-04-26 23:53:12', 'c4d20456a09ea9db9fb19023f86b4fe1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_form`
--
ALTER TABLE `employer_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer_form`
--
ALTER TABLE `employer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
