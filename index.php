<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Flatpickr -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/flatpickr/css/flatpickr.min.css">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/sweetalert2/sweetalert2.css">
  <!-- Selectize -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/selectize/css/selectize.bootstrap4.css">
  <!-- Datatables  -->
  <!-- <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/datatables/css/jquery.dataTables.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"> -->
  <!-- Utils  -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/utils/utils.css">
  <!-- Navbar central de serviÃ§os -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/layout/layout.css">
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/adminlte/adminlte.min.css">
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/customs/sisnot/main.css">
  <!-- Plotly -->
  <script src="http://10.1.1.31:80/centralservicos/resources/js/plotly/plotly-2.18.2.min.js"></script>
  <!-- font awesome animaton -->
  <link rel="stylesheet" href="http://10.1.1.31:80/centralservicos/resources/css/font-awesome-animation/css/font-awesome-animation.min.css">
  <title>Censo Fugulin</title>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-border-hrg">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://10.1.1.31:80/centralservicos/"><img src="http://10.1.1.31:80/centralservicos/resources/img/central-servicos.png" alt="Central de Serviço" style="width: 160px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarCentral"
        aria-controls="navBarCentral" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navBarCentral">
        <ul class="navbar-nav text-dark me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2 text-dark" href="#" id="sistemasDropdownLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Usuário
            </a>
            <ul class="dropdown-menu rounded-0 border-0" style="z-index: 10000;" aria-labelledby="sistemasDropdownLink">
              <li>
                <a href="http://10.1.1.31:80/centralservicos/logout" class="dropdown-item">Sair</a>
              </li>
              <li>
                <a href="http://10.1.1.31:80/centralservicos/usuario" class="dropdown-item">Informações</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
  <div class="position-fixed top-0 start-50 translate-middle-x p-3 fw-bold d-none" style="z-index: 9999999">
    <div id="errorToastMain" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive"
      aria-atomic="true" data-bs-delay="3000">
      <div class="d-flex">
        <div class="toast-body" id="toast-message">
          {{mensagem}}
        </div>
      </div>
    </div>
  </div>
  <div class="position-fixed bottom-0 end-0 p-3 invisible" style="z-index: 9999999">
    <div id="notification-toast" class="toast align-items-center text-dark bg-white" role="alert" aria-live="assertive"
      aria-atomic="true" data-bs-delay="3000">
      <div class="toast-header bg-light">
        <img src="http://10.1.1.31:80/centralservicos/resources/img/central-servicos.png" width="100px" class="rounded me-2 me-auto" alt="...">
        <small id="notification-sistema"></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body" id="notification-body">
      </div>
    </div>
  </div>
  <div class="loader-div">
    <div class="loader mb-0"></div>
    <h1 class="text-center mt-4">Carregando...</h1>
  </div>
  <main>
    <body>
    <link rel="stylesheet" href="http://10.1.1.31/centralservicos/resources/css/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="http://10.1.1.31/centralservicos/resources/css/customs/censofugulin/censofugulin.css">
    <link rel="stylesheet" href="http://10.1.1.31/centralservicos/resources/css/sweetalert2/sweetalert2.min.css">
    <div>
        <div class="content-wrapper" style="margin-left: 0 !important">
            <div class="content-header" style="border-bottom: solid 1px gray;">
                <div class="container-fluid">
                    <div class="cabecalho-pai row mb-2">
                        <div class="cabecalho col-sm-6">
                            <h1 class="ml-1"><i class="fas fa-user-md"></i> CensoFugulin - Home</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lineButtons col-md-12 mt-3 d-flex justify-content-center align-items-center">
                <a class="btn btn-primary" href="http://10.1.1.31/centralservicos/censofugulin/painel">VER PAINEL</a>
            </div>
            <div class="divAdicao card collapsed-card">
                <div class="card-header" id="filtros" style="cursor:pointer">
                    <h3 class="card-title"> <i class="fas fa-plus mr-2"></i>Adição de profissionais</h3>
                    <div class="card-tools col-12 col-md-1 text-right">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body pb-2 pt-1 px-3 adicaoDeProfissionais">
                    <div class="row">
                        <div class="col-12 col-sm-12 mt-2 filters">
                            <form class="d-flex flex-column" id="adicaoDeProfissionais">
                                <div class="row">
                                    <div class="col-3">
                                        <label>Unidade</label>
                                        <div class="input-group mb-3 d-flex flex-column">
                                            <!-- <input type="text" id="slUnidade" style="margin: 0;"> -->
                                            <select name="" id="slUnidade" class="form-control text-center w-100">
                                                <option value="" disabled selected>Selecione uma Unidade</option>
                                                <option value="4º ANDAR">4° Andar</option>
                                                <option value="5º ANDAR">5° Andar</option>
                                                <option value="7º ANDAR">7° Andar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <label>Profissional <small>(cadastrado no smart)</small></label>
                                        <div class="input-group mb-3">
                                            <input type="text" id="slProfissional" class="form-control text-center">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" id="profissionalNencontrado" type="checkbox"
                                                name="profissionalNencontrado" value="S">
                                            <label class="form-check-label">
                                                Profissional não encontrado
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 profissionalNencontrado">
                                        <label>Coren</label>
                                        <div class="input-group mb-3 d-flex flex-column">
                                            <input type="number" id="coren" class="form-control text-center w-100" />
                                        </div>
                                    </div>
                                    <div class="col-2 profissionalNencontrado">
                                        <label>Classe</label>
                                        <div class="form-check">
                                            <input class="form-check-input classe" type="radio" name="classe" value="E">
                                            <label class="form-check-label">
                                                Enfermagem
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input classe" type="radio" name="classe" value="X">
                                            <label class="form-check-label">
                                                Técnico em Enfermagem
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-5 profissionalNencontrado">
                                        <label>Nome</label>
                                        <div class="input-group mb-3 d-flex flex-column">
                                            <input type="text" id="nomeProfissional"
                                                class="form-control text-center w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label>Turno</label>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input turno" type="radio" name="turno"
                                                    value="M">
                                                <label class="form-check-label">
                                                    Matutino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input turno" type="radio" name="turno"
                                                    value="V">
                                                <label class="form-check-label">
                                                    Vespertino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input turno" type="radio" name="turno"
                                                    value="N">
                                                <label class="form-check-label">
                                                    Noturno
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input turno" type="radio" name="turno" value="D">
                                                <label class="form-check-label">
                                                    Diurno
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Plantões</label>
                                        <div class="input-group mb-3">
                                            <input type="text" id="datesPlantoes"
                                                placeholder="Selecione as datas dos plantões"
                                                class="form-control text-center w-100" autocomplete="off"
                                                name="datesPlantoes" />
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label>&nbsp;</label>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-success col-md-12 justify-content-between"
                                                id="addProfissional" type="submit">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardTabela">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title w-50"><i class="fas fa-th mr-1"></i> Profissionais de plantão</h3>
                        <div class="w-50 d-flex justify-content-end">
                            <input type="text" id="dateForTables" class="form-control text-center" autocomplete="off"
                                name="dateForTables" style="width: 30% !important;" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body table-responsive tabela">
                            <table id="tabelaProfissionais" class="dataTable">
                                <thead>
                                    <tr>
                                        <td>PLANTÃO</td>
                                        <td>UNIDADE</td>
                                        <td>TURNO</td>
                                        <td>COREN</td>
                                        <td>PROFISSIONAL</td>
                                        <td>CLASSE</td>
                                        <td>AÇÕES</td>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://10.1.1.31/centralservicos/resources/js/jquery/jquery.min.js"></script>
    <script src="http://10.1.1.31/centralservicos/resources/js/sweetalert2/sweetalert2.min.js"></script>
    <script src="http://10.1.1.31/centralservicos/resources/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="http://10.1.1.31/centralservicos/resources/js/customs/censofugulin/script.js"></script>
</body>
  </main>
  <footer class="main-footer" style="margin-left: 0 !important; margin-top: 1em;">
  <strong>Copyright &copy; 2021 <a href="http://www.hospitalriogrande.com.br/" target="_blank">Hospital Rio Grande</a></strong>. Todos os direitos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <b>Versão</b> 0.0.1
  </div>
</footer>
</body>
<!-- Scripts Js -->
<!-- lul-->
<script> const _URL = 'http://10.1.1.31:80/centralservicos'; </script>
<!-- Jquery -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/jquery/jquery.min.js"></script>
<!-- Jquery Mask -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/jquery-mask/jquery.mask.min.js"></script>
<!-- Bootstrap -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Script layout -->
<!-- <script src="http://10.1.1.31:80/centralservicos/resources/js/layout/layout.js"></script> -->
<!-- Script AdminLTE -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/adminlte/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/sweetalert2/sweetalert2.js"></script>
<!-- JQuery Validation -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/jquery-validation/jquery.validate.min.js"></script>
<script src="http://10.1.1.31:80/centralservicos/resources/js/jquery-validation/additional-methods.min.js"></script>
<!-- Utils -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/customs/utils.js"></script>
<!-- Flatpickr -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/flatpickr/flatpickr.min.js"></script>
<script src="http://10.1.1.31:80/centralservicos/resources/js/flatpickr/rangePlugin.min.js"></script>
<!-- Selectize -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/selectize/js/standalone/selectize.min.js"></script>
<!-- Datatables -->
<!-- <script src="http://10.1.1.31:80/centralservicos/resources/js/datatables/js/jquery.dataTables.min.js"></script> -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/datatables/js/jquery.dataTables.min.js"></script>
<!-- Canvas Js -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/canvasjs/canvasjs.min.js"></script>
<!-- Datatables responsive -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/datatables/js/dataTables.responsive.min.js"></script>
<!-- Customs JS -->
<script src="http://10.1.1.31:80/centralservicos/resources/js/customs/brasindice/script.js"></script>
</html>