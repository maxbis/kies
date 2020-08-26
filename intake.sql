-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 10 apr 2019 om 10:34
-- Serverversie: 5.5.57-0ubuntu0.14.04.1
-- PHP-versie: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competentie`
--

DROP TABLE IF EXISTS `competentie`;
CREATE TABLE IF NOT EXISTS `competentie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `omschrijving` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `competentie`
--

INSERT INTO `competentie` (`id`, `omschrijving`) VALUES
(1, 'Doorzetten'),
(2, 'Werken met tijdslimieten'),
(3, 'Probleemoplossend denken'),
(4, 'Logisch denken'),
(5, 'Analytisch denken'),
(6, 'Verbanden leggen'),
(7, 'Nauwkeurig werken'),
(8, 'Abstraheren');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dagcode`
--

DROP TABLE IF EXISTS `dagcode`;
CREATE TABLE IF NOT EXISTS `dagcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dagcode` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Gegevens worden uitgevoerd voor tabel `dagcode`
--

INSERT INTO `dagcode` (`id`, `dagcode`, `datum`, `type`) VALUES
(1, '123', '2019-03-13', 0),
(2, '4321', '2019-03-13', 1),
(4, 'UgA4a', '2019-03-16', 0),
(7, 'WYJ9w', '2019-03-14', 0),
(8, '4321', '2019-03-15', 1),
(9, 'BJE3m', '2019-03-19', 0),
(10, 'NlzU5', '2019-03-26', 0),
(11, '401b8', '2019-03-06', 0),
(12, 'DIIMZ', '2019-03-27', 0),
(13, 'i1kF1', '2019-03-28', 0),
(14, 'SK3yN', '2019-03-29', 0),
(15, 'VdG4l', '2019-04-09', 0),
(16, '4p2zJ', '2019-04-10', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `docent`
--

DROP TABLE IF EXISTS `docent`;
CREATE TABLE IF NOT EXISTS `docent` (
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden uitgevoerd voor tabel `docent`
--

INSERT INTO `docent` (`voornaam`, `achternaam`, `email`, `id`) VALUES
('docent', 'docent', 'docent@rocva.nl', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling`
--

DROP TABLE IF EXISTS `leerling`;
CREATE TABLE IF NOT EXISTS `leerling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `emailadres` varchar(50) NOT NULL,
  `starttijd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `eindtijd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Gegevens worden uitgevoerd voor tabel `leerling`
--

INSERT INTO `leerling` (`id`, `voornaam`, `achternaam`, `emailadres`, `starttijd`, `eindtijd`, `type`) VALUES
(36, 'a', 'a', 'a@a.nl', '2019-03-26 17:52:47', '2019-03-26 18:27:53', 0),
(37, 'm', 'm', 'm@m.nl', '2019-03-28 08:12:09', '0000-00-00 00:00:00', 0),
(38, 'n', 'n', 'n@N.nl', '2019-03-28 12:27:22', '2019-03-28 12:53:09', 0),
(39, 'Chris', 'Ooms', 'chris.ooms@student.rocva.nl', '2019-04-09 11:26:54', '0000-00-00 00:00:00', 0),
(40, 'Brian', 'de Graaff', 'briangraaff@gmail.com', '2019-04-09 11:27:00', '0000-00-00 00:00:00', 0),
(41, 'test', 'de tester', 'test@test.nl', '2019-04-09 11:35:25', '0000-00-00 00:00:00', 0),
(42, 'Giovanni', 'Kornet', '2044422@talnet.nl', '2019-04-09 11:36:23', '0000-00-00 00:00:00', 0),
(43, 'Toilet', 'Wc', '203913@talnet.nl', '2019-04-09 11:36:54', '0000-00-00 00:00:00', 0),
(44, 'Daj', 'Kaspers', 'dajkasp@gmail.com', '2019-04-09 11:37:18', '0000-00-00 00:00:00', 0),
(45, 'Adriaan', 'van der Heijden', 'lars@icewallowcome.nl', '2019-04-09 11:37:41', '0000-00-00 00:00:00', 0),
(46, 'gijs', 'vd weijden', 'gijs@mail.com', '2019-04-09 13:04:20', '0000-00-00 00:00:00', 0),
(47, 'test', 'de tester', '2046701@talnet.nl', '2019-04-09 13:04:21', '0000-00-00 00:00:00', 0),
(48, 'richard', 'agyekum', 'richardagyekum29@gmail.com', '2019-04-09 13:04:56', '0000-00-00 00:00:00', 0),
(49, 'Martijn', 'Kooijman', '2043325@talnet.nl', '2019-04-09 13:05:11', '0000-00-00 00:00:00', 0),
(50, 'Jesse', 'B', '2037344@talnet.nl', '2019-04-09 13:05:49', '0000-00-00 00:00:00', 0),
(51, 'wingfung', 'lam', '2039527@talnet.nl', '2019-04-09 13:06:03', '0000-00-00 00:00:00', 0),
(52, 'test', 'de tester', '2037510@talnet.nl', '2019-04-09 13:06:49', '0000-00-00 00:00:00', 0),
(53, 'test', 'tester', 'severon@live.nl', '2019-04-09 13:07:30', '0000-00-00 00:00:00', 0),
(54, 'henk', 'junkfood', 'veganjunkfoodbar@hotmail.com', '2019-04-09 13:08:42', '0000-00-00 00:00:00', 0),
(55, 'test', 'tester', '321321@hotmail.com', '2019-04-09 13:11:27', '0000-00-00 00:00:00', 0),
(56, 'wingfung', 'lam', '203927@talnet.nl', '2019-04-09 13:13:15', '0000-00-00 00:00:00', 0),
(57, 'Yunis', 'Kamstra', '2077013@talnet.nl', '2019-04-10 08:55:20', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerling_level`
--

DROP TABLE IF EXISTS `leerling_level`;
CREATE TABLE IF NOT EXISTS `leerling_level` (
  `leerlingId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL,
  `sterren` int(11) NOT NULL,
  `gereed` tinyint(1) NOT NULL,
  PRIMARY KEY (`leerlingId`,`levelId`),
  KEY `levelId` (`levelId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `leerling_level`
--

INSERT INTO `leerling_level` (`leerlingId`, `levelId`, `sterren`, `gereed`) VALUES
(36, 1, 1, 1),
(36, 2, 5, 1),
(36, 3, 5, 1),
(36, 4, 6, 1),
(36, 5, 5, 1),
(36, 9, 4, 1),
(37, 1, 0, 1),
(37, 2, 4, 1),
(37, 3, 5, 1),
(37, 4, 10, 0),
(38, 1, 5, 1),
(38, 2, 2, 1),
(38, 3, 1, 1),
(38, 4, 5, 1),
(38, 5, 0, 1),
(38, 9, 5, 1),
(39, 1, 5, 1),
(39, 2, 2, 1),
(39, 3, 5, 0),
(40, 1, 5, 1),
(40, 2, 3, 1),
(40, 3, 3, 1),
(40, 4, 10, 0),
(41, 1, 0, 1),
(41, 2, 2, 1),
(41, 3, 0, 1),
(41, 4, 10, 0),
(42, 1, 5, 1),
(42, 2, 3, 1),
(42, 3, 0, 1),
(42, 4, 10, 0),
(43, 1, 5, 1),
(43, 2, 2, 1),
(43, 3, 5, 0),
(44, 1, 1, 1),
(44, 2, 2, 1),
(44, 3, 2, 1),
(44, 4, 10, 0),
(45, 1, 5, 1),
(45, 2, 2, 1),
(45, 3, 2, 1),
(45, 4, 10, 0),
(46, 1, 5, 1),
(46, 2, 2, 1),
(46, 3, 5, 0),
(47, 1, 5, 1),
(47, 2, 5, 0),
(48, 1, 5, 1),
(48, 2, 4, 1),
(48, 3, 4, 1),
(48, 4, 10, 0),
(49, 1, 4, 1),
(49, 2, 2, 1),
(50, 1, 4, 1),
(50, 2, 5, 0),
(51, 1, 5, 1),
(51, 2, 5, 0),
(52, 1, 5, 1),
(52, 2, 5, 0),
(53, 1, 5, 1),
(53, 2, 5, 0),
(54, 1, 1, 1),
(54, 2, 5, 0),
(55, 1, 0, 1),
(55, 2, 3, 1),
(55, 3, 5, 0),
(56, 1, 1, 1),
(57, 1, 5, 1),
(57, 2, 2, 1),
(57, 3, 4, 1),
(57, 4, 9, 1),
(57, 5, 5, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `bestandsnaam` varchar(50) NOT NULL,
  `aantalSterren` int(11) NOT NULL,
  `cijfercode` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `level`
--

INSERT INTO `level` (`id`, `titel`, `bestandsnaam`, `aantalSterren`, `cijfercode`) VALUES
(1, 'Hardware of Software', 'linksRechts', 5, 2),
(2, 'Schuifpuzzel', 'schuifpuzzelA', 5, 6),
(3, 'Rekenen', 'rekenen', 5, 5),
(4, 'Stoplicht', 'stoplicht', 10, 4),
(5, 'Doolhof', 'doolhof', 5, 8),
(6, 'Nederlands', 'nederlands', 5, 3),
(7, 'sorteren', 'sorteren', 5, 1),
(8, 'Geheimcode', 'geheimecode', 5, 9),
(9, 'GPS locatie', 'vindUSB', 5, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `level_competentie`
--

DROP TABLE IF EXISTS `level_competentie`;
CREATE TABLE IF NOT EXISTS `level_competentie` (
  `levelId` int(11) NOT NULL,
  `competentieId` int(11) NOT NULL,
  PRIMARY KEY (`levelId`,`competentieId`),
  KEY `competentieId` (`competentieId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `level_competentie`
--

INSERT INTO `level_competentie` (`levelId`, `competentieId`) VALUES
(4, 1),
(6, 1),
(9, 1),
(2, 2),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(9, 3),
(1, 4),
(2, 4),
(3, 4),
(5, 4),
(7, 4),
(3, 5),
(4, 5),
(7, 5),
(9, 5),
(1, 6),
(8, 6),
(9, 6),
(4, 7),
(6, 7),
(7, 7),
(8, 7),
(1, 8),
(4, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `level_type`
--

DROP TABLE IF EXISTS `level_type`;
CREATE TABLE IF NOT EXISTS `level_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levelId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `levelId` (`levelId`),
  KEY `dagcodeId` (`type`),
  KEY `dagcodeId_2` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `level_type`
--

INSERT INTO `level_type` (`id`, `levelId`, `type`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 9, 0),
(8, 4, 1),
(9, 5, 1),
(10, 6, 1),
(11, 7, 1),
(12, 8, 1),
(13, 9, 1),
(14, 1, 1),
(15, 2, 1),
(20, 3, 1);

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `leerling_level`
--
ALTER TABLE `leerling_level`
  ADD CONSTRAINT `leerling_level_ibfk_1` FOREIGN KEY (`leerlingId`) REFERENCES `leerling` (`id`),
  ADD CONSTRAINT `leerling_level_ibfk_2` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`);

--
-- Beperkingen voor tabel `level_competentie`
--
ALTER TABLE `level_competentie`
  ADD CONSTRAINT `level_competentie_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `level_competentie_ibfk_2` FOREIGN KEY (`competentieId`) REFERENCES `competentie` (`id`);

--
-- Beperkingen voor tabel `level_type`
--
ALTER TABLE `level_type`
  ADD CONSTRAINT `level_type_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
