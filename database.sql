-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              5.7.33 - MySQL Community Server (GPL)
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dump della struttura di tabella utenti.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cognome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella utenti.utenti: ~12 rows (circa)
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `pswd`) VALUES
	(1, 'Fede', 'reb', 'sfddsfsd@gmail.com', 'affa3443'),
	(3, 'Morgana', 'reb', 'bau@info.com', 'rew34242'),
	(4, 'Lucy', 'reb', 'maumau@info.com', 'weqwe'),
	(8, 'Dante', 'reb', 'maummau@info.com', 'fsdfs43324'),
	(9, 'Deku', 'reb', 'hero@info.com', 'eqweqw'),
	(10, 'Luffy', 'reb', 'pirat@info.com', 'ewqwe32121'),
	(11, 'takemichi', 'reb', 'gang@info.com', 'rwerw434'),
	(12, 'ichigo', 'reb', 'shinigami@info.com', 'eqweqw32113'),
	(13, 'Nami', 'reb', 'gold@info.com', '1414'),
	(14, 'Hisoka', 'reb', 'hxh@hxh.com', 'card'),
	(15, 'Kaneki', 'reb', 'ghoul@info.com', 'sdas434'),
	(16, 'Gon', 'reb', 'hxh@hxh.com', 'sdadfds3');
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
