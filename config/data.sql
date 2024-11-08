SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

INSERT INTO `tag` (`id`, `name`) VALUES
(1,	'front'),
(2,	'senior');


DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_0900_as_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_0900_as_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_as_ci;

INSERT INTO `company` (`id`, `name`, `img`) VALUES
(1,	'photosnap', 'photosnap.png'),
(2,	'manage', 'manage.png');

