-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: deportes_avila
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `deportes_luis`
--

DROP TABLE IF EXISTS `deportes_luis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deportes_luis` (
  `clave` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descripcion` varchar(270) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio` varchar(270) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `marca` varchar(270) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `talla` varchar(270) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descuento` varchar(202) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deportes_luis`
--

LOCK TABLES `deportes_luis` WRITE;
/*!40000 ALTER TABLE `deportes_luis` DISABLE KEYS */;
INSERT INTO `deportes_luis` VALUES ('74','abrigo','$4000','Nike','s/ch','5%'),('12','chaqueton','$5600','Nike','ex','5%50%'),('56','abrigo','$4000','Nike','s/ch','10%'),('75','chaqueton3','$5600','Nike','g/GD','70%'),('25','Guantes','$6','Nike','',''),('25','Guantes','$6','Nike','m/e','5%70%'),('117','TOM LEE','$900000','Nike','ex','5%'),('112','GUN PARK','$9999999999','Under','g/GD','10%'),('092','Jerome','$80000','Addidas','ex','5%'),('hhh','Bufanda','precio','marca','talla','descuento'),('2387','gorra','precio','marca','talla','descuento'),('23333','gorra','precio','marca','talla','descuento'),('33443','gorra','precio','marca','talla','descuento'),('2668','gorra','precio','marca','talla','descuento'),('35','abrigo','$5600','Addidas','g/GD','50%'),('32','Bufanda','precio','marca','talla','descuento'),('32','gorra','precio','marca','talla','descuento'),('38','Bufanda','precio','marca','talla','descuento'),('56','Bufanda','$4660','Nike','ex','5%'),('59','FERNANDO','$5667','ASUS','ex','10%'),('22','Bufanda','$4660','Nike','ex','5%'),('46','Bufanda','$4660','Nike','ex','5%');
/*!40000 ALTER TABLE `deportes_luis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-08  9:58:31
