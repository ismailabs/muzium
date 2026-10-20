CREATE DATABASE IF NOT EXISTS `muzium` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `muzium`;

CREATE TABLE IF NOT EXISTS `infotiket` (
  `bil` int(12) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `RMharibiasa` varchar(50) NOT NULL,
  `RMcutiumum` varchar(50) NOT NULL,
  PRIMARY KEY (`bil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `infotiket` (`bil`, `kategori`, `RMharibiasa`, `RMcutiumum`) VALUES
(1, 'Kanak-Kanak', 'RM20.00', 'RM30.00'),
(2, 'Dewasa', 'RM35.00', 'RM40.00'),
(3, 'Warga Emas', 'RM15.00', 'RM20.00');


CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '1234');