-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Lis 2021, 22:39
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mechancasino`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `useremail` varchar(128) NOT NULL,
  `userpwd` varchar(128) NOT NULL,
  `accountBalance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userId`, `username`, `useremail`, `userpwd`, `accountBalance`) VALUES
(1, 'sewek', 'seweryq@gmail.com', '123', 10000000),
(2, '123', '123', '$2y$10$SAbwNm9vWSRI1JbWABAi.OGZxJzmH6uohaGsx3kbZgBFo.kQbRTS6', 0),
(3, '1234', '12455', '$2y$10$.DcKJOSA0R2Ha6QabdPg5.nJgGENoCnu1PNg0g5.d7lzRplvweqp6', 1000),
(4, 'sewektest', 'sewektest@gmail.com', '$2y$10$0N48fN3uv44cLiCEuhbmc.mf4lhbIH91fXevAB1iS7SsrxAguRSdK', 1000);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
