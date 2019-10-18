-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.24


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema academicgym
--

CREATE DATABASE IF NOT EXISTS academicgym;
USE academicgym;

--
-- Definition of table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE `alunos` (
  `Matricula` int(10) unsigned NOT NULL DEFAULT '0',
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Identidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CPF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UF` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biometria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alunos`
--

/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`Matricula`,`Nome`,`Identidade`,`CPF`,`CEP`,`Rua`,`Numero`,`Complemento`,`Bairro`,`Cidade`,`UF`,`Biometria`,`created_at`,`updated_at`) VALUES 
 (1,'Glauber Jairo','12.345.678/9','123.456.789-10','12345-678','Av. Santos de Souza','4554',NULL,'Catanduva','Taubaté','sp',NULL,'2019-10-10 13:14:05','2019-10-10 13:14:26'),
 (2,'Marcos Paulo','98.765.432/1','109.876.543.21','12034-567','R. Jairo da Costa','4789','apto-720','Villa Pericardica','Taubaté','SP',NULL,'2019-10-10 13:15:56','2019-10-10 13:17:00'),
 (3,'Carlos Magno','45.659.655/1','456.783.921-58','12012-120','Av. Carlos Pesanha de Nascimento','48',NULL,'Brazilandia','Taubaté','SP',NULL,'2019-10-10 13:18:51','2019-10-10 13:18:51'),
 (4,'Jurandir Pinto Neves de Souza','35.689.687/5','584.685.957-60','14896-985','Rua Marcos Pinheiro Juarez','795','Apto-930','Vila Peri','Tremembé','SP',NULL,'2019-10-10 13:22:04','2019-10-10 13:22:04');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;


--
-- Definition of table `instrutors`
--

DROP TABLE IF EXISTS `instrutors`;
CREATE TABLE `instrutors` (
  `id_Instrutor` int(10) unsigned NOT NULL DEFAULT '0',
  `Nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Identidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_Aula` enum('Grupo','Musculação','Combo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_Instrutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instrutors`
--

/*!40000 ALTER TABLE `instrutors` DISABLE KEYS */;
INSERT INTO `instrutors` (`id_Instrutor`,`Nome`,`CPF`,`Identidade`,`tp_Aula`,`created_at`,`updated_at`) VALUES 
 (1,'Glauber Jairo','345.582.758-50','48.333.660/6','Musculação','2019-10-10 13:32:20','2019-10-17 13:09:33'),
 (2,'Carlos Magno','346.968.895-60','55.666.999/5','Grupo','2019-10-10 13:33:38','2019-10-10 13:33:38'),
 (3,'Carlos Magno','345.582.758-20','11.222.333/4','Combo','2019-10-10 13:34:08','2019-10-17 13:12:06');
/*!40000 ALTER TABLE `instrutors` ENABLE KEYS */;


--
-- Definition of table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES 
 (1,'2014_10_12_000000_create_users_table',1),
 (2,'2014_10_12_100000_create_password_resets_table',1),
 (3,'2019_09_18_121441_create_alunos_table',1),
 (4,'2019_09_23_121348_create_instrutors_table',1),
 (5,'2019_10_09_190229_create_pagamentos_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


--
-- Definition of table `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE `pagamentos` (
  `id_Pagamento` int(10) unsigned NOT NULL DEFAULT '0',
  `aluno_Matricula` int(10) unsigned NOT NULL DEFAULT '0',
  `Tipo` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DataPag` date DEFAULT NULL,
  `DataVenc` date DEFAULT NULL,
  `Valor` double(8,2) NOT NULL,
  PRIMARY KEY (`id_Pagamento`),
  KEY `pagamentos-alunos aluno_Matricula-Matricula` (`aluno_Matricula`),
  CONSTRAINT `pagamentos-alunos aluno_Matricula-Matricula` FOREIGN KEY (`aluno_Matricula`) REFERENCES `alunos` (`Matricula`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagamentos`
--

/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
INSERT INTO `pagamentos` (`id_Pagamento`,`aluno_Matricula`,`Tipo`,`DataPag`,`DataVenc`,`Valor`) VALUES 
 (1,1,'A',NULL,'2019-10-01',150.00),
 (2,2,'A',NULL,'2019-10-10',200.00);
/*!40000 ALTER TABLE `pagamentos` ENABLE KEYS */;


--
-- Definition of table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipos` enum('Recepcionista','Aluno','Instrutor','Gerente') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aluno',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`name`,`email`,`email_verified_at`,`password`,`Tipos`,`remember_token`,`created_at`,`updated_at`) VALUES 
 (1,'Gerente','gerente@email.com',NULL,'$2y$10$aB1Qcvega.9L6U4/2SEjweJuD8m5yUQQNMk27KFFqVNwx1ntoqgWa','Gerente','8iGNO98ZjcAxxGFNPEeRsq3IKdak2Gs1cmPUtEkg1x0gkVtNsiTRolfd4oea',NULL,NULL),
 (2,'Recepcionista','recepcionista@email.com',NULL,'$2y$10$a7QDnZVThvDxJQezln4k2OeiqfjO5w92.oplpDYKoCnypzE3pNq32','Recepcionista',NULL,NULL,NULL),
 (3,'Instrutor','instrutor@email.com',NULL,'$2y$10$PsWusPjfbRzehkao5S9cveOjLG82njBCkJeK0rF9NI6F2vQa1hLbK','Instrutor',NULL,NULL,NULL),
 (4,'Aluno','aluno@email.com',NULL,'$2y$10$BtSbmyBQyyNxYHuO7jCr5OHuq1KGz/BYZt6h/JovWJavvHWuPJgwO','Aluno',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
