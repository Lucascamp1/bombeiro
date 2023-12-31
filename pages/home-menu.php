<?php
  include ("conexao.php");
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset=UTF-8>
    <!-- Linkagem -->
    <title>Home</title>
    <!-- Titulo -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fonte -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <!-- media -->
    <link rel="icon" href="../images/avatar_bombeiro.png" type="image/png">
    <!--Imagem icon-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #C1C1C1;
            color: white;
            font-family: 'Inter', sans-serif;
            height: 86vh;
        }

        /* Detalhes nav */
        /* MENU */
        #nav {
            background-color: #333333;
        }

        .navbar-brand {
            display: flex;
            margin: 0px;
        }

        #row {
            height: 6%;
            margin-top: 7%;
        }

        #fluid {
            margin-top: 9%;
        }

        #col {
            font-size: 27px;
            color: #333333;
        }

        #col1 {
            font-size: 20px;
            color: #333333;
        }

        #col2 {
            background-color: rgb(255, 84, 84);
            border-radius: 13px;
        }

        #col3 {
            background-color: rgb(0, 122, 163);
            border-radius: 13px;

        }

        #col4 {
            background-color: rgb(167, 71, 212);
            border-radius: 13px;
        }

        #row1 {
            height: 30%;
        }

        .legenda {
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        .espaço_botao {
            display: flex;
            width: 100%;
            height: 10vh;
            justify-content: center;
        }

        .legenda3 {
            font-size: 44px;
        }

        .legenda4 {
            font-size: 20px;
        }

        .botao {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
        }

        .redcard {
            padding: 15px;
        }

        @media screen and (min-width: 375px) {
            .legenda3 {
                font-size: 26px;
            }

            .legenda {
                font-size: 26px;
            }

            .legenda2 {
                font-size: 19px;
            }

            #fluid {
                margin-top: 29%;
            }

            .legenda4 {
                font-size: 19px;
            }

            .espaço_botao {
                margin-top: 9%;
            }

            .purplecard {
                padding: 15px;
            }

        }

        @media screen and (min-width: 1024px) {
            .legenda3 {
                font-size: 51px;
            }

            .legenda4 {
                font-size: 23px;
            }

            .legenda {
                font-size: 44px;
            }

            .legenda2 {
                font-size: 23px;
            }

            .redcard {
                padding: 15px !important;
            }

            #fluid {
                margin-top: 9%;
            }

            .espaço_botao {
                margin-top: 0%;
            }

            .purplecard {
                padding: 15px !important;
            }

        }

        @media screen and (min-width: 768px) {
            .redcard {
                padding: 35px;
            }

            #fluid {
                margin-top: 9%;
            }

            .legenda3 {
                font-size: 51px;
            }

            .legenda4 {
                font-size: 23px;
            }

            .legenda {
                font-size: 44px;
            }

            .legenda2 {
                font-size: 23px;
            }

            .espaço_botao {
                margin-top: 0%;
            }

            .purplecard {
                padding: 35px;
            }
        }
    </style>
</head>

<body>
    <div class="base h-100">
        <nav class="navbar navbar-dark" id="nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
                <p class="navbar-title mt-3 fw-bold text">
                    HOME
                </p>
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
                                <a class="nav-link" aria-current="page" href="#">TELA DE INÍCIO</a>
                            </li>
                            <li class="nav-item" style="list-style-type: none">
                                <a class="nav-link" href="#"
                                    onclick="window.location.href = 'perfilbombeiro.html'">PERFIL</a>
                            </li>
                            <li class="nav-item" style="list-style-type: none">
                                <a class="nav-link" href="homeadm.php">ESPAÇO ADM</a>
                            </li>
                            <li class="nav-item" style="list-style-type: none">
                                <a class="nav-link" href="logout.php">SAIR</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid h-100 w-100" id="fluid">
            <div class="row align-items-center justify-content-center" id="row">
                <div class="col-10" id="col">
                    Olá,
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-9" id="col1">
                    Bombeiro <?php echo $_SESSION['nome']; ?>!
                </div>
            </div>
            <br>
            <br>
            <div class="row justify-content-center" id="row1">
                <div class="redcard col-11 h-75" id="col2">
                    <div class="legenda3 w-75"><b>Nova Ocorrência</b></div>
                    <div class="legenda4"><b>Registre os dados do paciente</b></div>
                </div>
            </div>
            <div class="row justify-content-center" id="row1">
                <div class="purplecard col-11 h-75" id="col4">
                    <div class="legenda"><b>Espaço do Usuário</b></div>
                    <div class="legenda2"><b>Visualize seus dados</b></div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    var redcard = document.getElementsByClassName('redcard')[0];

    redcard.addEventListener("click", function () {
        window.location.href = "cadastropaciente.html";
    });

    var purplecard = document.getElementsByClassName('purplecard')[0];

    purplecard.addEventListener("click", function () {
        window.location.href = "telaperfil.php";
    });
</script>

</html>