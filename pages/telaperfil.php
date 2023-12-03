<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA Bombeiros</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- media -->
    <link rel="icon" href="../images/avatar_bombeiro.png" type="image/png">
    <!--Imagem icon-->
    <link rel="stylesheet" type="text/css" href="perfil.css">
</head>

<body>

    <header>
        <!-- navbar -->
        <nav class="navbar navbar-dark" id="nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
                <p class="navbar-title mt-3 fw-bold text">
                    PERFIL
                </p>
                <a class="nav-link" aria-current="page" onclick="window.location.href = 'home.html'">Retornar</a>
            </div>
        </nav>
    </header>

    <section>
        <div class="container-fluid card col-6 mt-5">
            <div class="d-flex mt-2">
                <label class="form-label mt-2">Nome</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['nome']; ?>!" disabled
                    readonly>
            </div>
            <div class="d-flex mt-2">
                <label class="form-label mt-2">ID</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['id_atendente']; ?>" disabled
                    readonly>
            </div>
            <div class="d-flex mt-2">
                <label class="form-label mt-2">CPF</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['cpf']; ?>" disabled readonly>
            </div>
            <div class="d-flex mt-2">
                <label class="form-label mt-2">Email</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['email']; ?>" disabled
                    readonly>
            </div>
            <div class="d-flex mt-2 mb-2">
                <label class="form-label mt-2">Senha</label>
                <input type="text" class="form-control" placeholder="<?php echo $_SESSION['senha']; ?>" disabled
                    readonly>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <form action="logout.php" method="post">
                <button type="submit" id="sair" class="btn btn-primary logout" name="logout"><i class="bi bi-box-arrow-left"></i> Sair</button>
            </form>
        </div>
    </section>

    <!-- <div class="form-caixa">
        <div class="perfil">
            <p>Bem-vindo ao seu perfil,
                <?php echo $_SESSION['nome']; ?>!
            </p>
        </div>

        <div class="id">
            Id:
            <?php echo $_SESSION['id_atendente']; ?>
        </div>

        <div class="email">
            Email:
            <?php echo $_SESSION['email']; ?>

        </div>

        <div class="cpf">
            CPF:
            <?php echo $_SESSION['cpf']; ?>

        </div>

        <div class="senha">
            Senha:
            <?php echo $_SESSION['senha']; ?>

        </div>
        <div class="desconectar">
            <form action="logout.php" method="POST">
                <button id="sair" type="submit" name="logout" class="logout">Desconectar</button>
            </form>

        </div>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>