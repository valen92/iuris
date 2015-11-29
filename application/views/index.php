<!DOCTYPE html>
<html lang="es-CO">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>iuris Project - Software para Abogados</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css">
    <link rel="shortcut icon" type="image/xicon" href="<?php echo base_url(); ?>/images/favicon.ico"/>
    <style type="text/css">
      .center {
        text-align: center;
      }
    </style>
  </head>
  <body><p>&nbsp;</p>
    <p class="center"><img src="<?php echo base_url(); ?>images/abogados_logo2.png" width="227" height="115"></p>

    <div class='formulario'>
      <div class='registro'>
        <h2></h2>
        <form class="col s12" method="post" name="login" id="login" action="<?php echo base_url(); ?>Welcome/login">
    
          <!--Opción Campos de Texto / Login-->
          <div class="row">
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="usuario" name="usuario" type="text" class="validate">
                <label for="email">Usuario</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input id="contrasena" name="contrasena" type="password" class="validate">
              <label for="password">Contraseña</label>
            </div>
          </div>
          <br>
          <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar</button>
        </form>
        <!--Importar jQuery Antes de materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
        <br><br><br><br><br><br>
        <img src="<?php echo base_url(); ?>images/iuris_proyect_abogados.png" width="219" height="30">
        <script>
          $(document).ready(function(){
          });
        </script>
      </div>
    </div>
  </body>
</html>