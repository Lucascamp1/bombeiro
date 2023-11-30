<?php

    include('dbconnect.php');

    $nome = $_POST['nome'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $matricula = $_POST['matricula'];
    $dataNascimento = $_POST['dataNascimento'];
    
    $sql = "INSERT INTO usuario (nome_bombeiro, matricula_bombeiro, username_bombeiro, email_bombeiro, data_nascimento_bombeiro, password_bombeiro); 
    VALUES ('$nome', '$matricula', '$username', '$email', '$dataNascimento', '$senha',)";

    $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    }
?>