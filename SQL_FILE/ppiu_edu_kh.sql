-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2025 at 07:32 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(3, 'ly', 'kim@gmail.com', '$2y$10$EZ8iX18lUy4HLgCAm/dKc.MTCRTDAduPPd40sVOQFQa67u62AoAla', '2025-03-31 17:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending',
  `user_id` int(7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  `total_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `type`, `created_at`) VALUES
(10, 'ព័ត៌មាន​ទាន់​ហេតុការណ៍', 'news1.jpg', 'ចូលរួមរំលែកទុក្ខមាតាបង្កើតឯកឧត្តមបណ្ឌិតសភាចារ្យហង់ជួន ណារ៉ុងរដ្ឋមន្រ្តីក្រសួងអប់រំយុវ', 'News', 'drink', '2025-03-31 17:50:04'),
(11, 'News', 'news2.jpg', 'All Telegram Channel Of PPIU Students AY2023-24', 'telegram', 'drink', '2025-03-31 18:04:37'),
(12, 'Looking For Lecturer of Logistic Management', 'scholaor.jpg', 'Phnom Penh International University (PPIU) is one of the leading private universities in Cambodia, with a clear mission, vision, and values. To ensure the quality of its higher education, PPIU is committed to and abides by national, regional (ASEAN) and international standards of education. PPIU is now looking for lecturer candidates who are qualified and interested in teaching the following courses:', 'New', 'dessert', '2025-04-03 09:05:52'),
(13, 'kj', 'about3.jpg', 'jkj', 'jnh', 'announ', '2025-04-03 09:37:40'),
(14, 'erwrwr', 'bg1.jpg', 'qrdeswfwrfaqfsfqf', 'frestge', 'announ', '2025-04-03 10:03:20'),
(15, 'rewt', 'chair.jpg', 'erwrw', 'wrtfewrw', 'dessert', '2025-04-03 10:04:05'),
(16, 'dsfsfdsfsfdsfs', 'image1.png', 'dasbfdhjsgfislgfb eskjflhesbfesfb dsmnbsdhjgfseyufbxnvfdgsugfesubscsd gfsjfbvsfsfsfsfsfsvs', 'dfsfsf', 'announ', '2025-04-03 13:02:19');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'user2@gmail.com', 'user2@gmail.com', '$2y$10$nlhdvRV2AtBVcGwKkSzBM.qIh3rVVGzlyLDWHvNge9.8ZMPY9ZvMi', '2023-05-02 12:00:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
