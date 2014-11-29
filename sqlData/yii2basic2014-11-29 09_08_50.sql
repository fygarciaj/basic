-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.6.20 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para yii2_basic
DROP DATABASE IF EXISTS `yii2_basic`;
CREATE DATABASE IF NOT EXISTS `yii2_basic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `yii2_basic`;


-- Volcando estructura para tabla yii2_basic.equipo
DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre Equipo',
  `ubicacion_id` int(11) NOT NULL COMMENT 'Ubicación',
  `monitor_id` int(11) NOT NULL COMMENT 'Monitor',
  `so_id` int(11) NOT NULL COMMENT 'Sistema Operativo',
  `memoria_id` int(11) NOT NULL,
  `disco_duro_id` int(11) NOT NULL,
  `procesador_id` int(11) NOT NULL,
  `fabricante_id` int(11) NOT NULL,
  `modelo_id` int(11) NOT NULL,
  `serial` varchar(50) NOT NULL COMMENT 'Serial',
  `direccion_ip` varchar(50) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `responsable` int(11) NOT NULL COMMENT 'Responsable',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `serial` (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla yii2_basic.equipo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;


-- Volcando estructura para tabla yii2_basic.ubicacion
DROP TABLE IF EXISTS `ubicacion`;
CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ubicacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_ubicacion` (`nombre_ubicacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Ubicaciones de las oficinas';

-- Volcando datos para la tabla yii2_basic.ubicacion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ubicacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicacion` ENABLE KEYS */;


-- Volcando estructura para tabla yii2_basic.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `authKey` varchar(100) DEFAULT NULL,
  `accessToken` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla yii2_basic.user: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `authKey`, `accessToken`) VALUES
	(101, 'demo', 'demo', 'test101key', '101-token');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
