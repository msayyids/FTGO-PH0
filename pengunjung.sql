/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `pengunjung` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `jadwal_kunjungan` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pengunjung` (`ID`, `Nama`, `umur`, `Gender`, `email`, `passwords`, `jadwal_kunjungan`) VALUES
(21, 'sayyid sajid', 20, 'Laki Laki', 'sayyidsajid@gmail.com', '1234', '2023-07-22');
INSERT INTO `pengunjung` (`ID`, `Nama`, `umur`, `Gender`, `email`, `passwords`, `jadwal_kunjungan`) VALUES
(22, 'ari', 23, 'Laki Laki', 'ari@gmail.com', '3456', '2023-07-26');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;