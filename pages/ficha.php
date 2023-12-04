<?php
include('protect.php');
include('processarInfoOcorrencia.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHA</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="../images/avatar_bombeiro.png" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="ficha.css">
    <script src="/scripts/cadastro.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark" id="nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html"><img src="../images/avatar_bombeiro.png" width="60px" /></a>
            <p class="navbar-title mt-3 fw-bold text">
                REGISTRO DE OCORRÊNCIAS
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

    <form name="formOcorrencia" id="envioFormulario" method="POST" submit="processarInfoOcorrencia.php">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Informações do paciente
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container" id="box1">
                            <label class="card-text">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="name">
                            <br>
                            <label class="card-text">Idade</label>
                            <br>
                            <input type="number" id="age" name="age" min="0" max="120">
                            <br>
                            <br>
                            <label class="card-text">Sexo</label>
                            <br>
                            <select name="genero" id="genero"
                                style="padding-left: 12px; padding-right: 12px; padding-top: 6px; padding-bottom: 6px;">
                                <option value="" disabled selected hidden></option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                            <br>
                            <br>
                            <div class="input-caixatexto">
                                <label for="rgCpfPaciente">RG/CPF do paciente:</label> <br>
                                <input type="text" id="rgCpfPaciente" name="rgcpfPaciente" placeholder="Digite..."
                                    oninput="formatarDocumento(this);">
                                <p id="mensagemErro-3" style="color: red;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Informações do acompanhante
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container" id="box1">
                            <label class="card-text">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="name">
                            <br>
                            <label class="card-text">Idade</label>
                            <br>
                            <input type="number" id="age" name="age" min="0" max="120">
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item" style="color: white;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                        Vítima era
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="form-group h-75">
                            <div class="container h-100 mt-5 justify-content-center align-items-center">
                                <div class="row gap-4 justify-content-center" id="row">
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">CICLISTA </span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">CONDUTOR CARRO</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">CONDUTOR MOTO</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">CLINICO</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">GESTANTE</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">TRAUMA</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">PASS.BAN.FRENTE</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">PAS.BCO.TRÁS</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">PAS.MOTO</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex p-4 justify-content-between">
                                        <span class="d-flex">PEDESTRE</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Forma de condução
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <label for="textoformaconducao">Forma de Condução:</label>
                        <div>
                            <select class="sexo" name="formaConducaoSelect">
                                <option selected="selected"></option>
                                <option>Deitada</option>
                                <option>Semi-sentada</option>
                                <option>Sentada</option>
                            </select>
                            <div class="custom-arrow"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                        Informações da ocorrência
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container" id="box1">
                            <label for="username">Data:</label>
                            <input class="textbox-n" placeholder="XX/XX/20XX" name="data_ocorrencia" type="text"
                                onfocus="(this.type='date')" onblur="(this.type='date')" />
                            <br>
                            <label class="card-text">Local da Ocorrência</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="name">
                            <br>
                            <label class="card-text">Nome do Hospital</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="name">
                            <br>
                            <input type="number" class="form-control" id="nome" aria-describedby="name"
                                placeholder="NºUSB">
                            <br>
                            <input type="number" class="form-control" id="nome" aria-describedby="name"
                                placeholder="NºOCORRÊNCIA">
                            <br>
                            <input type="number" class="form-control" id="nome" aria-describedby="name"
                                placeholder="NºDESPACHANTE">
                            <br>
                            <label for="horachegada">Hora Chegada:</label>
                            <input type="time" id="horachegada" name="horachegada" min="01:00" max="00:59" required />
                            <br>
                            <input type="number" class="form-control" id="nome" aria-describedby="name"
                                placeholder="KM FINAL">
                            <br>
                            <label for="codIr">CÓD. IR:</label>
                            <input type="text" id="codIr" name="codIr" placeholder="Digite..."
                                oninput="validarCodIR(this)">
                            <p id="mensagemErro-7" style="color: red;"></p>
                            <label for="codPs">CÓD. PS:</label>
                            <input type="text" id="codPs" name="codPs" placeholder="Digite..."
                                oninput="validarCodPS(this)">
                            <p id="mensagemErro-8" style="color: red;"></p>
                            <label for="codSiaSus">CÓD. SIA/SUS:</label>
                            <input type="text" id="codSiaSus" name="codSiaSus" placeholder="Digite..."
                                oninput="validarCodSIASUS(this)">
                            <p id="mensagemErro-9" style="color: red;"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                        Tipo de ocorrência (Pré-hospitalar)
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="form-group">
                            <div class="casa mt-4">
                                <div class="column">
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">CAUSADO POR ANIMAIS
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">COM MEIO DE TRANSPORTE
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">DESMORONAMENTO/ DESLIZAMENTO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">EMERGÊNCIA MÉDICA
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">QUEDA DE ALTURA 2M
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">TENTATIVA DE SUICÍDIO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">QUEDA PRÓPRIA ALTURA
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">AFOGAMENTO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">AGRESSÃO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">ATROPELAMENTO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">CHOQUE ELÉTRICO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">DESABAMENTO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">DOMÉSTICO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">ESPORTIVO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">INTOXICAÇÃO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">QUEDA BICICLETA
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">QUEDA MOTO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">QUEDA NÍVEL 2M
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">TRABALHO
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block px-3">
                                        <div class="descrition d-flex" style="width: 100%;">TRANSFERÊNCIA
                                            <div class="form-check">
                                                <input name="grupo" class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Caixa texto -->
                                <div class="esptext mt-2">
                                    <div class="container-ultimo p-3">
                                        <div class="text-area">OUTRO
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextarea"
                                                    style="height: 100%;"></textarea>
                                                <!-- <label for="floatingTextarea mt-3">Outro</label> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                        Avaliação da cinemática
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="form-group">
                            <div class="container mt-5 d-flex justify-content-center">
                                <div class="col-10">
                                    <div class="row mt-4">
                                        DISTURBIO DE COMPORTAMENTO
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group1"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        ENCONTRADO DE CAPACETE
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group2"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        ENCONTRADO DE CINTO
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group3"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        PARA-BRISAS AVARIADO
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group4"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        CAMINHANDO NA CENA
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group5"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        PAINEL AVARIADO
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group6"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        VOLANTE TORCIDO
                                        <div class="sim_nao d-flex pl-2">
                                            <div class="d-flex" style="gap: 10px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="group7"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                        Sinais vitais
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="sinais">
                            <div class="linha1">
                                <div class="grupo1">
                                    <span>PRESSÃO ARTERIAL:</span>
                                    <input type="text" class="text-line" id="pressao">
                                    <span>X</span>
                                    <input type="text" class="text-line" id="pressao">
                                    <span>mmHg</span>
                                </div>
                            </div>

                            <div class="linha2">
                                <div class="grupo2">
                                    <span>PULSO:</span>
                                    <input type="text" class="text-line" id="pulso">
                                    <span>B.C.P.M/RESPIRAÇÃO:</span>
                                    <input type="text" class="text-line" id="pulso">
                                    <span>M.R.M</span>
                                </div>
                            </div>

                            <div class="linha3">
                                <div class="grupo3">
                                    <span>SATURAÇÃO:</span>
                                    <input type="text" class="text-line" id="satura">
                                    <span class="htg">% / HTG:</span>
                                    <input type="text" class="text-line" id="satura">
                                </div>
                            </div>

                            <div class="linha4">
                                <div class="grupo4">
                                    <span>TEMPERATURA:</span>
                                    <input type="text" class="text-line" id="temperatura">
                                    <span>C°</span>
                                </div>
                            </div>

                            <div class="linha5">
                                <!-- <div> -->
                                <div class="perfusao">
                                    <span class="d-flex align-items-center">PERFUSÃO:</span>
                                    <div class="checks">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perfusao"
                                                id="flexCheckDefault">
                                        </div>

                                        <span>
                                            2SEG
                                        </span>
                                    </div>
                                    <div class="checks">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="perfusao"
                                                id="flexCheckDefault">
                                        </div>
                                        <span>
                                            <2SEG>
                                    </div>
                                </div>
                                <div class="normal_anormal d-flex pl-2">
                                    <div class="d-flex" style="gap: 10px;">
                                        <span>NORMAL</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="normalidade"
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                    <div class="d-flex" style="gap: 10px;">
                                        <span>ANORMAL</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="normalidade"
                                                id="flexCheckDefault">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
                        Problemas encontrados
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container-fluid">

                            <div class="form-group">

                                <div class="row d-flex flex-column align-items-center">

                                    <!-- Card Psiquiátrico -->
                                    <div class="card col-9 mt-4" style="padding: 12px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" name="um">
                                            <label class="card-text ms-2">Psiquiátrico</label>
                                        </div>
                                    </div>

                                    <!-- Card Respiratório -->
                                    <div class="card col-9 mt-4" style="padding: 12px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault10" name="um">
                                            <label class="card-text ms-2">Respiratório</label>
                                        </div>
                                        <br>

                                        <div class="ms-3" id="none1" style="display: none;">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Inalação Fumaça</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">DPOC</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Diabetes -->
                                    <div class="card col-9 mt-4 d-flex flex-column justify-content-center p-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault11" name="um">
                                            <label class="card-text ms-2">Diabetes</label>
                                        </div>
                                        <br>

                                        <div class="ms-3" id="none2" style="display: none;">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Hiperglicemia</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Hipoglicemia</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Obstétrico -->
                                    <div class="card col-9 mt-4 d-flex flex-column justify-content-center p-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault12" name="um">
                                            <label class="card-text ms-2">Obstétrico</label>
                                        </div>
                                        <br>

                                        <div class="ms-3" id="none3" style="display: none;">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Parto Emergêncial</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Hemor. Excessiva</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Gestante</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Transporte -->
                                    <div class="card col-9 mt-4" style="padding: 12px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault13" name="um">
                                            <label class="card-text ms-2">Transporte</label>
                                        </div>
                                        <br>
                                        <div class="ms-3" id="none4" style="display: none;">
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Aéreo</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Clinico</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Emergêncial</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Pós-Trauma</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Samu</label>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault1" name="um">
                                                    <label class="card-text1">Sem Remoção</label>
                                                </div>
                                            </div>
                                            <br>
                                            <div>
                                                <div class="form-check p-0">
                                                    <label class="card-text1">Outros:</label>
                                                    <input class="text-line1" type="text" value="" id="" name="um">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card col-9 mt-4 d-flex flex-column justify-content-center p-3">
                                        <div>
                                            <div class="form-check p-0">
                                                <label class="card-text1">Outros:</label>
                                                <input class="text-line1" type="text" value="" id="" name="um">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
                        Objetos recolhidos
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="form-group h-100">
                            <div class="container d-flex align-items-center h-100">
                                <div class="container card h-75 w-75 p-3">
                                    <div class="form-floating h-100">
                                        <textarea class="form-control h-100" placeholder="Leave a comment here"
                                            id="floatingTextarea2" style="height: 80%"></textarea>
                                        <label for="floatingTextarea2">Objetos</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>








    </form>
</body>

</html>