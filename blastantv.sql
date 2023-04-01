-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:02 PM
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
-- Database: `blastantv`
--

-- --------------------------------------------------------

--
-- Table structure for table `boa_mst_blasts`
--

CREATE TABLE `boa_mst_blasts` (
  `ID` int(8) NOT NULL,
  `TITLE` text DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `COUNT_MAIL` text DEFAULT NULL,
  `COVER` text DEFAULT NULL,
  `COVER_FOLDER` text DEFAULT NULL,
  `COVER_TYPE` text DEFAULT NULL,
  `CREATED` text DEFAULT NULL,
  `MODIFIED` text DEFAULT NULL,
  `CREATED_BY` text DEFAULT NULL,
  `MODIFIED_BY` text DEFAULT NULL,
  `GROUP_ID` text DEFAULT NULL,
  `IMAGE` text DEFAULT NULL,
  `IMAGE_FOLDER` text DEFAULT NULL,
  `IMAGE_TYPE` text DEFAULT NULL,
  `PUBLISH` text DEFAULT NULL,
  `COMPANY_ID` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boa_mst_blasts`
--

INSERT INTO `boa_mst_blasts` (`ID`, `TITLE`, `CONTENT`, `COUNT_MAIL`, `COVER`, `COVER_FOLDER`, `COVER_TYPE`, `CREATED`, `MODIFIED`, `CREATED_BY`, `MODIFIED_BY`, `GROUP_ID`, `IMAGE`, `IMAGE_FOLDER`, `IMAGE_TYPE`, `PUBLISH`, `COMPANY_ID`) VALUES
(44, 'Pengumuman ANTV dekade', '-', '1', 'COVER8abc651855d1e9d29ffbf3fa34e5b5b2.jpeg', 'COVER8abc651855d1e9d29ffbf3fa34e5b5b2.jpeg', 'image/jpeg', '2014-08-12 11:14:54am', '2014-08-12 11:14:54am', '2', '2', '4', 'IMAGE8abc651855d1e9d29ffbf3fa34e5b5b2.jpeg', 'IMAGE8abc651855d1e9d29ffbf3fa34e5b5b2.jpeg', 'image/jpeg', '1', '3112');

-- --------------------------------------------------------

--
-- Table structure for table `boa_mst_groups`
--

CREATE TABLE `boa_mst_groups` (
  `ID` int(8) NOT NULL,
  `GROUP_NAME` text DEFAULT NULL,
  `PUBLISH` text DEFAULT NULL,
  `CREATED` text DEFAULT NULL,
  `MODIFIED` text DEFAULT NULL,
  `CREATED_BY` text DEFAULT NULL,
  `MODIFIED_BY` text DEFAULT NULL,
  `EMAIL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boa_mst_groups`
--

INSERT INTO `boa_mst_groups` (`ID`, `GROUP_NAME`, `PUBLISH`, `CREATED`, `MODIFIED`, `CREATED_BY`, `MODIFIED_BY`, `EMAIL`) VALUES
(1, 'Reguler', '1', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', '6358', '6358', 'furqoncoding@gmail.com'),
(2, 'Bonus', '1', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', '6358', '6358', 'furqoncoding@gmail.com'),
(3, 'Special', '1', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', 'TO_DATE(\'2018-04-06 17:40:48\', \'SYYYY-MM-DD HH24:MI:SS\')', '6358', '6358', 'furqoncoding@gmail.com'),
(4, 'TCI', '1', 'TO_DATE(\'2018-10-04 15:40:28\', \'SYYYY-MM-DD HH24:MI:SS\')', 'TO_DATE(\'2018-10-04 15:40:28\', \'SYYYY-MM-DD HH24:MI:SS\')', '6358', '6358', 'furqoncoding@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `boa_v_companies`
--

CREATE TABLE `boa_v_companies` (
  `ID` int(8) NOT NULL,
  `NAME` text DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `CREATED_DATE` text DEFAULT NULL,
  `UPDATED_DATE` text DEFAULT NULL,
  `CREATED_BY` text DEFAULT NULL,
  `UPDATED_BY` text DEFAULT NULL,
  `CODE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boa_v_companies`
--

INSERT INTO `boa_v_companies` (`ID`, `NAME`, `DESCRIPTION`, `CREATED_DATE`, `UPDATED_DATE`, `CREATED_BY`, `UPDATED_BY`, `CODE`) VALUES
(3100, 'PT. CAKRAWALA ANDALAS TELEVISI', '-', 'TO_DATE(\'2016-04-25 11:26:15\', \'SYYYY-MM-DD HH24:MI:SS\')', 'TO_DATE(\'2017-08-24 17:38:36\', \'SYYYY-MM-DD HH24:MI:SS\')', NULL, '101', 'ANTV'),
(3110, 'PORTRAIT TALENT MANAGEMENT', '-', 'TO_DATE(\'2017-08-24 17:34:35\', \'SYYYY-MM-DD HH24:MI:SS\')', NULL, '101', NULL, 'PRT'),
(3111, 'PT. INTERMEDIA CAPITAL Tbk', '-', 'TO_DATE(\'2017-08-24 17:34:59\', \'SYYYY-MM-DD HH24:MI:SS\')', NULL, '101', NULL, 'IMC'),
(3112, 'PT. CAKRA ANDALAS FASILITAS', '-', NULL, NULL, NULL, '2', 'CAF'),
(3113, 'PT DIGI BINTANG SINERGI', '-', NULL, NULL, '2', NULL, 'DBS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boa_mst_blasts`
--
ALTER TABLE `boa_mst_blasts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `boa_mst_groups`
--
ALTER TABLE `boa_mst_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `boa_v_companies`
--
ALTER TABLE `boa_v_companies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boa_mst_blasts`
--
ALTER TABLE `boa_mst_blasts`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `boa_mst_groups`
--
ALTER TABLE `boa_mst_groups`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boa_v_companies`
--
ALTER TABLE `boa_v_companies`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
