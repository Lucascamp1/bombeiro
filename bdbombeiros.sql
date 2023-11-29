-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2023 às 12:51
-- Versão do servidor: 8.0.21
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdbombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhante`
--

CREATE TABLE `acompanhante` (
  `id_acompanhante` int NOT NULL,
  `nome_acompanhante` varchar(100) NOT NULL,
  `idade_acompanhante` int NOT NULL,
  `sexo_acompanhante` varchar(100) NOT NULL,
  `cpf_acompanhante` varchar(100) NOT NULL,
  `rg_acompanhante` varchar(100) NOT NULL,
  `telefone_acompanhante` varchar(100) NOT NULL,
  `id_paciente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese_gestacional`
--

CREATE TABLE `anamnese_gestacional` (
  `periodogestacao_gestacinal` varchar(100) NOT NULL,
  `fezprenatal_gestacinal` tinyint(1) NOT NULL,
  `nomemedico_gestacinal` varchar(100) NOT NULL,
  `existepossibilidadedecomplicacoes_gestacinal` tinyint(1) NOT NULL,
  `primeirofilho_gestacinal` tinyint(1) NOT NULL,
  `quantosfilhos_gestacinal` varchar(100) NOT NULL,
  `horariodoiniciocontracoes_gestacinal` time(6) NOT NULL,
  `duracaocontracoes_gestacinal` varchar(100) NOT NULL,
  `intervalocontracoes_gestacinal` varchar(100) NOT NULL,
  `sentepressaoregiaoquadril_gestacinal` tinyint(1) NOT NULL,
  `jahouverupturabolsa_gestacinal` tinyint(1) NOT NULL,
  `foifeitoinspecaovisual_gestacinal` tinyint(1) NOT NULL,
  `partorealizado_gestacinal` tinyint(1) NOT NULL,
  `horarionascimento_gestacinal` time(6) NOT NULL,
  `sexobebe_gestacinal` tinyint(1) NOT NULL,
  `nomebebe_gestacinal` varchar(100) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese_medica`
--

CREATE TABLE `anamnese_medica` (
  `oqaconteceu_anamnese` varchar(100) NOT NULL,
  `aconteceuoutrasvezes_anamnese` tinyint(1) NOT NULL,
  `quantotempoaconteceu_anamnese` varchar(100) NOT NULL,
  `possuiproblemadesaude_anamnese` tinyint(1) NOT NULL,
  `quaisproblemassaude_anamnese` varchar(100) NOT NULL,
  `fazusodemedicacao_anamnese` tinyint(1) NOT NULL,
  `quaismedicamentos_anamnese` varchar(100) NOT NULL,
  `horarioultimamedicacao_anamnese` time(6) NOT NULL,
  `alergicoaalgo_anamnese` tinyint(1) NOT NULL,
  `especifiquealergio_anamnese` varchar(100) NOT NULL,
  `ingeriualimentoultimasseishrs_anamnese` tinyint(1) NOT NULL,
  `quehorasingeriualimento_anamnese` time(6) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cinematica`
--

CREATE TABLE `cinematica` (
  `disturbiocomportamento_cinematica` tinyint(1) NOT NULL,
  `encontradodecapacete_cinematica` tinyint(1) NOT NULL,
  `parabrisasavariado_cinematica` tinyint(1) NOT NULL,
  `caminhandonacena_cinematica` tinyint(1) NOT NULL,
  `painelavariado_cinematica` tinyint(1) NOT NULL,
  `volantetorcido_cinematica` tinyint(1) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conducao`
--

CREATE TABLE `conducao` (
  `sentada_conducao` tinyint(1) NOT NULL,
  `semisentada_conducao` tinyint(1) NOT NULL,
  `deitada_conducao` tinyint(1) NOT NULL,
  `transportecritico_conducao` tinyint(1) NOT NULL,
  `transporteinstavel_conducao` tinyint(1) NOT NULL,
  `transporteestavel_conducao` tinyint(1) NOT NULL,
  `transportepotencialmentestavel_conducao` tinyint(1) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetos_recolhidos`
--

CREATE TABLE `objetos_recolhidos` (
  `objetos_recolhidos` varchar(600) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `observacoes_importantes`
--

CREATE TABLE `observacoes_importantes` (
  `observacoes_importantes` varchar(600) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `numero_ocorrencia` int NOT NULL,
  `local_ocorrencia` varchar(100) NOT NULL,
  `numero_usb` int NOT NULL,
  `numero_despachante` int NOT NULL,
  `hch_ocorrencia` int NOT NULL,
  `kmfinal_ocorrencia` int NOT NULL,
  `codsiasus_ocorrencia` int NOT NULL,
  `m_ocorrencia` varchar(100) NOT NULL,
  `s1_ocorrencia` varchar(100) NOT NULL,
  `s2_ocorrencia` varchar(100) NOT NULL,
  `s3_ocorrencia` varchar(100) NOT NULL,
  `demandante_ocorrencia` varchar(100) NOT NULL,
  `codir_ocorrencia` tinyint(1) NOT NULL,
  `codps_ocorrencia` tinyint(1) NOT NULL,
  `dataocorrencia_ocorrencia` date NOT NULL,
  `id_paciente2` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int NOT NULL,
  `nome_paciente` varchar(100) NOT NULL,
  `idade_paciente` int NOT NULL,
  `sexo_paciente` varchar(100) NOT NULL,
  `cpf_paciente` varchar(100) NOT NULL,
  `rg_paciente` varchar(100) NOT NULL,
  `telefone_paciente` varchar(100) NOT NULL,
  `hospital_paciente` varchar(100) NOT NULL,
  `id_acompanhante` int NOT NULL,
  `id_numero_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinaisesintomas`
--

CREATE TABLE `sinaisesintomas` (
  `abdomemsensivelourigido_sinaisesintomas` tinyint(1) NOT NULL,
  `agitacao_sinaisesintomas` tinyint(1) NOT NULL,
  `anginadepeito_sinaisesintomas` tinyint(1) NOT NULL,
  `bradicardia_sinaisesintomas` tinyint(1) NOT NULL,
  `broncoaspirado_sinaisesintomas` tinyint(1) NOT NULL,
  `cianose_sinaisesintomas` tinyint(1) NOT NULL,
  `decortificacao_sinaisesintomas` tinyint(1) NOT NULL,
  `descerebracao_sinaisesintomas` tinyint(1) NOT NULL,
  `desviodetraqueia_sinaisesintomas` tinyint(1) NOT NULL,
  `dorlocal_sinaisesintomas` tinyint(1) NOT NULL,
  `enfisemasubcutaneo_sinaisesintomas` tinyint(1) NOT NULL,
  `facepalida_sinaisesintomas` tinyint(1) NOT NULL,
  `hipertensao_sinaisesintomas` tinyint(1) NOT NULL,
  `nauseasevomitos_sinaisesintomas` tinyint(1) NOT NULL,
  `obito_sinaisesintomas` tinyint(1) NOT NULL,
  `otorragia_sinaisesintomas` tinyint(1) NOT NULL,
  `parada_sinaisesintomas` tinyint(1) NOT NULL,
  `pruridopele_sinaisesintomas` tinyint(1) NOT NULL,
  `sede_sinaisesintomas` tinyint(1) NOT NULL,
  `sinaldeguaxinim_sinaisesintomas` tinyint(1) NOT NULL,
  `taquipneia_sinaisesintomas` tinyint(1) NOT NULL,
  `tontura_sinaisesintomas` tinyint(1) NOT NULL,
  `afundamentocranio_sinaisesintomas` tinyint(1) NOT NULL,
  `amnesia_sinaisesintomas` tinyint(1) NOT NULL,
  `apneia_sinaisesintomas` tinyint(1) NOT NULL,
  `bradipneia_sinaisesintomas` tinyint(1) NOT NULL,
  `cefaleia_sinaisesintomas` tinyint(1) NOT NULL,
  `convulsao_sinaisesintomas` tinyint(1) NOT NULL,
  `deformidade_sinaisesintomas` tinyint(1) NOT NULL,
  `desmaio_sinaisesintomas` tinyint(1) NOT NULL,
  `dispneia_sinaisesintomas` tinyint(1) NOT NULL,
  `edema_sinaisesintomas` tinyint(1) NOT NULL,
  `entasedejugular_sinaisesintomas` tinyint(1) NOT NULL,
  `homorragia_sinaisesintomas` tinyint(1) NOT NULL,
  `hipotensao_sinaisesintomas` tinyint(1) NOT NULL,
  `nasoragia_sinaisesintomas` tinyint(1) NOT NULL,
  `otorreia_sinaisesintomas` tinyint(1) NOT NULL,
  `ovace_sinaisesintomas` tinyint(1) NOT NULL,
  `priaprismo_sinaisesintomas` tinyint(1) NOT NULL,
  `pupilas_sinaisesintomas` tinyint(1) NOT NULL,
  `battle_sinaisesintomas` tinyint(1) NOT NULL,
  `suadores_sinaisesintomas` tinyint(1) NOT NULL,
  `taquicardia_sinaisesintomas` tinyint(1) NOT NULL,
  `outros_sinaisesintomas` varchar(500) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sinaisvitais`
--

CREATE TABLE `sinaisvitais` (
  `pressaoarterial_vitais` varchar(100) NOT NULL,
  `pulso_vitais` varchar(100) NOT NULL,
  `respiracao_vitais` varchar(100) NOT NULL,
  `saturacao_vitais` varchar(100) NOT NULL,
  `htg_vitais` varchar(100) NOT NULL,
  `temperatura_vitais` int NOT NULL,
  `perfusao_vitais` tinyint(1) NOT NULL,
  `normalanormal_vitais` tinyint(1) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaopatinete`
--

CREATE TABLE `situacaopatinete` (
  `inconsciente_situacao` tinyint(1) NOT NULL,
  `consciente_situacao` tinyint(1) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoocorrencia`
--

CREATE TABLE `tipoocorrencia` (
  `causadoporanimais_tipoocorrencia` tinyint(1) NOT NULL,
  `commeiodetransporte_tipoocorrencia` tinyint(1) NOT NULL,
  `desmonoramentooudeslizamento_tipoocorrencia` tinyint(1) NOT NULL,
  `emergenciamedica_tipoocorrencia` tinyint(1) NOT NULL,
  `quedaalturamaiorquedoismetros_tipoocorrencia` tinyint(1) NOT NULL,
  `tentativadesuicidio_tipoocorrencia` tinyint(1) NOT NULL,
  `quedapropriaaltura_tipoocorrencia` tinyint(1) NOT NULL,
  `afogamento_tipoocorrencia` tinyint(1) NOT NULL,
  `agressao_tipoocorrencia` tinyint(1) NOT NULL,
  `atropelamento_tipoocorrencia` tinyint(1) NOT NULL,
  `choqueeletrico_tipoocorrencia` tinyint(1) NOT NULL,
  `desabamento_tipoocorrencia` tinyint(1) NOT NULL,
  `domestico_tipoocorrencia` tinyint(1) NOT NULL,
  `esportivo_tipoocorrencia` tinyint(1) NOT NULL,
  `intoxicacao_tipoocorrencia` tinyint(1) NOT NULL,
  `quedabicicleta_tipoocorrencia` tinyint(1) NOT NULL,
  `quedamoto_tipoocorrencia` tinyint(1) NOT NULL,
  `quedanivelmaiordedoismetros_tipoocorrencia` tinyint(1) NOT NULL,
  `trabalho_tipoocorrencia` tinyint(1) NOT NULL,
  `transferencia_tipoocorrencia` tinyint(1) NOT NULL,
  `outros_tipoocorrencia` varchar(600) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome_bombeiro` varchar(100) NOT NULL,
  `matricula_bombeiro` int NOT NULL,
  `username_bombeiro` varchar(100) NOT NULL,
  `email_bombeiro` varchar(100) NOT NULL,
  `data_nascimento_bombeiro` date NOT NULL,
  `contato_bombeiro` varchar(100) NOT NULL,
  `password_bombeiro` varchar(100) NOT NULL,
  `genero_bombeiro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_bombeiro`, `matricula_bombeiro`, `username_bombeiro`, `email_bombeiro`, `data_nascimento_bombeiro`, `contato_bombeiro`, `password_bombeiro`, `genero_bombeiro`) VALUES
(1, 'Lucas', 1234, 'teste', 'lucas@gmail.com', '2023-10-05', '4799949015', '1234', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vitimaera`
--

CREATE TABLE `vitimaera` (
  `ciclista_vitimaera` tinyint(1) NOT NULL,
  `condutormoto_vitimaera` tinyint(1) NOT NULL,
  `gestante_vitimaera` tinyint(1) NOT NULL,
  `passbanfrente_vitimaera` tinyint(1) NOT NULL,
  `passmoto_vitimaera` tinyint(1) NOT NULL,
  `condutocarro_vitimaera` tinyint(1) NOT NULL,
  `clinico_vitimaera` tinyint(1) NOT NULL,
  `trauma_vitimaera` tinyint(1) NOT NULL,
  `passbantras_vitimaera` tinyint(1) NOT NULL,
  `pedestre_vitimaera` tinyint(1) NOT NULL,
  `id_ocorrencia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD PRIMARY KEY (`id_acompanhante`),
  ADD KEY `fk_id_paciente` (`id_paciente`);

--
-- Índices para tabela `anamnese_gestacional`
--
ALTER TABLE `anamnese_gestacional`
  ADD KEY `fk_id_ocorrencia2` (`id_ocorrencia`);

--
-- Índices para tabela `anamnese_medica`
--
ALTER TABLE `anamnese_medica`
  ADD KEY `fk_id_ocorrencia` (`id_ocorrencia`);

--
-- Índices para tabela `cinematica`
--
ALTER TABLE `cinematica`
  ADD KEY `fk_id_ocorrencia3` (`id_ocorrencia`);

--
-- Índices para tabela `conducao`
--
ALTER TABLE `conducao`
  ADD KEY `fk_id_ocorrencia4` (`id_ocorrencia`);

--
-- Índices para tabela `objetos_recolhidos`
--
ALTER TABLE `objetos_recolhidos`
  ADD KEY `fk_id_ocorrencia5` (`id_ocorrencia`);

--
-- Índices para tabela `observacoes_importantes`
--
ALTER TABLE `observacoes_importantes`
  ADD KEY `fk_id_ocorrencia6` (`id_ocorrencia`);

--
-- Índices para tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`numero_ocorrencia`),
  ADD KEY `fk_id_paciente2` (`id_paciente2`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `fk_id_acompanhante` (`id_acompanhante`),
  ADD KEY `fk_id_numero_ocorrencia` (`id_numero_ocorrencia`);

--
-- Índices para tabela `sinaisesintomas`
--
ALTER TABLE `sinaisesintomas`
  ADD KEY `fk_id_ocorrencia10` (`id_ocorrencia`);

--
-- Índices para tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  ADD KEY `fk_id_ocorrencia9` (`id_ocorrencia`);

--
-- Índices para tabela `situacaopatinete`
--
ALTER TABLE `situacaopatinete`
  ADD KEY `fk_id_ocorrencia11` (`id_ocorrencia`);

--
-- Índices para tabela `tipoocorrencia`
--
ALTER TABLE `tipoocorrencia`
  ADD KEY `fk_id_ocorrencia7` (`id_ocorrencia`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD KEY `fk_id_ocorrencia12` (`id_ocorrencia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  MODIFY `id_acompanhante` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `numero_ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acompanhante`
--
ALTER TABLE `acompanhante`
  ADD CONSTRAINT `fk_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `anamnese_gestacional`
--
ALTER TABLE `anamnese_gestacional`
  ADD CONSTRAINT `fk_id_ocorrencia2` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `anamnese_medica`
--
ALTER TABLE `anamnese_medica`
  ADD CONSTRAINT `fk_id_ocorrencia` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `cinematica`
--
ALTER TABLE `cinematica`
  ADD CONSTRAINT `fk_id_ocorrencia3` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `conducao`
--
ALTER TABLE `conducao`
  ADD CONSTRAINT `fk_id_ocorrencia4` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `objetos_recolhidos`
--
ALTER TABLE `objetos_recolhidos`
  ADD CONSTRAINT `fk_id_ocorrencia5` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `observacoes_importantes`
--
ALTER TABLE `observacoes_importantes`
  ADD CONSTRAINT `fk_id_ocorrencia6` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `fk_id_paciente2` FOREIGN KEY (`id_paciente2`) REFERENCES `paciente` (`id_paciente`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_id_acompanhante` FOREIGN KEY (`id_acompanhante`) REFERENCES `acompanhante` (`id_acompanhante`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_id_numero_ocorrencia` FOREIGN KEY (`id_numero_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `sinaisesintomas`
--
ALTER TABLE `sinaisesintomas`
  ADD CONSTRAINT `fk_id_ocorrencia10` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `sinaisvitais`
--
ALTER TABLE `sinaisvitais`
  ADD CONSTRAINT `fk_id_ocorrencia9` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `situacaopatinete`
--
ALTER TABLE `situacaopatinete`
  ADD CONSTRAINT `fk_id_ocorrencia11` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `tipoocorrencia`
--
ALTER TABLE `tipoocorrencia`
  ADD CONSTRAINT `fk_id_ocorrencia7` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Limitadores para a tabela `vitimaera`
--
ALTER TABLE `vitimaera`
  ADD CONSTRAINT `fk_id_ocorrencia12` FOREIGN KEY (`id_ocorrencia`) REFERENCES `ocorrencia` (`numero_ocorrencia`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
