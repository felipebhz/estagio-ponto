-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2020 at 10:07 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `estagio_ponto`
--

-- --------------------------------------------------------

--
-- Table structure for table `ep_registro`
--

CREATE TABLE `ep_registro` (
  `id` int(11) UNSIGNED NOT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida_almoco` time DEFAULT NULL,
  `hora_entrada_almoco` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `data_registro` date DEFAULT NULL,
  `ep_usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ep_registro`
--

INSERT INTO `ep_registro` (`id`, `hora_entrada`, `hora_saida_almoco`, `hora_entrada_almoco`, `hora_saida`, `data_registro`, `ep_usuario_id`) VALUES
(8, '09:11:00', '13:00:00', '00:00:00', '00:00:00', '2020-03-09', 2),
(10, '11:28:00', '00:00:00', '00:00:00', '21:00:00', '2020-03-09', 3),
(11, '09:50:00', '00:00:00', '00:00:00', '00:00:00', '2020-03-10', 2),
(15, '13:00:00', '00:00:00', '00:00:00', '00:00:00', '2020-03-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ep_usuario`
--

CREATE TABLE `ep_usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `setor` varchar(45) DEFAULT NULL,
  `carga_horaria` int(10) UNSIGNED NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ep_usuario`
--

INSERT INTO `ep_usuario` (`id`, `username`, `email`, `password`, `nome_completo`, `setor`, `carga_horaria`, `status`, `created_at`) VALUES
(2, 'felipebhz', 'felipebhz@outlook.com', '$2y$10$FbYT2VPvQ9.WvTI0CYkjMeH54z80M52L/mZVCDAfqO/vKO0oRqF5.', 'Felipe dos Santos Ferreira', 'Web Development', 0, 1, '2020-03-08 01:28:20'),
(3, 'marcela', 'marcela@zattar.com', '$2y$10$TZyF1YDo5bQIu51of3Xzluw.NZaJ/Rm/tRe3lAMRPInz0vFpBecRS', 'Marcela Zattar', 'Compras', 0, 1, '2020-03-08 14:13:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ep_registro`
--
ALTER TABLE `ep_registro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ep_usuario`
--
ALTER TABLE `ep_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ep_usuario_email_uindex` (`email`),
  ADD UNIQUE KEY `ep_usuario_username_uindex` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ep_registro`
--
ALTER TABLE `ep_registro`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ep_usuario`
--
ALTER TABLE `ep_usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;