-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: elearning
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.17.04.1

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
-- Table structure for table `sys_lists`
--

DROP TABLE IF EXISTS `sys_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_lists` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ipaddress` varchar(255) DEFAULT NULL,
  `page_type` varchar(255) DEFAULT NULL,
  `page_content` text,
  `page_content2` text,
  `sort` int(11) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lists`
--

LOCK TABLES `sys_lists` WRITE;
/*!40000 ALTER TABLE `sys_lists` DISABLE KEYS */;
INSERT INTO `sys_lists` VALUES (1,'2017-09-28 12:57:19','2017-09-28 12:57:19','127.0.0.1','company_section_2','Đội ngũ tư vấn kỹ thuật','left',1,0),(2,'2017-09-28 12:57:28','2017-09-28 12:57:28','127.0.0.1','company_section_2','Chuyên nghiệp giàu kinh nghiệm','left',2,0),(3,'2017-09-28 12:57:35','2017-09-28 12:57:35','127.0.0.1','company_section_2','Đối tác tin cậy','left',3,0),(4,'2017-09-28 12:57:47','2017-09-28 12:57:47','127.0.0.1','company_section_2','Sản phẩm và dịch vụ cao','right',1,0),(5,'2017-09-28 12:57:54','2017-09-28 12:57:54','127.0.0.1','company_section_2','Giá trị khách hàng cốt lõi','right',2,0),(6,'2017-09-28 12:58:02','2017-09-28 12:58:02','127.0.0.1','company_section_2','Giao hàng đúng tiến độ','right',3,0),(7,'2017-09-28 13:03:36','2017-09-28 13:03:36','127.0.0.1','company_section_3','Sứ mệnh','Chúng tôi mong muốn tạo ra những sản phẩm hội tụ tất cả những tinh hoa công nghệ, chất lượng và độ chính xác cao, mang lại sự hài lòng cho khách hàng.',1,0),(8,'2017-09-28 13:04:29','2017-09-28 13:04:29','127.0.0.1','company_section_3','Kinh nghiệm','Với sự chuyên nghiệp, kinh nghiệm được đúc kết và tích lũy trong nhiều năm chúng tôi đảm bảo cung cấp đến khách hàng sản phẩm chất lượng cao, đúng tiến độ, giá cả cạnh tranh.',2,0),(9,'2017-09-28 13:04:50','2017-09-28 13:04:50','127.0.0.1','company_section_3','Dịch vụ','Với phương châm mang lại sự hài lòng cho khách hàng, chúng tôi hỗ trợ và tư vấn mọi lúc mọi nơi,  mang lại những dịch vụ tốt nhất hiện nay cho khách hàng.',3,0),(10,'2017-09-28 13:33:23','2017-09-28 13:33:23','127.0.0.1','home_section_3','Gia công chính xác','Chúng tôi chuyên gia công chính xác chi tiết máy, gia công chi tiết khuôn, linh kiện-phụ tùng cơ khí ô tô-điện tử và các ngành công nghiệp khác.<br />\nBên cạnh đó chúng tôi áp dụng công nghệ xử lý bề mặt không những mang lại sản phẩm đạt yêu cầu kỹ thuật mà còn đáp ứng về mặt ngoại quan sản phẩm.',1,0),(11,'2017-09-28 13:34:18','2017-09-28 13:34:18','127.0.0.1','home_section_3','Thiết kế, chế tạo máy','Với đội ngũ kỹ sư nhiều kinh nghiệm làm việc trong nhiều lĩnh vực, chúng tôi đưa ra các giải pháp công nghệ kỹ thuật từ đó thiết kế chế tạo máy theo nhu cầu của khách hàng.<br />\nNhững sản phẩm tưởng như không thể, phức tạp khi đến với chúng tôi sẽ đơn giản và tối ưu nhất.',2,0),(12,'2017-09-28 13:34:48','2017-09-28 13:34:48','127.0.0.1','home_section_3','Dịch vụ của chúng tôi','Với phương châm mang lại sự hài lòng cho khách hàng.<br />\nSản phẩm của chúng tôi được kiểm tra nghiêm ngặt từ khâu đầu vào, quá trình sản xuất cho tới khâu kiểm định,  đóng gói và vận chuyển để mang lại sản phẩm đạt chất lượng và đáp ứng nhanh tiến độ.',3,0),(13,'2017-09-28 13:37:18','2017-09-28 13:37:18','127.0.0.1','home_section_4','Chúng tôi phục vụ các nhu cầu chế tạo','left',1,0),(14,'2017-09-28 13:37:32','2017-09-28 13:37:32','127.0.0.1','home_section_4','Các dịch vu gia công cơ khí chính xác,  thiết kế chế tạo của chúng tôi đáp ứng nhu cầu của nhiều ngành công nghiệp với quy mô lớn và nhỏ.','left',2,0),(15,'2017-09-28 13:37:41','2017-09-28 13:37:41','127.0.0.1','home_section_4','Ngoài ra chúng tôi còn đáp ứng nhanh tiến độ theo từng yêu cầu của khách hàng.','left',3,0),(16,'2017-09-28 13:37:54','2017-09-28 13:37:54','127.0.0.1','home_section_4','Với sự chuyên nghiệp, giàu kinh nghiệm và tận tâm sẽ mang lại sự hài lòng cho khách hàng.','right',1,0),(17,'2017-09-28 13:38:03','2017-09-28 13:38:03','127.0.0.1','home_section_4','Chúng tôi tự hào mang lại chất lượng sản phẩm và dịch vụ cao nhất cho khách hàng.','right',2,0),(18,'2017-09-28 13:38:11','2017-09-28 13:38:11','127.0.0.1','home_section_4','Hãy liên hệ với chúng tôi nếu như bạn có nhu cầu cũng như bất kỳ câu hỏi nào.','right',3,0),(19,'2017-09-28 13:58:00','2017-09-28 13:58:00','127.0.0.1','product_section_3','Gia công chi tiết máy.','left',1,0),(20,'2017-09-28 13:58:21','2017-09-28 13:58:21','127.0.0.1','product_section_3','Gia công khuôn mẫu.','left',2,0),(21,'2017-09-28 13:58:28','2017-09-28 13:58:28','127.0.0.1','product_section_3','Sản xuất, lắp đặt.','left',3,0),(22,'2017-09-28 13:58:40','2017-09-28 13:58:40','127.0.0.1','product_section_3','Cho thuê máy công cụ.','left',4,0),(23,'2017-09-28 13:58:55','2017-09-28 13:58:55','127.0.0.1','product_section_3','Thiết kế và chế tạo máy tự động hóa.','right',1,0),(24,'2017-09-28 13:59:03','2017-09-28 13:59:03','127.0.0.1','product_section_3','Thiết kế khuôn mẫu.','right',2,0),(25,'2017-09-28 13:59:11','2017-09-28 13:59:11','127.0.0.1','product_section_3','Tư vấn và Chuyển giao công nghệ.','right',3,0),(26,'2017-09-28 13:59:18','2017-09-28 14:25:45','127.0.0.1','product_section_3',' Tư vấn kỹ thuật.',' right ',4,0);
/*!40000 ALTER TABLE `sys_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_photos`
--

DROP TABLE IF EXISTS `sys_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_photos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `ipaddress` varchar(255) DEFAULT NULL,
  `page_type` varchar(255) DEFAULT NULL,
  `page_content` text,
  `page_content2` text,
  `page_content3` text,
  `sort` int(11) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_photos`
--

LOCK TABLES `sys_photos` WRITE;
/*!40000 ALTER TABLE `sys_photos` DISABLE KEYS */;
INSERT INTO `sys_photos` VALUES (1,'2017-09-28 15:05:53','2017-09-28 15:05:53','127.0.0.1','company_section_1','Công ty chúng tôi chuyên gia công chính xác chi tiết máy trên mọi vật liệu như Nhôm, Sắt, Đồng, Nhựa Teflon, ...','company/1-gia_cong.jpg','company/fit_1-gia_cong.jpg',1,0),(2,'2017-09-28 15:09:04','2017-09-28 15:09:04','127.0.0.1','company_section_1','Chúng tôi thiết kế, gia công các loại khuôn ép nhựa, khuôn thổi, khuôn đùn, ...','company/2-plastic_mold.jpg','company/fit_2-plastic_mold.jpg',2,0),(3,'2017-09-28 15:09:34','2017-09-28 15:09:34','127.0.0.1','company_section_1','Với đội ngũ kỹ sư nhiều kinh nghiệm công ty chúng tôi thiết kế chế tạo các máy phục vụ trong lĩnh vực công nghiệp chế tạo máy, điện-điện tử, ...','company/3-machine.jpg','company/fit_3-machine.jpg',3,0),(4,'2017-09-28 15:14:54','2017-09-28 15:14:54','127.0.0.1','company_section_2','Ảnh nền','company/why_chose_us.jpg','company/fit_why_chose_us.jpg',1,0),(5,'2017-09-28 15:21:39','2017-09-28 15:21:39','127.0.0.1','company_section_3','Ảnh nền','company/company_bg_s3.jpg','company/fit_company_bg_s3.jpg',1,0),(6,'2017-09-28 16:40:25','2017-09-28 16:40:25','127.0.0.1','product_section_1','Chi tiết 01','product/processing/01-chi_tiet_01.jpg','product/processing/fit_01-chi_tiet_01.jpg',1,0),(7,'2017-09-28 16:41:23','2017-09-28 16:41:23','127.0.0.1','product_section_1','Chi tiết 02','product/processing/02-chi_tiet_02.jpg','product/processing/fit_02-chi_tiet_02.jpg',2,0),(8,'2017-09-28 16:41:30','2017-09-28 16:41:30','127.0.0.1','product_section_1','Chi tiết 03','product/processing/03-chi_tiet_03.jpg','product/processing/fit_03-chi_tiet_03.jpg',3,0),(9,'2017-09-28 16:41:38','2017-09-28 16:41:38','127.0.0.1','product_section_1','Chi tiết 04','product/processing/04-chi_tiet_04.jpg','product/processing/fit_04-chi_tiet_04.jpg',4,0),(10,'2017-09-28 16:41:44','2017-09-28 16:41:44','127.0.0.1','product_section_1','Chi tiết 05','product/processing/05-chi_tiet_05.jpg','product/processing/fit_05-chi_tiet_05.jpg',5,0),(11,'2017-09-28 16:41:52','2017-09-28 16:41:52','127.0.0.1','product_section_1','Chi tiết 06','product/processing/06-chi_tiet_06.jpg','product/processing/fit_06-chi_tiet_06.jpg',6,0),(12,'2017-09-28 16:41:58','2017-09-28 16:41:58','127.0.0.1','product_section_1','Chi tiết 07','product/processing/07-chi_tiet_07.jpg','product/processing/fit_07-chi_tiet_07.jpg',7,0),(13,'2017-09-28 16:42:05','2017-09-28 16:42:05','127.0.0.1','product_section_1','Chi tiết 08','product/processing/08-chi_tiet_08.jpg','product/processing/fit_08-chi_tiet_08.jpg',8,0),(14,'2017-09-28 16:42:10','2017-09-28 16:42:10','127.0.0.1','product_section_1','Chi tiết 09','product/processing/09-chi_tiet_09.jpg','product/processing/fit_09-chi_tiet_09.jpg',9,0),(15,'2017-09-28 16:43:01','2017-09-28 16:43:01','127.0.0.1','product_section_2','SandPaper Machine','product/design/01-sandpaper-machine.jpg','product/design/fit_01-sandpaper-machine.jpg',1,0),(16,'2017-09-28 16:43:17','2017-09-28 16:43:17','127.0.0.1','product_section_2','Polish Finish Machine','product/design/02-polish-finish-_machine.jpg','product/design/fit_02-polish-finish-_machine.jpg',2,0),(17,'2017-09-28 16:43:33','2017-09-28 16:43:33','127.0.0.1','product_section_2','Robot Machine','product/design/03-robot-machine.jpg','product/design/fit_03-robot-machine.jpg',3,0),(18,'2017-09-28 16:43:45','2017-09-28 16:43:45','127.0.0.1','product_section_2','iValuate Machine','product/design/04-ivaluate_machine.jpg','product/design/fit_04-ivaluate_machine.jpg',4,0),(19,'2017-09-28 16:43:59','2017-09-28 16:43:59','127.0.0.1','product_section_2','Bonding LCD Machine','product/design/05-bonding_lcd_machine.jpg','product/design/fit_05-bonding_lcd_machine.jpg',5,0),(20,'2017-09-28 16:44:16','2017-09-28 16:44:16','127.0.0.1','product_section_2','Sandblasting Machine','product/design/06-sandblasting_machine.jpg','product/design/fit_06-sandblasting_machine.jpg',6,0),(21,'2017-09-28 16:44:28','2017-09-28 16:44:28','127.0.0.1','product_section_2','Atom\'x Machine','product/design/07-atomx_machine.jpg','product/design/fit_07-atomx_machine.jpg',7,0),(22,'2017-09-28 16:44:45','2017-09-28 16:44:45','127.0.0.1','product_section_2','Polished Glass Machine','product/design/08-polished_glass_machine.jpg','product/design/fit_08-polished_glass_machine.jpg',8,0),(23,'2017-09-28 16:44:56','2017-09-28 16:44:56','127.0.0.1','product_section_2','GamePlay','product/design/09-gameplay.jpg','product/design/fit_09-gameplay.jpg',9,0);
/*!40000 ALTER TABLE `sys_photos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-28 17:24:28
