-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 05:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beachdealipio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `res_id` int(30) NOT NULL,
  `room_id` int(30) NOT NULL,
  `client_id` int(30) NOT NULL,
  `schedule` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= for verification, 1=confirmed,2= reschedule,3=done',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`res_id`, `room_id`, `client_id`, `schedule`, `status`, `date_created`) VALUES
(2, 191, 15, '2022-12-05 11:44:00', 0, '2022-12-02 10:45:44'),
(15, 201, 15, '2022-12-13 14:47:00', 0, '2022-12-02 12:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `recno` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_type` text NOT NULL,
  `roomDesc` text NOT NULL,
  `img_path` text NOT NULL,
  `Price` smallint(6) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`recno`, `room_id`, `room_type`, `roomDesc`, `img_path`, `Price`, `date_created`) VALUES
(6, 191, 'Single Room', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus. Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec magna nec, maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio. Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac, elementum quis lorem. Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at.', 'IMG-63876bcac0a287.94697178.jpg', 3500, '2022-11-30 22:42:18'),
(5, 201, 'Double Bedroom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus. Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec magna nec, maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio. Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac, elementum quis lorem. Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at.\n\n', 'IMG-63876554612e19.63150650.png', 2000, '2022-11-30 22:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `room_schedule`
--

CREATE TABLE `room_schedule` (
  `id` int(30) NOT NULL,
  `room_id` int(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_schedule`
--

INSERT INTO `room_schedule` (`id`, `room_id`, `day`, `time_from`, `time_to`) VALUES
(1, 191, 'Monday', '08:00:00', '17:00:00'),
(2, 201, 'Tuesday', '08:00:00', '17:00:00'),
(3, 191, 'Tuesday', '08:00:00', '17:00:00'),
(4, 201, 'tuesday', '08:00:00', '17:00:00'),
(5, 191, 'Wednesday', '08:00:00', '17:00:00'),
(6, 191, 'Thursday', '08:00:00', '17:00:00'),
(7, 191, 'Friday', '08:00:00', '17:00:00'),
(8, 191, 'Saturday', '08:00:00', '17:00:00'),
(9, 191, 'Sunday', '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `contact`, `address`, `email`, `username`, `password`, `type`) VALUES
(7, 'Mark Janeil', 'Villasis', '09219487681', 'New Cabalan, Olongapo City', 'mjvillasis_admin@gmail.com', 'MJV06', '874220742d6bc36bc66b4328afc0643e', 2),
(11, 'Mark Janeil version 4', 'Villasis', '09219487681', 'New Cabalan', 'sample_email@gmail.com', 'Mark Janeil', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(15, 'Code', 'Incognito', '09219487681', 'Olongapo City', 'code_incognito@gmail.com', 'Code_incognito', '2f723c7b47d6301303dfbc450be3d6d1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `1` (`recno`);

--
-- Indexes for table `room_schedule`
--
ALTER TABLE `room_schedule`
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
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `res_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `recno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_schedule`
--
ALTER TABLE `room_schedule`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
