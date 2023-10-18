<?php
    include('dbconnect.php'); /*arquivo de conexão com o bando de dados*/

    if(isset($_POST['submit-button'])) {
        $username = $_POST['username']; /*name do email-input*/
        $senha = $_POST['password']; /*name do password-input*/

        // Prevenindo SQL Injection
        $username = mysqli_real_escape_string($conn, $username);
        $senha = mysqli_real_escape_string($conn, $senha);
        
        // Verificando se o usuário já existe
        $sql = "SELECT * FROM usuario WHERE username_bombeiro = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: register.html?error=userexists"); /*local para onde deseja redirecionar o usuário em caso de erro*/
        } else {
            // Inserindo novo usuário no banco de dados
            $sql = "INSERT INTO usuario (username_bombeiro, password_bombeiro) VALUES ('$username', '$senha')";
            if (mysqli_query($conn, $sql)) {
                header("Location: C:\xampp\htdocs\bombeiro\login"); /*local para onde deseja redirecionar o usuário após cadastro bem-sucedido*/
            } else {
                header("Location: register.html?error=inserterror"); /*local para onde deseja redirecionar o usuário em caso de erro*/
            }
        }
    }

    mysqli_close($conn);
?>