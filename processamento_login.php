<?php
        include('dbconnect.php'); /*arquivo de conexão com o bando de dados*/

        if(isset($_POST['submit-button'])) {
            $username = $_POST['username']; /*name do email-input*/
            $senha = $_POST['password']; /*name do password-input*/
            
            $sql = "SELECT username_bombeiro, password_bombeiro FROM usuario WHERE username_bombeiro = '$username' && password_bombeiro = '$senha'"; /*informações de tabela e campos de acordo como seu BD*/
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) { 
              header("Location: home.html"); /*local para onde deseja redirecionar o usuário*/
            } else {
                header("Location: login.html"); /*local para onde deseja redirecionar o usuário*/
                /*echo "<script>document.querySelector('#form-text').innerText = 'E-mail ou senha inválidos'</script>";*/
            }
        }
        
        mysqli_close($conn);
    ?>