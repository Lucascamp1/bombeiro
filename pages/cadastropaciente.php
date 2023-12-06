<?php
    
    include('conexao.php');
    session_start();
    $idAtendente = ($_SESSION['id_atendente']);
    
    //global $conn;
    // ESTA PARTE VAI PARA info_paciente
    $nomePaciente = isset($_POST['nomePaciente']) ? $_POST['nomePaciente'] : '';
    $idadePaciente = isset($_POST['idadePaciente']) ? $_POST['idadePaciente'] : '';
    $sexoPaciente = isset($_POST['sexoPaciente']) ? $_POST['sexoPaciente'] : '';
    $rgCpfPaciente = isset($_POST['rgcpfPaciente']) ? $_POST['rgcpfPaciente'] : '';
    $nomeAcompanhante = isset($_POST['nomeAcompanhante']) ? $_POST['nomeAcompanhante'] : '';
    $idadeAcompanhante = isset($_POST['idadeAcompanhante']) ? $_POST['idadeAcompanhante'] : '';
    // $vitimaEra = isset($_POST['vitimaEra']) ? implode(", ", (array)$_POST['vitimaEra']) : '';
    // $formaConducao = isset($_POST['formaConducao']) ? $_POST['formaConducao'] : '';

    $query = "INSERT INTO info_paciente (id_atendente, nome_paciente, idade_paciente, sexo_paciente, rg_cpf_paciente, nome_acompanhante, idade_acompanhante)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($query);
    
    // Bind parameters
    $stmt->bind_param("issssss", $idAtendente, $nomePaciente, $idadePaciente, $sexoPaciente, $rgCpfPaciente, $nomeAcompanhante, $idadeAcompanhante);
    
    $stmt->execute();
        $_SESSION['id_info_paciente'] = $conn->insert_id;
        
        header("Location: vitimaera.html");
?>