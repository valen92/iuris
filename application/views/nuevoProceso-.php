<!DOCTYPE html>
<html lang="es-CO">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>iuris Project - Software para Abogados</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_background.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css">
    <link rel="shortcut icon" type="image/xicon" href="<?php echo base_url(); ?>images/favicon.ico"/>

    <!--Editor de Textocss-->
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>css/editor.css" type="text/css" rel="stylesheet"/>


<!--Editor de Texto-->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

<!--Boton/Barra de Herramientas-->
<body>
<div class="fixed-action-btn" style="bottom: 50px; right: 24px;">
    <a class="btn-floating btn-large red">
    <i class="large material-icons">settings</i></a>

    <ul>
    <li><a class="btn-floating red"><i class="material-icons">description</i></i></a></li>
    <li><a class="btn-floating red darken-1"><i class="material-icons">perm_contact_calendar</i></a></li>
    <li><a class="btn-floating red"><i class="material-icons">today</i></a></li>
    <li><a class="btn-floating red"><i class="material-icons">email</i></a></li>
    <li><a class="btn-floating red"><i class="material-icons">dns</i></i></a></li>
    <li><a class="btn-floating orange"><i class="material-icons">equalizer</i></a></li>
    <li><a class="btn-floating orange"><i class="material-icons">attach_money</i></a></li>
    </ul>
</div>


<!--Menu/Bsucador-->
<nav>
    <div class="nav-wrapper">
    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </i>Nuevo Proceso</li>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <form>
    <div class="input-field">
    <input id="search" type="search" required>
    <label for="search"><i class="material-icons">search</i></label>
    </div>
    </form>
    </div>
</nav>


<!--Descripción del Proceso-->
        <div class="container-fluid">
            <div class="row">
                <h2 class="demo-text">Descripción del Problema Jurídico</h2>



<!--Editor de Texto-->
<body>
<form method="post" name="proceso" id="proceso" action="<?php echo base_url(); ?>Welcome/guardarNuevoProceso">
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 nopadding">
              <textarea id="textarea1" class="materialize-textarea" name="problema"></textarea><br><br>

                <!--Area del Derecho-->
                 <div class="row">
                 <form class="col s12">
                 <div class="row">
                 <div class="input-field col s6">
                 <i class="material-icons prefix">work</i>
                 <input placeholder="Ingregar" id="first_name" type="text" class="validate" name="tercero">
                 <label for="first_name">Cliente</label>
                 </div>

                          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
  <!--Descripción del Proceso-->
        <div class="container-fluid">
            <div class="row">
                <h2 class="demo-text">Definición del Problema Jurídico</h2>



<!--Editor de Texto-->
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 nopadding">
              <textarea id="textarea1" class="materialize-textarea" name="definicion"></textarea><br><br>

                <!--Area del Derecho-->
                 <div class="row">
                 
                 <div class="row">
                 <div class="input-field col s6">                                
				                 <i class="material-icons prefix">work</i>
                 <input placeholder="Ingregar" id="first_name" type="text" class="validate" name="tiempo">
                 <label for="first_name">Tiempo</label>
              <button class="btn waves-effect waves-light" type="submit" name="action">Guardar</button>
                          </div>
          </div>
        </div>
      </div>
    </div>
  </body>


<!--Importar jQuery Antes de materialize.js-->
    <!--Editor de Texto js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/editor.js">
    </script>
</script>


<!--Cargar Aechivos js-->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/materialize.min.js"></script>


<!--Importar jQuery Antes de materialize.js-->
<script>
     $(document).ready(function(){
             $('select').material_select();
              $("#txtEditor").Editor();
        });
    </script>
  </div>
</div>

  <!--Footer-->
<footer>
    <div class="row">
    <footer class="page-footer">
    <div class="container">
    <div class="row">
     <div class="input-field col s4">
    </div>
    <div class="footer-copyright">
    <div class="container right">
    <img src="<?php echo base_url(); ?>images/iuris_proyect_abogados.png" width="219" height="30">
    </div>
    </footer>
	</form>
    </body>
</html>