<!-- NOTA: Talvez mudar o nome deste arquivo seja uma boa ideia -->
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<? php echo base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Clinica boa Visão</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <a href="#submenurecepcao" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                               <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Recepção</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenurecepcao" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Sala de Espera</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Agenda</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Listar Clientes</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenucadastros" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                               <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Cadastros</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenucadastros" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#addpac"  style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastro</span> paciente </a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastro</span> consulta </a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastro</span> Exames </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenuconsulta" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                               <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Consultas</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenuconsulta" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Anamnese</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Retorno</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Revisão</span></a>
                                </li>
                            </ul>
                        <li>
                            <a href="#submenuimpressos" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Impressos</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenuimpressos" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Prescrições</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Receitas de Óculus</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Laudos</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Relatórios</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenuadm" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Administrativo</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenuadm" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar Médico</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Cadastrar Funcionário</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Convênios</span></a>
                                </li>
    
                            </ul>
                        </li>
                        <li>
                            <a href="#submenufinan" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Financeiro</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenufinan" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Lançar Comprovante</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Caixa</span></a>
                                </li>
                                <li>
                                    <a style="margin-left: 15px;" href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Relatório Finaceiro</span></a>
                                </li>
    
                            </ul>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                <nav class="navbar bg-light" >
                    <div class="container">
                      <ul>
                        <a class="navbar-brand" href="#1">
                        <img src="<?php echo base_url('assets/img/person-plus-fill(1).svg') ?>" alt="Novo paciente" width="40" height="40">
                      </a>
                      <a class="navbar-brand" href="#10">
                        <img src="<?php echo base_url('assets/img/journal-plus.svg')?>" alt="Nova Consulta" width="35" height="35">
                      </a>
                      <a class="navbar-brand" href="#2" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/journal-bookmark-fill.svg')?>" alt="Agenda" width="35" height="35">
                      </a>
                      <a class="navbar-brand" href="#3" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/estetoscopio.svg')?>" alt="Anamnese" width="40" height="40">
                      </a>
                      <a class="navbar-brand" href="#4" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/arrow-repeat.svg')?>" alt="Retorno" width="40" height="40">
                      </a>
                      <a class="navbar-brand" href="#5" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/eyeglasses.svg')?>" alt="Receita de Óculus" width="40" height="40">
                      </a>
                      <a class="navbar-brand" href="#5" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/pencil-square.svg')?>" alt="Prescrições" width="35" height="35">
                      </a>
                      <a class="navbar-brand" href="#5" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/clipboard2-pulse.svg') ?>" alt="Laudos" width="35" height="35">
                      </a>
                      <a class="navbar-brand" href="#5" style="text-align:left;margin-left: 10px;">
                        <img src="<?php echo base_url('assets/img/medicamento.svg') ?>" alt="medicamentos" width="40" height="40">
                      </a>
                    </ul>
                        
                    <div class="dropdown pb-4">
                        <a href="#" style="margin-top:10px;" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                            <img src="<?php echo base_url('assets/img/person-fill.svg')?>" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span style="color: black;" class="d-none d-sm-inline mx-1">UsuarioLogado</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Configurações</a></li>
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Deslogar</a></li>
                        </ul>
                    </div>


                    </div>
                  </nav>
            </div>
        </div>
    </div>
    

</body>

<!-- cadastros -->
<div class="modal fade" id="addpac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Paciente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" action="" id="novopaciente" name="novopaciente" novalidate>
                <div class="row">
                  <label for="validationCustom01" class="form-label"></label>
                  <input type="text" class="form-control" id="nomecompleto" name="nomesocial" placeholder="Nome completo" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                
                <div class="row">
                    <label for="validationCustom01" class="form-label"></label>
                    <input type="text" class="form-control" id="nomesocial" name="nomesocial" placeholder="Nome Social">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Data de Nascimento</label>
                  <input type="date" class="form-control" id="datanascimento" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Sexo</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">...</option>
                    <option>Feminino</option>
                    <option>Masculino</option>
                    <option>Outros</option>

                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Raça</label>
                    <select class="form-select" id="raca" name="raca" required>
                      <option selected disabled value="">...</option>
                      <option>Indígena</option>
                      <option>Negro</option>
                      <option>Branco</option>
                      <option>Pardo</option>
                      <option>Outros</option>  
                    </select>
                </div>

                <div style="margin-top: 10px;" class="row">
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">CPF</label>
                        <input class="form-control" id="cpf" type="number" name="rg" placeholder="CPF (somente números)" pattern="[0-9]{11}">
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">RG</label>
                        <input class="form-control" id="rg" name="rg" type="number" placeholder="RG (somente números)" pattern="[0-9]{11}">
                        <div class="invalid-feedback">
                          Please provide a valid city.
                        </div>
                      </div>
                  </div>
                <div style="margin-top: 2px;" class="row"></div>
                    <div class="row">
                         <label for="validationCustom05" class="form-label">Convênio</label>
                         <select class="form-select" id="convenio" name="convenio" required>
                             <option selected disabled value="">...</option>
                             <option>Particular</option>  
                            </select>
                    </div>
            
                </div>
                <center>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div style="margin-bottom: 5px;" class="col-12">
                  <button class="btn btn-primary" type="submit" data-bs-dismiss="addpac">Cadastrar Paciente</button>
                </div>
                </center> 
              </form>
        </div>
          
        </div>
      </div>
    </div>
  </div>
  



</html>
