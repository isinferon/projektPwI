-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Mar 2020, 21:09
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
-- Struktura tabeli dla tabeli `opinia`
--

CREATE TABLE `opinia` (
  `id_opini` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `Ilosc gwiazdek(1-5)` int(5) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `opinia`
--

INSERT INTO `opinia` (`id_opini`, `id_uzytkownika`, `Ilosc gwiazdek(1-5)`, `Data`) VALUES
(1, 1, 4, '2020-03-19'),
(2, 2, 5, '2020-03-02');

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
  `id_uzytkownika` int(11) NOT NULL,
  `Imie` varchar(50) NOT NULL,
  `Nazwisko` varchar(50) NOT NULL,
  `Plec` varchar(50) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `hasło` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id_uzytkownika`, `Imie`, `Nazwisko`, `Plec`, `e-mail`, `hasło`) VALUES
(1, 'Michal', 'Robaczewski', 'Mezczyzna', 'asdadas@wp.pl', '12345'),
(2, 'Monika', 'Drzewo', 'Kobieta', 'asdsadasdas@wp.pl', '12345'),
(3, 'Andrzej', 'Wiertara', 'Mezczyzna', 'qoqo@wp.pl', '12345'),
(4, 'Kornelia', 'wlos', 'Kobieta', 'asdsada@wp.pl', '12345');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `opinia`
--
ALTER TABLE `opinia`
  ADD PRIMARY KEY (`id_opini`),
  ADD KEY `id_uzytkownika` (`id_uzytkownika`);

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
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `opinia`
--
ALTER TABLE `opinia`
  MODIFY `id_opini` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  MODIFY `id_pokoju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `opinia`
--
ALTER TABLE `opinia`
  ADD CONSTRAINT `opinia_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownik` (`id_uzytkownika`);

--
-- Ograniczenia dla tabeli `pokoj`
--
ALTER TABLE `pokoj`
  ADD CONSTRAINT `pokoj_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownik` (`id_uzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
