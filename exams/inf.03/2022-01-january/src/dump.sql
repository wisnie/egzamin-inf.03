-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: baza
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dania`
--

DROP TABLE IF EXISTS `dania`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dania` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ` int(11) DEFAULT NULL,
  `nazwa` text DEFAULT NULL,
  `cena` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dania`
--

LOCK TABLES `dania` WRITE;
/*!40000 ALTER TABLE `dania` DISABLE KEYS */;
INSERT INTO `dania` VALUES (1,1,'Rosół',10),(2,1,'Ogórkowa',15),(3,2,'Pierogi z mięsem',30),(4,2,'Kotlet schabowy',20),(5,2,'Kartacze',23),(6,3,'Frytki',9),(7,3,'Placki ziemniaczane',18),(8,4,'Kawa czarna',11),(9,4,'Herbata chińska',9),(10,4,'Herbata ekspresowa',4),(11,3,'Tosty z szynką',14),(12,3,'Tosty z serem',11);
/*!40000 ALTER TABLE `dania` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokale`
--

DROP TABLE IF EXISTS `lokale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lokale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text DEFAULT NULL,
  `miasto` text DEFAULT NULL,
  `ulica` text DEFAULT NULL,
  `numer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokale`
--

LOCK TABLES `lokale` WRITE;
/*!40000 ALTER TABLE `lokale` DISABLE KEYS */;
INSERT INTO `lokale` VALUES (1,'Paproć i pizza','Warszawa','szeroka',5),(2,'Pizza i kartofle','Kraków','beliny',7),(3,'Makaron i szynka','Wrocław','markowa',6),(4,'Bułka, pomidor, masło','Kraków','szpitalna',14);
/*!40000 ALTER TABLE `lokale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL,
  `stanowisko` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pracownicy`
--

LOCK TABLES `pracownicy` WRITE;
/*!40000 ALTER TABLE `pracownicy` DISABLE KEYS */;
INSERT INTO `pracownicy` VALUES (1,'Jan','Marchewka',1),(2,'Michał','Talerz',1),(3,'Marek','Potrzeba',4),(4,'Andrzej','Gawron',3),(5,'Zdzisław','Szary',2),(6,'Aleksander','Ziemniak',2);
/*!40000 ALTER TABLE `pracownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rezerwacje`
--

DROP TABLE IF EXISTS `rezerwacje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rezerwacje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nr_stolika` int(11) DEFAULT NULL,
  `data_rez` date DEFAULT NULL,
  `liczba_osob` int(11) DEFAULT NULL,
  `telefon` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rezerwacje`
--

LOCK TABLES `rezerwacje` WRITE;
/*!40000 ALTER TABLE `rezerwacje` DISABLE KEYS */;
INSERT INTO `rezerwacje` VALUES (1,3,'2023-08-12',4,'+48 491 111 111'),(2,2,'2023-08-15',3,'+48 784 124 412'),(3,5,'2023-09-01',2,'+41 424 042 412'),(4,5,'2023-09-05',7,'+48 424 053 986');
/*!40000 ALTER TABLE `rezerwacje` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-12 21:14:39
