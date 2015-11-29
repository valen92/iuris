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
        <li><a class="btn-floating red" href="<?php echo base_url(); ?>Welcome/nuevoProceso"><i class="material-icons">description</i></i></a></li>
        <li><a class="btn-floating red darken-1" href="<?php echo base_url(); ?>Welcome/verTerceros"><i class="material-icons">perm_contact_calendar</i></a></li>
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

    <!--Editor de Texto-->
    <br> <br>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1>Proceso</h1>
          <form method="post" name="proceso" id="proceso" action="<?php echo base_url(); ?>Welcome/guardarNuevoProceso"><br>

            <!--Cliente-->
            <div class="row">
              
              <div class="input-field col s6">
                <select name="tercero">
                  <?php foreach ($data as $fila) { ?>
                    <option value="<?=$fila->idTercero?>"><?=$fila->nombresTercero?></option>
                  <?php } ?>
                </select>
                <label for="nombre">Cliente:</label>
              </div>

              <!--Area del Derecho-->
              <div class="input-field col s6">
                <select name="derecho">
                    <option value="1">Derecho Constitucional</option>
                    <option value="2">Derecho Administrativo</option>
                    <option value="3">Derecho Penal</option>
                    <option value="4">Derecho Procesal Administrativo</option>
                    <option value="5">Derecho Internacional Público</option>
                    <option value="6">Derecho Civil</option>
                    <option value="7">Derecho de familia</option>
                    <option value="8">Derecho Sucesorio</option>
                    <option value="9">Derecho Comercial</option>
                    <option value="10">Derecho Laboral</option>
                    <option value="11">Derecho de la Seguridad Social</option>
                    <option value="12">Derecho Internacional Privado</option>
                    <option value="13">Derecho ambiental y de los recursos naturales</option>
                    <option value="14">Derecho Bancario</option>
                    <option value="15">Derecho de la negociación y de la mediación</option>
                    <option value="16">Derecho empresario</option>
                    <option value="17">Derecho Agrario</option>
                  </select>
                <label for="nombre">Área del Derecho:</label>
              </div>


              <!--Area del Derecho-->
              <div class="input-field col s12">
                <i class="material-icons prefix">widgets</i>
                <textarea id="textarea1" class="materialize-textarea" length="120" name="problema"></textarea>
                <label for="nombre">Procesos:</label>
              </div>

              <!--Descripción del perfil-->
              <div class="input-field col s12">
                <i class="material-icons prefix">blur_on</i>
                <textarea id="textarea1" class="materialize-textarea" length="120" name="definicion"></textarea>
                <label for="textarea1">Definición</label>
              </div>

              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">timer</i>
                  <input type="text" id="nombre" name="tiempo">
                  <label for="nombre">Tiempo:</label>
                </div>                    
              </div>
           
            </div>
            <!-- Boton Guardar -->
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar</button>
          </form>

          <form method="post" action="<?=base_url()?>Welcome/generar"/>
            <button class="btn waves-effect waves-light" type="submit" name="action">Factura</button>
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
          </div>
        </footer>
      </div>
    </footer>
  </body>
</html>