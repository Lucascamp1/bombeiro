<?php
include('protect.php');
include('connect_usuarios.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SA Bombeiro</title>

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

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300&display=swap">

  <link rel="stylesheet" type="text/css" href="usuarios.css">
</head>

<body>

  <style>
    .editar {
      position: static;
      top: 0;
      padding: 0.4rem;
      margin: 5px;
      background-color: #167e56;
      color: #fff;
      border: none;
      border-radius: 0.5rem;
      text-decoration: none;
      cursor: pointer;
      transition: 0.5s ease-out;
      overflow: visible;
    }


    .editar:hover {
      background-color: #167e56;
      /* Cor do fundo ao passar o mouse */
    }

    .texto {
      color: #167e56;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .text-table-style {
      color: #167e56;
      font-size: 1.2rem;
      font-weight: bold;
    }

  </style>
  <!-- navbar -->
  <nav class="navbar navbar-dark" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="homeadm.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
      <p class="navbar-title mt-3 fw-bold text">
        VISUALIZAR OU EDITAR USUÁRIO
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
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="homeadm.php">TELA DE INÍCIO</a>
            </li>
            <li class="nav-item" style="list-style-type: none">
              <a class="nav-link" href="logout.php">SAIR</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header>

    <div class="grid_header d-none">

      <div class="conectado">
        Conectado:
        <?php echo $_SESSION['nome']; ?>
      </div>

      <a href="cadastro.php">
        <div class="novo_usuario">
          Cadastrar novo usuário
        </div>
      </a>

    </div>

  </header>

  <div id="container-relatorios">

    <div class="atend">

      <div class="form-caixa">
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <div class="text-table-style">
                <tr>
                  <th>Nome Completo</th>
                  <th>CPF</th>
                  <th>Email</th>
                  <th>Tipo</th>
                  <th>Senha</th>
                  <th></th>
                </tr>
              </div>
            </thead>
            <tbody>

              <?php

              if ($usuariosResult->num_rows > 0) {
                while ($row = $usuariosResult->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["nome"] . "</td>";
                  echo "<td>" . $row["cpf"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["tipo"] . "</td>";
                  echo "<td>" . $row["senha"] . "</td>";
                  // Adicione um botão para edição (redireciona para a página editorphp.php com um parâmetro de ID)
                  echo '<td><a href="editorphp.php?edit=' . $row["id_atendente"] . '" class="editar">Editar</a></td>';
                  echo '<td><a href="#" class="editar" onclick="confirmarExclusao(' . $row["id_atendente"] . ')">Excluir</a></td>';
                  echo "</tr>";
                }
              } else {
                echo "<tr><td colspan='7'>Nenhum usuário encontrado.</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    function confirmarExclusao(idAtendente) {
      var confirmacao = confirm("Tem certeza que deseja excluir este usuário?");

      if (confirmacao) {
        // Se o usuário clicou em "OK" no popup, redirecione para a página de exclusão com o ID do usuário
        window.location.href = 'excluirUsuario.php?edit=' + idAtendente + '&action=excluir';
      } else {
        // Se o usuário clicou em "Cancelar", nada acontecerá
      }
    }
  </script>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>