CREATE TABLE IF NOT EXISTS `envato` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `themeId` int(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `sales` int(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `uploaded_on` date NOT NULL,
  `last_update` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `live_preview_url` varchar(255) NOT NULL,
  `installs` varchar(255) DEFAULT NULL,
  `costumizedTotals` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;
