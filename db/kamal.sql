-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: kamal
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `etiquetas`
--

DROP TABLE IF EXISTS `etiquetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etiquetas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Castellano` varchar(60) NOT NULL,
  `Ingles` varchar(60) NOT NULL,
  `Euskera` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etiquetas`
--

LOCK TABLES `etiquetas` WRITE;
/*!40000 ALTER TABLE `etiquetas` DISABLE KEYS */;
INSERT INTO `etiquetas` VALUES (1,'cuerpo','body','gorputz'),(2,'frontera','bordery','muga'),(3,'territorio','territory','lurralde'),(4,'naturaleza','nature','izadi'),(5,'tiempo','time','denbora'),(6,'nuevas tecnologías','new tecnologies','teknologia berria'),(7,'memoria','memory','oroimen'),(8,'archivo','archive','agiritegi'),(9,'identidad','identity','berberatasun'),(10,'resistencia','resistance','iraun'),(11,'género','gender','genero'),(12,'cine','cinema','zinema'),(13,'ficción','fiction','fikzio'),(14,'documental','documentary','dokumental'),(15,'cómic','comic','komiki'),(16,'comisariado','curating','komisariotza'),(17,'editorial','publishing',' argitaletxe'),(18,'ensayo','essay','saiakera'),(19,'teoría','theorie',' teoria'),(20,'Historia del Arte','Art History','Artearen Historia'),(21,'ilustración','illustration','irudi;'),(22,'diseño','design','diseinu:'),(23,'dibujo','drawing','marrazte'),(24,'impresión','printing','inprimatze'),(25,'arquitectura','architecture','arkitektura'),(26,'jazz','jazz','jazz'),(27,'danza','dance','antza'),(28,'contemporáneo','contemporary','garaikide'),(29,'clásico','classic','klasiko'),(30,'tradición','tradicion','tradizio'),(31,'postmoderno','postmodern','postmoderno'),(32,'performance','performance','arte ekintza'),(33,'teatro','theater','antzoki'),(34,'música','music','musika'),(35,'canto','singing','abeste'),(36,'escultura','sculpture','eskultura'),(37,'instalación','installation','instalazio'),(38,'rap, trap, hipop','rap, trap, hipop','rap, trap, hipop'),(39,'Rock, metal, punk','Rock, metal, punk','Rock, metal, punk'),(40,'Pop, cantautor','Pop, singer-songwriter','Pop, egile abeslari'),(41,'política','politics','politika'),(42,'lenguaje','language','hizkuntza'),(43,'land art','land art','land art'),(44,'conceptual','conceptual','kontzeptual'),(45,'net art','net art','net art'),(46,'postcolonial','postcolonial','postcolonial'),(47,'site-specific','site-specific','site-specific'),(48,'apropiación','apropiation','eskuratze'),(49,'queer','queer','queer'),(50,'urbano','urban','hiri-'),(51,'grafitti','grafitti','grafitti'),(52,'pintura','painting','margolaritza'),(53,'videoarte','videoart','bideoarte'),(54,'readymade','readymade','readymade'),(55,'abstracto','abstract','abstraktu'),(56,'figurativo','figurative','figuratibo'),(57,'minimalismo','minimal','minimal'),(58,'proceso','process','prozesu'),(59,'emergente','rising','agertzen den.'),(60,'híbrido','hibride','nahastekako'),(61,'multidisciplinar','multidisciplinary','multidisziplinario'),(62,'pliegue','fold','toles'),(63,'apropiación','appropiation','eskuratze'),(64,'trabajo en curso','Work in progress','Work in progress'),(65,'moda','fashion','moda'),(66,'participación','participation','parte hartze'),(67,'electrónica','electronic','elektronika'),(68,'colectivo','collective',' kolektibo'),(69,'independiente','independent','bere eskuko'),(70,'cotidiano','routine','eguneroko'),(71,'globalización','globalisation','globalizazio'),(72,'azar','chance','zori');
/*!40000 ALTER TABLE `etiquetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `festivales`
--

DROP TABLE IF EXISTS `festivales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `festivales` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Festivales_Ciudades` (`IdCiudad`),
  CONSTRAINT `FK_Festivales_Ciudades` FOREIGN KEY (`IdCiudad`) REFERENCES `localidades` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festivales`
--

LOCK TABLES `festivales` WRITE;
/*!40000 ALTER TABLE `festivales` DISABLE KEYS */;
INSERT INTO `festivales` VALUES (1,'El barrio de los artistas',1),(2,'Festival de danza, DNA',1),(17,'Encuentros de Arte Joven',1),(18,'Festival de Teatro de Olite',7),(19,'Holika Festival',12),(20,'Festival Barranco Fest',11),(21,'Festival Ibaiertzean',1),(22,'Festival Turmalina',1),(23,'Fauna, Festival de Arte Urbano',1),(24,'Punto de Vista',1),(25,'Festival Tran Tran',16),(26,'NAK, Festival de musica contemporanea de Navarra',1),(27,'Nafarroa Oinez',1),(28,'Cartel de San Fermín',1),(29,'Concurso Internacional de Poesia Ciudad de Pamplona',1);
/*!40000 ALTER TABLE `festivales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidades`
--

DROP TABLE IF EXISTS `localidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidades` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `lg` double NOT NULL,
  `lt` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidades`
--

LOCK TABLES `localidades` WRITE;
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` VALUES (1,'Pamploa/Iruña',-1.6479187,42.8128719),(2,'Altsasu',-2.1709357,42.8951589),(3,'Barañain',-1.6882977,42.8042974),(4,'Barcelona',2.1712963,41.404817),(5,'Bera',-1.6848697,43.2811939),(6,'Bilbao',-2.9370407,43.2632009),(7,'Olite',-1.650975,42.481454),(8,'Burgos',-3.697011,42.344315),(9,'Huarte/Uharte',-1.590235,42.831348),(10,'Madrid',-3.704263,40.419053),(11,'Fitero',-1.858322,42.059441),(12,'Cortes',-1.420662,41.923436),(13,'Sabadell',2.107915,41.547157),(14,'San Sebastian/Donostia',-1.976801,43.323903),(15,'Tudela',-1.60655,42.062006),(16,'Castejón',-1.690478,42.170915);
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugares`
--

DROP TABLE IF EXISTS `lugares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugares` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `lg` double NOT NULL,
  `lt` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugares`
--

LOCK TABLES `lugares` WRITE;
/*!40000 ALTER TABLE `lugares` DISABLE KEYS */;
INSERT INTO `lugares` VALUES (3,'Jazar',-1.6741232,42.800491),(4,'Ateneo Navarra',-1.6592842,42.812857),(5,'Centro Huarte',-1.5949352,42.831531),(6,'La Ciudadela',-1.6499202,42.812384),(7,'Museo de Navarra',-1.6466032,42.819519),(8,'Galeria Moises Perez de Albeniz',-3.7036568,40.4066956),(9,'Club Nicolette',-1.6423046,42.8171563),(10,'Gaztetxe Irunea',-1.6430247,42.8193117),(11,'Katakrak Liburuak',-1.6502154,42.8174871),(13,'Plazara Centro Comunitario',-1.6485538,42.8179155),(15,'Teatro Gayarre',-1.6439691,42.8157025),(17,'Fundación Museo Jorge Oteiza',-1.5677957,42.8380729),(18,'Auditorio de Baranain',-1.6905213,42.8049376),(19,'UPNA',-1.6343405,42.7972669),(20,'Centro cultural de Noain',-1.6351481,42.7563998),(21,'Bar Nébula',-1.6504321,42.8169872),(22,'Baluarte',-1.6495797,42.806521),(23,'Txintxarri',-1.6505353,42.8170086),(26,'Palacio del Marqués de Rozalejo',-1.6452537,42.819396),(27,'Vesarte',-1.6475017,42.826171),(30,'El vertigo de la trapecista',-1.6579477,42.824995),(31,'Dormitaleria 54',-1.6409552,42.81823),(32,'Museo Universidad Navarra',-1.6597227,42.803605);
/*!40000 ALTER TABLE `lugares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexos`
--

DROP TABLE IF EXISTS `sexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `Castellano` varchar(60) NOT NULL,
  `Ingles` varchar(60) NOT NULL,
  `Euskera` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,0,'Él','',''),(2,1,'Ella','',''),(3,4,'No quiero responder','',''),(4,0,'Le','','');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userData`
--

DROP TABLE IF EXISTS `userData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userData` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startYear` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endYear` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paginaWeb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startLoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currentLoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `espacios` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `espaciosOther` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `espaciosOtherLat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `espaciosOtherLng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eventosOther` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiquetas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiquetasOther` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggestions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceptTerms` int(6) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userData`
--

LOCK TABLES `userData` WRITE;
/*!40000 ALTER TABLE `userData` DISABLE KEYS */;
/*!40000 ALTER TABLE `userData` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-24 12:20:08
