-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mrz 2021 um 18:34
-- Server-Version: 10.4.16-MariaDB
-- PHP-Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `deutsche_meister_im_fußball`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deutsche_meister_1902_1963`
--

CREATE TABLE `deutsche_meister_1902_1963` (
  `ID` int(11) DEFAULT NULL,
  `Saison` varchar(255) DEFAULT NULL,
  `Meister` varchar(255) DEFAULT NULL,
  `Endspieldatum` varchar(255) DEFAULT NULL,
  `Endspielort` varchar(255) DEFAULT NULL,
  `Endspielbegegnung` varchar(255) DEFAULT NULL,
  `Ergebnis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `deutsche_meister_1902_1963`
--

INSERT INTO `deutsche_meister_1902_1963` (`ID`, `Saison`, `Meister`, `Endspieldatum`, `Endspielort`, `Endspielbegegnung`, `Ergebnis`) VALUES
(1, '1902/1903', 'VfB Leipzig', '31. Mai 1903', 'Altona', 'VfB Leipzig - DFC Prag', '7:2'),
(2, '1904/1905', 'Union 92 Berlin', '21. Mai 1905', 'Köln', 'Union 92 Berlin - Karlsruher FV', '2:0'),
(3, '1905/1906', 'VfB Leipzig', '27. Mai 1906', 'Nürnberg', 'VfB Leipzig - 1. FC Pforzheim', '2:1'),
(4, '1906/1907', 'Freiburger FC', '2. Juni 1907', 'Mannheim', 'Freiburger FC - Viktoria 89 Berlin ', '3:1'),
(5, '1907/1908', 'Viktoria Berlin', '7. Juni 1908', 'Berlin', 'Viktoria Berlin - Stuttgarter Kickers', '3:0'),
(6, '1908/1909', 'Phönix Karlsruhe', '30. Mai 1909', 'Breslau', 'Phönix Karlsruhe - Viktoria Berlin', '4:2'),
(7, '1909/1910', 'Karlsruher FV', '15. Mai 1910', 'Köln', 'Karlsruher FV - Holstein Kiel', '1:0 n. V.'),
(8, '1910/1911', 'Viktoria Berlin', '4. Juni 1911', 'Dresden', 'Viktoria Berlin - VfB Leipzig', '3:1'),
(9, '1911/1912', 'Holstein Kiel', '26. Mai 1912', 'Hamburg', 'Holstein Kiel - Karlsruher FV', '1:0'),
(10, '1912/1913', 'VfB Leipzig', '11. Mai 1913', 'München', 'VfB Leipzig - Duisburger SpV', '3:1'),
(11, '1913/1914', 'SpVgg Fürth', '31. Mai 1914', 'Magdeburg', 'SpVgg Fürth - VfB Leipzig', '3:2 n. V.'),
(12, '1919/1920', '1. FC Nürnberg', '13. Juni 1920', 'Frankfurt', '1. FC Nürnberg - SpVgg Fürth', '2:0'),
(13, '1920/1921', '1. FC Nürnberg', '12. Juni 1921', 'Düsseldorf', '1. FC Nürnberg - Vorwärts Berlin', '5:0'),
(14, '1921/1922', 'Kein Meister', '6. August 1921', 'Leipzig', 'Hamburger SV - 1. FC Nürnberg', '1:1'),
(14, '', '', '18. Juni 1922', 'Berlin', 'Hamburger SV - 1. FC Nürnberg', '2:2'),
(15, '1922/1923', 'Hamburger SV', '10. Juni 1923', 'Berlin', 'Hamburger SV - Union Oberschöneweide', '3:0'),
(16, '1923/1924', '1. FC Nürnberg', '8. Juni 1924', 'Berlin', '1. FC Nürnberg - Hamburger SV', '2:0'),
(17, '1924/1925', '1. FC Nürnberg', '7. Juni 1925', 'Frankfurt', '1. FC Nürnberg - FSV Frankfurt', '1:0 n. V.'),
(18, '1925/1926', 'SpVgg Fürth', '13. Juni 1926', 'Frankfurt', 'SpVgg Fürth - Hertha BSC Berlin', '4:1'),
(19, '1926/1927', '1. FC Nürnberg', '12. Juni 1927', 'Berlin', '1. FC Nürnberg - Hertha BSC Berlin', '2:0'),
(20, '1927/1928', 'Hamburger SV', '29. Juli 1928', 'Hamburg', 'Hamburger SV - Hertha BSC Berlin', '5:2'),
(21, '1928/1929', 'SpVgg Fürth', '28. Juli 1929', 'Nürnberg', 'SpVgg Fürth - Hertha BSC Berlin', '3:2'),
(22, '1929/1930', 'Hertha BSC Berlin', '22. Juni 1930', 'Düsseldorf', 'Hertha BSC Berlin - Holstein Kiel', '5:4'),
(23, '1930/1931', 'Hertha BSC Berlin', '14. Juni 1931', 'Köln', 'Hertha BSC Berlin - TSV 1860 München', '3:2'),
(24, '1931/1932', 'FC Bayern München', '12. Juni 1932', 'Nürnberg', 'FC Bayern München - Eintracht Frankfurt', '2:0'),
(25, '1932/1933', 'Fortuna Düsseldorf', '11. Juni 1933', 'Köln', 'Fortuna Düsseldorf - FC Schalke 04', '3:0'),
(26, '1933/1934', 'FC Schalke 04', '24. Juni 1934', 'Berlin', 'FC Schalke 04 - 1. FC Nürnberg', '2:1'),
(27, '1934/1935', 'FC Schalke 04', '23. Juni 1935', 'Köln', 'FC Schalke 04 - VfB Stuttgart', '6:4'),
(28, '1935/1936', '1. FC Nürnberg', '21. Juni 1936', 'Berlin', '1. FC Nürnberg - Fortuna Düsseldorf', '2:1 n. V.'),
(29, '1936/1937', 'FC Schalke 04', '20. Juni 1937', 'Berlin', 'FC Schalke 04 - 1. FC Nürnberg', '2:0'),
(30, '1937/1938', 'Hannoverscher SV 96', '3. Juli 1938', 'Berlin', 'Hannoverscher SV 96 - FC Schalke 04', '4:3 n. V.'),
(31, '1938/1939', 'FC Schalke 04', '18. Juni 1939', 'Berlin', 'FC Schalke 04 - Admira Wien', '9:0'),
(32, '1939/1940', 'FC Schalke 04', '21. Juli 1940', 'Berlin', 'FC Schalke 04 - Dresdner Sport-Club', '1:0'),
(33, '1940/1941', 'Rapid Wien', '22. Juni 1941', 'Berlin', 'Rapid Wien - FC Schalke 04', '4:3'),
(34, '1941/1942', 'FC Schalke 04', '5. Juli 1942', 'Berlin', 'FC Schalke 04 - Vienna Wien', '2:0'),
(35, '1942/1943', 'Dresdner SC', '27. Juni 1943', 'Berlin', 'Dresdner SC - FV Saarbrücken', '3:0'),
(36, '1943/1944', 'Dresdner SC', '18. Juni 1944', 'Berlin', 'Dresdner SC - LSV Hamburg', '4:0'),
(37, '1947/1948', '1. FC Nürnberg', '8. August 1948', 'Köln', '1. FC Nürnberg - 1. FC Kaiserslautern', '2:1'),
(38, '1948/1949', 'VfR Mannheim', '10. Juli 1949', 'Stuttgart', 'VfR Mannheim - BV 09 Borussia Dortmund', '3:2 n. V.'),
(39, '1949/1950', 'VfB Stuttgart', '25. Juni 1950', 'Berlin', 'VfB Stuttgart - Kickers Offenbach', '2:1'),
(40, '1950/1951', '1. FC Kaiserslautern', '30. Juni 1951', 'Berlin', '1. FC Kaiserslautern - Preußen Münster', '2:1'),
(41, '1951/1952', 'VfB Stuttgart', '22. Juni 1952', 'Ludwigshafen', 'VfB Stuttgart - 1. FC Saarbrücken', '3:2'),
(42, '1952/1953', '1. FC Kaiserslautern', '21. Juni 1953', 'Berlin', '1. FC Kaiserslautern - VfB Stuttgart', '4:1'),
(43, '1953/1954', 'Hannoverscher SV 96', '23. Mai 1954', 'Hamburg', 'Hannoverscher SV 96 - 1. FC Kaiserslautern', '5:1'),
(44, '1954/1955', 'Rot-Weiss Essen', '26. Juni 1955', 'Hannover', 'Rot-Weiss Essen - 1. FC Kaiserslautern', '4:3'),
(45, '1955/1956', 'BV 09 Borussia Dortmund', '24. Juni 1956', 'Berlin', 'BV 09 Borussia Dortmund - Karlsruher SC', '4:2'),
(46, '1956/1957', 'BV 09 Borussia Dortmund', '23. Juni 1957', 'Hannover', 'BV 09 Borussia Dortmund - Hamburger SV', '4:1'),
(47, '1957/1958', 'FC Schalke 04', '18. Mai 1958', 'Hannover', 'FC Schalke 04 - Hamburger SV', '3:0'),
(48, '1958/1959', 'Eintracht Frankfurt', '28. Juni 1959', 'Berlin', 'Eintracht Frankfurt - Kickers Offenbach', '5:3 n. V.'),
(49, '1959/1960', 'Hamburger SV', '25. Juni 1960', 'Frankfurt', 'Hamburger SV - 1. FC Köln', '3:2'),
(50, '1960/1961', '1. FC Nürnberg', '24. Juni 1961', 'Hannover', '1. FC Nürnberg - BV 09 Borussia Dortmund', '3:0'),
(51, '1961/1962', '1. FC Köln', '12. Mai 1962', 'Berlin', '1. FC Köln - 1. FC Nürnberg', '4:0'),
(52, '1962/1963', 'BV 09 Borussia Dortmund', '29. Juni 1963', 'Stuttgart', 'BV 09 Borussia Dortmund - 1. FC Köln', '3:1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deutsche_meister_1963_2020`
--

CREATE TABLE `deutsche_meister_1963_2020` (
  `ID` int(10) NOT NULL,
  `Saison` varchar(255) DEFAULT NULL,
  `Meister` varchar(255) DEFAULT NULL,
  `Tore` varchar(255) DEFAULT NULL,
  `Punkte` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `deutsche_meister_1963_2020`
--

INSERT INTO `deutsche_meister_1963_2020` (`ID`, `Saison`, `Meister`, `Tore`, `Punkte`) VALUES
(1, '1963/1964', '1. FC Köln', '78:40', '45:15'),
(2, '1964/1965', 'SV Werder Bremen', '54:29', '41:19'),
(3, '1965/1966', 'TSV 1860 München', '80:40', '50:18'),
(4, '1966/1967', 'Eintracht Braunschweig', '49:27', '43:25'),
(5, '1967/1968', '1. FC Nürnberg', '71:37', '47:21'),
(6, '1968/1969', 'FC Bayern München', '61:31', '46:22'),
(7, '1969/1970', 'Borussia Mönchengladbach', '71:29', '51:17'),
(8, '1970/1971', 'Borussia Mönchengladbach', '77:35', '50:18'),
(9, '1971/1972', 'FC Bayern München', '101:38', '55:13'),
(10, '1972/1973', 'FC Bayern München', '93:29', '54:14'),
(11, '1973/1974', 'FC Bayern München', '95:53', '49:19'),
(12, '1974/1975', 'Borussia Mönchengladbach', '86:40', '50:18'),
(13, '1975/1976', 'Borussia Mönchengladbach', '66:37', '45:23'),
(14, '1976/1977', 'Borussia Mönchengladbach', '58:34', '44:24'),
(15, '1977/1978', '1. FC Köln', '86:41', '	48:20'),
(16, '1978/1979', 'Hamburger SV', '78:32', '49:19'),
(17, '1979/1980', 'FC Bayern München', '84:33', '50:18'),
(18, '1980/1981', 'FC Bayern München', '89:41', '53:15'),
(19, '1981/1982', 'Hamburger SV', '95:45', '48:20'),
(20, '1982/1983', 'Hamburger SV', '79:33', '52:16'),
(21, '1983/1984', 'VfB Stuttgart', '79:33', '48:20'),
(22, '1984/1985', 'FC Bayern München', '79:38', '50:18'),
(23, '1985/1986', 'FC Bayern München', '82:31', '49:19'),
(24, '1986/1987', 'FC Bayern München', '67:31', '53:15'),
(25, '1987/1988', 'SV Werder Bremen', '61:22', '52:16'),
(26, '1988/1989', 'FC Bayern München', '67:26', '50:18'),
(27, '1989/1990', 'FC Bayern München', '64:28', '49:19'),
(28, '1990/1991', '1. FC Kaiserslautern', '72:45', '48:20'),
(29, '1991/1992', 'VfB Stuttgart', '62:32', '52:24'),
(30, '1992/1993', 'SV Werder Bremen', '68:30', '48:20'),
(31, '1993/1994', 'FC Bayern München', '68:37', '44:24'),
(32, '1994/1995', 'Borussia Dortmund', '67:33', '49:19'),
(33, '1995/1996', 'Borussia Dortmund', '76:38', '68'),
(34, '1996/1997', 'FC Bayern München', '68:34', '71'),
(35, '1997/1998', '1. FC Kaiserslautern', '63:39', '68'),
(36, '1998/1999', 'FC Bayern München', '76:28', '78'),
(37, '1999/2000', 'FC Bayern München', '73:28', '73'),
(38, '2000/2001', 'FC Bayern München', '62:37', '63'),
(39, '2001/2002', 'Borussia Dortmund', '62:33', '70'),
(40, '2002/2003', 'FC Bayern München', '70:25', '75'),
(41, '2003/2004', 'SV Werder Bremen', '79:38', '74'),
(42, '2004/2005', 'FC Bayern München', '75:33', '77'),
(43, '2005/2006', 'FC Bayern München', '67:32', '75'),
(44, '2006/2007', 'VfB Stuttgart', '61:37', '70'),
(45, '2007/2008', 'FC Bayern München', '68:21', '76'),
(46, '2008/2009', 'VfL Wolfsburg', '80:41', '69'),
(47, '2009/2010', 'FC Bayern München', '72:31', '70'),
(48, '2010/2011', 'Borussia Dortmund', '67:22', '75'),
(49, '2011/2012', 'Borussia Dortmund', '80:25', '81'),
(50, '2012/2013', 'FC Bayern München', '98:18', '91'),
(51, '2013/2014', 'FC Bayern München', '94:23', '90'),
(52, '2014/2015', 'FC Bayern München', '80:18', '79'),
(53, '2015/2016', 'FC Bayern München', '80:17', '88'),
(54, '2016/2017', 'FC Bayern München', '89:22', '82'),
(55, '2017/2018', 'FC Bayern München', '92:28', '84'),
(56, '2018/2019', 'FC Bayern München', '88:32', '78'),
(57, '2019/2020', 'FC Bayern München', '100:32', '82'),
(58, '2020/2021', 'FC Bayern München', '120:40', '100');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ewige_tabelle_der_bundesliga`
--

CREATE TABLE `ewige_tabelle_der_bundesliga` (
  `ID` int(11) NOT NULL,
  `Verein` varchar(255) NOT NULL,
  `Spiele` int(11) NOT NULL,
  `Siege` int(11) NOT NULL,
  `Unentschieden` int(11) NOT NULL,
  `Niederlagen` int(11) NOT NULL,
  `Tore` varchar(255) NOT NULL,
  `Tordifferenz` int(11) NOT NULL,
  `Punkte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `ewige_tabelle_der_bundesliga`
--

INSERT INTO `ewige_tabelle_der_bundesliga` (`ID`, `Verein`, `Spiele`, `Siege`, `Unentschieden`, `Niederlagen`, `Tore`, `Tordifferenz`, `Punkte`) VALUES
(1, 'Bayern München', 1899, 1138, 413, 348, '4207:2068', 2139, 3827),
(2, 'Borussia Dortmund', 1823, 818, 463, 542, '3268:2562', 706, 2917),
(3, 'Werder Bremen', 1925, 800, 485, 640, '3204:2814', 390, 2885),
(4, 'Hamburger SV', 1866, 746, 495, 625, '2937:2662', 275, 2733),
(5, 'VfB Stuttgart', 1823, 749, 443, 631, '3016:2665', 351, 2690),
(6, 'Bor. Mönchengladbach', 1797, 729, 471, 597, '3053:2601', 452, 2658),
(7, 'FC Schalke 04', 1789, 691, 453, 645, '2598:2587', 11, 2526),
(8, 'Eintracht Frankfurt', 1755, 645, 447, 663, '2754:2714', 40, 2380),
(9, '1. FC Köln', 1653, 644, 420, 589, '2691:2477', 214, 2352),
(10, 'Bayer 04 Leverkusen', 1423, 613, 386, 424, '2395:1900', 495, 2225),
(11, '1. FC Kaiserslautern', 1492, 575, 372, 545, '2348:2344', 4, 2094),
(12, 'Hertha BSC', 1275, 458, 321, 496, '1795:1955', -160, 1695),
(13, 'VfL Bochum', 1160, 356, 306, 498, '1602:1887', -285, 1374),
(14, '1. FC Nürnberg', 1118, 344, 286, 488, '1428:1794', -366, 1318),
(15, 'Hannover 96', 1016, 308, 250, 458, '1385:1734', -349, 1174),
(16, 'MSV Duisburg', 948, 296, 259, 393, '1291:1520', -229, 1147),
(17, 'VfL Wolfsburg', 807, 309, 210, 288, '1218:1168', 50, 1137),
(18, 'Fortuna Düsseldorf', 854, 264, 232, 358, '1245:1518', -273, 1024),
(19, 'Karlsruher SC', 812, 241, 230, 341, '1093:1408', -315, 953),
(20, 'Eintracht Braunschweig', 706, 242, 177, 287, '937:1086', -149, 903),
(21, '1860 München', 672, 238, 170, 264, '1022:1059', -37, 884),
(22, 'SC Freiburg', 705, 218, 183, 304, '887:1127', -240, 837),
(23, 'Arminia Bielefeld', 569, 159, 143, 267, '665:927', -262, 620),
(24, '1. FSV Mainz 05', 501, 164, 126, 211, '646:751', -105, 618),
(25, 'TSG Hoffenheim', 433, 154, 125, 154, '692:667', 25, 587),
(26, 'KFC Uerdingen 05', 476, 138, 129, 209, '644:844', -200, 543),
(27, 'Hansa Rostock', 412, 124, 107, 181, '492:621', -129, 479),
(28, 'FC Augsburg', 331, 99, 89, 143, '402:511', -109, 386),
(29, 'RB Leipzig', 161, 88, 42, 31, '314:179', 135, 306),
(30, 'Waldhof Mannheim', 238, 71, 72, 95, '299:378', -79, 285),
(31, 'Kickers Offenbach', 238, 77, 51, 110, '368:486', -118, 282),
(32, 'Rot-Weiss Essen', 238, 61, 79, 98, '346:483', -137, 262),
(33, 'FC St. Pauli', 272, 58, 80, 134, '296:485', -189, 254),
(34, 'Energie Cottbus', 204, 56, 43, 105, '211:338', -127, 211),
(35, 'Alemannia Aachen', 136, 43, 28, 65, '186:270', -84, 157),
(36, 'SG Wattenscheid 09', 140, 34, 48, 58, '186:248', -62, 150),
(37, '1. FC Saarbrücken', 166, 32, 48, 86, '202:336', -134, 144),
(38, '1. FC Dynamo Dresden', 140, 33, 45, 62, '132:211', -79, 140),
(39, 'Rot-Weiß Oberhausen', 136, 36, 31, 69, '182:281', -99, 139),
(40, 'SV Darmstadt 98', 136, 28, 33, 75, '152:273', -121, 117),
(41, 'Wuppertaler SV', 102, 25, 27, 50, '136:200', -64, 102),
(42, 'Borussia Neunkirchen', 98, 25, 18, 55, '109:223', -114, 93),
(43, 'FC 08 Homburg', 102, 21, 27, 54, '103:200', -97, 90),
(44, '1. FC Union Berlin', 60, 21, 16, 23, '81:90', -9, 79),
(45, 'SpVgg Unterhaching', 68, 20, 19, 29, '75:101', -26, 79),
(46, 'Stuttgarter Kickers', 72, 20, 17, 35, '94:132', -38, 77),
(47, 'FC Ingolstadt 04', 68, 18, 18, 32, '69:99', -30, 72),
(48, 'SC Paderborn 07', 68, 11, 18, 39, '68:139', -71, 51),
(49, 'Tennis Borussia Berlin', 68, 11, 16, 41, '85:174', -89, 49),
(50, 'SSV Ulm 1846', 34, 9, 8, 17, '36:62', -26, 35),
(51, 'Fortuna Köln', 34, 8, 9, 17, '46:79', -33, 33),
(52, 'Preußen Münster', 30, 7, 9, 14, '34:52', -18, 30),
(53, 'SpVgg Greuther Fürth', 34, 4, 9, 21, '26:60', -34, 21),
(54, 'SpVgg Blau-Weiß 90 Berlin', 34, 3, 12, 19, '36:76', -40, 21),
(55, 'VfB Leipzig', 34, 3, 11, 20, '32:69', -37, 20),
(56, 'SC Tasmania 1900 Berlin', 34, 2, 4, 28, '15:108', -93, 10);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `nachname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(6, 'timo.guenther@uni-wuerzburg.de', '$2y$10$n/7H.wXbnNUXh8Bn0VXe1.Ga7iXppK7hgGcUCCC8k4EZmmzn8yatO', 'Timo', 'Günther', '2021-03-26 18:23:26', '2021-03-26 18:23:26');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `deutsche_meister_1963_2020`
--
ALTER TABLE `deutsche_meister_1963_2020`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `deutsche_meister_1963_2020`
--
ALTER TABLE `deutsche_meister_1963_2020`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
