-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 09:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `therapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_of_treatments`
--

CREATE TABLE `list_of_treatments` (
  `id` int(12) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `therapist_id` int(12) NOT NULL,
  `benefits` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_of_treatments`
--

INSERT INTO `list_of_treatments` (`id`, `name`, `description`, `therapist_id`, `benefits`) VALUES
(1, 'massage', 'deep tissue massage, trigger point therapy and neuromuscular release', 1, 'Deep tissue massage involves going deep into the layers of your muscles and tissues to break knots, adhesion and scar tissues. It heals pain, stiffness, injuries and fatigue'),
(2, 'Cupping', 'suction cups and machine assisted cupping to release tissue tightness and encourage lymph drainage', 2, 'ACE Massage Cupping therapy is an incredibly versatile, modern style of cupping therapy. The basic movements can easily be customized to accomplish a wide variety of techniques, from lymphatic drainage to deep tissue release.'),
(3, 'Dry Needling', 'Dry needling is also sometimes called intramuscular stimulation. The points are areas of knotted or hard muscle. Dry needling practitioners say the needle helps release the knot and relieve any muscle pain or spasms.', 1, 'Dry needling may provide relief for some muscular pain and stiffness. In addition, easing the trigger points may improve flexibility and increase range of motion. That’s why this method is often used to treat sports injuries, muscle pain, and even fibromyalgia pain.'),
(4, 'IASTM', 'Instrument assisted soft tissue massage. The use of a tool to manipulate restricted tissue.', 2, 'Instrument assisted soft tissue mobilization (IASTM)  is a skilled myofascial intervention used for soft-tissue treatment. It is based on the principles of James Cyriax cross-friction massage.\r\n\r\nIt is applied using instruments that are usually made of stainless steel with bevelled edges and contours that can conform to different body anatomical locations and allows for deeper penetration.');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`id`, `Name`, `Description`) VALUES
(1, 'Niamh', 'Niamh is our Physiotherapist, and she works between both our clinics in Kildare and Dublin. She has 12 years experience working as a Physiotherapist. She specialising in treating people who suffer with musculoskeletal injuries, ergonomic related injuries, post orthopaedic surgery and some vestibular rehab via exercises. She will first undertake a thorough assessment which involve gathering all information about the injury and then a thorough functional movement assessment to determine a diagnosis and advising you in regards to treatment plan and expectations in regards.'),
(2, 'Chris', 'Chris qualified as a Neuromuscular therapist in 2022. She has been very popular within our clinics with all her patients having great progress. She to will do a thorough assessment and advise which treatment modality would be best beneficial for each patient depending what their concerns and goals are. She also is a very experienced gym instructor and crossfit coach with 8+years experience across and is well suited to give advice on rehabilitation exercises to aid your recovery.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(12) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `marketing` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `contact_number`, `email_address`, `message`, `marketing`) VALUES
(16, 'niamh', 'Mannion', '06373949', 'test@example.com', 'evening appointment please?', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_of_treatments`
--
ALTER TABLE `list_of_treatments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapists`
--
ALTER TABLE `therapists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_treatments`
--
ALTER TABLE `list_of_treatments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
