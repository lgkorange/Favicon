-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Jun 2015 um 09:15
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `myfavicons`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `favicons`
--

CREATE TABLE IF NOT EXISTS `favicons` (
`ID` int(10) unsigned NOT NULL,
  `url` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `lastUpdate` date NOT NULL,
  `nextUpdate` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `favicons`
--

INSERT INTO `favicons` (`ID`, `url`, `image`, `lastUpdate`, `nextUpdate`) VALUES
(1, 'http://blog.lgk.io', 'data: image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAehJREFUOI2NUTFrVEEQ/mZOkuPg7cxCJKnUgGCljUFUME0IFlY2opiIRRoLLdLZW2ihIOIPEDQiWFvYixglTRBRBLUQgiH33ruD84y5GZu94+W8iAPLsPvN983MfsCIUNVPIvJqFDYctVGP4+PjE8y8UK/Xt7rd7ur/CA1CRK6mKT6qqgNACOFsCOGmiCz9k6yqmzFGF5HpRqMxFWN0VX2ZsM8xRh/mcIW8SkQT7v68LMsvnU5nw8weENG8qs4C+LZn5yzLTqbO62mNOVW9kYQ3ROSnqno6OyKyvGuCWq22BADufgsAiOgFgPsA0Ov1zjNz3d1Ld19x921mvisic9UVDgBAq9V6pqoLRDTm7g8BoN1uvzazR8ws7n4dwJXU5PJAwN23+yMR0VbK+ytv9ZTXiGiSiACgAIB9CfgA4JyILOd5fk9EvjPzBVWdBnCYiKK7g5kPmtnRZrNJA/GUx2KMv9z9R1EUk+nz3hLRjJl1ieg9gOOViY7leb6+ywkRWUm+r41ySlU3+06EEOZH1UBV3yWRHRF5GkK41seyLDuVsDdVDlcvRVHMmNkdd//NzBeJ6PagkHnKzFpEdEJVF4f/4K+IMZ42szMALhHRkb4TZva4LMvFvXjDK82qqovIVxF5IiKHhmv+AEq3rOKvsBMuAAAAAElFTkSuQmCC', '2015-06-12', '2015-07-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favicons`
--
ALTER TABLE `favicons`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favicons`
--
ALTER TABLE `favicons`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
