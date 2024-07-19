-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: company
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `Fname` varchar(45) DEFAULT NULL,
  `Lname` varchar(45) DEFAULT NULL,
  `SSN` int NOT NULL,
  `BDATE` date DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Salary` int DEFAULT NULL,
  `Superssn` int DEFAULT NULL,
  `Dno` int DEFAULT NULL,
  PRIMARY KEY (`SSN`),
  KEY `Dno` (`Dno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('Ahmed','Ali',112233,'1965-01-01','15 Ali fahmy St.Giza','M',1300,223344,10),('Hanaa','Sobhy',123456,'1973-03-18','38 Abdel Khalik Tharwat St. Downtown.Cairo','F',800,223344,10),('Amr','Omran',321654,'1963-09-14','44 Hilopolis.Cairo','M',2500,NULL,NULL),('Noha','Mohamed',968574,'1975-02-01','55 Orabi St. El Mohandiseen.Cairo','F',1600,NULL,100),('Edward','Hanna',512463,'1972-08-19','18 Abaas El 3akaad St. Nasr City.Cairo','M',1500,321654,30),('Mariam','Adel',669955,'1982-06-12','269 El-Haram st. Giza','F',750,512463,20),('Maged','Raoof',521634,'1980-04-06','18 Kholosi st.Shobra.Cairo','M',1000,968574,30),('Mohamed','Tarek',102672,'1999-08-25','Smouha','M',6000,112233,30),('Rami','Omar',102660,'2002-05-19','Sidi Bishr','M',NULL,102672,30);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-19 23:47:08
