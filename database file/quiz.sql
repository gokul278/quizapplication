-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:31 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `userid` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`userid`, `username`, `password`, `name`, `type`) VALUES
(1001, 'gokul278', '12345678', 'GOKUL M', 'student'),
(1002, 'raja1234', '12345678', 'RAJA SARAVANAN', 'student'),
(1003, 'sam12345', '12345678', 'SAM', 'student'),
(5001, 'user1234', '12345678', 'GIRIDHARAN', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `questions_details`
--

CREATE TABLE `questions_details` (
  `id` int(100) NOT NULL,
  `quiz_name` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option_a` varchar(100) NOT NULL,
  `option_b` varchar(100) NOT NULL,
  `option_c` varchar(100) NOT NULL,
  `option_d` varchar(100) NOT NULL,
  `correct-option` varchar(100) NOT NULL,
  `1001_answer` varchar(100) NOT NULL,
  `1002_answer` varchar(100) NOT NULL,
  `1003_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions_details`
--

INSERT INTO `questions_details` (`id`, `quiz_name`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct-option`, `1001_answer`, `1002_answer`, `1003_answer`) VALUES
(1, 'Data Science - ( Quiz - 1 )', 'Point out the correct statement.', 'Raw data is original source of data', 'Preprocessed data is original source of data', 'Raw data is the data obtained after processing steps', 'None of the mentioned', 'option_a', 'Raw data is original source of data', 'None of the mentioned', ''),
(2, 'Data Science - ( Quiz - 1 )', 'Which of the following is performed by Data Scientist?', 'Define the question', 'Create reproducible code', 'Challenge results', 'All of the mentioned', 'option_d', 'Create reproducible code', 'Create reproducible code', ''),
(3, 'Data Science - ( Quiz - 1 )', 'Which of the following is the most important language for Data Science?', 'Java', 'Ruby', 'R', 'None of the mentioned', 'option_c', 'R', 'R', ''),
(4, 'Data Science - ( Quiz - 1 )', 'Which of the following approach should be used to ask Data Analysis question?', 'Find only one solution for particular problem', 'Find out the question which is to be answered', 'Find out answer from dataset without asking question', 'None of the mentioned', 'option_b', 'Find out the question which is to be answered', 'Find out the question which is to be answered', ''),
(5, 'Data Science - ( Quiz - 1 )', 'Which of the following is a key characteristic of a hacker?', 'Afraid to say they don’t know the answer', 'Willing to find answers on their own', 'Not Willing to find answers on their own', 'All of the mentioned', 'option_b', 'All of the mentioned', 'Willing to find answers on their own', ''),
(6, 'Big Data Framework', 'As companies move past the experimental phase with Hadoop, many cite the need for additional capabil', 'Improved data storage and information retrieval', 'Improved extract, transform and load features for data integration', 'Improved data warehousing functionality', 'Improved security, workload management, and SQL support', 'option_d', 'Improved data storage and information retrieval', 'Improved extract, transform and load features for data integration', 'Improved security, workload management, and SQL support'),
(7, 'Big Data Framework', 'According to analysts, for what can traditional IT systems provide a foundation when they’re integra', 'Big data management and data mining', 'Data warehousing and business intelligence', 'Management of Hadoop clusters', 'Collecting and storing unstructured data', 'option_a', 'Big data management and data mining', 'Data warehousing and business intelligence', 'Big data management and data mining'),
(8, 'Big Data Framework', 'Hadoop is a framework that works with a variety of related tools. Common cohorts include ___________', 'MapReduce, Hive and HBase', 'MapReduce, MySQL and Google Apps', 'MapReduce, Hummer and Iguana', 'MapReduce, Heron and Trumpet', 'option_a', 'MapReduce, Hive and HBase', 'MapReduce, Hive and HBase', 'MapReduce, Hive and HBase'),
(9, 'Big Data Framework', 'What was Hadoop named after?', 'Creator Doug Cutting’s favorite circus act', 'Cutting’s high school rock band', 'The toy elephant of Cutting’s son', 'A sound Cutting’s laptop made during Hadoop development', 'option_c', 'The toy elephant of Cutting’s son', 'The toy elephant of Cutting’s son', 'The toy elephant of Cutting’s son'),
(10, 'Big Data Framework', 'All of the following accurately describe Hadoop, EXCEPT ____________', 'Open-source', 'Real-time', 'Java-based', 'Distributed computing approach', 'option_b', 'Java-based', 'Real-time', 'Real-time'),
(21, 'PMDA ( Quiz 1 )', 'Predictive analytics uses statistics and ____ to determine future performance.', 'Algorithmic techniques', 'Modeling techniques', 'System development and design techniques', 'None of the mentioned above', 'option_b', 'Algorithmic techniques', 'Algorithmic techniques', ''),
(22, 'PMDA ( Quiz 1 )', 'Amongst which of the following is / are the applications of Predictive Analytics,', 'Translating voice to text for mobile phone messaging', 'Investment portfolio development', 'Weather forecasts', 'All of the mentioned above', 'option_d', 'Translating voice to text for mobile phone messaging', 'Investment portfolio development', ''),
(23, 'PMDA ( Quiz 1 )', 'Organizations are turning to predictive analytics to increase their bottom line and competitive adva', 'True', 'False', '', '', 'option_a', 'True', 'True', ''),
(24, 'PMDA ( Quiz 1 )', 'Predictive analytics is a process harnesses ____, often massive, data sets into models.', 'Heterogeneous', 'Storage', 'Network', 'None of the mentioned above', 'option_a', 'Heterogeneous', 'Heterogeneous', ''),
(25, 'PMDA ( Quiz 1 )', 'Amongst which of the following is / are the correct workflow of predictive analytics,', 'Import data → Clean the data → Develop a predictive model → Integrate the model', 'Clean the data → Develop a predictive model → Import data → Integrate the model', 'Clean the data → Develop a predictive model → Import data → Integrate the model', 'None of the mentioned above', 'option_a', 'Import data → Clean the data → Develop a predictive model → Integrate the model', 'Import data → Clean the data → Develop a predictive model → Integrate the model', ''),
(26, 'Web Technology ( Quiz 1 )', 'HTML stands for?', 'Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 'option_a', 'Hyper Text Markup Language', 'Hyper Text Markup Language', ''),
(27, 'Web Technology ( Quiz 1 )', 'Markup tags tell the web browser', 'How to organise the page', 'How to display the page', 'How to display message box on page', 'None of these', 'option_a', 'How to organise the page', 'How to organise the page', ''),
(28, 'Web Technology ( Quiz 1 )', 'The HTML and HTTP standard are defined by ____', 'Web client', 'Internet association', 'WWW consortium', 'WWW', 'option_c', 'WWW consortium', 'WWW consortium', ''),
(29, 'Web Technology ( Quiz 1 )', 'The ____ passes the information given by the user to a specified program.', 'User', 'Programmer', 'Web server', 'Browser', 'option_c', 'Web server', 'Browser', ''),
(30, 'Web Technology ( Quiz 1 )', 'The attribute of &lt;form>tag', 'Method', 'Action', 'Both (a)&(b)', 'None of these', 'option_c', 'Both (a)&(b)', 'Both (a)&(b)', ''),
(108, 'Data Science - ( Quiz - 2 )', 'Data science is the process of diverse set of data through ?', 'Organizing data', 'Processing data', 'Analysing data', 'Analysing data', 'option_d', '', '', ''),
(109, 'Data Science - ( Quiz - 2 )', ' Point out the correct statement.', 'Raw data is original source of data', 'Preprocessed data is original source of data', 'Raw data is the data obtained after processing steps', 'None of the above', 'option_a', '', '', ''),
(110, 'Data Science - ( Quiz - 2 )', 'How do we perform Bayesian classification when some features are missing?', 'We integrate the posteriors probabilities over the missing features', 'We ignore the missing features', 'We assuming the missing values as the mean of all values', 'Drop the features completely', 'option_a', '', '', ''),
(111, 'Data Science - ( Quiz - 2 )', 'The modern conception of data science as an independent discipline is sometimes attributed to?', 'John McCarthy', 'Arthur Samuel', 'William S.', 'Dennis Ritchie', 'option_c', '', '', ''),
(112, 'Data Science - ( Quiz - 2 )', ' ________ graph displays information as a series of data points connected by straight line segments.', 'Bar', 'Scatter', 'Histogram', 'Line', 'option_d', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `topics_details`
--

CREATE TABLE `topics_details` (
  `topic_id` int(100) NOT NULL,
  `topic_name` varchar(100) NOT NULL,
  `1001` varchar(100) NOT NULL,
  `1002` varchar(100) NOT NULL,
  `1003` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics_details`
--

INSERT INTO `topics_details` (`topic_id`, `topic_name`, `1001`, `1002`, `1003`) VALUES
(1, 'Data Science - ( Quiz - 1 )', 'yes', 'yes', 'no'),
(2, 'Big Data Framework', 'yes', 'yes', 'yes'),
(3, 'PMDA ( Quiz 1 )', 'yes', 'yes', 'no'),
(4, 'Web Technology ( Quiz 1 )', 'yes', 'yes', 'no'),
(14, 'Data Science - ( Quiz - 2 )', 'no', 'no', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `questions_details`
--
ALTER TABLE `questions_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_details`
--
ALTER TABLE `topics_details`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5002;

--
-- AUTO_INCREMENT for table `questions_details`
--
ALTER TABLE `questions_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `topics_details`
--
ALTER TABLE `topics_details`
  MODIFY `topic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
