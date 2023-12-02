<?php
include('protect.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOAR</title>

    <script src="/scripts/cadastro.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="cadastro.css">

    <script>
        function mostrarOcultarSenha(inputId, olhoId) {
            var input = document.getElementById(inputId);
            var olho = document.getElementById(olhoId);

            if (input.type === "password") {
                input.type = "text";
                olho.className = "fa fa-eye";
            } else {
                input.type = "password";
                olho.className = "fa fa-eye-slash";
            }
        }

        function mostrarConfirmarOcultarSenha(inputId, olhoId) {
            var input = document.getElementById(inputId);
            var olho = document.getElementById(olhoId);

            if (input.type === "password") {
                input.type = "text";
                olho.className = "fa fa-eye";
            } else {
                input.type = "password";
                olho.className = "fa fa-eye-slash";
            }
        }

        function validarCPF(cpf) {
            cpf = cpf.replace(/[^\d]+/g, '');
            if (cpf == '') return false;
            // Elimina CPFs invalidos conhecidos    
            if (cpf.length != 11 ||
                cpf == "00000000000" ||
                cpf == "11111111111" ||
                cpf == "22222222222" ||
                cpf == "33333333333" ||
                cpf == "44444444444" ||
                cpf == "55555555555" ||
                cpf == "66666666666" ||
                cpf == "77777777777" ||
                cpf == "88888888888" ||
                cpf == "99999999999")
                return false;
            // Valida 1o digito 
            add = 0;
            for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(9)))
                return false;
            // Valida 2o digito 
            add = 0;
            for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
            rev = 11 - (add % 11);
            if (rev == 10 || rev == 11)
                rev = 0;
            if (rev != parseInt(cpf.charAt(10)))
                return false;
            return true;
        }
    </script>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="homeadm.html"><img src="../images/avatar_bombeiro.png" width="60px"></a>
            <p class="nav-title mt-3 fw-bold text">CADASTRO DO BOMBEIRO</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="homeadm.html">TELA DE INÍCIO</a>
                        </li>
                        <li class="nav-item" style="list-style-type: none">
                            <a class="nav-link" href="#">SAIR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <form action="connect_cadastro.php" method="post">
        <div class="form-group">
            <div class="container d-flex justify-content-center align-items-center geral">
                <div class="container-fluid" id="box" style="padding-top: 16px; padding-bottom: 16px;">
                    <label class="card-text mb-2">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="name">
                    <br>
                    <label class="card-text mb-2">CPF</label>
                    <input type="number" class="form-control" id="cpf" name="userCPF" aria-describedby="matricula">
                    <br>
                    <div class="input-caixatexto">
                        <label for="tipo">Escolha seu cargo</label>
                        <select id="tipo" name="tipo" required>
                            <option value="administrador">Administrador </option>
                            <option value="atendente">Atendente </option>
                            <option value="bombeiro">Bombeiro</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <label class="card-text mb-2">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                    <br>
                    <label class="card-text mb-2">Senha</label>
                    <input type="password" class="form-control" id="senha" name="passwords" aria-describedby="password">
                    <br>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>