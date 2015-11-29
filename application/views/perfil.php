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

    <!--Editor de Texto-->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    
  </head>

<body>

  <!--Boton/Barra de Herramientas-->
  <div class="fixed-action-btn" style="bottom: 50px; right: 24px;">
    <a class="btn-floating btn-large red"><i class="large material-icons">settings</i></a>

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
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
    
      <div class="input-field">
        <input id="search" type="search" required>
        <label for="search"><i class="material-icons">search</i></label>
      </div>
    
    </div>
  </nav>

  <!--Editor de Texto-->
  <br> <br>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h1>Mis Datos</h1>
        <form method="post" name="perfil" id="perfil" action="<?php echo base_url(); ?>Welcome/editarPerfil"><br>
          <!--Nombre-->
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" id="nombre" name="nombre" value="<?php echo $data->nombresUsuario; ?>">
              <label for="nombre">Nombres:</label>
            </div>

            <!--Número de tarjeta Profesional-->
            <div class="input-field col s4">
              <i class="material-icons prefix">picture_in_picture</i>
              <input type="text" id="apellido" name="tarjeta" value="<?php echo $data->tarjetaProfesionalUsuario; ?>">
              <label for="nombre">Número de tarjeta Profesional:</label>
            </div>

            <!--PBX-->
            <div class="input-field col s4">
              <i class="material-icons prefix">phone_iphone</i>
              <input type="text" id="correo" name="celular" value="<?php echo $data->celularUsuario; ?>">
              <label for="nombre">Celular:</label>
            </div>

            <!--DIrección-->
            <div class="input-field col s4">
              <i class="material-icons prefix">home</i>
              <input type="text" id="correo" name="direccion" value="<?php echo $data->direccionUsuario; ?>">
              <label for="nombre">Dirección:</label>
            </div>

            <!--Email-->
            <div class="input-field col s4">
              <i class="material-icons prefix">mail</i>
              <input type="text" id="correo" name="correo" value="<?php echo $data->correoUsuario; ?>">
              <label for="nombre">Correo:</label>
            </div>

            <!--Fecha de Nacimiento-->
            <div class="input-field col s4">
              <i class="material-icons prefix">grid_on</i>
              <input type="date" id="correo" class="datepicker" name="fechaNacimiento" value="<?php echo $data->fechaNacimientoUsuario; ?>">
              <label for="correo">Fecha de Nacimiento:</label>              
            </div>

            <!--Descripción del perfil-->
            <div class="input-field col s12">
              <i class="material-icons prefix">school</i>
              <textarea id="textarea1" class="materialize-textarea" length="120" name="perfil"><?php echo $data->descripcionUsuario; ?></textarea>
              <label for="textarea1">Mi perfil</label>
            </div>
          </div>
        
      </div>

      <!--Menu Selección-->
      <div class="input-field col s4">
        <select>
          <option value="0"></option>
          <option value="1">C.C</option>
          <option value="2">NIT</option>
        </select>
        <label>Tipo Documento</label>
      </div>

      <!--Número de Razon Social-->
      <div class="input-field col s4">
        <i class="material-icons prefix"></i>
        <label for="textarea">Número de Identificación</label>
        <input type="text" id="razón social" name="identificacion" value="<?php echo $data->identificacionUsuario; ?>">
      </div>
            
      <!--Menu Selección-->
      <div class="input-field col s4">
        <select>
          <option value="0"></option>
          <option value="1">Común</option>
          <option value="2">Simplificado</option>
        </select>
        <label>Tipo de Regimen</label>
      </div>

      <!--Datos de Selección-->
      <!--Valor de la Hora-->
      <div class="input-field col s6">
        <select>
          <option value="0"></option>
          <option value="1">Civil</option>
          <option value="2">...</option>
        </select>
        <label for="nombre">Área del Derecho a Desempeñar:</label>
      </div>

      <!--Valor de la Hora-->
      <div class="input-field col s6">
        <i class="material-icons prefix">timer</i>
        <input type="text" id="correo" name="valor" value="<?php echo $data->valorHoraUsuario; ?>">
        <label for="nombre">Valor de la Hora:</label>
      </div>
                
      <!--Botón Guardar-->
      <button class="btn waves-effect waves-light" type="submit" name="action">Guardar</button>
      
      <!-- Boton Alerta -->
      <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Términos Legales <i class="material-icons">info_outline</i></a>
    </form>
      <!-- Estructura -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Términos Legales</h4>
          <p>Ingresar el texto</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agregar</a>
        </div>
      </div>
      <br><br><br><br>

      <!--Importar jQuery Antes de materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>
      <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap-markdown.js"></script>
      <script>
        $("#texteditor").markdown({autofocus:false,savable:false})
      </script>


      <!--Cargar Aechivos js-->
      <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>js/materialize.min.js"></script>

      <!--Importar jQuery Antes de materialize.js-->
      <script>
        $(document).ready(function(){
          $('select').material_select();
          $('.datepicker').pickadate();
          $('.fixed-action-btn').openFAB();
          $('.fixed-action-btn').closeFAB();
          $('.modal-trigger').leanModal();
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
        </div>
      </div>   
    </footer>
  </body>
</html>