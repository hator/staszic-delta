<?php

require_once('config/database.config.php');
require_once('core/dbmanager.class.php');

DBManager::instance()->query('
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/* Baza danych: `delta` */
/************************/
/* Struktura tabeli dla  `categories` */

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `parent` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=1 ;

/* Zrzut danych tabeli `categories` */

INSERT INTO `categories` (`id`, `title`, `parent`) VALUES
(NULL, \'Klasa I\', 0),
(NULL, \'Język polski\', 1),
(NULL, \'Matematyka\', 1),
(NULL, \'Fizyka\', 1),
(NULL, \'Renesans\', 2),
(NULL, \'Jan Kochanowski\', 6);

/************************/
/* Struktura tabeli dla  `articles` */

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `category` int(5) NOT NULL,
  `body` text(5000) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

/* Zrzut danych tabeli `articles` */

INSERT INTO `articles` (`id`, `title`, `category`, `body`) VALUES
(NULL, \'Testowy artykuł\', 1, \'Lorem ipsum dolor sit amet, nowomowa. Szanowny Marszałku, Wysoka Izbo! PKB rośnie!\');


/*********************************/
/* Struktura tabeli dla  `users` */

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `passwd` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `admin_level` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

/* Zrzut danych tabeli `users` */

INSERT INTO `users` (`id`, `passwd`, `email`, `admin_level`) VALUES
(1, \'63d63e723e89b48bc366e235ea1d38b0d20a65c677f7f618ef401506d673259a\', \'jasium.ready@gmail.com\', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
');

?>