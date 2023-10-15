-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 07:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_activity_log`
--

CREATE TABLE `ci_activity_log` (
  `id` int(11) NOT NULL,
  `activity_id` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_activity_log`
--

INSERT INTO `ci_activity_log` (`id`, `activity_id`, `user_id`, `admin_id`, `created_at`) VALUES
(1, 1, 0, 25, '2019-11-27 06:00:00'),
(2, 2, 0, 26, '2019-11-27 06:00:00'),
(3, 1, 0, 31, '2019-11-25 09:33:27'),
(4, 5, 0, 31, '2019-11-25 09:40:35'),
(5, 7, 0, 31, '2019-11-26 09:19:45'),
(6, 7, 0, 31, '2019-11-26 09:41:48'),
(7, 7, 0, 31, '2019-11-26 09:42:50'),
(8, 7, 0, 31, '2019-11-26 09:43:42'),
(9, 1, 0, 25, '2023-05-14 19:55:09'),
(10, 5, 0, 31, '2023-05-14 21:34:05'),
(11, 4, 0, 31, '2023-10-15 11:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `ci_activity_status`
--

CREATE TABLE `ci_activity_status` (
  `id` int(11) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_activity_status`
--

INSERT INTO `ci_activity_status` (`id`, `description`) VALUES
(1, 'User Created'),
(2, 'User Edited'),
(3, 'User Deleted'),
(4, 'Admin Created'),
(5, 'Admin Edited'),
(6, 'Admin Deleted'),
(7, 'Invoice Created'),
(8, 'Invoice Edited'),
(9, 'Invoice Deleted');

-- --------------------------------------------------------

--
-- Table structure for table `ci_admin`
--

CREATE TABLE `ci_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_role_id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_verify` tinyint(4) NOT NULL DEFAULT 1,
  `is_admin` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `is_supper` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_admin`
--

INSERT INTO `ci_admin` (`admin_id`, `admin_role_id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `image`, `password`, `last_login`, `is_verify`, `is_admin`, `is_active`, `is_supper`, `token`, `password_reset_code`, `last_ip`, `created_at`, `updated_at`) VALUES
(31, 1, 'superadmin', 'Qasim', 'riaz', 'qasimriaz.mdk@gmail.com', '923217980936', '', '$2y$10$UM/E9Q.EZZfxTBI8OmIpauUdVQdQbtN9rRJpMHUld6AoYEDV8QRAC', '0000-00-00 00:00:00', 1, 1, 1, 1, '', '', '', '2019-01-16 06:01:58', '2023-05-14 09:05:05'),
(32, 2, 'umer', 'umer', 'jamal', 'umer@gmail.com', '987456321', '', '$2y$10$iydXDZ6miB7BJ3Wdl.vkN.BuRJQu2U9P9bRKm8AXFN/obDoQYCFEq', '0000-00-00 00:00:00', 1, 1, 1, 0, '', '', '', '2023-10-15 00:00:00', '2023-10-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_admin_roles`
--

CREATE TABLE `ci_admin_roles` (
  `admin_role_id` int(11) NOT NULL,
  `admin_role_title` varchar(30) CHARACTER SET utf8 NOT NULL,
  `admin_role_status` int(11) NOT NULL,
  `admin_role_created_by` int(1) NOT NULL,
  `admin_role_created_on` datetime NOT NULL,
  `admin_role_modified_by` int(11) NOT NULL,
  `admin_role_modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_admin_roles`
--

INSERT INTO `ci_admin_roles` (`admin_role_id`, `admin_role_title`, `admin_role_status`, `admin_role_created_by`, `admin_role_created_on`, `admin_role_modified_by`, `admin_role_modified_on`) VALUES
(1, 'Admin', 1, 0, '2018-03-15 12:48:04', 0, '2018-03-17 12:53:16'),
(2, 'Client', 1, 0, '2018-03-15 12:53:19', 0, '2019-01-26 08:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `ci_email_templates`
--

CREATE TABLE `ci_email_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_email_templates`
--

INSERT INTO `ci_email_templates` (`id`, `name`, `slug`, `subject`, `body`, `last_update`) VALUES
(1, 'Email Verification', 'email-verification', 'Activate Your Account', '<p></p>\n\n<p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to LightAdmin!<br>Active your account with the link above and start your Career.</p><p>To verify your email, please click the link below:<br> {VERIFICATION_LINK}</p><p>\n\n</p><div><b>Regards,</b></div><div><b>Team</b></div>\n\n<p></p>', '2019-11-26 18:06:39'),
(2, 'Forget Password', 'forget-password', 'Recover your password', '<p>\n\n</p><p>Hi  <b>{FULLNAME}</b>,<br><br></p><p>Welcome to LightAdmin!<br></p><p>We have received a request to reset your password. If you did not initiate this request, you can simply ignore this message and no action will be taken.</p><p><br>To reset your password, please click the link below:<br> {RESET_LINK}</p>\n\n<p></p>', '2019-11-26 17:44:41'),
(3, 'General Notification', '', 'aaaaa', '<p>asdfasdfasdfasd </p>', '2019-08-26 02:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `ci_email_template_variables`
--

CREATE TABLE `ci_email_template_variables` (
  `id` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `variable_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_email_template_variables`
--

INSERT INTO `ci_email_template_variables` (`id`, `template_id`, `variable_name`) VALUES
(1, 1, '{FULLNAME}'),
(2, 1, '{VERIFICATION_LINK}'),
(3, 2, '{RESET_LINK}'),
(4, 2, '{FULLNAME}');

-- --------------------------------------------------------

--
-- Table structure for table `ci_general_settings`
--

CREATE TABLE `ci_general_settings` (
  `id` int(11) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `default_language` int(11) NOT NULL,
  `copyright` tinytext DEFAULT NULL,
  `email_from` varchar(100) NOT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` int(11) DEFAULT NULL,
  `smtp_user` varchar(50) DEFAULT NULL,
  `smtp_pass` varchar(50) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
  `recaptcha_site_key` varchar(255) DEFAULT NULL,
  `recaptcha_lang` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_general_settings`
--

INSERT INTO `ci_general_settings` (`id`, `favicon`, `logo`, `application_name`, `timezone`, `currency`, `default_language`, `copyright`, `email_from`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `facebook_link`, `twitter_link`, `google_link`, `youtube_link`, `linkedin_link`, `instagram_link`, `recaptcha_secret_key`, `recaptcha_site_key`, `recaptcha_lang`, `created_date`, `updated_date`) VALUES
(1, 'assets/img/103fefa252ceff1ca1c59a0a1c318e56.png', 'assets/img/103fefa252ceff1ca1c59a0a1c318e56.png', 'Bait al Sain', 'Asia/Dubai', 'AED', 2, 'Copyright © 2023 Bait al Sain All rights reserved.', 'info@domain.com', 'smtp.domain.com', 567, 'info@domain.com', '123456789', 'https://www.facebook.com', 'https://www.twitter.com', 'https://google.com', 'https://www.youtube.com', 'https://www.linkedIn.com', 'https://www.Instagram.com', '', '', 'en', '2023-10-15 00:00:00', '2023-10-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_language`
--

CREATE TABLE `ci_language` (
  `id` int(11) NOT NULL,
  `name` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(15) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_language`
--

INSERT INTO `ci_language` (`id`, `name`, `short_name`, `status`, `created_at`) VALUES
(2, 'English', 'en', 1, '2019-09-16 01:13:17'),
(3, 'French', 'fr', 1, '2019-09-16 08:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `ci_postmeta`
--

CREATE TABLE `ci_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ci_postmeta`
--

INSERT INTO `ci_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(2, 11, 'bloglogo', 'assets/img/9ff4f726e19dbbc4137fec6e36e86114.png'),
(3, 11, 'blogname', 'BUH'),
(4, 11, 'facebook_link', 'https://www.facebook.com'),
(5, 11, 'twitter_link', 'https://www.twitter.com'),
(6, 11, 'youtube_link', 'https://www.youtube.com'),
(7, 11, 'linkedin_link', 'https://www.linkedIn.com'),
(8, 11, 'instagram_link', 'https://www.Instagram.com'),
(9, 11, 'contact_email', 'info@buh.com'),
(10, 11, 'contact_number', '+92365479589'),
(11, 14, 'reportedby', 'Umer'),
(12, 14, 'designation', 'Oprator'),
(13, 14, 'mobileno', '+78965412596'),
(14, 14, 'loction', 'HQ'),
(15, 14, 'subloction', 'Building-1'),
(16, 14, 'subloction2', 'Ground Floor'),
(17, 14, 'loctiondetails', 'Oprator'),
(18, 14, 'workorderdetails', 'Open'),
(19, 14, 'comstatus', 'Open'),
(20, 14, 'comtype', 'HVAC'),
(21, 14, 'date', '10-10-2023 9:48 AM'),
(22, 14, 'tag', 'Testing,Testing2,Testing3'),
(23, 14, 'issuepicture', 'Oprator'),
(24, 14, 'detail', 'Helping Text');

-- --------------------------------------------------------

--
-- Table structure for table `ci_posts`
--

CREATE TABLE `ci_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_modified` datetime NOT NULL,
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ci_posts`
--

INSERT INTO `ci_posts` (`ID`, `post_author`, `post_date`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `post_name`, `post_modified`, `menu_order`, `post_type`) VALUES
(11, 1, '0000-00-00 00:00:00', '', 'Site Settings', '', 'publish', '', '0000-00-00 00:00:00', 0, 'blogsettings'),
(14, 1, '2023-10-15 11:30:38', '', 'WorkOrders', '', 'publish', 'WorkOrder', '2023-10-15 08:28:13', 0, 'blogworkorder');

-- --------------------------------------------------------

--
-- Table structure for table `ci_uploaded_files`
--

CREATE TABLE `ci_uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_uploaded_files`
--

INSERT INTO `ci_uploaded_files` (`id`, `name`, `created_at`) VALUES
(81, 'uploads/0fe0382a27bbc4336939a4dd4b3acee2.jpg', '2019-11-26 21:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_verify` tinyint(4) NOT NULL DEFAULT 0,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL,
  `password_reset_code` varchar(255) NOT NULL,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `controller_name` varchar(255) NOT NULL,
  `fa_icon` varchar(100) NOT NULL,
  `operation` text NOT NULL,
  `sort_order` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_name`, `controller_name`, `fa_icon`, `operation`, `sort_order`) VALUES
(1, 'admin', 'admin', 'fa-pie-chart', 'view|add|edit|delete|change_status|access', 3),
(9, 'dashboard', 'dashboard', 'fa-dashboard', 'index', 1),
(26, 'complaints', 'complaints', 'fa-bars', 'index|add|edit|delete', 5);

-- --------------------------------------------------------

--
-- Table structure for table `module_access`
--

CREATE TABLE `module_access` (
  `id` int(11) NOT NULL,
  `admin_role_id` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `operation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_access`
--

INSERT INTO `module_access` (`id`, `admin_role_id`, `module`, `operation`) VALUES
(1, 1, 'users', 'view'),
(2, 1, 'users', 'add'),
(3, 1, 'users', 'edit'),
(5, 1, 'users', 'access'),
(6, 1, 'users', 'change_status'),
(7, 1, 'export', 'access'),
(8, 1, 'general_settings', 'view'),
(9, 1, 'general_settings', 'add'),
(10, 1, 'general_settings', 'edit'),
(11, 1, 'general_settings', 'access'),
(27, 2, 'dashboard', 'access'),
(28, 2, 'profile', 'access'),
(29, 2, 'dashboard', 'view'),
(54, 2, 'complaints', 'edit'),
(55, 2, 'complaints', 'add'),
(56, 2, 'complaints', 'access');

-- --------------------------------------------------------

--
-- Table structure for table `sub_module`
--

CREATE TABLE `sub_module` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_module`
--

INSERT INTO `sub_module` (`id`, `parent`, `name`, `link`, `sort_order`) VALUES
(2, 2, 'module_setting', 'module', 1),
(3, 2, 'role_and_permissions', '', 2),
(4, 1, 'add_new_admin', 'add', 2),
(6, 1, 'admin_list', '', 1),
(30, 3, 'users_list', '', 1),
(31, 3, 'add_new_user', 'add', 2),
(32, 10, 'simple_datatable', 'simple_datatable', 1),
(33, 10, 'ajax_datatable', 'ajax_datatable', 2),
(34, 10, 'pagination', 'pagination', 3),
(35, 10, 'advance_search', 'advance_search', 4),
(36, 10, 'file_upload', 'file_upload', 5),
(37, 11, 'invoice_list', '', 1),
(38, 11, 'add_new_invoice', 'add', 2),
(39, 12, 'serverside_join', '', 1),
(40, 12, 'simple_join', 'simple', 2),
(41, 14, 'country', '', 1),
(42, 14, 'state', 'state', 2),
(43, 14, 'city', 'city', 3),
(44, 16, 'charts_js', 'chartjs', 1),
(45, 16, 'charts_flot', 'flot', 2),
(46, 16, 'charts_inline', 'inline', 3),
(47, 17, 'general', 'general', 1),
(48, 17, 'icons', 'icons', 2),
(49, 17, 'buttons', 'buttons', 3),
(50, 18, 'general_elements', 'general', 1),
(51, 18, 'advanced_elements', 'advanced', 2),
(52, 18, 'editors', 'editors', 3),
(53, 19, 'simple_tables', 'simple', 1),
(54, 19, 'data_tables', 'data', 2),
(55, 21, 'inbox', 'inbox', 1),
(56, 21, 'compose', 'compose', 2),
(57, 21, 'read', 'read_mail', 3),
(58, 22, 'invoice', 'invoice', 1),
(59, 22, 'profile', 'profile', 2),
(60, 22, 'login', 'login', 3),
(61, 22, 'register', 'register', 4),
(62, 22, 'lock_screen', 'Lockscreen', 4),
(63, 23, 'error_404', 'error404', 1),
(64, 23, 'error_500', 'error500', 2),
(65, 23, 'blank_page', 'blank', 3),
(66, 23, 'starter_page', 'starter', 4),
(69, 25, 'view_profile', '', 1),
(70, 25, 'change_password', 'change_pwd', 2),
(71, 10, 'multiple_files_upload', 'multi_file_upload', 6),
(72, 10, 'dynamic_charts', 'charts', 7),
(73, 10, 'locations', 'locations', 8),
(74, 26, 'complaints_list', '', 1),
(75, 26, 'add_complaint', 'add', 2),
(76, 27, 'pageslist', '', 1),
(77, 27, 'add_new_page', 'add', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_activity_log`
--
ALTER TABLE `ci_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_activity_status`
--
ALTER TABLE `ci_activity_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_admin`
--
ALTER TABLE `ci_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ci_admin_roles`
--
ALTER TABLE `ci_admin_roles`
  ADD PRIMARY KEY (`admin_role_id`);

--
-- Indexes for table `ci_email_templates`
--
ALTER TABLE `ci_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_email_template_variables`
--
ALTER TABLE `ci_email_template_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_general_settings`
--
ALTER TABLE `ci_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_language`
--
ALTER TABLE `ci_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_postmeta`
--
ALTER TABLE `ci_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `ci_posts`
--
ALTER TABLE `ci_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `ci_uploaded_files`
--
ALTER TABLE `ci_uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `module_access`
--
ALTER TABLE `module_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RoleId` (`admin_role_id`);

--
-- Indexes for table `sub_module`
--
ALTER TABLE `sub_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Parent Module ID` (`parent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_activity_log`
--
ALTER TABLE `ci_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ci_activity_status`
--
ALTER TABLE `ci_activity_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ci_admin`
--
ALTER TABLE `ci_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ci_admin_roles`
--
ALTER TABLE `ci_admin_roles`
  MODIFY `admin_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_email_templates`
--
ALTER TABLE `ci_email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_email_template_variables`
--
ALTER TABLE `ci_email_template_variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_general_settings`
--
ALTER TABLE `ci_general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_language`
--
ALTER TABLE `ci_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_postmeta`
--
ALTER TABLE `ci_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ci_posts`
--
ALTER TABLE `ci_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ci_uploaded_files`
--
ALTER TABLE `ci_uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `module_access`
--
ALTER TABLE `module_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sub_module`
--
ALTER TABLE `sub_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
