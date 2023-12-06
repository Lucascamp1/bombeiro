<?php
    include('conexao.php');
    session_start();
    //$idAtendente = ($_SESSION['id_atendente']);
    $id_info_paciente = $_SESSION['id_info_paciente'];
   
    $vitimaEra = $_POST['vitimaEra'];
    // $formaConducao = isset($_POST['formaConducao']) ? $_POST['formaConducao'] : '';

    $query = "UPDATE info_paciente SET vitima_era = '$vitimaEra' WHERE id_info_paciente = '$id_info_paciente'";

    // Prepare the statement
    $stmt = $conn->prepare($query);
 
    // Bind parameters
    // $stmt->bind_param("s", $idAtendente, $nomePaciente, $idadePaciente, $sexoPaciente, $rgCpfPaciente, $nomeAcompanhante, $idadeAcompanhante);
    

    $stmt->execute();
        $_SESSION['id_situacao_paciente'] = $conn->insert_id;
        header("Location: conducao.html");
?>