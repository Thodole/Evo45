-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: evo45
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Current Database: `evo45`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `evo45` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;

USE `evo45`;

--
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `idd` int(2) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ema` varchar(40) NOT NULL,
  `pln` varchar(20) NOT NULL,
  `tmp` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`ID`, `cpf`, `nom`, `gen`, `idd`, `tel`, `ema`, `pln`, `tmp`) VALUES (1,'123.456.789-11','Glaudervane Moura','masculino',35,'(61) 99999-9901','email.teste01@email.com','Treino Funcional','Mensal'),(2,'123.456.789-12','Heraldo Monteiro','masculino',37,'(61) 99999-0002','email.teste02@email.com','Consult. on-line','Trimestral'),(3,'123.456.789-13','Mateus Valle','masculino',20,'(61) 99999-0003','email.teste03@email.com','Ac. com personal','Semestral'),(4,'123.456.789-14','Saul Medeiros','feminino',21,'(61) 99999-0004','email.teste04@email.com','Treino Funcional','Anual'),(5,'123.456.789-15','Gabriel Peres','masculino',22,'(61) 99999-0005','email.teste05@email.com','Consult. on-line','Mensal');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboradores`
--

DROP TABLE IF EXISTS `colaboradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboradores` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `idd` int(2) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ema` varchar(40) NOT NULL,
  `sal` double NOT NULL,
  `fun` varchar(60) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboradores`
--

LOCK TABLES `colaboradores` WRITE;
/*!40000 ALTER TABLE `colaboradores` DISABLE KEYS */;
INSERT INTO `colaboradores` (`ID`, `cpf`, `nom`, `gen`, `idd`, `tel`, `ema`, `sal`, `fun`) VALUES (1,'123.456.789-21','Anderson Ata','masculino',21,'(61) 99999-0006','email.teste06@email.com',1891.5,'Adm. de redes'),(2,'123.456.789-22','Hérika Oliveira','feminino',23,'(61) 99999-0007','email.teste07@email.com',1892.5,'Gerente de RH'),(3,'123.456.789-23','Vinícius Cruz','masculino',24,'(61) 99999-0008','email.teste08@email.com',1893.5,'Gest. Dep. TI');
/*!40000 ALTER TABLE `colaboradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planos` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `val` double NOT NULL,
  `dvm` int(2) NOT NULL,
  `dvt` int(2) NOT NULL,
  `dvs` int(2) NOT NULL,
  `dva` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planos`
--

LOCK TABLES `planos` WRITE;
/*!40000 ALTER TABLE `planos` DISABLE KEYS */;
INSERT INTO `planos` (`ID`, `nom`, `val`, `dvm`, `dvt`, `dvs`, `dva`) VALUES (1,'Treino Funcional',1800,0,12,25,45),(2,'Consultoria Online',1200,0,15,30,50),(3,'Acomp. c/ Personal',2100,0,12,25,45);
/*!40000 ALTER TABLE `planos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores`
--

DROP TABLE IF EXISTS `professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professores` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `idd` int(2) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ema` varchar(40) NOT NULL,
  `sal` double NOT NULL,
  `fad` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores`
--

LOCK TABLES `professores` WRITE;
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` (`ID`, `cpf`, `nom`, `gen`, `idd`, `tel`, `ema`, `sal`, `fad`) VALUES (1,'123.456.789-31','Ata Anderson','masculino',41,'(61) 99999-0000','email.teste06@email.com',1891.5,'personal'),(2,'123.456.789-32','Oliveira Hérika','feminino',42,'(61) 99999-0000','email.teste07@email.com',1892.5,'consultoria'),(3,'123.456.789-33','Cruz Vinícius','masculino',43,'(61) 99999-0000','email.teste08@email.com',1893.5,'ambas');
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usu` varchar(30) NOT NULL,
  `sen` varchar(16) NOT NULL,
  `tmp` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`ID`, `usu`, `sen`, `tmp`) VALUES (1,'PatoLuis','Augusto01',''),(2,'admin','admin','');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-09 10:47:50
