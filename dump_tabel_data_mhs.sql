
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