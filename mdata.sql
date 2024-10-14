-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Οκτ 2024 στις 21:45:35
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `mdata`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `erg`
--

CREATE TABLE `erg` (
  `kodikos` int(11) NOT NULL,
  `onomEpon` varchar(30) NOT NULL,
  `wrErg` int(11) NOT NULL,
  `wrM` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `erg`
--

INSERT INTO `erg` (`kodikos`, `onomEpon`, `wrErg`, `wrM`) VALUES
(1, 'ΝΙΚΟΛΑΟΥ ΔΗΜΗΤΡΗΣ', 50, 8),
(2, 'kostantinou', 14, 2),
(3, 'ΝΙΚΟΛΑΟΥ ΝΙΚΟΣ ', 14, 2);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `erg`
--
ALTER TABLE `erg`
  ADD PRIMARY KEY (`kodikos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
