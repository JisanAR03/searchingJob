-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2023 at 07:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employers`
--

CREATE TABLE `Employers` (
  `EmployerID` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `SocialId` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `BusinessEmail` varchar(50) DEFAULT NULL,
  `PasswordHash` varchar(256) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `RoleInCompany` varchar(255) DEFAULT NULL,
  `AboutCompany` longtext DEFAULT NULL,
  `CompanyMission` longtext DEFAULT NULL,
  `WebsiteURL` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Banner` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `LinkedInURL` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `SubsDay` int(11) DEFAULT NULL,
  `SubsSrtDate` datetime DEFAULT NULL,
  `SubsEndDate` datetime DEFAULT NULL,
  `SubsType` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Employers`
--

INSERT INTO `Employers` (`EmployerID`, `verification_token`, `is_verified`, `SocialId`, `CompanyName`, `BusinessEmail`, `PasswordHash`, `FullName`, `RoleInCompany`, `AboutCompany`, `CompanyMission`, `WebsiteURL`, `Logo`, `Banner`, `Email`, `LinkedInURL`, `PhoneNumber`, `Location`, `SubsDay`, `SubsSrtDate`, `SubsEndDate`, `SubsType`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, NULL, 'test', 'comsixsem@gmail.com', '$2y$10$j9Mu8D7NSjiewdFRb6p.kORrDdRk/mr2tDUf/iLeq33vqXtmLbRAe', 'testing', 'CEO', '<p>If you\'re trying to connect to an SMTP server for sending emails, make sure that you have the correct SMTP server hostname/IP address and port configured in your application settings.</p>', '<p>If you\'re trying to connect to an SMTP server for sending emails, make sure that you have the correct SMTP server hostname/IP address and port configured in your application settings.</p>', 'testingsite.com', 'logo1693261515.jpg', NULL, 'wafy@mailinator.com', 'linkedin.com/mailinator', '852343243', 'LA,USA', NULL, NULL, NULL, 0, '2023-08-28 16:13:47', '2023-08-28 16:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `JobApplications`
--

CREATE TABLE `JobApplications` (
  `JobApplicationID` int(11) NOT NULL,
  `JobSeekerID` int(11) DEFAULT NULL,
  `JobPostID` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `CurrentRole` varchar(255) DEFAULT NULL,
  `CoverLetterOptional` text DEFAULT NULL,
  `CoverLetter` text DEFAULT NULL,
  `AlertForFutureJobs` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobApplications`
--

INSERT INTO `JobApplications` (`JobApplicationID`, `JobSeekerID`, `JobPostID`, `Email`, `FullName`, `PhoneNumber`, `Location`, `CurrentRole`, `CoverLetterOptional`, `CoverLetter`, `AlertForFutureJobs`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(2, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(3, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(4, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(5, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(6, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(7, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(8, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(9, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(10, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(11, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(12, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(13, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(14, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28'),
(15, 2, 2, 'byxep@mailinator.com', 'Sakib Alam', '234242424', 'AL,USA', 'web design', 'wewerwfwfw', 'apply_cover1693264628.pdf', 1, '2023-08-28 17:17:08', '2023-08-28 17:17:08'),
(16, 2, 1, 'admin@gmail.com', 'Ashraf Alam', '2342443234', 'sfsfsfa,UAE', 'graphics design', 'fsfsfsfsfsfsf', 'apply_cover1693265008.pdf', 1, '2023-08-28 17:23:28', '2023-08-28 17:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `JobPosts`
--

CREATE TABLE `JobPosts` (
  `JobPostID` int(11) NOT NULL,
  `EmployerID` int(11) DEFAULT NULL,
  `JobTitle` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `PostDate` datetime DEFAULT NULL,
  `PostExpired` datetime DEFAULT NULL,
  `Compensation` decimal(10,2) DEFAULT NULL,
  `WorkType` varchar(255) DEFAULT NULL,
  `JobLocation` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `SalaryRange` varchar(255) DEFAULT NULL,
  `Active` tinyint(1) DEFAULT 1,
  `ApplyPermission` tinyint(1) NOT NULL DEFAULT 1,
  `Experience` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobPosts`
--

INSERT INTO `JobPosts` (`JobPostID`, `EmployerID`, `JobTitle`, `Category`, `PostDate`, `PostExpired`, `Compensation`, `WorkType`, `JobLocation`, `Description`, `SalaryRange`, `Active`, `ApplyPermission`, `Experience`, `created_at`, `updated_at`) VALUES
(1, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(2, 1, 'Registered Nurse', 'Healthcare', '2023-08-28 22:38:07', '2023-11-01 00:00:00', '20000.00', 'Part-time', 'Healthville Medical Center', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-token-text-primary border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\" data-testid=\"conversation-turn-7\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3 max-w-full\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-3 overflow-x-auto whitespace-pre-wrap break-words\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<ul>\r\n<li>Healthville Medical Center is seeking a skilled Registered Nurse to provide compassionate patient care. If you have a strong clinical background, exceptional communication skills, and a commitment to patient well-being, apply now for this part-time opportunity.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '$55k - $70k', 1, 1, NULL, '2023-08-28 16:38:07', '2023-08-28 16:38:07'),
(3, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(4, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(5, 1, 'Registered Nurse', 'Healthcare', '2023-08-28 22:38:07', '2023-11-01 00:00:00', '20000.00', 'Part-time', 'Healthville Medical Center', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-token-text-primary border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\" data-testid=\"conversation-turn-7\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3 max-w-full\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-3 overflow-x-auto whitespace-pre-wrap break-words\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<ul>\r\n<li>Healthville Medical Center is seeking a skilled Registered Nurse to provide compassionate patient care. If you have a strong clinical background, exceptional communication skills, and a commitment to patient well-being, apply now for this part-time opportunity.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '$55k - $70k', 1, 1, NULL, '2023-08-28 16:38:07', '2023-08-28 16:38:07'),
(6, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(7, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(8, 1, 'Registered Nurse', 'Healthcare', '2023-08-28 22:38:07', '2023-11-01 00:00:00', '20000.00', 'Part-time', 'Healthville Medical Center', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-token-text-primary border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\" data-testid=\"conversation-turn-7\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3 max-w-full\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-3 overflow-x-auto whitespace-pre-wrap break-words\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<ul>\r\n<li>Healthville Medical Center is seeking a skilled Registered Nurse to provide compassionate patient care. If you have a strong clinical background, exceptional communication skills, and a commitment to patient well-being, apply now for this part-time opportunity.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '$55k - $70k', 1, 1, NULL, '2023-08-28 16:38:07', '2023-08-28 16:38:07'),
(9, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(10, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09'),
(11, 1, 'Registered Nurse', 'Healthcare', '2023-08-28 22:38:07', '2023-11-01 00:00:00', '20000.00', 'Part-time', 'Healthville Medical Center', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-cjvdt-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-token-text-primary border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\" data-testid=\"conversation-turn-7\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3 max-w-full\">\r\n<div class=\"min-h-[20px] flex flex-col items-start gap-3 overflow-x-auto whitespace-pre-wrap break-words\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<ul>\r\n<li>Healthville Medical Center is seeking a skilled Registered Nurse to provide compassionate patient care. If you have a strong clinical background, exceptional communication skills, and a commitment to patient well-being, apply now for this part-time opportunity.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '$55k - $70k', 1, 1, NULL, '2023-08-28 16:38:07', '2023-08-28 16:38:07'),
(12, 1, 'Representative', 'Sales', '2023-08-28 22:33:09', '2023-08-29 00:00:00', '10000.00', 'Full-time', 'Metroville, Salesland', '<p>Join our growing sales team as a Sales Representative! You\'ll be responsible for building and maintaining client relationships, achieving sales targets, and contributing to our company\'s growth. This full-time position allows you to work remotely while earning competitive compensation and commission.</p>', '$40k - $50k', 1, 1, NULL, '2023-08-28 16:33:09', '2023-08-28 16:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `JobSeekers`
--

CREATE TABLE `JobSeekers` (
  `JobSeekerID` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `SocialId` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PasswordHash` varchar(256) DEFAULT NULL,
  `WorkingFor` varchar(255) DEFAULT NULL,
  `ProfilePhoto` varchar(255) DEFAULT NULL,
  `LinkedInURL` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `WorkTitle` varchar(255) DEFAULT NULL,
  `CurrentCompanyName` varchar(255) DEFAULT NULL,
  `WorkStart` datetime DEFAULT NULL,
  `WorkEnd` datetime DEFAULT NULL,
  `AppExperienceReview` tinyint(4) DEFAULT NULL,
  `SalaryExpectation` decimal(10,2) DEFAULT NULL,
  `Resume` varchar(255) DEFAULT NULL,
  `AvailableForWork` tinyint(4) DEFAULT NULL,
  `MessagePermit` tinyint(4) DEFAULT NULL,
  `SubsDay` int(11) DEFAULT NULL,
  `SubsSrtDate` datetime DEFAULT NULL,
  `SubsEndDate` datetime DEFAULT NULL,
  `SubsType` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobSeekers`
--

INSERT INTO `JobSeekers` (`JobSeekerID`, `verification_token`, `is_verified`, `SocialId`, `FullName`, `Email`, `PasswordHash`, `WorkingFor`, `ProfilePhoto`, `LinkedInURL`, `PhoneNumber`, `Location`, `WorkTitle`, `CurrentCompanyName`, `WorkStart`, `WorkEnd`, `AppExperienceReview`, `SalaryExpectation`, `Resume`, `AvailableForWork`, `MessagePermit`, `SubsDay`, `SubsSrtDate`, `SubsEndDate`, `SubsType`, `created_at`, `updated_at`) VALUES
(2, NULL, 1, NULL, 'testing name', 'comsixsem@gmail.com', '$2y$10$Doxgl5X9YESuhuMtnRERC.c59oJc0P8GoUnTpsDuVepd0B8pPBORi', 'Website Design', 'profile_photo1693262856.jpg', 'linkden.com/testing', '2342424242', 'AL,USA', 'Web designer', 'Innovation IT', '2021-01-01 00:00:00', '2022-01-01 00:00:00', 0, '70000.00', NULL, 0, 0, NULL, NULL, NULL, 0, '2023-08-28 16:12:57', '2023-08-28 16:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `JobSeekerSkills`
--

CREATE TABLE `JobSeekerSkills` (
  `JobSeekerSkillID` int(11) NOT NULL,
  `JobSeekerID` int(11) DEFAULT NULL,
  `SkillID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobSeekerSkills`
--

INSERT INTO `JobSeekerSkills` (`JobSeekerSkillID`, `JobSeekerID`, `SkillID`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2023-08-28 16:56:10', '2023-08-28 16:56:10'),
(2, 2, 10, '2023-08-28 16:56:10', '2023-08-28 16:56:10'),
(3, 2, 17, '2023-08-28 16:56:10', '2023-08-28 16:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_type` varchar(255) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_type`, `sender_id`, `receiver_type`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(3, 'JobSeekers', 2, 'Employers', 1, 'hi', '2023-08-28 16:50:56', '2023-08-28 16:50:56'),
(4, 'Employers', 1, 'JobSeekers', 2, 'hlw', '2023-08-28 17:29:11', '2023-08-28 17:29:11'),
(5, 'JobSeekers', 2, 'Employers', 1, 'checking', '2023-11-22 12:00:30', '2023-11-22 12:00:30'),
(6, 'Employers', 1, 'JobSeekers', 2, 'something', '2023-11-22 12:01:13', '2023-11-22 12:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_06_02_225904_create_employers_table', 1),
(4, '2023_06_02_225904_create_job_applications_table', 1),
(5, '2023_06_02_225905_create_job_posts_table', 1),
(6, '2023_06_02_225905_create_job_seeker_skills_table', 1),
(7, '2023_06_02_225905_create_job_seekers_table', 1),
(8, '2023_06_02_225905_create_skills_table', 1),
(9, '2023_06_02_232201_add_foreign_keys', 1),
(10, '2023_06_26_171638_create_messages_table', 1),
(11, '2023_08_30_111120_create_super_user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Skills`
--

CREATE TABLE `Skills` (
  `SkillID` int(11) NOT NULL,
  `SkillName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Skills`
--

INSERT INTO `Skills` (`SkillID`, `SkillName`, `created_at`, `updated_at`) VALUES
(1, 'Python', NULL, NULL),
(2, 'Django', NULL, NULL),
(3, 'Flask', NULL, NULL),
(4, 'NumPy', NULL, NULL),
(5, 'Pandas', NULL, NULL),
(6, 'Matplotlib', NULL, NULL),
(7, 'JavaScript', NULL, NULL),
(8, 'React.js', NULL, NULL),
(9, 'Angular', NULL, NULL),
(10, 'Vue.js', NULL, NULL),
(11, 'Java', NULL, NULL),
(12, 'Spring Framework', NULL, NULL),
(13, 'C++', NULL, NULL),
(14, 'STL (Standard Template Library)', NULL, NULL),
(15, 'Ruby', NULL, NULL),
(16, 'Ruby on Rails', NULL, NULL),
(17, 'Swift', NULL, NULL),
(18, 'iOS development', NULL, NULL),
(19, 'Kotlin', NULL, NULL),
(20, 'Android development', NULL, NULL),
(21, 'HTML', NULL, NULL),
(22, 'CSS', NULL, NULL),
(23, 'JavaScript', NULL, NULL),
(24, 'DOM manipulation', NULL, NULL),
(25, 'jQuery', NULL, NULL),
(26, 'AJAX', NULL, NULL),
(27, 'Responsive design', NULL, NULL),
(28, 'React.js', NULL, NULL),
(29, 'Redux', NULL, NULL),
(30, 'Next.js', NULL, NULL),
(31, 'Angular', NULL, NULL),
(32, 'RxJS', NULL, NULL),
(33, 'NgRx', NULL, NULL),
(34, 'Vue.js', NULL, NULL),
(35, 'Vuex', NULL, NULL),
(36, 'Node.js', NULL, NULL),
(37, 'Express.js', NULL, NULL),
(38, 'Socket.io', NULL, NULL),
(39, 'Django', NULL, NULL),
(40, 'Laravel', NULL, NULL),
(41, 'Ruby on Rails', NULL, NULL),
(42, 'ASP.NET', NULL, NULL),
(43, 'Agile methodologies', NULL, NULL),
(44, 'Scrum', NULL, NULL),
(45, 'Kanban', NULL, NULL),
(46, 'Version control systems', NULL, NULL),
(47, 'Git', NULL, NULL),
(48, 'SVN', NULL, NULL),
(49, 'Object-oriented programming (OOP)', NULL, NULL),
(50, 'Software development life cycle (SDLC)', NULL, NULL),
(51, 'Singleton', NULL, NULL),
(52, 'Factory', NULL, NULL),
(53, 'Observer', NULL, NULL),
(54, 'Strategy', NULL, NULL),
(55, 'Model-View-Controller (MVC)', NULL, NULL),
(56, 'Refactoring', NULL, NULL),
(57, 'Android', NULL, NULL),
(58, 'Java/Kotlin', NULL, NULL),
(59, 'Android Studio', NULL, NULL),
(60, 'Android SDK', NULL, NULL),
(61, 'iOS', NULL, NULL),
(62, 'Swift', NULL, NULL),
(63, 'Xcode', NULL, NULL),
(64, 'UIKit', NULL, NULL),
(65, 'React Native', NULL, NULL),
(66, 'Expo', NULL, NULL),
(67, 'React Navigation', NULL, NULL),
(68, 'SQL', NULL, NULL),
(69, 'MySQL', NULL, NULL),
(70, 'PostgreSQL', NULL, NULL),
(71, 'Oracle', NULL, NULL),
(72, 'NoSQL', NULL, NULL),
(73, 'MongoDB', NULL, NULL),
(74, 'Firebase', NULL, NULL),
(75, 'Database optimization', NULL, NULL),
(76, 'Data modeling', NULL, NULL),
(77, 'AWS (Amazon Web Services)', NULL, NULL),
(78, 'EC2', NULL, NULL),
(79, 'S3', NULL, NULL),
(80, 'Lambda', NULL, NULL),
(81, 'DynamoDB', NULL, NULL),
(82, 'Azure', NULL, NULL),
(83, 'Azure Functions', NULL, NULL),
(84, 'Azure Storage', NULL, NULL),
(85, 'Azure Cosmos DB', NULL, NULL),
(86, 'Google Cloud', NULL, NULL),
(87, 'Google Compute Engine', NULL, NULL),
(88, 'Google Cloud Storage', NULL, NULL),
(89, 'Firestore', NULL, NULL),
(90, 'Serverless architecture', NULL, NULL),
(91, 'Infrastructure as Code (IaC)', NULL, NULL),
(92, 'Docker', NULL, NULL),
(93, 'Kubernetes', NULL, NULL),
(94, 'Helm', NULL, NULL),
(95, 'Kubectl', NULL, NULL),
(96, 'Continuous Integration and Continuous Deployment (CI/CD)', NULL, NULL),
(97, 'Jenkins', NULL, NULL),
(98, 'Ansible', NULL, NULL),
(99, 'Puppet', NULL, NULL),
(100, 'Chef', NULL, NULL),
(101, 'Terraform', NULL, NULL),
(102, 'ELK stack (Elasticsearch, Logstash, Kibana)', NULL, NULL),
(103, 'Prometheus', NULL, NULL),
(104, 'Grafana', NULL, NULL),
(105, 'Full-stack development', NULL, NULL),
(106, 'User research', NULL, NULL),
(107, 'Wireframing and prototyping', NULL, NULL),
(108, 'Usability testing', NULL, NULL),
(109, 'Interaction design', NULL, NULL),
(110, 'Information architecture', NULL, NULL),
(111, 'Visual design', NULL, NULL),
(112, 'Typography', NULL, NULL),
(113, 'Color theory', NULL, NULL),
(114, 'Iconography', NULL, NULL),
(115, 'Test-driven development (TDD)', NULL, NULL),
(116, 'Unit testing', NULL, NULL),
(117, 'Integration testing', NULL, NULL),
(118, 'Test automation', NULL, NULL),
(119, 'JUnit (Java)', NULL, NULL),
(120, 'pytest (Python)', NULL, NULL),
(121, 'Selenium', NULL, NULL),
(122, 'Data manipulation', NULL, NULL),
(123, 'Data cleaning', NULL, NULL),
(124, 'Data visualization techniques', NULL, NULL),
(125, 'TensorFlow', NULL, NULL),
(126, 'Keras', NULL, NULL),
(127, 'PyTorch', NULL, NULL),
(128, 'scikit-learn', NULL, NULL),
(129, 'Neural networks', NULL, NULL),
(130, 'Deep learning', NULL, NULL),
(131, 'Model training and evaluation', NULL, NULL),
(132, 'Artificial intelligence (AI)', NULL, NULL),
(133, 'Natural language processing (NLP)', NULL, NULL),
(134, 'Network security', NULL, NULL),
(135, 'Information security', NULL, NULL),
(136, 'Encryption', NULL, NULL),
(137, 'Vulnerability assessment', NULL, NULL),
(138, 'Incident response', NULL, NULL),
(139, 'Network configuration', NULL, NULL),
(140, 'Routing and switching', NULL, NULL),
(141, 'IT infrastructure management', NULL, NULL),
(142, 'Server administration', NULL, NULL),
(143, 'Virtualization', NULL, NULL),
(144, 'Storage management', NULL, NULL),
(145, 'Network monitoring', NULL, NULL),
(146, 'Test planning and strategy', NULL, NULL),
(147, 'Test case design', NULL, NULL),
(148, 'Manual testing', NULL, NULL),
(149, 'Automated testing', NULL, NULL),
(150, 'Performance testing', NULL, NULL),
(151, 'Regression testing', NULL, NULL),
(152, 'Agile/Scrum methodology', NULL, NULL),
(153, 'Waterfall methodology', NULL, NULL),
(154, 'Project planning and scheduling', NULL, NULL),
(155, 'Risk management', NULL, NULL),
(156, 'Stakeholder management', NULL, NULL),
(157, 'API documentation', NULL, NULL),
(158, 'User manuals', NULL, NULL),
(159, 'Technical specifications', NULL, NULL),
(160, 'Markdown', NULL, NULL),
(161, 'Sphinx', NULL, NULL),
(162, 'Doxygen', NULL, NULL),
(163, 'Troubleshooting and problem-solving', NULL, NULL),
(164, 'Windows', NULL, NULL),
(165, 'Linux', NULL, NULL),
(166, 'Bash scripting', NULL, NULL),
(167, 'Server configuration', NULL, NULL),
(168, 'TCP/IP', NULL, NULL),
(169, 'DNS', NULL, NULL),
(170, 'HTTP', NULL, NULL),
(171, 'SSL/TLS', NULL, NULL),
(172, 'Hadoop', NULL, NULL),
(173, 'Spark', NULL, NULL),
(174, 'Apache Kafka', NULL, NULL),
(175, 'Apache Hive', NULL, NULL),
(176, 'Apache Pig', NULL, NULL),
(177, 'Smart contracts', NULL, NULL),
(178, 'Solidity', NULL, NULL),
(179, 'Ethereum', NULL, NULL),
(180, 'Hyperledger', NULL, NULL),
(181, 'Unity', NULL, NULL),
(182, 'Unreal Engine', NULL, NULL),
(183, 'VR/AR development frameworks', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'test@gmail.com', 'aaaaaaaa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employers`
--
ALTER TABLE `Employers`
  ADD PRIMARY KEY (`EmployerID`);

--
-- Indexes for table `JobApplications`
--
ALTER TABLE `JobApplications`
  ADD PRIMARY KEY (`JobApplicationID`),
  ADD KEY `jobapplications_jobseekerid_foreign` (`JobSeekerID`);

--
-- Indexes for table `JobPosts`
--
ALTER TABLE `JobPosts`
  ADD PRIMARY KEY (`JobPostID`),
  ADD KEY `jobposts_employerid_foreign` (`EmployerID`);

--
-- Indexes for table `JobSeekers`
--
ALTER TABLE `JobSeekers`
  ADD PRIMARY KEY (`JobSeekerID`);

--
-- Indexes for table `JobSeekerSkills`
--
ALTER TABLE `JobSeekerSkills`
  ADD PRIMARY KEY (`JobSeekerSkillID`),
  ADD KEY `jobseekerskills_jobseekerid_foreign` (`JobSeekerID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `Skills`
--
ALTER TABLE `Skills`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `superuser_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employers`
--
ALTER TABLE `Employers`
  MODIFY `EmployerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `JobApplications`
--
ALTER TABLE `JobApplications`
  MODIFY `JobApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `JobPosts`
--
ALTER TABLE `JobPosts`
  MODIFY `JobPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `JobSeekers`
--
ALTER TABLE `JobSeekers`
  MODIFY `JobSeekerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `JobSeekerSkills`
--
ALTER TABLE `JobSeekerSkills`
  MODIFY `JobSeekerSkillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Skills`
--
ALTER TABLE `Skills`
  MODIFY `SkillID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `JobApplications`
--
ALTER TABLE `JobApplications`
  ADD CONSTRAINT `jobapplications_jobseekerid_foreign` FOREIGN KEY (`JobSeekerID`) REFERENCES `JobSeekers` (`JobSeekerID`);

--
-- Constraints for table `JobPosts`
--
ALTER TABLE `JobPosts`
  ADD CONSTRAINT `jobposts_employerid_foreign` FOREIGN KEY (`EmployerID`) REFERENCES `Employers` (`EmployerID`);

--
-- Constraints for table `JobSeekerSkills`
--
ALTER TABLE `JobSeekerSkills`
  ADD CONSTRAINT `jobseekerskills_jobseekerid_foreign` FOREIGN KEY (`JobSeekerID`) REFERENCES `JobSeekers` (`JobSeekerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
