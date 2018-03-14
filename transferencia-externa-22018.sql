-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2017 at 04:23 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.1.12-2+0~20171207160618.12+stretch~1.gbp5c91f3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transferencia-externa-22018`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `inicio_inscricoes` datetime NOT NULL,
  `termino_inscricoes` datetime NOT NULL,
  `inicio_resultado_preliminar` datetime NOT NULL,
  `termino_resultado_preliminar` datetime NOT NULL,
  `inicio_resultado_final` datetime NOT NULL,
  `termino_resultado_final` datetime NOT NULL,
  `inicio_recursos_etapa1` datetime NOT NULL,
  `inicio_recursos_etapa2` datetime NOT NULL,
  `termino_recursos_etapa1` datetime NOT NULL,
  `termino_recursos_etapa2` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `inicio_inscricoes`, `termino_inscricoes`, `inicio_resultado_preliminar`, `termino_resultado_preliminar`, `inicio_resultado_final`, `termino_resultado_final`, `inicio_recursos_etapa1`, `inicio_recursos_etapa2`, `termino_recursos_etapa1`, `termino_recursos_etapa2`, `created_at`, `updated_at`) VALUES
(1, '2017-09-29 19:00:00', '2018-09-29 18:00:00', '2017-11-12 20:00:00', '2017-11-07 18:00:00', '2017-11-27 18:00:00', '2017-12-31 18:00:00', '2017-10-24 08:00:00', '2017-10-24 08:00:00', '2017-09-30 18:00:00', '2017-09-30 18:00:00', NULL, '2017-11-28 16:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PEDAGOGIA/LICENCIATURA', NULL, '2017-08-30 18:12:36', NULL),
(2, 'QUIMICA/LICENCIATURA', '2017-08-30 18:12:26', '2017-08-30 18:12:50', NULL),
(3, 'ADMINISTRAÇÃO/BACHARELADO', '2017-08-30 18:13:02', '2017-08-30 19:19:03', NULL),
(4, 'AGRONOMIA/BACHARELADO', '2017-08-30 18:13:18', '2017-08-30 19:05:27', NULL),
(5, 'ZOOTECNIA/BACHARELADO', '2017-08-30 18:13:30', '2017-08-30 18:13:30', NULL),
(6, 'EDUCAÇÃO FÍSICA/LICENCIATURA', '2017-08-30 18:13:45', '2017-08-30 18:13:45', NULL),
(7, 'LETRAS INGLÊS/LICENCIATURA', '2017-08-30 18:14:00', '2017-08-30 18:14:00', NULL),
(8, 'LETRAS PORTUGUÊS/LICENCIATURA', '2017-08-30 18:14:13', '2017-08-30 18:14:13', NULL),
(9, 'MATEMÁTICA/LICENCIATURA', '2017-08-30 18:14:25', '2017-08-30 18:14:25', NULL),
(10, 'ARTES/MÚSICA/LICENCIATURA', '2017-08-30 18:14:55', '2017-08-30 18:16:08', NULL),
(11, 'ARTES/TEATRO/LICENCIATURA', '2017-08-30 18:15:12', '2017-08-30 18:15:12', NULL),
(12, 'ARTES/VISUAIS/LICENCIATURA', '2017-08-30 18:15:29', '2017-08-30 18:15:29', NULL),
(13, 'CIÊNCIAS BIOLÓGICAS/BACHARELADO', '2017-08-30 18:15:59', '2017-08-30 18:15:59', NULL),
(14, 'CIÊNCIAS BIOLÓGICAS/LICENCIATURA', '2017-08-30 18:16:29', '2017-08-30 18:16:29', NULL),
(15, 'CIÊNCIAS CONTÁBEIS/BACHARELADO', '2017-08-30 18:16:55', '2017-08-30 18:16:55', NULL),
(16, 'CIÊNCIAS ECONÔMICAS/BACHARELADO', '2017-08-30 18:17:17', '2017-08-30 18:17:17', NULL),
(17, 'CIÊNCIAS DA RELIGIÃO/LICENCIATURA', '2017-08-30 18:17:30', '2017-08-30 18:17:30', NULL),
(18, 'CIÊNCIAS SOCIAIS/LICENCIATURA', '2017-08-30 18:17:41', '2017-08-30 18:17:41', NULL),
(19, 'EDUCAÇÃO FÍSICA/BACHARELADO', '2017-08-30 18:20:16', '2017-08-30 18:20:16', NULL),
(20, 'ENFERMAGEM/BACHARELADO', '2017-08-30 18:20:39', '2017-08-30 18:20:39', NULL),
(21, 'ENGENHARIA CIVIL/BACHARELADO', '2017-08-30 18:20:52', '2017-08-30 18:20:52', NULL),
(22, 'ENGENHARIA DE SISTEMAS/BACHARELADO', '2017-08-30 18:21:10', '2017-08-30 18:21:10', NULL),
(23, 'FILOSOFIA/LICENCIATURA', '2017-08-30 18:21:25', '2017-08-30 18:21:52', NULL),
(24, 'GEOGRAFIA/LICENCIATURA', '2017-08-30 18:21:47', '2017-08-30 18:21:47', NULL),
(25, 'HISTÓRIA/LICENCIATURA', '2017-08-30 18:22:23', '2017-08-30 18:22:23', NULL),
(26, 'LETRAS ESPANHOL/LICENCIATURA', '2017-08-30 18:22:35', '2017-08-30 18:22:35', NULL),
(27, 'MEDICINA/BACHARELADO', '2017-08-30 18:23:22', '2017-08-30 18:23:22', NULL),
(28, 'ODONTOLOGIA/BACHARELADO', '2017-08-30 18:23:33', '2017-08-30 18:23:33', NULL),
(29, 'SISTEMAS DE INFORMAÇÃO/BACHARELADO', '2017-08-30 18:23:49', '2017-08-30 18:23:49', NULL),
(30, 'SERVIÇO SOCIAL/BACHARELADO', '2017-08-30 18:24:04', '2017-08-30 18:24:04', NULL),
(31, 'TECNOLOGIA EM AGRONEGÓCIO/TECNÓLOGO', '2017-08-30 18:24:19', '2017-08-30 18:24:32', NULL),
(32, 'TECNOLOGIA EM GESTÃO PÚBLICA/TECNÓLOGO', '2017-08-30 18:24:51', '2017-08-30 18:24:51', NULL),
(33, 'LETRAS/PORTUGUÊS', '2017-12-27 17:54:19', '2017-12-27 17:54:19', NULL),
(34, 'DIREITO', '2017-12-27 17:54:26', '2017-12-27 17:54:26', NULL),
(35, 'GEOGRAFIA', '2017-12-27 17:55:06', '2017-12-27 17:55:06', NULL),
(36, 'CIÊNCIAS CONTÁBEIS', '2017-12-27 17:55:30', '2017-12-27 17:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cursos_polos`
--

CREATE TABLE `cursos_polos` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso_id` int(10) UNSIGNED NOT NULL,
  `polo_id` int(10) UNSIGNED NOT NULL,
  `vagas` int(10) UNSIGNED NOT NULL,
  `periodo` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` enum('Diurno','Noturno','Matutino','Vespertino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cursos_polos`
--

INSERT INTO `cursos_polos` (`id`, `curso_id`, `polo_id`, `vagas`, `periodo`, `turno`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 33, 1, 16, '5', 'Noturno', '2017-12-27 17:56:07', '2017-12-27 17:56:07', NULL),
(2, 33, 1, 17, '7', 'Noturno', '2017-12-27 17:56:53', '2017-12-27 17:56:53', NULL),
(3, 34, 8, 5, '4', 'Matutino', '2017-12-27 17:57:36', '2017-12-27 17:57:36', NULL),
(4, 34, 8, 4, '5', 'Matutino', '2017-12-27 17:58:14', '2017-12-27 17:58:14', NULL),
(5, 34, 8, 2, '6', 'Matutino', '2017-12-27 17:59:02', '2017-12-27 17:59:02', NULL),
(6, 34, 8, 5, '7', 'Matutino', '2017-12-27 17:59:37', '2017-12-27 17:59:37', NULL),
(7, 34, 8, 3, '8', 'Matutino', '2017-12-27 18:00:22', '2017-12-27 18:00:22', NULL),
(8, 34, 8, 2, '9', 'Matutino', '2017-12-27 18:00:59', '2017-12-27 18:00:59', NULL),
(9, 34, 8, 3, '10', 'Matutino', '2017-12-27 18:01:41', '2017-12-27 18:01:41', NULL),
(10, 34, 8, 5, '4', 'Noturno', '2017-12-27 18:02:27', '2017-12-27 18:02:27', NULL),
(11, 34, 8, 2, '5', 'Noturno', '2017-12-27 18:03:11', '2017-12-27 18:03:38', NULL),
(12, 34, 8, 5, '6', 'Noturno', '2017-12-27 18:04:22', '2017-12-27 18:04:22', NULL),
(13, 34, 8, 3, '7', 'Noturno', '2017-12-27 18:11:12', '2017-12-27 18:11:12', NULL),
(14, 35, 8, 20, '4', 'Matutino', '2017-12-27 18:11:51', '2017-12-27 18:12:34', NULL),
(15, 35, 8, 3, '3', 'Noturno', '2017-12-27 18:13:20', '2017-12-27 18:13:20', NULL),
(16, 35, 10, 25, '4', 'Noturno', '2017-12-27 18:14:03', '2017-12-27 18:14:03', NULL),
(17, 35, 10, 16, '7', 'Noturno', '2017-12-27 18:15:06', '2017-12-27 18:15:06', NULL),
(18, 36, 13, 4, '3', 'Noturno', '2017-12-27 18:15:51', '2017-12-27 18:15:51', NULL),
(19, 36, 13, 6, '5', 'Noturno', '2017-12-27 18:16:29', '2017-12-27 18:17:35', NULL),
(20, 36, 13, 8, '7', 'Noturno', '2017-12-27 18:18:11', '2017-12-27 18:18:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dae_import`
--

CREATE TABLE `dae_import` (
  `dae` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indeferidos`
--

CREATE TABLE `indeferidos` (
  `cursos_polos_id` int(10) UNSIGNED NOT NULL,
  `usuarios_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inscricoes`
--

CREATE TABLE `inscricoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuarios_id` int(10) UNSIGNED NOT NULL,
  `cursos_polos_id` int(10) UNSIGNED NOT NULL,
  `status_dae` tinyint(4) NOT NULL DEFAULT '0',
  `num_dae` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `mes_referencia` date DEFAULT NULL,
  `status_envelope1` tinyint(4) NOT NULL DEFAULT '0',
  `status_envelope2` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_usuarios_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2017_08_22_172729_create_cursos_table', 1),
(12, '2017_08_22_173017_create_polos_table', 1),
(13, '2017_08_22_173228_create_cursos_polos_table', 1),
(14, '2017_08_22_174254_create_configs_table', 1),
(15, '2017_08_22_174910_create_inscricoes_table', 1),
(16, '2017_08_22_181337_create_recursos_table', 1),
(17, '2017_10_02_122900_create_resultado_preliminar_table', 2),
(18, '2017_10_02_123026_create_indeferidos_table', 2),
(19, '2017_10_04_111811_create_retificacoes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polos`
--

CREATE TABLE `polos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polos`
--

INSERT INTO `polos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ALMENARA', NULL, '2017-08-30 18:25:33', NULL),
(2, 'BOCAIÚVA', '2017-08-30 18:50:58', '2017-08-30 18:50:58', NULL),
(3, 'BRASÍLIA DE MINAS', '2017-08-30 18:51:03', '2017-08-30 18:51:03', NULL),
(4, 'ESPINOSA', '2017-08-30 18:51:10', '2017-08-30 18:51:10', NULL),
(5, 'JANAÚBA', '2017-08-30 18:51:15', '2017-08-30 18:51:15', NULL),
(6, 'JANUÁRIA', '2017-08-30 18:51:28', '2017-08-30 18:51:28', NULL),
(7, 'JOAÍMA', '2017-08-30 18:51:32', '2017-08-30 18:51:32', NULL),
(8, 'MONTES CLAROS', '2017-08-30 18:51:41', '2017-08-30 18:51:41', NULL),
(9, 'PARACATU', '2017-08-30 18:51:55', '2017-08-30 18:51:55', NULL),
(10, 'PIRAPORA', '2017-08-30 18:52:00', '2017-08-30 18:52:00', NULL),
(11, 'POMPÉU', '2017-08-30 18:52:06', '2017-08-30 18:52:06', NULL),
(12, 'SÃO FRANSCISCO', '2017-08-30 18:52:12', '2017-08-30 18:52:12', NULL),
(13, 'SALINAS', '2017-12-27 17:53:34', '2017-12-27 17:53:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inscricoes_id` int(10) UNSIGNED NOT NULL,
  `motivo_indeferimento_etapa1` text COLLATE utf8mb4_unicode_ci,
  `motivo_indeferimento_etapa2` text COLLATE utf8mb4_unicode_ci,
  `recurso_etapa1` text COLLATE utf8mb4_unicode_ci,
  `recurso_etapa2` text COLLATE utf8mb4_unicode_ci,
  `resposta_recurso_etapa1` text COLLATE utf8mb4_unicode_ci,
  `resposta_recurso_etapa2` text COLLATE utf8mb4_unicode_ci,
  `autor_resposta_recurso_etapa1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor_resposta_recurso_etapa2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_recurso_etapa1` datetime DEFAULT NULL,
  `data_recurso_etapa2` datetime DEFAULT NULL,
  `data_resposta_recurso_etapa1` datetime DEFAULT NULL,
  `data_resposta_recurso_etapa2` datetime DEFAULT NULL,
  `enviou_recurso` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resultado_preliminar`
--

CREATE TABLE `resultado_preliminar` (
  `cursos_polos_id` int(10) UNSIGNED NOT NULL,
  `usuarios_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `retificacoes`
--

CREATE TABLE `retificacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cursos_polos_id` int(10) UNSIGNED NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_exped` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissao` int(11) NOT NULL DEFAULT '1',
  `cep` int(11) DEFAULT NULL,
  `logradouro` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` double(8,2) DEFAULT NULL COMMENT 'Media aritmética das disciplinas cursadas pelo candidato',
  `qtd_disc_falta` int(11) DEFAULT NULL COMMENT 'Quantidade de disciplinas a serem cumpridas',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `password`, `cpf`, `rg`, `org_exped`, `data_nasc`, `telefone`, `permissao`, `cep`, `logradouro`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `media`, `qtd_disc_falta`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fellipe Geraldo Pereira Botelho', 'fellipe.botelho@unimontes.br', '$2y$10$8o7.FadG90P1pHyHFlRQKefKXS4S.fzFpD/bLa06oA06EYlgtWuVa', '11122233344', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DueFQ69NmhadFQvc951jgOsnGtIBpOAtHWCHYH9JT0h0azPvcKfmV8wN9ngf', NULL, NULL, NULL),
(5, 'CEPS', 'ceps@unimontes.br', '$2y$10$n1KImyizWE5R6EtwD48/XuQymxTEG97UEM0IVgqgbuOzWo0luQlJ2', '00000000000', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1ga2fNK9iAnAiIampN7RoUD7VSeig5alofdhnsv0RIcHV3t1bix4jAvpjDUo', '2017-09-06 20:27:29', '2017-09-06 20:27:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos_polos`
--
ALTER TABLE `cursos_polos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_polos_curso_id_foreign` (`curso_id`),
  ADD KEY `cursos_polos_polo_id_foreign` (`polo_id`);

--
-- Indexes for table `indeferidos`
--
ALTER TABLE `indeferidos`
  ADD KEY `indeferidos_cursos_polos_id_foreign` (`cursos_polos_id`),
  ADD KEY `indeferidos_usuarios_id_foreign` (`usuarios_id`);

--
-- Indexes for table `inscricoes`
--
ALTER TABLE `inscricoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inscricoes_usuarios_id_foreign` (`usuarios_id`),
  ADD KEY `inscricoes_cursos_polos_id_foreign` (`cursos_polos_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `polos`
--
ALTER TABLE `polos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recursos_inscricoes_id_unique` (`inscricoes_id`);

--
-- Indexes for table `resultado_preliminar`
--
ALTER TABLE `resultado_preliminar`
  ADD KEY `resultado_preliminar_cursos_polos_id_foreign` (`cursos_polos_id`),
  ADD KEY `resultado_preliminar_usuarios_id_foreign` (`usuarios_id`);

--
-- Indexes for table `retificacoes`
--
ALTER TABLE `retificacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `retificacoes_cursos_polos_id_foreign` (`cursos_polos_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`),
  ADD UNIQUE KEY `usuarios_cpf_unique` (`cpf`),
  ADD UNIQUE KEY `usuarios_rg_unique` (`rg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `inscricoes`
--
ALTER TABLE `inscricoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `polos`
--
ALTER TABLE `polos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `retificacoes`
--
ALTER TABLE `retificacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cursos_polos`
--
ALTER TABLE `cursos_polos`
  ADD CONSTRAINT `cursos_polos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `cursos_polos_polo_id_foreign` FOREIGN KEY (`polo_id`) REFERENCES `polos` (`id`);

--
-- Constraints for table `indeferidos`
--
ALTER TABLE `indeferidos`
  ADD CONSTRAINT `indeferidos_cursos_polos_id_foreign` FOREIGN KEY (`cursos_polos_id`) REFERENCES `cursos_polos` (`id`),
  ADD CONSTRAINT `indeferidos_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `inscricoes`
--
ALTER TABLE `inscricoes`
  ADD CONSTRAINT `inscricoes_cursos_polos_id_foreign` FOREIGN KEY (`cursos_polos_id`) REFERENCES `cursos_polos` (`id`),
  ADD CONSTRAINT `inscricoes_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_inscricoes_id_foreign` FOREIGN KEY (`inscricoes_id`) REFERENCES `inscricoes` (`id`);

--
-- Constraints for table `resultado_preliminar`
--
ALTER TABLE `resultado_preliminar`
  ADD CONSTRAINT `resultado_preliminar_cursos_polos_id_foreign` FOREIGN KEY (`cursos_polos_id`) REFERENCES `cursos_polos` (`id`),
  ADD CONSTRAINT `resultado_preliminar_usuarios_id_foreign` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `retificacoes`
--
ALTER TABLE `retificacoes`
  ADD CONSTRAINT `retificacoes_cursos_polos_id_foreign` FOREIGN KEY (`cursos_polos_id`) REFERENCES `cursos_polos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
