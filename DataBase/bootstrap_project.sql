-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 04:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootstrap_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_extra`
--

CREATE TABLE `tb_extra` (
  `id` int(11) NOT NULL,
  `extra` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_extra`
--

INSERT INTO `tb_extra` (`id`, `extra`) VALUES
(12, '<div class=\"col-md-4\">\r\n\r\n    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-person-fill\" viewBox=\"0 0 16 16\">\r\n        <path fill-rule=\"evenodd\" d=\"M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\"/>\r\n    </svg>\r\n\r\n    <h2>1st Differential:</h2>\r\n\r\n    <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel, sodales non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Aliquam erat volutpat. Vivamus mauris orci, sollicitudin et ex nec, pharetra pretium massa.</p>\r\n\r\n</div><!--col-md-4-->  \r\n\r\n<div class=\"col-md-4\">\r\n\r\n    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-trophy-fill\" viewBox=\"0 0 16 16\">\r\n        <path fill-rule=\"evenodd\" d=\"M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z\"/>\r\n    </svg>\r\n\r\n    <h2>2nd Differential:</h2>\r\n    \r\n    <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel, sodales non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Aliquam erat volutpat. Vivamus mauris orci, sollicitudin et ex nec, pharetra pretium massa.</p>\r\n\r\n</div><!--col-md-4-->\r\n\r\n<div class=\"col-md-4\">\r\n\r\n    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-tree-fill\" viewBox=\"0 0 16 16\">\r\n        <path fill-rule=\"evenodd\" d=\"M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z\"/>\r\n        <path d=\"M7 13.5h2V16H7v-2.5z\"/>\r\n    </svg>\r\n\r\n    <h2>3rd Differential:</h2>\r\n\r\n    <p>Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel, sodales non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Aliquam erat volutpat. Vivamus mauris orci, sollicitudin et ex nec, pharetra pretium massa.</p>\r\n\r\n</div><!--col-md-4-->');

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id`, `name`, `surname`, `description`) VALUES
(19, 'Gabriel', 'Spinola', 'Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel, sodales non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Aliquam erat volutpat. Vivamus mauris orci, sollicitudin et ex nec, pharetra pretium massa.'),
(20, 'Random', 'Person', 'Proin sed nibh enim. In quis magna sed enim placerat dictum. Fusce hendrerit fermentum velit. Vestibulum imperdiet metus et eleifend tincidunt. Etiam nisi lacus, laoreet a lacus sed, lobortis blandit est. Nunc purus dui, aliquet vitae auctor vel, sodales non felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Aliquam erat volutpat. Vivamus mauris orci, sollicitudin et ex nec, pharetra pretium massa.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_extra`
--
ALTER TABLE `tb_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_extra`
--
ALTER TABLE `tb_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
