-- MySQL dump 10.13  Distrib 5.6.45, for Linux (x86_64)
--
-- Host: shimmy.store.d0m.de    Database: DB3694306
-- ------------------------------------------------------
-- Server version	5.6.42-log

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
-- Table structure for table `competentie`
--

DROP TABLE IF EXISTS `competentie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competentie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `omschrijving` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competentie`
--

LOCK TABLES `competentie` WRITE;
/*!40000 ALTER TABLE `competentie` DISABLE KEYS */;
INSERT INTO `competentie` VALUES (1,'Doorzetten'),(2,'Werken met tijdslimieten'),(3,'Probleemoplossend denken'),(4,'Logisch denken'),(5,'Analytisch denken'),(6,'Verbanden leggen'),(7,'Nauwkeurig werken'),(8,'Abstraheren');
/*!40000 ALTER TABLE `competentie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dagcode`
--

DROP TABLE IF EXISTS `dagcode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dagcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dagcode` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dagcode`
--

LOCK TABLES `dagcode` WRITE;
/*!40000 ALTER TABLE `dagcode` DISABLE KEYS */;
INSERT INTO `dagcode` VALUES (1,'123','2019-03-13',0),(2,'4321','2019-03-13',1),(4,'UgA4a','2019-03-16',0),(7,'WYJ9w','2019-03-14',0),(8,'4321','2019-03-15',1),(9,'BJE3m','2019-03-19',0),(10,'NlzU5','2019-03-26',0),(11,'401b8','2019-03-06',0),(12,'DIIMZ','2019-03-27',0),(13,'i1kF1','2019-03-28',0),(14,'SK3yN','2019-03-29',0),(15,'VdG4l','2019-04-09',0),(16,'4p2zJ','2019-04-10',0),(17,'ZRufm','2019-04-11',0),(18,'dA2pM','2019-04-12',0),(19,'RNNDk','2019-05-23',0),(20,'yz3sE','2019-05-22',0),(21,'ccyZy','2019-06-06',0),(22,'t7Sok','2019-06-07',0),(23,'huqVu','2019-06-13',0),(24,'JKFP6','2019-06-17',0),(25,'QE2vr','2019-07-01',0),(26,'JCtAS','2019-07-03',0),(27,'KJeyx','2019-08-20',0),(28,'MSCmf','2019-08-22',0),(29,'UKD9a','2019-08-26',0),(30,'z9ptH','2019-08-29',0),(31,'ZPzFn','2019-10-14',0),(32,'MYzfS','2019-12-20',0),(33,'iCEMZ','2020-01-31',0),(34,'9vwr4','2020-02-04',0),(35,'TjkUn','2020-02-24',0),(36,'gcqty','2020-03-16',0),(37,'HJoOy','2020-03-16',1),(38,'mDACQ','2020-03-17',0),(39,'KUFEz','2020-03-17',1),(40,'MxUlq','2020-03-18',1),(41,'Y8CQi','2020-03-19',0),(42,'RPeVC','2020-03-19',1),(43,'paS3V','2020-03-20',0),(44,'CFxqd','2020-03-20',1),(45,'WtPeX','2020-03-23',0),(46,'qPJmg','2020-03-23',1),(47,'P8wwu','2020-03-24',0),(48,'7KTrX','2020-03-24',1),(49,'qoko5','2020-03-25',0),(50,'cHgDm','2020-03-26',0),(51,'tXno4','2020-03-30',0),(52,'EE5Ir','2020-04-06',0),(53,'yk9UB','2020-04-07',0),(54,'j4Ph9','2020-04-08',0),(55,'Lw76O','2020-04-14',0),(56,'xTJS5','2020-04-15',0),(57,'PC9v6','2020-04-16',0),(58,'p7eSi','2020-04-17',0),(59,'UC6TS','2020-04-20',0),(60,'JSlIJ','2020-04-21',0),(61,'2WQ4f','2020-04-22',0),(62,'rY3pn','2020-04-23',0),(63,'ZW2dk','2020-05-12',0),(64,'zgvcv','2020-05-13',0),(65,'xPKTD','2020-05-16',0),(66,'QblkS','2020-05-18',0),(67,'3GSZC','2020-05-19',0),(68,'SBcSb','2020-05-20',0),(69,'li2UU','2020-05-23',0),(70,'UUpfZ','2020-05-29',0),(71,'rhYfu','2020-05-30',0),(72,'KKLIb','2020-05-31',0),(73,'8A5bp','2020-06-02',0),(74,'G3HGm','2020-06-03',0),(75,'a2sYV','2020-06-04',0),(76,'gKf8M','2020-06-05',0),(77,'giHNs','2020-06-10',0),(78,'E34BL','2020-06-11',0),(79,'WWxzS','2020-06-18',0),(80,'QYgCM','2020-06-19',0),(81,'r7bUI','2020-06-23',0),(82,'EV5fP','2020-06-24',0),(83,'vRsjy','2020-06-25',0),(84,'iJaLF','2020-06-26',0);
/*!40000 ALTER TABLE `dagcode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docent`
--

DROP TABLE IF EXISTS `docent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docent` (
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docent`
--

LOCK TABLES `docent` WRITE;
/*!40000 ALTER TABLE `docent` DISABLE KEYS */;
INSERT INTO `docent` VALUES ('docent','docent','docent@rocva.nl',2);
/*!40000 ALTER TABLE `docent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leerling`
--

DROP TABLE IF EXISTS `leerling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leerling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `emailadres` varchar(50) NOT NULL,
  `starttijd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `eindtijd` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leerling`
--

LOCK TABLES `leerling` WRITE;
/*!40000 ALTER TABLE `leerling` DISABLE KEYS */;
INSERT INTO `leerling` VALUES (1,'R','van Pietersom','pietersomr@talne.tnl','2019-05-23 07:46:00','0000-00-00 00:00:00',0),(2,'Mohamed','Bousss','2081619@talnet.nl','2019-05-23 08:43:01','0000-00-00 00:00:00',0),(3,'tygo','willems','tawillems@hotmail.com','2019-05-23 13:15:36','2019-05-23 14:13:50',0),(4,'Akesse','Sumter','akesse.sumter@outlook.com','2019-05-23 13:17:20','0000-00-00 00:00:00',0),(5,'Casper','Blom','casperblom.cb@gmail.com','2019-05-23 13:18:31','2019-05-23 14:14:17',0),(6,'Jevancy','Bhoelai','jevancybhoelai@gmail.com','2019-05-23 13:25:35','0000-00-00 00:00:00',0),(7,'Melle','Sanou','2085637@talnet.nl','2019-05-23 13:26:46','2019-05-23 14:12:33',0),(8,'Erik','Kuperus','Erik.Kuperus@gmail.com','2019-06-06 12:34:54','0000-00-00 00:00:00',0),(9,'indi','beer','indibeer@gmail.com','2019-06-06 13:14:24','2019-06-06 14:23:35',0),(10,'Randy','Ofosu','Randy_Ofosu@hotmail.com','2019-06-06 13:16:06','2019-06-06 14:14:09',0),(11,'Anass','Misri','anassmisri@hotmail.com','2019-06-06 13:17:35','2019-06-06 14:49:06',0),(12,'Mohamed Nassim','el Jouhri','Nassim_1021@hotmail.com','2019-06-06 13:18:41','0000-00-00 00:00:00',0),(13,'Nicolas','Gonsalves','Nicolas.gjdp@gmail.com','2019-06-06 13:20:41','0000-00-00 00:00:00',0),(14,'Lucien','van Essen','lucien_a_2000@hotmail.com','2019-06-06 13:24:46','2019-06-06 14:41:35',0),(15,'adjani','valerius','a.r.valerius@gmail.com','2019-06-06 13:30:54','0000-00-00 00:00:00',0),(16,'Luc','Wendel','2078071@talnet.nl','2019-06-07 11:59:03','0000-00-00 00:00:00',0),(17,'Denzel','Camelia','denzel.camelia@student.rocva.nl','2019-06-07 12:00:00','0000-00-00 00:00:00',0),(18,'Mounssif','Elarras','Mounssif400@gmail.com','2019-06-07 12:00:33','0000-00-00 00:00:00',0),(19,'DaniÃ«lle','Roelofsma','danielleroelofsma@gmail.com','2019-06-07 12:09:07','0000-00-00 00:00:00',0),(20,'Luca','Siecker','lucasiecker@icloud.com','2019-06-07 12:10:08','0000-00-00 00:00:00',0),(21,'chakib','meklach','chakib.meklach@hotmail.nl','2019-06-07 12:10:26','0000-00-00 00:00:00',0),(22,'aime','lando','aimelando@gmail.com','2019-06-07 12:10:34','0000-00-00 00:00:00',0),(23,'Henry','Benaye','henry.be@outlook.com','2019-06-07 12:11:53','0000-00-00 00:00:00',0),(24,'Ayyoub','Yakhlaf','ayyoubyakhlaf@hotmail.com','2019-06-07 12:11:56','0000-00-00 00:00:00',0),(25,'dylan','van eijk','dylanvaneijk@outlook.com','2019-06-07 12:12:23','0000-00-00 00:00:00',0),(26,'marwan','jouini','mokthar774@gmail.com','2019-06-07 12:16:37','0000-00-00 00:00:00',0),(27,'ian','klein langenhorst','timothy104@hotmail.com','2019-06-17 13:24:34','0000-00-00 00:00:00',0),(28,'Jesse','Warmels','jessewarmels6@gmail.com','2019-06-17 13:38:13','2019-06-17 14:22:45',0),(29,'Stefan','Roodhart','s.roodhart@gmail.com','2019-06-17 13:38:47','2019-06-17 14:21:05',0),(30,'Rien','Post','rien@rienpost.nl','2019-06-17 13:38:50','2019-06-17 14:24:54',0),(31,'Ayoub','el mghari','ayoubelmg@hotmail.com','2019-06-17 13:39:05','0000-00-00 00:00:00',0),(32,'gervi','Lindeborg','gervi_gervi@hotmail.com','2019-06-17 13:39:15','2019-06-17 14:56:08',0),(33,'dardan','mustafa','dardan.m@live.nl','2019-06-17 13:39:22','0000-00-00 00:00:00',0),(34,'Meshano','Fransman','fmeshano@gmail.com','2019-06-17 13:39:46','0000-00-00 00:00:00',0),(35,'bengali','doumbia','185352@gsf.nl','2019-06-17 13:40:04','0000-00-00 00:00:00',0),(36,'karma','king','karmaluufaking@gmail.com','2019-06-17 13:40:05','2019-06-17 14:28:29',0),(37,'lokmane','yakhlaf','186233@gsf.nl','2019-06-17 14:09:58','0000-00-00 00:00:00',0),(38,'Noureddine','Frindi','noureddinefrindi@outlook.com','2019-07-01 13:12:17','0000-00-00 00:00:00',0),(39,'mohammed','belal','mohammedbelal1087@gmail.com','2019-07-01 13:13:10','0000-00-00 00:00:00',0),(40,'Jonathan','Amoako','j.amoako@outlook.com','2019-07-01 13:14:19','0000-00-00 00:00:00',0),(41,'corne','siebeling','cornesiebeling@gmail.com','2019-07-01 13:18:08','0000-00-00 00:00:00',0),(42,'Samy','Farahat','samyfarahat2003@gmail.com','2019-07-01 13:18:47','0000-00-00 00:00:00',0),(43,'Raffa','Lemmer','raphael_99@live.nl','2019-07-01 13:20:59','0000-00-00 00:00:00',0),(44,'iris','petersen','irispe2707@gmail.com','2019-07-03 12:37:00','0000-00-00 00:00:00',0),(45,'Luca','Derlagen','lucaderlagen@gmail.com','2019-07-03 12:38:08','0000-00-00 00:00:00',0),(46,'Joao','Gunputsing','Joao_gunputsing@hotmail.com ','2019-08-20 09:20:59','0000-00-00 00:00:00',0),(47,'Priscilla','Lumor','Priscilla.lumor@outlook.com','2019-08-20 09:31:51','0000-00-00 00:00:00',0),(48,'jochem','gravendeelq','jochemgravendeel@gmail.com','2019-08-20 13:37:39','0000-00-00 00:00:00',0),(49,'jochem','gravendeel','jochemgravendeel@hotmail.com','2019-08-20 14:32:08','2019-08-20 14:56:02',0),(50,'Sofyan','Garrouj','Sofyan2901@icloud.com','2019-08-20 15:08:36','2019-08-20 21:32:44',0),(51,'Arbab','malik','Arbabdj@live.nl','2019-08-20 15:15:55','2019-08-20 19:18:55',0),(52,'louay','benfaddil','louay1@live.nl','2019-08-20 18:30:02','2019-08-20 21:58:30',0),(53,'Sarai','Misidjan','Sarai.misidjan@hotmail.com','2019-08-26 16:59:52','2019-08-26 19:12:17',0),(54,'Tyrone','Faulhaber','tyronefaulhaber@gmail.com','2019-08-29 14:13:02','2019-08-29 14:49:57',0),(55,'Muhammed','Cetinkaya','m.cagli@rocva.nl','2019-10-14 06:49:57','0000-00-00 00:00:00',0),(56,'Sander','Loman','sanderfeitsma13@gmail.com','2019-12-20 12:35:44','0000-00-00 00:00:00',0),(57,'mitchel','van cronenburg','mitchelvancronenburg@outlook.com','2019-12-20 12:36:04','0000-00-00 00:00:00',0),(58,'Milo','van Dam','milod1611@gmail.com','2019-12-20 12:37:27','0000-00-00 00:00:00',0),(59,'Jorrit','van Geffen','jorritvgeffen@gmail.com','2019-12-20 12:37:27','0000-00-00 00:00:00',0),(60,'Daniel','Barazani','daniel.barazani@live.nl','2019-12-20 12:38:46','0000-00-00 00:00:00',0),(61,'Naim','Martina','naim.martina2@hotmail.com','2019-12-20 12:38:47','0000-00-00 00:00:00',0),(62,'Thomas','Pos','ttd.pos@gmail.com','2019-12-20 12:38:48','2019-12-20 13:29:16',0),(63,'Ritchy','Rijker','RitchyRicanel@gmail.com','2019-12-20 12:39:05','0000-00-00 00:00:00',0),(64,'NathaniÃ«l','de Waal','nathanieldewaal@hotmail.com','2019-12-20 12:51:54','2019-12-20 13:44:39',0),(65,'Abdulrahman','Rihan','abdul.rihan.50@gmail.com','2019-12-20 12:54:10','0000-00-00 00:00:00',0),(66,'Rida','Najibi','ridanjb@gmail.com','2019-12-20 12:54:51','0000-00-00 00:00:00',0),(67,'jayson','van olffen','Grotehond1233@hotmail.com','2019-12-20 12:56:59','0000-00-00 00:00:00',0),(68,'Meraichio','Sijp','meraichio.sijp@gmail.com','2019-12-20 13:00:26','0000-00-00 00:00:00',0),(69,'badreddine ','maftahi','badrmaftahi@gmail.com','2019-12-20 13:16:07','0000-00-00 00:00:00',0),(70,'abdoul','sanfo','asanfoa9@gmail.com','2020-01-31 12:50:19','0000-00-00 00:00:00',0),(71,'safak','akkurt','safakzonamo@gmail.com ','2020-01-31 13:14:32','0000-00-00 00:00:00',0),(72,'Hayder','Abidi','hayder.messi10@hotmail.com','2020-01-31 13:20:12','0000-00-00 00:00:00',0),(73,'Jayden ','Bart','JaydenBart@hotmail.com','2020-01-31 13:22:01','0000-00-00 00:00:00',0),(74,'Mohamed','Shaikh','asadshaikh@outlook.com','2020-01-31 13:22:12','0000-00-00 00:00:00',0),(75,'milan','zwanenberg','milan.zwanenberg@gmail.com','2020-01-31 13:26:47','0000-00-00 00:00:00',0),(76,'Leon','Drobac','leondrobac0312@gmail.com','2020-01-31 13:29:13','0000-00-00 00:00:00',0),(77,'Kaj','Wormhoudt','kajwormhoudt46@gmail.com','2020-01-31 13:29:26','0000-00-00 00:00:00',0),(78,'Sibren','Brink','sibbrink@hotmail.com','2020-01-31 13:29:43','0000-00-00 00:00:00',0),(79,'diego','blom','diegoblom01@gmail.com','2020-01-31 13:30:37','0000-00-00 00:00:00',0),(80,'sebastiaan','klockenbrink','sebastiaan.klockenbrin17@gmail.com','2020-01-31 13:39:43','0000-00-00 00:00:00',0),(81,'fawaz','alayesh','fa_ayesh@hotmail.com','2020-01-31 13:47:20','0000-00-00 00:00:00',0),(82,'Imran','Kaouch','imrankaouch@hotmail.com','2020-02-04 13:05:08','0000-00-00 00:00:00',0),(83,'joÃ«l','Banshi','joelbanshi@gmail.com','2020-02-04 13:05:15','0000-00-00 00:00:00',0),(84,'bruno','hofman','bruno.w.hofman@gmail.com','2020-02-04 13:06:10','0000-00-00 00:00:00',0),(85,'Soufiane','El mouman','s.elmouman@marcanti.espritscholen.nl','2020-02-04 13:12:22','0000-00-00 00:00:00',0),(86,'Mohammed','Dahman','zortux123@gmail.com','2020-02-04 13:12:46','0000-00-00 00:00:00',0),(87,'baran','demir','barandemir3322@outlook.com','2020-02-04 13:27:29','0000-00-00 00:00:00',0),(88,'Julian','de Vries','Juuldevries@kpnmail.nl','2020-02-24 14:07:43','0000-00-00 00:00:00',0),(89,'lucas','huijben','lucashuijben@gmail.com','2020-02-24 14:08:54','0000-00-00 00:00:00',0),(90,'Fynn','van Kleef','fynnvankleef@outlook.com','2020-02-24 14:09:15','0000-00-00 00:00:00',0),(91,'Emile','Ferati','Feratiemile@gmail.com','2020-02-24 14:10:05','0000-00-00 00:00:00',0),(92,'Cornelius','Nimo','Corryman157@gmail.com','2020-02-24 14:10:16','0000-00-00 00:00:00',0),(93,'Tom','Sommeling','tommyboyyx@gmail.com','2020-02-24 14:10:17','0000-00-00 00:00:00',0),(94,'chesron','coutinho','187887 @gsf.nl','2020-02-24 14:10:44','0000-00-00 00:00:00',0),(95,'Walid','Harouche','walidharouche@outlook.com','2020-02-24 14:11:14','0000-00-00 00:00:00',0),(96,'jerremai','oosterlen ','jerremaioos7@gmail.com','2020-02-24 14:17:16','0000-00-00 00:00:00',0),(97,'Jan','Boezeroen','r.vanpietersom@rocva.nl','2020-03-16 13:18:51','0000-00-00 00:00:00',0),(98,'Romy','Shoshani','romyshoshani@gmail.com','2020-03-16 20:15:30','0000-00-00 00:00:00',0),(99,'Lucien','Osei','lucienosei10@gmail.com','2020-03-17 19:06:05','2020-03-17 20:51:00',0),(100,'Lucien','Osei','lucienosei10@gmail.com','2020-03-18 11:34:16','2020-03-18 12:20:30',1),(101,'Amine','Kichou','a.kichou1007@gmail.com','2020-03-19 12:09:28','2020-03-19 19:11:16',0),(102,'rayan','chentouf','Rayanchentoufft@gmail.com','2020-03-19 18:07:03','0000-00-00 00:00:00',0),(103,'mohamed amine','Kichou','f_amrani@live.nl','2020-03-19 19:11:33','0000-00-00 00:00:00',0),(104,'Finn','Kragt','finn16@ziggo.nl','2020-03-24 10:26:01','2020-03-24 11:23:13',0),(105,'Fabien','Bruchle','fbruchle@gmail.com','2020-03-24 10:49:40','0000-00-00 00:00:00',0),(106,'Michal','Kakol','michall.kakoll@gmail.com','2020-03-24 12:35:03','0000-00-00 00:00:00',0),(107,'Aditya ','Soebedar','aditya@live.nl','2020-03-25 13:45:01','0000-00-00 00:00:00',0),(108,'Jurgen','Louvris','jurgenlouvris@gmail.com','2020-03-25 15:36:05','0000-00-00 00:00:00',0),(109,'Aditya ','Soebedar','adirambharose@gmail.com','2020-03-25 15:52:38','0000-00-00 00:00:00',0),(110,'Aditya ','Soebedar','15512@leerlingem.hetvlc.nl','2020-03-25 17:42:59','0000-00-00 00:00:00',0),(111,'Arman','Salehi','jesuisarman@Gmail.com','2020-03-30 11:01:38','2020-03-30 11:56:49',0),(112,'wouter','baas','wouterbaas01@gmail.com','2020-03-30 14:29:19','2020-03-30 16:27:20',0),(113,'Jelmer','Wiersma','dusjelmer@gmail.com','2020-03-30 14:51:03','2020-03-30 20:10:14',0),(114,'Nadim','Al Masyhur','nadimmasyhur@gmail.com','2020-03-30 19:04:07','0000-00-00 00:00:00',0),(115,'Jaffar','Al masyhur','jaffarmasyhur@gmail.com','2020-03-30 20:04:01','0000-00-00 00:00:00',0),(116,'amin','elkhommsi','Aminelk1@outlook.com','2020-03-30 21:38:23','2020-03-30 22:29:31',0),(117,'Ruben','Nijhuis','contact@rubennijhuis.com','2020-04-06 10:11:55','2020-04-06 10:47:11',0),(118,'omar','mashhour','o.mashhour@icloud.com','2020-04-06 20:55:11','0000-00-00 00:00:00',0),(119,'fahad','Abbasi','fahadabbasi588@gmail.com','2020-04-07 15:59:39','0000-00-00 00:00:00',0),(120,'Jean','Kalo','jeankalodj@gmail.com','2020-04-08 08:10:14','2020-04-08 09:44:54',0),(121,'fahad','abbasi','fahadabbasi2002@gmail.com','2020-04-08 09:24:24','0000-00-00 00:00:00',0),(122,'Daan','van Dalfsen','daantjevandalfsen@gmail.com','2020-04-15 09:07:11','0000-00-00 00:00:00',0),(123,'nouaman','abdelghani','nouamanghani@gmail.com','2020-04-15 19:08:30','0000-00-00 00:00:00',0),(124,'joeny','ogenia','Joenyogenia@gmail.com','2020-04-16 10:59:00','0000-00-00 00:00:00',0),(125,'mouaad','Ben Abdelmoumen','mouaad-bens@hotmail.com','2020-04-17 16:10:59','2020-04-17 16:58:37',0),(126,'Julian','Wieffer','julianwieffer@gmail.com','2020-04-22 10:00:56','2020-04-22 10:46:34',0),(127,'Mike','Koue-Lambou','mkouelambou@gmail.com','2020-04-22 10:32:47','0000-00-00 00:00:00',0),(128,'Mike','Koue-Lambou','mvi.m.kouelambou@gmail.com','2020-04-22 11:10:29','0000-00-00 00:00:00',0),(129,'Dain','Vugs','super.dain@gmail.com','2020-04-22 14:22:23','2020-04-22 14:51:35',0),(130,'Max','Hondelink','maxhondelink@gmail.com','2020-04-23 10:38:43','0000-00-00 00:00:00',0),(131,'chyree','mozer','chyreemozer3@gmail.com','2020-05-12 14:12:30','2020-05-12 15:17:42',0),(132,'Jakob','Nakachidze','jakobnakachidze@gmail.com','2020-05-12 18:38:18','2020-05-12 21:14:43',0),(133,'Daan','Verheij','daanverheij04@gmail.com','2020-05-13 09:59:55','2020-05-13 10:52:30',0),(134,'Ilias','El Mahdaoui','iliasm181@gmail.com','2020-05-13 12:38:00','0000-00-00 00:00:00',0),(135,'Samuel','Adu','samadujnr1@gmail.com','2020-05-13 19:11:20','0000-00-00 00:00:00',0),(136,'Yassine','Harchani','Yassinea5713@outlook.com','2020-05-18 14:01:42','2020-05-20 22:07:10',0),(137,'Alisha','Soedamah','alish.asoedamah@gmail.com','2020-05-18 14:36:16','2020-05-18 15:26:36',0),(138,'Riyad','Mahmud','rmahmud933@gmail.com','2020-05-19 07:58:09','0000-00-00 00:00:00',0),(139,'Kiran','Biesheuvel','kiranbiesheuvel@gmail.com','2020-05-19 08:56:18','0000-00-00 00:00:00',0),(140,'Pascal','Konijnenburg','psclkon@gmail.com','2020-05-19 18:42:59','2020-05-20 13:33:20',0),(141,'Bob','Dijkman','bobdijkman261@gmail.com','2020-05-19 21:08:13','0000-00-00 00:00:00',0),(142,'John','Wezenberg','itzememario@gmail.com','2020-05-20 08:36:01','2020-05-20 09:04:26',0),(143,'Kid','Oostwouder','oostwouderkid@gmail.com','2020-05-20 10:56:51','2020-05-20 19:25:04',0),(144,'kevin','Zwolschen','Kevin.zwolschen@hotmail.nl','2020-05-20 12:52:06','0000-00-00 00:00:00',0),(145,'Jeremy','Rea','jeremy.rea@hotmail.com','2020-05-20 14:14:24','0000-00-00 00:00:00',0),(146,'Dion','Suarez','dions.ds@gmail.com','2020-05-23 11:27:52','2020-05-23 12:04:02',0),(147,'milan','giacomini','milan.giacomini@outlook.com','2020-06-02 14:48:54','0000-00-00 00:00:00',0),(148,'Rania','Marfaa','mrfrania@gmail.com','2020-06-03 12:39:18','0000-00-00 00:00:00',0),(149,'Keean','Chalmers','keeanchalmers@gmail.com','2020-06-04 13:49:44','0000-00-00 00:00:00',0),(150,'Youssef','el Khalloufi','youssefosdorp@hotmail.com','2020-06-05 13:49:32','2020-06-05 14:46:59',0),(151,'Ayoub','Smitten','ayoub06122002@gmail.com','2020-06-10 11:17:51','0000-00-00 00:00:00',0),(152,'Bart','Post','btjp80@gmail.com','2020-06-10 14:43:12','2020-06-10 17:05:18',0),(153,'max','maksimovic','maximilliaan04@gmail.com','2020-06-10 20:09:30','0000-00-00 00:00:00',0),(154,'Oliver','Bont','ryanoliverkam@gmail.com','2020-06-19 10:11:03','0000-00-00 00:00:00',0),(155,'joey','janmaat','joey.janmaat2001@gmail.com','2020-06-23 21:38:00','0000-00-00 00:00:00',0),(156,'Boyd','Appiah','appiahboyd@gmail.com','2020-06-24 21:18:52','0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `leerling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leerling_level`
--

DROP TABLE IF EXISTS `leerling_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leerling_level` (
  `leerlingId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL,
  `sterren` int(11) NOT NULL,
  `gereed` tinyint(1) NOT NULL,
  PRIMARY KEY (`leerlingId`,`levelId`),
  KEY `levelId` (`levelId`),
  CONSTRAINT `leerling_level_ibfk_1` FOREIGN KEY (`leerlingId`) REFERENCES `leerling` (`id`),
  CONSTRAINT `leerling_level_ibfk_2` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leerling_level`
--

LOCK TABLES `leerling_level` WRITE;
/*!40000 ALTER TABLE `leerling_level` DISABLE KEYS */;
INSERT INTO `leerling_level` VALUES (1,1,5,1),(1,2,5,0),(2,1,5,1),(2,2,2,1),(2,3,5,0),(3,1,5,1),(3,2,2,1),(3,3,3,1),(3,4,0,1),(3,5,0,1),(3,9,4,1),(4,1,5,1),(4,2,2,1),(4,3,0,1),(4,4,5,1),(4,5,4,1),(4,9,5,0),(5,1,5,1),(5,2,2,1),(5,3,0,1),(5,4,0,1),(5,5,0,1),(5,9,1,1),(6,1,1,1),(6,2,2,1),(6,3,2,1),(6,4,10,0),(7,1,3,1),(7,2,2,1),(7,3,0,1),(7,4,0,1),(7,5,0,1),(7,9,4,1),(8,1,3,1),(8,2,2,1),(8,3,1,1),(8,4,10,0),(9,1,5,1),(9,2,3,1),(9,3,0,1),(9,4,0,1),(9,5,0,1),(9,9,5,1),(10,1,5,1),(10,2,2,1),(10,3,4,1),(10,4,0,1),(10,5,0,1),(10,9,4,1),(11,1,5,1),(11,2,2,1),(11,3,0,1),(11,4,0,1),(11,5,0,1),(11,9,5,1),(12,1,5,1),(12,2,2,1),(12,3,0,1),(12,4,0,1),(12,5,5,0),(13,1,3,1),(13,2,2,1),(13,3,0,1),(13,4,0,1),(13,5,0,1),(13,9,5,0),(14,1,2,1),(14,2,2,1),(14,3,5,0),(14,4,0,1),(14,5,4,1),(14,9,5,1),(15,1,4,1),(15,2,2,1),(15,3,0,1),(15,4,10,0),(16,1,4,1),(16,2,2,1),(16,3,0,1),(16,4,0,1),(16,5,0,1),(16,9,5,0),(17,1,5,1),(17,2,2,1),(17,3,5,1),(17,4,0,1),(17,5,0,1),(17,9,5,0),(18,1,5,1),(18,2,5,1),(18,3,0,1),(18,4,0,1),(18,5,0,1),(18,9,5,0),(19,1,3,1),(19,2,2,1),(19,3,0,1),(19,4,0,1),(19,5,5,0),(20,1,4,1),(20,2,2,1),(20,3,0,1),(20,4,0,1),(20,5,0,1),(20,9,5,0),(21,1,3,1),(21,2,2,1),(21,3,0,1),(21,4,0,1),(21,5,5,0),(22,1,1,1),(22,2,3,1),(22,3,0,1),(22,4,10,0),(23,1,3,1),(23,2,2,1),(23,3,0,1),(23,4,0,1),(23,5,5,0),(24,1,0,1),(24,2,2,1),(24,3,0,1),(24,4,9,1),(24,5,5,0),(25,1,4,1),(25,2,2,1),(25,3,0,1),(25,4,0,1),(25,5,5,0),(26,1,1,1),(26,2,2,1),(26,3,3,1),(26,4,0,1),(26,5,5,0),(27,1,5,1),(27,2,2,1),(27,3,5,0),(28,1,5,1),(28,2,2,1),(28,3,0,1),(28,4,0,1),(28,5,3,1),(28,9,0,1),(29,1,5,1),(29,2,2,1),(29,3,0,1),(29,4,9,1),(29,5,5,1),(29,9,5,1),(30,1,5,1),(30,2,2,1),(30,3,4,1),(30,4,6,1),(30,5,0,1),(30,9,5,1),(31,1,3,1),(31,2,2,1),(31,3,0,1),(31,4,0,1),(31,5,5,0),(32,1,2,1),(32,2,2,1),(32,3,0,1),(32,4,0,1),(32,5,0,1),(32,9,5,1),(33,1,2,1),(33,2,2,1),(33,3,4,1),(33,4,6,1),(33,5,4,1),(33,9,5,0),(34,1,0,1),(34,2,3,1),(34,3,0,1),(34,4,0,1),(34,5,0,1),(34,9,5,0),(35,1,2,1),(35,2,2,1),(35,3,0,1),(35,4,0,1),(35,5,3,1),(35,9,5,0),(36,1,5,1),(36,2,3,1),(36,3,0,1),(36,4,0,1),(36,5,0,1),(36,9,0,1),(37,1,4,1),(37,2,2,1),(37,3,0,1),(37,4,0,1),(37,5,5,0),(38,1,5,1),(38,2,2,1),(38,3,0,1),(38,4,10,0),(39,1,0,1),(39,2,2,1),(39,3,5,1),(39,4,10,0),(40,1,5,1),(40,2,3,1),(40,3,1,1),(40,4,9,1),(40,5,3,1),(40,9,5,0),(41,1,3,1),(41,2,2,1),(41,3,0,1),(41,4,10,0),(42,1,5,1),(42,2,2,1),(42,3,3,1),(42,4,5,1),(42,5,4,1),(42,9,5,0),(43,1,5,1),(43,2,2,1),(43,3,2,1),(43,4,10,0),(44,1,3,1),(44,2,2,1),(44,3,5,0),(45,1,4,1),(45,2,2,1),(45,3,5,0),(46,1,5,1),(46,2,2,1),(46,3,5,0),(47,1,5,1),(47,2,2,1),(47,3,3,1),(47,4,10,1),(47,5,5,0),(48,1,5,1),(48,2,2,1),(48,3,2,1),(48,4,0,1),(48,5,0,1),(48,9,5,0),(49,1,4,1),(49,2,2,1),(49,3,5,1),(49,4,0,1),(49,5,0,1),(49,9,0,1),(50,1,5,1),(50,2,3,1),(50,3,5,1),(50,4,7,1),(50,5,0,1),(50,9,5,1),(51,1,5,1),(51,2,2,1),(51,3,0,1),(51,4,0,1),(51,5,0,1),(51,9,3,1),(52,1,2,1),(52,2,2,1),(52,3,0,1),(52,4,0,1),(52,5,0,1),(52,9,0,1),(53,1,5,1),(53,2,2,1),(53,3,0,1),(53,4,0,1),(53,5,3,1),(53,9,4,1),(54,1,4,1),(54,2,2,1),(54,3,0,1),(54,4,8,1),(54,5,5,1),(54,9,4,1),(55,1,5,1),(55,2,2,1),(55,3,0,1),(55,4,10,0),(56,1,5,1),(56,2,2,1),(56,3,0,1),(56,4,10,0),(57,1,5,1),(57,2,2,1),(57,3,0,1),(57,4,9,1),(57,5,5,0),(58,1,4,1),(58,2,2,1),(58,3,0,1),(58,4,10,0),(59,1,5,1),(59,2,2,1),(59,3,0,1),(59,4,8,1),(59,5,5,0),(60,1,5,1),(60,2,2,1),(60,3,0,1),(60,4,10,0),(61,1,3,1),(61,2,2,1),(61,3,0,1),(61,4,10,0),(62,1,5,1),(62,2,2,1),(62,3,0,1),(62,4,1,1),(62,5,0,1),(62,9,5,1),(63,1,5,1),(63,2,2,1),(63,3,0,1),(63,4,0,1),(63,5,2,1),(63,9,5,0),(64,1,5,1),(64,2,3,1),(64,3,2,1),(64,4,8,1),(64,5,2,1),(64,9,3,1),(65,1,5,1),(65,2,2,1),(65,3,0,1),(65,4,0,1),(65,5,5,0),(66,1,5,1),(66,2,2,1),(66,3,0,1),(66,4,0,1),(66,5,5,0),(67,1,4,1),(67,2,2,1),(67,3,4,1),(67,4,0,1),(67,5,5,0),(68,1,3,1),(68,2,2,1),(68,3,0,1),(68,4,0,1),(68,5,0,1),(68,9,5,0),(69,1,5,1),(69,2,2,1),(69,3,0,1),(69,4,0,1),(69,5,5,0),(70,1,5,1),(70,2,2,1),(70,3,5,0),(71,1,5,1),(71,2,2,1),(71,3,5,0),(72,1,4,1),(72,2,2,1),(72,3,0,1),(72,4,10,0),(73,1,5,1),(73,2,2,1),(73,3,3,1),(73,4,10,0),(74,1,4,1),(74,2,2,1),(74,3,5,0),(75,1,5,1),(75,2,3,1),(75,3,0,1),(75,4,7,1),(75,5,5,0),(76,1,4,1),(76,2,2,1),(76,3,0,1),(76,4,10,0),(77,1,4,1),(77,2,2,1),(77,3,0,1),(77,4,10,0),(78,2,2,1),(78,3,0,1),(78,4,10,0),(79,1,5,1),(79,2,2,1),(79,3,0,1),(79,4,10,0),(80,1,4,1),(80,2,3,1),(80,3,0,1),(80,4,0,1),(80,5,5,0),(81,1,4,1),(81,2,3,1),(81,3,0,1),(81,4,10,0),(82,1,4,1),(82,2,2,1),(82,3,0,1),(82,4,8,1),(82,5,3,1),(82,9,5,0),(83,1,4,1),(83,2,2,1),(83,3,0,1),(83,4,0,1),(83,5,0,1),(83,9,5,0),(84,1,5,1),(84,2,3,1),(84,3,0,1),(84,4,0,1),(84,5,5,1),(84,9,5,0),(85,1,3,1),(85,2,2,1),(85,3,3,1),(85,4,10,0),(86,1,4,1),(86,2,2,1),(86,3,0,1),(86,4,0,1),(86,5,5,0),(87,1,2,1),(87,2,2,1),(87,3,0,1),(87,4,10,0),(88,1,2,1),(88,2,1,1),(88,3,0,1),(88,4,0,1),(88,5,0,1),(88,9,5,0),(89,1,0,1),(89,2,0,1),(89,3,0,1),(89,4,3,1),(89,5,3,1),(89,9,5,0),(90,1,4,1),(90,2,1,1),(90,3,0,1),(90,4,0,1),(90,5,0,1),(90,9,0,1),(91,1,3,1),(91,2,1,1),(91,3,5,0),(91,4,0,1),(91,5,5,0),(92,1,4,1),(92,2,1,1),(92,3,0,1),(92,4,10,0),(93,1,3,1),(93,2,1,1),(93,3,0,1),(93,4,10,0),(94,1,4,1),(94,2,1,1),(94,3,0,1),(94,4,10,0),(95,1,4,1),(95,2,1,1),(95,3,0,1),(95,4,0,1),(95,5,0,1),(95,9,5,0),(96,1,4,1),(96,2,1,1),(96,3,0,1),(96,4,7,1),(96,5,0,1),(96,9,5,0),(97,1,5,0),(98,1,4,1),(98,2,1,1),(98,3,3,1),(98,4,0,1),(98,5,0,1),(98,9,5,0),(99,1,5,1),(99,2,0,1),(99,3,0,1),(99,4,5,1),(99,5,5,1),(99,9,0,1),(100,1,5,1),(100,2,1,1),(100,3,4,1),(100,4,8,1),(100,5,4,1),(100,6,-1,1),(100,7,2,1),(100,8,5,1),(100,9,5,1),(101,1,5,1),(101,2,1,1),(101,3,0,1),(101,4,0,1),(101,5,0,1),(101,9,3,1),(102,1,5,1),(102,2,1,1),(102,3,0,1),(102,4,10,0),(103,1,5,1),(103,2,5,0),(104,1,4,1),(104,2,1,1),(104,3,3,1),(104,4,0,1),(104,5,0,1),(104,9,0,1),(105,1,4,1),(105,2,1,1),(105,3,5,0),(106,1,4,1),(106,2,1,1),(106,3,2,1),(106,4,10,0),(107,1,5,1),(107,2,3,1),(107,3,2,1),(107,4,10,1),(107,5,0,1),(107,9,5,0),(108,1,5,1),(108,2,1,1),(108,3,5,1),(108,4,0,1),(108,5,0,1),(108,9,5,0),(109,1,5,1),(109,2,1,1),(109,3,5,1),(109,4,7,1),(109,5,0,1),(109,9,5,0),(110,1,5,1),(110,2,3,1),(110,3,5,1),(110,4,0,1),(110,5,0,1),(110,9,5,0),(111,1,5,1),(111,2,1,1),(111,3,1,1),(111,4,0,1),(111,5,4,1),(111,9,4,1),(112,1,4,1),(112,2,3,1),(112,3,4,1),(112,4,0,1),(112,5,4,1),(112,9,4,1),(113,1,5,1),(113,2,1,1),(113,3,0,1),(113,4,0,1),(113,5,0,1),(113,9,4,1),(114,1,3,1),(114,2,1,1),(114,3,0,1),(114,4,10,0),(115,1,2,1),(115,2,1,1),(115,3,1,1),(115,4,10,0),(116,1,5,1),(116,2,1,1),(116,3,0,1),(116,4,0,1),(116,5,0,1),(116,9,0,1),(117,1,5,1),(117,2,1,1),(117,3,4,1),(117,4,4,1),(117,5,4,1),(117,9,5,1),(118,1,3,1),(118,2,1,1),(118,3,5,0),(119,1,5,1),(119,2,1,1),(119,3,0,1),(119,4,0,1),(119,5,0,1),(119,9,5,0),(120,1,5,1),(120,2,1,1),(120,3,0,1),(120,4,0,1),(120,5,0,1),(120,9,0,1),(121,1,5,1),(121,2,1,1),(121,3,2,1),(121,4,7,1),(121,5,5,1),(121,9,5,0),(122,1,4,1),(122,2,1,1),(122,3,0,1),(122,4,10,0),(123,1,1,1),(123,2,1,1),(123,3,0,1),(123,4,10,0),(124,1,5,1),(124,2,1,1),(124,3,0,1),(124,4,10,0),(125,1,5,1),(125,2,1,1),(125,3,0,1),(125,4,0,1),(125,5,2,1),(125,9,4,1),(126,1,4,1),(126,2,1,1),(126,3,0,1),(126,4,0,1),(126,5,5,1),(126,9,0,1),(127,1,3,1),(127,2,1,1),(127,3,0,1),(127,4,10,0),(129,1,5,1),(129,2,5,1),(129,3,5,1),(129,4,8,1),(129,5,4,1),(129,9,4,1),(130,1,5,1),(130,2,1,1),(130,3,0,1),(130,4,8,1),(130,5,4,1),(130,9,5,0),(131,1,3,1),(131,2,3,1),(131,3,0,1),(131,4,10,1),(131,5,0,1),(131,9,5,1),(132,1,5,1),(132,2,1,1),(132,3,0,1),(132,4,0,1),(132,5,4,1),(132,9,0,1),(133,1,5,1),(133,2,0,1),(133,3,3,1),(133,4,8,1),(133,5,3,1),(133,9,0,1),(134,1,0,1),(134,2,1,1),(134,3,0,1),(134,4,0,1),(134,5,4,1),(134,9,5,0),(135,1,5,1),(135,2,1,1),(135,3,4,1),(135,4,0,1),(135,5,0,1),(135,9,5,0),(136,1,4,1),(136,2,0,1),(136,3,4,1),(136,4,10,0),(136,5,0,1),(136,9,4,1),(137,1,4,1),(137,2,1,1),(137,3,1,1),(137,4,0,1),(137,5,5,1),(137,9,4,1),(138,1,5,1),(138,2,1,1),(138,3,0,1),(138,4,10,0),(139,1,5,1),(139,2,3,1),(139,3,0,1),(139,4,10,0),(140,1,5,1),(140,2,2,1),(140,3,4,1),(140,4,7,1),(140,5,0,1),(140,9,3,1),(141,1,4,1),(141,2,3,1),(141,3,4,1),(141,4,0,1),(141,5,5,1),(141,9,5,0),(142,1,4,1),(142,2,1,1),(142,3,4,1),(142,4,10,1),(142,5,5,1),(142,9,2,1),(143,1,4,1),(143,2,1,1),(143,3,0,1),(143,4,0,1),(143,5,0,1),(143,9,0,1),(144,1,5,1),(144,2,1,1),(144,3,4,1),(144,4,10,1),(144,5,5,1),(144,9,5,0),(145,1,5,1),(145,2,1,1),(145,3,0,1),(145,4,10,0),(146,1,3,1),(146,2,1,1),(146,3,0,1),(146,4,0,1),(146,5,1,1),(146,9,5,1),(147,1,2,1),(147,2,0,1),(147,3,5,0),(148,1,5,1),(148,2,0,1),(148,3,5,1),(148,4,9,1),(148,5,0,1),(148,9,5,0),(149,1,5,1),(149,2,1,1),(149,3,4,1),(149,4,0,1),(149,5,0,1),(149,9,5,0),(150,1,5,1),(150,2,1,1),(150,3,2,1),(150,4,0,1),(150,5,0,1),(150,9,5,1),(151,1,4,1),(151,2,1,1),(151,3,0,1),(151,4,0,1),(151,5,3,1),(151,9,5,0),(152,1,5,1),(152,2,1,1),(152,3,5,1),(152,4,8,1),(152,5,5,1),(152,9,3,1),(153,1,5,1),(153,2,1,1),(153,3,5,1),(153,4,9,1),(153,5,5,1),(153,9,5,0),(154,1,4,1),(154,2,1,1),(154,3,0,1),(154,4,10,0),(155,1,5,1),(155,2,1,1),(155,3,0,1),(155,4,10,1),(155,5,5,1),(155,9,5,0),(156,1,4,1),(156,2,0,1),(156,3,0,1),(156,4,8,1),(156,5,5,1),(156,9,5,0);
/*!40000 ALTER TABLE `leerling_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `bestandsnaam` varchar(50) NOT NULL,
  `aantalSterren` int(11) NOT NULL,
  `cijfercode` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level`
--

LOCK TABLES `level` WRITE;
/*!40000 ALTER TABLE `level` DISABLE KEYS */;
INSERT INTO `level` VALUES (1,'Hardware of Software','linksRechts',5,2),(2,'Schuifpuzzel','schuifpuzzelA',5,6),(3,'Rekenen','rekenen',5,5),(4,'Stoplicht','stoplicht',10,4),(5,'Doolhof','doolhof',5,8),(6,'Nederlands','nederlands',5,3),(7,'sorteren','sorteren',5,1),(8,'Geheimcode','geheimecode',5,9),(9,'GPS locatie','vindUSB',5,0);
/*!40000 ALTER TABLE `level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level_competentie`
--

DROP TABLE IF EXISTS `level_competentie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level_competentie` (
  `levelId` int(11) NOT NULL,
  `competentieId` int(11) NOT NULL,
  PRIMARY KEY (`levelId`,`competentieId`),
  KEY `competentieId` (`competentieId`),
  CONSTRAINT `level_competentie_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`),
  CONSTRAINT `level_competentie_ibfk_2` FOREIGN KEY (`competentieId`) REFERENCES `competentie` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level_competentie`
--

LOCK TABLES `level_competentie` WRITE;
/*!40000 ALTER TABLE `level_competentie` DISABLE KEYS */;
INSERT INTO `level_competentie` VALUES (4,1),(6,1),(9,1),(2,2),(2,3),(3,3),(4,3),(5,3),(9,3),(1,4),(2,4),(3,4),(5,4),(7,4),(3,5),(4,5),(7,5),(9,5),(1,6),(8,6),(9,6),(4,7),(6,7),(7,7),(8,7),(1,8),(4,8);
/*!40000 ALTER TABLE `level_competentie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `level_type`
--

DROP TABLE IF EXISTS `level_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `level_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `levelId` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `levelId` (`levelId`),
  KEY `dagcodeId` (`type`),
  KEY `dagcodeId_2` (`type`),
  CONSTRAINT `level_type_ibfk_1` FOREIGN KEY (`levelId`) REFERENCES `level` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `level_type`
--

LOCK TABLES `level_type` WRITE;
/*!40000 ALTER TABLE `level_type` DISABLE KEYS */;
INSERT INTO `level_type` VALUES (1,1,0),(2,2,0),(3,3,0),(4,4,0),(5,5,0),(6,9,0),(8,4,1),(9,5,1),(10,6,1),(11,7,1),(12,8,1),(13,9,1),(14,1,1),(15,2,1),(20,3,1);
/*!40000 ALTER TABLE `level_type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-26 11:54:07
