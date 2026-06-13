-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2026 at 12:35 PM
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
-- Database: `burger_house_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `badge` varchar(80) DEFAULT '',
  `tags` varchar(255) DEFAULT '',
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`id`, `name`, `description`, `price`, `badge`, `tags`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Classic House', 'Beef patty, cheddar, crisp lettuce, tomato, pickles, and house burger sauce.', 8.50, 'Best Seller', 'Brioche Bun,House Sauce', 'assets/images/menu-burger-1.jpg', '2026-05-17 12:28:23', '2026-05-17 12:28:23'),
(2, 'Double Crunch', 'Crispy chicken, cheddar, tomato, lettuce, and a smooth pepper mayo finish.', 10.90, 'Crunch Pick', 'Crispy,Pepper Mayo', 'assets/images/menu-burger-2.jpg', '2026-05-17 12:28:23', '2026-05-17 12:28:23'),
(3, 'Grill Master', 'Grilled beef, fresh tomato, sliced cheese, lettuce, and seasoned wedges on the side.', 9.20, 'Combo Ready', 'Sesame Bun,Potato Wedges', 'assets/images/menu-burger-3.jpg', '2026-05-17 12:28:23', '2026-05-17 12:28:23'),
(4, 'Smoke Stack', 'Two patties, cheddar, crispy onion topping, barbecue glaze, and toasted bun.', 11.40, 'Double Patty', 'Smoky,Loaded', 'assets/images/hero-burger.jpg', '2026-05-17 12:28:23', '2026-05-17 12:28:23'),
(5, 'Cheese Melt', 'Extra cheese, pickles, shredded lettuce, soft toasted bun, and balanced savory bite.', 8.90, 'Melted', 'Cheddar,Soft Bun', 'assets/images/menu-burger-1.jpg', '2026-05-17 12:28:23', '2026-05-17 12:28:23'),
(6, 'Spicy Crispy', 'Crunchy fillet, hot glaze, slaw, tomato, and creamy dressing to cool the finish.', 9.50, 'Spicy', 'House Slaw,Heat Level 2', 'assets/images/menu-burger-2.jpg', '2026-05-17 12:28:23', '2026-05-19 14:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(190) NOT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`) VALUES
(1, 'Marek', 'marek@gmail.com', '+421907501000', 'Žiadosť o rezerváciu stolu pre 6 na 19.5.2026 o 16:00', '2026-05-19 14:54:48'),
(2, 'Marek', 'marek@gmail.com', '+421907501000', 'Žiadosť o rezerváciu stolu pre 6 na 19.5.2026 o 16:00', '2026-05-19 14:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` varchar(255) NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'Marek', '$2y$10$pX1F7UGpsSDT6eRd9CC.HuhA1D.gvBIXW2CyTjuJFpFQprrtjs2B2', 'marek@gmail.com'),
(2, 'Admin', '$2y$10$AIfjTlO8x2COtRAny83hIuSR21ZdLBFPJR4i7vniA.Q7CFecus7La', 'admin@gmail.com'),
(3, 'WWlad', '$2y$10$FsvvIUrgR0l370slyxuad.L5Mm66o0SCPZ5qNuoJJtgVvrNiR2LE2', 'WWlad@gmail.com'),
(4, 'Samo', '$2y$10$uMtVvrKaTfCPT/Fw3efgR.5BMpuA.9fXeGJzHzLcSc5QHHgFgA9mu', 'samo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `burgers`
--
ALTER TABLE `burgers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
