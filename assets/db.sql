-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2020 at 07:25 PM
-- Server version: 8.0.20-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int NOT NULL,
  `author_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_desc` text NOT NULL,
  `book_price` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `book_category` varchar(20) NOT NULL,
  `user_id` int NOT NULL,
  `book_image` text NOT NULL,
  `book_file` text NOT NULL,
  `book_pdf` text NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `author_name`, `book_title`, `book_desc`, `book_price`, `created_at`, `book_category`, `user_id`, `book_image`, `book_file`, `book_pdf`, `user_name`) VALUES
(8, 'Allama Iqbal', 'Jawab-e-Shikwa', 'This is very good book for broad Vision , 258 pages', 500, '2020-06-22 18:34:32', 'Islam', 1, '63f0f60348871a4a9d934bf9ac024ede.jpeg', '', '1b189addf30e316ec0155e7058b9c642.pdf', 'System Admin'),
(9, 'Jay Shetty', 'Think Like a Monk', 'Biography Book, pages 258', 2200, '2020-06-22 18:47:33', 'Biography', 1, '8fe5e1dd5595e962f8e64fbddfc26412.jpg', '', '7fc5e1d75121113768ca20ce2dcd256f.pdf', 'System Admin'),
(10, 'Kelly', 'The Last Sister(Columbia River Book)', 'This book About Photography', 400, '2020-06-22 18:50:13', 'Arts', 1, '9d4d53eccd3bae47492bd72cd75a62c7.jpg', '', 'eb9ccbbf7d9f79485bc7b06fbe2d8597.pdf', 'System Admin'),
(11, 'Jay Shetty', 'All you can Ever', 'Real Story  Book 228 pages', 300, '2020-06-22 18:52:49', 'Story', 1, 'dcf31be946de05b7945b2ff412a3b521.jpg', '', '33a9da33d243bd8c3003938762eaf432.pdf', 'System Admin'),
(12, 'Jay Shetty', 'Broken Faith', 'Biography Book, pages 300', 500, '2020-06-22 18:54:06', 'Biography', 1, '7185ecbe0b25f288ab60697be20b9cc5.jpg', '', '1cbfde8c46d650ffd95bdfd4dc19ecf2.pdf', 'System Admin'),
(13, 'Jay Hunter', 'Pragnancy', 'its about pragnency mother health. 300pages', 600, '2020-06-22 18:55:33', 'Romance', 1, '7dcbbd7461f9deccfc86d15c59084996.jpg', '', 'f3af535e8a679bd87b79c211ed468899.pdf', 'System Admin'),
(14, 'Hump joke', 'Enjoy the little', 'A story of traveller.3000 pages', 2000, '2020-06-22 18:56:36', 'Arts', 1, 'f965e66f86e5d6bc8016663bb4111033.jpg', '', '0dbaf128ac193511991994b64ace63ef.pdf', 'System Admin'),
(15, 'josh', 'Loss life', 'This book about how girl loss their life', 1000, '2020-06-22 18:59:15', 'Biography', 1, '3683d1ddd25b1747d7c02198658c1fa6.jpg', '', 'd265d0f96a65edf25c4fa7596771ef47.pdf', 'System Admin'),
(16, 'bay hook', 'The Overtude of Life', 'this is story of army men', 2000, '2020-06-22 19:01:03', 'Biography', 1, '9aff6f513c31c23e6298ecf4a8896de1.jpg', '', 'e16b87ad9ebb4e03c98d1256de79a64c.pdf', 'System Admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `order_id` int NOT NULL,
  `book_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` enum('pending','success','delete') NOT NULL DEFAULT 'pending',
  `price` varchar(7) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`order_id`, `book_id`, `user_id`, `status`, `price`, `user_name`, `user_contact`, `user_address`, `user_email`) VALUES
(6, 16, 8, 'pending', '2000', 'Ahmad Saeed', '03003123453', 'Multan Road H/s no 420 ', 'pakuse@gmail.com'),
(7, 10, 8, 'pending', '400', 'Ahmad Saeed', '03003123453', 'Multan Road H/s no 420 ', 'pakuse@gmail.com'),
(8, 8, 8, 'success', '500', 'Ahmad Saeed', '03003123453', 'Multan Road H/s no 420 ', 'pakuse@gmail.com'),
(9, 15, 9, 'success', '1000', 'Ali Raza', '3009086947', 'Trust Colony', 'aliraza@gmail.com'),
(10, 9, 9, 'pending', '2200', 'Ali Raza', '3009086947', 'Trust Colony', 'aliraza@gmail.com'),
(11, 10, 9, 'pending', '400', 'Ali Raza', '3009086947', 'Trust Colony', 'aliraza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int NOT NULL,
  `category` varchar(30) NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `user_id`) VALUES
(4, 'Islam', 1),
(6, 'Arts & Photography', 1),
(7, 'Food & Drink', 1),
(8, 'Romance', 1),
(9, 'Biography', 1),
(10, 'Science', 1),
(11, 'Programming', 1),
(12, 'Kids', 1),
(13, 'Story', 1),
(14, 'Engineering', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(26) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact`, `cnic`, `created_at`, `role`, `password`, `address`) VALUES
(1, 'System Admin', 'mail@ahmadsaeed.net', '2323232323', '2147483647', '2020-06-20 15:03:01', 'admin', '21232f297a57a5a743894a0e4a801fc3', ''),
(8, 'Ahmad Saeed', 'pakuse@gmail.com', '03003123453', '312084761831', '2020-06-22 19:04:13', 'user', '21232f297a57a5a743894a0e4a801fc3', 'Multan Road H/s no 420 '),
(9, 'Ali Raza', 'aliraza@gmail.com', '3009086947', '312023476182', '2020-06-22 19:04:58', 'user', '21232f297a57a5a743894a0e4a801fc3', 'Trust Colony');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;