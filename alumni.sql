-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2020 at 05:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_events`
--

DROP TABLE IF EXISTS `academic_events`;
CREATE TABLE IF NOT EXISTS `academic_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'admin', 'pass', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `description`, `publication_status`) VALUES
(2, '../uploads/ms banner.jpg', 'Bkash Payment', '<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'hlw'),
(2, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'hlw'),
(3, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'hlw'),
(4, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'hlw'),
(5, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'hlw'),
(6, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'Hello Admin'),
(7, 'Shahriar Alam Rakib', 'shahriaralamrakib@gmail.com', 'Long Text', ''),
(8, 'Shahriar Alam Rakib', 'shahriaralamrakib@gmail.com', 'Long Text', 'A novel whose emotional depth belies its simple-seeming exterior... a gem of a book. Walking through new-fallen snow in the forest near their home, twelve-year-old Nicky Dillon and her father come upon something inconceivable: there, in the pristine winter sene, an abandoned infant wails, its survival made possible only by the coincidence of their having chosen this path for their evening stroll. Anita Shreve delivers her most powerful novel yet - a mesmerizing story of the secrets we keep and the secrets we unearth, and the power of forgiveness to mend even the most battered souls. \"Touches the very deepest human emotions\"-INDEPENDENT ON SUNDAY'),
(9, 'Mohammad Rakibul Alam', '', 'Long Text', 'lk'),
(12, '', '', '', ''),
(11, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Long Text', 'Required Test'),
(13, '', '', '', ''),
(14, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'dfgdf'),
(15, 'Mohammad Rakibul Alam', 'shahriaralamrakib@gmail.com', 'Checking contact form', 'ghfh'),
(16, 'MD Masud Sikdar', 'masudsikdar85@gmail.com', 'cancelled my all invoice', '\r\n<html>\r\n<head>\r\n<title>HTML email</title>\r\n</head>\r\n<body>\r\n<p>This email contains HTML Tags!</p>\r\n<table>\r\n<tr>\r\n<th>Firstname</th>\r\n<th>Lastname</th>\r\n</tr>\r\n<tr>\r\n<td>John</td>\r\n<td>Doe</td>\r\n</tr>\r\n</table>\r\n</body>\r\n</html>\r\n'),
(17, 'voucher.blade.php', 'admin@gmail.com', 'ddas.dj', '\r\n<html>\r\n<head>\r\n<title>Contact form Mail for Alumni</title>\r\n</head>\r\n<body>\r\n<p>You have got a mail</p>\r\n<table>\r\n<tr>\r\n<th>Name</th>\r\n<th>Email</th>\r\n<th>Subject</th>\r\n<th>Message</th>\r\n</tr>\r\n<tr>\r\n<td>voucher.blade.php</td>\r\n<td>admin@gmail.com</td>\r\n<td>ddas.dj</td>\r\n<td>adfads</td>\r\n</tr>\r\n</table>\r\n</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` int(11) NOT NULL,
  `institute_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_start_date`, `event_end_date`, `event_organizer`, `event_location`, `status`) VALUES
(6, 'Reunion of Sociology 6th Batch', '2020-07-01', '2020-07-31', 'Alumni', 'Central field, University of Dhaka.', 'On'),
(8, 'Reunion of Sociology 9th Batch', '2021-12-10', '2021-12-11', 'Alumni', 'TSC, University of Dhaka', 'On'),
(7, 'Reunion of Sociology 5th Batch', '2020-01-01', '2020-01-01', 'Alumni ', 'TSC, University of Dhaka', 'On'),
(9, 'Reunion of Sociology 4th Batch', '2020-01-01', '2020-01-01', 'Alumni', 'Central field, University of Dhaka.', 'On'),
(10, 'Reunion of Sociology 3rd Batch', '2020-01-01', '2020-01-01', 'Alumni', 'TSC, University of Dhaka', 'On');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(1000) NOT NULL,
  `status` varchar(4) NOT NULL,
  `expire_date` date DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news`, `status`, `expire_date`) VALUES
(38, '<p>Hello <strong>SAADU </strong>2</p>', 'Off', '2020-06-30'),
(39, 'Hello SAADU 1', 'On', '2020-06-30'),
(27, 'Status Off', 'On', '2020-06-10'),
(41, 'This is news', 'Off', '2020-06-10'),
(42, 'This is news expire_date two', 'On', '2020-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `organizer_committees`
--

DROP TABLE IF EXISTS `organizer_committees`;
CREATE TABLE IF NOT EXISTS `organizer_committees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `post` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about_us`, `mission`, `vision`) VALUES
(1, '<p>\r\n              Eis mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.\r\n            </p>\r\n            <p>\r\n              Iudico definiebas eos ea, dicat inermis hendrerit vel ei, legimus copiosae quo at. Per utinam corrumpit prodesset te, liber praesent eos an. An prodesset neglegentur qui, usu ancillae posidonium in, mea ex eros animal scribentur. Et simul fabellas sit.\r\n              Populo inimicus ne est.\r\n            </p>\r\n            <p>\r\n              Alii wisi phaedrum quo te, duo cu alia neglegentur. Quo nonumy detraxit cu, viderer reformidans ut eos, lobortis euripidis posidonium et usu. Sed meis bonorum minimum cu, stet aperiam qualisque eu vim, vide luptatum ei nec. Ei nam wisi labitur mediocrem.\r\n              Nam saepe appetere ut, veritus graecis minimum no vim. Vidisse impedit id per.\r\n            </p>', '<p>\r\n                      <strong>Augue iriure</strong> dolorum per ex, ne iisque ornatus veritus duo. Ex nobis integre lucilius sit, pri ea falli ludus appareat. Eum quodsi fuisset id, nostro patrioque qui id. Nominati eloquentiam in mea.\r\n                    </p>\r\n                    <p>\r\n                      No eum sanctus vituperata reformidans, dicant abhorreant ut pro. Duo id enim iisque praesent, amet intellegat per et, solet referrentur eum et.\r\n                    </p>', '<p>\r\n                      Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.\r\n                    </p>');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `slider_title`, `description`) VALUES
(3, 'img/slides/nivo/bg-5.jpg', '52nd Convocation', '9th Batch, Sociology, University of Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_batch_no` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_session` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_father_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_mother_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stu_present_address` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_permanent_address` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stu_marital_status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stu_password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stu_religion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `email` (`stu_email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `stu_name`, `stu_batch_no`, `stu_session`, `stu_dob`, `stu_father_name`, `stu_mother_name`, `stu_photo`, `stu_present_address`, `stu_permanent_address`, `stu_occupation`, `stu_marital_status`, `stu_gender`, `stu_contact`, `stu_email`, `stu_password`, `stu_religion`) VALUES
(5, 'Mohammad Rakibul Alam', '09', '2014-15', '1995-12-31', 'Md. Jalal Uddin', 'Sayeeda Akther', '../uploads/Formal Rakib.jpg', 'Room No-508, Social Science Faculty Building, University of Dhaka,', 'Room No-508, Social Science Faculty Building, University of Dhaka,', 'Self-Employed', 'Unmarried', 'Male', '01945578153', 'shahriaralamrakib@gmail.com', '123456', 'Islam'),
(4, 'Shakibul Hasan', '09', '2014-15', '1996-01-01', 'Abdul Ashid', 'Anwara Begum', '../uploads/IMG_20160801_213812_337.JPG', 'Tsc, University of Dhaka', 'Tsc, University of Dhaka', 'Self-Employed', 'Married', 'Male', '01945578153', 'shakibulsoc09@gmail.com', '123456', 'Islam'),
(6, 'Israt Jahan Rima', '09', '2014-15', '1995-01-01', 'Abdul Ashid', 'Anwara Begum', '../uploads/IMG_20160707_194947_393.JPG', 'Tsc, University of Dhaka', 'Tsc, University of Dhaka', 'Self-Employed', 'Married', 'Female', '01945578153', 'rima@gmail.com', '123456', 'Islam'),
(7, 'Maria Afroj ', '09', '2014-15', '1996-02-01', 'Habibur Rahman', 'Tahmina Akther', '../uploads/94193216_100372171665364_857010923771002880_n.jpg', 'Tsc, University of Dhaka', 'Tsc, University of Dhaka', 'Self-Employed', 'Married', 'Male', '01945578153', 'maria@gmail.com', '123456', 'Islam'),
(9, '0002', 'asdas', 'sadsad', '2020-01-01', 'asdas', 'asdasd', '../uploads/PGDICT-35(Project)_18052020.png', 'asdasd', 'sadasd', 'sdad', 'Unmarried', 'Male', 'asdsad', 'asdasd', '123', 'Christian'),
(10, '0003', 'cvcvcvb', 'dfdsfsdf', '2020-01-01', 'sdfsdfsdf', 'dsfsdfsdf', '../uploads/PGDICT-35(Project)_18052020.png', 'dsfsdfs', 'sdfsdf', 'sdfsdfs', 'Unmarried', 'Male', 'sdfsdf', 'sfdsdf', '123', 'Buddhism');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
