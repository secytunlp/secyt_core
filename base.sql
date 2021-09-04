-- --------------------------------------------------------
-- Host:                         163.10.35.34
-- Versión del servidor:         5.6.14 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla base_secyt.security_groups_permissions
CREATE TABLE IF NOT EXISTS `security_groups_permissions` (
  `usergroup_oid` int(11) NOT NULL,
  `permission_oid` int(11) NOT NULL,
  PRIMARY KEY (`usergroup_oid`,`permission_oid`),
  KEY `IDX_D8DD1EC1FF569B9` (`usergroup_oid`),
  KEY `IDX_D8DD1EC152B1BA91` (`permission_oid`),
  CONSTRAINT `FK_D8DD1EC152B1BA91` FOREIGN KEY (`permission_oid`) REFERENCES `security_permission` (`oid`),
  CONSTRAINT `FK_D8DD1EC1FF569B9` FOREIGN KEY (`usergroup_oid`) REFERENCES `security_usergroup` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_groups_permissions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `security_groups_permissions` DISABLE KEYS */;
INSERT INTO `security_groups_permissions` (`usergroup_oid`, `permission_oid`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `security_groups_permissions` ENABLE KEYS */;


-- Volcando estructura para tabla base_secyt.security_new_password_request
CREATE TABLE IF NOT EXISTS `security_new_password_request` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `user_oid` int(11) DEFAULT NULL,
  `validationCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expirationDate` date NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `IDX_95EB3A4DA93C412B` (`user_oid`),
  CONSTRAINT `FK_95EB3A4DA93C412B` FOREIGN KEY (`user_oid`) REFERENCES `security_user` (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_new_password_request: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `security_new_password_request` DISABLE KEYS */;
INSERT INTO `security_new_password_request` (`oid`, `user_oid`, `validationCode`, `expirationDate`) VALUES
	(1, 1, '8c159aafa25be65c4445fd9c673e10da', '2015-06-19'),
	(2, 1, '8b356f8bb1ca47fe1cf902689cf2842b', '2015-06-19'),
	(3, 1, 'b434d1ed25f3f109c0b49a1feb9caa0b', '2015-06-19'),
	(4, 1, '6fcc6d7b77dd12a01a2274c5f8e88384', '2015-06-19'),
	(5, 1, 'cbcbfd4861c088c416f8087c881ba553', '2015-06-19'),
	(6, 1, 'f0add5396ddb2838652e95c54bf572eb', '2015-06-19'),
	(7, 1, 'fea32ca3af458dd5b58329bce17e2401', '2015-06-19');
/*!40000 ALTER TABLE `security_new_password_request` ENABLE KEYS */;


-- Volcando estructura para tabla base_secyt.security_permission
CREATE TABLE IF NOT EXISTS `security_permission` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `parent_oid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `IDX_209B40DF798943C5` (`parent_oid`),
  CONSTRAINT `FK_209B40DF798943C5` FOREIGN KEY (`parent_oid`) REFERENCES `security_permission` (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_permission: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `security_permission` DISABLE KEYS */;
INSERT INTO `security_permission` (`oid`, `parent_oid`, `name`, `description`) VALUES
	(1, NULL, 'Listar docentes', 'Muestra los docentes'),
	(2, NULL, 'LISTAR USUARIOS', ''),
	(3, NULL, 'AGREGAR USUARIO', '');
/*!40000 ALTER TABLE `security_permission` ENABLE KEYS */;


-- Volcando estructura para tabla base_secyt.security_user
CREATE TABLE IF NOT EXISTS `security_user` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `loginFrom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged` tinyint(1) DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_user: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `security_user` DISABLE KEYS */;
INSERT INTO `security_user` (`oid`, `username`, `password`, `name`, `email`, `lastLogin`, `loginFrom`, `logged`, `lastname`) VALUES
	(1, '20-25174805-6', 'wxTQPG58dZGrqXAFEvRMyw==', 'Marcos Piñero', 'marcosp@presi.unlp.edu.ar', '2016-10-27 14:39:17', '', 1, NULL),
	(2, '20-25174805-5', 'jIcijtriv/Q+kQURz5csoQ==', 'Marcos Piñero', 'marcosp@presi.unlp.edu.ar', '2015-07-07 14:03:20', '', 1, NULL);
/*!40000 ALTER TABLE `security_user` ENABLE KEYS */;


-- Volcando estructura para tabla base_secyt.security_usergroup
CREATE TABLE IF NOT EXISTS `security_usergroup` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_usergroup: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `security_usergroup` DISABLE KEYS */;
INSERT INTO `security_usergroup` (`oid`, `name`, `description`, `level`) VALUES
	(1, 'Admin', 'Administrador', 1),
	(2, 'SECRETARIA', '', 1);
/*!40000 ALTER TABLE `security_usergroup` ENABLE KEYS */;


-- Volcando estructura para tabla base_secyt.security_users_groups
CREATE TABLE IF NOT EXISTS `security_users_groups` (
  `user_oid` int(11) NOT NULL,
  `usergroup_oid` int(11) NOT NULL,
  PRIMARY KEY (`user_oid`,`usergroup_oid`),
  KEY `IDX_C51F4979A93C412B` (`user_oid`),
  KEY `IDX_C51F4979FF569B9` (`usergroup_oid`),
  CONSTRAINT `FK_C51F4979A93C412B` FOREIGN KEY (`user_oid`) REFERENCES `security_user` (`oid`),
  CONSTRAINT `FK_C51F4979FF569B9` FOREIGN KEY (`usergroup_oid`) REFERENCES `security_usergroup` (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla base_secyt.security_users_groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `security_users_groups` DISABLE KEYS */;
INSERT INTO `security_users_groups` (`user_oid`, `usergroup_oid`) VALUES
	(1, 1),
	(2, 1),
	(2, 2);
/*!40000 ALTER TABLE `security_users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
