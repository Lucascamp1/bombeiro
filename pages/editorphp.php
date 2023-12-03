<?php
include('protect.php');
include('connect_usuarios.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
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

    <link rel="stylesheet" type="text/css" href="editor.css">
</head>

<body>
    <nav class="navbar navbar-dark" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="homeadm.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
            <p class="navbar-title mt-3 fw-bold text">
                EDITAR USUÁRIO
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

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                CATEGORIAS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'ocorrencia.html'">TIPO DE OCORRÊNCIA</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: break-spaces"
                                        onclick="window.location.href = 'problemasuspeitos.html'">PROBLEMAS ENCONTRADOS
                                        SUSPEITOS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'sinaisesintomas.html'">SINAIS E SINTOMAS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'glasglow.html'">AVALIAÇÃO DO PACIENTE
                                        (GLASGOW)</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'loctromas.html'">LOCALIZAÇÃO DOS TRAUMAS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'sinais.html'">SINAIS VITAIS</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'objetos.html'">OBJETOS RECOLHIDOS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" style="white-space: break-spaces"
                                        onclick="window.location.href = 'conducao.html'">FORMA DE CONDUÇÃO E DECISÃO DE
                                        TRANSPORTE</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'vitimaera.html'">VÍTIMA ERA</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'procedimentos.html'">PROCEDIMENTOS
                                        EFETUADOS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'materiaisutilizados.html'">MATERIAIS
                                        UTILIZADOS</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'obsimportante.html'">OBSERVAÇÕES
                                        IMPORTANTES</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        onclick="window.location.href = 'cinematica.html'">AVALIAÇÃO DA CINEMÁTICA</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item" style="list-style-type: none">
                      <a class="nav-link" href="#" onclick="window.location.href = 'perfilbombeiro.html'">PERFIL</a>
                    </li> -->
                        <li class="nav-item" style="list-style-type: none">
                            <a class="nav-link" href="#">SAIR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="d-none">
            <a href="usuarios.php">
                <div class="voltar">
                    Voltar
                </div>
            </a>
        </div>
    </header>
    <br>
    <br>
    <?php
    if ($editUsuarioId !== null) {
        // Recupera os dados do usuário com base no ID fornecido para edição
        $query = "SELECT id_atendente, nome, cpf, email, tipo, senha FROM atendente WHERE id_atendente = $editUsuarioId";
        $result = $conn->query($query);
        $usuario = $result->fetch_assoc();
        ?>
        <div class="card-card">

            <div class="form-caixa">
                <form method="POST">
                    <div class="texto">
                        <label for="novo_nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="novo_nome_completo" name="novo_nome_completo"
                            value="<?php echo $usuario['nome']; ?>" required>
                    </div>
                    <br>
                    <div class="texto">
                        <label for="novo_cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="novo_cpf" name="novo_cpf"
                            value="<?php echo $usuario['cpf']; ?>" required>
                    </div>
                    <br>
                    <div class="texto">
                        <label for="novo_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="novo_email" name="novo_email"
                            value="<?php echo $usuario['email']; ?>" required>
                    </div>
                    <br>
                    <div class="texto">
                        <label for="novo_tipo">Cargo</label>
                        <select class="form-control" name="novo_tipo">
                            <option value="Administrador" <?php echo ($usuario["tipo"] === "atendente") ? "selected" : ""; ?>>
                                Administrador</option>
                            <option value="Atendente" <?php echo ($usuario["tipo"] === "atendente") ? "selected" : ""; ?>>
                                Atendente</option>
                            <option value="Bombeiro" <?php echo ($usuario["tipo"] !== "atendente") ? "selected" : ""; ?>>
                                Bombeiro</option>
                            </option>
                        </select>
                    </div>
                    <br>
                    <div class="texto">
                        <label for="nova_senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="nova_senha" name="nova_senha"
                            value="<?php echo $usuario['senha']; ?>" required>
                    </div>
            </div>
            <div id="botao-editar">
                <button type="submit" class="botao">Salvar Alterações</button>
            </div>
            </form>
        </div>

        <?php
    }
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.querySelector('form');
            var originalFormValues = getFormValues(form);

            form.addEventListener('submit', function (event) {
                // Evita o envio tradicional do formulário
                event.preventDefault();

                // Verifica se houve alteração nos valores do formulário
                if (isFormChanged(form, originalFormValues)) {
                    // Adiciona um popup usando Bootstrap com o botão "SIM"
                    var confirmation = confirm("Deseja salvar as alterações?");

                    if (confirmation) {
                        // Cria um objeto FormData para enviar os dados do formulário
                        var formData = new FormData(form);

                        // Cria uma solicitação AJAX usando fetch
                        fetch(form.action, {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert("Alteração salva com sucesso.");
                                } else {
                                    alert("Erro ao salvar alterações: " + data.error);
                                }
                            })
                            .catch(success => {
                                console.error('Salvo', success);
                                alert("Alteração salva com sucesso. Você já pode retornar para o visualizador de usuários.");
                            });
                    }
                } else {
                    alert("Nenhuma modificação feita nos campos.");
                }
            });
        });

        // Função para obter os valores originais do formulário
        function getFormValues(form) {
            var values = {};
            var inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(function (input) {
                values[input.name] = input.value;
            });
            return values;
        }

        // Função para verificar se houve alteração nos valores do formulário
        function isFormChanged(form, originalValues) {
            var currentValues = getFormValues(form);

            for (var key in originalValues) {
                if (originalValues[key] !== currentValues[key]) {
                    return true;
                }
            }

            return false;
        }
    </script>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>