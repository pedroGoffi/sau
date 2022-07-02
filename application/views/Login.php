<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script> 
    <script src="<?php echo base_url('assets/js/jquery-3.6.0.min.js') ?>"></script>

    <!-- TODO:
	<link rel="stylesheet" href="<?php echo base_url('assets/css/<CSS RELATIVO A ESTA PAGINA>')?>">
      -->
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
     echo form_open('http://localhost/index.php/index');
     ?>

    <div class="colorback card justify-content-center text-center" style="width: 300px; margin-left: 100px; margin-top: 200px;">
      <p>
	<h3>Login:</h3>
	<?php
	 if($form_errors):
	 echo '<span class="text-danger">'.$form_errors.'</span>';
		     endif;
		     ?>
		     
		     </p>
		     <div>
		       <p>
			 <img src="<?php echo base_url('assets/img/person-fill.svg') ?>" alt="" width="25px" height="25px" style="margin-top: -10px;">
			 <?php 
			  echo form_input(array(
			  'name'        => 'nome',
			  'value'	=> set_value('Nome'),
			  'class'	=> 'text-center',
			  'placeholder'	=> 'Usuario',
			  'required'	=> '',
			  'id'		=> 'nome'
			 )) ?>
		       </p>
		       <p>
			 <img src="<?php echo base_url('assets/img/key-fill.svg')?>" alt="" width="25px" height="25px" style="margin-top: -10px;">
			 <?php echo form_input(array(
			  'name'        => 'senha',
			  'value'       => set_value('Senha'),
			  'class'       => 'text-center',
			  'name'        => 'senha',
			  'id'          => 'senha',
			  'placeholder' => 'Senha',
			  'required'    => '',
			  'type'        => 'password',
			 ));
			 ?>
		       </p>
		       <p> 	  
			 <?php 
			  echo form_input(array(
			  'name'  => 'manterlogado',
			  'type'  => 'checkbox',
			  'class' => 'form-check-input',
			  'id'    => 'manterlogado',
			  'value' => set_value('manterlogado'),
			 ));
			 
			 echo form_label('Manter-me logado', 'manterlogado');
			 ?>

		       </p>
		       <p>
			 
			 <?php 
			  echo form_submit(
			  array(
			  'name'	=> 'Logar',
			  'value'	=> 'Logar',
			  'class'	=> 'btn btn-primary',
			  'action'	=> '',
			 ));
     			 ?>
			 
		       </p>
		       <p>	  
			 <a href="forgot_password"><strong>Esqueci a Senha</strong></a>
		       </p>
		     </div>
</div>
<?php      
 echo form_close();
 ?>

</body>
</html>
