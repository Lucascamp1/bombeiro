<?php
include('protect.php');
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA Bombeiro</title>

    <script src="/scripts/cadastro.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #c1c1c1;
            font-family: 'Inter', sans-serif;
            color: white;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #167e56;
            box-shadow: 0 0 0 0.1rem #167e56;
        }

        #nav {
            background-color: #333333;
        }

        .navbar-brand {
            display: flex;
            margin: 0px;
        }

        #box {
            background-color: #333333;
            width: 90%;
            border-radius: 10px;
        }

        .card-text {
            color: white;
        }

        #botao {
            background-color: #333333;
        }

        #botao:hover {
            background-color: rgb(21, 138, 50);
        }

        #genero {
            width: 100%;
            height: 6%;
            border-radius: 5px;
        }

        #dataNascimento {
            width: 100%;
            height: 6%;
            border-radius: 5px;
        }

        .dropdown-container {
            position: relative;
        }

        .custom-dropdown {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 6px;
            width: 100%;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            cursor: pointer;
            outline: none;
        }

        .custom-dropdown:hover {
            border-color: #555;
        }

        .custom-dropdown:focus {
            border-color: #00f;
            box-shadow: 0 0 5px rgba(0, 0, 255, 0.5);
        }

        .custom-dropdown::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .custom-dropdown option {
            padding: 10px;
        }

        @media screen and (min-width: 768px) {
            .geral {
                height: 79vh;
            }
        }

        @media screen and (max-width: 767px) {
            .geral {
                height: 80vh;
            }
        }

        @media screen and (max-width: 375px) {
            .geral {
                height: 100vh;
            }
        }

        @media screen and (min-width: 200px) and (max-width:460px) {
            .navbar-title {
                font-size: 13PX;
            }
        }

        @media screen and (min-width: 200px) and (max-width:405px) {

            .navbar-title {
                font-size: 10.6PX;
            }
        }

        .btn-primary{
            background-color: #167e56;
            border-color: #167e56;
        }

        .btn-primary:hover{
            background-color: #065839;
            border-color: #167e56;
        }

        .custom-dropdown:focus{
            border-color: #065839;
        }
    </style>

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
                            <a class="nav-link" href="logout.php">SAIR</a>
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
                    <input type="text" class="form-control" id="cpf" name="userCPF" maxlength="14"
                        oninput="applyCpfMask(this)">
                    <br>
                    <div class="input-caixatexto">
                        <label class="textooo" for="tipo">Cargo</label>
                        <br>
                        <div class="dropdown-container mt-2">
                            <select id="tipo" name="tipo" class="custom-dropdown" required>
                                <option value="Administrador">Administrador </option>
                                <option value="Atendente">Atendente </option>
                                <option value="Bombeiro">Bombeiro</option>
                            </select>
                        </div>
                    </div>
                    <br>
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

    <script>
        function applyCpfMask(input) {
            // Remove qualquer caractere não numérico
            let cpf = input.value.replace(/\D/g, '');

            // Aplica a máscara de CPF (XXX.XXX.XXX-XX)
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');

            // Atualiza o valor do campo
            input.value = cpf;
        }
    </script>
</body>
</html>