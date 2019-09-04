CREATE TABLE `futbol_stats` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `home_team` varchar(40) DEFAULT NULL,
  `away_team` varchar(40) DEFAULT NULL,
  `home_score` int(3) DEFAULT NULL,
  `away_score` int(3) DEFAULT NULL,
  `tournament` varchar(150) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `neutral` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
