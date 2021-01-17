-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 11:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti_ecommerce`
--

-- --------------------------------------------------------

--
-- Structure for view `product_rating`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_rating`  AS SELECT `products`.`id` AS `id`, `products`.`name` AS `name`, `products`.`price` AS `price`, `products`.`details` AS `details`, `products`.`photo` AS `photo`, `products`.`brand_id` AS `brand_id`, `products`.`subcate_id` AS `subcate_id`, `products`.`supplier_id` AS `supplier_id`, `products`.`created_at` AS `created_at`, `products`.`updated_at` AS `updated_at`, count(`rating`.`product_id`) AS `rating_count`, if(round(avg(`rating`.`value`),0) is null,0,round(avg(`rating`.`value`),0)) AS `rating_avg` FROM (`products` left join `rating` on(`products`.`id` = `rating`.`product_id`)) GROUP BY `products`.`id` ORDER BY if(round(avg(`rating`.`value`),0) is null,0,round(avg(`rating`.`value`),0)) DESC, count(`rating`.`product_id`) DESC ;

--
-- VIEW `product_rating`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
