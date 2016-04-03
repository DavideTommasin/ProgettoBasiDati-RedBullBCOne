-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Lug 01, 2015 alle 15:18
-- Versione del server: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `RedBullBCOne`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `BBoyInvitato`
--

CREATE TABLE `BBoyInvitato` (
  `Nickname` varchar(20) NOT NULL DEFAULT '',
  `Nazionalita` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `Cognome` varchar(20) DEFAULT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL,
  `NazioneWorld` varchar(20) DEFAULT NULL,
  `CittaWorld` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `BBoyInvitato`
--

INSERT INTO `BBoyInvitato` (`Nickname`, `Nazionalita`, `EdizioneRedBull`, `Cognome`, `Nome`, `DataNascita`, `NazioneWorld`, `CittaWorld`) VALUES
('Alcolil', 'Russia', 2014, NULL, NULL, NULL, 'Francia', 'Parigi'),
('Engine', 'Oman', 2015, NULL, NULL, '1989-07-20', NULL, NULL),
('Gravity', 'America', 2014, 'Rosario', 'Miguel', '1992-03-14', 'Francia', 'Parigi'),
('Hong 10', 'Corea del Sud', 2014, 'Hong-Yeol', 'Kim', '1985-02-16', 'Francia', 'Parigi'),
('Just Fit', 'Giappone', 2015, NULL, NULL, '1890-05-14', NULL, NULL),
('Lil G', 'Venezuela', 2014, 'Gibrahimer', 'Beomont', '1990-05-02', 'Francia', 'Parigi'),
('Lilou', 'Algeria', 2014, 'Ramdani', 'Ali', '1990-06-25', 'Francia', 'Parigi'),
('Menno', 'Paesi Bassi', 2014, 'Van Gorp', 'Menno', '1991-06-23', 'Francia', 'Parigi'),
('Mounir', 'Francese', 2014, 'Biba', 'Mustafa', '1984-09-16', 'Francia', 'Parigi'),
('Padre', 'Serbia', 2015, 'Mihajlovic', 'Nemanja', '1989-04-20', NULL, NULL),
('Taisuke', 'Giapponese', 2014, 'Nonaka', 'Taisuke', '1989-12-21', 'Francia', 'Parigi'),
('Thesis', 'America', 2014, 'Lopez', 'Thias Kem', '1987-08-26', 'Francia', 'Parigi'),
('Wing', 'Corea del Sud', 2014, 'Woo', 'Kim Heon', '1988-06-10', 'Francia', 'Parigi');

-- --------------------------------------------------------

--
-- Struttura della tabella `BBoyIscritto`
--

CREATE TABLE `BBoyIscritto` (
  `Nickname` varchar(20) NOT NULL DEFAULT '',
  `Nazionalita` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `Cognome` varchar(20) DEFAULT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `BBoyIscritto`
--

INSERT INTO `BBoyIscritto` (`Nickname`, `Nazionalita`, `EdizioneRedBull`, `Cognome`, `Nome`, `DataNascita`) VALUES
('Abdallah', 'Africa', 2014, NULL, NULL, '1995-02-12'),
('Abdel 59', 'Francia', 2014, NULL, 'Abdel', '1990-08-09'),
('Artur', 'Svizzera', 2014, NULL, NULL, '1993-02-25'),
('Astro', 'Cina', 2014, 'ki-ju', 'fung', '1994-07-22'),
('Baby', 'Colombia', 2014, 'Jerez', 'Jaider', '2000-08-27'),
('Benny', 'South Africa', 2014, 'Burgess', 'Alfred', '1991-10-27'),
('Blond', 'Australia', 2014, 'Blond', 'Huao Fei', '1988-05-11'),
('Break Your Mind', 'Kazakistan', 2014, NULL, NULL, '1994-09-08'),
('Chairspin', 'Brasile', 2014, NULL, NULL, '1992-04-29'),
('Cheerito', 'Russo', 2014, 'Pervushkin', 'Evgeny', '1992-04-12'),
('Cirujano', 'Mexico', 2014, NULL, NULL, '1992-05-16'),
('Cranky', 'Tunisia', 2014, NULL, NULL, '1992-02-03'),
('Create', 'Asia', 2014, NULL, NULL, '1991-04-13'),
('Create', 'Kazakistan', 2014, NULL, NULL, '1993-06-23'),
('D-Out', 'Kyrgyzstan', 2014, NULL, NULL, '1997-01-24'),
('D12', 'Africa', 2014, NULL, NULL, '1992-09-12'),
('Easy', 'Kazakistan', 2014, NULL, NULL, '1995-10-13'),
('El Prcinho', 'Europa', 2014, NULL, NULL, '1997-07-12'),
('Engine', 'Oman', 2014, NULL, NULL, '1989-07-20'),
('Felix', 'Uzbekistan', 2014, NULL, NULL, '1996-09-23'),
('Fix', 'Kazakhistan', 2014, NULL, NULL, '1990-09-23'),
('Halekin', 'Austria', 2014, NULL, NULL, '1996-04-17'),
('Hong 10', 'Corea del Sud', 2006, 'Hong-Yeol', 'Kim', '1985-02-16'),
('Javi Style', 'America', 2014, NULL, NULL, '1990-05-18'),
('Jester', 'Turchia', 2014, NULL, NULL, '1997-06-24'),
('Jorik', 'Europa', 2014, NULL, NULL, '1990-03-02'),
('Just Fit', 'Giappone', 2014, NULL, NULL, '1890-05-14'),
('Justice', 'Bosnia & Herzegovina', 2014, NULL, NULL, '1990-08-01'),
('Kayco', 'Italia', 2014, NULL, NULL, '1990-08-19'),
('Kayzo', 'South Africa', 2014, NULL, 'Kayzo', '1990-06-17'),
('Klash', 'Egitto', 2014, NULL, NULL, '1992-09-27'),
('Lawson', 'Belgio', 2014, NULL, NULL, '1994-04-01'),
('Lil Kiko', 'Tajikistan', 2014, NULL, NULL, '1997-10-16'),
('Lima', 'America', 2014, NULL, NULL, '1994-01-20'),
('Luan', 'Brasile', 2014, NULL, 'Luan', '1991-02-08'),
('Lux de Lux', 'Europa', 2014, NULL, NULL, '1996-04-15'),
('Marius', 'Romania', 2014, NULL, NULL, '1995-05-05'),
('MN Joe', 'America', 2014, NULL, NULL, '2001-06-13'),
('Noe', 'Europa', 2014, NULL, NULL, '1993-11-30'),
('Noe', 'Francia', 2014, NULL, 'Noe', '1990-02-19'),
('Octopus', 'Asia', 2014, NULL, NULL, '1991-03-16'),
('Onel', 'Grecia', 2014, NULL, 'Onel', '1994-08-15'),
('Padre', 'Serbia', 2014, 'Mihajlovic', 'Nemanja', '1989-04-20'),
('Peppa', 'Dubai', 2014, NULL, 'David', '1999-12-03'),
('Pioneer', 'Georgia', 2014, 'Leontiev', 'Robert', '2014-07-22'),
('Ralph', 'Beirut', 2014, NULL, 'Ralph', '1995-06-27'),
('Ratin', 'America', 2014, NULL, NULL, '1994-04-08'),
('Rion', 'America', 2014, NULL, 'Rion', '1998-10-20'),
('Sean', 'Asia', 2014, NULL, 'Sean', '1992-02-25'),
('Sean', 'Australia', 2015, NULL, NULL, '1990-05-03'),
('Seasick', 'Kuwait', 2014, NULL, NULL, '1995-01-14'),
('Skim', 'Corea', 2014, NULL, NULL, '1993-06-11'),
('Slav', 'Bulgaria', 2014, 'Slav', NULL, '1995-06-06'),
('Somar', 'Jordan', 2014, 'Jafari', 'Somar', '1995-07-15'),
('Spin', 'Gran Bretagna', 2014, NULL, NULL, '1993-04-08'),
('Stany The Game', 'Russia', 2015, NULL, NULL, '1993-09-09'),
('Stimo', 'Arzebaijan', 2014, NULL, NULL, '1991-11-11'),
('Tonio', 'Francese', 2014, 'Gastao', 'Antonio Nvuani', '1990-08-12'),
('Tony T-Bags', 'America', 2014, NULL, 'Tony', '1993-01-20'),
('Toufeeq', 'South Africa', 2014, NULL, NULL, '1997-12-09'),
('Trashbotic', 'South Africa', 2014, 'Ish', 'Eezy', '1993-03-30'),
('Tung Fu', 'America', 2014, NULL, NULL, '1991-03-07'),
('Twist', 'Bahrain', 2014, NULL, NULL, '1995-11-03'),
('Victor', 'Americano', 2014, 'Montalvo', 'Victor', '1996-06-29'),
('Vision', 'Slovenia', 2014, NULL, 'Vid', '1994-01-11'),
('Wolf', 'Marocco', 2014, 'Ajdour', 'Mustapha', '1997-09-16'),
('Wooda', 'South Africa', 2014, NULL, NULL, '1992-09-02'),
('Xak', 'Spagna', 2014, NULL, NULL, '1992-06-01'),
('Zoopreme', 'Danimarca', 2014, 'Coker', 'Rico', '1991-11-27');

-- --------------------------------------------------------

--
-- Struttura della tabella `Cypher`
--

CREATE TABLE `Cypher` (
  `Nazione` varchar(20) NOT NULL DEFAULT '',
  `Citta` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `DataSvolgimento` date DEFAULT NULL,
  `NicknameBBoyVincitore` varchar(20) DEFAULT NULL,
  `NazionalitaBBoyVincitore` varchar(20) DEFAULT NULL,
  `NazioneFinal` varchar(20) DEFAULT NULL,
  `CittaFinal` varchar(20) DEFAULT NULL,
  `NicknameDj` varchar(20) DEFAULT NULL,
  `NazionalitaDj` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Cypher`
--

INSERT INTO `Cypher` (`Nazione`, `Citta`, `EdizioneRedBull`, `DataSvolgimento`, `NicknameBBoyVincitore`, `NazionalitaBBoyVincitore`, `NazioneFinal`, `CittaFinal`, `NicknameDj`, `NazionalitaDj`) VALUES
('Africa', 'Algeria', 2014, '2014-05-23', 'D12', 'Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('Africa', 'Senegal', 2014, '2014-05-25', 'Abdallah', 'Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('America', 'Chicago', 2014, '2014-06-07', 'MN Joe', 'America', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('America', 'Filadelfia', 2014, '2014-05-31', 'Tony T-Bags', 'America', 'America', 'Las Vegas', 'Skeme Richards', 'Americano'),
('America', 'Lima', 2014, '2014-06-14', 'Lima', 'America', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('America', 'Orlando', 2014, '2014-06-07', 'Tung Fu', 'America', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('America', 'San Paolo', 2014, '2014-06-01', 'Ratin', 'America', 'America', 'Las Vegas', 'Skeme Richards', 'Americano'),
('America', 'Santiago', 2014, '2014-06-08', 'Javi Style', 'America', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('America', 'Seattle', 2014, '2014-04-18', 'Rion', 'America', 'America', 'Las Vegas', 'Skeme Richards', 'Americano'),
('America del Sud', 'Mexico', 2014, '2014-05-24', 'Cirujano', 'Mexico', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('Arzebaijan', 'Baku', 2014, '2014-04-19', 'Stimo', 'Arzebaijan', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Asia', 'Busan', 2014, '2014-06-07', 'Octopus', 'Asia', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Asia', 'Kazakhistan', 2014, '2014-05-17', 'Create', 'Asia', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Australia', 'Singapore', 2015, '2015-03-20', 'Sean', 'Australia', NULL, NULL, NULL, NULL),
('Austria', 'Vienna', 2014, '2014-04-12', 'Halekin', 'Austria', 'Finlandia', 'Helsinki', 'Skeme Richards', 'Americano'),
('Bahrain', 'Manama', 2014, '2014-05-02', 'Twist', 'Bahrain', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('Beirut', 'Beirut', 2014, '2014-04-19', 'Ralph', 'Beirut', 'Taiwan', 'Taipei', 'Flash B', 'Kuwait'),
('Belgio', 'Leuven', 2014, '2014-05-01', 'Lawson', 'Belgio', 'Finlandia', 'Helsinki', 'Smirnoff', 'Russo'),
('Bosnia & Herzegovina', 'Tuzla', 2014, '2014-03-22', 'Justice', 'Bosnia & Herzegovina', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('Brasile', 'Rio De JaneIrio', 2014, '2014-05-14', 'Chairspin', 'Brasile', 'Brasile', 'Belem', 'Lean Rock', 'Americano'),
('Bulgaria', 'Sofia', 2014, '2014-03-22', 'Slav', 'Bulgaria', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('Cina', 'Hong Kong', 2014, '2014-03-15', 'Astro', 'Cina', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Colombia', 'Medelin', 2014, '2014-04-25', 'Baby', 'Colombia', 'Brasile', 'Belem', 'Lean Rock', 'Americano'),
('Corea', 'Seoul', 2014, '2014-05-24', 'Skim', 'Corea', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Danimarca', 'Copenaghen', 2014, '2014-04-04', 'Zoopreme', 'Danimarca', 'Finlandia', 'Helsinki', 'Skeme Richards', 'Americano'),
('Dubai', 'Dubai', 2014, '2014-04-25', 'Peppa', 'Dubai', 'Taiwan', 'Taipei', 'Flash B', 'Kuwait'),
('Egitto', 'Cairo', 2014, '2014-02-28', 'Klash', 'Egitto', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('Europa', 'Francia', 2014, '2014-06-05', 'Noe', 'Europa', 'Finlandia', 'Helsinki', 'Skeme Richards', 'Americano'),
('Europa', 'Moldova', 2014, '2014-05-31', 'Jorik', 'Europa', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('Europa', 'Praga', 2014, '2014-05-24', 'El Prcinho', 'Europa', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('Europa', 'Zagabria', 2014, '2014-06-07', 'Lux de Lux', 'Europa', 'Croazia', 'Zagreb', 'Flash B', 'Kuwait'),
('Francia', 'Halle aux Grains', 2014, '2014-03-08', 'Noe', 'Francia', 'Finlandia', 'Helsinki', 'Smirnoff', 'Russo'),
('Francia', 'Nantes', 2014, '2014-02-08', 'Abdel 59', 'Francia', 'Finlandia', 'Helsinki', 'Mar Ski', 'Giapponese'),
('Georgia', 'Tbilisi', 2014, '2014-04-13', 'Pioneer', 'Georgia', 'America', 'Las Vegas', 'Lean Rock', 'Americano'),
('Giappone', 'Hirosaky', 2014, '2014-05-17', 'Just Fit', 'Giappone', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Gran Bretagna', 'Londra', 2014, '2014-05-03', 'Spin', 'Gran Bretagna', 'Finlandia', 'Helsinki', 'Mar Ski', 'Giapponese'),
('Grecia', 'Atene', 2014, '2014-03-29', 'Onel', 'Grecia', 'Croazia', 'Zagreb', 'Mar Ski', 'Giapponese'),
('Italia', 'Bologna', 2014, '2014-03-08', 'Kayco', 'Italia', 'Finlandia', 'Helsinki', 'Skeme Richards', 'Americano'),
('Kazakhistan', 'Astana', 2014, '2014-05-07', 'Easy', 'Kazakistan', 'Taiwan', 'Taipei', 'Flash B', 'Kuwait'),
('Kazakistan', 'Almaty', 2014, '2014-04-26', 'Easy', 'Kazakistan', 'Taiwan', 'Taipei', 'Smirnoff', 'Russo'),
('Kazakistan', 'Karaganda', 2014, '2014-05-03', 'Create', 'Kazakistan', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Kazakistan', 'Shymkent City', 2014, '2014-05-01', 'Break Your Mind', 'Kazakistan', 'Taiwan', 'Taipei', 'Flash B', 'Kuwait'),
('Kuwait', 'Kuwait City', 2014, '2014-04-29', 'Seasick', 'Kuwait', 'Taiwan', 'Taipei', 'Flash B', 'Kuwait'),
('Kyrgyzstan', 'Bishkek', 2014, '2014-04-02', 'D-Out', 'Kyrgyzstan', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('Marocco', 'Marrakech', 2014, '2014-05-03', 'Wolf', 'Marocco', 'Algeria', 'Algeri', 'Smirnoff', 'Russo'),
('Oman', 'Muscat', 2014, '2014-05-03', 'Engine', 'Oman', 'Algeria', 'Algeri', 'Skeme Richards', 'Americano'),
('Romania', 'Bucarest', 2014, '2014-05-24', 'Marius', 'Romania', 'Croazia', 'Zagreb', 'Flash B', 'Kuwait'),
('Russia', 'Mosca', 2015, '2015-06-13', 'Stany The Game', 'Russia', NULL, NULL, NULL, NULL),
('Serbia', 'Belgrado', 2014, '2014-03-29', 'Padre', 'Serbia', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('Slovenia', 'Lubiana', 2014, '2014-05-10', 'Vision', 'Slovenia', 'Croazia', 'Zagreb', 'Smirnoff', 'Russo'),
('South Africa', 'Cape Town ', 2014, '2014-04-05', 'Trashbotic', 'South Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('South Africa', 'Durban', 2014, '2014-04-12', 'Kayzo', 'South Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('South Africa', 'Johanesburg', 2014, '2014-04-27', 'Toufeeq', 'South Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('South Africa', 'Johannesburg', 2014, '2014-04-06', 'Wooda', 'South Africa', 'Algeria', 'Algeri', 'Flash B', 'Kuwait'),
('Spagna', 'Madrid', 2014, '2014-04-26', 'Xak', 'Spagna', 'Finlandia', 'Helsinki', 'Smirnoff', 'Russo'),
('Svizzera', 'Neuchatel', 2014, '2014-05-18', 'Artur', 'Svizzera', 'Brasile', 'Belem', 'Lean Rock', 'Americano'),
('Tajikistan', 'Dushanbe', 2014, '2014-03-29', 'Lil Kiko', 'Tajikistan', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese'),
('Tunisia', 'Cartagine', 2014, '2014-05-10', 'Cranky', 'Tunisia', 'Algeria', 'Algeri', 'Smirnoff', 'Russo'),
('Turchia', 'Istanbul', 2014, '2014-05-11', 'Jester', 'Turchia', 'Finlandia', 'Helsinki', 'Mar Ski', 'Giapponese'),
('Uzbekistan', 'Tashkent', 2014, '2014-06-05', 'Felix', 'Uzbekistan', 'Taiwan', 'Taipei', 'Mar Ski', 'Giapponese');

-- --------------------------------------------------------

--
-- Struttura della tabella `Dj`
--

CREATE TABLE `Dj` (
  `Nickname` varchar(20) NOT NULL DEFAULT '',
  `Nazionalita` varchar(20) NOT NULL DEFAULT '',
  `Cognome` varchar(20) DEFAULT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Dj`
--

INSERT INTO `Dj` (`Nickname`, `Nazionalita`, `Cognome`, `Nome`, `DataNascita`) VALUES
('Flash B', 'Kuwait', 'Flash', 'Benjamin', '1981-10-13'),
('Lean Rock', 'Americano', 'Rock', 'Lean', '1989-09-16'),
('Mar Ski', 'Giapponese', 'Zulu', 'Mighty', '1985-01-13'),
('Skeme Richards', 'Americano', 'Richards', 'Medina', '1988-04-22'),
('Smirnoff', 'Russo', 'Sergey', 'Smirnov', '1984-02-27');

-- --------------------------------------------------------

--
-- Struttura della tabella `EdizioneRedBull`
--

CREATE TABLE `EdizioneRedBull` (
  `Anno` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `EdizioneRedBull`
--

INSERT INTO `EdizioneRedBull` (`Anno`) VALUES
(2006),
(2014),
(2015);

-- --------------------------------------------------------

--
-- Struttura della tabella `Final`
--

CREATE TABLE `Final` (
  `Nazione` varchar(20) NOT NULL DEFAULT '',
  `Citta` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `DataSvolgimento` date DEFAULT NULL,
  `Zona` varchar(20) DEFAULT NULL,
  `NicknameBBoyVincitore` varchar(20) DEFAULT NULL,
  `NazionalitaBBoyVincitore` varchar(20) DEFAULT NULL,
  `NazioneWorldFinal` varchar(20) DEFAULT NULL,
  `CittaWorldFinal` varchar(20) DEFAULT NULL,
  `NicknameDj` varchar(20) DEFAULT NULL,
  `NazionalitaDj` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Final`
--

INSERT INTO `Final` (`Nazione`, `Citta`, `EdizioneRedBull`, `DataSvolgimento`, `Zona`, `NicknameBBoyVincitore`, `NazionalitaBBoyVincitore`, `NazioneWorldFinal`, `CittaWorldFinal`, `NicknameDj`, `NazionalitaDj`) VALUES
('Algeria', 'Algeri', 2014, '2014-09-26', 'Middle East Africa', 'Benny', 'South Africa', 'Francia', 'Parigi', 'Skeme Richards', 'Americano'),
('America', 'Las Vegas', 2014, '2014-08-15', 'North America', 'Victor', 'Americano', 'Francia', 'Parigi', 'Skeme Richards', 'Americano'),
('Brasile', 'Belem', 2014, '2014-08-30', 'Latin America', 'Luan', 'Brasile', 'Francia', 'Parigi', 'Skeme Richards', 'Americano'),
('Croazia', 'Zagreb', 2014, '2014-09-13', 'Eastern Europe', 'Cheerito', 'Russo', 'Francia', 'Parigi', 'Skeme Richards', 'Americano'),
('Finlandia', 'Helsinki', 2014, '2014-10-11', 'Western Europe', 'Tonio', 'Francese', 'Francia', 'Parigi', 'Smirnoff', 'Russo'),
('Taiwan', 'Taipei', 2014, '2014-10-25', 'Asia Pacific', 'Blond', 'Australia', 'Francia', 'Parigi', 'Mar Ski', 'Giapponese');

-- --------------------------------------------------------

--
-- Struttura della tabella `Giudice`
--

CREATE TABLE `Giudice` (
  `Nickname` varchar(20) NOT NULL DEFAULT '',
  `Nazionalita` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `Cognome` varchar(20) DEFAULT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `DataNascita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Giudice`
--

INSERT INTO `Giudice` (`Nickname`, `Nazionalita`, `EdizioneRedBull`, `Cognome`, `Nome`, `DataNascita`) VALUES
('Admiracles', 'Belgio', 2014, 'Mirena', 'Admir', '1990-06-30'),
('Airdit', 'Germania', 2014, 'Gjikaj', 'Ardit', '1989-02-10'),
('Andrezinho', 'Brasile', 2014, 'Barbosa Martins', 'Andre Luiz', '1973-03-08'),
('Aranha', 'Brasile', 2014, NULL, NULL, '1990-11-11'),
('Axl Smith', 'Norvegia', 2014, NULL, NULL, '1987-09-03'),
('Beatmaster', 'Russia', 2014, NULL, NULL, '1985-09-29'),
('Benny', 'South Africa', 2014, 'Burgess', 'Alfred', '1990-09-24'),
('Bigiki', 'Cina', 2014, NULL, NULL, '1990-09-26'),
('Blond', 'Australia', 2015, 'Blond', 'Huao Fei', '1988-05-11'),
('Bootuz', 'Russia', 2014, NULL, NULL, '1988-04-26'),
('CHB', 'Egitto', 2014, NULL, NULL, '1993-07-23'),
('Cheerito', 'Russo', 2015, 'Pervushkin', 'Evgeny', '1992-04-12'),
('Chey', 'Spagna', 2014, 'Giles', 'Jose Jurado', '1992-06-29'),
('Cico', 'Italia', 2014, 'Peruzzi', 'Mauro', '1989-06-23'),
('Cima', 'Italia', 2014, 'Ciminieri', 'Marco', '1983-06-06'),
('Crazy Legs', 'America', 2014, NULL, NULL, '1970-12-14'),
('Dee-J', 'Egitto', 2014, NULL, NULL, '1992-11-02'),
('El nino', 'America', 2014, 'Diaz', 'Alex', '1984-08-03'),
('Elmo', 'Giappone', 2014, 'Jusky', 'Ei mu', '1985-09-05'),
('Felix', 'Giappone', 2014, NULL, NULL, '1986-08-04'),
('Fero', 'Turchia', 2014, NULL, NULL, '1989-11-10'),
('Flying Buddha', 'Ucraina', 2014, 'Li', 'Dmytro', '1989-09-03'),
('Franke', 'Romania', 2014, 'Octavian-Mihai', 'Marian', '1989-09-10'),
('Free', 'America', 2014, NULL, NULL, '1988-09-29'),
('Froz', 'Italia', 2014, 'Roman', 'Gorskiy', '1985-10-13'),
('Hong 10', 'Corea del Sud', 2014, 'Hong-Yeol', ' Kim', '1985-02-16'),
('Kaos', 'Venezuela', 2014, NULL, NULL, '1992-06-30'),
('Katsu', 'Corea del Sud', 2014, 'Ishikawa', 'Katsuyuki', '1986-11-10'),
('Keebz', 'America', 2014, NULL, NULL, '1986-06-17'),
('Ken Swift', 'America', 2014, 'Swift', 'Ken', '1982-11-25'),
('Kid David', 'America', 2014, 'Shreidman', 'David', '1990-05-04'),
('Kid Glyde', 'Belgio', 2014, 'Alicea', 'Victor', '1987-04-08'),
('Lamine', 'Francia', 2014, NULL, 'Lamine', '1981-03-22'),
('Lil G', ' Venezuela', 2014, 'Gibrahimer', ' Beomont', '1990-05-02'),
('Lilou', ' Algeria', 2014, 'Ramdani', 'Ali', '1990-06-25'),
('Luigi', 'America', 2014, 'Rosado', 'Luis', '1982-06-16'),
('Lux De Lux', 'Croazia', 2014, NULL, NULL, '1985-09-30'),
('Marley', 'America', 2014, 'Lizama', 'Marlon', '1989-06-25'),
('Maurizio', 'Italia', 2014, 'Besson', 'Maurizio', '1979-08-06'),
('Menno', 'Olanda', 2014, 'Van Gorp', 'Menno', '1990-05-05'),
('Monkey J', 'Cina', 2014, NULL, NULL, '1987-03-08'),
('Morris', 'America', 2014, NULL, 'Morris', '1987-02-09'),
('Mounir', ' Francese', 2014, 'Biba', 'Mustafa', '1984-09-16'),
('Neguin', 'Brasile', 2014, 'Lopes', 'Fabiano Carvalho', '1988-08-12'),
('Niek', 'Olanda', 2014, 'Traa', 'Niek', '1990-08-05'),
('Nori', 'Giapponese', 2014, 'Okamura', 'Takashi', '1993-10-06'),
('Omar', 'America', 2014, NULL, NULL, '1982-04-06'),
('Pelezinho', 'Brasile', 2014, 'Jose', 'Alex', '1986-04-05'),
('Physicx', 'Corea del Sud', 2014, NULL, NULL, '1984-09-02'),
('Pluto', 'Ucraina', 2014, 'Gregul', 'Andril', '1989-09-05'),
('Rhythmatic', 'Olanda', 2014, 'Rocha', 'Carlos', '1969-04-07'),
('Robin', 'Ucraina', 2014, NULL, 'Robin', '1986-09-09'),
('Ronnie', 'America', 2014, 'Abaldonado', 'Ronnie', '1980-01-07'),
('Roxrite', 'America', 2014, 'Marcias', 'Omar Delgado', '1986-08-04'),
('Sonic', 'Danimarca', 2014, 'Rojas', 'Daniel', '1985-07-06'),
('Soso', 'Francia', 2014, NULL, NULL, '1993-08-04'),
('Stanny', 'Belgio', 2014, NULL, NULL, '1987-07-09'),
('Swift Rock', 'Germania', 2014, 'Swift', NULL, '1982-04-29'),
('Taisuke', 'Giappone', 2014, 'Nonaka', 'Taisuke', '1989-12-21'),
('The End', 'Corea del Sud', 2014, 'Soo', 'Kim Yeo', '1984-06-17'),
('Thesis', 'America', 2014, 'Lopez', 'Thias Kem', '1987-08-26'),
('Tomsun', 'Austria', 2014, NULL, NULL, '1987-03-08'),
('Tomy', 'Slovenia', 2014, 'Cinej', 'Tomi', '1985-11-07'),
('Venum', 'America', 2014, NULL, NULL, '1991-10-07'),
('Vero', 'Corea del Sud', 2014, NULL, NULL, '1988-12-15'),
('Vouks', 'South Africa', 2014, NULL, NULL, '1982-04-21'),
('Wing', 'Corea del Sud', 2014, 'Woo', 'Kim Heo', '1988-04-15'),
('Y-Not', 'America', 2014, 'Denaro', 'Anthony', '1985-02-10'),
('Yaman', 'Francia', 2014, 'Gustave', 'Dominique', '1983-03-05'),
('Yan', 'Russia', 2014, 'Petrosky', 'Yan', '1987-09-16');

-- --------------------------------------------------------

--
-- Struttura della tabella `Iscrizione`
--

CREATE TABLE `Iscrizione` (
  `NicknameBBoyIscritto` varchar(20) NOT NULL DEFAULT '',
  `NazionalitaBBoyIscritto` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `NazioneCypher` varchar(20) NOT NULL DEFAULT '',
  `CittaCypher` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Iscrizione`
--

INSERT INTO `Iscrizione` (`NicknameBBoyIscritto`, `NazionalitaBBoyIscritto`, `EdizioneRedBull`, `NazioneCypher`, `CittaCypher`) VALUES
('D12', 'Africa', 2014, 'Africa', 'Algeria'),
('Abdallah', 'Africa', 2014, 'Africa', 'Senegal'),
('MN Joe', 'America', 2014, 'America', 'Chicago'),
('Tony T-Bags', 'America', 2014, 'America', 'Filadelfia'),
('Lima', 'America', 2014, 'America', 'Lima'),
('Tung Fu', 'America', 2014, 'America', 'Orlando'),
('Ratin', 'America', 2014, 'America', 'San Paolo'),
('Javi Style', 'America', 2014, 'America', 'Santiago'),
('Rion', 'America', 2014, 'America', 'Seattle'),
('Cirujano', 'Mexico', 2014, 'America del Sud', 'Mexico'),
('Stimo', 'Arzebaijan', 2014, 'Arzebaijan', 'Baku'),
('Octopus', 'Asia', 2014, 'Asia', 'Busan'),
('Create', 'Asia', 2014, 'Asia', 'Kazakhistan'),
('Sean', 'Australia', 2015, 'Australia', 'Singapore'),
('Halekin', 'Austria', 2014, 'Austria', 'Vienna'),
('Twist', 'Bahrain', 2014, 'Bahrain', 'Manama'),
('Ralph', 'Beirut', 2014, 'Beirut', 'Beirut'),
('Lawson', 'Belgio', 2014, 'Belgio', 'Leuven'),
('Justice', 'Bosnia & Herzegovina', 2014, 'Bosnia & Herzegovina', 'Tuzla'),
('Chairspin', 'Brasile', 2014, 'Brasile', 'Rio De JaneIrio'),
('Slav', 'Bulgaria', 2014, 'Bulgaria', 'Sofia'),
('Astro', 'Cina', 2014, 'Cina', 'Hong Kong'),
('Baby', 'Colombia', 2014, 'Colombia', 'Medelin'),
('Skim', 'Corea', 2014, 'Corea', 'Seoul'),
('Zoopreme', 'Danimarca', 2014, 'Danimarca', 'Copenaghen'),
('Peppa', 'Dubai', 2014, 'Dubai', 'Dubai'),
('Klash', 'Egitto', 2014, 'Egitto', 'Cairo'),
('Noe', 'Europa', 2014, 'Europa', 'Francia'),
('Jorik', 'Europa', 2014, 'Europa', 'Moldova'),
('El Prcinho', 'Europa', 2014, 'Europa', 'Praga'),
('Lux de Lux', 'Europa', 2014, 'Europa', 'Zagabria'),
('Noe', 'Francia', 2014, 'Francia', 'Halle aux Grains'),
('Abdel 59', 'Francia', 2014, 'Francia', 'Nantes'),
('Pioneer', 'Georgia', 2014, 'Georgia', 'Tbilisi'),
('Just Fit', 'Giappone', 2014, 'Giappone', 'Hirosaky'),
('Spin', 'Gran Bretagna', 2014, 'Gran Bretagna', 'Londra'),
('Onel', 'Grecia', 2014, 'Grecia', 'Atene'),
('Kayco', 'Italia', 2014, 'Italia', 'Bologna'),
('Easy', 'Kazakistan', 2014, 'Kazakhistan', 'Astana'),
('Easy', 'Kazakistan', 2014, 'Kazakistan', 'Almaty'),
('Create', 'Kazakistan', 2014, 'Kazakistan', 'Karaganda'),
('Break Your Mind', 'Kazakistan', 2014, 'Kazakistan', 'Shymkent City'),
('Seasick', 'Kuwait', 2014, 'Kuwait', 'Kuwait City'),
('D-Out', 'Kyrgyzstan', 2014, 'Kyrgyzstan', 'Bishkek'),
('Wolf', 'Marocco', 2014, 'Marocco', 'Marrakech'),
('Engine', 'Oman', 2014, 'Oman', 'Muscat'),
('Marius', 'Romania', 2014, 'Romania', 'Bucarest'),
('Stany The Game', 'Russia', 2015, 'Russia', 'Mosca'),
('Padre', 'Serbia', 2014, 'Serbia', 'Belgrado'),
('Vision', 'Slovenia', 2014, 'Slovenia', 'Lubiana'),
('Trashbotic', 'South Africa', 2014, 'South Africa', 'Cape Town'),
('Kayzo', 'South Africa', 2014, 'South Africa', 'Durban'),
('Toufeeq', 'South Africa', 2014, 'South Africa', 'Johanesburg'),
('Wooda', 'South Africa', 2014, 'South Africa', 'Johannesburg'),
('Xak', 'Spagna', 2014, 'Spagna', 'Madrid'),
('Artur', 'Svizzera', 2014, 'Svizzera', 'Neuchatel'),
('Lil Kiko', 'Tajikistan', 2014, 'Tajikistan', 'Dushanbe'),
('Cranky', 'Tunisia', 2014, 'Tunisia', 'Cartagine'),
('Jester', 'Turchia', 2014, 'Turchia', 'Istanbul'),
('Felix', 'Uzbekistan', 2014, 'Uzbekistan', 'Tashkent');

-- --------------------------------------------------------

--
-- Struttura della tabella `Login`
--

CREATE TABLE `Login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Login`
--

INSERT INTO `Login` (`Username`, `Password`, `email`) VALUES
('amministratore', 'amministratore', 'amministratore@gmail.com'),
('cascavilla_giuseppe', 'basi', 'cascavilla@di.uniroma1.it'),
('conti_mauro', 'basi', 'conti@math.unipd.it'),
('spolaor_riccardo', 'basi', 'riccardo.spolaor@math.unipd.it'),
('tommasin_davide', 'studente', 'davide.tommasin.1@studenti.math.unipd.it');

--
-- Trigger `Login`
--
DELIMITER $$
CREATE TRIGGER `controllaMail` BEFORE INSERT ON `login`
 FOR EACH ROW BEGIN
  DECLARE errore VARCHAR(20);
  IF(new.email NOT LIKE '%_@%_.__%') THEN  
    SELECT Username INTO errore
    FROM Login
    LIMIT 1;
    INSERT INTO Login (Username) VALUES (errore);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struttura della tabella `PresiedereCypher`
--

CREATE TABLE `PresiedereCypher` (
  `NicknameGiudice` varchar(20) NOT NULL DEFAULT '',
  `NazionalitaGiudice` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `NazioneCypher` varchar(20) NOT NULL DEFAULT '',
  `CittaCypher` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `PresiedereCypher`
--

INSERT INTO `PresiedereCypher` (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`, `NazioneCypher`, `CittaCypher`) VALUES
('Lilou', ' Algeria', 2014, 'Africa', 'Algeria'),
('Mounir', ' Francese', 2014, 'Africa', 'Algeria'),
('Soso', 'Francia', 2014, 'Africa', 'Algeria'),
('Lilou', ' Algeria', 2014, 'Africa', 'Senegal'),
('Mounir', ' Francese', 2014, 'Africa', 'Senegal'),
('Ken Swift', 'America', 2014, 'America', 'Chicago'),
('Ronnie', 'America', 2014, 'America', 'Chicago'),
('Keebz', 'America', 2014, 'America', 'Orlando'),
('Omar', 'America', 2014, 'America', 'Orlando'),
('Andrezinho', 'Brasile', 2014, 'America', 'San Paolo'),
('Aranha', 'Brasile', 2014, 'America', 'San Paolo'),
('Pelezinho', 'Brasile', 2014, 'America', 'San Paolo'),
('Crazy Legs', 'America', 2014, 'America', 'Seattle'),
('Free', 'America', 2014, 'America', 'Seattle'),
('Roxrite', 'America', 2014, 'America', 'Seattle'),
('Keebz', 'America', 2014, 'America del Sud', 'Mexico'),
('Morris', 'America', 2014, 'America del Sud', 'Mexico'),
('Roxrite', 'America', 2014, 'America del Sud', 'Mexico'),
('Bootuz', 'Russia', 2014, 'Arzebaijan', 'Baku'),
('Hong 10', 'Corea del Sud', 2014, 'Arzebaijan', 'Baku'),
('Neguin', 'Brasile', 2014, 'Arzebaijan', 'Baku'),
('Blond', 'Australia', 2015, 'Australia', 'Singapore'),
('Beatmaster', 'Russia', 2014, 'Austria', 'Vienna'),
('Roxrite', 'America', 2014, 'Austria', 'Vienna'),
('Tomsun', 'Austria', 2014, 'Austria', 'Vienna'),
('Lil G', ' Venezuela', 2014, 'Bahrain', 'Manama'),
('Pelezinho', 'Brasile', 2014, 'Bahrain', 'Manama'),
('Wing', 'Corea del Sud', 2014, 'Bahrain', 'Manama'),
('Cico', 'Italia', 2014, 'Beirut', 'Beirut'),
('Lamine', 'Francia', 2014, 'Beirut', 'Beirut'),
('Ronnie', 'America', 2014, 'Beirut', 'Beirut'),
('Kid Glyde', 'Belgio', 2014, 'Belgio', 'Leuven'),
('Roxrite', 'America', 2014, 'Belgio', 'Leuven'),
('Stanny', 'Belgio', 2014, 'Belgio', 'Leuven'),
('Lux De Lux', 'Croazia', 2014, 'Bosnia & Herzegovina', 'Tuzla'),
('Mounir', ' Francese', 2014, 'Bosnia & Herzegovina', 'Tuzla'),
('Ronnie', 'America', 2014, 'Bosnia & Herzegovina', 'Tuzla'),
('Admiracles', 'Belgio', 2014, 'Bulgaria', 'Sofia'),
('Roxrite', 'America', 2014, 'Bulgaria', 'Sofia'),
('Tomy', 'Slovenia', 2014, 'Bulgaria', 'Sofia'),
('Bigiki', 'Cina', 2014, 'Cina', 'Hong Kong'),
('Monkey J', 'Cina', 2014, 'Cina', 'Hong Kong'),
('Wing', 'Corea del Sud', 2014, 'Cina', 'Hong Kong'),
('Neguin', 'Brasile', 2014, 'Colombia', 'Medelin'),
('Thesis', 'America', 2014, 'Colombia', 'Medelin'),
('Hong 10', 'Corea del Sud', 2014, 'Corea', 'Seoul'),
('Physicx', 'Corea del Sud', 2014, 'Corea', 'Seoul'),
('Wing', 'Corea del Sud', 2014, 'Corea', 'Seoul'),
('Taisuke', 'Giappone', 2014, 'Danimarca', 'Copenaghen'),
('Venum', 'America', 2014, 'Danimarca', 'Copenaghen'),
('CHB', 'Egitto', 2014, 'Egitto', 'Cairo'),
('Dee-J', 'Egitto', 2014, 'Egitto', 'Cairo'),
('Wing', 'Corea del Sud', 2014, 'Egitto', 'Cairo'),
('Airdit', 'Germania', 2014, 'Europa', 'Moldova'),
('Franke', 'Romania', 2014, 'Europa', 'Moldova'),
('Pluto', 'Ucraina', 2014, 'Europa', 'Moldova'),
('Lil G', ' Venezuela', 2014, 'Europa', 'Praga'),
('Robin', 'Ucraina', 2014, 'Europa', 'Praga'),
('Pelezinho', 'Brasile', 2014, 'Europa', 'Zagabria'),
('Swift Rock', 'Germania', 2014, 'Europa', 'Zagabria'),
('Bootuz', 'Russia', 2014, 'Georgia', 'Tbilisi'),
('Hong 10', 'Corea del Sud', 2014, 'Georgia', 'Tbilisi'),
('Neguin', 'Brasile', 2014, 'Georgia', 'Tbilisi'),
('Roxrite', 'America', 2014, 'Gran Bretagna', 'Londra'),
('Swift Rock', 'Germania', 2014, 'Gran Bretagna', 'Londra'),
('Lamine', 'Francia', 2014, 'Grecia', 'Atene'),
('Lil G', ' Venezuela', 2014, 'Grecia', 'Atene'),
('Mounir', ' Francese', 2014, 'Grecia', 'Atene'),
('Cima', 'Italia', 2014, 'Italia', 'Bologna'),
('Kid David', 'America', 2014, 'Italia', 'Bologna'),
('Physicx', 'Corea del Sud', 2014, 'Italia', 'Bologna'),
('Flying Buddha', 'Ucraina', 2014, 'Kazakhistan', 'Astana'),
('Froz', 'Italia', 2014, 'Kazakhistan', 'Astana'),
('Mounir', ' Francese', 2014, 'Kazakhistan', 'Astana'),
('Bootuz', 'Russia', 2014, 'Kyrgyzstan', 'Bishkek'),
('Hong 10', 'Corea del Sud', 2014, 'Kyrgyzstan', 'Bishkek'),
('Pluto', 'Ucraina', 2014, 'Kyrgyzstan', 'Bishkek'),
('Lilou', ' Algeria', 2014, 'Marocco', 'Marrakech'),
('Soso', 'Francia', 2014, 'Marocco', 'Marrakech'),
('Lil G', ' Venezuela', 2014, 'Oman', 'Muscat'),
('Pelezinho', 'Brasile', 2014, 'Oman', 'Muscat'),
('Wing', 'Corea del Sud', 2014, 'Oman', 'Muscat'),
('Airdit', 'Germania', 2014, 'Romania', 'Bucarest'),
('Franke', 'Romania', 2014, 'Romania', 'Bucarest'),
('Yan', 'Russia', 2014, 'Romania', 'Bucarest'),
('Cheerito', 'Russo', 2015, 'Russia', 'Mosca'),
('Cico', 'Italia', 2014, 'Serbia', 'Belgrado'),
('Menno', 'Olanda', 2014, 'Serbia', 'Belgrado'),
('Benny', 'South Africa', 2014, 'South Africa', 'Johannesburg'),
('Vouks', 'South Africa', 2014, 'South Africa', 'Johannesburg'),
('Chey', 'Spagna', 2014, 'Spagna', 'Madrid'),
('Kaos', 'Venezuela', 2014, 'Spagna', 'Madrid'),
('Ken Swift', 'America', 2014, 'Spagna', 'Madrid'),
('Roxrite', 'America', 2014, 'Spagna', 'Madrid'),
('Hong 10', 'Corea del Sud', 2014, 'Svizzera', 'Neuchatel'),
('Neguin', 'Brasile', 2014, 'Svizzera', 'Neuchatel'),
('Niek', 'Olanda', 2014, 'Svizzera', 'Neuchatel'),
('Bootuz', 'Russia', 2014, 'Tajikistan', 'Dushanbe'),
('Hong 10', 'Corea del Sud', 2014, 'Tajikistan', 'Dushanbe'),
('Pluto', 'Ucraina', 2014, 'Tajikistan', 'Dushanbe'),
('Lilou', ' Algeria', 2014, 'Tunisia', 'Cartagine'),
('Soso', 'Francia', 2014, 'Tunisia', 'Cartagine'),
('Fero', 'Turchia', 2014, 'Turchia', 'Istanbul'),
('Ronnie', 'America', 2014, 'Turchia', 'Istanbul'),
('Bootuz', 'Russia', 2014, 'Uzbekistan', 'Tashkent'),
('Hong 10', 'Corea del Sud', 2014, 'Uzbekistan', 'Tashkent'),
('Pluto', 'Ucraina', 2014, 'Uzbekistan', 'Tashkent');

-- --------------------------------------------------------

--
-- Struttura della tabella `PresiedereFinal`
--

CREATE TABLE `PresiedereFinal` (
  `NicknameGiudice` varchar(20) NOT NULL DEFAULT '',
  `NazionalitaGiudice` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `NazioneFinal` varchar(20) NOT NULL DEFAULT '',
  `CittaFinal` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `PresiedereFinal`
--

INSERT INTO `PresiedereFinal` (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`, `NazioneFinal`, `CittaFinal`) VALUES
('Lilou', ' Algeria', 2014, 'Algeria', 'Algeri'),
('Mounir', ' Francese', 2014, 'Algeria', 'Algeri'),
('Niek', 'Olanda', 2014, 'Algeria', 'Algeri'),
('Marley', 'America', 2014, 'America', 'Las Vegas'),
('Neguin', 'Brasile', 2014, 'America', 'Las Vegas'),
('Roxrite', 'America', 2014, 'America', 'Las Vegas'),
('Cico', 'Italia', 2014, 'Brasile', 'Belem'),
('El nino', 'America', 2014, 'Brasile', 'Belem'),
('Pelezinho', 'Brasile', 2014, 'Brasile', 'Belem'),
('Hong 10', 'Corea del Sud', 2014, 'Croazia', 'Zagreb'),
('Lamine', 'Francia', 2014, 'Croazia', 'Zagreb'),
('Yan', 'Russia', 2014, 'Croazia', 'Zagreb'),
('Maurizio', 'Italia', 2014, 'Finlandia', 'Helsinki'),
('Roxrite', 'America', 2014, 'Finlandia', 'Helsinki'),
('Swift Rock', 'Germania', 2014, 'Finlandia', 'Helsinki'),
('Elmo', 'Giappone', 2014, 'Taiwan', 'Taipei'),
('Katsu', 'Corea del Sud', 2014, 'Taiwan', 'Taipei'),
('Mounir', ' Francese', 2014, 'Taiwan', 'Taipei'),
('Neguin', 'Brasile', 2014, 'Taiwan', 'Taipei');

-- --------------------------------------------------------

--
-- Struttura della tabella `PresiedereWorldFinal`
--

CREATE TABLE `PresiedereWorldFinal` (
  `NicknameGiudice` varchar(20) NOT NULL DEFAULT '',
  `NazionalitaGiudice` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `NazioneWorldFinal` varchar(20) NOT NULL DEFAULT '',
  `CittaWorldFinal` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `PresiedereWorldFinal`
--

INSERT INTO `PresiedereWorldFinal` (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`, `NazioneWorldFinal`, `CittaWorldFinal`) VALUES
('Ken Swift', 'America', 2014, 'Francia', 'Parigi'),
('Luigi', 'America', 2014, 'Francia', 'Parigi'),
('The End', 'Corea del Sud', 2014, 'Francia', 'Parigi'),
('Yaman', 'Francia', 2014, 'Francia', 'Parigi'),
('Yan', 'Russia', 2014, 'Francia', 'Parigi');

-- --------------------------------------------------------

--
-- Struttura della tabella `WorldFinal`
--

CREATE TABLE `WorldFinal` (
  `Nazione` varchar(20) NOT NULL DEFAULT '',
  `Citta` varchar(20) NOT NULL DEFAULT '',
  `EdizioneRedBull` year(4) NOT NULL DEFAULT '0000',
  `DataSvolgimento` date DEFAULT NULL,
  `NicknameBBoyVincitoreInvitato` varchar(20) DEFAULT NULL,
  `NazionalitaBBoyVincitoreInvitato` varchar(20) DEFAULT NULL,
  `NicknameBBoyVincitoreIscritto` varchar(20) DEFAULT NULL,
  `NazionalitaBBoyVincitoreIscritto` varchar(20) DEFAULT NULL,
  `NicknameDj` varchar(20) DEFAULT NULL,
  `NazionalitaDj` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `WorldFinal`
--

INSERT INTO `WorldFinal` (`Nazione`, `Citta`, `EdizioneRedBull`, `DataSvolgimento`, `NicknameBBoyVincitoreInvitato`, `NazionalitaBBoyVincitoreInvitato`, `NicknameBBoyVincitoreIscritto`, `NazionalitaBBoyVincitoreIscritto`, `NicknameDj`, `NazionalitaDj`) VALUES
('Brasile', 'San Paolo', 2006, '2006-11-19', NULL, NULL, 'Hong 10', 'Corea del Sud', 'Lean Rock', 'Americano'),
('Francia', 'Parigi', 2014, '2014-11-29', 'Hong 10', 'Corea del Sud', NULL, NULL, 'Lean Rock', 'Americano');

--
-- Trigger `WorldFinal`
--
DELIMITER $$
CREATE TRIGGER `creaUserSito` AFTER INSERT ON `worldfinal`
 FOR EACH ROW BEGIN
    IF NOT EXISTS (SELECT L.Username
          FROM Login L
          WHERE L.Username = new.NicknameBBoyVincitoreInvitato
            OR L.Username = new.NicknameBBoyVincitoreIscritto) THEN
      IF (new.NicknameBBoyVincitoreInvitato IS NOT NULL) THEN
          INSERT INTO Login (Username, Password, email) VALUES (new.NicknameBBoyVincitoreInvitato,new.NicknameBBoyVincitoreInvitato, 'email@email.com');
      ELSE
          INSERT INTO Login (Username, Password, email) VALUES (new.NicknameBBoyVincitoreIscritto,new.NicknameBBoyVincitoreIscritto , 'email@email.com');
      END IF;
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BBoyInvitato`
--
ALTER TABLE `BBoyInvitato`
  ADD PRIMARY KEY (`Nickname`,`Nazionalita`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`),
  ADD KEY `NazioneWorld` (`NazioneWorld`,`CittaWorld`,`EdizioneRedBull`);

--
-- Indexes for table `BBoyIscritto`
--
ALTER TABLE `BBoyIscritto`
  ADD PRIMARY KEY (`Nickname`,`Nazionalita`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`);

--
-- Indexes for table `Cypher`
--
ALTER TABLE `Cypher`
  ADD PRIMARY KEY (`Nazione`,`Citta`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`),
  ADD KEY `NicknameBBoyVincitore` (`NicknameBBoyVincitore`,`NazionalitaBBoyVincitore`,`EdizioneRedBull`),
  ADD KEY `NazioneFinal` (`NazioneFinal`,`CittaFinal`,`EdizioneRedBull`),
  ADD KEY `NicknameDj` (`NicknameDj`,`NazionalitaDj`);

--
-- Indexes for table `Dj`
--
ALTER TABLE `Dj`
  ADD PRIMARY KEY (`Nickname`,`Nazionalita`);

--
-- Indexes for table `EdizioneRedBull`
--
ALTER TABLE `EdizioneRedBull`
  ADD PRIMARY KEY (`Anno`);

--
-- Indexes for table `Final`
--
ALTER TABLE `Final`
  ADD PRIMARY KEY (`Nazione`,`Citta`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`),
  ADD KEY `NicknameBBoyVincitore` (`NicknameBBoyVincitore`,`NazionalitaBBoyVincitore`,`EdizioneRedBull`),
  ADD KEY `NazioneWorldFinal` (`NazioneWorldFinal`,`CittaWorldFinal`,`EdizioneRedBull`),
  ADD KEY `NicknameDj` (`NicknameDj`,`NazionalitaDj`);

--
-- Indexes for table `Giudice`
--
ALTER TABLE `Giudice`
  ADD PRIMARY KEY (`Nickname`,`Nazionalita`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`);

--
-- Indexes for table `Iscrizione`
--
ALTER TABLE `Iscrizione`
  ADD PRIMARY KEY (`NicknameBBoyIscritto`,`NazionalitaBBoyIscritto`,`EdizioneRedBull`,`NazioneCypher`,`CittaCypher`),
  ADD KEY `NazioneCypher` (`NazioneCypher`,`CittaCypher`,`EdizioneRedBull`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `PresiedereCypher`
--
ALTER TABLE `PresiedereCypher`
  ADD PRIMARY KEY (`NicknameGiudice`,`NazionalitaGiudice`,`EdizioneRedBull`,`NazioneCypher`,`CittaCypher`),
  ADD KEY `NazioneCypher` (`NazioneCypher`,`CittaCypher`,`EdizioneRedBull`);

--
-- Indexes for table `PresiedereFinal`
--
ALTER TABLE `PresiedereFinal`
  ADD PRIMARY KEY (`NicknameGiudice`,`NazionalitaGiudice`,`EdizioneRedBull`,`NazioneFinal`,`CittaFinal`),
  ADD KEY `NazioneFinal` (`NazioneFinal`,`CittaFinal`,`EdizioneRedBull`);

--
-- Indexes for table `PresiedereWorldFinal`
--
ALTER TABLE `PresiedereWorldFinal`
  ADD PRIMARY KEY (`NicknameGiudice`,`NazionalitaGiudice`,`EdizioneRedBull`,`NazioneWorldFinal`,`CittaWorldFinal`),
  ADD KEY `NazioneWorldFinal` (`NazioneWorldFinal`,`CittaWorldFinal`,`EdizioneRedBull`);

--
-- Indexes for table `WorldFinal`
--
ALTER TABLE `WorldFinal`
  ADD PRIMARY KEY (`Nazione`,`Citta`,`EdizioneRedBull`),
  ADD KEY `EdizioneRedBull` (`EdizioneRedBull`),
  ADD KEY `NicknameDj` (`NicknameDj`,`NazionalitaDj`),
  ADD KEY `NicknameBBoyVincitoreInvitato` (`NicknameBBoyVincitoreInvitato`,`NazionalitaBBoyVincitoreInvitato`,`EdizioneRedBull`),
  ADD KEY `NicknameBBoyVincitoreIscritto` (`NicknameBBoyVincitoreIscritto`,`NazionalitaBBoyVincitoreIscritto`,`EdizioneRedBull`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `BBoyInvitato`
--
ALTER TABLE `BBoyInvitato`
  ADD CONSTRAINT `bboyinvitato_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`),
  ADD CONSTRAINT `bboyinvitato_ibfk_2` FOREIGN KEY (`NazioneWorld`, `CittaWorld`, `EdizioneRedBull`) REFERENCES `WorldFinal` (`Nazione`, `Citta`, `EdizioneRedBull`);

--
-- Limiti per la tabella `BBoyIscritto`
--
ALTER TABLE `BBoyIscritto`
  ADD CONSTRAINT `bboyiscritto_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`);

--
-- Limiti per la tabella `Cypher`
--
ALTER TABLE `Cypher`
  ADD CONSTRAINT `cypher_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`),
  ADD CONSTRAINT `cypher_ibfk_2` FOREIGN KEY (`NicknameBBoyVincitore`, `NazionalitaBBoyVincitore`, `EdizioneRedBull`) REFERENCES `BBoyIscritto` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `cypher_ibfk_3` FOREIGN KEY (`NazioneFinal`, `CittaFinal`, `EdizioneRedBull`) REFERENCES `Final` (`Nazione`, `Citta`, `EdizioneRedBull`),
  ADD CONSTRAINT `cypher_ibfk_4` FOREIGN KEY (`NicknameDj`, `NazionalitaDj`) REFERENCES `Dj` (`Nickname`, `Nazionalita`);

--
-- Limiti per la tabella `Final`
--
ALTER TABLE `Final`
  ADD CONSTRAINT `final_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`),
  ADD CONSTRAINT `final_ibfk_2` FOREIGN KEY (`NicknameBBoyVincitore`, `NazionalitaBBoyVincitore`, `EdizioneRedBull`) REFERENCES `BBoyIscritto` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `final_ibfk_3` FOREIGN KEY (`NazioneWorldFinal`, `CittaWorldFinal`, `EdizioneRedBull`) REFERENCES `WorldFinal` (`Nazione`, `Citta`, `EdizioneRedBull`),
  ADD CONSTRAINT `final_ibfk_4` FOREIGN KEY (`NicknameDj`, `NazionalitaDj`) REFERENCES `Dj` (`Nickname`, `Nazionalita`);

--
-- Limiti per la tabella `Giudice`
--
ALTER TABLE `Giudice`
  ADD CONSTRAINT `giudice_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`);

--
-- Limiti per la tabella `Iscrizione`
--
ALTER TABLE `Iscrizione`
  ADD CONSTRAINT `iscrizione_ibfk_1` FOREIGN KEY (`NicknameBBoyIscritto`, `NazionalitaBBoyIscritto`, `EdizioneRedBull`) REFERENCES `BBoyIscritto` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `iscrizione_ibfk_2` FOREIGN KEY (`NazioneCypher`, `CittaCypher`, `EdizioneRedBull`) REFERENCES `Cypher` (`Nazione`, `Citta`, `EdizioneRedBull`);

--
-- Limiti per la tabella `PresiedereCypher`
--
ALTER TABLE `PresiedereCypher`
  ADD CONSTRAINT `presiederecypher_ibfk_1` FOREIGN KEY (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`) REFERENCES `Giudice` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `presiederecypher_ibfk_2` FOREIGN KEY (`NazioneCypher`, `CittaCypher`, `EdizioneRedBull`) REFERENCES `Cypher` (`Nazione`, `Citta`, `EdizioneRedBull`);

--
-- Limiti per la tabella `PresiedereFinal`
--
ALTER TABLE `PresiedereFinal`
  ADD CONSTRAINT `presiederefinal_ibfk_1` FOREIGN KEY (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`) REFERENCES `Giudice` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `presiederefinal_ibfk_2` FOREIGN KEY (`NazioneFinal`, `CittaFinal`, `EdizioneRedBull`) REFERENCES `Final` (`Nazione`, `Citta`, `EdizioneRedBull`);

--
-- Limiti per la tabella `PresiedereWorldFinal`
--
ALTER TABLE `PresiedereWorldFinal`
  ADD CONSTRAINT `presiedereworldfinal_ibfk_1` FOREIGN KEY (`NicknameGiudice`, `NazionalitaGiudice`, `EdizioneRedBull`) REFERENCES `Giudice` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `presiedereworldfinal_ibfk_2` FOREIGN KEY (`NazioneWorldFinal`, `CittaWorldFinal`, `EdizioneRedBull`) REFERENCES `WorldFinal` (`Nazione`, `Citta`, `EdizioneRedBull`);

--
-- Limiti per la tabella `WorldFinal`
--
ALTER TABLE `WorldFinal`
  ADD CONSTRAINT `worldfinal_ibfk_1` FOREIGN KEY (`EdizioneRedBull`) REFERENCES `EdizioneRedBull` (`Anno`),
  ADD CONSTRAINT `worldfinal_ibfk_2` FOREIGN KEY (`NicknameDj`, `NazionalitaDj`) REFERENCES `Dj` (`Nickname`, `Nazionalita`),
  ADD CONSTRAINT `worldfinal_ibfk_3` FOREIGN KEY (`NicknameBBoyVincitoreInvitato`, `NazionalitaBBoyVincitoreInvitato`, `EdizioneRedBull`) REFERENCES `BBoyInvitato` (`Nickname`, `Nazionalita`, `EdizioneRedBull`),
  ADD CONSTRAINT `worldfinal_ibfk_4` FOREIGN KEY (`NicknameBBoyVincitoreIscritto`, `NazionalitaBBoyVincitoreIscritto`, `EdizioneRedBull`) REFERENCES `BBoyIscritto` (`Nickname`, `Nazionalita`, `EdizioneRedBull`);
