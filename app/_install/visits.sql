
CREATE TABLE IF NOT EXISTS `visits` (
  `ip` varchar(20) NOT NULL,
  `date_visite` date NOT NULL,
  `pages_vues` int(20) NOT NULL,
  PRIMARY KEY (`ip`,`date_visite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

