<?php
        include('dbconnect.php'); /*arquivo de conexão com o bando de dados*/

        if(isset($_POST['submit-button'])) {
            $email = $_POST['email']; /*name do email-input*/
            $senha = $_POST['senha']; /*name do password-input*/
            
            $sql = "SELECT email, senha FROM usuario WHERE email = '$email' && senha = '$senha'"; /*informações de tabela e campos de acordo como seu BD*/
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) { 
              header("Location: https://www.google.com"); /*local para onde deseja redirecionar o usuário*/
            } else {
                header("Location: login.php"); /*local para onde deseja redirecionar o usuário*/
                /*echo "<script>document.querySelector('#form-text').innerText = 'E-mail ou senha inválidos'</script>";*/
            }
        }
        
        mysqli_close($conn);
    ?>