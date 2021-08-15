-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: cepromor_aeph
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activites`
--

DROP TABLE IF EXISTS `activites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activites_domaine_id_foreign` (`domaine_id`),
  CONSTRAINT `activites_domaine_id_foreign` FOREIGN KEY (`domaine_id`) REFERENCES `domaines` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activites`
--

/*!40000 ALTER TABLE `activites` DISABLE KEYS */;
INSERT INTO `activites` VALUES (1,'ENQUETE ET DIAGNOSTIC','kkdk',1,'2021-08-12 12:33:53','2021-08-12 12:33:53'),(2,'FORMATION','k',1,'2021-08-12 12:36:18','2021-08-12 12:36:18'),(3,'SOURCE D’EAU POTABLE','l',1,'2021-08-12 12:37:19','2021-08-12 12:37:19'),(4,'FORMATION DES ANC',' c',2,'2021-08-12 12:38:10','2021-08-12 12:38:10'),(6,'APPUI AUX CNT',' c',2,'2021-08-12 12:39:02','2021-08-12 12:39:02'),(7,'Kiese na kiese','On verra ce que cela va donner',3,'2021-08-12 12:40:06','2021-08-12 12:40:06'),(8,'Bon on verra',' ,',3,'2021-08-12 12:40:59','2021-08-12 12:40:59');
/*!40000 ALTER TABLE `activites` ENABLE KEYS */;

--
-- Table structure for table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actualites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actualites`
--

/*!40000 ALTER TABLE `actualites` DISABLE KEYS */;
INSERT INTO `actualites` VALUES (1,'Construction des nouveaux batiments ','Ecole nsinunu sona-bata','On verra comment cela va se passer','2021-08-12 12:48:18','2021-08-12 12:48:18'),(2,'Vente de farine de manioc ','Pour le compte des femmes mmmm','bein je ne sais pas trop','2021-08-12 12:49:33','2021-08-12 12:49:33');
/*!40000 ALTER TABLE `actualites` ENABLE KEYS */;

--
-- Table structure for table `cepro_infos`
--

DROP TABLE IF EXISTS `cepro_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cepro_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cepro_infos`
--

/*!40000 ALTER TABLE `cepro_infos` DISABLE KEYS */;
INSERT INTO `cepro_infos` VALUES (1,'HISTORIQUE','<style>@font-face{\nfont-family:\"Times New Roman\";\n}@font-face{\nfont-family:\"宋体\";\n}@font-face{\nfont-family:\"Calibri\";\n}@font-face{\nfont-family:\"Candara\";\n}@font-face{\nfont-family:\"Arial\";\n}p.MsoNormal{\nmso-style-name:Normal;\nmso-style-parent:\"\";\nmargin-bottom:10,0000pt;\nline-height:114%;\nfont-family:Calibri;\nfont-size:11,0000pt;\n}span.msoIns{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:underline;\ntext-underline:single;\ncolor:blue;\n}span.msoDel{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:line-through;\ncolor:red;\n}div.Section0{page:Section0;}</style><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Créée en 1994, le centre pour la Promotion du Monde Rural et Action Evangile et Promotion Humaine, </span><b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-weight:bold;font-size:12,0000pt;\">CEPROMOR&amp;AEPH </span></b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">en sigle</span><b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-weight:bold;font-size:12,0000pt;\">, </span></b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">&nbsp;est une organisation non gouvernementale œuvrant en République démocratique du Congo précisément dans &nbsp;la province du Kongo Central. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Le </span><b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-weight:bold;font-size:12,0000pt;\">CEPROMOR&amp;AEPH</span></b><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">&nbsp;et le SEL sont partenaires depuis 2004. Le partenariat a d’abord été axé sur des projets WASH (aménagement de sources et latrines dans la ZSR de Nselo). Depuis 2008, un projet de réhabilitation nutritionnelle est venu compléter ce projet. En parallèle, de 2008 à 2012, un PID (Programme de Développement Intégré) a été mené par le CEPROMOR dans la ZSR de Nselo, comportant plusieurs volets, WASH, sécurité alimentaire et formation des leaders dans le domaine du VIH sida. Plusieurs projets ont été menés par divers acteurs sur la ZSR de Nselo ou d’autres ZSR proches du siège du CEPROMOR avec l’appui technique et logistique de ce dernier (sécurité alimentaire, aménagement de centres de santé, etc.).</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">De 2009 à 2013, le &nbsp;CEPROMOR collabore avec la SNV dans les Province du Kongo Central et Kinshasa, notamment pour le renforcement des capacités technico-opérationnelles des clients WASH de la SNV au en vue d’améliorer durablement la desserte en eau potable dans la Zone de Santé d’Inga, la formulation d’une proposition en réponse à l’appel à proposition de l’Union Européenne dans le cadre d’un consortium avec la SNV et d’autres structures partenaires à en 2011, la post-certification des 20 villages et 10 écoles de référence &nbsp;de Kinshasa ayant perdu le statut assaini ou en régression en partenariat avec l’UNICEF-RDC et la coordination logistique et suivi de l’étude socio-Anthropologique ECRIS (Enquête Collective Rapide d\'Identification des conflits et des groupes Stratégiques) menée dans la province du Kongo Central dans le cadre du programme national village assaini. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Depuis 2014, le CEPROMOR accompagne la population des zones de santé de Nselo et de Sona-Bata dans la mise en place du Programme Intégré de Développement PID_2014-2018 avec l’appui financier de SEL/France. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Ces expériences de collaboration ont mis en exergue les capacités techniques et professionnelles de CEPROMOR et en font une organisation locale de renforcement des capacités crédible et à fort potentiel.</span></p>','2021-08-12 05:48:19','2021-08-12 05:48:19'),(2,'NOTRE IDENTITE','<style>@font-face{\nfont-family:\"Times New Roman\";\n}@font-face{\nfont-family:\"宋体\";\n}@font-face{\nfont-family:\"Calibri\";\n}@font-face{\nfont-family:\"Candara\";\n}@font-face{\nfont-family:\"Arial\";\n}@font-face{\nfont-family:\"Consolas\";\n}p.MsoNormal{\nmso-style-name:Normal;\nmso-style-parent:\"\";\nmargin-bottom:10,0000pt;\nline-height:114%;\nfont-family:Calibri;\nfont-size:11,0000pt;\n}span.msoIns{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:underline;\ntext-underline:single;\ncolor:blue;\n}span.msoDel{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:line-through;\ncolor:red;\n}div.Section0{page:Section0;}</style><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:18,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Le Centre pour la promotion du Monde Rural-Action évangile et Promotion Humaine, en abrégé «CEPROMOR&amp;AEPH, est une organisation humanitaire de développement créée en République démocratique du Congo le 15 Février 1994 conformément à la loi N°004/2001 du 20 Juillet 2001 portant dispositions générales applicables aux Associations Sans But Lucratif et aux Etablissements d’utilité publique , qui exerce ses activités sous un caractère à but non lucratif et jouissant d\'une autonomie de gestion et d\'administration.</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:18,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Elle est enregistrée à la Direction de Chancellerie et Garde des sceaux du Secrétariat Général du Ministère de Justice et Droits Humains à Kinshasa/Gombe, sous sous le numéro 0113, Folio 0114 volumes VIII en date du 20 Février 2003 conformément à la loi N°004/2001 du 20 Juillet 2001 </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">et à introduit une requête en obtention de la personnalité juridique dont l’accusé de réception N° F.92/29492 offerte le 18 août 2017 par la 2</span><sup><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;vertical-align:super;\">ème</span></sup><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">&nbsp;direction chargé des cultes et associations du secrétariat général du Ministère de la justice et garde des sceaux. &nbsp;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Son Siège social est situé au 10ème rue n°31 Quartier Lawula, Gare, Kisantu Inkisi/ RD. Congo, ville province de Kinshasa en République Démocratique du Congo</span></p>','2021-08-12 05:48:58','2021-08-12 05:48:58'),(3,'NOTRE VISION ','<style>@font-face{\nfont-family:\"Times New Roman\";\n}@font-face{\nfont-family:\"宋体\";\n}@font-face{\nfont-family:\"Calibri\";\n}@font-face{\nfont-family:\"Symbol\";\n}@font-face{\nfont-family:\"Courier New\";\n}@font-face{\nfont-family:\"Wingdings\";\n}@font-face{\nfont-family:\"Candara\";\n}@font-face{\nfont-family:\"Consolas\";\n}p.MsoNormal{\nmso-style-name:Normal;\nmso-style-parent:\"\";\nmargin-bottom:10,0000pt;\nline-height:114%;\nfont-family:Calibri;\nfont-size:11,0000pt;\n}span.msoIns{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:underline;\ntext-underline:single;\ncolor:blue;\n}span.msoDel{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:line-through;\ncolor:red;\n}div.Section0{page:Section0;}</style><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:18,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Le CEPROMOR&amp;AEPH entend être partie prenante dans le processus de lutte contre la pauvreté à travers la Promotion d’une société dans laquelle chaque individus, famille et communauté est acteur de son bien-être et est capable de réaliser sa santé, de se prendre en charge, de se promouvoir et de mener une vie saine dans un environnement durablement géré&nbsp;;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:18,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Alors pour voir l’expression de sa vision, le Cepromor&amp;aeph se veut être&nbsp;:</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:36,0000pt;\ntext-indent:-18,0000pt;text-align:justify;text-justify:inter-ideograph;\nline-height:18,0000pt;mso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Symbol;mso-bidi-font-family:Consolas;color:rgb(15,36,62);\nfont-size:13,0000pt;\"><span style=\"mso-list:Ignore;\">·<span></span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Etre une organisation &nbsp;qui œuvre &nbsp;pour le bien être holistique de l’homme et des communautés &nbsp;rurales, particulièrement &nbsp;des catégories &nbsp;vulnérable.</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">Etre un centre de Recherche, d’études, de formation et d’actions en promotion de la santé et du développement holistique des individus, familles et communautés vulnérables en milieux ruraux et périurbains de la RDC.</span></p>','2021-08-12 05:49:25','2021-08-12 05:49:37'),(4,'NOTRE MISSION','<style>@font-face{\nfont-family:\"Times New Roman\";\n}@font-face{\nfont-family:\"宋体\";\n}@font-face{\nfont-family:\"Calibri\";\n}@font-face{\nfont-family:\"Symbol\";\n}@font-face{\nfont-family:\"Courier New\";\n}@font-face{\nfont-family:\"Wingdings\";\n}@font-face{\nfont-family:\"Candara\";\n}@font-face{\nfont-family:\"Consolas\";\n}p.MsoNormal{\nmso-style-name:Normal;\nmso-style-parent:\"\";\nmargin-bottom:10,0000pt;\nline-height:114%;\nfont-family:Calibri;\nfont-size:11,0000pt;\n}span.msoIns{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:underline;\ntext-underline:single;\ncolor:blue;\n}span.msoDel{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:line-through;\ncolor:red;\n}div.Section0{page:Section0;}</style><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:18,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">La mission du CEPROMOR&amp;AEPH est de contribuer à la promotion de la santé et du bien-être holistique des individus, familles et communautés vulnérables en milieux ruraux et périurbains de la RDC, en utilisant efficacement l’Entraide, la solidarité et la coopération internationale à travers:</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:36,0000pt;\ntext-indent:-18,0000pt;text-align:justify;text-justify:inter-ideograph;\nline-height:18,0000pt;mso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Symbol;mso-bidi-font-family:Consolas;color:rgb(15,36,62);\nfont-size:13,0000pt;\"><span style=\"mso-list:Ignore;\">·<span></span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">L’Amélioration a un l’accès durable des communautés rurales et périurbaines de la RDC aux services sociaux de base à travers la réhabilitation et la reconstruction des infrastructures économiques et sociales communautaires pour les meilleures conditions de vie&nbsp;;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:36,0000pt;\ntext-indent:-18,0000pt;text-align:justify;text-justify:inter-ideograph;\nline-height:18,0000pt;mso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Symbol;mso-bidi-font-family:Consolas;color:rgb(15,36,62);\nfont-size:13,0000pt;\"><span style=\"mso-list:Ignore;\">·<span></span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">L’amélioration durable de la production, l’emploi et le revenu des populations pauvres et marginalisées des milieux ruraux et périurbains&nbsp;;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\"></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Consolas;\ncolor:rgb(15,36,62);font-size:13,0000pt;\">La participation au développement du leadership transformationnel &nbsp;et au transfert des compétences organisationnelles, techniques et opérationnelles des organisations communautaires de base de la RDC dans ses domaines d’interventions.</span></p>','2021-08-12 05:50:01','2021-08-12 05:50:10'),(5,'PRINCIPES ET VALEURS','<style>@font-face{\nfont-family:\"Times New Roman\";\n}@font-face{\nfont-family:\"宋体\";\n}@font-face{\nfont-family:\"Calibri\";\n}@font-face{\nfont-family:\"Courier New\";\n}@font-face{\nfont-family:\"Wingdings\";\n}@font-face{\nfont-family:\"Symbol\";\n}@font-face{\nfont-family:\"Candara\";\n}@font-face{\nfont-family:\"Arial\";\n}p.MsoNormal{\nmso-style-name:Normal;\nmso-style-parent:\"\";\nmargin-bottom:10,0000pt;\nline-height:114%;\nfont-family:Calibri;\nfont-size:11,0000pt;\n}span.msoIns{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:underline;\ntext-underline:single;\ncolor:blue;\n}span.msoDel{\nmso-style-type:export-only;\nmso-style-name:\"\";\ntext-decoration:line-through;\ncolor:red;\n}div.Section0{page:Section0;}</style><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\">La stratégie part de la prémisse que Promotion de la santé s’appuie tout d’abord sur la reconnaissance des capacités des individus à faire leurs propres choix de vie, ainsi que sur le respect de ces personnes et de leur intégrité. Elle s’inscrit donc dans le respect de l’autonomie des individus et des communautés et sur leur capacité à définir eux-mêmes ce qui est souhaitable pour eux.</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\">Le CEPROMOR&amp;AEPH milite pour les valeurs suivantes : promotion et respect des droits de l’homme, le développement durable, l’indépendance morale et politique, la dynamique et participation Communautaire, la transparence, le financement éthique, la non-discrimination, l’engagement responsable, l’égalité des chances, la bonne gouvernance sur le service de base et genre et l’objectivité. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\"></span></p><p class=\"MsoNormal\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;text-align:justify;\ntext-justify:inter-ideograph;line-height:20,0000pt;mso-line-height-rule:exactly;\" align=\"justify\"><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\">Complémentairement à ces valeurs de base, le CEPROMOR&amp;AEPH s’appuie sur Six principes directeurs, présentés ci-dessous:</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\nfont-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.1.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">L’œuvre du CEPROMOR répond à la demande et aux besoins d’individus et de communautés dont la couverture en WASH et sécurité alimentaire &nbsp;est la plus faible. Cette œuvre est conçue pour les servir. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.2.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Le CEPROMOR se préoccupe plus particulièrement de personnes pauvres, de groupes marginalisés, et de personnes désavantagées ou handicapées. </span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.3.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Le Cepromor &nbsp;place la communauté au cœur de l’action et vise un renforcement du pouvoir communautaire;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.4.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Le Cepromor favorise l’établissement de partenariat impliquant des engagements mutuels durables&nbsp;;</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.5.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">Les actions découlant de la stratégie utiliseront les ressources existantes</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\"></span></p><p class=\"15\" style=\"margin-top:6,0000pt;margin-bottom:6,0000pt;margin-left:70,9000pt;\ntext-indent:-28,3500pt;mso-layout-grid-align:none;text-autospace:none;\ntext-align:justify;text-justify:inter-ideograph;line-height:18,0000pt;\nmso-line-height-rule:exactly;mso-list:l0 level1 lfo1;\" align=\"justify\"><span style=\"font-family:Candara;mso-bidi-font-family:Arial;color:rgb(15,36,62);\nfont-weight:bold;font-size:12,0000pt;\"><span style=\"mso-list:Ignore;\">P.6.<span>&nbsp;</span></span></span><span style=\"mso-spacerun:\'yes\';font-family:Candara;mso-bidi-font-family:Arial;\ncolor:rgb(15,36,62);font-size:12,0000pt;\">L’activité du CEPROMOR contribue aux objectifs élargis d’une amélioration de la santé et du développement économique et social. Elle favorise la bonne gouvernance, l’équité et la viabilité</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;color:rgb(15,36,62);\nfont-size:12,0000pt;\">.</span><span style=\"mso-spacerun:\'yes\';font-family:Candara;color:rgb(0,0,0);\nfont-size:12,0000pt;\"></span></p>','2021-08-12 06:00:23','2021-08-12 06:00:23');
/*!40000 ALTER TABLE `cepro_infos` ENABLE KEYS */;

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaires_question_foreign` (`question`),
  CONSTRAINT `commentaires_question_foreign` FOREIGN KEY (`question`) REFERENCES `questions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaires`
--

/*!40000 ALTER TABLE `commentaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaires` ENABLE KEYS */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','krkrkr','cepromor@info.org','2021-08-11 18:25:28','2021-08-11 18:29:42'),(2,'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z','jfjf','+243(0)899682734 +243(0)810708377','2021-08-11 18:31:38','2021-08-11 18:31:38'),(3,'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9','llk','www.cepromor-aeph.org','2021-08-11 18:32:33','2021-08-11 18:32:33'),(4,'M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z',';l;l;l','10ème Rue N° 31, Q/LAWULA, T/ MADIMBA, Kongo Central /RDC','2021-08-11 18:33:16','2021-08-11 18:34:54');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

--
-- Table structure for table `domaines`
--

DROP TABLE IF EXISTS `domaines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domaines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domaines`
--

/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
INSERT INTO `domaines` VALUES (1,'EAU, HYGIENE ET ASSAINISSEMENT (WASH)','Amélioration de l’accès à l’eau potable, à l’Hygiène et à l’Assainissement par la mobilisation des moyens nécessaires à cet effet et l’implication des populations bénéficiaires. \nLes activités qui les composent sont : (i) renforcement des capacités opérationnelles et techniques des organisations paysannes dans l’aménagement des ouvrages d’approvisionnement en eau potable et la construction des infrastructures hygiéniques d’évacuation d’excréta, (ii) l’aménagement des ouvrages d’approvisionnement en eau potable dans les villages et la construction des infrastructures hygiéniques d’évacuation d’excréta dans les lieux publics, (iii) Renforcer les capacités des différents acteurs locaux et des organisations paysannes sur les différentes  approches participatives en Eau, Hygiène et assainissement. (iv) promouvoir les petites actions faisables mais importante (PAFI) en EHA, (v) Promouvoir la construction des infrastructures hygiéniques d’évacuation d’excréta familiales.','2021-08-12 05:53:02','2021-08-12 05:53:02'),(2,'AGRICULTURE ET SECURITE ALIMENTAIRE','1. Assurer la sécurité alimentaire des populations et des communautés de base à travers l’appui à la production, à la transformation, à la commercialisation, à l’écoulement et au stockage des produits agricoles ; <br>\n2. Améliorer et intensifier les cultures agricoles par l’introduction des techniques modernes en vue d\'augmenter le rendement agricole;<br>\n3. Promouvoir l’agroforesterie pour contribuer à améliorer la durabilité d\'un agrosystème, à travers l\'impact des arbres sur la fertilité du milieu (sol notamment) et sur la biodiversité fonctionnelle.','2021-08-12 05:54:31','2021-08-12 05:54:31'),(3,'ENVIRONNEMENT ET CLIMAT','1. Contribuer au renforcement de la conscience et du comportement écologique nécessaires à un engagement pour une gestion rationnelle des ressources naturelles. <br>\nLes activités qui les composent sont : (i) l’IEC par les organes d’information et au moyen des réunions publiques, des sketchs et autres outils de communication, (ii) la sensibilisation des décideurs politiques du secteur privé et des planificateurs de projet sur les textes régissant les études d’impact environnemental et sa prise en compte systématique dans les programmes et projets de développement, (iii) l’appui aux actions d’éducation environnementale et (iv) l’appui à l’enseignement de notions d’environnement dans les établissements primaires et secondaires.<br>\n2. Promouvoir le renforcement des capacités en matière de lutte contre la désertification et la dégradation des sols. \nLes activités qui les composent sont : (i) renforcement de la participation des populations à la lutte contre la désertification, (ii) promotion de pratiques endogènes, de techniques et de technologies de lutte contre la désertification et la dégradation des sols, (iii) renforcement des capacités institutionnelles dans le domaine de la lutte contre la désertification et la dégradation des sols, (iv) accompagnement dans la restauration du couvert végétal et des sols, (v) Appui à la généralisation de l’utilisation des foyers améliorés de charbon de bois et de bois de feu, (vi) appui à l’organisation de la filière de charbon de bois et l’amélioration des techniques de carbonisation du bois.','2021-08-12 05:56:16','2021-08-12 05:56:16'),(4,'PROTECTION SOCIALE ET PROMOTION DE DROIT DE L’HOMME','1. Actions et programmes d\'assistance humanitaire aux personnes vulnérables dont les veuves, les vieillards, les personnes avec handicap, les malades, les enfants orphelins, ceux de la rue, et les sinistrés etc ; <br>\n2. Programme de distribution de l\'aide alimentaire, médicale, vestimentaire et dons divers ;<br>\n3. Construction et équipement des centres d\'hébergement, orphelinats, foyers sociaux, centres de formation socioprofessionnelle ;<br>\n4. Mettre en place des programmes de réinsertion socio-économique et professionnelle des personnes vulnérables, marginalisées (veuves, enfants abandonnés, enfants de la rue, enfants soi-disant sorciers, filles mères… et des ex-combattants ;\nla scolarisation des orphelins du VIH/Sida, des enfants abandonnés et en situation difficile.','2021-08-12 05:57:36','2021-08-12 05:57:36'),(5,'RECHERCHE-ACTION ET PLAIDOYER EN SANTE ET DEVELOPPEMENT.','Nos Modes d’Interventions <br>\n1. Renforcement des capacités <br>\n2. Conception & Gestion des projets  <br>\n3. Suivi et évaluation des Projets <br>\n4. Sensibilisation et animation<br>\n5. Coaching et mentorat   <br>\n6. Études et Recherche opérationnelle <br>\n7. Plaidoyer <br>','2021-08-12 05:59:40','2021-08-12 05:59:40');
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_acti_id` bigint unsigned DEFAULT NULL,
  `activite_id` bigint unsigned DEFAULT NULL,
  `projet_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_sous_acti_id_foreign` (`sous_acti_id`),
  KEY `galleries_activite_id_foreign` (`activite_id`),
  KEY `galleries_projet_id_foreign` (`projet_id`),
  CONSTRAINT `galleries_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`),
  CONSTRAINT `galleries_projet_id_foreign` FOREIGN KEY (`projet_id`) REFERENCES `projets` (`id`),
  CONSTRAINT `galleries_sous_acti_id_foreign` FOREIGN KEY (`sous_acti_id`) REFERENCES `sous_activites` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'LISTE DE VILLAGES BENEFICIAIRES',NULL,1,NULL,'2021-08-12 12:33:53','2021-08-12 12:34:28'),(2,'5 ont réalisés leurs autoévaluations ',NULL,1,NULL,'2021-08-12 12:33:53','2021-08-12 12:34:37'),(3,'Mise en place du Brigade scolaire à l’ITM Sona-Bata',NULL,1,NULL,'2021-08-12 12:33:53','2021-08-12 12:34:45'),(4,'',NULL,2,NULL,'2021-08-12 12:36:18','2021-08-12 12:36:18'),(5,'',NULL,2,NULL,'2021-08-12 12:36:18','2021-08-12 12:36:18'),(6,'',NULL,2,NULL,'2021-08-12 12:36:18','2021-08-12 12:36:18'),(7,'',NULL,3,NULL,'2021-08-12 12:37:19','2021-08-12 12:37:19'),(8,'',NULL,3,NULL,'2021-08-12 12:37:19','2021-08-12 12:37:19'),(9,'',NULL,4,NULL,'2021-08-12 12:38:10','2021-08-12 12:38:10'),(10,'',NULL,4,NULL,'2021-08-12 12:38:10','2021-08-12 12:38:10'),(11,'',NULL,4,NULL,'2021-08-12 12:38:10','2021-08-12 12:38:10'),(12,'',NULL,6,NULL,'2021-08-12 12:39:02','2021-08-12 12:39:02'),(13,'',NULL,6,NULL,'2021-08-12 12:39:02','2021-08-12 12:39:02'),(14,'',NULL,6,NULL,'2021-08-12 12:39:02','2021-08-12 12:39:02'),(15,'',NULL,7,NULL,'2021-08-12 12:40:06','2021-08-12 12:40:06'),(16,'',NULL,7,NULL,'2021-08-12 12:40:06','2021-08-12 12:40:06'),(17,'mklkl',NULL,8,NULL,'2021-08-12 12:40:59','2021-08-12 12:40:59'),(18,'klkl',NULL,8,NULL,'2021-08-12 12:40:59','2021-08-12 12:40:59'),(19,'lklkk',NULL,8,NULL,'2021-08-12 12:40:59','2021-08-12 12:40:59');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;

--
-- Table structure for table `info_headers`
--

DROP TABLE IF EXISTS `info_headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `info_headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_headers`
--

/*!40000 ALTER TABLE `info_headers` DISABLE KEYS */;
INSERT INTO `info_headers` VALUES (1,'CEPROMOR & AEPH','ASSOCIATION A BUT SANS LUCRATIF','2021-08-12 12:43:36','2021-08-12 12:43:36'),(2,'CEPROMOR & AEPH','ASSOCIATION A BUT SANS LUCRATIF','2021-08-12 12:44:37','2021-08-12 12:44:37'),(3,'CEPROMOR & AEPH','ASSOCIATION A BUT SANS LUCRATIF','2021-08-12 12:45:10','2021-08-12 12:45:10'),(4,'CEPROMOR & AEPH','ASSOCIATION A BUT SANS LUCRATIF','2021-08-12 12:45:42','2021-08-12 12:45:42'),(5,'CEPROMOR & AEPH','ASSOCIATION A BUT SANS LUCRATIF','2021-08-12 12:46:56','2021-08-12 12:46:56');
/*!40000 ALTER TABLE `info_headers` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (94,'2012_08_05_072633_create_roles_table',1),(95,'2014_10_12_000000_create_users_table',1),(96,'2014_10_12_100000_create_password_resets_table',1),(97,'2019_08_19_000000_create_failed_jobs_table',1),(98,'2021_08_05_072404_create_type_partenaires_table',1),(99,'2021_08_05_072514_create_type_patrimoines_table',1),(100,'2021_08_05_072651_create_questions_table',1),(101,'2021_08_05_072739_create_patrimoines_table',1),(102,'2021_08_05_072753_create_commentaires_table',1),(103,'2021_08_05_072813_create_contacts_table',1),(104,'2021_08_05_072828_create_cepro_infos_table',1),(105,'2021_08_05_072838_create_domaines_table',1),(106,'2021_08_05_072911_create_activites_table',1),(107,'2021_08_05_072937_create_sous_activites_table',1),(108,'2021_08_05_073146_create_info_headers_table',1),(109,'2021_08_05_073157_create_actualites_table',1),(110,'2021_08_05_073207_create_projets_table',1),(111,'2021_08_05_073213_create_galleries_table',1),(112,'2021_08_07_203816_create_partenaires_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partenaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parte_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partenaires_parte_id_foreign` (`parte_id`),
  CONSTRAINT `partenaires_parte_id_foreign` FOREIGN KEY (`parte_id`) REFERENCES `type_partenaires` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partenaires`
--

/*!40000 ALTER TABLE `partenaires` DISABLE KEYS */;
INSERT INTO `partenaires` VALUES (3,'S.E.L./France','https://www.selfrance.org/',2,'2021-08-12 06:19:25','2021-08-12 06:19:25'),(4,'SNV/RDC','https://snv.org/',2,'2021-08-12 06:21:11','2021-08-12 06:21:11'),(5,'ICCO and  kerk in actie','https://www.icco-cooperation.org/en/',2,'2021-08-12 06:30:17','2021-08-12 06:30:17'),(6,'UNICEF – RDC','https://www.unicef.org/drcongo/',2,'2021-08-12 06:36:50','2021-08-12 06:36:50'),(7,'Marquenterre ','https://www.marquenterrenature.fr/',2,'2021-08-12 06:39:11','2021-08-12 06:39:11'),(8,'Procredit Bank','https://www.equitybank.cd/index-2.html',2,'2021-08-12 06:41:40','2021-08-12 06:41:40'),(9,'Organisation La Colombe/Suisse','http://www.colombe-suisse.ch/',2,'2021-08-12 06:43:43','2021-08-12 06:43:43'),(10,'Solidarité Protestante','https://www.solidariteprotestante.be/',2,'2021-08-12 06:49:10','2021-08-12 06:49:10'),(11,'Nutrition sans Frontière','https://www.nutritionbeyondborders.org/',2,'2021-08-12 06:52:43','2021-08-12 06:52:43');
/*!40000 ALTER TABLE `partenaires` ENABLE KEYS */;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

--
-- Table structure for table `patrimoines`
--

DROP TABLE IF EXISTS `patrimoines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patrimoines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qte` int unsigned NOT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patri_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patrimoines_patri_id_foreign` (`patri_id`),
  CONSTRAINT `patrimoines_patri_id_foreign` FOREIGN KEY (`patri_id`) REFERENCES `type_patrimoines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patrimoines`
--

/*!40000 ALTER TABLE `patrimoines` DISABLE KEYS */;
/*!40000 ALTER TABLE `patrimoines` ENABLE KEYS */;

--
-- Table structure for table `projets`
--

DROP TABLE IF EXISTS `projets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descri` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projets`
--

/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

--
-- Table structure for table `sous_activites`
--

DROP TABLE IF EXISTS `sous_activites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sous_activites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sous_activites_activite_id_foreign` (`activite_id`),
  CONSTRAINT `sous_activites_activite_id_foreign` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_activites`
--

/*!40000 ALTER TABLE `sous_activites` DISABLE KEYS */;
/*!40000 ALTER TABLE `sous_activites` ENABLE KEYS */;

--
-- Table structure for table `type_partenaires`
--

DROP TABLE IF EXISTS `type_partenaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_partenaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_partenaires`
--

/*!40000 ALTER TABLE `type_partenaires` DISABLE KEYS */;
INSERT INTO `type_partenaires` VALUES (1,'Interne ','2021-08-11 10:29:38','2021-08-11 10:29:38'),(2,'Externe','2021-08-11 10:29:46','2021-08-11 10:29:46'),(3,'Regrouper','2021-08-11 10:29:54','2021-08-11 10:29:54');
/*!40000 ALTER TABLE `type_partenaires` ENABLE KEYS */;

--
-- Table structure for table `type_patrimoines`
--

DROP TABLE IF EXISTS `type_patrimoines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_patrimoines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_patrimoines`
--

/*!40000 ALTER TABLE `type_patrimoines` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_patrimoines` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-12 16:56:55
