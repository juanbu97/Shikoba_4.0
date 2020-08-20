-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: shikoba
-- ------------------------------------------------------
-- Server version	5.5.57-0+deb8u1

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
-- Table structure for table `accion_estado_parte`
--

DROP TABLE IF EXISTS `accion_estado_parte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion_estado_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3CDEA54B265DE1E3` (`estado`),
  CONSTRAINT `FK_3CDEA54B265DE1E3` FOREIGN KEY (`estado`) REFERENCES `estados_parte` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion_estado_parte`
--

LOCK TABLES `accion_estado_parte` WRITE;
/*!40000 ALTER TABLE `accion_estado_parte` DISABLE KEYS */;
INSERT INTO `accion_estado_parte` VALUES (1,1,'Comunicar'),(2,2,'Confirmar'),(3,3,'Inhabilitada'),(4,4,'Inhabilitada');
/*!40000 ALTER TABLE `accion_estado_parte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accion_estado_sancion`
--

DROP TABLE IF EXISTS `accion_estado_sancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion_estado_sancion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ECAB22E3265DE1E3` (`estado`),
  CONSTRAINT `FK_ECAB22E3265DE1E3` FOREIGN KEY (`estado`) REFERENCES `estados_sancion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion_estado_sancion`
--

LOCK TABLES `accion_estado_sancion` WRITE;
/*!40000 ALTER TABLE `accion_estado_sancion` DISABLE KEYS */;
INSERT INTO `accion_estado_sancion` VALUES (1,1,'Comunicar'),(2,2,'Confirmar'),(3,3,'Inhabilitada'),(4,4,'Inhabilitada'),(5,5,'Inhabilitada');
/*!40000 ALTER TABLE `accion_estado_sancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nie` int(11) DEFAULT NULL,
  `telefono` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `codpostal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `puntosIniciales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1435D52DDDFF03F1` (`idCurso`),
  KEY `IDX_1435D52D32DCDBAF` (`idUsuario`),
  CONSTRAINT `FK_1435D52D32DCDBAF` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1435D52DDDFF03F1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=848 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (840,'Jaime','Rabasco','Ronda',11111,'','','Avda. Virgen de Fatima',10,25,2727,'14014','15135379454_400x400.jpg',0),(841,'Lourdes','Magarín','Corvillo',55444,'1111111','','Urb. Córdoba',10,25,2728,'14014','1513538033NNWFx_sU_400x400.jpg',0),(842,'José Ramón','Albendín','Ramírez',11111,'','','Avda. Virgen de Fatima',0,25,2729,'14014','1513538057perfil_400x400.jpg',0),(843,'Francisco José','Aguilera','Ruiz',55444,'1111111','','Urb. Córdoba',7,25,2730,'14014','1513537569oaRYIYWY_400x400.jpg',0),(844,'M. Carmen','Tripiana','Rodríguez',11111,'','','Avda. Virgen de Fatima',5,25,2731,'14014','1513538113MCenLaCaleta_400x400.jpg',0),(845,'Rafael','del Castillo','Gomariz',55444,'1111111','','Urb. Córdoba',2,25,2732,'14014','1513538184ALeuO6Ws_400x400.jpg',0),(846,'José Manuel','González','Peña',11111,'','','Avda. Virgen de Fatima',0,21,2733,'14014','15136857021.jpg',0),(847,'Lucas','Márquez','Muñoz',55444,'1111111','','Urb. Córdoba',0,21,2734,'14014','151368578211169768.jpg',0);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `ControladorPuntosAlumnos` BEFORE UPDATE ON `alumno` FOR EACH ROW BEGIN
	IF(NEW.puntos>10) THEN
		SET NEW.puntos = 10;
	END IF;

	IF(NEW.puntos<0) THEN
		SET NEW.puntos = 0;
	END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `borrarUsuario` AFTER DELETE ON `alumno` FOR EACH ROW BEGIN
   delete from usuarios where id = old.idUsuario;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `alumno_tutores`
--

DROP TABLE IF EXISTS `alumno_tutores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno_tutores` (
  `alumno_id` int(11) NOT NULL,
  `tutores_id` int(11) NOT NULL,
  PRIMARY KEY (`alumno_id`,`tutores_id`),
  KEY `IDX_19570870FC28E5EE` (`alumno_id`),
  KEY `IDX_1957087044A2FCF` (`tutores_id`),
  CONSTRAINT `FK_1957087044A2FCF` FOREIGN KEY (`tutores_id`) REFERENCES `tutores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_19570870FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_tutores`
--

LOCK TABLES `alumno_tutores` WRITE;
/*!40000 ALTER TABLE `alumno_tutores` DISABLE KEYS */;
INSERT INTO `alumno_tutores` VALUES (840,1),(841,1),(842,1),(843,1),(844,1),(845,1);
/*!40000 ALTER TABLE `alumno_tutores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conductas`
--

DROP TABLE IF EXISTS `conductas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conducta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductas`
--

LOCK TABLES `conductas` WRITE;
/*!40000 ALTER TABLE `conductas` DISABLE KEYS */;
INSERT INTO `conductas` VALUES (1,'Estar fuera del aula entre horas sin permiso',-1,'Leve'),(2,'Perturbar el normal desarrollo de las actividades de clase o del centro',-2,'Leve'),(3,'Falta de colaboración sistemática en la realización de actividades y en el seguimiento de las orientaciones del profesorado',-2,'Leve'),(4,'Ignorar las llamadas de atención del personal docente y no docente',-2,'Leve'),(5,'Cinco faltas injustificadas de puntualidad',-2,'Leve'),(6,'Cinco faltas injustificadas de asistencia a clase',-2,'Leve'),(7,'No disponer del material necesario para su aprendizaje',-2,'Leve'),(8,'Tirar objetos, papeles o basura al suelo en cualquier dependencia del centro',-2,'Leve'),(9,'Comer o beber en clase',-2,'Leve'),(10,'Exhibir el móvil en el centro escolar',-2,'Leve'),(11,'Incorrección y desconsideración hacia otros miembros de la comunidad educativa',-3,'Leve'),(12,'Falta injustificada de asistencia a las horas previas a una prueba de evaluación',-3,'Leve'),(13,'No guardar las debidas normas de seguridad establecidas para el uso de material o el funcionamiento de determinados aparatos eléctricos',-3,'Leve'),(14,'Causar pequeños daños en las instalaciones, materiales o documentos del centro (incluidos los partes de asistencia o de incidencia), o en las pertenencias de otros miembros de la comunidad educativa',-4,'Leve'),(15,'Utilizar aparatos grabadores o reproductores, cámara de fotos y teléfonos móviles',-4,'Leve'),(16,'Abandonar el centro de manera injustificada durante la jornada escolar',-5,'Leve'),(17,'Utilizar los ordenadores del aula sin permiso o de manera indebida',-6,'Leve'),(18,'Fumar en las dependencias y recinto del centro',-7,'Leve'),(19,'Otras (contempladas en el P.C.)',-1,'Leve'),(20,'Agresión física a un miembro de la comunidad educativa',-10,'Grave'),(21,'Injurias, ofensas, vejaciones, humillaciones, amenazas o coacciones contra cualquier miembro de la comunidad escolar',-10,'Grave'),(22,'Suplantación de la personalidad, falsificación o sustracción de documentos académicos',-10,'Grave'),(23,'Causar graves daños en las instalaciones, materiales o documentos del centro, o en las pertenencias de otros miembros de la comunidad educativa',-10,'Grave'),(24,'Actuaciones perjudiciales para la salud y la integridad personal de los miembros de la comunidad educativa, o la incitación a las mismas. Consumo de alcohol o drogas',-10,'Grave'),(25,'Perjudicar gravemente el desarrollo de las actividades del centro',-10,'Grave'),(26,'Conductas leves en las que concurran las circunstancias de colectividad y/o publicidad intencionada',-10,'Grave'),(27,'Incumplimiento de las correcciones impuestas',-10,'Grave'),(28,'Reiteración de conductas contrarias a las normas de convivencia',-10,'Grave'),(29,'Utilizar el móvil para fotografiar o grabar a cualquier miembro de la comunidad educativa',-10,'Grave');
/*!40000 ALTER TABLE `conductas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dias_validez` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,30);
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aula` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `idTutor` int(11) DEFAULT NULL,
  `grupo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B2785A188EC30555` (`idTutor`),
  CONSTRAINT `FK_B2785A188EC30555` FOREIGN KEY (`idTutor`) REFERENCES `profesores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (2,'1º de E.S.O.','',139,'1º ESO-A'),(3,'1º de Programa Específico de F (Carpintería y Mueble (Pefpb))','',NULL,'1ºFPBE-CAR'),(4,'2º de Bachillerato','',NULL,'2º BACH-A'),(5,'2º de E.S.O.','',NULL,'2º ESO-A'),(6,'2º de Programa Específico de F (Carpintería y Mueble (Pefpb))','',NULL,'2ºFPBE CAR'),(7,'3º de E.S.O.','',NULL,'3º ESO-A'),(8,'4º de E.S.O.','',NULL,'4º ESO-A'),(9,'1º de Bachillerato','',NULL,'1º BACH-B'),(10,'1º de E.S.O.','',140,'1º ESO-B'),(11,'2º de Bachillerato','',NULL,'2º BACH-B'),(12,'2º de E.S.O.','',NULL,'2º ESO-B'),(13,'3º de E.S.O.','',NULL,'3º ESO-B'),(14,'4º de E.S.O.','',NULL,'4º ESO-B'),(15,'1º de Bachillerato','',NULL,'1º BACH-C'),(16,'1º de E.S.O.','',141,'1º ESO-C'),(17,'2º de Bachillerato','',NULL,'2º BACH-C'),(18,'2º de E.S.O.','',NULL,'2º ESO-C'),(19,'3º de E.S.O.','',NULL,'3º ESO-C'),(20,'4º de E.S.O.','',NULL,'4º ESO-C'),(21,'1º de E.S.O.','',142,'1º ESO-D'),(22,'2º de E.S.O.','',NULL,'2º ESO-D'),(23,'3º de E.S.O.','',NULL,'3º ESO-D'),(24,'4º de E.S.O.','',NULL,'4º ESO-D'),(25,'1º de E.S.O.','',142,'1º ESO-E'),(26,'2º de E.S.O.','',NULL,'2º ESO-E'),(27,'3º de E.S.O.','',NULL,'3º ESO-E'),(28,'2º de E.S.O.','',NULL,'2º ESO-F'),(29,'1º de F.P.B. (Cocina y Restauración)','',NULL,'1ºFPB-CYR'),(30,'1º F.P.I.G.M. (Cocina y Gastronomía)','',NULL,'1ºGM COC-A'),(31,'1º F.P.I.G.M. (Cocina y Gastronomía)','',NULL,'1ºGM COC-B'),(32,'1º F.P.I.G.M. (Servicios en Restauración)','',NULL,'1ºGM SRE'),(33,'1º F.P.I.G.S. (Gestión de Alojamientos Turísticos)','',NULL,'1ºGS ALO'),(34,'1º F.P.I.G.S. (Administración de Sistemas Informáticos en Red)','',NULL,'1ºGS ASIR'),(35,'1º F.P.I.G.S. (Agencias de Viajes y Gestión de Eventos)','',NULL,'1ºGS AVI'),(36,'1º F.P.I.G.S. (Desarrollo de Aplicaciones Web)','',NULL,'1ºGS DAW'),(37,'1º F.P.I.G.S. (Dirección de Cocina)','',NULL,'1ºGS DICO'),(38,'1º F.P.I.G.S. (Dirección de Servicios de Restauración)','',NULL,'1ºGS DISER'),(39,'2º de F.P.B. (Cocina y Restauración)','',NULL,'2ºFPB-CYR'),(40,'2º F.P.I.G.M. (Cocina y Gastronomía)','',NULL,'2ºGM COC A'),(41,'2º F.P.I.G.M. (Cocina y Gastronomía)','',NULL,'2ºGM COC B'),(42,'2º F.P.I.G.M. (Servicios en Restauración)','',NULL,'2ºGM SRE'),(43,'2º F.P.I.G.S. (Gestión de Alojamientos Turísticos)','',NULL,'2ºGS ALO'),(44,'2º F.P.I.G.S. (Administración de Sistemas Informáticos en Red)','',NULL,'2ºGS ASIR'),(45,'2º F.P.I.G.S. (Agencias de Viajes y Gestión de Eventos)','',NULL,'2ºGS AVI'),(46,'2º F.P.I.G.S. (Desarrollo de Aplicaciones Web)','',NULL,'2ºGS DAW'),(47,'2º F.P.I.G.S. (Dirección de Cocina)','',NULL,'2ºGS DICO'),(48,'2º F.P.I.G.S. (Dirección de Servicios de Restauración)','',NULL,'2ºGS DISER'),(49,'1º de Bachillerato','',NULL,'1º BACH-A');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diario_aula_convivencia`
--

DROP TABLE IF EXISTS `diario_aula_convivencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diario_aula_convivencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `hora` int(11) NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actitud` enum('A','B','C') COLLATE utf8_unicode_ci DEFAULT NULL,
  `idProfesor` int(11) DEFAULT NULL,
  `idSancion` int(11) DEFAULT NULL,
  `asiste` int(11) NOT NULL,
  `recupera` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B09A7F58D72C82` (`idProfesor`),
  KEY `IDX_4B09A7F59305F89C` (`idSancion`),
  CONSTRAINT `FK_4B09A7F58D72C82` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4B09A7F59305F89C` FOREIGN KEY (`idSancion`) REFERENCES `sanciones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diario_aula_convivencia`
--

LOCK TABLES `diario_aula_convivencia` WRITE;
/*!40000 ALTER TABLE `diario_aula_convivencia` DISABLE KEYS */;
INSERT INTO `diario_aula_convivencia` VALUES (26,'2017-12-20 15:42:25',4,'','A',135,30,1,1),(27,'2017-12-20 15:42:25',3,NULL,NULL,NULL,30,0,0),(28,'2017-12-20 15:42:25',2,NULL,NULL,NULL,30,0,0),(29,'2017-12-20 15:42:25',1,'','A',140,30,1,0),(30,'2017-12-20 15:43:27',1,NULL,NULL,NULL,29,0,0);
/*!40000 ALTER TABLE `diario_aula_convivencia` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `recuperaPuntoDiarioAula` AFTER UPDATE ON `diario_aula_convivencia` FOR EACH ROW BEGIN
	IF(old.recupera != 1 AND new.recupera = 1) THEN
    	UPDATE alumno a set a.puntos= a.puntos - 1 
        WHERE a.id in (SELECT s.idAlumno FROM sanciones s
                      WHERE s.id = new.idSancion);
    END IF;    
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `estados_parte`
--

DROP TABLE IF EXISTS `estados_parte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados_parte`
--

LOCK TABLES `estados_parte` WRITE;
/*!40000 ALTER TABLE `estados_parte` DISABLE KEYS */;
INSERT INTO `estados_parte` VALUES (1,'Iniciado'),(2,'Comunicado'),(3,'Confirmado'),(4,'Caducado');
/*!40000 ALTER TABLE `estados_parte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados_sancion`
--

DROP TABLE IF EXISTS `estados_sancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados_sancion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados_sancion`
--

LOCK TABLES `estados_sancion` WRITE;
/*!40000 ALTER TABLE `estados_sancion` DISABLE KEYS */;
INSERT INTO `estados_sancion` VALUES (1,'Iniciada'),(2,'Comunicada'),(3,'Confirmada'),(4,'Vigente'),(5,'Finalizada');
/*!40000 ALTER TABLE `estados_sancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `description` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES ('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 3'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 1'),('Introduce datos alumnos 1'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 0'),('Introduce datos alumnos 1'),('Introduce datos alumnos 3'),('Introduce datos alumnos 3'),('Introduce datos alumnos 1'),('Introduce datos alumnos 10'),('Introduce datos alumnos 7'),('Introduce datos alumnos 2'),('Introduce datos alumnos 5'),('Introduce datos alumnos 1'),('Introduce datos alumnos 10'),('Introduce datos alumnos 0');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noticia_texto` text COLLATE utf8_unicode_ci NOT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFinal` datetime NOT NULL,
  `puntos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_253D925DDFF03F1` (`idCurso`),
  CONSTRAINT `FK_253D925DDFF03F1` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (1,'nfhfghfg',2,'2017-11-19 00:00:00','2017-11-27 08:49:02','2017-11-27 08:49:02',0),(2,'hgfhgfhfghfghgf',10,'2017-11-01 00:00:00','2017-11-27 09:09:02','2017-11-27 09:19:40',10),(14,'<p>Nueva noticia para los alumnos con 0 puntos<img alt=\"smiley\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n',25,'2017-12-17 23:05:42','2017-12-17 23:05:42','2017-12-31 23:05:42',0),(15,'<p>Aqu&iacute; noticia para alumnos de 2 <u>PUNTOS&nbsp;<img alt=\"frown\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/confused_smile.png\" style=\"height:23px; width:23px\" title=\"frown\" /></u></p>\r\n',25,'2017-12-17 23:06:10','2017-12-17 23:06:10','2017-12-30 23:06:10',2),(16,'<p style=\"text-align:center\">noticia para 1 punto</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"angel\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/angel_smile.png\" style=\"height:23px; width:23px\" title=\"angel\" /></p>\r\n',25,'2017-12-17 23:06:18','2017-12-17 23:06:18','2017-12-24 23:06:18',1),(17,'<p>Noticia para alumnos de 5puntos&nbsp;<img alt=\"sad\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/sad_smile.png\" style=\"height:23px; width:23px\" title=\"sad\" /></p>\r\n',25,'2017-12-17 23:06:42','2017-12-17 23:06:42','2017-12-24 23:06:42',5),(18,'<p>noticia 7 puntos</p>\r\n\r\n<p style=\"text-align:center\">mal asunto</p>\r\n\r\n<p style=\"text-align:right\"><img alt=\"no\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/thumbs_down.png\" style=\"height:23px; width:23px\" title=\"no\" /></p>\r\n',25,'2017-12-17 23:06:48','2017-12-17 23:06:48','2017-12-24 23:06:48',7),(19,'<p>10 puntos, muy mal</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"angry\" src=\"http://cpd.iesgrancapitan.org:9117/js/ckeditor/plugins/smiley/images/angry_smile.png\" style=\"height:23px; width:23px\" title=\"angry\" /></p>\r\n',25,'2017-12-17 23:07:21','2017-12-17 23:07:21','2017-12-24 23:07:21',10),(20,'<p>Hola lucas</p>\r\n',21,'2017-12-20 11:42:13','2017-12-20 11:42:13','2017-12-23 11:42:13',0);
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partealumnos`
--

DROP TABLE IF EXISTS `partealumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partealumnos` (
  `idParte` int(11) NOT NULL AUTO_INCREMENT,
  `idAlumno` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `tipo` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `causaParte` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `detalleConducta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tareaPropuesta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `expulsionAula` tinyint(1) NOT NULL,
  PRIMARY KEY (`idParte`),
  KEY `idAlumno` (`idAlumno`,`idProfesor`),
  KEY `idAlumno_2` (`idAlumno`),
  KEY `idProfesor` (`idProfesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partealumnos`
--

LOCK TABLES `partealumnos` WRITE;
/*!40000 ALTER TABLE `partealumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `partealumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partes`
--

DROP TABLE IF EXISTS `partes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tareas` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horaSalidaAula` time NOT NULL,
  `horaLlegadaJefatura` time NOT NULL,
  `formato` enum('Papel','Digital') COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `idTipo` int(11) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  `idProfesor` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL,
  `recupera` int(11) NOT NULL,
  `fechaConfirmacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaComunicacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5DFAE5603D043D9` (`idTipo`),
  KEY `IDX_5DFAE56077247DB7` (`idAlumno`),
  KEY `IDX_5DFAE5608D72C82` (`idProfesor`),
  KEY `IDX_5DFAE560454C4979` (`idEstado`),
  CONSTRAINT `FK_5DFAE5603D043D9` FOREIGN KEY (`idTipo`) REFERENCES `tipo_parte` (`id`),
  CONSTRAINT `FK_5DFAE560454C4979` FOREIGN KEY (`idEstado`) REFERENCES `estados_parte` (`id`),
  CONSTRAINT `FK_5DFAE56077247DB7` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5DFAE5608D72C82` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partes`
--

LOCK TABLES `partes` WRITE;
/*!40000 ALTER TABLE `partes` DISABLE KEYS */;
INSERT INTO `partes` VALUES (46,'2017-12-17 22:29:15','Se le ha visto dando paseos por el insti, muy mal','10 minutos sin amigos','22:29:15','22:29:15','Digital','',1,1,840,142,1,0,'18/12/2017','18/12/2017'),(47,'2017-12-17 22:32:40','Se hizo pasar por otra persona','bailar la conga en el patio','22:32:40','22:32:40','Digital','',10,3,841,142,1,0,'18/12/2017','18/12/2017'),(48,'2017-12-17 22:34:47','sin comentarios',NULL,'22:34:47','22:34:47','Digital','',7,2,843,142,1,0,'18/12/2017','18/12/2017'),(49,'2017-12-17 22:36:30','Se dejó los apuntes de las clases en el ayuntamiento y llegó tarde','Repasar que no se ha dejado nada más.','22:36:30','22:36:30','Papel','',2,1,845,142,1,0,'17/12/2017','17/12/2017'),(50,'2017-12-17 22:37:34','Ay Mª carmen...','Dijo que tenía que ir a desayunar.','22:37:34','22:37:34','Papel','Y encima no enseñó el carnet a los conserjes al salir.',5,2,844,142,1,0,NULL,NULL),(51,'2017-12-19 15:39:08','Llegó tarde a clase','Dos vueltas a la pista de fútbol','15:39:08','15:39:08','Digital','',1,1,847,142,1,0,'20/12/2017','20/12/2017'),(53,'2017-12-20 11:50:53','Agresión a in alumno',NULL,'11:50:22','11:50:22','Papel','',10,3,840,135,1,0,NULL,NULL);
/*!40000 ALTER TABLE `partes` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `recuperaUnPunto` AFTER UPDATE ON `partes` FOR EACH ROW BEGIN
    IF(old.recupera = 0 AND new.recupera = 1) THEN
        UPDATE alumno SET puntos = puntos -1 WHERE alumno.id=new.idAlumno;
    END IF;

    IF(old.idAlumno != new.idAlumno) THEN
        UPDATE alumno SET puntos = puntos - old.puntos WHERE alumno.id = old.idAlumno;
        UPDATE alumno SET puntos = puntos + new.puntos WHERE alumno.id = new.idAlumno;
    ELSE
    	UPDATE alumno a SET a.puntos = a.puntos + (new.puntos - old.puntos) WHERE a.id = new.idAlumno;
    INSERT INTO log VALUES (CONCAT('Introduce datos alumnos ',  new.puntos - old.puntos));	  
    END IF;
    
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `devuelvePuntos` AFTER DELETE ON `partes` FOR EACH ROW BEGIN
	UPDATE alumno a SET a.puntos = a.puntos - old.puntos WHERE a.id = old.idAlumno;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `partes_conductas`
--

DROP TABLE IF EXISTS `partes_conductas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partes_conductas` (
  `partes_id` int(11) NOT NULL,
  `conductas_id` int(11) NOT NULL,
  PRIMARY KEY (`partes_id`,`conductas_id`),
  KEY `IDX_FC000DAE50F712E6` (`partes_id`),
  KEY `IDX_FC000DAEA31135F4` (`conductas_id`),
  CONSTRAINT `FK_FC000DAE50F712E6` FOREIGN KEY (`partes_id`) REFERENCES `partes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FC000DAEA31135F4` FOREIGN KEY (`conductas_id`) REFERENCES `conductas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partes_conductas`
--

LOCK TABLES `partes_conductas` WRITE;
/*!40000 ALTER TABLE `partes_conductas` DISABLE KEYS */;
INSERT INTO `partes_conductas` VALUES (46,1),(47,22),(48,18),(49,5),(50,16),(51,1),(53,20);
/*!40000 ALTER TABLE `partes_conductas` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `sumaPuntos` BEFORE INSERT ON `partes_conductas` FOR EACH ROW BEGIN
	DECLARE puntosUpdate INT;
    DECLARE puntosUpdatePartes INT;
	SET puntosUpdate = (SELECT ABS(c.puntos) FROM conductas c WHERE c.id = NEW.conductas_id);
    SET puntosUpdatePartes = (SELECT p.puntos FROM partes p WHERE p.id = NEW.partes_id);
    IF(puntosUpdate>puntosUpdatePartes)THEN
    UPDATE partes pa SET pa.puntos = puntosUpdate WHERE pa.id = NEW.partes_id;
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `partes_sanciones`
--

DROP TABLE IF EXISTS `partes_sanciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partes_sanciones` (
  `partes_id` int(11) NOT NULL,
  `sanciones_id` int(11) NOT NULL,
  PRIMARY KEY (`partes_id`,`sanciones_id`),
  KEY `IDX_C2544BCC50F712E6` (`partes_id`),
  KEY `IDX_C2544BCC226757EA` (`sanciones_id`),
  CONSTRAINT `FK_C2544BCC226757EA` FOREIGN KEY (`sanciones_id`) REFERENCES `sanciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C2544BCC50F712E6` FOREIGN KEY (`partes_id`) REFERENCES `partes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partes_sanciones`
--

LOCK TABLES `partes_sanciones` WRITE;
/*!40000 ALTER TABLE `partes_sanciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `partes_sanciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesores`
--

DROP TABLE IF EXISTS `profesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_29C62D8C32DCDBAF` (`idUsuario`),
  CONSTRAINT `FK_29C62D8C32DCDBAF` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesores`
--

LOCK TABLES `profesores` WRITE;
/*!40000 ALTER TABLE `profesores` DISABLE KEYS */;
INSERT INTO `profesores` VALUES (135,'Cristina','Pérez','Salas','123456789','perezsalas@gmail.com',2607),(136,'Juana','Hernández','López','123456789','lopez@hotmail.com',2608),(137,'Francisco','Ruiz','Jiménez','123456789','pacoruiz@gmail.com',2609),(138,'Fernando','Romero','López','123456789','romero@gmail.com',2610),(139,'Rosa','Puerto','Muñoz','123456789','rosapuerto@gmail.com',2611),(140,'José','Aguilera','López','123456789','aguilopez@gmail.com',2612),(141,'Mercedes','López','Serrano','123456789','serrano@hotmail.com',2613),(142,'José','Aguilera','Ruiz','123456789','joagru@gmail.com',2614);
/*!40000 ALTER TABLE `profesores` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `borrarProfesor` AFTER DELETE ON `profesores` FOR EACH ROW BEGIN
   delete from usuarios where id = old.idUsuario;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `recupera_puntos`
--

DROP TABLE IF EXISTS `recupera_puntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recupera_puntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(11) NOT NULL,
  `idParte` int(11) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39BAF3298A5051B2` (`idParte`),
  KEY `IDX_39BAF32977247DB7` (`idAlumno`),
  CONSTRAINT `FK_39BAF32977247DB7` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`id`),
  CONSTRAINT `FK_39BAF3298A5051B2` FOREIGN KEY (`idParte`) REFERENCES `partes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recupera_puntos`
--

LOCK TABLES `recupera_puntos` WRITE;
/*!40000 ALTER TABLE `recupera_puntos` DISABLE KEYS */;
/*!40000 ALTER TABLE `recupera_puntos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `recuperaPuntos` AFTER INSERT ON `recupera_puntos` FOR EACH ROW BEGIN
	UPDATE alumno a SET a.puntos = a.puntos - NEW.puntos
    WHERE a.id = NEW.idAlumno;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `sanciones`
--

DROP TABLE IF EXISTS `sanciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFinal` datetime NOT NULL,
  `sancion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `puntosRecuperados` int(11) DEFAULT NULL,
  `idTipo` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  `fechaConfirmacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaComunicacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_227AAF0454C4979` (`idEstado`),
  KEY `IDX_227AAF077247DB7` (`idAlumno`),
  KEY `IDX_227AAF03D043D9` (`idTipo`),
  CONSTRAINT `FK_227AAF03D043D9` FOREIGN KEY (`idTipo`) REFERENCES `tipo_sancion` (`id`),
  CONSTRAINT `FK_227AAF0454C4979` FOREIGN KEY (`idEstado`) REFERENCES `estados_sancion` (`id`),
  CONSTRAINT `FK_227AAF077247DB7` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanciones`
--

LOCK TABLES `sanciones` WRITE;
/*!40000 ALTER TABLE `sanciones` DISABLE KEYS */;
INSERT INTO `sanciones` VALUES (29,'2017-12-17 15:43:27','2017-12-17 15:43:27','2017-12-17 15:43:27','Expulsión Aula Convivencia','','',0,5,1,840,NULL,NULL),(30,'2017-12-19 15:42:25','2017-12-19 15:42:25','2017-12-19 15:42:25','Expulsión Aula Convivencia','','',0,5,1,847,'19/12/2017','19/12/2017');
/*!40000 ALTER TABLE `sanciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `actFechaFinal` BEFORE INSERT ON `sanciones` FOR EACH ROW BEGIN
   IF NEW.idTipo =5 and NEW.fechaInicio = NEW.fechaFinal THEN
      SET NEW.fechaFinal = DATE_ADD(NEW.fechaInicio, INTERVAL 1 HOUR);
   END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `recuperaPorSancion` AFTER INSERT ON `sanciones` FOR EACH ROW BEGIN
	UPDATE alumno a SET a.puntos = a.puntos - NEW.puntosRecuperados
    WHERE a.id = NEW.idAlumno;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `sanciones_partes`
--

DROP TABLE IF EXISTS `sanciones_partes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanciones_partes` (
  `sanciones_id` int(11) NOT NULL,
  `partes_id` int(11) NOT NULL,
  PRIMARY KEY (`sanciones_id`,`partes_id`),
  KEY `IDX_A1D8312D226757EA` (`sanciones_id`),
  KEY `IDX_A1D8312D50F712E6` (`partes_id`),
  CONSTRAINT `FK_A1D8312D226757EA` FOREIGN KEY (`sanciones_id`) REFERENCES `sanciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A1D8312D50F712E6` FOREIGN KEY (`partes_id`) REFERENCES `partes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanciones_partes`
--

LOCK TABLES `sanciones_partes` WRITE;
/*!40000 ALTER TABLE `sanciones_partes` DISABLE KEYS */;
INSERT INTO `sanciones_partes` VALUES (29,46),(30,51);
/*!40000 ALTER TABLE `sanciones_partes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanciones_sanciones`
--

DROP TABLE IF EXISTS `sanciones_sanciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sanciones_sanciones` (
  `sanciones_source` int(11) NOT NULL,
  `sanciones_target` int(11) NOT NULL,
  PRIMARY KEY (`sanciones_source`,`sanciones_target`),
  KEY `IDX_4A51F560A3A8AB3E` (`sanciones_source`),
  KEY `IDX_4A51F560BA4DFBB1` (`sanciones_target`),
  CONSTRAINT `FK_4A51F560A3A8AB3E` FOREIGN KEY (`sanciones_source`) REFERENCES `sanciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4A51F560BA4DFBB1` FOREIGN KEY (`sanciones_target`) REFERENCES `sanciones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanciones_sanciones`
--

LOCK TABLES `sanciones_sanciones` WRITE;
/*!40000 ALTER TABLE `sanciones_sanciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanciones_sanciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_parte`
--

DROP TABLE IF EXISTS `tipo_parte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_parte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_parte`
--

LOCK TABLES `tipo_parte` WRITE;
/*!40000 ALTER TABLE `tipo_parte` DISABLE KEYS */;
INSERT INTO `tipo_parte` VALUES (1,'Leve'),(2,'Grave'),(3,'Muy grave');
/*!40000 ALTER TABLE `tipo_parte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_sancion`
--

DROP TABLE IF EXISTS `tipo_sancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_sancion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_sancion`
--

LOCK TABLES `tipo_sancion` WRITE;
/*!40000 ALTER TABLE `tipo_sancion` DISABLE KEYS */;
INSERT INTO `tipo_sancion` VALUES (1,'Comunicación'),(2,'Jornadas AC'),(3,'Expulsión'),(4,'Otras'),(5,'Horas AC');
/*!40000 ALTER TABLE `tipo_sancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_conducta`
--

DROP TABLE IF EXISTS `tipos_conducta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_conducta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_conducta`
--

LOCK TABLES `tipos_conducta` WRITE;
/*!40000 ALTER TABLE `tipos_conducta` DISABLE KEYS */;
INSERT INTO `tipos_conducta` VALUES (1,'Leve'),(2,'Grave');
/*!40000 ALTER TABLE `tipos_conducta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutores`
--

DROP TABLE IF EXISTS `tutores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_37401534C1E70A7F` (`telefono`),
  KEY `IDX_3740153432DCDBAF` (`idUsuario`),
  CONSTRAINT `FK_3740153432DCDBAF` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutores`
--

LOCK TABLES `tutores` WRITE;
/*!40000 ALTER TABLE `tutores` DISABLE KEYS */;
INSERT INTO `tutores` VALUES (1,'Tutor','tutor','tutor',12312312,'tutor@tutor.com',643);
/*!40000 ALTER TABLE `tutores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutores_alumno`
--

DROP TABLE IF EXISTS `tutores_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutores_alumno` (
  `tutores_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  PRIMARY KEY (`tutores_id`,`alumno_id`),
  KEY `IDX_D73EB89644A2FCF` (`tutores_id`),
  KEY `IDX_D73EB896FC28E5EE` (`alumno_id`),
  CONSTRAINT `FK_D73EB89644A2FCF` FOREIGN KEY (`tutores_id`) REFERENCES `tutores` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D73EB896FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutores_alumno`
--

LOCK TABLES `tutores_alumno` WRITE;
/*!40000 ALTER TABLE `tutores_alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `tutores_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `roles` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `hash` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EF687F22265B05D` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2735 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (7,'maze2','$2y$13$OIjpuzIFeCUB1R4HTupesOcuHlPPq45blBYqXxBGPPdxVPvi9prS2','a:2:{i:0;s:9:\"ROLE_USER\";i:1;s:10:\"ROLE_ADMIN\";}',''),(8,'admin','$2y$13$VSFpYrygw71XhXKZZ4wkG.sJ1BJCYxeTVEWgSFrC9y1U8VkNw3mK.','a:2:{i:0;s:9:\"ROLE_USER\";i:1;s:10:\"ROLE_ADMIN\";}',''),(10,'maze3','$2y$13$zxojZm/8eec.5hYJc.5DPOKlWakoSvILYmsnei.2fiGOZzghQSLJO','a:2:{i:0;s:10:\"ROLE_TUTOR\";i:1;s:13:\"ROLE_PROFESOR\";}',''),(12,'migue','$2a$04$62qX9DlMV52KLXBL4S0fxuMwKvH9YFPN9HApwmtvYAcVRccYF2HPm','N;',''),(642,'tutor','$2y$13$tFovOYbzS.V8XPjvX/tmM.qWNBMXsg0rE.5FbuCmKU0LqeNKsX3jO','a:1:{i:0;s:9:\"ROLE_USER\", i:1;s:10:\"ROLE_TUTOR\";}',''),(643,'tutor2','$2a$04$qR6.p3i4p/BWExf9/xVJkeqHkegWrmvXvM9xTr80BF/LliepY/OGu','a:1:{i:0;s:10:\"ROLE_TUTOR\";}',''),(653,'maroaz','$2y$13$oPQGCJm0cxlGf3V.cBnto.wThD/wl2oLhhg7WsYYkjzdkl8gpzdQG','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(655,'edsaca','$2a$04$.NG0BReIGqzGEPfkB2VIIuhhCMJ8SVygSVbIBcqdHfj6E3ZYjzsEC','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(656,'pegase','$2y$13$LaKB5eaBO1Bka02A5YZX5u/gXPUbLVF0xco.bLg0//p6KI43iHvFK','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(657,'jepati','$2y$13$O9W6TWg/q2h3XApFkNM22.4gKs7GFJLdioMshxwwG65C5uZTPvbvq','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(658,'meloay','$2y$13$DqoPZPRB95ehqMoGfBLaEOWlGDn0Lcr6LGZTNGz0kAZvtAEJO8r7e','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(659,'argopa','$2y$13$.0zSjsx5EbqpELCucHyOoee/EKiV8eUUi0/N9N6kypt1Aakaqc4oW','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}',''),(660,'raacaz','$2y$13$E583nkPTmdGclOF21.Q6peFTYL8P0d97WqPlpMC36A6Cakri1po2e','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(661,'auagal','$2y$13$uHtyXRhE.NQUkImRYF/TQeshoEqoS4x40Wu8EJfpN9ihy3c9NBh2a','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(662,'raaglo','$2y$13$cczKwm.jCzBCRIERscWBt.UcJnaKPbOUwG08XtM0JfW.yKG.AsDym','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(663,'daalco','$2y$13$LR5l/pXBnSKZ3uDqc0ZEjOa12ypki.FsxTh2Pu3GIT6bsxFc8mGIa','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(664,'maalnu','$2y$13$crdcm3A6O2zb/irQ8xDIqeCRbPLCsE1odXKj8id65KVWUBXoLZnIW','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(665,'joalpe','$2y$13$ImbTM8EQBU4GJk0v5pnBn.Rlgv/tiOCMLqwaJOsqojizYBb6Hmhni','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(666,'nealam','$2y$13$UmcQQr6mZn9liatFFFozhu1ge.MgzDi8vGZXyXeA.yyNKdb9tTX2G','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(667,'sealro','$2y$13$d7TsXVW0ASvd7STSJmYEH.L56H6CcjEMH7Wh2STX2ynaWD0Ml2XEi','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(668,'alalga','$2y$13$HKsiFjRxoXYuhBU/51e6F.sW6D7CdFFSs03yhEByoeuvkcv6bXAyG','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(669,'maalgu','$2y$13$O4hNKA/TQSlhKxsH22wdhOuOvXg0wbG6FZGaradOM4QuPGrXf3xFC','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(670,'adalle','$2y$13$WSiwMuVP.Ma/OnwuPbebVOp2GG3hg9s1y2gcqggKIP5WldivvLtE2','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(671,'seamji','$2y$13$hiMrEIZw6fhz4RVYZOhVTeVy/Xt5mWWmR4K7j/O1nOmpUGczk7wIq','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(672,'joarma','$2y$13$eJH.t5htQolWVcL.Iho7o.cDUJCM8en7C.0m3NjFEobRpg6D3aTcy','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(673,'adarga','$2y$13$AWuKhl4eZNjx58KrUWt7xejYgOLXRBalOCr8WSDN258I868hcFJY2','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(674,'alarez','$2y$13$sjIJkxQy03P8zvJzHvBQiuxzVK7aPmweuRqlF94IdvUkjXHf1PE.i','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(675,'naarob','$2y$13$ULu2uGbFYePVuqRfAdh3YeRLYxotMMvd.ex.4tiSQnSH0OprJA.2q','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(676,'mebaga','$2y$13$iSN1pOl4.stwYR/CnFPPcugj9AlWYfRFapgtrnmQtj43zSd3c/yoW','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(677,'jubari','$2y$13$7CSu5FF3gcdRwwdQhbzz9.nARFmbAnehCB5Ula02RwD4ZXQc/ZGLS','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(678,'sebava','$2y$13$EYFKoCuUXlVoS0TfhHdJYuWFIoJHfVw76HZVD5C1YY0ltIx8AWmHe','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(679,'dibe','$2y$13$ybz5hs4TGH5yQvXSppkTjuz82pUAuqTE9Vhy2wLPruxsmh0oZ5Q02','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(680,'cabera','$2y$13$w5KeviqRTL7tAfdfsoKsJOQn3DKPDHLdSWm5pZu086cVtXfL051P2','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(681,'rablre','$2y$13$B7ABUPKyERHg2JizFK0ZxOJMdAelbrCecR7hR4Mb5RGC6dkoYaTU.','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(682,'vebopu','$2y$13$7cOZscLXkCBLnyI/rVVjzeRcaTlRkjutf8wAOOq0I2lxPggpjb.xC','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(683,'albova','$2y$13$6puw9crZq2V1Jpoir4O/ReUjgxdcVHbMlqEEoMcU.lLnJfMsHhZ8u','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(684,'sabrfe','$2y$13$HMRWyQxVHsakboQwv6/T4O3ST3lGmCOG5tULQVPalA9ZJBH9aYnV6','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(685,'daburo','$2y$13$uABklGJN5aO7SnJwn3J33uuRzC6TDlZ3Q4v/gqp0oyerMJVmzxDg6','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(686,'macaav','$2y$13$K6XmJ/pCgLAdufbEg6Gkhu8AeLAAA0sadeDgpysOrN.1vJ8be5uOK','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(687,'vecaro','$2y$13$sJcpd..7qo5a7Neuy1Q4hu3Q/44IVEdB6nE2gzUhaPRwkm.4LApk6','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(688,'macama','$2y$13$K7rPYUuzCl8OGnIXt7zWVenrT5uwUnf2dbnPzV5EYJwmXTRQxOoSq','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(689,'rocase','$2y$13$gq77fanUhIT72EkHuVHPLu1uROSHf0gzFZG0B6UXN7zkQGHWeLu/m','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(690,'rocaec','$2y$13$.0JLEHLBUl.Ksz/EdikBIOkAbxmA6sTWvlrb5//9q4RcaCoDeVybu','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(691,'pecana','$2y$13$ezntOXmrm7sCh1eDsOCwru1u82MwBiGph3YabWU57xSUcB6wZqbem','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(692,'jacago','$2y$13$WGvu1doOQwx9VVJMCehEq.DMRFSJdHkmogOYLoey7qsBoRYaFvZAe','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(693,'crcade','$2y$13$o.l/MAH40PVTH9t/qrPY9.kg/DQPKaziGcmjoVmiOTAWTe5GlHjyK','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(694,'adcalo','$2y$13$OhN8u4s/D1mY73dq9fNm/OGtSye9gxqLXx1GSKTEAfzxQVGKHATYu','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(695,'jucamo','$2y$13$91g7fPsShipFZkqTst7ts.E9LLSITf1996zzSVbru96gT6ivS5Z1u','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(696,'nucafa','$2y$13$BDRXi7lzSIAVC/DHkmsovO7kbSqYdTHwuepx4vstTyUem/o8F4jvO','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(697,'yichzh','$2y$13$FkApRuL2PUVC7x/rm.eWwef7YzfS/7n9CkfGdxKJ5yHbtr0Fp8C9y','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(698,'jucolu','$2y$13$gyuHkkAHi5.lQckRn4/rB.vuvJPM.WNS6.j/ysNNvdrRtWEdr1Kpi','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(699,'dacobe','$2y$13$R14jIM/oUkYmFTmfBG9tzuhcypySfjSUJ.miBBcZfjWn9kHfjcM6q','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(700,'macomo','$2y$13$/PWf6L68BtBgIm0yaQILz.gkyExBq7XQOx6sPGhHzAIPcFOpKmS6.','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(701,'jucodo','$2y$13$xi0pkjWgvl1phR2W3Ew37uvNensfHIq9HuRf/nfO.VKWXd6i1VWSW','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(702,'dacomo','$2y$13$cmq63htCqpLCuPfk8QUTH.NDt6urunt0bM0z3WRNBNkxAAEP8w3xO','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(703,'igcrgo','$2y$13$la88R1VszWE8qUxMQamRfeIj.MavT/TOwfnXcDaLI1I8s/ySIF0ii','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(704,'frcrbo','$2y$13$Mq3vX.KQNxQm.u639LqOVevxIinV2gCxktMZYFMSedWX.cErpc8qy','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(705,'rocude','$2y$13$.GDCP6lOd4AhTEowEA9lA.zIlTNsGTkTFvsqyw50xNouuDjtGlb/i','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(706,'ladeji','$2y$13$v80k07MsGwb131jlTYcKTuVkxGU8wT6XS9.8PUTR2b91vWgkJgXoG','a:1:{i:0;s:9:\"ROLE_USER\";}',''),(2451,'feagsa','$2y$13$UmokXWZ2ymim231uqhmlYOG6ZdqNjJRBt43jitZNmHbDLR549/zdi','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$AR41GYw1LptK3MjzmQvUM.8DAhdqYA6VI/DWbBScxF7qk.XW9GISq'),(2484,'joaglo','$2y$13$6mhMbvGJcQq0PLrTV8GoHety0MS6DecLTmf5mLLcobZ.4G1oY295S','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$68PxyxjKlJA79UM3KQUnVu0u7jHmtzUVVltg8T7o9bbmKfzkrgcwS'),(2486,'alu','$2a$04$62qX9DlMV52KLXBL4S0fxuMwKvH9YFPN9HApwmtvYAcVRccYF2HPm','N;',''),(2578,'convivencia','$2y$13$t3MfPuseRXvI5i6NRHPDhedmQBPG5jwxtAk0o2AZYSed52SQMrus.','a:1:{i:0;s:16:\"ROLE_CONVIVENCIA\";}','$2y$13$t3MfPuseRXvI5i6NRHPDhedmQBPG5jwxtAk0o2AZYSed52SQMrus.'),(2607,'crpesa','$2y$13$eeqy91PGk0WEhUELveZCzeKfZIENyQfWmIIfdFJaB07CYtna4pHd.','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$92pEr80F..FXpYfIUI.EuuhHKYjZpHanMBY/krMJMzInwsurSWY8K'),(2608,'juhelo','$2y$13$3oBa1vnDTM1W8QcNTE.p6ehNBH5SQsNd8/QHt8ExCAavPVc7040b6','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$6rjG6L6ikhaZJWhYV/Eyd.eHTzPnz.ijxYy64XqZMi/SRwMc1tdFG'),(2609,'frruji','$2y$13$NKBVDhfkBj/ikhZ1LMSRCOmj.hCQHIYPv6qvNtHaDDh3SR.z0tgwa','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$VFbQ21OhXo.6egbNlNBhI.3kwf/DH68zKAI8Dwr13FJpMORCKIw1y'),(2610,'ferolo','$2y$13$gRc5i6Lcq8hWOZLdqSFFGO781y0xYLx4tcKXJ7j5PLl6ycBrS41AG','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$D/0krToW.vx2yfqDd6SYlOih9a1Mpo27CnbhZrSEYPHhF00O6BltK'),(2611,'ropumu','$2y$13$11Q8t/xrO.ZQ1H5/YUL7geh/nW41lOpK0uwGcmqcx4NhXcqMV/eXW','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$1Er77ItNhsuzawSIGjR2te0YgBGFzdMBgXeoQX1IRIcX/JCWPMd7e'),(2612,'joaglo1','$2y$13$giwfcfcVBb3fNZ3nkmfeT.GAQ7ktfWC/qM0AYblCEagSiaX4E1TUi','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$DdS3u3NX3y88KFljjnqTL.dhFWm1AuTd9Mqk56esPGCtU6iNjTxMa'),(2613,'melose','$2y$13$Fb9X5GgfvjMREkD98BG6yOPdYm5NYSf9ZMBx6K03R0bDWY5XlhMb.','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2y$13$otSevjHMq.eYtK3f0mSrjefV3XNaCWlXCDxk6MoyVEpkgCwRb08Fy'),(2614,'joagru','$2a$12$lhE4i/w4tK.oz3282GEaBOqUyXY20ageczW9dB0j.7TQzgadp5NPq','a:1:{i:0;s:13:\"ROLE_PROFESOR\";}','$2a$12$lhE4i/w4tK.oz3282GEaBOqUyXY20ageczW9dB0j.7TQzgadp5NPq'),(2727,'mjaime','$2a$04$eUbop8TNMZ8he/2KxURRN.o3vcgcfX2dAks6VnkXptHyHPujJ0AS6','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$72ara0G0AOT1t1aDwXdZCedi6QN7ja5ItkqhRKVN6k2eaZ6qisE5W'),(2728,'mlourdes','$2a$04$2JGuMJi4d2Qyj7qKcq0Lb.S3aTJtRiRwo1jwavNkLYBAttURwqaXa','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$4cMqQQTa8RJTFaExmGVM0un9XWerKl6XM.OBERyV5vFr0CR.FCUAS'),(2729,'mjoser','$2a$04$dhHJYvSs9Qd4wkm7CXdRSONn7quXcy/9CpGMz0xkebfLGfhq3e0mS','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$JNVNQD3j2xYbFj/8VjNvBOlMHUX.8ec7qQ/cYv6LVL9xqkz4pRrXO'),(2730,'mjose','$2a$04$ddGa./whXD8X9zg3t1K9Yu1lRLKULyboemkMxdaqk4YcyKudBWohK','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$RS.viwJaahn5zT8FWxc4K.LhTiVrI6YeUT.wpIQnl.1mEtdrJks8u'),(2731,'mmcarmen','$2a$04$0Z0B8wZOAnXhALq0CbIjEu9XNH3gbDrMBEMY22TXKnjuMdiOWBquS','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$rbonhNBfcjQ4zakw/ZWT..FuYaDjK9hP2fap5zJnLQpleJXkRw/1C'),(2732,'mrafael','$2a$04$xvi8xCn9pGlbshXvdlV7cOqowov4PvKKV/LCwNFaXWvaTt/KrIi9W','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$C/7WTl8H49zf93CzSqno7uy7cNLADmMswdh3afXufUz5QN3.JYfFa'),(2733,'josema','$2a$04$7OTDXa4h1CZpQy3PbCvKM.c2hDjU5slgEafsjR2qwePJOsY8GaPVm','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$pTVpDEqH7owCS3sdSHmdTOIsSApnyMA20CJ2ACQhUpi.yDNSDWCv.'),(2734,'lucas','$2a$04$mcloMvhotDGErtWQ0J9uWu9ooZ5hl0AxkCcBmO0uDW8E6AgQr2Cwa','a:1:{i:0;s:9:\"ROLE_USER\";}','$2y$13$3hPTWIdkuV1wPvA2oOLCtuLpn3sRp94YoioGdN/oxfWyqIV5IsjB2');
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

-- Dump completed on 2018-02-17  1:00:02
