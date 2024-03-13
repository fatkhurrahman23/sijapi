-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: penjadwalan_genetik_web
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

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
-- Table structure for table `data_mhs`
--

DROP TABLE IF EXISTS `data_mhs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_mhs` (
  `index` bigint(20) DEFAULT NULL,
  `no` varchar(4) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(12) NOT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `kelas` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `ix_data_mhs_index` (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_mhs`
--

/*!40000 ALTER TABLE `data_mhs` DISABLE KEYS */;
INSERT INTO `data_mhs` VALUES (0,'1','AKASHA BIN ALI','4.33.22.0.01','L','TI-2A'),(1,'2','ARYA DAMAR SINDHARU','4.33.22.0.02','L','TI-2A'),(2,'3','AUFA BIMA NGAHADA','4.33.22.0.03','L','TI-2A'),(3,'4','BAYU TRI PRAYITNO','4.33.22.0.04','L','TI-2A'),(4,'5','DAVIN FAUSTA SUPRIYADI','4.33.22.0.05','L','TI-2A'),(5,'6','DIMAS IRSYAD MAULANA','4.33.22.0.06','L','TI-2A'),(6,'7','FARHAN RAHMAN PERMANA','4.33.22.0.07','L','TI-2A'),(7,'8','GAVRILA NAUFAL ARSANDY','4.33.22.0.08','L','TI-2A'),(8,'9','HUSSAIN TAMAM GUCCI AL FAUZAN','4.33.22.0.09','L','TI-2A'),(9,'10','ILHAM MUHAMMAD ARIF','4.33.22.0.10','L','TI-2A'),(10,'11','KARINA WIMALA KINANTI','4.33.22.0.11','P','TI-2A'),(11,'12','LAKSAMANA DZIKRI AL JAUZI','4.33.22.0.12','L','TI-2A'),(12,'13','M.ZAKKY IHSAN UDIN','4.33.22.0.13','L','TI-2A'),(13,'14','MAULANA ALBAIHAQI ARTANTO','4.33.22.0.14','L','TI-2A'),(14,'15','MAULANA BINTANG CAHYA MUKTI','4.33.22.0.15','L','TI-2A'),(15,'16','MOH IQBAL BAGUS PRASETYO HUTOMO','4.33.22.0.16','L','TI-2A'),(16,'17','MUHAMMAD FAUZI ANANTA','4.33.22.0.17','L','TI-2A'),(17,'18','MUHAMMAD ILMAN SALAMUN','4.33.22.0.18','L','TI-2A'),(18,'19','MUHAMMAD YASIR AL GHIFFARI','4.33.22.0.19','L','TI-2A'),(19,'20','NAFIIS ABYAN ILYASA','4.33.22.0.20','L','TI-2A'),(20,'21','NAUFAL REKY ARDHANA','4.33.22.0.21','L','TI-2A'),(21,'22','RACHMADANDY MAHENDRA SHAKTI','4.33.22.0.22','L','TI-2A'),(22,'23','RIFQI HAEZUL MAALI','4.33.22.0.23','L','TI-2A'),(23,'24','RUCIRASATTI NARISWANA','4.33.22.0.24','P','TI-2A'),(24,'25','RYVANNIO SATRIA NUGROHO','4.33.22.0.25','L','TI-2A'),(25,'26','SELVI AL-MAKAARI SAFITRI','4.33.22.0.26','P','TI-2A'),(26,'27','ALDINO SATRIA WIBOWO','4.33.22.1.01','L','TI-2B'),(27,'28','ARIA VEDA SATWIKA','4.33.22.1.02','L','TI-2B'),(28,'29','AULIA FATIKA RAHMADANI','4.33.22.1.03','P','TI-2B'),(29,'30','AZHARA LENTIA PRADISTI','4.33.22.1.04','P','TI-2B'),(30,'31','BILQIS SHALLY NADHIFA','4.33.22.1.05','P','TI-2B'),(31,'32','DENY RIANTO','4.33.22.1.06','L','TI-2B'),(32,'33','DINDA MUTIARA SUKMANINGRUM','4.33.22.1.07','P','TI-2B'),(33,'34','FEZA RIZKY PUTRA PRATAMA','4.33.22.1.08','L','TI-2B'),(34,'35','HENI APRIYANI','4.33.22.1.09','P','TI-2B'),(35,'36','IKBAL MUHAMAD TELAND','4.33.22.1.10','L','TI-2B'),(36,'37','ISTIQOMAH ZULFA NURAINI','4.33.22.1.11','P','TI-2B'),(37,'38','JOHANNES DE BRITTO ANUGRAH BRIAN PUTRA SETYA IRAWAN','4.33.22.1.12','L','TI-2B'),(38,'39','M. MUCHLAS HUDAWAN','4.33.22.1.13','L','TI-2B'),(39,'40','MOCHAMAD ABDIEL RAYHANJAYA','4.33.22.1.14','L','TI-2B'),(40,'41','MOH FATKHUR RAHMAN','4.33.22.1.15','L','TI-2B'),(41,'42','MUHAMMAD ABDUL WAHAB','4.33.22.1.16','L','TI-2B'),(42,'43','MUHAMMAD FARKHAN TSAQIF SEPTIANTO','4.33.22.1.17','L','TI-2B'),(43,'44','MUHAMMAD RAYHAN MAULANA ANAS','4.33.22.1.18','L','TI-2B'),(44,'45','MUHAMMAD RENDIANSYAH NOVALENTINO RAMADHANI','4.33.22.1.19','L','TI-2B'),(45,'46','NAILA KAROMATUL ULYA','4.33.22.1.20','P','TI-2B'),(46,'47','RAIS HANNAN RIZANTO','4.33.22.1.21','L','TI-2B'),(47,'48','RAKHA YUDA WICAKSONO','4.33.22.1.23','L','TI-2B'),(48,'49','RESMA YUNITA','4.33.22.1.24','P','TI-2B'),(49,'50','SALWA FITRIYATUNNISA','4.33.22.1.25','P','TI-2B'),(50,'51','TITO WAHYU PRATAMA','4.33.22.1.26','L','TI-2B'),(51,'52','Y.DIMAS AGUNG NUGROHO','4.33.22.1.27','L','TI-2B'),(52,'53','AHMAD RIDHANI','4.33.22.1.28','L','TI-2B'),(53,'54','AULIA AZIZAH','4.33.22.1.29','P','TI-2B');
/*!40000 ALTER TABLE `data_mhs` ENABLE KEYS */;

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosen` (
  `kode` int(2) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosen`
--

/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` VALUES (1,'','Erlin, Dr. M.Kom ','',''),(2,'','Triyani Arita Fitri, M.Kom \r\n','',''),(3,'','Karpen, M.Kom ','',''),(4,'','Helda Yenni, M.Kom ','',''),(37,NULL,'Rini Yanti, S.Si',NULL,NULL),(38,NULL,'Tat Marlina, MH',NULL,NULL),(39,NULL,'Susi Erlinda, M.Kom ',NULL,NULL),(40,NULL,'Yoso frenaguna, S.Kom ',NULL,NULL),(41,NULL,'Elgamar, S.Kom ',NULL,NULL),(42,NULL,'Fransiskus Z, S.Kom ',NULL,NULL),(43,NULL,'Hamdani, M.Kom ',NULL,NULL),(44,NULL,'Herwin, M.Kom ',NULL,NULL),(45,NULL,'Irawati Sastra, S.Kom ',NULL,NULL),(46,NULL,'Tashid, M.Kom ',NULL,NULL),(47,'12345','Agung Setiawan, S.Kom, MM','',''),(48,NULL,'Suprasman,Drs. MM',NULL,NULL),(49,NULL,'Dewi Sari Wahyuni, M.Pd',NULL,NULL),(50,NULL,'Jusniwati, S.Pd',NULL,NULL),(51,NULL,'Masduki, S.Pd',NULL,NULL),(52,NULL,'Hidayati Azizah, S.Si',NULL,NULL),(53,NULL,'Firman Edigan, M.Pd ',NULL,NULL),(54,NULL,'Rahmiati, M.Kom ',NULL,NULL),(55,NULL,'Dwi Haryono, M.Kom ',NULL,NULL),(56,NULL,'Riati, M.Si',NULL,NULL),(57,NULL,'Rahmaddeni, S.Kom ',NULL,NULL),(58,NULL,'Robinson, M.Sc',NULL,NULL),(59,NULL,'Sabam Parjuangan, M.Kom ',NULL,NULL),(60,NULL,'Corina Tri Handayani, MM',NULL,NULL),(61,NULL,'Herispon, M.Si ',NULL,NULL),(62,NULL,'Kastanti, SE ',NULL,NULL),(63,NULL,'Torkis Nasution, M.Kom ',NULL,NULL),(64,NULL,'T. Sy. Eiva Fatdha, M.Kom ',NULL,NULL),(65,NULL,'Syahrul Imardi, M.T',NULL,NULL),(66,NULL,'Nova Rahmi, S.Kom ',NULL,NULL),(67,NULL,'Iwan Iskandar, MT',NULL,NULL),(68,NULL,'Nurjayadi, S.Kom ',NULL,NULL),(69,NULL,'Maraini, MM',NULL,NULL),(70,NULL,'Lusiana, M.Kom ',NULL,NULL),(71,NULL,'Surya Syahrani, S.Kom ',NULL,NULL),(72,NULL,'Misbah Hayati, S.Pd',NULL,NULL),(73,NULL,'Koko Harianto, S.Kom ',NULL,NULL),(74,NULL,'Khusaeri Andesa, S.Kom ',NULL,NULL),(75,NULL,'Susanti, M.IT',NULL,NULL),(76,NULL,'Sujiwo, S.Kom ',NULL,NULL),(77,NULL,'Imelda Yance, M.Pd',NULL,NULL),(78,NULL,'Wirta Agustin, S.Kom ',NULL,NULL),(79,NULL,'Unang Rio, M.Kom ',NULL,NULL),(80,NULL,'Susandri, M.Kom ',NULL,NULL),(81,NULL,'Edwar Ali, M.Kom ',NULL,NULL),(82,NULL,'Dadang Iskandar,Prof. M.Sc',NULL,NULL),(83,NULL,'Alber, M.Pd',NULL,NULL),(84,NULL,'Selamet Wahyudi,Dr',NULL,NULL);
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;

--
-- Table structure for table `hari`
--

DROP TABLE IF EXISTS `hari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hari` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hari`
--

/*!40000 ALTER TABLE `hari` DISABLE KEYS */;
INSERT INTO `hari` VALUES (1,'Senin'),(2,'Selasa'),(3,'Rabu'),(4,'Kamis'),(5,'Jumat'),(6,'Sabtu');
/*!40000 ALTER TABLE `hari` ENABLE KEYS */;

--
-- Table structure for table `jadwalkuliah`
--

DROP TABLE IF EXISTS `jadwalkuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwalkuliah` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `kode_pengampu` int(10) DEFAULT NULL,
  `kode_jam` int(10) DEFAULT NULL,
  `kode_hari` int(10) DEFAULT NULL,
  `kode_ruang` int(10) DEFAULT NULL,
  PRIMARY KEY (`kode`),
  KEY `kode_pengampu` (`kode_pengampu`),
  CONSTRAINT `jadwalkuliah_ibfk_1` FOREIGN KEY (`kode_pengampu`) REFERENCES `pengampu` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='hasil proses';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwalkuliah`
--

/*!40000 ALTER TABLE `jadwalkuliah` DISABLE KEYS */;
INSERT INTO `jadwalkuliah` VALUES (1,1,2,6,8),(2,2,9,6,11),(3,3,9,2,9),(4,4,1,5,6),(5,5,7,3,1),(6,6,2,5,5),(7,7,3,6,1),(8,8,3,2,6),(9,9,7,6,11),(10,10,8,1,16),(11,11,4,4,8),(12,12,7,2,9),(13,13,2,4,15),(14,14,9,6,8),(15,15,10,2,3),(16,16,2,5,4),(17,17,9,4,12),(18,18,1,1,16),(19,19,10,3,12),(20,20,3,1,4),(21,21,8,4,11),(22,22,4,3,5),(23,23,3,1,1),(24,24,9,1,3),(25,25,10,2,7),(26,26,2,3,13),(27,27,8,2,6),(28,32,5,2,5),(29,33,5,4,7),(30,34,8,1,12),(31,36,8,6,21),(32,37,7,5,22),(33,38,4,4,15),(34,39,5,3,15),(35,40,1,1,7),(36,41,7,4,5),(37,42,4,6,14),(38,43,8,1,9),(39,44,1,6,3),(40,45,8,4,10),(41,47,2,1,14),(42,48,7,6,14),(43,49,10,3,16),(44,50,1,6,16),(45,51,8,5,9),(46,52,6,2,14),(47,53,5,6,10),(48,54,6,3,6),(49,55,1,1,8),(50,56,1,2,12),(51,57,3,6,12),(52,58,7,2,8),(53,59,7,5,12),(54,60,6,1,9),(55,61,1,1,3),(56,62,2,3,1),(57,63,9,5,6),(58,64,4,4,11),(59,65,4,6,3),(60,66,1,1,5),(61,67,6,2,6),(62,68,1,5,9),(63,69,5,4,6),(64,70,4,2,9),(65,71,9,1,8),(66,72,2,1,15),(67,73,8,4,13),(68,74,10,2,5),(69,75,4,4,10),(70,76,8,2,3),(71,77,5,4,4),(72,78,4,2,14),(73,79,10,1,16),(74,80,7,5,15),(75,82,3,3,6),(76,83,7,6,13),(77,84,8,3,13),(78,85,3,3,2),(79,86,7,4,21),(80,87,3,6,19),(81,88,6,2,16),(82,89,4,6,4),(83,92,1,4,14),(84,93,7,5,7),(85,94,1,2,9),(86,95,1,6,10),(87,96,5,6,1),(88,97,7,4,8),(89,98,3,6,15),(90,99,7,1,15),(91,100,4,2,2),(92,101,10,2,2),(93,102,6,3,4),(94,103,1,1,10),(95,104,8,4,16),(96,105,3,4,1),(97,106,4,1,2),(98,107,1,2,3),(99,108,8,2,13),(100,109,1,3,3),(101,110,2,2,15),(102,111,5,2,12),(103,112,9,6,7),(104,113,4,3,7),(105,114,3,4,14),(106,115,6,4,1),(107,116,9,4,4),(108,117,2,6,13),(109,118,8,3,14),(110,119,4,1,12),(111,120,7,6,9),(112,121,4,3,11),(113,122,1,5,7),(114,123,1,6,11),(115,124,6,6,3),(116,125,2,3,14),(117,126,3,2,4),(118,127,3,2,13),(119,128,10,4,8),(120,129,9,2,12),(121,130,9,5,8),(122,131,5,1,14),(123,132,1,5,1),(124,133,8,2,7),(125,134,3,4,16),(126,144,6,1,7),(127,145,4,4,13),(128,146,5,2,7),(129,147,10,5,1),(130,148,4,1,5),(131,149,10,5,10),(132,150,6,2,4),(133,151,7,4,14),(134,152,3,6,5),(135,153,3,2,16),(136,154,7,3,2),(137,155,5,6,13),(138,156,8,3,3),(139,157,2,4,7),(140,158,4,2,1),(141,159,9,1,2),(142,160,6,3,10),(143,161,5,1,10),(144,162,1,4,5),(145,163,8,1,6),(146,164,1,1,11),(147,165,2,2,7),(148,166,5,1,16),(149,167,8,5,13);
/*!40000 ALTER TABLE `jadwalkuliah` ENABLE KEYS */;

--
-- Table structure for table `jam`
--

DROP TABLE IF EXISTS `jam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jam` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `range_jam` varchar(50) DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam`
--

/*!40000 ALTER TABLE `jam` DISABLE KEYS */;
INSERT INTO `jam` VALUES (1,'08.00-08.50',NULL),(2,'08.50-09.30',NULL),(3,'09.40-10.30',NULL),(4,'10.30-11.20',NULL),(5,'11.20-12.10',NULL),(6,'12.10-13.00',NULL),(7,'13.00-13.50',NULL),(8,'13.50-14.40',NULL),(9,'14.40-15.30',NULL),(10,'15.30-16.20',NULL),(11,'16.20-17.10',NULL);
/*!40000 ALTER TABLE `jam` ENABLE KEYS */;

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matakuliah` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `kode_mk` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `sks` int(6) DEFAULT NULL,
  `semester` int(6) DEFAULT NULL,
  `aktif` enum('True','False') DEFAULT 'True',
  `jenis` enum('TEORI','PRAKTIKUM') DEFAULT 'TEORI',
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='example kode_mk = 0765109 ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matakuliah`
--

/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` VALUES (1,NULL,'Basis Data I ',3,2,'True','TEORI'),(2,NULL,'Sistem Operasi ',2,2,'True','TEORI'),(3,NULL,'Kalkulus  II',2,2,'True','TEORI'),(4,NULL,'Pemrograman Desktop I (VB) (T)',2,2,'True','TEORI'),(5,NULL,'Pemrograman Desktop I (VB) (P)',2,2,'True','PRAKTIKUM'),(6,NULL,'Kewarganegaraan ',2,2,'True','TEORI'),(7,NULL,'Bahasa Inggris II',2,2,'True','TEORI'),(8,NULL,'Analisa & Perancangan SI',3,4,'True','TEORI'),(9,NULL,'Statistik Probabilitas',2,4,'True','TEORI'),(10,NULL,'Teknik Digital ',3,4,'True','TEORI'),(11,NULL,'Bahasa Indonesia ',2,4,'True','TEORI'),(12,NULL,'Troubleshooting',2,8,'True','TEORI'),(13,NULL,'Kewirausahaan',2,8,'True','TEORI'),(14,NULL,'Perbankan & Lembaga Keuangan',2,8,'True','TEORI'),(15,NULL,'Microprocessor',3,6,'True','TEORI'),(16,NULL,'Manajemen Proyek TI',3,6,'True','TEORI'),(17,NULL,'Teknik Simulasi ',3,6,'True','TEORI'),(18,NULL,'Struktur Data  (C++/Java)  (T)',3,2,'True','TEORI'),(19,NULL,'Struktur Data  (C++/Java)  (P)',3,2,'True','PRAKTIKUM'),(20,NULL,'Teknologi Komputer Utilitas (T) ',2,2,'True','TEORI'),(21,NULL,'Teknologi Komputer Utilitas (P) ',2,2,'True','PRAKTIKUM'),(22,NULL,'Lingkungan Kerja Jaringan (T) ',3,4,'True','TEORI'),(23,NULL,'Lingkungan Kerja Jaringan (P) ',3,4,'True','PRAKTIKUM'),(24,NULL,'Matematika Diskrit (T) ',2,4,'True','TEORI'),(25,NULL,'Matematika Diskrit (P) ',2,4,'True','PRAKTIKUM'),(26,NULL,'Pemrograman Science II (T)',3,4,'True','TEORI'),(27,NULL,'Pemrograman Science II (P)',3,4,'True','PRAKTIKUM'),(28,NULL,'Pemrograman Desktop II (VB) (T) ',3,4,'True','TEORI'),(29,NULL,'Pemrograman Desktop II (VB) (P) ',3,4,'True','PRAKTIKUM'),(30,NULL,'Teknologi Open Source II  (T)',3,6,'True','TEORI'),(31,NULL,'Teknologi Open Source II  (P)',3,6,'True','PRAKTIKUM'),(32,NULL,'Pemrograman Mobile II (T)',3,6,'True','TEORI'),(33,NULL,'Pemrograman Mobile II (P)',3,6,'True','PRAKTIKUM'),(34,NULL,'Web Desain (T)',2,6,'True','TEORI'),(35,NULL,'Web Desain (P)',2,6,'True','PRAKTIKUM'),(36,NULL,'Project I  (T)',2,6,'True','TEORI'),(37,NULL,'Project I  (P)',2,6,'True','PRAKTIKUM');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;

--
-- Table structure for table `pengampu`
--

DROP TABLE IF EXISTS `pengampu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengampu` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `kode_mk` int(10) DEFAULT NULL,
  `kode_dosen` int(10) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `tahun_akademik` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengampu`
--

/*!40000 ALTER TABLE `pengampu` DISABLE KEYS */;
INSERT INTO `pengampu` VALUES (1,1,1,'F','2011-2012'),(2,1,1,'G','2011-2012'),(3,1,1,'H','2011-2012'),(4,1,2,'A','2011-2012'),(5,1,2,'D','2011-2012'),(6,2,3,'A','2011-2012'),(7,2,3,'C','2011-2012'),(8,2,3,'D','2011-2012'),(9,2,3,'B','2011-2012'),(10,2,4,'E','2011-2012'),(11,2,4,'G','2011-2012'),(12,2,4,'H','2011-2012'),(13,2,4,'F','2011-2012'),(14,4,43,'C','2011-2012'),(15,4,43,'A','2011-2012'),(16,4,43,'B','2011-2012'),(17,4,43,'D','2011-2012'),(18,3,37,'A','2011-2012'),(19,3,37,'B','2011-2012'),(20,24,37,'G','2011-2012'),(21,24,37,'E','2011-2012'),(22,24,37,'F','2011-2012'),(23,6,38,'F','2011-2012'),(24,6,38,'C','2011-2012'),(25,6,38,'G','2011-2012'),(26,6,38,'H','2011-2012'),(27,18,39,'D','2011-2012'),(32,18,39,'B','2011-2012'),(33,18,39,'C','2011-2012'),(34,18,39,'A','2011-2012'),(36,19,40,'G','2011-2012'),(37,19,40,'H','2011-2012'),(38,20,41,'E','2011-2012'),(39,20,41,'C','2011-2012'),(40,20,41,'D','2011-2012'),(41,20,41,'F','2011-2012'),(42,12,41,'A','2011-2012'),(43,12,41,'B','2011-2012'),(44,18,42,'H','2011-2012'),(45,18,42,'G','2011-2012'),(47,34,42,'D','2011-2012'),(48,7,49,'F','2011-2012'),(49,7,49,'D','2011-2012'),(50,7,49,'C','2011-2012'),(51,7,50,'A','2011-2012'),(52,7,50,'B','2011-2012'),(53,22,55,'B','2011-2012'),(54,22,55,'A','2011-2012'),(55,22,55,'C','2011-2012'),(56,22,55,'D','2011-2012'),(57,9,56,'F','2011-2012'),(58,9,56,'E','2011-2012'),(59,9,56,'G','2011-2012'),(60,20,44,'B','2011-2012'),(61,22,44,'G','2011-2012'),(62,22,44,'E','2011-2012'),(63,22,44,'F','2011-2012'),(64,20,45,'A','2011-2012'),(65,20,45,'G','2011-2012'),(66,20,45,'H','2011-2012'),(67,12,45,'C','2011-2012'),(68,4,46,'E','2011-2012'),(69,4,46,'F','2011-2012'),(70,28,46,'D','2011-2012'),(71,28,46,'E','2011-2012'),(72,18,47,'F','2011-2012'),(73,18,47,'E','2011-2012'),(74,6,48,'A','2011-2012'),(75,6,48,'E','2011-2012'),(76,6,48,'D','2011-2012'),(77,11,77,'E','2011-2012'),(78,11,77,'D','2011-2012'),(79,11,77,'F','2011-2012'),(80,8,70,'A','2011-2012'),(82,8,70,'C','2011-2012'),(83,8,70,'B','2011-2012'),(84,17,64,'C','2011-2012'),(85,17,64,'D','2011-2012'),(86,31,66,'D','2011-2012'),(87,31,66,'C','2011-2012'),(88,30,67,'B','2011-2012'),(89,30,67,'A','2011-2012'),(92,9,84,'A','2011-2012'),(93,9,84,'B','2011-2012'),(94,9,84,'C','2011-2012'),(95,9,84,'D','2011-2012'),(96,24,82,'B','2011-2012'),(97,24,82,'C','2011-2012'),(98,24,82,'D','2011-2012'),(99,24,82,'A','2011-2012'),(100,11,83,'B','2011-2012'),(101,11,83,'A','2011-2012'),(102,11,83,'C','2011-2012'),(103,10,57,'C','2011-2012'),(104,10,57,'E','2011-2012'),(105,10,57,'F','2011-2012'),(106,10,57,'D','2011-2012'),(107,10,75,'B','2011-2012'),(108,10,75,'A','2011-2012'),(109,36,63,'C','2011-2012'),(110,36,63,'D','2011-2012'),(111,36,63,'A','2011-2012'),(112,8,81,'D','2011-2012'),(113,8,81,'F','2011-2012'),(114,8,81,'E','2011-2012'),(115,26,79,'B','2011-2012'),(116,26,79,'A','2011-2012'),(117,26,79,'C','2011-2012'),(118,28,80,'C','2011-2012'),(119,28,80,'A','2011-2012'),(120,28,80,'B','2011-2012'),(121,26,76,'D','2011-2012'),(122,26,76,'E','2011-2012'),(123,26,76,'F','2011-2012'),(124,3,52,'C','2011-2012'),(125,3,52,'E','2011-2012'),(126,3,52,'D','2011-2012'),(127,3,53,'H','2011-2012'),(128,3,53,'G','2011-2012'),(129,3,53,'F','2011-2012'),(130,17,75,'A','2011-2012'),(131,17,75,'B','2011-2012'),(132,7,51,'H','2011-2012'),(133,7,51,'E','2011-2012'),(134,7,51,'G','2011-2012'),(144,15,65,'B','2011-2012'),(145,15,65,'A','2011-2012'),(146,10,71,'G','2011-2012'),(147,11,72,'G','2011-2012'),(148,32,63,'B','2011-2012'),(149,13,60,'A','2011-2012'),(150,13,60,'B','2011-2012'),(151,13,69,'C','2011-2012'),(152,8,54,'C','2011-2012'),(153,8,54,'B','2011-2012'),(154,36,54,'A','2011-2012'),(155,36,81,'B','2011-2012'),(156,8,78,'G','2011-2012'),(157,28,74,'F','2011-2012'),(158,28,74,'G','2011-2012'),(159,26,73,'G','2011-2012'),(160,34,68,'A','2011-2012'),(161,34,68,'B','2011-2012'),(162,32,58,'C','2011-2012'),(163,32,58,'D','2011-2012'),(164,15,59,'C','2011-2012'),(165,14,61,'A','2011-2012'),(166,14,61,'B','2011-2012'),(167,14,62,'C','2011-2012');
/*!40000 ALTER TABLE `pengampu` ENABLE KEYS */;

--
-- Table structure for table `ruang`
--

DROP TABLE IF EXISTS `ruang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruang` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kapasitas` int(10) DEFAULT NULL,
  `jenis` enum('TEORI','LABORATORIUM') DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruang`
--

/*!40000 ALTER TABLE `ruang` DISABLE KEYS */;
INSERT INTO `ruang` VALUES (1,'Ruang 1',NULL,'TEORI'),(2,'Ruang 2',NULL,'TEORI'),(3,'Ruang 3',NULL,'TEORI'),(4,'Ruang 4',NULL,'TEORI'),(5,'Ruang 5',NULL,'TEORI'),(6,'Ruang 6',NULL,'TEORI'),(7,'Ruang 7',NULL,'TEORI'),(8,'Ruang 8',NULL,'TEORI'),(9,'Ruang 9',NULL,'TEORI'),(10,'Ruang 10',NULL,'TEORI'),(11,'Ruang 11',NULL,'TEORI'),(12,'Ruang 12',NULL,'TEORI'),(13,'Ruang 13',NULL,'TEORI'),(14,'Ruang 14',NULL,'TEORI'),(15,'Ruang 15',NULL,'TEORI'),(16,'Ruang 16',NULL,'TEORI'),(17,'Lab. Sisfo 1',NULL,'LABORATORIUM'),(18,'Lab. Sisfo 2',NULL,'LABORATORIUM'),(19,'Lab Inherent',NULL,'LABORATORIUM'),(20,'Lab Aplikasi ',NULL,'LABORATORIUM'),(21,'Lab Jar ',NULL,'LABORATORIUM'),(22,'Lab Micro',NULL,'LABORATORIUM'),(23,'Lab Maintenence',NULL,'LABORATORIUM');
/*!40000 ALTER TABLE `ruang` ENABLE KEYS */;

--
-- Table structure for table `table_name`
--

DROP TABLE IF EXISTS `table_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_name` (
  `nim` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  KEY `ix_table_name_nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_name`
--

/*!40000 ALTER TABLE `table_name` DISABLE KEYS */;
INSERT INTO `table_name` VALUES ('4.33.22.0.01','1','AKASHA BIN ALI','L','TI-2A'),('4.33.22.0.02','2','ARYA DAMAR SINDHARU','L','TI-2A'),('4.33.22.0.03','3','AUFA BIMA NGAHADA','L','TI-2A'),('4.33.22.0.04','4','BAYU TRI PRAYITNO','L','TI-2A'),('4.33.22.0.05','5','DAVIN FAUSTA SUPRIYADI','L','TI-2A'),('4.33.22.0.06','6','DIMAS IRSYAD MAULANA','L','TI-2A'),('4.33.22.0.07','7','FARHAN RAHMAN PERMANA','L','TI-2A'),('4.33.22.0.08','8','GAVRILA NAUFAL ARSANDY','L','TI-2A'),('4.33.22.0.09','9','HUSSAIN TAMAM GUCCI AL FAUZAN','L','TI-2A'),('4.33.22.0.10','10','ILHAM MUHAMMAD ARIF','L','TI-2A'),('4.33.22.0.11','11','KARINA WIMALA KINANTI','P','TI-2A'),('4.33.22.0.12','12','LAKSAMANA DZIKRI AL JAUZI','L','TI-2A'),('4.33.22.0.13','13','M.ZAKKY IHSAN UDIN','L','TI-2A'),('4.33.22.0.14','14','MAULANA ALBAIHAQI ARTANTO','L','TI-2A'),('4.33.22.0.15','15','MAULANA BINTANG CAHYA MUKTI','L','TI-2A'),('4.33.22.0.16','16','MOH IQBAL BAGUS PRASETYO HUTOMO','L','TI-2A'),('4.33.22.0.17','17','MUHAMMAD FAUZI ANANTA','L','TI-2A'),('4.33.22.0.18','18','MUHAMMAD ILMAN SALAMUN','L','TI-2A'),('4.33.22.0.19','19','MUHAMMAD YASIR AL GHIFFARI','L','TI-2A'),('4.33.22.0.20','20','NAFIIS ABYAN ILYASA','L','TI-2A'),('4.33.22.0.22','21','NAUFAL REKY ARDHANA','L','TI-2A'),('4.33.22.0.22','22','RACHMADANDY MAHENDRA SHAKTI','L','TI-2A'),('4.33.22.0.23','23','RIFQI HAEZUL MA\'ALI','L','TI-2A'),('4.33.22.0.24','24','RUCIRASATTI NARISWANA','P','TI-2A'),('4.33.22.0.25','25','RYVANNIO SATRIA NUGROHO','L','TI-2A'),('4.33.22.0.26','26','SELVI AL-MAKAARI SAFITRI','P','TI-2A'),('4.33.22.1.01','27','ALDINO SATRIA WIBOWO','L','TI-2B'),('4.33.22.1.02','28','ARIA VEDA SATWIKA','L','TI-2B'),('4.33.22.1.03','29','AULIA FATIKA RAHMADANI','P','TI-2B'),('4.33.22.1.04','30','AZHARA LENTIA PRADISTI','P','TI-2B'),('4.33.22.1.05','31','BILQIS SHALLY NADHIFA','P','TI-2B'),('4.33.22.1.06','32','DENY RIANTO','L','TI-2B'),('4.33.22.1.07','33','DINDA MUTIARA SUKMANINGRUM','P','TI-2B'),('4.33.22.1.08','34','FEZA RIZKY PUTRA PRATAMA','L','TI-2B'),('4.33.22.1.09','35','HENI APRIYANI','P','TI-2B'),('4.33.22.1.10','36','IKBAL MUHAMAD TELAND','L','TI-2B'),('4.33.22.1.11','37','ISTIQOMAH ZULFA NUR\'AINI','P','TI-2B'),('4.33.22.1.12','38','JOHANNES DE BRITTO ANUGRAH BRIAN PUTRA SETYA IRAWAN','L','TI-2B'),('4.33.22.1.13','39','M. MUCHLAS HUDAWAN','L','TI-2B'),('4.33.22.1.14','40','MOCHAMAD ABDIEL RAYHANJAYA','L','TI-2B'),('4.33.22.1.15','41','MOH FATKHUR RAHMAN','L','TI-2B'),('4.33.22.1.16','42','MUHAMMAD ABDUL WAHAB','L','TI-2B'),('4.33.22.1.17','43','MUHAMMAD FARKHAN TSAQIF SEPTIANTO','L','TI-2B'),('4.33.22.1.18','44','MUHAMMAD RAYHAN MAULANA ANAS','L','TI-2B'),('4.33.22.1.19','45','MUHAMMAD RENDIANSYAH NOVALENTINO RAMADHANI','L','TI-2B'),('4.33.22.1.20','46','NAILA KAROMATUL ULYA','P','TI-2B'),('4.33.22.1.22','47','RAIS HANNAN RIZANTO','L','TI-2B'),('4.33.22.1.22','48','RAKHA YUDA WICAKSONO','L','TI-2B'),('4.33.22.1.23','49','RESMA YUNITA','P','TI-2B'),('4.33.22.1.24','50','SALWA FITRIYATUNNISA','P','TI-2B'),('4.33.22.1.25','51','TITO WAHYU PRATAMA','L','TI-2B'),('4.33.22.1.26','52','Y.DIMAS AGUNG NUGROHO','L','TI-2B'),('4.33.22.1.27','53','AHMAD RIDHANI','L','TI-2B'),('4.33.22.1.28','54','AULIA AZIZAH','P','TI-2B');
/*!40000 ALTER TABLE `table_name` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `level` enum('Y','N') DEFAULT NULL,
  `kelas` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Table structure for table `waktu_tidak_bersedia`
--

DROP TABLE IF EXISTS `waktu_tidak_bersedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waktu_tidak_bersedia` (
  `kode` int(10) NOT NULL AUTO_INCREMENT,
  `kode_dosen` int(10) DEFAULT NULL,
  `kode_hari` int(10) DEFAULT NULL,
  `kode_jam` int(10) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waktu_tidak_bersedia`
--

/*!40000 ALTER TABLE `waktu_tidak_bersedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `waktu_tidak_bersedia` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-28 14:15:06
