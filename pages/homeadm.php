<?php
include("conexao.php");
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
      background-color: rgb(55, 55, 180);
      border-radius: 13px;
    }

    #col3 {
      background-color: rgb(27, 150, 27);
      border-radius: 13px;
    }

    #col4 {
      background-color: rgb(222, 149, 15);
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

    /* .hiscard {
      padding: 15px;
    } */

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

      .cadcard {
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

      .hiscard {
        padding: 15px !important;
      }

      #fluid {
        margin-top: 9%;
      }

      .espaço_botao {
        margin-top: 0%;
      }

      .cadcard {
        padding: 15px !important;
      }

    }

    @media screen and (min-width: 768px) {
      .hiscard {
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

      .cadcard {
        padding: 35px;
      }

    }
  </style>
</head>

<body>
  <div class="base h-100">
    <nav class="navbar navbar-dark" id="nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="homeadm.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
        <p class="navbar-title mt-3 fw-bold text">
          HOME ADM
        </p>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
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
              <li class="nav-item" style="list-style-type: none">
                <a class="nav-link" href="home-menu.php">ESPAÇO DOS BOMBEIROS</a>
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
          Administrador
          <?php echo $_SESSION['nome']; ?>!
        </div>
      </div>
      <br>
      <br>
      <div class="row justify-content-center" id="row1">
        <div class="hiscard col-11 h-75 d-flex align-items-center" id="col2" style="cursor:pointer;">
          <div class="legenda3 w-75"><b>Histórico de Ocorrência</b></div>
        </div>
      </div>
      <div class="row justify-content-center" id="row1">
        <div class="cadcard col-11 h-75 d-flex align-items-center" id="col3" style="cursor:pointer;">
          <div class="legenda"><b>Cadastro de Usuários</b></div>
        </div>
      </div>
      <div class="row justify-content-center" id="row1">
        <div class="visucard col-11 h-75 d-flex align-items-center" id="col4" style="cursor:pointer;">
          <div class="legenda"><b>Visualização de Contas</b></div>
        </div>
      </div>
    </div>
  </div>

</body>
<script>
  var hiscard = document.getElementsByClassName('hiscard')[0];

  hiscard.addEventListener("click", function () {
    window.location.href = "históricocorrencia.html";
  });

  var cadcard = document.getElementsByClassName('cadcard')[0];

  cadcard.addEventListener("click", function () {
    window.location.href = "cadastro.php";
  });

  var visucard = document.getElementsByClassName('visucard')[0];

  visucard.addEventListener("click", function () {
    window.location.href = "usuarios.php";
  });
</script>

</html>