--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
