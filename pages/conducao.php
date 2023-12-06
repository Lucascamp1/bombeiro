<?php
    include('conexao.php');
    session_start();
    $id_info_paciente = $_SESSION['id_info_paciente'];
    $idAtendente = ($_SESSION['id_atendente']);
   
    $formaConducao = $_POST['formaConducao'];

    $Updatequery = "UPDATE info_paciente SET forma_conducao = '$formaConducao' WHERE id_info_paciente = '$id_info_paciente'";

    $Updatestmt = $conn->prepare($Updatequery);

    $Updatestmt->execute();
?>
