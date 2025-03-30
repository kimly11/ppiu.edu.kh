-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppiu_edu_kh`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `review` varchar(500) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `username`, `created_at`) VALUES
(3, 'សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ អនុលោមតាមគុណភាពអប់រំស្តង់ដារជាតិ និងអន្តរជាតិដោយឈរលើការអប់រំឌីជីថល និងការស្រាវជ្រាវជាគោល។', 'ចក្ខុវិស័យ (Vision)', '2025-03-30 07:45:43'),
(4, 'សាកលវិទ្យាល័យភ្នំពេញអន្តរជាតិ សម្រេចបានការផ្ដល់នូវចំណេះដឹង និងជំនាញដោយបញ្ជ្រាបនូវការប្រើប្រាស់បច្ចេកវិទ្យាឌីជីថល\n\nនិងការស្រាវជ្រាវ ដើម្បីចូលរួមចំណែកដល់ការអភិវឌ្ឍធនធានមនុស្ស ប្រកបដោយវិជ្ជាជីវៈនិងសីលធម៌ខ្ពស់ ឆ្លើយតបទីផ្សារការងារ។', 'បេសកកម្ម (Mission)', '2025-03-30 07:45:43'),
(5, 'សាកលវិទ្យោល័យភ្នំពេញអន្តរជាតិ រក្សាខ្ជាប់នូវសុចរិតភាព ទំនុកចិត្ត សេចក្ដីថ្លៃថ្នូរនិងភាពជាមគ្គុទេស។\r\n\r\n', 'គុណតម្លៃ (Values) - IDT', '2025-03-30 07:58:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
