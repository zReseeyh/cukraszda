-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Már 11. 19:56
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `cukrasz`
--
CREATE DATABASE cukrasz; USE cukrasz;
-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tortak`
--

CREATE TABLE `tortak` (
  `id` int(11) NOT NULL,
  `torta_kep` text DEFAULT NULL,
  `torta_nev` text DEFAULT NULL,
  `torta_ar` decimal(10,2) DEFAULT NULL,
  `torta_leiras` text DEFAULT NULL,
  `kategoria` text DEFAULT NULL,
  `meret` text DEFAULT NULL,
  `elerhetoseg` text DEFAULT NULL,
  `allergenek` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `tortak`
--

INSERT INTO `tortak` (`id`, `torta_kep`, `torta_nev`, `torta_ar`, `torta_leiras`, `kategoria`, `meret`, `elerhetoseg`, `allergenek`) VALUES
(1, '../media/kinder.png', 'Kinder Torta', 2400.00, 'A Kinder torta egy ínycsiklandó desszert, melyet a híres Kinder csokoládé inspirált. Ez a torta egy omlós, krémes csoda, mely magában hordozza a Kinder csokoládé ízét és krémes állagát. Általában egy réteges szerkezetű torta, melyben puha piskóta lapokat rétegeznek kakaós és tejes krémmel, valamint Kinder csokoládé darabokkal.', 'Torta', '8/16/24 szeletes', '2-3 munkanap', '1, 2, 3, 4'),
(2, '../media/csokis.png', 'Csokoládé torta', 1800.00, 'A csokoládé torta az igazi csokoládé szerelmeseinek készült mennyország. Ez a desszert nem csak egy egyszerű torta, hanem egy olyan élmény, ami minden falatnál átöleli az érzékeket és elvarázsolja az ízeket. A csokoládé torta magában hordozza az intenzív kakaó ízét, melyet egyedülállóan lágy és krémes állag tesz teljessé.', 'Torta', '4/8 szeletes', 'raktáron', '3'),
(3, '../media/malnas.png', 'Málnás sajttorta', 2200.00, 'A málnás sajttorta egy könnyed és ízletes desszert, mely tökéletes választás a frissességre és az élénk ízekre vágyóknak. Ez a csodálatos torta friss, érett málnával van díszítve, ami egyedi és kifinomult ízvilágot kölcsönöz neki.', 'Torta', '16/32 szeletes', '3-4 munkanap', '1, 2'),
(4, '../media/kokuszos.png', 'Kókuszos torta', 1900.00, 'A kókuszos torta egy trópusi ízekkel teli csemege, mely megidézi a napfényes strandok és a tengerparti hangulat varázsát. A könnyű kókuszos torta lédús kókuszreszelékekkel és krémes kókuszkaramell rétegekkel készül, melyek egyesítik a trópusi kókusz ízét és az édes karamell ízét egy tökéletes harmóniában. A kókuszos torta minden falatja egy utazás a trópusok világába, melynek finomságát nem lehet elfelejteni.', 'Torta', '9/14 szeletes', 'raktáron', '3, 4'),
(5, '../media/malnas.png', 'Málnás sajttorta', 2200.00, 'Málnás sajttorta egy könnyed és frissítő desszert, melyet az édes málna és a krémes sajtkrém tökéletes kombinációja tesz egyedülállóvá. Az málnás sajttorta friss, lédús málnával díszítve egy igazi ízorgia, mely garantáltan elvarázsolja az ízek kedvelőit. A különleges torta íze a savanykás málna és a lágy sajtkrém tökéletes egyensúlyában rejlik, mely minden falatnál egy újabb élményt nyújt.', 'Torta', '16/32 szeletes', '3-4 munkanap', '1, 2');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `nev`, `email`, `jelszo`) VALUES
(1, 'admin@gmail.com', 'admin@gmail.com', '$2y$10$sLvBuvwIo2Ck0FhPF85NrOLCNJZZezHpiUhe2lpzTJaTmbAbjg7JK');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tortak`
--
ALTER TABLE `tortak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tortak`
--
ALTER TABLE `tortak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
