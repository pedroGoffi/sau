<!--
    FIXME: base_url nao esta carregando oque deveria carregar.
-->
<!doctype html>
    
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script> 
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>

</head>
    
    <style>
        
        .colorback{
            border: none;
        }
        
        body,footer{
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.699),rgba(255, 255, 255, 0.699), rgb(238, 238, 238));
            text-decoration: none;
            list-style: none;
            

        }

        a{
            text-decoration: none;
            color: inherit;
            
        }
            


    </style>

<!--
  #################
  # Tela de Login #
  #################     
-->

<script>
    "use strict";
    var default_user = "admin"
    var defalt_password = '1234'



     function validar() {
        var user = formlogin.nome;
        if (user.value == ""){
            alert("Usuario Nao informado!");
            user.focus();
        }
        if (user.value != "" && user.value != default_user){
            alert("Usuario Invalido");
            user.focus();

        }

        var password = formlogin.senha;
        if (password.value == ''){
            alert("Digite uma senha Valida");
            password.focus();

        }
        if (password.value != '' && password.value != defalt_password){
            alert("Senha Incorreta");
            password.focus();
        }

        if(user.value == default_user && user.value != "" && password.value == defalt_password){
            window.location.href = "posvalidate.html";
        }
    }
</script>
<body>
<?php

echo base_url('assets/js/bootstrap.min.js');
?>
<form action="" id="formlogin" method="post" name="formlogin">   
    <div class="colorback card justify-content-center text-center" style="width: 300px; margin-left: 100px; margin-top: 200px;">
        <p>
            <h3>Login:</h3>
        </p>
        <div>
            <p>
            <img src="<?php echo base_url('assets/img/person-fill.svg') ?>" alt="" width="25px" height="25px" style="margin-top: -10px;"> <input class="text-center" type="text" name="nome" id="nameuser" placeholder="Usuario" required>
            </p>
            <p>
                <img src="<? php echo base_url('assets\img\key-fill.svg') ?>" alt="" width="25px" height="25px" style="margin-top: -10px;"> <input type="password" class="text-center" name="senha" id="password" placeholder="Senha" required>
            </p>
            <p> 
                <input type="checkbox" class="form-check-input" name="manterlogado" id="manterlogado" value="" /> 
                <label class="form-check-label" for="manterlogado">Manter-me logado</label> 
            </p>
            <p>
                <button class="btn btn-primary" type = "button" onclick="validar()">Logar</button>
            </p>
            <p>
                <a href="recuperacao.html"><strong>Esqueci a Senha</strong></a>
            </p>
        </div>
    </div>
</form>        
</body>
</html>