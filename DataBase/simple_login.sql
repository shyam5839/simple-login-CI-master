-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 07:42 PM
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
-- Database: `simple_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `activity` text DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `fk_user_id`, `activity`, `module`, `created_at`) VALUES
(1, 1, 'add new user user@gmail.com', 'User Management', '2017-01-11 22:44:54'),
(2, 1, 'update user user@gmail.com`s details (user@gmail.com to user@gmail.com, User 1 to User One,user to user)', 'User Management', '2017-01-11 22:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `mosque_audit_marriage_certificate`
--

CREATE TABLE `mosque_audit_marriage_certificate` (
  `id` int(25) NOT NULL,
  `ref_no` int(25) NOT NULL,
  `spouse_name` varchar(225) NOT NULL,
  `spouse_occupation` varchar(225) NOT NULL,
  `spouse_education` varchar(225) NOT NULL,
  `spouse_address` varchar(225) NOT NULL,
  `spouse_jamaath` varchar(225) NOT NULL,
  `spouse_jamaath_address` varchar(225) NOT NULL,
  `place` varchar(225) NOT NULL,
  `panchayath` varchar(225) NOT NULL,
  `taluk` varchar(225) NOT NULL,
  `district` varchar(225) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `marriage_place` varchar(225) NOT NULL,
  `spouse_father` varchar(225) NOT NULL,
  `spouse_mother` varchar(225) NOT NULL,
  `spouse_image` varchar(225) NOT NULL,
  `member_id` int(225) NOT NULL,
  `created_by` varchar(225) NOT NULL,
  `created_at` date NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mosque_audit_marriage_certificate`
--

INSERT INTO `mosque_audit_marriage_certificate` (`id`, `ref_no`, `spouse_name`, `spouse_occupation`, `spouse_education`, `spouse_address`, `spouse_jamaath`, `spouse_jamaath_address`, `place`, `panchayath`, `taluk`, `district`, `date_of_marriage`, `marriage_place`, `spouse_father`, `spouse_mother`, `spouse_image`, `member_id`, `created_by`, `created_at`, `status`) VALUES
(1, 324324, 'sddssdf', 'sdfsdf', 'sdfsdf', '211221', '211221', 'sdfds', '211221', '211221', '211221', '211221', '2023-06-11', 'sdfsdf', 'dsfsdf', 'sdfsdf', '', 2344234, '211221', '2023-06-05', '211221');

-- --------------------------------------------------------

--
-- Table structure for table `mosque_audit_member`
--

CREATE TABLE `mosque_audit_member` (
  `id` int(20) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `old_reg_no` varchar(255) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `residence_phone` int(25) NOT NULL,
  `official_phone` int(25) NOT NULL,
  `Mobile_no` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jamaath_ward` varchar(255) NOT NULL,
  `lsg_ward` varchar(255) NOT NULL,
  `panchayath` varchar(255) NOT NULL,
  `taluk` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `father_member_id` int(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `death_date` date NOT NULL,
  `buried_date` date NOT NULL,
  `buried_place` varchar(255) NOT NULL,
  `death_reason` varchar(255) NOT NULL,
  `place_of_death` varchar(255) NOT NULL,
  `existing_subscription_money` int(255) NOT NULL,
  `revised_subscription_money` int(255) NOT NULL,
  `imams_allowance` int(255) NOT NULL,
  `mosque_allowance` int(255) NOT NULL,
  `deceased_or_handicapped` varchar(255) NOT NULL,
  `nominee` varchar(255) NOT NULL,
  `relation_with_nominee` varchar(255) NOT NULL,
  `ex_jamaath` varchar(255) NOT NULL,
  `census_taken_by` varchar(255) NOT NULL,
  `census_taken_at` date NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `membership_type` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `spouse_jamaath` varchar(255) NOT NULL,
  `spouse_address` varchar(255) NOT NULL,
  `main_member_relation` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `monthly_income` int(255) NOT NULL,
  `eid_income` int(255) NOT NULL,
  `bakrid_income` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mosque_audit_member`
--

INSERT INTO `mosque_audit_member` (`id`, `reg_no`, `old_reg_no`, `member_name`, `parent_id`, `Address`, `street`, `place`, `pincode`, `residence_phone`, `official_phone`, `Mobile_no`, `email`, `jamaath_ward`, `lsg_ward`, `panchayath`, `taluk`, `village`, `district`, `birth_date`, `birth_place`, `father_member_id`, `gender`, `death_date`, `buried_date`, `buried_place`, `death_reason`, `place_of_death`, `existing_subscription_money`, `revised_subscription_money`, `imams_allowance`, `mosque_allowance`, `deceased_or_handicapped`, `nominee`, `relation_with_nominee`, `ex_jamaath`, `census_taken_by`, `census_taken_at`, `user_image`, `id_proof`, `membership_type`, `qualification`, `blood_group`, `spouse_name`, `spouse_jamaath`, `spouse_address`, `main_member_relation`, `occupation`, `status`, `created_by`, `updated_by`, `monthly_income`, `eid_income`, `bakrid_income`, `created_at`, `updated_at`) VALUES
(1, '', '211221', 'shyam', 23223, 'ewrwerewr', '211221', '211221', '211221', 211221, 211221, 211221, '211221', '211221', '211221', '211221', '211221', '211221', '211221', '2021-12-21', '211221', 211221, '211221', '2021-12-21', '2021-12-21', '211221', ' 211221', '211221 ', 211221, 211221, 211221, 211221, '211221        ', '211221        ', '211221        ', '211221        ', ' 211221       ', '2021-12-21', '', '211221', '211221', '211221', '211221', '211221', '211221', '211221', '211221', '211221', '211221', '211221', '211221', 211221, 211221, 211221, '2021-12-21', '2021-12-21'),
(2, '', 'sdfsdf', 'sdfsdf', 0, 'sdfdsf', 'sdfsdf', 'sdfdsf', 'sdfsdf', 0, 0, 0, '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '0000-00-00', '0000-00-00', '', '        ', '        ', 0, 0, 0, 0, '        ', '        ', '        ', '        ', '        ', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `address` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB AVG_ROW_LENGTH=8192 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `role`, `image`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admin', '', 1, '', '2017-01-12 12:07:57', '2017-01-12 06:37:59'),
(2, 'user@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'User One', 'user', '', 1, '', '2017-01-12 04:14:51', '2017-01-11 22:53:26'),
(3, 'shyam@yopmail.com', '5a4cd850fc787d454416aa3a47580468', 'shyam', 'user', '', 1, '', '2023-06-22 18:18:47', '2023-06-23 01:14:55'),
(4, 'gouri@yopmail.com', '289b97b9fb45df2ca7174e2865f71015', 'gouri', 'user', '', 1, '', '2023-06-22 18:22:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `log_id` (`log_id`),
  ADD KEY `FK_activity_log_user_user_id` (`fk_user_id`);

--
-- Indexes for table `mosque_audit_marriage_certificate`
--
ALTER TABLE `mosque_audit_marriage_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mosque_audit_member`
--
ALTER TABLE `mosque_audit_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mosque_audit_marriage_certificate`
--
ALTER TABLE `mosque_audit_marriage_certificate`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mosque_audit_member`
--
ALTER TABLE `mosque_audit_member`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD CONSTRAINT `FK_activity_log_user_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
