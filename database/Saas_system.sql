-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2023 at 07:30 AM
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
-- Database: `Saas_system`
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
  `SubsDay` int(255) DEFAULT NULL,
  `SubsSrtDate` date DEFAULT NULL,
  `SubsEndDate` date DEFAULT NULL,
  `SubsType` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Employers`
--

INSERT INTO `Employers` (`EmployerID`, `verification_token`, `is_verified`, `SocialId`, `CompanyName`, `BusinessEmail`, `PasswordHash`, `FullName`, `RoleInCompany`, `AboutCompany`, `CompanyMission`, `WebsiteURL`, `Logo`, `Banner`, `Email`, `LinkedInURL`, `PhoneNumber`, `Location`, `SubsDay`, `SubsSrtDate`, `SubsEndDate`, `SubsType`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, NULL, 'assd', 'admin@gmail.com', '$2y$10$heTT9jHwpASF46H6MOu./ectIGC1vuNLGb8nIriS.6WlMbsws.sVa', 'fsfsd', 'Project Manager', 'Our mission at XYZ Company is to provide exceptional products and services to our customers while maintaining the highest standards of quality, integrity, and innovation. We strive to be a leader in our industry by continuously adapting to the changing needs of our clients and delivering solutions that exceed their expectations.\r\n\r\nWe are committed to building long-term relationships with our customers, employees, and partners based on trust, mutual respect, and shared success. By fostering a collaborative and inclusive work environment, we empower our team members to unleash their full potential and contribute to the growth and success of the company.\r\n\r\nAt XYZ Company, we believe in making a positive impact on society and the environment. We are dedicated to conducting our business in a responsible and sustainable manner, minimizing our ecological footprint, and actively supporting social causes that align with our values.\r\n\r\nThrough continuous innovation, research, and development, we strive to stay at the forefront of our industry. We embrace new technologies and leverage data-driven insights to drive efficiency, improve processes, and deliver the best possible solutions to our customers.\r\n\r\nOur goal is to be recognized as a trusted partner and a company that consistently delivers value, excellence, and customer satisfaction. We are committed to continuous improvement, learning from our experiences, and adapting to the ever-changing business landscape.\r\n\r\nThank you for choosing XYZ Company. We are excited to embark on this journey together and contribute to your success.', '<p>1.Our mission at XYZ Company</p>\r\n<p><a href=\"sdfsf\">&nbsp;is to provide exce</a>ptional products and services to our customers while maintaining the highest standards of quality, integrity, and innovation. We strive to be a leader in our industry by continuously adapting to the changing needs of our clients and delivering solutions that exceed their expectations. We are committed to building long-term relationships with our customers, employees, and partners based on trust, mutual respect, and shared success. By fostering a collaborative and inclusive work environment, we empower our team members to unleash their full potential and contribute to the growth and success of the company. At XYZ Company, we believe in making a positive impact on society and the environment. We are dedicated to conducting our business in a responsible and sustainable manner, minimizing our ecological footprint, and actively supporting social causes that align with our values. Through continuous innovation, research, and development, we strive to stay at the forefront of our industry. We embrace new technologies and leverage data-driven insights to drive efficiency, improve processes, and deliver the best possible solutions to our customers. Our goal is to be recognized as a trusted partner and a company that consistently delivers value, excellence, and customer satisfaction. We are committed to continuous improvement, learning from our experiences, and adapting to the ever-changing business landscape. Thank you for choosing XYZ Company. We are excited to embark on this journey together and contribute to your success.</p>', 'sfdsf', 'logo1686777018.png', 'banner1686777018.png', 'fsfd@sf.dsff', 'sdfs.com', '242342', 'London, England, United Kingdom\n', NULL, NULL, NULL, 0, '2023-06-02 17:43:44', '2023-06-20 10:15:34'),
(2, NULL, 0, NULL, 'it support', 'admin@gmail.co', '$2y$10$ba0VxWq3LC9O.2aamM79X.sUu1ly/oNYTH9dd3hQ2he2NRPRmJ/C.', 'mofiz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sydney, New South Wales, Australia\n', NULL, NULL, NULL, 0, '2023-06-02 17:49:27', '2023-06-02 17:49:27'),
(3, NULL, 0, NULL, 'store shop', 'admin@ail.com', '$2y$10$5GnGOL6EDoVEWJ04VsLQFe9hgOD5ZSX.oP2AYTVuSvAUpq1yUJcYC', 'afraz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tokyo, Tokyo, Japan\n', NULL, NULL, NULL, 0, '2023-06-02 17:50:02', '2023-06-02 17:50:02'),
(4, NULL, 0, NULL, 'shahid ltd', 'admin@gmail.comjj', '$2y$10$7ayV4/H02cZazlkzK2TUa.JABLqn6o41G/qRnNs30V0a2o7dtvOFa', 'jisan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Paris, Île-de-France, France\n', NULL, NULL, NULL, 0, '2023-06-02 17:50:56', '2023-06-02 17:50:56'),
(5, NULL, 0, NULL, 'ltd shop', 'admin@gmail.comafsf', '$2y$10$t/7kecTtJHoNwtYhBDYVB.qUa7x2vpzGLRCFkzP/OQJQ89iZn8yoC', 'hasib', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berlin, Berlin, Germany\n', NULL, NULL, NULL, 0, '2023-06-02 17:51:29', '2023-06-02 17:51:29'),
(6, NULL, 0, NULL, 'school shop', 'admin@gmail.comfgh', '$2y$10$QWpFUzqlbZFJxAoJB1vFC.BryhZ382DYLxjsM2f5uTgVFU4UxoD6.', 'rifat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beijing, Beijing, China\n', NULL, NULL, NULL, 0, '2023-06-02 17:52:22', '2023-06-02 17:52:22'),
(7, NULL, 0, NULL, 'sakib', 'admin@gmail.comdfdfe', '$2y$10$DnAFlhJ8yt12F1uToUtBFONF4haSm8XrFHivnFftb/4a8oCYaP2pO', 'rasel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Moscow, Moscow, Russia\n', NULL, NULL, NULL, 0, '2023-06-02 17:55:19', '2023-06-02 17:55:19'),
(8, NULL, 0, NULL, 'rifat', 'admin@gmail.comfdfd', '$2y$10$BN9iMTkfMliliouUT/XPles1Bt7UyNurXTrUEetofdA7DovFb697S', 'ohein', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rio de Janeiro, Rio de Janeiro, Brazil\n', NULL, NULL, NULL, 0, '2023-06-02 18:00:24', '2023-06-02 18:00:24'),
(9, NULL, 0, NULL, 'asif', 'fjdjfjf@fjf.jfdj', '$2y$10$x1OJ3WRBdznjBmvK7ESeYuIOrSk2UmSpds5.riVOmZU70X4ufcVUS', 'tanver', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rome, Lazio, Italy\n', NULL, NULL, NULL, 0, '2023-06-02 18:02:13', '2023-06-02 18:02:13'),
(10, NULL, 0, NULL, 'rakib', 'fdfd@fsdf.fd', '$2y$10$UQOFUi7DVgv88onj8Jyh8enBJpHfyXkv5pIyR4itGKhjLD42gveDS', 'akhil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cairo, Cairo Governorate, Egypt\n', NULL, NULL, NULL, 0, '2023-06-02 18:03:50', '2023-06-02 18:03:50'),
(11, NULL, 0, NULL, 'alif', 'fdfd@fsdf.fddsd', '$2y$10$KTCx8eUUuKRsuom3aIzkxuUEbz0SCR8zNkocmyOEV/AXn7Q00TV66', 'ashraf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toronto, Ontario, Canada\n', NULL, NULL, NULL, 0, '2023-06-02 18:07:20', '2023-06-02 18:07:20'),
(12, NULL, 0, NULL, 'arman', 'fjdjfjf@fjf.jfdjdllfllfl', '$2y$10$eMCQ6ZrBPF99UvfVonvdUehSBlab5oXIkHHHr4U6kFcyAIif.XzPW', 'akib', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cape Town, Western Cape, South Africa\n', NULL, NULL, NULL, 0, '2023-06-02 18:11:41', '2023-06-02 18:11:41'),
(13, NULL, 0, NULL, 'ashik', 'fsdf@vfv.cdc', '$2y$10$9NQuBtu7IM1VF64dW5sV.O8taKoEVqYQuP6syqKvmcFufIP8Si5Ye', 'akto', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mumbai, Maharashtra, India\n', NULL, NULL, NULL, 0, '2023-06-02 18:14:01', '2023-06-02 18:14:01'),
(14, NULL, 0, NULL, 'labratory ltd', 'dfs@fsffe.fwef', '$2y$10$T80vIz1fI0rn5n0IkNyHhOtlHU7n90ZxTq1F8d7wGjeIKmG.yb1.q', 'asif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dubai, Dubai, United Arab Emirates\n', NULL, NULL, NULL, 0, '2023-06-02 18:18:20', '2023-06-02 18:18:20'),
(15, NULL, 0, NULL, 'strip ltd', 'sdf@fddf.ds', '$2y$10$YSjACj8.1imKHHMn6e.G2.lb5XVRcV8ipetAJT2dKjyRtulFf.fHW', 'faas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Buenos Aires, Buenos Aires, Argentina\n', NULL, NULL, NULL, 0, '2023-06-02 18:20:36', '2023-06-02 18:20:36'),
(16, NULL, 0, NULL, 'poraha', 'hbh@bh.inni', '$2y$10$1VrpHvZfp.ycsSUwBGlE3uzX86XoAQZ8r5vAHsjI3idBpe2eNaR8y', 'ddss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-02 18:23:00', '2023-06-02 18:23:00'),
(17, NULL, 0, NULL, 'ratrih', 'hbh@bh.inniff', '$2y$10$GgrSEr32z4mra83AYeOJleNB2N3omb2UoEhybX1sVvBe4g6Iqsdsq', 'ffda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-02 18:45:06', '2023-06-02 18:45:06'),
(18, NULL, 0, NULL, 'danke', 'somethng@gmail.com', '$2y$10$Gn30Ls5yoTGYIC/9m3z5nekAk5R4327wqIO9J86d7CSPY1g5WnFtW', 'sdfff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-04 11:24:40', '2023-06-04 11:24:40'),
(19, NULL, 0, NULL, 'nacht', 'admin@gmail.comnjmuiono', '$2y$10$ibrmi4tZm2TnjuUXVQ1DDedrOJIpFmP/huBIOeLFmYcX0my3YgHmq', 'sdff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-05 01:14:57', '2023-06-05 01:14:57'),
(20, NULL, 0, NULL, 'gute tag', 'admin@gmail.comrregwrf', '$2y$10$Hyub2GiqwlwvSrDqgkEmX./fgeAPKEuP4BlHz19H8rnEI4TbLj1Ri', 'dadf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-05 01:21:34', '2023-06-05 01:21:34'),
(21, NULL, 0, NULL, 'gggf', 'my@gmail.com', '$2y$10$zGIG3sZggT3MSEkTqb2a3.wbZoVtvpQ9hCDBQbtkHpkyNtEI93xQq', 'dffa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seoul, Seoul, South Korea\n', NULL, NULL, NULL, 0, '2023-06-05 01:50:14', '2023-06-05 02:12:53'),
(28, NULL, 1, '100645962613473787563', NULL, 'murad305bp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-10 06:56:37', '2023-07-10 06:56:37'),
(29, NULL, 1, 'KpE3Wtw0do', NULL, 'towhidulislamsaimon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-10 06:57:08', '2023-07-10 06:57:08'),
(31, NULL, 1, NULL, 'Innovation IT', 'comsixsem@gmail.com', '$2y$10$k3kJmyNEkjE4uUV2OSfrneIJlT3m8Dx/NDxKobMGCxHG3yrv.5OnS', 'Tanvir Islam', 'HR', '<p>At [Company Name], we are a dynamic and forward-thinking technology company that specializes in delivering innovative solutions to meet the evolving needs of businesses and individuals worldwide. With a rich history rooted in groundbreaking advancements, we have established ourselves as a trusted leader in the industry, known for our unwavering commitment to quality, reliability, and exceptional customer service.</p>\r\n<p>Driven by a passion for technology and a vision for the future, we continuously strive to push the boundaries of what is possible. Our diverse team of experts, comprising brilliant minds from various disciplines, works collaboratively to develop groundbreaking software, cutting-edge hardware, and revolutionary digital experiences. We pride ourselves on our ability to transform complex ideas into elegant and practical solutions that empower our clients to thrive in a rapidly changing digital landscape.</p>\r\n<p>Our comprehensive range of products and services caters to a broad spectrum of industries, including finance, healthcare, retail, manufacturing, and more. From enterprise software solutions that optimize business operations to intuitive mobile applications that enhance user experiences, we have the expertise and versatility to tackle any technological challenge. Our solutions are meticulously designed to not only meet our clients\' immediate needs but also future-proof their operations, ensuring scalability, adaptability, and long-term success.</p>\r\n<p>At [Company Name], we believe that innovation is driven by collaboration and knowledge sharing. We foster a culture of continuous learning and growth, encouraging our team members to stay abreast of emerging trends, explore new technologies, and expand their skill sets. This dedication to ongoing development enables us to stay ahead of the curve and deliver state-of-the-art solutions that anticipate market demands and drive industry innovation.</p>\r\n<p>Customer satisfaction is at the core of everything we do. We take the time to understand our clients\' unique requirements, challenges, and goals, and tailor our solutions accordingly. Our dedicated customer support team is always ready to provide timely assistance, ensuring a seamless experience from implementation to ongoing maintenance. We value the relationships we build with our clients, and their success is our ultimate measure of achievement.</p>\r\n<p>Beyond our commitment to our clients, we also recognize our responsibility to make a positive impact on the world around us. We embrace sustainability and social responsibility, integrating eco-friendly practices into our operations and supporting initiatives that drive positive change. We believe that technology has the power to address global challenges and create a better future, and we actively seek opportunities to contribute to the greater good.</p>\r\n<p>As we continue on our journey, we remain steadfast in our mission to harness the power of technology to transform industries, empower individuals, and shape a brighter future. Together with our clients and partners, we are poised to make a lasting impact in a rapidly evolving digital landscape. Join us as we embark on an exciting adventure, where innovation knows no bounds, and the possibilities are limitless.</p>', '<p>At [Company Name], our unwavering mission is to empower individuals and businesses with cutting-edge technologies that transcend boundaries, revolutionize industries, and inspire new possibilities. With a relentless pursuit of excellence, we are dedicated to delivering exceptional solutions that not only streamline operations and boost productivity but also ignite imaginations and foster innovation.</p>\r\n<p>In today\'s fast-paced and ever-evolving world, we are driven by a deep-rooted passion for technological advancement and a commitment to staying at the forefront of innovation. Through our avant-garde software solutions and services, we catalyze digital transformation, helping our clients navigate the complexities of the modern landscape with confidence and ease. We pride ourselves on our ability to create engaging user experiences, simplify intricate processes, and optimize workflows, enabling our clients to thrive in an era of constant change.</p>\r\n<p>Harnessing the power of emerging technologies such as artificial intelligence, data analytics, cloud computing, and more, we embark on a journey of discovery, constantly pushing the boundaries of what is possible. Our team of seasoned experts, armed with a wealth of technical acumen and industry insights, collaborates closely with our clients to co-create bespoke solutions that surpass expectations and drive tangible business outcomes.</p>\r\n<p>Customer satisfaction lies at the heart of our mission. We go above and beyond to build strong, enduring partnerships with our clients, grounded in trust, transparency, and exceptional service. We approach every engagement as a true collaboration, taking the time to truly understand our clients\' unique needs and objectives. Through continuous support, open communication, and a commitment to continuous improvement, we ensure that our clients\' success remains at the forefront of everything we do.</p>\r\n<p>Our company culture thrives on a foundation of perpetual learning and a passion for innovation. We foster an environment where creativity flourishes, encouraging our team members to push boundaries, think outside the box, and embrace intellectual curiosity. By nurturing a culture of continuous growth and knowledge sharing, we empower our employees to remain at the vanguard of emerging trends, empowering our clients with the most forward-thinking solutions available.</p>\r\n<p>Moreover, we recognize the significance of social responsibility and strive to make a positive impact on both local and global communities. We actively seek opportunities to champion sustainability, support charitable initiatives, and contribute to the greater good. By aligning our actions with our values, we aspire to create a brighter future for generations to come.</p>\r\n<p>In conclusion, our mission at [Company Name] is to empower individuals and businesses with visionary technologies, unparalleled services, and an unwavering commitment to customer satisfaction. We are steadfast in our pursuit of innovation, dedicated to driving positive change, and unwavering in our belief that technology has the power to shape a brighter, more prosperous future. Together, let us transcend boundaries, unlock limitless possibilities, and redefine what is possible in the digital age.</p>', 'innovationit.com', 'logo1689059254.jpg', 'banner1689059254.jpg', 'innovationit85@gmail.com', 'linkden.com/inovationit', '01885679384', 'Oxygen,Chittagong,Bangladesh', 31, '2023-07-12', '2023-08-12', 1, '2023-07-10 11:01:29', '2023-07-12 05:11:05'),
(32, 'employer/R13PTvrZceVzkEUNB1ElnlSrPL90Fcm1A9zPCkot', 0, NULL, NULL, 'comsixsem@gmail.comdfsd', '$2y$10$sHDrqhBIJuZUGllgiXgXyOj/hYde/qC6DmLIwznzoOwVydox3QpD.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-12 05:28:49', '2023-07-12 05:28:49');

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
(2, 2, 8, 'byxep@mailinator.com', 'fenaco@mailinator.com', '86', 'jevy@mailinator.com', 'vifixy@mailinator.com', 'qoqusoho@mailinator.com', 'apply_cover1687166937.pdf', 1, '2023-06-19 03:28:57', '2023-06-19 03:28:57'),
(4, 1, 8, 'juqax@mailinator.com', 'jegihexiw@mailinator.com', '639', 'sacuxave@mailinator.com', 'caqefigin@mailinator.com', 'temikoloso@mailinator.com', 'apply_cover1687167112.pdf', 1, '2023-06-19 03:31:52', '2023-06-19 03:31:52'),
(5, 1, 8, 'qerijot@mailinator.com', 'jufel@mailinator.com', '650', 'nasi@mailinator.com', 'ruxahuh@mailinator.com', 'qybykagako@mailinator.com', 'apply_cover1687167187.pdf', 1, '2023-06-19 03:33:07', '2023-06-19 03:33:07'),
(6, 1, 8, 'meje@mailinator.com', 'pafyc@mailinator.com', '751', 'loboto@mailinator.com', 'fynukago@mailinator.com', 'raxole@mailinator.com', 'apply_cover1687167251.pdf', 1, '2023-06-19 03:34:11', '2023-06-19 03:34:11'),
(9, 5, 13, 'testing@gmail.com', 'Sakib Alam', '09563423522', 'Agrabad,Chittagong,Bangladesh', 'N/A', 'N/A', 'apply_cover1688387649.pdf', 0, '2023-07-03 06:34:09', '2023-07-03 06:34:09'),
(10, NULL, 13, 'zuly@mailinator.com', 'dokaqy@mailinator.com', '439', 'vomoxure@mailinator.com', 'rego@mailinator.com', 'bapabal@mailinator.com', 'apply_cover1689010302.pdf', 1, '2023-07-10 11:31:42', '2023-07-10 11:31:42'),
(11, 27, 13, 'bozozix@mailinator.com', 'jupe@mailinator.com', '764', 'cexugug@mailinator.com', 'tygyny@mailinator.com', 'cynoq@mailinator.com', 'apply_cover1689010735.pdf', 1, '2023-07-10 11:38:55', '2023-07-10 11:38:55'),
(12, 27, 14, 'comsixsem@gmail.com', 'Ashraf Alam', '01874583453', 'Oxygen,Chittagong,Bangladesh', 'N/A', 'N/A', 'apply_cover1689061129.pdf', 1, '2023-07-11 01:38:49', '2023-07-11 01:38:49'),
(13, 27, 14, 'comsixsem@gmail.com', 'Ashraf Alam', '01893453929', 'Agrabad,Chittagong,Bangladesh', 'SEO Developer', 'John Smith 123 Main Street Anytown, USA 12345 johnsmith@email.com (555) 123-4567 [Date]  Jane Johnson ABC Company 456 Elm Street Anytown, USA 54321  Dear Ms. Johnson,  I am writing to apply for the Software Developer position at ABC Company, as advertised on the company website. With my strong technical skills, passion for coding, and commitment to delivering high-quality software solutions, I believe I would be a valuable asset to your team.  I have a Bachelor\'s degree in Computer Science from XYZ University, where I gained a solid foundation in programming languages such as Java, C++, and Python. During my studies, I completed several projects that involved developing web applications and implementing data structures. These experiences have enhanced my problem-solving abilities and attention to detail.  In my previous role as a Software Intern at XYZ Tech, I collaborated with a team of developers to create a mobile application that received positive user feedback and achieved a high rating on app stores. I also participated in code reviews and worked closely with senior developers to optimize software performance. Through these experiences, I have developed a deep understanding of software development best practices and a passion for delivering innovative solutions.  I am particularly drawn to ABC Company due to its reputation for cutting-edge technology and its commitment to creating innovative software products. I am impressed by the company\'s recent achievements, such as [mention a recent milestone or project]. I believe that my technical skills, creativity, and strong problem-solving abilities align well with ABC Company\'s goals and would enable me to make a meaningful contribution.  Enclosed is my resume, which provides additional details about my qualifications and experiences. I would welcome the opportunity to discuss how my skills and expertise align with the requirements of the Software Developer position at ABC Company. Thank you for considering my application.  I look forward to the possibility of contributing to ABC Company\'s success and would be grateful for the opportunity to interview for the position. Please feel free to contact me at your convenience to schedule an interview.  Thank you for your time and consideration.  Sincerely,  John Smith', 'apply_cover1689061278.pdf', 1, '2023-07-11 01:41:18', '2023-07-11 01:41:18');

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
  `PostExpired` date NOT NULL,
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
(8, 1, 'Vel temporibus exerc', 'Construction', '2023-06-18 06:50:00', '2023-12-22', '18.00', 'Full-time', 'Sydney, New South Wales, Australia\n', 'Aut dolore sunt odio', '$80k - $90k', 1, 1, '4', '2023-06-18 00:50:00', '2023-07-01 08:05:11'),
(9, 1, 'Vel Dolores enim ut aliq', 'Electrician', '2023-06-18 06:50:05', '2023-12-22', '51.00', 'Remote', 'Sydney, New South Wales, Australia\n', 'Deserunt et mollit a', '$60k - $90k', 1, 1, '4 to 5', '2023-06-18 00:50:05', '2023-06-19 13:01:14'),
(10, 1, 'VelDoloribus mollitia d', 'Civil Engineer', '2023-06-18 06:59:53', '2023-12-22', '1.00', 'Part-time', 'Remote', 'Sit numquam qui temp', '$90k - $120k', 1, 1, '1', '2023-06-18 00:59:53', '2023-06-19 13:01:18'),
(11, 2, 'Aliqua Ipsum facersdfshfbwifwifbnwifnwiufhnwufuwfh', 'UI designer', '2023-06-18 07:01:57', '2023-04-07', '92.00', 'Full-time', 'Berlin, Berlin, Germany\n', 'Aut ipsam magni mole', '$20k - $50k', 1, 1, '10 to 15', '2023-06-18 01:01:57', '2023-06-18 01:01:57'),
(12, 1, 'Deserunt quis itaque', 'Architect', '2023-06-19 07:55:59', '1997-05-27', '6.00', 'Part-time', 'Paris, Île-de-France, France\n', 'Cupidatat consequatu', '$50k - $100k', 1, 1, '7', '2023-06-19 01:55:59', '2023-06-19 01:55:59'),
(13, 1, 'Eum voluptatem tempo', 'Construction', '2023-06-19 07:56:10', '1973-01-05', '28.00', 'Full-time', 'London, England, United Kingdom\n', 'Dicta atque voluptat', '$30k - $60k', 1, 1, '8', '2023-06-19 01:56:10', '2023-06-19 01:56:10'),
(14, 31, 'Software Developer', 'Information Technology', '2023-07-11 07:20:59', '2023-06-15', '90000.00', 'Full-time', 'Anytown,Alaska, SA', '<p>We are seeking a skilled and motivated Software Developer to join our dynamic team. In this role, you will be responsible for designing, developing, and maintaining high-quality software solutions that meet our clients\' needs. The ideal candidate will have a strong background in software development, excellent problem-solving skills, and a passion for innovation.</p>', '$70k - $90k', 1, 1, NULL, '2023-07-11 01:20:59', '2023-07-11 01:20:59'),
(15, 31, 'Digital Marketing Specialist', 'Marketing', '2023-07-11 07:24:02', '2023-07-31', '50000.00', 'Remote', 'Remote', '<p>We are looking for a talented Digital Marketing Specialist to join our marketing team. As a specialist, you will be responsible for developing and implementing digital marketing strategies, managing online advertising campaigns, and analyzing campaign performance. The ideal candidate will have a strong background in digital marketing, proficiency in various marketing tools and platforms, and a data-driven approach to decision-making</p>', '$50k - $65k', 1, 1, NULL, '2023-07-11 01:24:02', '2023-07-11 01:24:02');

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
  `MessagePermit` tinyint(1) DEFAULT NULL,
  `SubsDay` int(255) DEFAULT NULL,
  `SubsSrtDate` date DEFAULT NULL,
  `SubsEndDate` date DEFAULT NULL,
  `SubsType` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobSeekers`
--

INSERT INTO `JobSeekers` (`JobSeekerID`, `verification_token`, `is_verified`, `SocialId`, `FullName`, `Email`, `PasswordHash`, `WorkingFor`, `ProfilePhoto`, `LinkedInURL`, `PhoneNumber`, `Location`, `WorkTitle`, `CurrentCompanyName`, `WorkStart`, `WorkEnd`, `AppExperienceReview`, `SalaryExpectation`, `Resume`, `AvailableForWork`, `MessagePermit`, `SubsDay`, `SubsSrtDate`, `SubsEndDate`, `SubsType`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, NULL, 'sakib', 'admin@gmail.com', '$2y$10$sdZ4iF98xZ5EMwqpcbYUoujtlQjSK0SAbgC17pQNnI.DbszxMZFba', 'sdfsf', 'profile_photo1687025202.png', 'sfdsfs', '3223e2', 'sdfsf', 'safsdf', 'asdfsas', '2023-06-01 00:00:00', '2023-09-22 00:00:00', 1, '243243.00', 'resume1687030258.txt', 1, 1, NULL, NULL, NULL, 0, '2023-06-05 04:20:49', '2023-06-18 00:39:20'),
(2, NULL, 0, NULL, 'asif', 'admin@gmail.comfsd', '$2y$10$3ytBSxd9csVGBomduk.tzOY8uSQxHHLDUaqnDCbTP4cSzVkK3y/qa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-05 05:27:24', '2023-06-05 05:27:24'),
(3, NULL, 0, NULL, 'rahat', 'admin@gmail.comfdsf', '$2y$10$NevjAOmOksDijfSo6v6YluvpLDot3Xhb8WaXzTWy0CdwUvdciFbuq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-06-05 05:27:39', '2023-06-05 05:27:39'),
(4, NULL, 0, NULL, NULL, 'amifdf@gmail.com', '$2y$10$uKdOwDCpp.8getRvpoXaw.isIJQF.it/CHbtvE2sbE4lHL/7Eb/J.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-03 05:31:36', '2023-07-03 05:31:36'),
(5, NULL, 0, NULL, 'Sakib Alam', 'testing@gmail.com', '$2y$10$5tG6weRQTQ14qsEvwnl.q.tNOlFkXAuTiJF.0xxrMCQcBZo8gjmeq', 'Website Design', 'profile_photo1688387071.jpg', 'linkden.com/testing', '098657487', 'Agrabad,Chittagong,Bangladesh', 'Web designer', 'IT Explorer', '2022-01-03 00:00:00', '2023-06-30 00:00:00', 1, '10000.00', 'resume1688384728.pdf', 1, 1, NULL, NULL, NULL, 0, '2023-07-03 05:32:11', '2023-07-03 06:24:31'),
(25, NULL, 1, '100645962613473787563', NULL, 'murad305bp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-10 06:54:19', '2023-07-10 06:54:19'),
(26, NULL, 1, 'KpE3Wtw0do', NULL, 'towhidulislamsaimon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-07-10 06:55:33', '2023-07-10 06:55:33'),
(27, NULL, 1, NULL, 'Ashraf Alam', 'comsixsem@gmail.com', '$2y$10$MQDh.BOrBd0CZi81vxSxb.QNbFzhbAIR3r8flJKxHdqklajZSKL9i', 'SEO Developer', 'profile_photo1689058990.jpg', 'linkden.com/testing', '01875784738', 'Oxygen,Chittagong,Bangladesh', 'SEO Developing', 'Innovation IT', '2021-02-09 00:00:00', '2023-06-20 00:00:00', 1, '70000.00', 'resume1689059122.pdf', 1, 1, 31, '2023-07-12', '2023-08-12', 3, '2023-07-10 07:00:38', '2023-07-12 05:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `JobSeekerSkills`
--

CREATE TABLE `JobSeekerSkills` (
  `JobSeekerSkillID` int(10) NOT NULL,
  `JobSeekerID` int(11) DEFAULT NULL,
  `SkillID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `JobSeekerSkills`
--

INSERT INTO `JobSeekerSkills` (`JobSeekerSkillID`, `JobSeekerID`, `SkillID`, `created_at`, `updated_at`) VALUES
(8, 1, 3, '2023-06-18 00:39:20', '2023-06-18 00:39:20'),
(134, 5, 5, '2023-07-03 06:24:31', '2023-07-03 06:24:31'),
(135, 5, 9, '2023-07-03 06:24:31', '2023-07-03 06:24:31'),
(136, 5, 10, '2023-07-03 06:24:31', '2023-07-03 06:24:31'),
(137, 5, 17, '2023-07-03 06:24:31', '2023-07-03 06:24:31'),
(159, 27, 3, '2023-07-11 01:05:22', '2023-07-11 01:05:22'),
(160, 27, 5, '2023-07-11 01:05:22', '2023-07-11 01:05:22'),
(161, 27, 7, '2023-07-11 01:05:22', '2023-07-11 01:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_type` varchar(255) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_type` varchar(255) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_type`, `sender_id`, `receiver_type`, `receiver_id`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Employers', 4, 'JobSeekers', 1, 'other thing', '2023-06-02 12:27:38', NULL),
(7, 'JobSeekers', 2, 'JobSeekers', 3, 'somehitn g fodjnijg', '2023-06-07 12:28:18', NULL),
(8, 'Employers', 1, 'JobSeekers', 1, 'dfasff', '2023-06-08 12:28:25', NULL),
(9, 'JobSeekers', 1, 'Employers', 1, 'sdfsfsfsf', '2023-06-09 12:28:36', NULL),
(10, 'Employers', 3, 'Employers', 1, 'something else', '2023-06-12 13:25:35', NULL),
(17, 'JobSeekers', 1, 'Employers', 1, 'hello sir i have to tell u something', '2023-06-30 11:29:57', '2023-06-30 11:29:57'),
(18, 'Employers', 1, 'JobSeekers', 1, 'what do u want from me', '2023-06-30 11:30:31', '2023-06-30 11:30:31'),
(19, 'JobSeekers', 1, 'Employers', 1, 'hello sir i have to tell u something', '2023-06-30 11:31:16', '2023-06-30 11:31:16'),
(20, 'JobSeekers', 1, 'Employers', 1, 'hello sir i have to tell u something', '2023-06-30 11:31:19', '2023-06-30 11:31:19'),
(21, 'JobSeekers', 1, 'Employers', 1, 'hello sir i have to tell u something', '2023-06-30 11:31:22', '2023-06-30 11:31:22'),
(22, 'JobSeekers', 1, 'Employers', 1, 'something', '2023-06-30 11:31:25', '2023-06-30 11:31:25'),
(23, 'Employers', 1, 'JobSeekers', 1, 'tell me more about u', '2023-06-30 12:32:59', '2023-06-30 12:32:59'),
(24, 'JobSeekers', 1, 'Employers', 1, 'i was working for some company', '2023-06-30 12:40:31', '2023-06-30 12:40:31'),
(25, 'Employers', 1, 'Employers', 3, 'something', '2023-07-01 04:31:18', '2023-07-01 04:31:18'),
(26, 'Employers', 1, 'Employers', 3, 'hello sir i have to tell u something', '2023-07-01 04:31:28', '2023-07-01 04:31:28'),
(27, 'Employers', 1, 'JobSeekers', 1, 'something', '2023-07-01 04:32:23', '2023-07-01 04:32:23'),
(28, 'Employers', 1, 'Employers', 3, 'fsdf', '2023-07-01 04:37:32', '2023-07-01 04:37:32'),
(29, 'JobSeekers', 1, 'Employers', 1, 'hlw', '2023-07-01 04:42:13', '2023-07-01 04:42:13'),
(30, 'JobSeekers', 1, 'Employers', 1, 'hello sir i have to tell u something hello sir i have to tell u something hello sir i have to tell u something hello sir i have to tell u something hello sir i have to tell u something hello sir i have to tell u something', '2023-07-01 04:45:11', '2023-07-01 04:45:11'),
(33, 'JobSeekers', 1, 'Employers', 1, 'hello brother i have to tell u something', '2023-07-02 05:38:34', '2023-07-02 05:38:34'),
(34, 'Employers', 1, 'JobSeekers', 1, 'tell me what do u wanna tell me', '2023-07-02 05:39:09', '2023-07-02 05:39:09'),
(35, 'Employers', 1, 'Employers', 3, 'fsdf', '2023-07-03 06:37:04', '2023-07-03 06:37:04'),
(36, 'Employers', 1, 'JobSeekers', 5, 'Asking for something', '2023-07-03 06:42:30', '2023-07-03 06:42:30'),
(37, 'JobSeekers', 5, 'Employers', 1, 'what do u want to say', '2023-07-03 06:43:14', '2023-07-03 06:43:14'),
(38, 'Employers', 31, 'Employers', 4, 'checking', '2023-07-11 01:34:59', '2023-07-11 01:34:59'),
(39, 'JobSeekers', 27, 'Employers', 31, 'checking', '2023-07-11 01:55:07', '2023-07-11 01:55:07'),
(40, 'Employers', 31, 'JobSeekers', 27, 'checking', '2023-07-11 01:55:25', '2023-07-11 01:55:25');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_02_225904_create_employers_table', 1),
(3, '2023_06_02_225904_create_job_applications_table', 1),
(4, '2023_06_02_225905_create_job_posts_table', 1),
(5, '2023_06_02_225905_create_job_seeker_skills_table', 1),
(6, '2023_06_02_225905_create_job_seekers_table', 1),
(7, '2023_06_02_225905_create_skills_table', 1),
(8, '2023_06_02_232201_add_foreign_keys', 1),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2023_06_24_122007_create_messages_table', 3),
(11, '2023_06_24_124651_create_messages_table', 4),
(12, '2023_06_26_083743_create_messages_table', 5),
(13, '2023_06_26_171638_create_messages_table', 6);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employers`
--
ALTER TABLE `Employers`
  MODIFY `EmployerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `JobApplications`
--
ALTER TABLE `JobApplications`
  MODIFY `JobApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `JobPosts`
--
ALTER TABLE `JobPosts`
  MODIFY `JobPostID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `JobSeekers`
--
ALTER TABLE `JobSeekers`
  MODIFY `JobSeekerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `JobSeekerSkills`
--
ALTER TABLE `JobSeekerSkills`
  MODIFY `JobSeekerSkillID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
