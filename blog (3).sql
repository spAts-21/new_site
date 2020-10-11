-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 12:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `author` varchar(200) NOT NULL,
  `title` varchar(400) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `author`, `title`, `content`, `date`, `image`) VALUES
(1, 'varun lahoti', 'mechanics', 'force; Eq. 3.12b can be used for computations when we are interested in the force on\r\nthe submerged side only; Eq. 3.12c is useful when we have p0 on the other side of the\r\nsurface and we are interested in the net force.\r\nIn summary, Eqs. 3.10 through 3.12 constitute a complete set of equations for computing the magnitude and location of the force due to hydrostatic pressure on any submerged plane surface. The direction of the force will always be perpendicular to the plane.\r\nWe can now consider several examples using these ', '2020-10-02', 'bulbon.png'),
(2, 'sam bill', 'fluid', 'Note that in any event, yu . yc—the location of the force is always below the level of\r\nthe plate centroid. This makes sense—as Fig. 3.6 shows, the pressures will always be\r\nlarger on the lower regions, moving the resultant force down the plate.\r\nA similar analysis can be done to compute xu, the x location of the force on the plate.\r\nTaking the sum of the moments of the infinitesimal forces dF about the y axis we obtain', '2020-10-07', 'IIT-KGP.png'),
(3, 'rahul jj', 'blog', 'Note that in any event, yu . yc—the location of the force is always below the level of\r\nthe plate centroid. This makes sense—as Fig. 3.6 shows, the pressures will always be\r\nlarger on the lower regions, moving the resultant force down the plate.\r\nA similar analysis can be done to compute xu, the x location of the force on the plate.\r\nTaking the sum of the moments of the infinitesimal forces dF about the y axis we obtain', '2020-10-24', 'bulbon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
