-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 09:02 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
--

-- --------------------------------------------------------

--
-- Table structure for table `motogp`
--

CREATE TABLE `motogp` (
  `id` int(11) NOT NULL,
  `negara` varchar(15) NOT NULL,
  `kode_negara` varchar(2) NOT NULL,
  `nomor` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `foto_motor` varchar(255) NOT NULL,
  `tim` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `kemenangan_seri` int(11) NOT NULL,
  `kemenangan_kejuaraan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motogp`
--

INSERT INTO `motogp` (`id`, `negara`, `kode_negara`, `nomor`, `foto`, `nama`, `foto_motor`, `tim`, `motor`, `tempat_lahir`, `tanggal_lahir`, `berat_badan`, `tinggi_badan`, `kemenangan_seri`, `kemenangan_kejuaraan`) VALUES
(1, 'Italia', 'it', 4, 'img/rider/andrea-dovizioso.jpg', 'Andrea Dovizioso', 'img/motor/ad-04.jpg', 'Ducati Team', 'Ducati Desmosedici GP18', 'Forlimpopoli', '1986-03-23', 67, 167, 18, 1),
(2, 'Prancis', 'fr', 5, 'img/rider/johann-zarco.jpg', 'Johann Zarco', 'img/motor/jz-05.jpg', 'Monster Yamaha Tech 3', 'Yamaha YZR-M1 2018', 'Cannes', '1990-07-16', 66, 171, 16, 2),
(3, 'Italia', 'it', 9, 'img/rider/danilo-petrucci.jpg', 'Danilo Petrucci', 'img/motor/dp-09.jpg', 'Alma Pramac Racing', 'Ducati Desmosedici GP18', 'Terni', '1990-10-28', 78, 181, 0, 0),
(4, 'Belgia', 'be', 10, 'img/rider/xavier-simeon.jpg', 'Xavier Simeon', 'img/motor/xs-10.jpg', 'Reale Avintia Racing', 'Ducati Desmosedici GP16', 'Brussels', '1989-08-31', 68, 174, 1, 0),
(5, 'Swiss', 'ch', 12, 'img/rider/thomas-luthi.jpg', 'Thomas Luthi', 'img/motor/tl-12.jpg', 'EG 0,0 Marc VDS', 'Honda RC213V 2017', 'Linden', '1986-09-06', 62, 172, 16, 1),
(6, 'Republik Ceko', 'cz', 17, 'img/rider/karel-abraham.jpg', 'Karel Abraham', 'img/motor/ka-17.jpg', 'Angel Nieto Team', 'Ducati Desmosedici GP16', 'Brno', '1990-01-02', 74, 180, 1, 0),
(7, 'Spanyol', 'es', 19, 'img/rider/alvaro-bautista.jpg', 'Alvaro Bautista', 'img/motor/ab-19.jpg', 'Angel Nieto Team', 'Ducati Desmosedici GP17', 'Talavera de la Reina', '1984-11-21', 58, 169, 16, 1),
(8, 'Italia', 'it', 21, 'img/rider/franco-morbidelli.jpg', 'Franco Morbidelli', 'img/motor/fm-21.jpg', 'EG 0,0 Marc VDS', 'Honda RC213V 2017', 'Roma', '1994-12-04', 64, 176, 8, 1),
(9, 'Spanyol', 'es', 25, 'img/rider/maverick-vinales.jpg', 'Maverick Vinales', 'img/motor/mv-25.jpg', 'Movistar Yamaha MotoGP', 'Yamaha YZR-M1 2018', 'Figueres', '1995-01-12', 64, 171, 20, 1),
(10, 'Spanyol', 'es', 26, 'img/rider/dani-pedrosa.jpg', 'Dani Pedrosa', 'img/motor/dp-26.jpg', 'Repsol Honda Team', 'Honda RC213V 2018', 'Sabadell', '1985-09-29', 51, 160, 54, 3),
(11, 'Italia', 'it', 29, 'img/rider/andrea-iannone.jpg', 'Andrea Iannone', 'img/motor/ai-29.jpg', 'Team Suzuki Ecstar', 'Suzuki GSX-RR', 'Vasto', '1989-08-09', 74, 178, 13, 0),
(12, 'Jepang', 'jp', 30, 'img/rider/takaaki-nakagami.jpg', 'Takaaki Nakagami', 'img/motor/tn-30.jpg', 'LCR Honda Idemitsu', 'Honda RC213V 2017', 'Chiba', '1992-02-09', 67, 175, 2, 0),
(13, 'Inggris', 'gb', 35, 'img/rider/cal-crutchlow.jpg', 'Cal Crutchlow', 'img/motor/cc-35.jpg', 'LCR Honda Castrol', 'Honda RC213V 2018', 'Coventry', '1985-10-29', 68, 170, 3, 0),
(14, 'Inggris', 'gb', 38, 'img/rider/bradley-smith.jpg', 'Bradley Smith', 'img/motor/bs-38.jpg', 'Red Bull KTM Factory Racing', 'KTM RC16', 'Oxford', '1990-11-28', 68, 180, 3, 0),
(15, 'Spanyol', 'es', 41, 'img/rider/aleix-espargaro.jpg', 'Aleix Espargaro', 'img/motor/ae-41.jpg', 'Aprilia Racing Team ', 'Aprilia RS-GP', 'Granollers', '1989-07-30', 66, 180, 0, 0),
(16, 'Spanyol', 'es', 42, 'img/rider/alex-rins.jpg', 'Alex Rins', 'img/motor/ar-42.jpg', 'Team Suzuki Ecstar', 'Suzuki GSX-RR', 'Barcelona', '1995-12-08', 68, 176, 12, 0),
(17, 'Australia', 'au', 43, 'img/rider/jack-miller.jpg', 'Jack Miller', 'img/motor/jm-43.jpg', 'Alma Pramac Racing', 'Ducati Desmosedici GP17', 'Townsville', '1995-01-18', 64, 173, 7, 0),
(18, 'Spanyol', 'es', 44, 'img/rider/pol-espargaro.jpg', 'Pol Espargaro', 'img/motor/pe-44.jpg', 'Red Bull KTM Factory Racing', 'KTM RC16', 'Granollers', '1991-06-10', 64, 171, 15, 1),
(19, 'Inggris', 'gb', 45, 'img/rider/scott-redding.jpg', 'Scott Redding', 'img/motor/sr-45.jpg', 'Aprilia Racing Team ', 'Aprilia RS-GP', 'Quedgeley', '1993-01-04', 78, 185, 4, 0),
(20, 'Italia', 'it', 46, 'img/rider/valentino-rossi.jpg', 'Valentino Rossi', 'img/motor/vr-46.jpg', 'Movistar Yamaha MotoGP', 'Yamaha YZR-M1 2018', 'Urbino', '1979-02-16', 69, 181, 115, 9),
(21, 'Spanyol', 'es', 53, 'img/rider/tito-rabat.jpg', 'Tito Rabat', 'img/motor/tr-53.jpg', 'Reale Avintia Racing', 'Ducati Desmosedici GP17', 'Barcelona', '1989-05-25', 65, 178, 13, 1),
(22, 'Malaysia', 'my', 55, 'img/rider/hafizh-syahrin.jpg', 'Hafizh Syahrin', 'img/motor/hs-55.jpg', 'Monster Yamaha Tech 3', 'Yamaha YZR-M1 2017', 'Ampang', '1994-05-05', 66, 180, 0, 0),
(23, 'Spanyol', 'es', 93, 'img/rider/marc-marquez.jpg', 'Marc Marquez', 'img/motor/mm-93.jpg', 'Repsol Honda Team', 'Honda RC213V 2018', 'Cervera', '1993-02-17', 65, 169, 64, 6),
(24, 'Spanyol', 'es', 99, 'img/rider/jorge-lorenzo.jpg', 'Jorge Lorenzo', 'img/motor/jl-99.jpg', 'Ducati Team', 'Ducati Desmosedici GP18', 'Palma de Mallorca', '1987-05-04', 65, 171, 65, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motogp`
--
ALTER TABLE `motogp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motogp`
--
ALTER TABLE `motogp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
