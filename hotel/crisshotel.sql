-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2020, 16:02
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `crisshotel`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `tresc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `autor` text COLLATE utf8_polish_ci NOT NULL,
  `data` text COLLATE utf8_polish_ci NOT NULL,
  `banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`id`, `tresc`, `autor`, `data`, `banned`) VALUES
(1, 'maciek', 'maciek', '08-08-2022', 1),
(2, 'maciek', 'maciek', '08-08-0888', 1),
(3, 'adsa', 'dasdsa', '10-06-2020 | 10:48:08', 1),
(4, 'dsadasdsa', 'dsadsa', '10-06-2020 | 10:48:11', 1),
(5, 'ale dymy', 'gsotek', '10-06-2020 | 10:48:17', 1),
(6, 'Gbs ', 'Gajda', '10-06-2020 | 10:49:01', 1),
(7, 'dsadsa', 'dsa', '11-06-2020 | 10:02:59', 1),
(8, 'dsadsa', 'das', '11-06-2020 | 11:32:35', 1),
(9, 'dsa', 'dsa', '11-06-2020 | 11:33:06', 1),
(10, 'xzx', 'xZ', '11-06-2020 | 12:41:22', 1),
(11, 'dsadsa', 'dsa', '11-06-2020 | 03:08:18', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pokoj`
--

CREATE TABLE `pokoj` (
  `id_pokoju` int(11) NOT NULL,
  `id_uzytkownika` int(50) NOT NULL,
  `Numer pokoju` int(11) NOT NULL,
  `Powierzchnia(m2)` int(11) NOT NULL,
  `Widok na morze` varchar(3) NOT NULL,
  `Gwiazdki(1-5)` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pokoj`
--

INSERT INTO `pokoj` (`id_pokoju`, `id_uzytkownika`, `Numer pokoju`, `Powierzchnia(m2)`, `Widok na morze`, `Gwiazdki(1-5)`) VALUES
(1, 1, 5, 55, 'Tak', 5),
(2, 2, 33, 33, 'Nie', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) DEFAULT NULL,
  `Plec` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `banned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `Imie`, `Nazwisko`, `Plec`, `email`, `haslo`, `banned`) VALUES
(1, 'Michal', 'Robaczewski', 'Mezczyzna', 'asdadas@wp.pl', '12345', 0),
(2, 'Monika', 'Drzewo', 'Kobieta', 'asdsadasdas@wp.pl', '12345', 0),
(3, 'Andrzej', 'Wiertara', 'Mezczyzna', 'qoqo@wp.pl', '12345', 0),
(8, 'krzys', NULL, NULL, 'dada@wp.pl', '12345678', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  ADD PRIMARY KEY (`id_pokoju`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  MODIFY `id_pokoju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  ADD CONSTRAINT `pokoj_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
